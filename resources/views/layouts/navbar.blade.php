<div class ="navka">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="/">Auto-Grove</a>
                    @if (Route::has('login'))
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    
                    @auth
                            <li class="nav-item"><a class="nav-link" href="{{ url('/onas') }}">O Nas</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}">Panel użytkownika</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/comments') }}">Blog</a></li>
                    @else
                            <li class="nav-item"><a class="nav-link" href="{{ url('/onas') }}">O Nas</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Logowanie</a></li>
                        @if (Route::has('register'))
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Rejestracja</a></li>
                        @endif
                    @endauth
                        </ul>
                </div>
            @endif
            </nav>
            </div>