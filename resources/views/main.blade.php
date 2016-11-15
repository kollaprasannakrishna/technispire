<!DOCTYPE html>

<html lang="">

<head>
    @include('styleJs.headSection')
</head>

<body>
    @include('partials._topContact')
    @include('partials._nav')
    @yield('content')
    @include('partials._footer')
    @include('partials._copyright')
@include('styleJs.scriptsSection')
</body>

</html>