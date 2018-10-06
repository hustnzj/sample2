<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand h1" href="{{ route('home') }}" id="logo">Sample App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                @if (Auth::check())
                    <li><a href="#" class="nav-link">用户列表</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            {{ Auth::user()->name }} <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('users.show', Auth::user()->id) }}">个人中心</a></li>
                            <li><a class="dropdown-item" href="#">编辑资料</a></li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a id="logout" href="#">
                                    <form action="{{ route('logout') }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </li>
                @else
                    <li>
                        <a class="nav-link" href="{{ route('help') }}">帮助</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('login') }}">登录</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
