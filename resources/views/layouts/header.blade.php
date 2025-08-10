<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('img/logo.png') }}" alt="Educational Pclub platform" width="100px" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-toggler">
            <ul class="navbar-nav text-right pr-3">
                @guest
                    <li class="nav-item {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"><a href="{{ route('home') }}" class="nav-link">الصفحة الرئيسية</a></li>
                @else
                    <li class="nav-item {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"><a href="{{ route('home') }}" class="nav-link">الصفحة الرئيسية</a></li>
                    <li class="nav-item dropdown mr-2 {{ Str::startsWith(Route::currentRouteName(), 'tracks') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="{{ route('tracks.index') }}" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            المسارات
                        </a>
                        <div dir="rtl" class="dropdown-menu text-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('tracks.java') }}">مسار Java</a>
                            <a class="dropdown-item" href="{{ route('tracks.python') }}">مسار Python</a>
                            <a class="dropdown-item" href="{{ route('tracks.sql') }}">مسار SQL</a>
                        </div>
                    </li>                
                    <li class="nav-item {{ Route::currentRouteName() == 'maps' ? 'active' : '' }}"><a href="{{ route('maps') }}" class="nav-link">خرائط الطريق</a></li>
                    <li class="nav-item {{ Str::startsWith(Route::currentRouteName(), 'programming') ? 'active' : '' }}"><a href="{{ route('programming.string') }}" class="nav-link">البرمجة التنافسية</a></li>
                    <li class="nav-item {{ Route::currentRouteName() == 'articles' ? 'active' : '' }}"><a href="{{ route('articles') }}" class="nav-link">المقالات</a></li>
                    <li class="nav-item {{ Route::currentRouteName() == 'podcast' ? 'active' : '' }}"><a href="{{ route('podcast') }}" class="nav-link">البودكاست</a></li>
                @endguest
            </ul>
            <ul class="navbar-nav mr-auto d-none d-lg-flex">
                @guest
                    <li class="nav-item ml-2"><a href="{{ route('login') }}" class="btn btn-outline-secondary">تسجيل الدخول</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}" class="btn btn-outline-primary">إنشاء حساب</a></li>
                @else
                    <li class="nav-item dropdown mr-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div dir="rtl" class="dropdown-menu text-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('user-profile-information.edit') }}">الصفحة الشخصية</a>
                            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button class="dropdown-item">تسجيل الخروج</button>
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>