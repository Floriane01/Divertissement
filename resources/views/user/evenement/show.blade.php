@extends('user.layouts.template')

@section('content')

<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div><!--/.bg-holder-->
    <div class="card-body position-relative">
      <div class="row">
        <div class="col-lg-8">
          <h3>Show</h3>
          <a class="btn btn-link btn-sm ps-0 mt-2" href="https://getbootstrap.com/docs/5.3/components/accordion" target="_blank">
            Photo de l'évènement
            <span class="fas fa-chevron-right ms-1 fs-11">

            </span>
          </a>
        </div>
      </div>
    </div>
</div>

{{-- <div class="card">
    <div class="card-header">
        <div class="row flex-between-end">
            <div class="col-auto align-self-center">
                <h5 class="mb-0" data-anchor="data-anchor">Thème de l'évènement</h5>
                <p class="mb-0 pt-1 mt-2">


                </p>
            </div>

            <div class="col-auto ms-auto">

            </div>

        </div>
    </div>
</div> --}}


<div class="row g-0">
      <div class="card mb-3">
        <div class="card-header">
          <div class="row flex-between-end">
            <div class="col-auto align-self-center">
              <h5 class="mb-0" data-anchor="data-anchor">For The Night</h5>
            </div>
            <div class="col-auto ms-auto">
              <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                <button class="btn btn-sm active" data-bs-toggle="pill" data-bs-target="#dom-5ee6a121-c3e5-4a1d-a018-c225a706937c" type="button" role="tab" aria-controls="dom-5ee6a121-c3e5-4a1d-a018-c225a706937c" aria-selected="true" id="tab-dom-5ee6a121-c3e5-4a1d-a018-c225a706937c">
                    Mettre de côté
                </button>
            </div>
            </div>
          </div>
        </div>
        <div class="card-body bg-body-tertiary">
            <div class="tab-content">

                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-5ee6a121-c3e5-4a1d-a018-c225a706937c" id="dom-5ee6a121-c3e5-4a1d-a018-c225a706937c">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="detail-tab" data-bs-toggle="tab" href="#tab-detail" role="tab" aria-cotrols="tab-detail" aria-selected="true">
                                    Détails
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="post-tab" data-bs-toggle="tab" href="#tab-post" role="tab" aria-controls="tab-post" aria-selected="false">
                                    Posts
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="ticket-tab" data-bs-toggle="tab" href="#tab-ticket" role="tab" aria-controls="tab-ticket" aria-selected="false">
                                    Réservation de Tickets
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="avis-tab" data-bs-toggle="tab" href="#tab-avis" role="tab" aria-controls="tab-avis" aria-selected="false">
                                    Emettre des avis
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="maps-tab" data-bs-toggle="tab" href="#tab-maps" role="tab" aria-controls="tab-maps" aria-selected="false">
                                    Localisation Maps
                                </a>
                            </li>
                    </ul>

                    <div class="tab-content border border-top-0 p-3" id="myTabContent">

                    <div class="tab-content border border-top-0 p-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="tab-detail" role="tabpanel" aria-labelledby="detail-tab">
                            <div class="col-sm-6 col-lg-12">
                                <div class="card position-relative rounded-4">
                                  <div class="bg-holder bg-card rounded-4" style="background-image:url(assets/img/icons/spot-illustrations/corner-2.png);"></div><!--/.bg-holder-->
                                  <div class="card-body p-3 pt-5 pt-xxl-4">
                                      <img class="mb-3" src="assets/img/icons/chip.png" alt="" width="30" />
                                    <h5 class="text-primary font-base lh-1 mb-1">Date: Du 24/05/2024 au 25/05/2024</h6>
                                    <h5 class="fs-11 fw-semi-bold text-facebook mb-3">Heure de début: 20:45</h6>
                                    <h5 class="fs-11 fw-semi-bold text-facebook mb-3">Lieu de l'évènement: Cotonou</h6>
                                    <p class="fs-11 fw-semi-bold text-facebook mb-3">
                                      Descrption:
                                           Du lourd les amis
                                    </p>
                                    <h5 class="mb-0 text-facebook">Organisateur: HOUNKPONOU Floriane</h>
                                      <img class="position-absolute end-0 bottom-0 mb-2 me-2" src="assets/img/icons/master-card.png" alt="" width="70" />
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab-post" role="tabpanel" aria-labelledby="post-tab">
                         <h5>
                            Informations
                         </h5>
                        </div>

                        <div class="tab-pane fade" id="tab-ticket" role="tabpanel" aria-labelledby="ticket-tab">

                            <div class="card mb-3">
                                <div class="card-header">
                                  <h5 class="mb-0">Différents types de tickets</h5>
                                </div>
                                <div class="card-body bg-body-tertiary">
                                  <h5>
                                    Faites vos réservations
                                  </h5>
                                  <hr />
                                  <h6 class="fs-9">Options de tarification:</h6>
                                  <div class="form-check"><input class="form-check-input" id="customCheck1" type="checkbox" checked="checked" /><label class="form-check-label align-top" for="customCheck1">Activer la tarification variable.</label></div>
                                  <div class="form-check mt-2"><input class="form-check-input" id="customCheck2" type="checkbox" /><label class="form-check-label align-top" for="customCheck2">Activez le mode d’achat multi-options.</label></div>
                                  <table class="table table-bordered border-200 mt-3 bg-body-emphasis">
                                    <thead>
                                      <tr class="fs-10">
                                        <th>Type de Ticket</th>
                                        <th>Prix</th>
                                        <th>Réserver</th>
                                        <th></th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td><input class="form-control form-control-sm" type="text" placeholder="Option Name" value="Standard" /></td>
                                        <td><input class="form-control form-control-sm" type="text" placeholder="Price" value="$0.00" /></td>
                                        <td class="text-center align-middle">
                                          <div class="form-check mb-0"><input class="form-check-input float-none" id="customRadio1" type="radio" name="customRadio" checked="checked" /><label class="form-check-label" for="customRadio1"></label></div>
                                        </td>
                                        <td class="text-center align-middle"><button class="btn btn-link btn-sm"><span class="fas fa-times-circle text-danger" data-fa-transform="shrink-2"></span></button></td>
                                      </tr>
                                      <tr>
                                        <td><input class="form-control form-control-sm" type="text" placeholder="Option Name" value="Vip" /></td>
                                        <td><input class="form-control form-control-sm" type="text" placeholder="Price" value="$5.00" /></td>
                                        <td class="text-center align-middle">
                                          <div class="form-check mb-0"><input class="form-check-input float-none" id="customRadio2" type="radio" name="customRadio" /><label class="form-check-label" for="customRadio2"></label></div>
                                        </td>
                                        <td class="text-center align-middle"><button class="btn btn-link btn-sm"><span class="fas fa-times-circle text-danger" data-fa-transform="shrink-2"></span></button></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>

                        </div>

                        <div class="tab-pane fade" id="tab-avis" role="tabpanel" aria-labelledby="avis-tab">
                            <div class="col-12">

                                <label class="form-label" for="event-description">Avis</label>
                                <textarea class="form-control" id="event-description" rows="6" name="description"> </textarea>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab-maps" role="tabpanel" aria-labelledby="maps-tab">
                            <h5>
                                Localisation maps de l'évènement
                            </h5>
                        </div>

                      </div>

                </div>

            </div>
        </div>

      </div>
</div>




@endsection

