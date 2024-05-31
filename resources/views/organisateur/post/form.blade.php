@extends('organisateur.layouts.template')

@section('content')

<div class="card mb-3 mt-3">
    <div class="card-body">
        <div class="row flex-between-center">
            <div class="col-md">
                <h5 class="mb-2 mb-md-0">Ajouter un post à un évènement</h5>
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
                <form method="POST" action="{{ route($post->exists ? 'posts.update' : 'posts.store', ['post' => $post->id]) }}">
                    @csrf
                    @method($post->exists ? 'put' : 'post')
                    <div class="row gx-2">
                        <div class="col-12 mb-3">
                            <label class="form-label" for="product-name">Contenu:</label>
                            <input class="form-control  @error('contenu') is-invalid @enderror" id="product-name" name="nom" autofocus type="text" value="{{$post->exists ? $post->contenu : ''}}" />
                            @error('contenu')
                                <span style="color: red; font-size: 0.7rem">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label" for="product-name">Image:</label>
                            <input class="form-control  @error('image') is-invalid @enderror" id="product-name" name="nom" autofocus type="text" value="{{$post->exists ? $post->image : ''}}" />
                            @error('image')
                                <span style="color: red; font-size: 0.7rem">{{$message}}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="d-flex flex-row-reverse">
                        <button type="submit" class="btn btn-primary" role="button">{{ $post->exists ? 'Modifier' : 'Ajouter' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
