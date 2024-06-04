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

                        @if (! auth()->user()->two_factor_secret)
    <p>
        Vous n'avez pas activé la double authentification!
    </p>

    <form action="{{ url('user/two-factor-authentication') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Activer</button>
    </form>
    @else
        <p>
            Vous n'avez pas activé la double authentification!
        </p>
        <form action="{{ url('user/two-factor-authentication') }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Desactiver</button>
            <br>
        </form>
    @endif

    @if (session('status') == 'two-factor-authentication-enabled')
        <div class="recovery-container">
            <div class="QrContainer">
                <div class="QrMessage">
                    <p>
                        Scanner le code Qr pour terminer la configuration de la double authentification
                    </p>
                </div>

                <br>

                <div class="">
                    {{!! auth()->user()->twoFactorQrCodeSvg() !!}}
                </div>
            </div>
            <form action="{{ url('/user/confirmed-two-factor-authentication') }}" method="POST">
                <p>
                    Entrer ici le code de vérification obtenue à partir du Code Qr
                </p>
                @csrf
                @method('post')
                <input type="text" name="code" class="input">
                <button type="submit" class="btn btn-info m-1">Confirmer</button>
            </form>
        </div>
    @endif

    @if (session('status') == 'two-factor-authentication-confirmed')
        <div class="">
            Authentification à deux facteurs confirmée et activée avec succès.
        </div>

        <div class="">
            <p>Conserver ces codes de récupérations au cas où.</p> <br>
            <ul>
                {{-- {{ (array) $request->user()->recoveryCodes() }} --}}
                @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes, true)) as $code)
                    <li> - {{ trim($code) }}</li>
                @endforeach
            </ul>
        </div>
    @endif

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







