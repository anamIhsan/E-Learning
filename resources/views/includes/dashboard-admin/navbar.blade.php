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
        <div class="d-flex align-items-center">
            <p class="mt-3">Hi, {{ Auth::user()->name }}</p>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">person</i>
                        <p class="d-lg-none d-md-block">
                            Account
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                        <a class="dropdown-item" href="{{ route('user-home') }}">Home</a>
                        <a class="dropdown-item" href="{{ route('admin-dashboard-account', Auth::user()->id) }}">Profile</a>
                            <div class="dropdown-divider"></div>
                        <form action="{{ route('logout') }}" method="POST" class="">
                            @csrf
                            @method('POST')
                            <button class="dropdown-item" style="width: 94%;" type="submit">Log out</button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>