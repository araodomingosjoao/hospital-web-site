<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
    <link href="{{ asset('site/assets/image/baixados (1).jpg') }}" rel="icon" type="Image">
    <link rel="stylesheet" type="Text/css" href="style.css">
    <link rel="stylesheet" type="Text/js" href="script.js">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('site/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo"> <i class=""></i> <img src="{{ asset('site/assets/image/baixados (1).jpg') }}" width="10%"> clínica CPATT </a>

        <div class="navbar">
            <a href="{{ route('site.index') }}">Home</a>
            <a href="{{ route('site.doctors') }}">Doctores</a>
            <a href="{{ route('site.about') }}">Sobre</a>
            <a href="{{ route('site.services') }}">Serviços</a>
            {{-- <a href="{{ route('site.marking') }}">Marcação</a> --}}
            <a href="{{ route('site.contacts') }}">Contactos</a>

            @auth
                <a href="{{ route('patient.index') }}">Painel</a>
            @endauth

            @guest
                <a href="{{ route('auth.login') }}">Login</a>
            @endguest

        </div>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>

    @yield('content')

    <section class="footer">

        <div class="box-container">
            
            <div class="box">

                <h3>Menus</h3>

                <a href="{{ route('site.index') }}"> <i class="fas fa-chevron-right"></i> home </a>
                <a href="{{ route('site.doctors') }}"> <i class="fas fa-chevron-right"></i> doctores</a>
                <a href="{{ route('site.about') }}"> <i class="fas fa-chevron-right"></i> sobre </a>
                <a href="{{ route('site.services') }}"> <i class="fas fa-chevron-right"></i> Serviços </a>
                {{-- <a href="{{ route('site.marking') }}"> <i class="fas fa-chevron-right"></i> Marcação </a> --}}
                <a href="{{ route('site.contacts') }}"> <i class="fas fa-chevron-right"></i> Contactos </a>
                    
            </div>

            <div class="box">
                <h3>serviços</h3>

                <a href="{{ route('site.services') }}"> <i class="fas fa-chevron-right"></i>Ginecologia e Obstetrícia </a>
                <a href="{{ route('site.services') }}"> <i class="fas fa-chevron-right"></i>Pediatria </a>
                <a href="{{ route('site.services') }}"> <i class="fas fa-chevron-right"></i> cardiologia </a>
                <a href="{{ route('site.services') }}"> <i class="fas fa-chevron-right"></i> Psicologia </a>
                <a href="{{ route('site.services') }}"> <i class="fas fa-chevron-right"></i> Neurologia </a>
                <a href="{{ route('site.services') }}"><i class="fas fa-chevron-right"></i>Urologia</a>
                <a href="{{ route('site.services') }}"><i class="fas fa-chevron-right"></i>Endocrinologia</a>
                <a href="{{ route('site.services') }}"><i class="fas fa-chevron-right"></i>Dermatologia</a>
                <a href="{{ route('site.services') }}"><i class="fas fa-chevron-right"></i>Cirurgia Geral</a>
                <a href="{{ route('site.services') }}"><i class="fas fa-chevron-right"></i>Otorrinolaringologia</a>
                <a href="{{ route('site.services') }}"><i class="fas fa-chevron-right"></i>Gastroenterologia</a>
                <a href="{{ route('site.services') }}"><i class="fas fa-chevron-right"></i>Alergologia</a>
                <a href="{{ route('site.services') }}"><i class="fas fa-chevron-right"></i>Pneumologia</a>
                <a href="{{ route('site.services') }}"><i class="fas fa-chevron-right"></i>Clinica Geral</a>

            </div>

            <div class="box">
                <h3>contacto informação</h3>
                <a href="#"> <i class="fas fa-phone"></i> +244 946477688 </a>
                <a href="#"> <i class="fas fa-phone"></i> +244 932951011 </a>
                <a href="#"> <i class="fas fa-envelope"></i> eli7ane@gmail.com </a>
                <a href="#"> <i class="fas fa-envelope"></i>eli7ane@gmail.com</a>
                <a
                    href="https://www.google.com/maps/place/CLINICA+CPATT/@-8.9099645,13.1983515,17z/data=!4m5!3m4!1s0x1a51f563b0dea2bb:0x6c6e3ba5abff5de4!8m2!3d-8.9101606!4d13.1999072">
                    <i class="fas fa-map-marker-alt"></i> clínica CPATT </a>
            </div>

        </div>

    </section>

    <script src="{{ asset('site/assets/js/script.js') }}"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript" src="{{ asset('site/assets/js/main.js') }}"></script>

</body>

</html>
