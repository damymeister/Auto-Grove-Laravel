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
        <link href="css/main.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            @include('layouts.navbar')
            <!-- Header-->
            <header class="bg-dark py-5" >
                <div class="container px-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xxl-6">
                            <div class="text-center my-5">
                                <h1 class="fw-bolder mb-3 text-white">
Naszą misją było stworzenie wypożyczalni aut spełniającej wymagania każdego klienta.</h1>
                                <p class="lead fw-normal text-muted mb-4">Każdy klient jest tym wyjątkowym. Dbamy o relacje i pragniemy zapewnić jak najlepsze wrażenia z jazdy naszymi samochodami. Zaufały nam tysiące osób. Czas na Ciebie, zapraszamy ! </p>
                                <a class="btn btn-outline-light btn-lg px-4" href="#scroll-target">Zobacz nasze auta!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- About section one-->
            <section class=" py-5 bg-light" >
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="auu.jpg" alt="..." /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Nasze Auta</h2>
                            <p class="lead fw-normal text-muted mb-0">Nasza flota składa się z ponad tysiąca samochodów znajdujących się w specjalnych punktach odbioru m.in. w Warszawie, Krakowie, Gdańsku oraz Lublinie.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About section two-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="UFODrive.jpeg" alt="..." /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Auta Elektryczne</h2>
                            <p class="lead fw-normal text-muted mb-0">Wyróżniamy się największą ilością aut elektrycznych na rynku, już dziś mogą Państwo wynająć u nas ponad 30 samochodów marki Tesla, a z każdym miesiącem zwiększamy ich ilość!:)</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Team members section-->
            <section class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="fw-bolder">Galeria naszych aut</h2>
                        <p class="lead fw-normal text-muted mb-5">Najwyższa jakość na rynku</p>
                    </div>
                </div>
            </section>
        </main>
         <!-- Karuzela-->
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="transform: scale(0.6);">
  <div class="carousel-inner" id="scroll-target">
    <div class="carousel-item active">
      <img src="karuzela/1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="karuzela/3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="karuzela/5.jpg" class="d-block w-100" alt="...">
    </div>
       <div class="carousel-item">
      <img src="karuzela/6.jpg" class="d-block w-100" alt="...">
    </div>
       <div class="carousel-item">
      <img src="karuzela/7.jpg" class="d-block w-100" alt="...">
    </div>
       <div class="carousel-item">
      <img src="karuzela/8.jpg" class="d-block w-100" alt="...">
       </div>
     <div class="carousel-item">
      <img src="karuzela/9.jpg" class="d-block w-100" alt="...">
    </div>
 
           <div class="carousel-item">
      <img src="karuzela/33.jpg" class="d-block w-100" alt="...">
    </div>
           <div class="carousel-item">
      <img src="karuzela/44.jpg" class="d-block w-100" alt="...">
    </div>
           <div class="carousel-item">
      <img src="karuzela/zdj.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        <!-- Footer-->
        @include('layouts.footer')  
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
    </body>
</html>
