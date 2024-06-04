

@extends('auth.layouts.template')

@section('content')
    <!-- ===============================================--><!--    Main Content--><!-- ===============================================-->
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
                          <p class="opacity-75 text-white">Vous mettre au courant des évènements du moment est notre priorité !</p>
                        </div>
                      </div>
                      <div class="mt-3 mb-4 mt-md-4 mb-md-5" data-bs-theme="light">
                        <p class="text-white">Vous n'avez pas de compte?<br><a class="text-decoration-underline link-light" href="{{ route('register') }}">S'inscrire</a></p>
                        {{-- <p class="mb-0 mt-4 mt-md-5 fs-10 fw-semi-bold text-white opacity-75">Lire les <a class="text-decoration-underline text-white" href="#!">termes</a> et <a class="text-decoration-underline text-white" href="#!">conditions </a></p> --}}
                      </div>
                    </div>
                    <div class="col-md-7 d-flex flex-center">
                      <div class="p-4 p-md-5 flex-grow-1">
                        <div class="row flex-between-center">
                          <div class="col-auto">
                            <h3>Conexion</h3>
                          </div>
                        </div>
                        <form method="POST" action="{{ route('login') }}" id="login-form">
                          @csrf
                            <div class="mb-3">
                                <label class="form-label" for="card-email">Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" name="email" id="card-email" type="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="card-password">Mot de passe</label>
                                </div>
                                <input class="form-control @error('password') is-invalid @enderror" id="card-password" type="password" name="password" required autocomplete="current-password"/>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row flex-between-center">
                                <div class="col-auto">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" id="card-checkbox" {{ old('remember') ? 'checked' : '' }} name="remember" />
                                        <label class="form-check-label mb-0" for="card-checkbox">Se souvenir de moi</label>
                                    </div>
                                </div>
                                @if (Route::has('password.request'))
                                    <div class="col-auto">
                                        <a class="fs-10" href="{{ route('password.request') }}">Mot de passe oublié?</a>
                                    </div>
                                @endif
                            </div>
                            <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Se connecter</button></div>
                        </form>
                        {{-- <div class="position-relative mt-4">
                          <hr />
                          <div class="divider-content-center">or log in with</div>
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
    </main><!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->
@endsection
