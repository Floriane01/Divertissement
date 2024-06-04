@extends('auth.layouts.template')

@section('content')
    <main class="main" id="top">
        <div class="container-fluid">
        <div class="row min-vh-100 flex-center g-0">
            <div class="col-lg-8 col-xxl-5 py-3 position-relative"><img class="bg-auth-circle-shape" src="../../../assets/img/icons/spot-illustrations/bg-shape.png" alt="" width="250"><img class="bg-auth-circle-shape-2" src="../../../assets/img/icons/spot-illustrations/shape-1.png" alt="" width="150">
            <div class="card overflow-hidden z-1">
                <div class="card-body p-0">
                <div class="row g-0 h-100">
                    <div class="col-md-5 text-center bg-card-gradient">
                    <div class="position-relative p-4 pt-md-5 pb-md-7" data-bs-theme="light">
                        <div class="bg-holder bg-auth-card-shape" style="background-image:url(../../../assets/img/icons/spot-illustrations/half-circle.png);"></div><!--/.bg-holder-->
                        <div class="z-1 position-relative"><a class="link-light mb-4 font-sans-serif fs-5 d-inline-block fw-bolder" href="../../../index-2.html">Events</a>
                        <p class="opacity-75 text-white">Vous mettre au courant des évènements du moment est notre priorité!</p>
                        </div>
                    </div>
                    <div class="mt-3 mb-4 mt-md-4 mb-md-5" data-bs-theme="light">
                        <p class="mb-0 mt-4 mt-md-5 fs-10 fw-semi-bold text-white opacity-75">Lire les <a class="text-decoration-underline text-white" href="#!">termes</a> et <a class="text-decoration-underline text-white" href="#!">conditions </a></p>
                    </div>
                    </div>
                    <div class="col-md-7 d-flex flex-center">
                    <div class="p-4 p-md-5 flex-grow-1">
                        <h3>Double authentification</h3>

                        @if ($errors->any())
                            <div>
                                @foreach ($errors->all() as $error)
                                    <span style="color: red;" > {{$error }} </span>
                                @endforeach
                            </div>
                        @endif

                        <form action="{{url('/two-factor-challenge')}}" method="POST" class="mt-3">
                            @csrf
                            @method('post')

                            <div class="mb-3">
                                <label class="form-label" for="card-reset-password">
                                    Code
                                </label>
                                <input class="form-control" type="text" id="code" />
                            </div>

                            <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">
                                Envoyer
                            </button>

                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </main>
@endsection
