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
            <div class="uk-text-uppercase">Electric meter characteristics</div>
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
@endsection
