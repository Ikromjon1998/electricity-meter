<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="uk-container">

        <div class="content-box">
            <ul class="uk-breadcrumb uk-margin-top">
                <li><a href="/">Dashboard</a></li>
                <li><span>Companies</span></li>
            </ul>

            <div uk-grid>
                <div class="uk-width-expand"><h1 class="uk-h3">Companies</h1></div>
                <div class="uk-width-auto">
                    <a class="uk-button-primary uk-button"
                       href="#">Add</a>
                </div>
            </div>

            <div class="uk-card uk-card-default uk-padding-remove uk-margin-medium-top uk-margin-bottom">
                <div class="uk-card-body uk-padding-remove">
                    <table class="uk-table uk-table-divider uk-table-hover">
                        <thead>
                        <tr>
                            <th class="uk-table-expand">Company</th>
                            <th>Last name</th>
                            <th>First name</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($companies as $company)
                            <tr>
                                <td class="uk-table-link">
                                    <a href="#" class="uk-link-reset">
                                        <div class="uk-text-small">{{ $company->company_name }}</div>
                                    </a>
                                </td>
                                <td class="uk-text-small">{{ $company->last_name ?? '-'  }}</td>
                                <td class="uk-text-small">{{ $company->first_name ?? '-'  }}</td>
                                <td class="uk-text-right">
                                    <button class="uk-button uk-button-link uk-button-small"><span uk-icon="more-vertical" ratio="0.75"></span></button>
                                    {{--                                <div uk-dropdown="mode: click; pos: bottom-right" class="uk-padding-small">--}}
                                    {{--                                    <ul class="uk-nav uk-dropdown-nav">--}}

                                    {{--                                        <li><a  href="#">Bearbeiten</a></li>--}}
                                    {{--                                        <li class="uk-nav-divider"></li>--}}
                                    {{--                                        <li><a--}}
                                    {{--                                                onclick="event.preventDefault(); if(confirm('Stromzähler wirklich löschen?')) { document.getElementById('delete-{{$electricity->id}}').submit(); }">{{ __('translate.delete') }}</a>--}}
                                    {{--                                        </li>--}}

                                    {{--                                    </ul>--}}
                                    {{--                                    <form id="delete-{{$electricity->id}}" method="POST" action="{{route('delete', ['electricity' => $electricity])}}">--}}
                                    {{--                                        @csrf--}}
                                    {{--                                        @method('DELETE')--}}
                                    {{--                                    </form>--}}
                                    {{--                                </div>--}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
