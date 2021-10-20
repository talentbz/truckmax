@extends('frontend.layouts.index')

@section('css')
    
@endsection
@section('content')

<?php
//画像保存先の設定
define( "FILE_DIR", "img/attach_photo/");

// 変数の初期化
$page_flag = 0;
$clean = array();
$error = array();

// サニタイズ
if( !empty($_POST) ) {

	foreach( $_POST as $key => $value ) {
		$clean[$key] = htmlspecialchars( $value, ENT_QUOTES);
	} 
}

if( !empty($clean['btn_confirm']) ) {

	$error = validation($clean);

	// ファイルのアップロード
	if( !empty($_FILES['attachment_file']['tmp_name']) ) {

		$upload_res = move_uploaded_file( $_FILES['attachment_file']['tmp_name'], FILE_DIR.$_FILES['attachment_file']['name']);

		if( $upload_res !== true ) {
			$error[] = 'ファイルのアップロードに失敗しました。';
		} else {
			$clean['attachment_file'] = $_FILES['attachment_file']['name'];
		}
	}

	if( empty($error) ) {

		$page_flag = 1;

		// セッションの書き込み
		session_start();
		$_SESSION['page'] = true;		
	}

} elseif( !empty($clean['btn_submit']) ) {

	session_start();
	if( !empty($_SESSION['page']) && $_SESSION['page'] === true ) {

		// セッションの削除
		unset($_SESSION['page']);

		$page_flag = 2;

		// 変数とタイムゾーンを初期化
		$header = null;
		$body = null;
		$admin_body = null;
		$auto_reply_subject = null;
		$auto_reply_text = null;
		$admin_reply_subject = null;
		$admin_reply_text = null;
		date_default_timezone_set('Asia/Tokyo');
		
		//日本語の使用宣言
		mb_language("ja");
		mb_internal_encoding("UTF-8");
	
		$header = "MIME-Version: 1.0\n";
		$header = "Content-Type: multipart/mixed;boundary=\"__BOUNDARY__\"\n";
		$header .= "From:トラックマックス事務局 <requ@truckmax.jp>\n";
		$header .= "Reply-To: トラックマックス事務局 <requ@truckmax.jp>\n";
	
		// 件名を設定
		$auto_reply_subject = '査定申込みいただき誠にありがとうございます。';
	
		// 本文を設定
		$auto_reply_text = "この度は、査定申込みいただき誠にありがとうございます。下記の内容で受付けいたしました。24時間以内に査定スタッフよりご連絡いたします。\n\n";
		$auto_reply_text .= "申込み日時：" . date("Y-m-d H:i") . "\n";
		$auto_reply_text .= "お名前：" . $clean['your_name'] . "\n";
		$auto_reply_text .= "担当者様：" . $clean['your_name_2'] . "\n";
		
		
		$auto_reply_text .= "ご住所：" . $clean['place'] . "\n";
		
		
		$auto_reply_text .= "お電話番号：" . $clean['your_tel'] . "\n";
		$auto_reply_text .= "メールアドレス：" . $clean['email'] . "\n";
		$auto_reply_text .= "機械名：" . $clean['machine_name'] . "\n";
		$auto_reply_text .= "メーカー名：" . $clean['maker_name'] . "\n";
		$auto_reply_text .= "型式：" . $clean['machine_type'] . "\n";
		$auto_reply_text .= "稼働時間：" . $clean['use_time'] . "\n";
		
		if( $clean['broken'] === "yes" ) {
			$auto_reply_text .= "故障ヶ所：有り\n";
		} else {
			$auto_reply_text .= "故障ヶ所：無し\n";
		}
        
		$auto_reply_text .= "その他ご相談内容内容：" . nl2br($clean['other']) . "\n\n";
		$auto_reply_text .= "【トラックマックス事務局】";
		
		// テキストメッセージをセット
		$body = "--__BOUNDARY__\n";
		$body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n";
		$body .= $auto_reply_text . "\n";
		$body .= "--__BOUNDARY__\n";
	
		// ファイルを添付
		if( !empty($clean['attachment_file']) ) {
			$body .= "Content-Type: application/octet-stream; name=\"{$clean['attachment_file']}\"\n";
			$body .= "Content-Disposition: attachment; filename=\"{$clean['attachment_file']}\"\n";
			$body .= "Content-Transfer-Encoding: base64\n";
			$body .= "\n";
			$body .= chunk_split(base64_encode(file_get_contents(FILE_DIR.$clean['attachment_file'])));
			$body .= "--__BOUNDARY__\n";
		}
	
		// 自動返信メール送信
		mb_send_mail( $clean['email'], $auto_reply_subject, $body, $header);
	
		// 運営側へ送るメールの件名
		$admin_reply_subject = "査定申込みを受付けしました。";
	
		// 本文を設定
		$admin_reply_text = "下記の内容で査定申込みがありました。\n\n";
		$admin_reply_text .= "採用申込み日時：" . date("Y-m-d H:i") . "\n";
		$admin_reply_text .= "お名前：" . $clean['your_name'] . "\n";
		$admin_reply_text .= "担当者様：" . $clean['your_name_2'] . "\n";
		
		
		$admin_reply_text .= "ご住所：" . $clean['place'] . "\n";
		
		
		$admin_reply_text .= "お電話番号：" . $clean['your_tel'] . "\n";
		$admin_reply_text .= "メールアドレス：" . $clean['email'] . "\n";
		$admin_reply_text .= "機械名：" . $clean['machine_name'] . "\n";
		$admin_reply_text .= "メーカー名：" . $clean['maker_nameb'] . "\n";
		$admin_reply_text .= "型式：" . $clean['machine_type'] . "\n";
		$admin_reply_text .= "稼働時間：" . $clean['use_time'] . "\n";
	
		if( $clean['broken'] === "yes" ) {
			$admin_reply_text .= "故障ヶ所：有り\n";
		} else {
			$admin_reply_text .= "故障ヶ所：無し\n";
		}
	 
		$admin_reply_text .= "その他ご相談内容：" . nl2br($clean['other']) . "\n\n";
		
		// テキストメッセージをセット
		$body = "--__BOUNDARY__\n";
		$body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n";
		$body .= $admin_reply_text . "\n";
		$body .= "--__BOUNDARY__\n";
		
		// ファイルを添付
		if( !empty($clean['attachment_file']) ) {		
			$body .= "Content-Type: application/octet-stream; name=\"{$clean['attachment_file']}\"\n";
			$body .= "Content-Disposition: attachment; filename=\"{$clean['attachment_file']}\"\n";
			$body .= "Content-Transfer-Encoding: base64\n";
			$body .= "\n";
			$body .= chunk_split(base64_encode(file_get_contents(FILE_DIR.$clean['attachment_file'])));
			$body .= "--__BOUNDARY__\n";
		}

		// 管理者へメール送信
		mb_send_mail( 'requ@truckmax.jp', $admin_reply_subject, $body, $header);
		
	} else {
		$page_flag = 0;
	}	
}

