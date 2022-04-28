@extends('layouts.auth')

@section('title' , 'Criar uma conta')

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

                </div>

            </div>


            <div class="d-flex flex-column flex-lg-row-fluid py-10">

                <div class="d-flex flex-center flex-column flex-column-fluid">

                    <div class="w-lg-600px p-10 p-lg-15 mx-auto">

                        <form class="form w-100" id="kt_sign_up_form" method="POST" action="{{ route('auth.register') }}">
                            @csrf

                            <div class="mb-10 text-center">

                                <h1 class="text-dark mb-3">Criar Uma Conta</h1>


                                <div class="text-gray-400 fw-bold fs-4">Já tem um conta? 
                                <a href="{{ route('auth.login') }}" class="link-primary fw-bolder">Iniciar Sessão</a></div>

                            </div>


                            <button type="button" class="btn btn-light-primary fw-bolder w-100 mb-10">
                            <img alt="Logo" src="{{ asset('dashboard/assets/media/svg/brand-logos/google-icon.svg') }}" class="h-20px me-3" />Login com Google</button>


                            <div class="d-flex align-items-center mb-10">
                                <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                                <span class="fw-bold text-gray-400 fs-7 mx-2">OU</span>
                                <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                            </div>


                            <div class="row fv-row mb-7">

                                <div class="col-xl-6">
                                    <label class="form-label fw-bolder text-dark fs-6">Primeiro Nome</label>
                                    <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="first_name" autocomplete="off" />
                                </div>


                                <div class="col-xl-6">
                                    <label class="form-label fw-bolder text-dark fs-6">Sobrenome</label>
                                    <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="last_name" autocomplete="off" />
                                </div>

                            </div>


                            <div class="fv-row mb-7">
                                <label class="form-label fw-bolder text-dark fs-6">Email</label>
                                <input class="form-control form-control-lg form-control-solid" type="email" placeholder="" name="email" autocomplete="off" />
                            </div>

                            <div class="fv-row mb-7">
                                <label class="form-label fw-bolder text-dark fs-6">Telefone</label>
                                <input class="form-control form-control-lg form-control-solid" type="number" placeholder="" name="phone_number" autocomplete="off" />
                            </div>


                            <div class="mb-10 fv-row" data-kt-password-meter="true">

                                <div class="mb-1">

                                    <label class="form-label fw-bolder text-dark fs-6">Password</label>


                                    <div class="position-relative mb-3">
                                        <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password" autocomplete="off" />
                                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                            <i class="bi bi-eye-slash fs-2"></i>
                                            <i class="bi bi-eye fs-2 d-none"></i>
                                        </span>
                                    </div>

                                </div>

                            </div>


                            <div class="fv-row mb-5">
                                <label class="form-label fw-bolder text-dark fs-6">Confirmar Senha</label>
                                <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password_confirmation" autocomplete="off" />
                            </div>

                            <div class="text-center">
                                <button type="submit" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
                                    <span class="indicator-label">Criar Conta</span>
                                </button>
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection