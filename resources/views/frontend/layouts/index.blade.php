@include('frontend.layouts.header')

@section('body')
<body>
@show

    @include('frontend.layouts.header')
      
        @yield('content')
        @include('frontend.layouts.footer')
    @include('layouts.vendor-scripts')
</body>

</html>