@extends('layouts.dashboard')

@section('title', 'Painel Administrativo')

@section('content')
    
    <div class="row">

        <div class="col-md-12 m-auto">

            @if (session('employe_created'))
                                    
                <div class="alert alert-success">
                    {{ session('employe_created') }}
                </div>

            @endif

            @if (session('employe_deleted'))
                                    
                <div class="alert alert-danger">
                    {{ session('employe_deleted') }}
                </div>

            @endif
        </div>

        <div class="col-md-6"></div>
        <div class="col-md-6 text-end mb-4"><a href="{{ route('admin.employe.create') }}" class="btn btn-sm btn-primary"> cadastrar um doctor <i class="fa fa-4x fa-plus"></i></a></div>

        <div class="card">
            <div class="card-body">
                <table class="table table-houver">
                    <thead>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Especialidade</th>
                        <th>Operações</th>
                    </thead>
        
                    <tbody>
                        @foreach ($employes as $employe)    
                            <tr>
                                <td> {{ $employe->first_name . ' ' . $employe->last_name }} </td>
                                <td> {{ $employe->phone_number }} </td>
                                <td> {{ $employe->email }} </td>
                                <td> {{ $employe->specialty->name }} </td>
                                <td> 
                                    <div class="btn-group">
                                        <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                        <a href="" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection