@extends('admin.layouts.admin')

@section('content')
<div class="row g-3 mb-3">
    <div class="col-xxl-6 col-xl-12">
      <div class="row g-3">
        <div class="col-12">
          <div class="card bg-transparent-50 overflow-hidden">
            <div class="card-header position-relative">
                <div class="bg-holder d-none d-md-block bg-card z-1" style="background-image:url(../assets/img/illustrations/ecommerce-bg.png);background-size:230px;background-position:right bottom;z-index:-1;">
                </div>
                <!--/.bg-holder-->
              <div class="position-relative z-2">
                <div>
                  <h3 class="text-primary mb-1">Bienvenue dans l'espace administrateur</h3>
                  <p>Voici ce qui se passe dans notre système à ce jour </p>
                </div>
                <div class="d-flex py-3">
                  <div class="pe-3">
                    <p class="text-600 fs-10 fw-medium">Les visites d'aujourd'hui </p>
                    <h4 class="text-800 mb-0">14,209</h4>
                  </div>
                  <div class="ps-3">
                    <p class="text-600 fs-10">Les évènements à valider</p>
                    <h4 class="text-800 mb-0">$21,349.29 </h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="mb-0 list-unstyled list-group font-sans-serif">
                <li class="list-group-item mb-0 rounded-0 py-3 px-x1 greetings-item text-700 border-x-0 border-top-0">
                    <div class="row flex-between-center">
                      <div class="col">
                        <div class="d-flex">
                          <div class=""></div>
                           <a class="fs-10 fw-medium" href="#!">
                                <i class="far fa-address-card"></i>
                                Utilisateurs
                            </a>
                        </div>
                      </div>
                    <div class="col-auto d-flex align-items-center">
                        <i class="fas fa-chevron-right ms-1 fs-11"></i>
                    </div>
                    </div>
                  </li>
                  <li class="list-group-item mb-0 rounded-0 py-3 px-x1 greetings-item text-700 border-x-0 border-top-0">
                    <div class="row flex-between-center">
                      <div class="col">
                        <div class="d-flex">
                          <div class=""></div>
                           <a class="fs-10 fw-medium" href="#!">
                                <i class="far fa-calendar-alt"></i>
                                Evènements
                            </a>
                        </div>
                      </div>
                    <div class="col-auto d-flex align-items-center">
                        <i class="fas fa-chevron-right ms-1 fs-11"></i>
                    </div>
                    </div>
                  </li>
                  <li class="list-group-item mb-0 rounded-0 py-3 px-x1 greetings-item text-700 border-x-0 border-top-0">
                    <div class="row flex-between-center">
                      <div class="col">
                        <div class="d-flex">
                          <div class=""></div>
                           <a class="fs-10 fw-medium" href="#!">
                                <i class="far fa-money-bill-alt"></i>
                                Comissions
                            </a>
                        </div>
                      </div>
                    <div class="col-auto d-flex align-items-center">
                        <i class="fas fa-chevron-right ms-1 fs-11"></i>
                    </div>
                    </div>
                  </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="row g-3">
            <div class="col-md-6">
              <div class="card h-md-100 ecommerce-card-min-width">
                <div class="card-header pb-0">
                  <h6 class="mb-0 mt-2 d-flex align-items-center">Evenements confirmés<span class="ms-1 text-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Calculated according to last week's sales">
                    {{-- <span class="far fa-question-circle" data-fa-transform="shrink-1"></span> --}}
                </span></h6>
                </div>
                <div class="card-body d-flex flex-column justify-content-end">
                  <div class="row">
                    <div class="col">
                      <p class="font-sans-serif lh-1 mb-1 fs-7">$47K</p><span class="badge badge-subtle-success rounded-pill fs-11">+3.5%</span>
                    </div>
                    <div class="col-auto ps-0">
                      <div class="echart-bar-weekly-sales h-100 echart-bar-weekly-sales-smaller-width"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card product-share-doughnut-width">
                <div class="card-header pb-0">
                  <h6 class="mb-0 mt-2 d-flex align-items-center">Organisateurs</h6>
                </div>
                <div class="card-body d-flex flex-column justify-content-end">
                  <div class="row align-items-end">
                    <div class="col">
                      <p class="font-sans-serif lh-1 mb-1 fs-7">34.6%</p><span class="badge badge-subtle-success rounded-pill"><span class="fas fa-caret-up me-1"></span>3.5%</span>
                    </div>
                    <div class="col-auto ps-0"><canvas class="my-n5" id="marketShareDoughnut" width="112" height="112"></canvas>
                      <p class="mb-0 text-center fs-11 mt-4 text-500">Target: <span class="text-800">55%</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card h-md-100 h-100">
                <div class="card-body">
                  <div class="row h-100 justify-content-between g-0">
                    <div class="col-5 col-sm-6 col-xxl pe-2">
                      <h6 class="mt-1">Sponsors</h6>
                      <div class="fs-11 mt-3">
                        <div class="d-flex flex-between-center mb-1">
                          <div class="d-flex align-items-center"><span class="dot bg-primary"></span><span class="fw-semi-bold">Falcon</span></div>
                          <div class="d-xxl-none">57%</div>
                        </div>
                        <div class="d-flex flex-between-center mb-1">
                          <div class="d-flex align-items-center"><span class="dot bg-info"></span><span class="fw-semi-bold">Sparrow</span></div>
                          <div class="d-xxl-none">20%</div>
                        </div>
                        <div class="d-flex flex-between-center mb-1">
                          <div class="d-flex align-items-center"><span class="dot bg-warning"></span><span class="fw-semi-bold">Phoenix</span></div>
                          <div class="d-xxl-none">22%</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto position-relative">
                      <div class="echart-product-share"></div>
                      <div class="position-absolute top-50 start-50 translate-middle text-1100 fs-7">26M</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header pb-0">
                  <h6 class="mb-0 mt-2 d-flex align-items-center">Tickets vendus</h6>
                </div>
                <div class="card-body">
                  <div class="row align-items-end">
                    <div class="col">
                      <p class="font-sans-serif lh-1 mb-1 fs-7">58.4K</p>
                      <div class="badge badge-subtle-primary rounded-pill fs-11"><span class="fas fa-caret-up me-1"></span>13.6%</div>
                    </div>
                    <div class="col-auto ps-0">
                      <div class="total-order-ecommerce" data-echarts='{"series":[{"type":"line","data":[110,100,250,210,530,480,320,325]}],"grid":{"bottom":"-10px"}}'></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-6 col-xl-12">
      <div class="card py-3 mb-3">
        <div class="card-body py-3">
            <div class="row g-0">
                <div class="col-6 col-md-4 border-200 border-bottom border-end pb-4">
                <h6 class="pb-1 text-700">Chills</h6>
                <p class="font-sans-serif lh-1 mb-1 fs-7">15,450 </p>
                <div class="d-flex align-items-center">
                    <h6 class="fs-10 text-500 mb-0">13,675 </h6>
                    <h6 class="fs-11 ps-3 mb-0 text-primary"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                </div>
                </div>
                <div class="col-6 col-md-4 border-200 border-bottom border-end pb-4">
                    <h6 class="pb-1 text-700">Chills</h6>
                    <p class="font-sans-serif lh-1 mb-1 fs-7">15,450 </p>
                    <div class="d-flex align-items-center">
                    <h6 class="fs-10 text-500 mb-0">13,675 </h6>
                    <h6 class="fs-11 ps-3 mb-0 text-primary"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 border-200 border-bottom border-end pb-4">
                    <h6 class="pb-1 text-700">Chills</h6>
                    <p class="font-sans-serif lh-1 mb-1 fs-7">15,450 </p>
                    <div class="d-flex align-items-center">
                    <h6 class="fs-10 text-500 mb-0">13,675 </h6>
                    <h6 class="fs-11 ps-3 mb-0 text-primary"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                    </div>
                </div>
            </div>
        </div>
      </div>

    </div>
