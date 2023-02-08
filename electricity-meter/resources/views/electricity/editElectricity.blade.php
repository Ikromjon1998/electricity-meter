@extends('layouts.app')
@section('content')

    <ul class="uk-breadcrumb uk-margin-top">
        <li><a href="/">Dashboard</a></li>
        <li><a href="{{ route('electricity-meters') }}">Stromzähler</a></li>
        <li>
            <a href="{{ route('electricity-view', ['electricityMeter' => $electricityMeter]) }}">{{ $electricityMeter->device_id }}</a>
        </li>
        <li><span>Update Electric Meter</span></li>
    </ul>

    <div uk-grid>
        <div class="uk-width-expand"><h1 class="uk-h3">Stromzähler {{ $electricityMeter->device_id }} bearbeiten</h1>
        </div>
    </div>

    <div class="uk-card uk-card-default uk-padding-remove uk-margin-medium-top uk-margin-bottom">

        <div class="uk-card-header uk-padding-small">
            <div class="uk-text-uppercase">Stromzähler Daten bearbeiten</div>
        </div>

        <div class="uk-card-body uk-padding-small">

            <form class="uk-form-stacked" method="post" action="{{ route('electricity-update', ['electricityMeter' => $electricityMeter]) }}">
                @csrf
                @method('PATCH')
                <label for="device_id">Device_ID</label>
                <input type="text" id="device_id" name="device_id" value="{{$electricityMeter->device_id}}">

                <div class="uk-margin">
                    <label class="uk-form-label" for="description">Description</label>
                    <div class="uk-form-controls">
                        <textarea required class="uk-textarea" name="description" id="description"
                                  placeholder="">{{old('description', $electricityMeter->description)}}</textarea>
                    </div>
                </div>

                <label for="location">Location</label>
                <input type="text" id="location" name="location" value="{{$electricityMeter->location}}">

                <label for="ebt">E-Room-Number</label>
                <input type="text" id="ebt" name="ebt" value="{{$electricityMeter->ebt}}">

                <div class="uk-margin-large-top">
                    <div class="uk-column-1-2 ">
                        <div><a href="{{ route('electricity-view', ['electricityMeter' => $electricityMeter]) }}"
                                class="uk-button uk-button-default uk-button-large">Cancel</a></div>
                        <div>
                            <button type="submit" class="uk-button uk-button-primary uk-button-large uk-align-right">
                                Update
                            </button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
