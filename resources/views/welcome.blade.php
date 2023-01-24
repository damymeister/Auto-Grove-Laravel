<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Auto-Grove</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/main.css" rel = "stylesheet">
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            @include('layouts.navbar')
            <!-- Header-->
            <header class="bg-black py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-6 fw-bolder text-white mb-3">Explore the automotive world</h1>
                                <p class="lead fw-normal text-white-50 mb-4">Jesteśmy liderem na Polskim rynku pod względem dostępności modeli znanych marek. W naszej ofercie m.in. auta marki Bugatti, Ferrari, Mercedes oraz wiele innych. Zapraszamy do kontaktu! Prowadzimy autorskiego bloga motoryzacyjnego, zaloguj się lub zarejestruj aby przeglądać posty i pisać własne!</p>
                                @if (Route::has('login'))
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                @auth
                                <div class="buttons">
                                    <a class="btn btn-outline-light btn-lg px-3 py-4" href="{{ url('/comments') }}">Blog</a>
                                    <a class="btn btn-outline-light btn-lg px-3 py-4" href="{{ url('/dashboard') }}">Panel użytkownika</a>
                                </div>
                                @else
                                     <a class="btn btn-outline-light btn-lg px-4" href="{{ route('login') }}">Logowanie</a>
                                     @if (Route::has('register'))
                                     <a class="btn btn-outline-light btn-lg px-4" href="{{ route('register') }}">Rejestracja</a>
                                     @endif
                                 @endauth
                             @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="logo.png" alt="..." /></div>
                    </div>
                </div>
            </header>
            <!-- Features section-->
            <section class="bg-white py-5" id="features" >
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0 text-white"><h2 class="fw-bolder mb-0">A different dimension of car rental.</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-dark text-white rounded-3 mb-3"><i class="bi bi-battery-charging"></i></div>
                                    <h2 class="h5 text-dark"><b>Szukasz Elektryka?</b></h2>
                                    <p class="mb-0 ">Miłośnik ekologii? Dobrze trafiłeś! W naszej ofercie posiadamy dużą ilość aut elektrycznych takich jak Tesla Model S oraz Renault ZOE.</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-dark text-white rounded-3 mb-3"><i class="bi bi-wallet-fill"></i></div>
                                    <h2 class="h5 text-dark"><b>Co z ubezpieczeniem?</b></h2>
                                    <p class="mb-0 "> W przypadku uszkodzenia auta z przyczyn niezależnych od użytkownika, pełny koszt napraw zostanie pokryty przez ubezpieczalnie! :)</p>
                                </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="feature bg-primary bg-dark text-white rounded-3 mb-3"><i class="bi bi-check-square-fill"></i></div>
                                    <h2 class="h5 "><b>Niezawodność</b></h2>
                                    <p class="mb-0 text-dark">Nasze samochody są na bieżąco serwisowane. W każdym samochodzie możesz czuć się bezpiecznie i komfortowo w każdych warunkach jazdy</p>
                                </div>
                                <div class="col h-100">
                                    <div class="feature bg-primary bg-dark text-white rounded-3 mb-3"><i class="bi bi-emoji-smile"></i></div>
                                    <h2 class="h5 "><b>Zadowolenie</b></h2>
                                    <p class="mb-0 text-dark ">Dbamy o każdy szczegół co zauważają nasi klienci. Staramy się aby czas który jest spędzany w naszych samochodach był komfortowy i niezapomniany.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @include('layouts.footer')  
    </body>
</html>
