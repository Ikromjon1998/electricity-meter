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
            <div class="uk-text-uppercase">Stromzähler Daten erfassen</div>
        </div>

        <div class="uk-card-body uk-padding-small">

            <form class="uk-form-stacked" method="post" action="{{ route('electricity-meter-store') }}">
            @csrf
                <x-forms.input label="Seriennummer" name="device_id" class="uk-margin-remove-top"></x-forms.input>

                <div class="uk-margin">
                    <label class="uk-form-label" for="description">Beschreibung</label>
                    <div class="uk-form-controls">
                        <textarea required class="uk-textarea" name="description" id="description" placeholder="">{{old('description')}}</textarea>
                    </div>
                </div>

                <x-forms.input label="Ort" name="location" required="false"></x-forms.input>

                <x-forms.input label="E-Bauteil" name="ebt" required="false"></x-forms.input>

                <div class="uk-margin-large-top">
                    <div class="uk-column-1-2 ">
                        <div><a href="{{  route('electricity-meters') }}" class="uk-button uk-button-default uk-button-large">Abbrechen</a></div>
                        <div><button type="submit" class="uk-button uk-button-primary uk-button-large uk-align-right">Stromzähler hinzufügen</button></div>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
