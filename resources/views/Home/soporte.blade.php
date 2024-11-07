@extends('layouts.master')

@section('titulo', 'Sorporte')
<link rel="stylesheet" href="{{ asset('css/soporte.css') }}">
@section('contenido')
<section class="contact-section ">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center" >
                        <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                        <h3 style="color: black;">REQUISITOS PREVIOS</h3>
                        <hr class="my-4 mx-auto" />
                        <div class="small text-black-50">
                            <h4 style="color: black;">Hadware:</h4>
                            <ul style="color: black;">
                                <li>CPU: Procesador con soporte para SSE2.</li>
                                <li>RAM: Al menos 2 GB (4 GB recomendados).</li>
                                <li>Almacenamiento: Según el tamaño del juego, puede requerir entre 100 MB y varios GB.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope text-primary mb-2"></i>
                        <h3 style="color: black;">GUÍAS Y TUTORIALES</h3>
                        <hr class="my-4 mx-auto" />
                        <div class="small text-black-50">
                            <h4><a href="/#descarga" style="color: black;">Ir al apartado de descarga</a></h4><br>
                            <h4><a href="#" style="color: black;">MANUAL DE USUARIO: APRENDE A JUGAR </a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt text-primary mb-2"></i>
                        <h3 style="color: black;">CONTACTOS</h3>
                        <hr class="my-4 mx-auto" />
                        <div class="small text-black-50"style="color: black;" >
                            <h4 style="color: black; text-transform:lowercase">chucdaniel66@gmail.com</h4><br>
                            <h4 style="color: black; text-transform:lowercase">e.alejandra2106@gmail.com</h4><br>
                            <h4 style="color: black; text-transform:lowercase">karenquijano2406@gmail.com</h4><br>
                            <h4 style="color: black; text-transform:lowercase">tecconcepcion09@gmail.com</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection