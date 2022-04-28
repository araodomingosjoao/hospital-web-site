@extends('layouts.site')

@section('title', 'Clínica CPATT » Doctores')

@section('content')

<section class="icons-container"></section>

<section class="doctores" id="doctores">

    <h1 class="heading"> <span>doctores</span> </h1>

    <div class="box-container">

        @foreach ($specialties as $specialty)
            
            <div class="box">
                <i class="fas fa-user-md"></i>
                <h3>{{ $specialty->name }}</h3>
                <p>+5</p>
                <p>Faça a sua marcação</p>
                <a href="{{ route('site.marking', [ 'specialty' => $specialty->id ]) }}" class="btn"> Marcar <span class="fas fa-chevron-right"></span> </a>
            </div>

        @endforeach

        


    </div>

</section>

@endsection