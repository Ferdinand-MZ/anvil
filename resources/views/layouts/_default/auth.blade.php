<!doctype html>
<html lang="en">

<head>

    @include('layouts.partials._header-auth')

</head>

<body class="login-container">

    @include('layouts.partials._loader-app')

    @yield('content')

    @include('layouts.partials._script-auth')

</body>

</html>
