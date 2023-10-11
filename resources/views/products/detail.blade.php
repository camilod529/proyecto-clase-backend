@extends('layout.main')
<!-- Content -->
@section('content')
    <div>
        <h1 class="text-center m-5">Detail products</h1>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-8">
                    <img src="img/producto1.png" alt="producto 1" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <h1>Computador</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla quod ipsum, maxime illum quos
                        labore nobis eaque obcaecati. Saepe quidem eius doloremque eum ipsam! Tenetur voluptatem aperiam
                        nisi mollitia? Voluptas!</p>
                    <h3>$1.000.000</h3>
                    <button class="btn btn-primary my-background">Añadir al carrito</button>
                </div>
            </div>
        </div>
    </div>
@endsection