</div>
<div class="row g-3 mb-3">

    <div class="card z-1" id="recentPurchaseTable" data-list='{"valueNames":["name","email","product","payment","amount"],"page":7,"pagination":true}'>
    <div class="card-header">
        <div class="row flex-between-center">
        <div class="col-6 col-sm-auto d-flex align-items-center pe-0">
            <h5 class="fs-9 mb-0 text-nowrap py-2 py-xl-0">Les organisateurs qui ont reçu le plus de commenatires sur leurs posts</h5>
        </div>
        <div class="col-6 col-sm-auto ms-auto text-end ps-0">
            <div class="d-none" id="table-purchases-actions">
            <div class="d-flex"><select class="form-select form-select-sm" aria-label="Bulk actions">
                <option selected="">Bulk actions</option>
                <option value="Refund">Refund</option>
                <option value="Delete">Delete</option>
                <option value="Archive">Archive</option>
                </select><button class="btn btn-falcon-default btn-sm ms-2" type="button">Apply</button></div>
            </div>
            {{-- <div id="table-purchases-replace-element"><button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ms-1">New</span></button><button class="btn btn-falcon-default btn-sm mx-2" type="button"><span class="fas fa-filter" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ms-1">Filter</span></button><button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ms-1">Export</span></button></div> --}}
        </div>
        </div>
    </div>
    <div class="card-body px-0 py-0">
        <div class="table-responsive scrollbar">
        <table class="table table-sm fs-10 mb-0 overflow-hidden">
            <thead class="bg-200">
            <tr>
                <th class="white-space-nowrap">
                <div class="form-check mb-0 d-flex align-items-center"><input class="form-check-input" id="checkbox-bulk-purchases-select" type="checkbox" data-bulk-select='{"body":"table-purchase-body","actions":"table-purchases-actions","replacedElement":"table-purchases-replace-element"}' /></div>
                </th>
                <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="name">Nom Complet</th>
                <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="email">Email</th>
                <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="product">Téléphone</th>
                <th class="text-900 sort pe-1 align-middle white-space-nowrap text-center" data-sort="payment">Evènements</th>
                <th class="text-900 sort pe-1 align-middle white-space-nowrap text-end" data-sort="amount">Nombres de commentaires</th>
                <th class="no-sort pe-1 align-middle data-table-row-action"></th>
            </tr>
            </thead>
            <tbody class="list" id="table-purchase-body">
            <tr class="btn-reveal-trigger">
                <td class="align-middle" style="width: 28px;">
                <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="recent-purchase-13" data-bulk-select-row="data-bulk-select-row" /></div>
                </td>
                <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Jack Watson </a></th>
                <td class="align-middle white-space-nowrap email">Jack@gmail.com</td>
                <td class="align-middle white-space-nowrap product">90504545</td>
                <td class="align-middle text-center fs-9 white-space-nowrap payment">Flo Party</td>
                <td class="align-middle white-space-nowrap text-end">1001</td>
                <td class="align-middle white-space-nowrap text-end">
                <div class="dropstart font-sans-serif position-static d-inline-block"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown-recent-purchase-table-13" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-recent-purchase-table-13"><a class="dropdown-item" href="#!">Voir</a><a class="dropdown-item" href="#!">Modifier</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Supprimer</a>
                    </div>
                </div>
                </td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
    <div class="card-footer">
        <div class="row align-items-center">
        <div class="pagination d-none"></div>
        <div class="col">
            <p class="mb-0 fs-10"><span class="d-none d-sm-inline-block me-2" data-list-info="data-list-info"></span></p>
        </div>
        <div class="col-auto d-flex"><button class="btn btn-sm btn-primary" type="button" data-list-pagination="prev"><span>Précédent</span></button><button class="btn btn-sm btn-primary px-4 ms-2" type="button" data-list-pagination="next"><span>Suivant</span></button></div>
        </div>
    </div>
    </div>

</div>
<div class="row">
<div class="col">
    <div class="card h-lg-100 overflow-hidden">
    <div class="card-body p-0">
        <div class="table-responsive scrollbar">
        <table class="table table-dashboard mb-0 table-borderless fs-10 border-200">
            <thead class="bg-body-tertiary">
            <tr>
                <th class="text-900">Classement des évènements ayant eu le plus de participants</th>
                <th class="text-900 text-center">Nombres de participants</th>
                <th class="text-900 text-center">Pourcentage(%)</th>
                <th class="text-900 text-end">Commission reçue</th>
                <th class="text-900 pe-x1 text-end" style="width: 8rem">Pourcentage (%)</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <td>
                <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="../assets/img/ecommerce/7.jpg" width="60" alt="" />
                    <div class="flex-1 ms-3">
                    <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">SUNGAIT Lightweight Sunglass</a></h6>
                    <p class="fw-semi-bold mb-0 text-500">Jacket</p>
                    </div>
                </div>
                </td>
                <td class="align-middle text-center fw-semi-bold">10</td>
                <td class="align-middle text-center fw-semi-bold">19%</td>
                <td class="align-middle text-end fw-semi-bold">$234</td>
                <td class="align-middle pe-x1">
                <div class="d-flex align-items-center">
                    <div class="progress me-3 rounded-3 bg-200" style="height: 5px; width:80px" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-primary rounded-pill" style="width: 7%;"></div>
                    </div>
                    <div class="fw-semi-bold ms-2">7%</div>
                </div>
                </td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
    <div class="card-footer bg-body-tertiary py-2">
        <div class="row flex-between-center">
        {{-- <div class="col-auto"><select class="form-select form-select-sm">
            <option>Dernier 7jours</option>
            <option>Dernier mois</option>
            <option>Dernière année</option>
            </select></div> --}}
        <div class="col-auto"><a class="btn btn-sm btn-falcon-default" href="#!">Voir Plus</a></div>
        </div>
    </div>
    </div>
</div>
</div>
@endsection
