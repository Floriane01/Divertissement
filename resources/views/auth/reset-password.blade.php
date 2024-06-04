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
                        <h3>Réinitialiser le mot de passe</h3>

                        @if ($errors->any())
                            <div>
                                @foreach ($errors->all() as $error)
                                    <span style="color: red;" > {{$error }} </span>
                                @endforeach
                            </div>
                        @endif

                        <form action="{{route('password.update')}}" method="POST" class="mt-3">
                            @csrf
                            @method('post')

                            <div class="mb-3">
                                <input type="hidden" class="form-control" id="token" name="token" value="{{$request->route('token')}}" aria-describedby="emailHelp">
                              </div>

                            <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-4">
                              <label for="password" class="form-label">Mot de passe</label>
                              <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label">Confirme mot de passe</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                              </div>
                            <br>
                            <br>
                            <button class="btn btn-primary" type="submit">Confirmer</button>

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
