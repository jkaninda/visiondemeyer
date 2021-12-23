@include('layouts.header')
@include('layouts.navbar')
@if (Route::currentRouteName() !='home') 
@include('layouts.inner-page-header')   
@else  
@include('layouts.hero')
@endif
@yield('content')
@include('layouts.footer')