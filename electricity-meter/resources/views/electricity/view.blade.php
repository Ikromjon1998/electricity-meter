@extends('layouts.app')
@section('content')

    <ul class="uk-breadcrumb uk-margin-top">
        <li><a href="/">Dashboard</a></li>
        <li><a href="{{ route('electricity-meters') }}">Electric Meter</a></li>
        <li><span>{{ $electricityMeter->device_id }}</span></li>

    </ul>


    <div uk-grid>
        <div class="uk-width-expand"><h1 class="uk-h3">{{ $electricityMeter->device_id }}</h1></div>
        <div class="uk-width-auto">
            {{--            <div class="uk-button-group">--}}
            {{--                <button class="uk-button uk-button-default">Bearbeiten</button>--}}
            {{--                <button class="uk-button uk-button-danger">Löschen</button>--}}

            {{--            </div>--}}
        </div>
    </div>


    <div class="uk-card uk-card-default uk-margin-medium-top uk-margin-bottom">

        <div class="uk-card-header uk-padding-small">
            <div class="uk-text-uppercase">Stromzähler Eigenschaften</div>
        </div>

        <div class="uk-card-body uk-padding-small">

            <div class="uk-child-width-expand" uk-grid>
                <div>
                    <dl class="uk-description-list">
                        <dt>Description</dt>
                        <dd>{{ $electricityMeter->description }}</dd>

                    </dl>
                </div>
                <div>
                    <dl class="uk-description-list">

                        <dt>Ort</dt>
                        <dd>{{ $electricityMeter->location ?? '-' }}</dd>

                    </dl>
                </div>
                <div>
                    <dl class="uk-description-list">

                        <dt>E-Bauteil</dt>
                        <dd>{{ $electricityMeter->ebt ?? '-' }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <ul class="uk-tab">
        <li class="uk-active">
            <a href="{{ route('power-meter-view', ['powerMeter' => $electricityMeter]) }}" aria-expanded="true">Messwerte</a>
        </li>

        <li @if($electricityMeter->dailyCosts->count() === 0) class="uk-disabled" @endif>
            <a href="{{ route('power-monthly-costs', ['powerMeter' => $electricityMeter]) }}" aria-expanded="false">Kosten</a>
        </li>
    </ul>

    <div class="uk-card uk-card-default uk-margin-bottom">
        <div class="uk-card-body uk-padding-remove">
            <table class="uk-table uk-table-small uk-table-divider uk-table-hover">
                <thead>
                <tr>
                    <th class="uk-table-expand">Datum</th>
                    <th>Zählerstand</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                @foreach($measurements->sortByDesc('read_date') as $measurement)
                    <tr>
                        <td>
                            <div class="uk-text-small">{{ $measurement->read_date->format('d.m.Y') }}</div>
                        </td>
                        <td class="uk-text-small">{{number_format($measurement->value/1000, 2, ',', '.')}} kW/h</td>
                        <td class="uk-text-right">
                            <button class="uk-button uk-button-link uk-button-small"><span uk-icon="more-vertical"
                                                                                           ratio="0.75"></span></button>
                            <div uk-dropdown="mode: click; pos: bottom-right" class="uk-padding-small">
                                <ul class="uk-nav uk-dropdown-nav">

                                    <li><a href="{{ route('measurement-edit', ['measurement' => $measurement]) }}">Bearbeiten</a>
                                    </li>
                                    <li class="uk-nav-divider"></li>

                                    <li><a
                                            onclick="event.preventDefault(); if(confirm('Stromzähler wirklich löschen?')) { document.getElementById('delete-{{$measurement->id}}').submit(); }">{{ __('translate.delete') }}</a>
                                    </li>

                                </ul>
                                <form id="delete-{{$measurement->id}}" method="POST"
                                      action="{{route('measurement-delete', ['measurement' => $measurement])}}">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>

        </div>

        <div class="uk-card-footer uk-padding-small">
            {{$measurements->links()}}
        </div>
    </div>


    {{--<a class="uk-button uk-button-secondary uk-width-1-1" href="{{ route('power-costs', ['powerMeter' => $powerMeter]) }}">Preis</a>

    <br>
    <br>--}}
@endsection
