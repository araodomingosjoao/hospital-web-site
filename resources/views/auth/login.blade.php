@extends('layouts.auth')

@section('title', 'Login')

@section('content')

    <div class="d-flex flex-column flex-root">

        <div class="d-flex flex-column flex-lg-row flex-column-fluid">

            <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative"
                style="background-color: #36b7f9">

                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">

                    <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">

                        <a href="index.html" class="py-9 mb-5">
                            <img alt="Logo" src="{{ asset('site/assets/image/baixados (1).jpg') }}" class="h-60px" />
                        </a>


                        <h1 class="fw-bolder fs-2qx pb-5 pb-md-10">Clinica CPATT</h1>


                        <p class="fw-bold fs-2">Discover Amazing Metronic
                            <br />with great build tools</p>

                    </div>


                    <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px"
                        style="background-image: url(/metronic8/demo1/assets/media/illustrations/sketchy-1/13.png">
                    </div>

                </div>

            </div>


            <div class="d-flex flex-column flex-lg-row-fluid py-10">

                <div class="d-flex flex-center flex-column flex-column-fluid">

                    <div class="w-lg-500px p-10 p-lg-15 mx-auto">

                        <form class="form w-100" id="kt_sign_in_form" method="POST" action="{{ route('auth.login') }}">
                            @csrf

                            <div class="text-center mb-10">

                                <h1 class="text-dark mb-3">Faça o Login Para Continuar</h1>


                                <div class="text-gray-400 fw-bold fs-4">Ainda não tem uma conta?
                                    <a href="{{ route('auth.register') }}" class="link-primary fw-bolder">Criar Conta</a></div>

                            </div>

                            <div class="text-center mb-10">

                                @if (session('user_created'))
                                    
                                    <div class="alert alert-success">
                                        {{ session('user_created') }}
                                    </div>

                                @endif

                                @if (session('auth_error'))
                                    
                                    <div class="alert alert-danger">
                                        {{ session('auth_error') }}
                                    </div>

                                @endif

                                @if (session('credentials_error'))
                                    
                                    <div class="alert alert-danger">
                                        {{ session('credentials_error') }}
                                    </div>

                                @endif

                            </div>


                            <div class="fv-row mb-10">

                                <label class="form-label fs-6 fw-bolder text-dark">Email</label>


                                <input class="form-control form-control-lg form-control-solid" type="text" name="email" />

                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>


                            <div class="fv-row mb-10">

                                <div class="d-flex flex-stack mb-2">

                                    <label class="form-label fw-bolder text-dark fs-6 mb-0">Senha</label>


                                    <a href="password-reset.html" class="link-primary fs-6 fw-bolder">Recuperar Senha</a>

                                </div>


                                <input class="form-control form-control-lg form-control-solid" type="password"
                                    name="password"  />

                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror

                            </div>


                            <div class="text-center">

                                <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                                    <span class="indicator-label">Continuar</span>
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection