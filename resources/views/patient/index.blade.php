@extends('layouts.dashboard')

@section('title', 'Painel Administrativo')

@section('content')
    
    <div class="row">

        <div class="col-md-12 m-auto">

            @if (session('consultation_created'))
                                    
                <div class="alert alert-success">
                    {{ session('consultation_created') }}
                </div>

            @endif

            @if (session('consultation_deleted'))
                                    
                <div class="alert alert-danger">
                    {{ session('consultation_deleted') }}
                </div>

            @endif
        </div>

        @foreach ($consultations as $consultation)
            
            <div class="col-md-4">
                <div class="card card-xxl-stretch mb-5 mb-xl-8">
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1 ">Consulta: {{ $consultation->specialty->name }}</span>
                        </h3>
                    </div>
                    <div class="card-body">
                        <p><strong>Doctor:</strong>  {{ $consultation->doctor->first_name .' ' .$consultation->doctor->last_name}}</p>
                        <p><strong>Telefone:</strong> {{ $consultation->doctor->phone_number }}</p>
                        <p><strong>Email:</strong> {{ $consultation->doctor->email }}</p>
                        <p><strong>Date:</strong> {{ $consultation->date }}</p>
                        <p><strong>Estado:</strong> Pendente</p>

                        <div class="btn-group">
                            <a href="{{ route('consultation.destroy') }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            <a href="" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                        </div>

                    </div>
                </div>
            </div>

        @endforeach
    </div>

@endsection