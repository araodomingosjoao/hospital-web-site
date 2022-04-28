@extends('layouts.site')

@section('title', 'Clínica CPATT » Contactos')

@section('content')

    <section class="icons-container"></section>

    <section class="contactos" id="contactos">

        <h1 class="heading"> <span></span> </h1>

        <div class="box-container">

            <div class="box">

                <div class="image">
                    <img src="{{ asset('site/assets/image/blog-1.jpg') }}" alt="">
                </div>

                <div class="content">

                    <div class="icon">
                        <a href="{{ route('site.services') }}"> <i class="fas fa-calendar"></i> 1 de setembro </a>
                        </a>
                    </div>

                    <h3>Nossos serviços</h3>

                    <p></p>

                    <a href="{{ route('site.services') }}" class="btn"> Saber mais <span class="fas fa-chevron-right"></span> </a>

                </div>

            </div>

            <div class="box">

                <div class="image">
                    <img src="{{ asset('site/assets/image/blog-2.jpg') }}" alt="">
                </div>

                <div class="content">
                    
                    <div class="icon">
                        <a href="{{ route('site.services') }}"> <i class="fas fa-calendar"></i> 1 de setembro </a>
                    </div>

                    <h3>Nossos serviços</h3>

                    <p></p>

                    <a href="{{ route('site.services') }}" class="btn"> Saber mais <span class="fas fa-chevron-right"></span> </a>

                </div>

            </div>

        </div>

    </section>

@endsection