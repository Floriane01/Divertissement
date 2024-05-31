@extends('admin.layouts.template')

@section('content')

<div class="card mb-3">
    <div class="card-body">
      <div class="row flex-between-center">
        <div class="col-md">
          <h5 class="mb-2 mb-md-0">Créer un évènement</h5>
        </div>
        <div class="col-auto"><button class="btn btn-falcon-default btn-sm me-2" role="button">Enregistrer</button>
          <!-- <button class="btn btn-falcon-primary btn-sm" role="button">Make your event live </button> -->
        </div>
      </div>
    </div>
  </div>
  <div class="card cover-image mb-3"><img class="card-img-top" src="../../assets/img/generic/13.jpg" alt="" /><input class="d-none" id="upload-cover-image" type="file" /><label class="cover-image-file-input" for="upload-cover-image"><span class="fas fa-camera me-2"></span><span>Changer l'image</span></label></div>
  <div class="row g-0">
    <div class="col-lg-8 pe-lg-2">
      <div class="card mb-3">
        <div class="card-header">
          <h5 class="mb-0">Les détails de l'évènement</h5>
        </div>
        <div class="card-body bg-body-tertiary">
          <form method="POST" action="{{ route($evenement->exists ? 'evenements.update' : 'evenements.store',  ['evenement' => $evenement->id])}}">
            @csrf
            @method($evenement->exists ? 'put' : 'post')

            <div class="row gx-2">
                <div class="col-12 mb-3">
                    <label class="form-label" for="event-name">Nom de l'évènement</label>
                    <input class="form-control" @error('nom') is-invalid @enderror id="event-name" type="text"  value="{{$evenement->exists ? $evenement->nom : ''}}" />
                    @error('nom')
                        <span style="color: red; font-size: 0.7rem">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-12 mb-3">
                    <label class="form-label" for="event-name">Thème de l'évènement</label>
                    <input class="form-control" @error('theme') is-invalid @enderror id="event-name" type="text" value="{{$evenement->exists ? $evenement->theme : ''}}" />
                    @error('theme')
                        <span style="color: red; font-size: 0.7rem">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-sm-6 mb-3">
                    <label class="form-label" for="start-date">Date de début</label>
                    <input class="form-control datetimepicker" @error('date_debut') is-invalid @enderror id="start-date" type="text"  data-options='{"dateFormat":"d/m/y","disableMobile":true}'  value="{{$evenement->exists ? $evenement->date_debut : ''}}"/>
                    @error('date_debut')
                        <span style="color: red; font-size: 0.7rem">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-sm-6 mb-3">
                    <label class="form-label" for="start-time">Heure de début</label>
                    <input class="form-control datetimepicker" @error('horaire') is-invalid @enderror id="start-time" type="text" placeholder="H:i" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}' value="{{$evenement->exists ? $evenement->horaire : ''}}"/>
                    @error('horaire')
                        <span style="color: red; font-size: 0.7rem">{{$message}}</span>
                    @enderror
                </div>

              <div class="col-sm-6 mb-3">
                <label class="form-label" for="end-date">Date de fin</label>
                <input class="form-control datetimepicker" @error('date_fin') is-invalid  @enderror id="end-date" type="text" placeholder="dd/mm/yy" data-options='{"dateFormat":"d/m/y","disableMobile":true}'  value="{{$evenement->exists ? $evenement->date_fin : ''}}"/>
                @error('date_fin')
                    <span style="color: red; font-size: 0.7rem">{{$message}}</span>
                @enderror
            </div>

              <div class="col-sm-6">
                <label class="form-label" for="registration-deadline">Date limite d'inscription</label>
                <input class="form-control datetimepicker" @error('deadline') is-invalid @enderror id="registration-deadline" type="text" placeholder="dd/mm/yy" data-options='{"dateFormat":"d/m/y","disableMobile":true}' value="{{$evenement->exists ? $evenement->deadline : ''}}"/>
                @error('deadline')
                    <span style="color: red; font-size: 0.7rem">{{$message}}</span>
                @enderror
            </div>

            <div class="col-sm-6">
                <label class="form-label" for="registration-deadline">Lieu</label>
                <input class="form-control datetimepicker" @error('lieu') is-invalid @enderror id="registration-deadline" type="text" value="{{$evenement->exists ? $evenement->lieu : ''}}"/>
                @error('lieu')
                    <span style="color: red; font-size: 0.7rem">{{$message}}</span>
                @enderror
            </div>

             <div class="col-12">
                <div class="border-bottom border-dashed my-3"></div>
              </div>

              <div class="col-sm-6 mb-3">
                <label class="form-label" for="event-address">Statut</label>
                <input class="form-control" @error('statut') is-invalid @enderror id="event-address" type="text" value="{{$evenement->exists ? $evenement->statut : ''}}" />
                @error('statut')
                    <span style="color: red; font-size: 0.7rem">{{$message}}</span>
                @enderror
            </div>

              <div class="col-12">
                <label class="form-label" for="event-description">Description</label>
                <textarea class="form-control" @error('description') is-invalid @enderror id="event-description" rows="6" value="{{$evenement->exists ? $evenement->description : ''}}"> </textarea>
                @error('description')
                    <span style="color: red; font-size: 0.7rem">{{$message}}</span>
                @enderror
              </div>

            </div>
          </form>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-header">
          <h5 class="mb-0">Prix du ticket</h5>
        </div>
        <div class="card-body bg-body-tertiary">
          <button class="btn btn-falcon-primary btn-sm ms-2" type="button"><span class="d-none d-sm-inline"> Ticket</span></button>
          <hr />
          <h6 class="fs-9">Les options:</h6>

          <table class="table table-bordered border-200 mt-3 bg-body-emphasis">
            <thead>
              <tr class="fs-10">
                <th>Option</th>
                <th>Prix</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input class="form-control form-control-sm" type="text" placeholder="Option Name" value="Standard" /></td>
                <td><input class="form-control form-control-sm" type="text" placeholder="Price" value="$0.00" /></td>

              </tr>
              <tr>
                <td><input class="form-control form-control-sm" type="text" placeholder="Option Name" value="Premium" /></td>
                <td><input class="form-control form-control-sm" type="text" placeholder="Price" value="$5.00" /></td>

              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-header">
          <h5 class="mb-0">Photos</h5>
        </div>
        <div class="card-body bg-body-tertiary">
          <form class="dropzone dropzone-multiple p-0" id="my-awesome-dropzone" data-dropzone="data-dropzone" action="#!">
            <div class="fallback"><input name="file" type="file" multiple="multiple" /></div>
            <div class="dz-message" data-dz-message="data-dz-message"> <img class="me-2" src="../../assets/img/icons/cloud-upload.svg" width="25" alt="" />Drop your files here</div>
            <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column">
              <div class="d-flex media align-items-center mb-3 pb-3 border-bottom btn-reveal-trigger"><img class="dz-image" src="../../assets/img/generic/image-file-2.png" alt="..." data-dz-thumbnail="data-dz-thumbnail" />
                <div class="flex-1 d-flex flex-between-center">
                  <div>
                    <h6 data-dz-name="data-dz-name"></h6>
                    <div class="d-flex align-items-center">
                      <p class="mb-0 fs-10 text-400 lh-1" data-dz-size="data-dz-size"></p>
                      <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                    </div>
                  </div>
                  <div class="dropdown font-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2"><a class="dropdown-item" href="#!" data-dz-remove="data-dz-remove">Remove File</a></div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>


    </div>
    <div class="col-lg-4 ps-lg-2">
      <div class="sticky-sidebar">
        <div class="card mb-lg-0">
          <div class="card-header">
            <h5 class="mb-0">Autres informations</h5>
          </div>
          <div class="card-body bg-body-tertiary">
            <div class="mb-3">
              <div class="d-flex flex-between-center"><label class="form-label" for="organizer">Organisateur</label></div><select class="form-select js-choice" id="organizer" multiple="multiple" size="1" name="organizer" data-options='{"removeItemButton":true,"placeholder":true}'>
                <option value="">Select organizer...</option>
              </select>
            </div>
            <div class="mb-3">
              <div class="d-flex flex-between-center"><label class="form-label" for="sponsors">Sponsors</label></div><select class="form-select js-choice" id="sponsors" multiple="multiple" size="1" name="sponsors" data-options='{"removeItemButton":true,"placeholder":true}'>
                <option value="">Select sponsors...</option>

              </select>
            </div>
            <!-- <div class="mb-3">
              <div class="d-flex justify-content-between align-items-center"><label class="mb-0" for="event-tags">Tags</label><button class="btn btn-link btn-sm pe-0" type="button">Add New</button></div><select class="form-select js-choice" id="event-tags" multiple="multiple" size="1" name="tags" data-options='{"removeItemButton":true,"placeholder":true}'>
                <option value="">Select tags...</option>
                <option>Concert</option>
                <option>New Year</option>
                <option>Party</option>
              </select>
            </div>
            <div class="border-bottom border-dashed my-3"></div>
            <h6>Listing Privacy</h6>
            <div class="mb-3 form-check"><input class="form-check-input" id="customRadio4" type="radio" name="listingPrivacy" checked="checked" /><label class="form-label mb-0" for="customRadio4"> <strong>Public page:</strong></label>
              <div class="form-text mt-0">Discoverable by anyone on Falcon, our distribution partners, and search engines.</div>
            </div>
            <div class="mb-3 form-check"><input class="form-check-input" id="customRadio5" type="radio" name="listingPrivacy" /><label class="form-label mb-0" for="customRadio5"> <strong>Private page:</strong></label>
              <div class="form-text mt-0">Accessible only by people you specify. </div>
            </div>
            <div class="border-bottom border-dashed my-3"></div>
            <h6>Remaining Tickets</h6>
            <div class="form-check custom-checkbox mb-0"><input class="form-check-input" id="customRadio6" type="checkbox" /><label class="form-label mb-0" for="customRadio6">Show the number of remaining tickets. </label></div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card mt-3">
    <div class="card-body">
      <div class="row justify-content-between align-items-center">
        <div class="col-md">
          <h5 class="mb-2 mb-md-0">C'est fait!</h5>
        </div>
        <div class="col-auto"><button class="btn btn-falcon-default btn-sm me-2">Enregistrer</button></div>
      </div>
    </div>
  </div>
@endsection
