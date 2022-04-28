@extends('layouts.dashboard')

@section('title', 'Painel Administrativo')

@section('content')
    
    <div class="row">

        <div class="col-md-6"></div>
        <div class="col-md-6 text-end mb-4"><a href="{{ route('admin.index') }}" class="btn btn-sm btn-primary"> <i class="fa fa-arrow-left"></i></a></div>

        <div class="card card card-xxl-stretch mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1 ">Cadastrar um funcionario</span>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.employe.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group mb-4">
                            <label for="">Primeiro Nome</label>
                            <input type="text" class="form-control" name="first_name">
                        </div>
                        <div class="col-md-6 form-group mb-4">
                            <label for="">Sobrenome</label>
                            <input type="text" class="form-control" name="last_name">
                        </div>
                        <div class="col-md-4 form-group mb-4">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="col-md-4 form-group mb-4">
                            <label for="">Telefone</label>
                            <input type="number" class="form-control" name="phone_number">
                        </div>
                        <div class="col-md-4 form-group mb-4">
                            <label for="">Senha</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="col-md-12 form-group mb-4">
                            <label for="">Especialidade</label>
                            <select name="specialty_id" id="" class="form-control">
                                @foreach ($specialties as $specialty)
                                    <option value="{{ $specialty->id }}">{{ $specialty->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-5 form-group mb-4">
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection