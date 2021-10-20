@extends('frontend.layouts.index')

@section('css')
    
@endsection
@section('content')
      <!--▼content▼-->
      <div id="content">
         <br>
         <h3>企業情報</h3>
         <div id="sentence">
            <table>
               <tr>
                  <th>会社名</th>
               </tr>
               <tr>
                  <td>株式会社SSジャパン</td>
               </tr>
               <tr>
                  <th>運営責任者</th>
               </tr>
               <tr>
                  <td>大橋 新示</td>
               </tr>
               <tr>
                  <th>所在地</th>
               </tr>
               <tr>
                  <td>〒444-3626 愛知県岡崎市桜井寺町川向39-1</td>
               </tr>
               <tr>
                  <th>事業内容</th>
               </tr>
               <tr>
                  <td>中古トラック、建設機械の売買及び輸出。ネットトレーデイングの運営。</td>
               </tr>
               <tr>
                  <th>古物営業法に基づく表示</th>
               </tr>
               <tr>
                  <td>愛知県公安委員会許可&nbsp;第542771702500号</td>
               </tr>
            </table>
            <br>
         </div>
         <br>
         <br>
         <br>
         <div id="center">
            <input type="button" name="back_top" onclick="location.href='index.php'" value="トップページへ戻る">
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