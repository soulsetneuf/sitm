<body class="flat-blue">
<div class="app-container expanded">
    <div class="row content-container">
        @include("layouts.navbar")
        @include("layouts.side-menu")
        <!-- Main Content -->
        @include("layouts.content")

    </div>
    @include("layouts.footer")
    <div>
        @include("layouts.javascript")
        @yield('script_content')

</body>