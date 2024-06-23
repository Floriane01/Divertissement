@extends('admin.layouts.template')

@section('content')

<div class="d-flex align-items-center justify-content-between my-3 rounded" style="padding: 10px;">
    <div>
        Liste des évènements
    </div>
    <div>
        {{-- style="text-decoration: none; color:white; padding: 8px; background-color: blue; border-radius: 4px;" --}}
        <a href="{{ route('admin.evenements.create') }}" class="btn btn-falcon-success btn-sm cursor-pointer">
            <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span>
            <span class="ms-1">Nouveau</span>
        </a>
    </div>
</div>

@if (session('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger" role="alert">
    {{ session('error') }}
</div>
@endif

<div class="card p-2">
    <div id="tableExample3" data-list='{"valueNames":["nom"],"page":20,"pagination":true}'>
        <div class="row justify-content-end g-0">
            <div class="col-auto col-sm-5 mb-3">
                <form>
                    <div class="input-group">
                        <input class="form-control form-control-sm shadow-none search" type="search"
                            placeholder="Search..." aria-label="search" />
                        <div class="input-group-text bg-transparent">
                            <span class="fa fa-search fs-10 text-600"></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        {{-- <span class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#addTicket-modal   ">
            Ajouter un ticket
        </span>
        <div class="modal fade" id="addTicket-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
                <div class="modal-content position-relative">
                    <div class="position-absolute top-0 end-0 mt-2 me-2 z-1">
                        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="rounded-top-3 py-3 ps-4 pe-6 bg-body-tertiary">
                            <h4 class="mb-1" id="modalExampleDemoLabel">Add a new
                                illustration </h4>
                        </div>
                        <div class="p-4 pb-0">
                            <form>
                                <div class="mb-3">
                                    <label class="col-form-label" for="recipient-name">Recipient:</label>
                                    <input class="form-control" id="recipient-name" type="text" />
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label" for="message-text">Message:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="button">Understood
                        </button>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="table-responsive scrollbar">
            <table class="table table-bordered table-striped fs-10 mb-0">
                <thead class="bg-200">
                    <tr>
                        <th class="text-900 sort" data-sort="nom">Evènements</th>
                        <th class="text-end" scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @foreach ($evenements as $evenement)
                    <tr>
                        <td class="nom">{{ $evenement->nom }}</td>
                        <td class="text-end">
                            <div>
                                {{-- <button class="btn btn-link p-0 ms-2" data-bs-placement="top" title="Options"
                                    data-bs-toggle="modal" data-bs-target="">
                                    <span class="text-500 fas fa-ellipsis-h"></span>
                                </button> --}}
                                <div class="dropdown font-sans-serif d-inline-block mb-2">
                                    <button class="btn btn-link dropdown-toggle" id="dropdownMenuButton" type="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-500 fas fa-ellipsis-h"></span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end py-0"
                                        aria-labelledby="dropdownMenuButton">
                                        <button class="dropdown-item" type="button" data-bs-toggle="modal"
                                            data-bs-target="#addTicket-modal{{$evenement->id}}">
                                            Ajouter un ticket
                                        </button>
                                        <div class="dropdown-divider"></div>
                                    </div>
                                </div>
                                <a href="{{ route('admin.evenements.edit', ['evenement' => $evenement->id]) }}"
                                    class="btn btn-link p-0" type="button" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Edit">
                                    <span class="text-500 fas fa-edit">

                                    </span>
                                </a>
                                <button class="btn btn-link p-0 ms-2" data-bs-placement="top" title="Delete"
                                    data-bs-toggle="modal" data-bs-target="#error-modal{{ $evenement->id }}">
                                    <span class="text-500 fas fa-trash-alt"></span>
                                </button>
                                <form action="{{ route('admin.evenements.destroy', ['evenement' => $evenement->id]) }}"
                                    method="post" style="display: none" id="delete-form-{{ $evenement->id }}">
                                    @csrf
                                    @method('delete')
                                </form>

                                {{-- Modals --}}

                                <div class="modal fade" id="addTicket-modal{{$evenement->id}}" tabindex="-1"
                                    role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document"
                                        style="max-width: 700px">
                                        <div class="modal-content position-relative">
                                            <div class="position-absolute top-0 end-0 mt-2 me-2 z-1">
                                                <button
                                                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body p-0">
                                                <div class="rounded-top-3 py-3 ps-4 pe-6 bg-body-tertiary">
                                                    <h4 class="mb-1" id="modalExampleDemoLabel">Ajouter une nouvelle
                                                        option de ticket</h4>
                                                </div>
                                                <div class="p-4 pb-0">
                                                    <form method="POST"
                                                        action="{{ route('setTicketType', ['evenement' => $evenement->id])}}"
                                                        id="ticketType-form-{{ $evenement->id }}"
                                                        enctype="multipart/form-data">
                                                        @method('post')
                                                        @csrf
                                                        <input type="hidden" name="evenement_id"
                                                            value="{{$evenement->id}}">
                                                        <div class="mb-3">
                                                            <label class="col-form-label" for="option">Option:</label>
                                                            <input class="form-control" id="option" name="option"
                                                                type="text" value="{{old('option')}}" />
                                                            @error('option')
                                                            <span style="color: red; font-size: 0.7rem">{{ $message
                                                                }}</span>
                                                            @enderror
                                                        </div>
                                                        {{-- <div class="mb-3">
                                                            <label class="col-form-label" for="prix">Prix:</label>
                                                            <input class="form-control" type="text" name="prix"
                                                                id="prix" />
                                                        </div> --}}
                                                        <label class="col-form-label" for="prix">Prix:</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">CFA</span>
                                                            <input class="form-control" type="text" name="prix"
                                                                aria-label="Amount (to the nearest dollar)"
                                                                value="{{old('prix')}}" />
                                                            <span class="input-group-text">.00</span>
                                                        </div>
                                                        @error('prix')
                                                        <span style="color: red; font-size: 0.7rem">{{ $message
                                                            }}</span>
                                                        @enderror

                                                        {{-- <div class="dropzone dropzone-single p-0"
                                                            data-dropzone="data-dropzone"
                                                            data-options='{"url":"valid/url","maxFiles":1,"dictDefaultMessage":"Choose or Drop a file here"}'>
                                                            <div class="fallback">
                                                                <input type="file" name="image" />
                                                            </div>
                                                            <div class="dz-preview dz-preview-single">
                                                                <div class="dz-preview-cover dz-complete">
                                                                    <img class="dz-preview-img"
                                                                        src="../../../assets/img/generic/image-file-2.png"
                                                                        alt="..." data-dz-thumbnail="" />
                                                                    <a class="dz-remove text-danger" href="#!"
                                                                        data-dz-remove="data-dz-remove">
                                                                        <span class="fas fa-times"></span>
                                                                    </a>
                                                                    <div class="dz-progress">
                                                                        <span class="dz-upload"
                                                                            data-dz-uploadprogress=""></span>
                                                                    </div>
                                                                    <div class="dz-errormessage m-1">
                                                                        <span
                                                                            data-dz-errormessage="data-dz-errormessage"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="dz-progress">
                                                                    <span class="dz-upload"
                                                                        data-dz-uploadprogress=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="dz-message" data-dz-message="data-dz-message">
                                                                <div class="dz-message-text">
                                                                    <img class="me-2"
                                                                        src="../../../assets/img/icons/cloud-upload.svg"
                                                                        width="25" alt="" />
                                                                    Drop your file here
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                        <div class="mb-3">
                                                            <label class="form-label" for="customFile">Image du
                                                                ticket</label>
                                                            <input class="form-control" id="customFile" type="file"
                                                                name="image" />
                                                        </div>
                                                        @error('image')
                                                        <span style="color: red; font-size: 0.7rem">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button"
                                                    data-bs-dismiss="modal">Annuler</button>
                                                <button class="btn btn-primary" type="submit"
                                                    form="ticketType-form-{{ $evenement->id }}">
                                                    Ajouter
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="error-modal{{ $evenement->id }}" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document"
                                        style="max-width: 500px">
                                        <div class="modal-content position-relative">
                                            <div class="position-absolute top-0 end-0 mt-2 me-2 z-1">
                                                <button
                                                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body p-0">
                                                <div class="rounded-top-3 py-3 ps-4 pe-6 bg-body-tertiary">
                                                    <h4 class="mb-1 bg-orange-400" style="color: rgb(251, 146, 60)"
                                                        id="modalExampleDemoLabel">Attention!!! </h4>
                                                </div>
                                                <div class="p-4 pb-0">
                                                    <div>
                                                        <h5>Êtes-vous sûr de vouloir supprimer {{ $evenement->nom }}
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button"
                                                    data-bs-dismiss="modal">Annuler</button>
                                                <button type="submit" form="delete-form-{{ $evenement->id }}"
                                                    class="btn btn-primary" type="button">Supprimer </button>
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
        <div class="d-flex justify-content-center mt-3"><button class="btn btn-sm btn-falcon-default me-1" type="button"
                title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
            <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button"
                title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
        </div>
    </div>
</div>

{{-- <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#error-modal">Launch demo
    modal</button> --}}
@endsection
