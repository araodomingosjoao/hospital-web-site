@extends('layouts.site')

@section('title', 'Clínica CPATT » Serviços')

@section('content')

<section class="icons-container"></section>

<section class="serviços" id="serviços">

    <h1 class="heading"> <span> Serviços </span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="{{ asset('site/assets/image/ginecologia-e-obstetricia.jpg') }}" width="90%" alt="">
            <h3> </h3>
            <span>Ginecologia e Obstetrícia</span>
            <div class="share"></div>
        </div>

        <div class="box">

            <img src="{{ asset('site/assets/image/pediatria1.png') }}" alt="">
            <span>Pediatria</span>
            <div class="share"></div>
        </div>

        <div class="box">
            <img src="{{ asset('site/assets/image/cardiologista.png') }}" alt="">
            <span>cardiologia</span>
            <div class="share"></div>
        </div>

        <div class="box">
            <img src="{{ asset('site/assets/image/o-psicologo-atua-no-estudo-dos-comportamentos-pensamentos-humanos-5c0654723dd90.jpg') }}" alt="">
            <span>Psicologia</span>
            <div class="share"></div>
        </div>

        <div class="box">
            <img src="{{ asset('site/assets/image/neurologista-1024x576.jpeg') }}" width="90%" alt="">
            <span>Neurologia</span>
            <div class="share"></div>
        </div>

        <div class="box">
            <img src="{{ asset('site/assets/image/1624891022.9853-foto-N.png') }}" alt="">
            <span>Ortopedia</span>
            <div class="share"></div>
        </div>

        <div class="box">
            <img src="{{ asset('site/assets/image/images.jpg') }}" alt="">
            <span>Urologia</span>
            <div class="share"></div>
        </div>

        <div class="box">
            <img src="{{ asset('site/assets/image/3Nv0vR9PrywN5aBh2eNDp8jicbraw4FgH9IgMmJ9.jpeg') }}" alt="">
            <span>Endocrinologia</span>
            <div class="share"></div>
        </div>

        <div class="box">
            <img src="{{ asset('site/assets/image/demato.jpg') }}" alt=""> 
            <span>Dermatologia</span>
            <div class="share"></div>
        </div>

        <div class="box">
            <img src="{{ asset('site/assets/image/Cirurgia-Geral-em-Itaquera.png') }}" alt="" width="90%">
            <span>Cirurgia Geral</span>
            <div class="share"></div>
        </div>
        <div class="box">
            <img src="{{ asset('site/assets/image/baixados.jpg') }}" alt="">
            <span>Otorrinolaringologia</span>
            <div class="share"></div>
        </div>
        <div class="box">
            <img src="{{ asset('site/assets/image/gastroenterologia.jpg') }}" alt="" width="90%">
            <span>Gastroenterologia</span>
            <div class="share"></div>
        </div>
        <div class="box">
            <img src="{{ asset('site/assets/image/psiquiatria_454154401.jpg') }}" alt="" width="90%">
            <span>Psiquiatria</span>
            <div class="share"></div>
        </div>
        <div class="box">
            <img src="{{ asset('site/assets/image/alergologia_imunolugia.jpg') }}" alt="" width="90%">
            <span>Alergologia</span>
            <div class="share"></div>
        </div>
        <div class="box">
            <img src="{{ asset('site/assets/image/pneumatologista_img01-780x520.png') }}" alt="">
            <span>Pneumologia</span>
            <div class="share"></div>
        </div>

        <div class="box">
            <img src="{{ asset('site/assets/img/medicos.jpg') }}" alt="">
            <span>Clinica Geral</span>
            <div class="share"></div>
        </div>

</section>

@endsection