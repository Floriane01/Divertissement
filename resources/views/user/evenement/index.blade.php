@extends('user.layouts.template')

@section('content')

<div class="card mb-3 mb-lg-0">
    <div class="card-header bg-body-tertiary d-flex justify-content-between">
        <h5 class="mb-0">Une gamme variée d'évènement à vous proposer</h5>
        <form>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected="selected">Sélectionner une catégorie</option>
            </select>
        </form>
    </div>
    <div class="card-body fs-10">
        <div class="row">
            @foreach ($events as $event)
                <div class="col-md-6 h-100">
                    <div class="d-flex btn-reveal-trigger">
                        <div class="calendar">
                            <span class="calendar-month">
                                {{ \Carbon\Carbon::parse($event->date)->format('M') }}
                            </span>
                            <span class="calendar-day">
                                {{ \Carbon\Carbon::parse($event->date)->format('d') }}
                            </span>
                        </div>
                        <div class="flex-1 position-relative ps-3">
                            <h6 class="fs-9 mb-0">
                                <a href="{{ route('evenement.show', $event->id) }}">
                                    {{ $event->nom }}
                                </a>
                            </h6>
                            {{-- <p class="mb-1">
                                Organisé par:
                                <a href="#!" class="text-700">
                                    {{ $event->organisateur->nom ?? '' }}
                                </a>
                            </p> --}}
                            <p class="text-1000 mb-0">
                                Heure: {{ $event->heure }}
                            </p>
                            <p class="text-1000 mb-0">
                                Lieu: {{ $event->lieu }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
