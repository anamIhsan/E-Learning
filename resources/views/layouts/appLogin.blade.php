<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    {{-- Style --}}
    @include('includes.style')


</head>
<body>

    {{-- Navbar --}}
    @include('includes.navbarLogin')

    {{-- Page Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('includes.footer')

    {{-- Script --}}
    @include('includes.script')

</body>
</html>