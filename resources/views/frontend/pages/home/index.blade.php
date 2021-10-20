@extends('frontend.layouts.index')

@section('css')
    
@endsection
@section('content')
    <!--▼content▼-->
      <div id="content">
         <!--▼メイン画像▼-->
         <!--▼for PC▼-->
         <div class="catchtitle_pc" style="background-image:url({{asset('images/frontend/img/head_main_1.png')}}">
            <br>
            <p>
               <font color="#ffff00" size="11">トラック・ダンプの買取りなら
               <br>
               <font color="red">トラックマックス</font>におまかせ下さい！</font>
            </p>
            <br>
            <p>事故車・故障車も高価買取に挑戦中！</p>
            <div id="camp">
               <p>
                  <font color="red" size="9">5</font>万円キャッシュバック
                  <br>
                  キャンペーン中！
               </p>
            </div>
            <br>
            <div id="catch_1">
               <ul>
                  <li>
                     <p>査定無料</p>
                  </li>
                  <li>
                     <p>書類手続無料</p>
                  </li>
                  <li>
                     <p>引取無料</p>
                  </li>
               </ul>
            </div>
            <div id="catch_1">
               <ul>
                  <li>
                     <p>故障車OK</p>
                  </li>
                  <li>
                     <p>故障車OK</p>
                  </li>
                  <li>
                     <p>不動車OK</p>
                  </li>
               </ul>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
         </div>
         <!--▲for PC▲-->
         <!--▼for Phone▼-->
         <div class="catchtitle_sp">
            <br>
            <p>トラック・ダンプの買取りなら<br>
               トラックマックスにおまかせ下さい！
            </p>
            <br>
            <div id="catch_1">
               <ul>
                  <li>
                     <p>故障車OK</p>
                  </li>
                  <li>
                     <p>故障車OK</p>
                  </li>
                  <li>
                     <p>不動車OK</p>
                  </li>
               </ul>
            </div>
            <br>
            <p>5万円キャッシュバック<br>
               キャンペーン中！
            </p>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
         </div>
         <!--▲for Phone▲-->
         <!--▲メイン画像▲-->
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
         <h2>
            <span class="text_1">安心・安全なトラックを</span>
            <span class="text_2">次へつなぐ</span><br>
            <span class="text_3">トラックマックスは買取したトラックの</span>
            <span class="text_4">リサイクル化に挑んでいます</span>
         </h2>
         <div id="sentence_1">
            トラックマックスではトラックの日本全国でトラックの買取をしています。<br>
            自社工場で整備士による点検・修理を行い、お客様から買取りさせていただいた大切なトラックを、
            次に必要としているお客様へ安全に引き継いでいます。<br>
            故障車から事故車まで、どんな状態のトラックも、必要としているお客様へ安全な状態で引継ぐ、それが私たち「トラックマックス」です。<br>
            <br>
            ぜひ、あなたの大切なトラックをトラックマックスにお任せください。
         </div>
         <br>
         <div style="text-align:center;">
            <img src= "{{asset('/images/frontend/img/recycle_1.png')}}">
         </div>
         <br>
         <br>
         <br>
         <h2>
            <span class="text_1">費用負担いっさい無し</span><br>
            <span class="text_3">トラックマックスの買取にはいっさいお客様に</span>
            <span class="text_4">費用負担はありません</span>
         </h2>
         <br>
         <br>
         <br>
         <div id="point">
            <ul>
               <li>
                  <p>買取査定無料</p>
                  <img src= "{{asset('/images/frontend/img/satei_2.png')}}">
                  <div align="left">買取査定に一切費用はかかりません。ご安心ください。</div>
               </li>
               <li>
                  <p>書類手続無料</p>
                  <img src= "{{asset('/images/frontend/img/meigi_1.png')}}">
                  <div align="left">名義変更など書類手続きはいっさい費用はかかりません。</div>
               </li>
               <li>
                  <p>引取費用無料</p>
                  <img src= "{{asset('/images/frontend/img/hikitori_1.png')}}">
                  <div align="left">買取が成立後お車の引取りには一切費用はかかりません。</div>
               </li>
            </ul>
         </div>
         <br>
         <br>
         <br>
         <h2>
            <span class="text_1">迅速な査定・買取</span><br>
            <span class="text_3">お客様のニーズに合わせて</span>
            <span class="text_4">査定・買取いたします</span>
         </h2>
         <br>
         <br>
         <br>
         <div id="point">
            <ul>
               <li>
                  <p>即日現金化</p>
                  <img src= "{{asset('/images/frontend/img/genkin_1.png')}}">
                  <div align="left">査定依頼したその日に買取、お支払い、引取り可能。</div>
               </li>
               <li>
                  <p>迅速な査定</p>
                  <img src= "{{asset('/images/frontend/img/jinsoku_1.png')}}">
                  <div align="left">査定依頼いただいた日に概算金額をお伝えいたします</div>
               </li>
               <li>
                  <p>日本全国対応</p>
                  <img src= "{{asset('/images/frontend/img/japan_1.png')}}" width="35%">
                  <div align="left">北海道から沖縄まで日本全国買取いたします</div>
               </li>
            </ul>
         </div>
         <br>
         <br>
         <br>
         <h2>
            <span class="text_1">故障車でも買取可能です</span><br>
            <span class="text_3">どんな状態でも買取対象です、</span>
            <span class="text_4">ご相談ください</span>
         </h2>
         <br>
         <br>
         <br>
         <div id="point">
            <ul>
               <li>
                  <p>故障車OK</p>
                  <img src= "{{asset('/images/frontend/img/mente_1.png')}}">
                  <div align="left">故障車でも買取いたします。ご相談ください。</div>
               </li>
               <li>
                  <p>事故車OK</p>
                  <img src= "{{asset('/images/frontend/img/jiko_1.png')}}">
                  <div align="left">事故車も大歓迎です。ご相談ください。</div>
               </li>
               <li>
                  <p>不動車OK</p>
                  <img src= "{{asset('/images/frontend/img/hudou_1.png')}}">
                  <div align="left">不動車ももちろん買取可能。ご相談ください。</div>
               </li>
            </ul>
         </div>
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
         
         <br>
         <br>
         <h2>
            <span class="text_1">故障車・事故車も</span>
            <span class="text_2">強化買取対象中！</span><br>
            <span class="text_3">故障車・事故車・不動車すべて</span>
            <span class="text_4">査定・買取いたします</span>
         </h2>
         <div id="sentence_1">故障車・故障車・不動車・古い年式、すべて全力で買取いたします。お気軽にご相談ください。</div>
         <!--▼▼故障車買取実績▼▼-->
         <div id="kaitori">
            <ul>
               <li>
                  <img src= "{{asset('/images/frontend/img/broken_1.png')}}">
                  <p>三菱スーパーグレード</p>
                  <p>平成26年</p>
                  <span>買取価格350万円</span>
               </li>
               <li>
                  <img src= "{{asset('/images/frontend/img/broken_2.png')}}">
                  <p>いすゞ GIGA</p>
                  <p>平成29年</p>
                  <span>買取価格450万円</span>
               </li>
               <li>
                  <img src= "{{asset('/images/frontend/img/broken_3.png')}}">
                  <p>日産コンドル</p>
                  <p>平成23年</p>
                  <span>買取価格170万円</span>
               </li>
            </ul>
         </div>
         <!--▲▲故障車買取買取実績▲▲-->
         <br>
         <br>
         <br>
         <!--▼▼買取実績▼▼-->
         <h2>
            <span class="text_1">その他買取実績はこちら</span><br>
            <span class="text_3">どんな形状・状態でも</span>
            <span class="text_4">買取対象です</span>
         </h2>
         <br>
         <div id="kaitori">
            <ul>
               <li>
                  <img src= "{{asset('/images/frontend/img/kaitori_1.JPG')}}">
                  <p>日産クオン</p>
                  <p>平成24年</p>
                  <span>買取価格650万円</span>
               </li>
               <li>
                  <img src= "{{asset('/images/frontend/img/kaitori_2.JPG')}}">
                  <p>三菱スーパーグレード</p>
                  <p>平成13年</p>
                  <span>買取価格360万円</span>
               </li>
               <li>
                  <img src= "{{asset('/images/frontend/img/kaitori_3.JPG')}}">
                  <p>日野プロティア</p>
                  <p>平成25年</p>
                  <span>買取価格750万円</span>
               </li>
               <li>
                  <img src= "{{asset('/images/frontend/img/kaitori_4.JPG')}}">
                  <p>いすゞフォワード</p>
                  <p>平成24年</p>
                  <span>買取価格125万円</span>
               </li>
               <li>
                  <img src= "{{asset('/images/frontend/img/kaitori_5.JPG')}}">
                  <p>いすゞGIGA</p>
                  <p>平成18年</p>
                  <span>買取価格165万円</span>
               </li>
               <li>
                  <img src= "{{asset('/images/frontend/img/kaitori_6.JPG')}}">
                  <p>日産クオン</p>
                  <p>平成18年</p>
                  <span>買取価格145万円</span>
               </li>
            </ul>
         </div>
         <!--▲▲買取実績▲▲-->
         <!--
            <div id="satei_coment">
            査定は無料です！
            </div>
            <div id="satei">
            <img src= "{{asset('/images/frontend/img/satei_1.png" alt="査定のお申込みは様々">
            </div>
            <div id="how_satei">
            査定のお申込み方法は様々
            </div>
            -->
         <br>
         <br>
         <br>
         <h3>①</font>&nbsp電話から査定を申込む</h3>
         <br>
         <br>
         <br>
         <div id="tel_2">
            <p>フリーダイヤル&nbsp;クリックして発信</p>
            <br>
            <a href="tel:0120984165">0120-984-165</a><br>
            <span>窓口: 平日・土&nbsp;9:00-19:00</span>
         </div>
         <br>
         <br>
         <br>
         <h3>②&nbspメールから査定を申込む</h3>
         <br>
         <br>
         <br>
         <div id="tel_2">
            <p>E-Mailアドレスをクリックして発信</p>
            <br>
            <a href="mailto:inqu@truckmax.jp">inqu@truckmax.jp</a><br>
            <span>24時間受付中</span>
         </div>
         <br>
         <br>
         <br>
         <!--
            <h3>③&nbsp入力フォームから査定を申込む&nbsp<font size="6" color="red">5分</font>ほど</h3>
            -->
         <br>
         <br>
         <div id="center">
            <input type="button" name="back_top"  value="トップページへ戻る" >
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
               <p>入力フォームでご相談はこちら</p>
               <a href="#">かんたん入力フォーム</a>
               <span>必要事項を入力して送信</span>
            </div>
         </div>
         <!--▲フォーム問合せ▲-->
         <br>
         <br>
      </div>
      <!--▲content▲-->
@endsection
