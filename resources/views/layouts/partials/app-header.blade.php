<header>
    <nav class="navbar navbar-expand-lg bg-light mb-4">
        <div class="container-xxl">
            <a href="/" class="navbar-brand d-flex align-items-center">
                <img class="header__logo" src="{{ asset('images/logo/logo.svg') }}" alt="">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('catalog') }}">Каталог</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">О нас</a></li>
                </ul>
            </div>
            <div class="profile d-flex align-items-center">
                @auth
                    <a href="/profile.php" class="btn btn-success me-2">Профиль</a>
                    <a href="{{ route('cart') }}" class="btn btn-warning">Корзина</a>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger">Выйти</button>
                    </form>
                @elseauth('admin')
                    <h4 class="me-3 d-inline">Admin</h4>
                    <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger">Выйти</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Войти</a>
                @endauth
            </div>
        </div>
    </nav>
</header>
