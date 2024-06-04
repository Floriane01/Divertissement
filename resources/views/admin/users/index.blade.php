@extends('admin.layouts.template')

@section('content')

<div class="d-flex align-items-center justify-content-between my-3 bg-white rounded" style="padding: 10px;">
    <div>
        Liste des utilisateurs
    </div>
    <div>
        {{-- style="text-decoration: none; color:white; padding: 8px; background-color: blue; border-radius: 4px;" --}}
        <a href="{{ route('user.create') }}" class="btn btn-falcon-success btn-sm cursor-pointer">
            <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span>
            <span class="ms-1">Nouveau</span>
        </a>
    </div>
</div>
<div id="categoriesTable" data-list='{"valueNames":["nom"],"page":20,"pagination":true}'>
    <div class="row justify-content-end g-0">
      <div class="col-auto col-sm-5 mb-3">
        <form>
          <div class="input-group">
            <input class="form-control form-control-sm shadow-none search" type="search" placeholder="Search..." aria-label="search" />
            <div class="input-group-text bg-transparent">
                <span class="fa fa-search fs-10 text-600"></span>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="table-responsive scrollbar">
      <table class="table table-bordered table-striped fs-10 mb-0">
        <thead class="bg-200">
          <tr>
            <th class="text-900 sort" data-sort="nom">Nom</th>
            <th class="text-900 sort" data-sort="nom">Prénom</th>
            <th class="text-900 sort" data-sort="nom">Email</th>
            <th class="text-900 sort" data-sort="nom">Téléphone</th>
            <th class="text-end" scope="col">Actions</th>
          </tr>
        </thead>
        <tbody class="list">
          @foreach ($users as $user)
            <tr>
                <td class="nom">{{ $user->nom }}</td>
                <td class="nom">{{ $user->prenom }}</td>
                <td class="nom">{{ $user->email }}</td>
                <td class="nom">{{ $user->telephone }}</td>
                <td class="text-end">
                    <div>
                        <a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn btn-link p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                            <span class="text-500 fas fa-edit"></span>
                        </a>
                        <button  class="btn btn-link p-0 ms-2" data-bs-placement="top" title="Delete" data-bs-toggle="modal" data-bs-target="#error-modal{{$user->id}}">
                            <span class="text-500 fas fa-trash-alt"></span>
                        </button>
                        <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="post" style="display: none" id="delete-form-{{$user->id}}">
                            @csrf
                            @method('delete')
                        </form>
                        <div class="modal fade" id="error-modal{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
                                <div class="modal-content position-relative">
                                    <div class="position-absolute top-0 end-0 mt-2 me-2 z-1">
                                        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-0">
                                        <div class="rounded-top-3 py-3 ps-4 pe-6 bg-body-tertiary">
                                            <h4 class="mb-1 bg-orange-400" style="color: rgb(251, 146, 60)" id="modalExampleDemoLabel">Attention!!! </h4>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <div>
                                                <h5>Êtes-vous sûr de vouloir supprimer {{ $user->nom }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Annuler</button>
                                        <button type="submit" form="delete-form-{{$user->id}}" class="btn btn-primary" type="button">Supprimer </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="d-flex justify-content-center mt-3"><button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
      <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
    </div>
</div>

@endsection
