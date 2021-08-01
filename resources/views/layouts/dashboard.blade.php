<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  {{-- Style --}}
  @include('includes.dashboard.style')
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  
</head>

<body class="">
    <div class="wrapper ">
        {{-- Sidebar --}}
        @include('includes.dashboard.sidebar')
    <div class="main-panel">
        <!-- Navbar -->
        @include('includes.dashboard.navbar')
        
        <!-- Content -->
        @yield('content')

        {{-- Footer --}}
        @include('includes.dashboard.footer')
    </div>
  </div>

  {{-- settings dashboard --}}
  @include('includes.dashboard.settings')
  
  {{-- Script --}}
  @include('includes.dashboard.script')
</body>

</html>
<!-- al maidah/ahmad al mishbahi/:12: -->