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

    {{-- Page Content --}}
    @yield('content')

    {{-- Script --}}
    @include('includes.script')

</body>
</html>