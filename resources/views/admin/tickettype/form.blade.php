@extends('admin.layouts.template')

@section('content')

<div class="card mb-3 mt-3">
    <div class="card-body">
        <div class="row flex-between-center">
            <div class="col-md">
                <h5 class="mb-2 mb-md-0">Ajouter un type de ticket</h5>
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
                <form method="POST" action="{{ route($tickettype->exists ? 'tickettypes.update' : 'tickettypes.store', ['tickettype' => $ticketype->id]) }}">
                    @csrf
                    @method($tickettype->exists ? 'put' : 'post')
                    <div class="row gx-2">
                        <div class="col-12 mb-3">
                            <label class="form-label" for="product-name">Libelle:</label>
                            <input class="form-control  @error('libelle') is-invalid @enderror" id="product-name" name="nom" autofocus type="text" value="{{$tickettype->exists ? $tickettype->libelle : ''}}" />
                            @error('libelle')
                                <span style="color: red; font-size: 0.7rem">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label" for="product-name">Image:</label>
                            <input class="form-control  @error('image') is-invalid @enderror" id="product-name" name="nom" autofocus type="text" value="{{$tickettype->exists ? $tickettype->image : ''}}" />
                            @error('image')
                                <span style="color: red; font-size: 0.7rem">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label" for="product-name">Prix:</label>
                            <input class="form-control  @error('prix') is-invalid @enderror" id="product-name" name="nom" autofocus type="text" value="{{$tickettype->exists ? $tickettype->prix : ''}}" />
                            @error('prix')
                                <span style="color: red; font-size: 0.7rem">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label" for="product-name">Mode Presence:</label>
                            <input class="form-control  @error('mode_presence') is-invalid @enderror" id="product-name" name="nom" autofocus type="text" value="{{$tickettype->exists ? $tickettype->mode_presence : ''}}" />
                            @error('mode_presence')
                                <span style="color: red; font-size: 0.7rem">{{$message}}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="d-flex flex-row-reverse">
                        <button type="submit" class="btn btn-primary" role="button">{{ $tickettype->exists ? 'Modifier' : 'Ajouter' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
