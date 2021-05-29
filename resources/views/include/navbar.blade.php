<div class="shadow-lg p-3 mb-5 bg-body rounded">
</div>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Company</a>
            </li>
            <form class="d-flex">
                <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </ul>

    </div>

    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">

            @if (Auth::guest())

                <li><a href="{{ route('login') }}" class='nav-link '>Login</a></li>
                <li><a href="{{ route('register') }}" class='nav-link'>Register</a></li>

            @else
                <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
                    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/index">Company</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">About</a>
                            </li> --}}
                            <form class="d-flex">
                                <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </ul>

                    </div>

                    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                        <ul class="navbar-nav ml-auto">

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li> <a href="/dashboard/{{ Auth::user()->id }}">Dashboard</a></li>

                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                </ul>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    </li>
        </ul>

        </li>
        @endif

        </ul>
    </div>

</nav>
