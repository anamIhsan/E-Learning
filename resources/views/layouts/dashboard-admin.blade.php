<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  {{-- Style --}}
  @include('includes.dashboard-admin.style')
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  @stack('style')
</head>

<body class="">
    <div class="wrapper ">
        {{-- Sidebar --}}
        @include('includes.dashboard-admin.sidebar')
    <div class="main-panel">
        <!-- Navbar -->
        @include('includes.dashboard-admin.navbar')
        
        <!-- Content -->
        @yield('content')

        {{-- Footer --}}
        @include('includes.dashboard-admin.footer')
    </div>
  </div>

  {{-- settings dashboard --}}
  @include('includes.dashboard-admin.settings')
  
  {{-- Script --}}
  @include('includes.dashboard-admin.script')

  @stack('scripts')
</body>

</html>
<!-- an nahl/ahmad al mishbahi/:28: -->