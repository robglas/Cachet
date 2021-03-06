@extends('layout.dashboard')

@section('content')
    <div class="header">
        <div class="sidebar-toggler visible-xs">
            <i class="icon ion-navicon"></i>
        </div>
        <span class="uppercase">
            <i class="icon ion-person"></i> {{ trans('dashboard.team.team') }}
        </span>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                @include('dashboard.partials.errors')
                <form name="UserForm" class="form-vertical" role="form" action="/dashboard/team/invite" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <div class="form-group">
                            <label>{{ trans('forms.user.team.description') }}</label>
                            <input type="email" class="form-control" name="emails[]" placeholder="{{ trans('forms.user.team.email', ['id' => 1]) }}" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="emails[]" placeholder="{{ trans('forms.user.team.email', ['id' => 2]) }}">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="emails[]" placeholder="{{ trans('forms.user.team.email', ['id' => 3]) }}">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="emails[]" placeholder="{{ trans('forms.user.team.email', ['id' => 4]) }}">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="emails[]" placeholder="{{ trans('forms.user.team.email', ['id' => 5]) }}">
                        </div>
                    </fieldset>

                    <div class="form-group">
<<<<<<< HEAD
                        <button type="submit" class="btn btn-success">{{ trans('forms.invite') }}</button>
=======
                        <div class='btn-group'>
                            <button type="submit" class="btn btn-success">{{ trans('forms.invite') }}</button>
                            <a class="btn btn-default" href="{{ route('dashboard.team.index') }}">{{ trans('forms.cancel') }}</a>
                        </div>
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
