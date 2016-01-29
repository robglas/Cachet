@extends('layout.dashboard')

@section('content')
    <div class="content-panel">
        @if(isset($sub_menu))
        @include('dashboard.partials.sub-sidebar')
        @endif
        <div class="content-wrapper">
            <div class="header sub-header" id="application-setup">
                <span class="uppercase">
                    {{ trans('dashboard.settings.analytics.analytics') }}
                </span>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <form id="settings-form" name="SettingsForm" class="form-vertical" role="form" action="/dashboard/settings" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @include('dashboard.partials.errors')
                        <fieldset>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.analytics.analytics_google') }}</label>
                                        <input type="text" name="app_analytics" class="form-control" value="{{ $app_analytics }}" placeholder="UA-12345-12">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.analytics.analytics_gosquared') }}</label>
<<<<<<< HEAD
                                        <input type="text" name="$app_analytics_go_squared" class="form-control" value="{{ $app_analytics_go_squared }}" placeholder="GSN-12345-A">
=======
                                        <input type="text" name="app_analytics_go_squared" class="form-control" value="{{ $app_analytics_go_squared }}" placeholder="GSN-12345-A">
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.analytics.analytics_piwik_url') }}</label>
<<<<<<< HEAD
                                        <input type="text" name="app_analytics_pi_url" class="form-control" value="{{ $app_analytics_piwik_url }}" placeholder="piwik.example.org">
=======
                                        <input type="text" name="app_analytics_piwik_url" class="form-control" value="{{ $app_analytics_piwik_url }}" placeholder="piwik.example.org">
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.analytics.analytics_piwik_siteid') }}</label>
<<<<<<< HEAD
                                        <input type="number" min="1" max="100" name="app_analytics_pi_siteid" class="form-control" value="{{ $app_analytics_piwik_site_id ?: 1 }}">
=======
                                        <input type="number" min="1" max="100" name="app_analytics_piwik_site_id" class="form-control" value="{{ $app_analytics_piwik_site_id ?: 1 }}">
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">{{ trans('forms.save') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
