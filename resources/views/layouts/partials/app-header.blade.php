<header>
    <nav class="navbar navbar-expand-lg bg-light mb-4">
        <div class="container-xxl">
            <a href="/" class="navbar-brand d-flex align-items-center">
                <img class="header__logo" src="{{ asset('images/logo/logo.svg') }}" alt="">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="/catalog.php">Каталог</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about.php">О нас</a></li>
                </ul>
            </div>
            @auth
            <div class="profile">
                <a href="/profile.php" class="btn btn-success me-2">Профиль</a>
                <a href="/basket.php" class="btn btn-warning">Корзина</a>
            </div>
            @else
            <div class="auth">
                <a href="{{ route('login') }}" class="btn btn-primary">Войти</a>
            </div>
            @endauth
        </div>
    </nav>
</header>
