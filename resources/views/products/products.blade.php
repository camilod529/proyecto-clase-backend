@extends('layout.main')
<!-- Content -->
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slider-jornadas-constitucional.jpg" class="d-block w-100" alt="img1">
            </div>
            <div class="carousel-item">
                <img src="img/slider-semana-ingenieria.jpg" class="d-block w-100" alt="img2">
            </div>
            <div class="carousel-item">
                <img src="img/slider-semana-tecnologo-2023.jpg" class="d-block w-100" alt="img3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div>
        <h1 class="text-center m-5">Products</h1>
        <div class="container text-center">
            <div class="row">
                <?php
                for ($i = 0; $i < 4; $i++) {
                    echo '<div class="col">
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="img/producto1.png" class="card-img-top" alt="PC de la nasa">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Computador</h5>
                                                            <p class="card-text">$1.000.000</p>
                                                            <a href="#" class="btn btn-primary my-background">Añadir al carrito</a>
                                                            </div>
                                                            </div>
                                                            </div>';
                }
                ?>

            </div>
        </div>
    </div>
@endsection
