@extends('backend.layout.main')

@section('content')
    <div class="pagetitle">
        <h1 class="text-center">BIENVENUE DANS TABLEAU DE BORD ISV</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Acceuil</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="d-flex justify-content-center w-100">
            <img src="{{asset('assets/img/favicon.png')}}" alt="logo" style="width: 70%">
        </div>
    </section>
@endsection
