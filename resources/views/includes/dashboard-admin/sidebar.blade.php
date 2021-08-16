<div class="sidebar" data-color="purple" data-background-color="white" data-image="material-dashboard-master/assets/img/sidebar-1.jpg">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo text-center color-navbar">
        <img src="{{ asset('images/logo.png') }}" alt="" class="w-50 p-0">
    </div>
    <div class="card card-profile" style="background: transparent;">
        <div class="card-avatar">
            <img class="" src="/profile/{{ Auth::user()->photo }}" />
        </div>
        <div class="">
          <h6 class="mt-3 text-gray">{{ Auth::user()->name }}</h6>
          <h5 class="">{{ Auth::user()->email }}</h5>
        </div>
    </div>
    <div class="sidebar-wrapper" style="margin-top: -40px;">
        <ul class="nav">
            <li class="nav-item {{ (request()->is('Admin/dashboard')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin-dashboard') }}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item 
                {{ (request()->is('Admin/dashboard/course')) ? 'active' : '' }}
                {{ (request()->is('Admin/dashboard/course/create')) ? 'active' : '' }}
                {{ (request()->is('Admin/dashboard/course/edit*')) ? 'active' : '' }} 
                {{ (request()->is('Admin/dashboard/course/detail*')) ? 'active' : '' }}
                {{ (request()->is('Admin/dashboard/chapter*')) ? 'active' : '' }}
                {{ (request()->is('Admin/dashboard/chapter/create')) ? 'active' : '' }}
                {{ (request()->is('Admin/dashboard/chapter/edit*')) ? 'active' : '' }} 
                {{ (request()->is('Admin/dashboard/video/create*')) ? 'active' : '' }}  
                {{ (request()->is('Admin/dashboard/video/edit*')) ? 'active' : '' }}  
            ">
                <a class="nav-link" href="{{ route('admin-dashboard-course') }}">
                <i class="material-icons">library_books</i>
                <p>Course</p>
                </a>
            </li>
            <li class="nav-item 
                {{ (request()->is('Admin/dashboard/category')) ? 'active' : '' }}
                {{ (request()->is('Admin/dashboard/category/create')) ? 'active' : '' }}
                {{ (request()->is('Admin/dashboard/category/edit*')) ? 'active' : '' }} 
            ">
                <a class="nav-link" href="{{ route('admin-dashboard-category') }}">
                <i class="material-icons">content_paste</i>
                <p>Category</p>
                </a>
            </li>
            <li class="nav-item {{ (request()->is('Admin/dashboard/account*')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin-dashboard-account', Auth::user()->id) }}">
                <i class="material-icons">person</i>
                <p>Account Settings</p>
                </a>
            </li>
        </ul>
    </div>
</div>

{{--  --}}