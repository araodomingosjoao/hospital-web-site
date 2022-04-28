@extends('layouts.site')

@section('title', 'Clínica CPATT » Sobre')

@section('content')

    <section class="icons-container"></section>

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