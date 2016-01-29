@extends('layout.dashboard')

@section('content')
    <div class="header">
        <div class="sidebar-toggler visible-xs">
            <i class="icon ion-navicon"></i>
        </div>
        <span class="uppercase">
            <i class="icon ion-person"></i> {{ trans('dashboard.subscribers.subscribers') }}
        </span>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
            @include('dashboard.partials.errors')
            <form name="SubscriberForm" class="form-vertical" role="form" action="/dashboard/subscribers/add" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                <div class="form-group">
                    <label>{{ trans('forms.user.email') }}</label>
<<<<<<< HEAD
                    <input type="email" class="form-control" name="email" value="{{ Input::old('email') }}" required>
=======
                    <input type="email" class="form-control" name="email" value="{{ Binput::old('email') }}" required>
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
                </div>
                </fieldset>

                <div class="form-group">
<<<<<<< HEAD
                <button type="submit" class="btn btn-success">{{ trans('forms.add') }}</button>
=======
                    <div class='btn-group'>
                        <button type="submit" class="btn btn-success">{{ trans('forms.add') }}</button>
                        <a class="btn btn-default" href="{{ route('dashboard.subscribers.index') }}">{{ trans('forms.cancel') }}</a>
                    </div>
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
                </div>
            </form>
            </div>
        </div>
    </div>
@stop
