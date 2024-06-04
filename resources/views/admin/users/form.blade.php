@extends('admin.layouts.template')

    @php
        $routeName = request()->route()->getName()
    @endphp

@section('content')

<div class="card mb-3 mt-3">
    <div class="card-body">
        <div class="row flex-between-center">
            <div class="col-md">
                <h5 class="mb-2 mb-md-0"> {{ $user->exists ? 'Modifier un Utilisateur' : 'Ajouter un Utilisateur' }}</h5>
            </div>
            <div class="col-auto">
                <button class="btn btn-link text-secondary p-0 me-3 fw-medium" role="button">Retour</button>
                {{-- <button class="btn btn-primary" role="button">Add product </button> --}}
            </div>
        </div>
    </div>
</div>

<div class="row g-0">
    <div class="col-lg-12 pe-lg-2">
        <div class="card mb-3">
            <div class="card-header bg-body-tertiary">
                <h6 class="mb-0">Basic information</h6>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route( $user->exists ? 'user.update' : 'user.register', ['user' => $user->id]) }}">
                    @csrf
                    @method($user->exists ? 'put' : 'post')
                    <div class="row gx-2">
                        <div class="col-12 mb-3">
                            <label class="form-label" for="product-name">Nom:</label>
                            <input class="form-control  @error('nom') is-invalid @enderror" id="product-name" name="nom" autofocus type="text" value="{{$user->exists ? $user->nom : ''}}" />
                            @error('nom')
                                <span style="color: red; font-size: 0.7rem">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label" for="product-name">Prénom:</label>
                            <input class="form-control  @error('prenom') is-invalid @enderror" id="product-name" name="prenom" autofocus type="text" value="{{$user->exists ? $user->prenom : ''}}" />
                            @error('prenom')
                                <span style="color: red; font-size: 0.7rem">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label" for="product-name">Email:</label>
                            <input class="form-control  @error('email') is-invalid @enderror" id="product-name" name="email" autofocus type="email" value="{{$user->exists ? $user->email : ''}}" />
                            @error('email')
                                <span style="color: red; font-size: 0.7rem">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label" for="product-name">Mot de passe:</label>
                            <input class="form-control  {{ $routeName === 'user.edit' ? '' : 'requiredStar' }} @error('password') is-invalid @enderror" id="product-name" name="password" autofocus type="password" readonly="{{ $routeName === 'user.edit' ? 'readonly' : '' }}" value="{!! $user->password !!}"  />
                            @error('password')
                                <span style="color: red; font-size: 0.7rem">{{$message}}</span>
                            @enderror
                        </div>


                        <div class="col-12 mb-3">
                            <label class="form-label" for="product-name">Téléphone:</label>
                            <input class="form-control  @error('telephone') is-invalid @enderror" id="product-name" name="telephone" autofocus type="text" value="{{$user->exists ? $user->telephone : ''}}" />
                            @error('telephone')
                                <span style="color: red; font-size: 0.7rem">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label" for="product-name">Photo:</label>
                            <input class="form-control  @error('photo') is-invalid @enderror" id="product-name" name="photo" autofocus type="text" value="{{$user->exists ? $user->photo : ''}}" />
                            @error('photo')
                                <span style="color: red; font-size: 0.7rem">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    {{-- <div class="d-flex flex-row-reverse">
                        <button type="submit" class="btn btn-primary" role="button">Modifier</button>
                    </div> --}}
                    <div class="d-flex flex-row-reverse">
                        <button type="submit" class="btn btn-primary" role="button">{{ $user->exists ? 'Modifier' : 'Ajouter' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
