
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
                            <p class="pt-3 text-white">Vous avez un compte?<br><a class="btn btn-outline-light mt-2 px-4" href="login.html">Se connecter</a></p>
                        </div>
                        </div>
                        <div class="col-md-7 d-flex flex-center">
                        <div class="p-4 p-md-5 flex-grow-1">
                            <h3>Inscription</h3>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row gx-2">
                                    <div class="mb-3 col-sm-6">
                                        <label class="form-label" for="card-nom">Nom</label>
                                        <input class="form-control @error('nom') is-invalid @enderror" type="text" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus id="card-nom" />
                                        @error('nom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-sm-6">
                                        <label class="form-label" for="card-prenom">Prénom</label>
                                        <input class="form-control @error('prenom') is-invalid @enderror" type="text" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus id="card-prenom" />
                                        @error('prenom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="card-email">Email</label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" id="card-email" />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row gx-2">
                                    <div class="mb-3 col-sm-6">
                                        <label class="form-label" for="card-password">Mot de passe</label>
                                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password" id="card-password" />
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <label class="form-label" for="card-confirm-password">Confirmer</label>
                                        <input class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" id="card-confirm-password" />
                                    </div>
                                </div>

                                <div class="row gx-2">

                                    <div class="mb-3 col-sm-6">
                                        <label for="form-label" for="card-telephone">Téléphone</label>
                                        <input class="form-control @error('telephone') is-invalid @enderror" type="text" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" autofocus id="card-telephone" />
                                        @error('telephone')
                                            <span class="invalide-feedback" role="alert">
                                                <strong>{{ $message}}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-sm-6">
                                        <label for="form-label" for="card-photo">Photo</label>
                                        <input class="form-control @error('photo') is-invalid @enderror" type="text" name="photo" value="{{ old('photo') }}" required autocomplete="photo" autofocus id="card-photo" />
                                        @error('photo')
                                            <span class="invalide-feedback" role="alert">
                                                <strong>{{ $message}}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                {{-- <div class="form-check"><input class="form-check-input" type="checkbox" id="card-register-checkbox" /><label class="form-label" for="card-register-checkbox">J'accepte les<a href="#!">termes </a> et <a class="white-space-nowrap" href="#!">conditions</a></label></div> --}}
                                <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">S'inscrire</button></div>
                            </form>
                            {{-- <div class="position-relative mt-4">
                            <hr />
                            <div class="divider-content-center">or register with</div>
                            </div>
                            <div class="row g-2 mt-2">
                            <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                            <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
                            </div> --}}
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
