@extends('layouts.app')
@section('content')

    <ul class="uk-breadcrumb uk-margin-top">
        <li><a href="/">Dashboard</a></li>
        <li><a href="{{ route('electricity-meters') }}">Stromzähler</a></li>
        <li><span>Stromzähler hinzufügen</span></li>
    </ul>

    <div uk-grid>
        <div class="uk-width-expand"><h1 class="uk-h3">Stromzähler hinzufügen</h1></div>
    </div>

    <div class="uk-card uk-card-default uk-padding-remove uk-margin-medium-top uk-margin-bottom">

        <div class="uk-card-header uk-padding-small">
            <div class="uk-text-uppercase">Fill out Electric Merer Data</div>
        </div>

        <div class="uk-card-body uk-padding-small">

            <form class="uk-form-stacked" method="post" action="{{ route('electricity-store') }}">
            @csrf
                <label for="device_id">Device_ID</label>
                <input type="text" id="device_id" name="device_id" class="uk-margin-remove-top">


                <div class="uk-margin">
                    <label class="uk-form-label" for="description">Description</label>
                    <div class="uk-form-controls">
                        <textarea required class="uk-textarea" name="description" id="description" placeholder="">{{old('description')}}</textarea>
                    </div>
                </div>

                <label for="location">Location</label>
                <input type="text" id="location" name="location">

                <label for="ebt">E-Room-Number</label>
                <input type="text" id="ebt" name="ebt">


                <div class="uk-margin-large-top">
                    <div class="uk-column-1-2 ">
                        <div><a href="{{  route('electricity-meters') }}" class="uk-button uk-button-default uk-button-large">Cancel</a></div>
                        <div><button type="submit" class="uk-button-danger uk-button uk-button-large uk-align-right uk-box-sizing-border">Add Electric Meter</button></div>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
