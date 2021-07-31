<div class="sidebar" data-color="purple" data-background-color="white" data-image="material-dashboard-master/assets/img/sidebar-1.jpg">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo text-center bg-primary text-primary">
        <img src="/images/logo.png" alt="" class="w-75">
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ (request()->is('dashboard/course')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard-course') }}">
                <i class="material-icons">library_books</i>
                <p>My Courses</p>
                </a>
            </li>
            <li class="nav-item {{ (request()->is('dashboard/account*')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard-account') }}">
                <i class="material-icons">person</i>
                <p>Account Settings</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('all-category') }}">
                <i class="material-icons">content_paste</i>
                <p>Back to Learn</p>
                </a>
            </li>
        </ul>
    </div>
</div>