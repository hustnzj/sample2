<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand h1" href="{{ route('home') }}" id="logo">Sample App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('help') }}">帮助</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">登录</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
