@extends('layouts.app')
@section('content')

    <ul class="uk-breadcrumb uk-margin-top">
        <li><a href="/">Dashboard</a></li>
        <li><span>Stromzähler</span></li>
    </ul>


    <div uk-grid>
        <div class="uk-width-expand"><h1 class="uk-h3">Stromzähler</h1></div>
        <div class="uk-width-auto">
            <a class="uk-button-primary uk-button"
               href="{{route('power-create')}}">Hinzufügen</a>
        </div>
    </div>

    <div class="uk-card uk-card-default uk-padding-remove uk-margin-medium-top uk-margin-bottom">
        <div class="uk-card-body uk-padding-remove">
            <table class="uk-table uk-table-divider uk-table-hover">
                <thead>
                <tr>
                    <th class="uk-table-expand">Zähler</th>
                    <th>Ort</th>
                    <th>E-BT</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                @foreach($powerMeters as $powerMeter)
                    <tr>
                        <td class="uk-table-link"><a href="{{route('power-meter-view', ['powerMeter' => $powerMeter])}}" class="uk-link-reset" ><div class="uk-text-small">{{ $powerMeter->device_id }}</div>
                                <div class="uk-text-meta">{{ $powerMeter->description }}</div></a>
                        </td>
                        <td class="uk-text-small">{{ $powerMeter->location ?? '-'  }}</td>
                        <td class="uk-text-small">{{ $powerMeter->ebt ?? '-'  }}</td>
                        <td class="uk-text-right">
                            <button class="uk-button uk-button-link uk-button-small"><span uk-icon="more-vertical" ratio="0.75"></span></button>
                            <div uk-dropdown="mode: click; pos: bottom-right" class="uk-padding-small">
                                <ul class="uk-nav uk-dropdown-nav">

                                    <li><a  href="{{route('edit', ['powerMeter' => $powerMeter])}}">Bearbeiten</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a
                                            onclick="event.preventDefault(); if(confirm('Stromzähler wirklich löschen?')) { document.getElementById('delete-{{$powerMeter->id}}').submit(); }">{{ __('translate.delete') }}</a>
                                    </li>

                                </ul>
                                <form id="delete-{{$powerMeter->id}}" method="POST" action="{{route('delete', ['powerMeter' => $powerMeter])}}">
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
            {{$powerMeters->links()}}
        </div>
    </div>
@endsection
