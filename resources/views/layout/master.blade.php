@include('layout.header')
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        @include('layout.sidebar')
        <!-- top navigation -->
        <div class="top_nav">
            @include('layout.navbar')
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            @yield('content')
        </div>
        <!-- /page content -->

    </div>
</div>
@include('layout.footer')
</body>
</html>
