@extends('frontend.layouts.index')
@section('content')
      <!--▼content▼-->
      <div id="content">
         <br>
         <h2>個人情報保護法新</h2>
         <div id="sentence">
            当社は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。
         </div>
         <br>
         <h2>個人情報の管理</h2>
         <div id="sentence">
            当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。
         </div>
         <br>
         <h2>個人情報の利用目的</h2>
         <div id="sentence">
            本ウェブサイトでは、お客様からのお問い合わせ時に、お名前、e-mailアドレス、電話番号等の個人情報をご登録いただく場合がございますが、これらの個人情報はご提供いただく際の目的以外では利用いたしません。
            お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。
         </div>
         <br>
         <h2>個人情報の第三者への開示・提供の禁止</h2>
         <div id="sentence">
            当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。
            ・お客さまの同意がある場合
            ・お客さまが希望されるサービスを行なうために当社が業務を委託する業者に対して開示する場合
            ・法令に基づき開示することが必要である場合
         </div>
         <br>
         <h2>個人情報の安全対策</h2>
         <div id="sentence">
            当社は、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。
         </div>
         <br>
         <h2>ご本人の照会</h2>
         <div id="sentence">
            お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。
         </div>
         <br>
         <h2>法令、規範の遵守と見直し</h2>
         <div id="sentence">
            当社は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。
         </div>
         <br>
         <br>
         <br>
         <div id="sentence">
            株式会社SSジャパン<br>
            〒444-3626<br>
            愛知県岡崎市桜井寺町川向39-1
         </div>
         <br>
         <br>
         <br>
         <input type="button" name="back_top" onclick="location.href='index.php'" value="トップページへ戻る">
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
               <a href="{{route('form')}}">かんたん入力フォーム</a>
               <span>必要事項を入力して送信</span>
            </div>
         </div>
         <!--▲フォーム問合せ▲-->
         <br>
         <br>
      </div>
      <!--▲content▲-->
@endsection