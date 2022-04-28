@extends('layouts.site')

@section('title', 'Clínica CPATT » Home')

@section('content')

    <div class="col-100">
        <div class="image">
            <img src="{{ asset('site/assets/img/medicos.jpg') }}" />
            <img src="{{ asset('site/assets/img/medicos.jpg') }}" />
            <img src="{{ asset('site/assets/img/medicos.jpg') }}" />
            <img src="{{ asset('site/assets/img/medicos.jpg') }}" />
        </div>

        <div class="content">
            <h3>Faça já a sua marcação online</h3>
            <p>Ele vai garantir a marcação da sua consulta seja feita com sucesso</p>
            <a href="{{ route('site.about') }}" class="btn"> saber mais <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

    <!-- home section ends -->

    <!-- icons section starts  -->

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-user-md"></i>
            <h3>+140</h3>
            <p>Dotores na clínica</p>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i>
            <h3>+1040</h3>
            <p>Pacientes sastifeitos</p>
        </div>

        <div class="icons">
            <i class="fas fa-procedures"></i>
            <h3>+140</h3>
            <p>Serviços</p>
        </div>



    </section>

    <!-- icons section ends -->
    <!-- Sobre section starts  -->

    <section class="sobre" id="sobre">

        <h1 class="heading"> <span>Sobre nós</span> </h1>

        <div class="row">

            <div class="image">
                <img src="{{ asset('site/assets/image/View01.jpg') }}" alt="">
            </div>

            <div class="content">
                <h3>Nós cuidamos da sua vida saudável</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ducimus, quod ex cupiditate ullam in
                    assumenda maiores et culpa odit tempora ipsam qui, quisquam quis facere iste fuga, minus nesciunt.
                </p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus vero ipsam laborum porro voluptates
                    voluptatibus a nihil temporibus deserunt vel?</p>
                <a href="{{ route('site.about') }}" class="btn"> Saiba mais <span class="fas fa-chevron-right"></span> </a>
            </div>

        </div>

    </section>

@endsection