function validation($data) {

	$error = array();

	// 氏名のバリデーション
	if( empty($data['your_name']) ) {
		$error[] = "「お名前」は必ず入力してください。";

	} elseif( 30 < mb_strlen($data['your_name']) ) {
		$error[] = "「お名前」は30文字以内で入力してください。";
	}
	
	// 住所のバリデーション
	if( empty($data['place']) ) {
		$error[] = "「ご住所」は必ず選択してください。";
	}
	
	// 電話番号のバリデーション
	if( empty($data['your_tel']) ) {
		$error[] = "「お電話番号」は必ず入力してください。";

	} elseif( 20 < mb_strlen($data['your_tel']) ) {
		$error[] = "「お電話番号」は20文字以内で入力してください。";
	}

	// メールアドレスのバリデーション
	if( empty($data['email']) ) {
		$error[] = "「メールアドレス」は必ず入力してください。";

	} elseif( !preg_match( '/^[0-9a-z_.\/?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$/', $data['email']) ) {
		$error[] = "「メールアドレス」は正しい形式で入力してください。";
	}
	
	//機械名のバリデーション
	if( empty($data['machine_name']) ) {
		$error[] = "「機械名」は必ず入力してください。";

	} elseif( 10 < mb_strlen($data['machine_name']) ) {
		$error[] = "「機械名」は10文字以内で入力してください。";
	}
	
	//メーカー名のバリデーション
	if( empty($data['maker_name']) ) {
		$error[] = "「メーカー名」は必ず入力してください。不明の場合は不明と入力ください。";

	} elseif( 20 < mb_strlen($data['maker_name']) ) {
		$error[] = "「メーカー名」は20文字以内で入力してください。不明の場合は不明と入力ください。";
	}
	
	//型式のバリデーション
	if( empty($data['machine_type']) ) {
		$error[] = "「型式」は必ず入力してください。不明の場合は不明と入力ください。";

	} elseif( 50 < mb_strlen($data['machine_type']) ) {
		$error[] = "「型式」は50文字以内で入力してください。";
	}
	
	//稼働時間のバリデーション
	if( empty($data['use_time']) ) {
		$error[] = "「稼働時間」は必ず入力してください。不明の場合は不明と入力ください。";

	} elseif( 20 < mb_strlen($data['use_time']) ) {
		$error[] = "「稼働時間」は20文字以内で入力してください。";
	}
	

	// 故障ヶ所のバリデーション
	if( empty($data['broken']) ) {
		$error[] = "「故障ヶ所」の有無は必ず入力してください。";

	} elseif( $data['broken'] !== 'yes' && $data['broken'] !== 'no' ) {
		$error[] = "「故障ヶ所」の有無は必ず入力してください。";
	}


	return $error;
}
?>
      <!--▼content▼-->
      <div id="content">
         <!--▼確認画面▼-->
         <div id="form">
            <?php if( $page_flag === 1 ): ?>
            <form method="post" action="">
               <div class="element_wrap">
                  <label>お名前/会社名</label>
                  <p><?php echo $clean['your_name']; ?></p>
               </div>
               <div class="element_wrap">
                  <label>担当者様のお名前</label>
                  <p><?php echo $clean['your_name_2']; ?></p>
               </div>
               <div class="element_wrap">
                  <label>ご住所</label>
                  <p><?php echo $clean['place']; ?></p>
               </div>
               <div class="element_wrap">
                  <label>お電話番号</label>
                  <p><?php echo $clean['your_tel']; ?></p>
               </div>
               <div class="element_wrap">
                  <label>メールアドレス</label>
                  <p><?php echo $clean['email']; ?></p>
               </div>
               <div class="element_wrap">
                  <label>機械名</label>
                  <p><?php echo $clean['machine_name']; ?></p>
               </div>
               <div class="element_wrap">
                  <label>メーカー名</label>
                  <p><?php echo $clean['maker_name']; ?></p>
               </div>
               <div class="element_wrap">
                  <label>型式</label>
                  <p><?php echo $clean['machine_type']; ?></p>
               </div>
               <div class="element_wrap">
                  <label>稼働時間</label>
                  <p><?php echo $clean['use_time']; ?></p>
               </div>
               <div class="element_wrap">
                  <label>故障の有無</label>
                  <p><?php if( $clean['broken'] === "yes" ){ echo '有り'; }else{ echo '無し'; } ?></p>
               </div>
               <div class="element_wrap">
                  <label>その他ご相談内容</label>
                  <p><?php echo nl2br($clean['other']); ?></p>
               </div>
               <?php if( !empty($clean['attachment_file']) ): ?>
               <div class="element_wrap">
                  <label>写真の添付</label>
                  <p><img src="<?php echo FILE_DIR.$clean['attachment_file']; ?>"></p>
               </div>
               <?php endif; ?>
               <div id="center">
                  <input type="submit" name="btn_back" value="戻る">
                  <input type="submit" name="btn_submit" value="送信">
               </div>
               <input type="hidden" name="your_name" value="<?php echo $clean['your_name']; ?>">
               <input type="hidden" name="your_name_2" value="<?php echo $clean['your_name_2']; ?>">
               <input type="hidden" name="place" value="<?php echo $clean['place']; ?>">
               <input type="hidden" name="your_tel" value="<?php echo $clean['your_tel']; ?>">
               <input type="hidden" name="email" value="<?php echo $clean['email']; ?>">
               <input type="hidden" name="machine_name" value="<?php echo $clean['machine_name']; ?>">
               <input type="hidden" name="maker_name" value="<?php echo $clean['maker_name']; ?>">
               <input type="hidden" name="machine_type" value="<?php echo $clean['machine_type']; ?>">
               <input type="hidden" name="use_time" value="<?php echo $clean['use_time']; ?>">
               <input type="hidden" name="broken" value="<?php echo $clean['broken']; ?>">
               <input type="hidden" name="other" value="<?php echo $clean['other']; ?>">
               <?php if( !empty($clean['attachment_file']) ): ?>
               <input type="hidden" name="attachment_file" value="<?php echo $clean['attachment_file']; ?>">
               <?php endif; ?>
            </form>
            <?php elseif( $page_flag === 2 ): ?>
            <p>送信が完了しました。</p>
            <?php else: ?>
            <?php if( !empty($error) ): ?>
            <ul class="error_list">
               <?php foreach( $error as $value ): ?>
               <li><?php echo $value; ?></li>
               <?php endforeach; ?>
            </ul>
            <?php endif; ?>
         </div>
         <!--▲確認画面▲-->
         <h3>③&nbsp入力フォームから査定を申込む&nbsp<font size="6" color="red">5分</font>ほど</h3>
         <br>
         <br>
         <!--▼申込フォーム▼-->
         <div id="form">
            <form method="post" action="" enctype="multipart/form-data">
               <div class="element_wrap">
                  <label>お名前/会社名&nbsp;(<font color="red">必須</font>)</label>
                  <input type="text" name="your_name" placeholder="例)重機太郎" value="<?php if( !empty($clean['your_name']) ){ echo $clean['your_name']; } ?>">
               </div>
               <div class="element_wrap">
                  <label>担当者様のお名前</label>
                  <input type="text" name="your_name_2" value="<?php if( !empty($clean['your_name_2']) ){ echo $clean['your_name_2']; } ?>">
                  <br><font color="gray" font size="2">※法人の場合は担当者様のお名前を入力。</font>
               </div>
               <div class="element_wrap">
                  <label>ご住所</label>
                  <select name="place">
                     <option value="" selected>都道府県</option>
                     <option value="青森県">青森県</option>
                     <option value="岩手県">岩手県</option>
                     <option value="宮城県">宮城県</option>
                     <option value="秋田県">秋田県</option>
                     <option value="山形県">山形県</option>
                     <option value="福島県">福島県</option>
                     <option value="茨城県">茨城県</option>
                     <option value="栃木県">栃木県</option>
                     <option value="群馬県">群馬県</option>
                     <option value="埼玉県">埼玉県</option>
                     <option value="千葉県">千葉県</option>
                     <option value="東京都">東京都</option>
                     <option value="神奈川県">神奈川県</option>
                     <option value="新潟県">新潟県</option>
                     <option value="富山県">富山県</option>
                     <option value="石川県">石川県</option>
                     <option value="福井県">福井県</option>
                     <option value="山梨県">山梨県</option>
                     <option value="長野県">長野県</option>
                     <option value="岐阜県">岐阜県</option>
                     <option value="静岡県">静岡県</option>
                     <option value="愛知県">愛知県</option>
                     <option value="三重県">三重県</option>
                     <option value="滋賀県">滋賀県</option>
                     <option value="京都府">京都府</option>
                     <option value="大阪府">大阪府</option>
                     <option value="兵庫県">兵庫県</option>
                     <option value="奈良県">奈良県</option>
                     <option value="和歌山県">和歌山県</option>
                     <option value="鳥取県">鳥取県</option>
                     <option value="島根県">島根県</option>
                     <option value="岡山県">岡山県</option>
                     <option value="広島県">広島県</option>
                     <option value="山口県">山口県</option>
                     <option value="徳島県">徳島県</option>
                     <option value="香川県">香川県</option>
                     <option value="愛媛県">愛媛県</option>
                     <option value="高知県">高知県</option>
                     <option value="福岡県">福岡県</option>
                     <option value="佐賀県">佐賀県</option>
                     <option value="長崎県">長崎県</option>
                     <option value="熊本県">熊本県</option>
                     <option value="大分県">大分県</option>
                     <option value="宮崎県">宮崎県</option>
                     <option value="鹿児島県">鹿児島県</option>
                  </select>
               </div>
               <div class="element_wrap">
                  <label>お電話番号&nbsp;(<font color="red">必須</font>)</label>
                  <input type="text" name="your_tel" placeholder="03-○○○○-△△△△" value="<?php if( !empty($clean['your_tel']) ){ echo $clean['your_tel']; } ?>">
               </div>
               <div class="element_wrap">
                  <label>メールアドレス&nbsp;(<font color="red">必須</font>)</label>
                  <input type="text" name="email"  placeholder="○○○@□□□.co.jp" value="<?php if( !empty($clean['email']) ){ echo $clean['email']; } ?>" >
               </div>
               <div class="element_wrap">
                  <label>機械名&nbsp;(<font color="red">必須</font>)</label>
                  <input type="text" name="machine_name"  placeholder="例)トラック " value="<?php if( !empty($clean['machine_name']) ){ echo $clean['machine_name']; } ?>" >
               </div>
               <div class="element_wrap">
                  <label>メーカー名&nbsp;(<font color="red">必須</font>)</label>
                  <input type="text" name="maker_name" placeholder="例)トヨタ" value="<?php if( !empty($clean['maker_name']) ){ echo $clean['maker_name']; } ?>">
                  <br><font color="gray" font size="2">※不明の場合は「不明」とご記入ください。</font>
               </div>
               <div class="element_wrap">
                  <label>型式&nbsp;(<font color="red">必須</font>)</label>
                  <input type="text" name="machine_type" placeholder="例)、、、不明"value="<?php if( !empty($clean['machine_type']) ){ echo $clean['machine_type']; } ?>">
                  <br><font color="gray" font size="2">※不明の場合は「不明」とご記入ください。</font>
               </div>
               <div class="element_wrap">
                  <label>稼働時間&nbsp;(<font color="red">必須</font>)</label>
                  <input type="text" name="use_time" placeholder="例)100.000km、不明" value="<?php if( !empty($clean['use_time']) ){ echo $clean['use_time']; } ?>">
                  <br><font color="gray" font size="2">※不明の場合は「不明」とご記入ください。</font>
               </div>
               <div class="element_wrap">
                  <label>故障の有無&nbsp;(<font color="red">必須</font>)</label><br>
                  <label for="contact_tel"><input id="contact_tel" type="radio" name="broken" value="yes" <?php if( !empty($clean['broken']) && $clean['broken'] === "yes" ){ echo 'checked'; } ?>>有り</label>
                  <label for="contact_mail"><input id="contact_tel" type="radio" name="broken" value="no" <?php if( !empty($clean['broken']) && $clean['broken'] === "no" ){ echo 'checked'; } ?>>無し</label>
               </div>
               <div class="element_wrap">
                  <label>その他ご相談内容<br>(故障ヶ所等)</label>
                  <textarea name="other"><?php if( !empty($clean['other']) ){ echo $clean['other']; } ?></textarea>
               </div>
               <!--
                  <div class="element_wrap">
                  	<label>機械写真の添付</label>
                  	<input type="file" name="attachment_file">
                  </div>
                  -->
               <br>
               <div id="center">
                  <input type="submit" name="btn_confirm" value="入力内容を確認する">
               </div>
               <br>
               <br>
            </form>
            <?php endif; ?>
         </div>
         <!--▲申込フォーム▲-->
         <br>
         <br>
         <br>
         <div id="center">
            <input type="button" name="back_top" onclick="location.href='index.php'" value="トップページへ戻る" >
         </div>
         <br>
         <br>
         <br>
         <!--▼電話問合せ▼-->
         <div class="contact_2">
            <div id="tel_2">
               <p>お電話でご相談はこちらから</p>
               <a href="tel:0120984165">0120-984-165</a>
               <span>窓口: 平日・土&nbsp;9:00-19:00</span>
            </div>
         </div>
         <!--▲電話問合せ▲-->
         <br>
         <br>
         <!--▼メール問合せ▼-->
         <div class="contact_mail">
            <div id="mail">
               <p>メールでご相談はこちらから</p>
               <a href="mailto:inqu@truckmax.jp">inqu@truckmax.jp</a>
               <span>24時間受付中</span>
            </div>
         </div>
         <!--▲メール問合せ▲-->
         <br>
         <br>
         <!--▼LINE問合せ▼-->
         <div class="contact_line">
            <div id="line">
               <p>LINEでご相談はこちら</p>
               <a href="https://lin.ee/F3bBaNj"><img src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png" alt="友だち追加" height="36" border="0"></a>
               <span>友達追加をクリック</span>
            </div>
         </div>
         <!--▲LINE問合せ▲-->
         <br>
         <br>
         <!--▼フォーム問合せ▼-->
         <div class="contact_form">
            <div id="form_1">
               <p>入力フォームでご相談はこちらから</p>
               <a href="form.php">かんたん入力フォーム</a>
               <span>必要事項を入力して送信するだけ</span>
            </div>
         </div>
         <!--▲フォーム問合せ▲-->
         <br>
         <br>
      </div>
      <!--▲content▲-->
@endsection