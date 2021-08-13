<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top px-3">
    <div class="container-fluid">
    <div class="navbar-wrapper">
        <h1 class="navbar-brand fs-6" href="javascript:;">@yield('title.page')</h1>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
        <p class="mt-3">Hi, Name</p>

        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">person</i>
                    <p class="d-lg-none d-md-block">
                        Account
                    </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                    <a class="dropdown-item" href="{{ route('dashboard-account') }}">Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('home') }}/">Log out</a>
                </div>
            </li>
        </ul>
    </div>
    </div>
</nav>