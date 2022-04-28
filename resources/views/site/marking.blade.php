@extends('layouts.site')

@section('title', 'Clínica CPATT » Marcação')

@section('content')

    <section class="icons-container"></section>

    <section class="marcação" id="marcação">

        <h1 class="heading"> <span></span> </h1>

        <div class="row">

            <div class="image">
                <img src="{{ asset('site/assets/image/eliane.jpg') }}">
            </div>

            <form action="{{ route('consultation.store') }}" method="post">
                @csrf
                <input type="hidden" name="accessKey" value="8dd7ef14-eedc-4778-89a2-643020ff7c91">
                <h3>Marcação</h3>
                <input type="name" name="name" placeholder="Nome" class="box" value="{{ Auth::user()->first_name .' '. Auth::user()->last_name }}" disabled>
                <input type="number" name="phone_number" placeholder="Telefone" class="box" value="{{ Auth::user()->phone_number }}" disabled>
                <input type="email" name="email" placeholder="Email" class="box" value="{{ Auth::user()->email }}" disabled>
                {{-- <input type="name" name="message" placeholder="Nome do Doctor" class="box"> --}}
                <select class="box" name="doctor_id" id="">
                    @foreach ($specialty->doctor as $doctor)
                        
                        <option disabled>SELECIONE O DOCTOR...</option>
                        <option value="{{ $doctor->id }}">{{ $doctor->first_name . ' ' . $doctor->last_name }}</option>

                    @endforeach
                </select>
                <input type="name" name="specialty_name" placeholder="Consulta de" class="box" value="{{ $specialty->name }}" disabled>
                <input type="hidden" name="specialty_id" placeholder="Consulta de" class="box" value="{{ $specialty->id }}">
                <input type="date" name="date" placeholder="Selecione a data da consulta" class="box">
                <input type="submit" value="Marcar" class="btn">
            </form>

        </div>

    </section>
    

@endsection