<!DOCTYPE html>
<html
    lang="en"
    itemscope
    itemtype="http://schema.org/WebPage"
>

<head>
    @include('layouts.partials._header-guest')
</head>

<body class="about-us bg-gray-200">
    @include('layouts.partials._navbar-guest')

    @yield('content')

    @include('layouts.partials._footer-guest')
    @include('layouts.partials._script-guest')
</body>

</html>
