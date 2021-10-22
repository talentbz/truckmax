<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
   <head>
<!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-210743207-1"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());

         gtag('config', 'UA-210743207-1');
      </script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-7JTFC7X52S"></script>
      <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-7JTFC7X52S');
      </script>
      <title>@yield('title','トラック　買取り | の買取りトラック・ダンプ | Truck Max')</title>
      <meta name="google-site-verification" content="rHQ5YbgYo2VkvhEARL87Bmsh2PsHAo6T7aZZz69HxFk" />
      <meta name="keywords" content="@yield('meta_keywords','トラック　買取り')">
      <meta name="description" content="@yield('meta_description','もし あなたが 欲しい には トラック　買取り トラックマックスは、お客様から買い取った大切なトラックを、メカニックによる点検・修理を行い、次に必要とするお客様に安全にお渡しする日本一の工場です。')">
      <link rel="canonical" href="{{url()->current()}}"/>
      <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="トラック買取、ダンプ買取、故障車買取、事故車買取、">
      <meta name="description" content="トラック、ダンプの買取をお考えなら、トラックマックスにご相談ください。日本全国どこでも無料で査定いたします。事故車、故障車でも高額買取に挑戦します。">
      <meta http-equiv="Content-Style-Type" content="text/css" />
      <meta http-equiv="Content-Script-Type" content="text/javascript" />
      <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">
      <link rel="stylesheet" href="{{ URL::asset('/assets/frontend/pages/style.css') }}" type="text/css" />
      @yield('css') 
      <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
      
      <!-- <title>トラック、ダンプの買取なら、トラックマックスにご相談ください。</title> -->
      <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
      <!-- Global site tag (gtag.js) - Google Ads: 970831163 -->
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-210743207-1"></script>
      <script async src="https://www.googletagmanager.com/gtag/js?id=AW-970831163"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'AW-970831163');
      </script>
        <meta charset="utf-8" />
        <title> @yield('title') | Skote - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico')}}">
        @include('layouts.head-css')
  </head>

    @yield('body')
    
    @yield('content')

    @include('layouts.vendor-scripts')
    </body>
</html>