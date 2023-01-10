@include('vetting.layout.include.head')
<body>
    <div class="row w-100 h-100 mx-0">
@include('vetting.layout.include.sidebar')
<div class="col-lg-10 px-0 dashboard-panel-container">
@include('vetting.layout.include.nav')
@yield('content')
@include('vetting.layout.include.footer')