@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">@lang('message.register')</div>
                    <div class="card-body">
                        {{ Form::open(['route' => 'register', 'enctype' => 'multipart/form-data']) }}
                            <div class="form-group row">
                                {{ Form::label(trans('message.name'), '', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                                <div class="col-md-6">
                                    {{ Form::text('name', '', ['class' => 'form-control'.($errors->has('name') ? ' is-invalid' : ''), 'required']) }}
                                    @include('commonts.errors')
                                </div>
                            </div>
                            <div class="form-group row">
                                {{ Form::label(trans('message.email'), '', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                                <div class="col-md-6">
                                    {{ Form::email('email', '', ['class' => 'form-control'.($errors->has('email') ? ' is-invalid' : ''), 'required']) }}
                                    @include('commonts.errors')
                                </div>
                            </div>
                            <div class="form-group row">
                                {{ Form::label(trans('message.avatar'), '', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                                <div class="col-md-6">
                                    {{ Form::file('image', ['class' => 'form-control'.($errors->has('image') ? ' is-invalid' : '')]) }}
                                    @include('commonts.errors')
                                </div>
                            </div>
                            <div class="form-group row">
                                {{ Form::label(trans('message.password'), '', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                                <div class="col-md-6">
                                    {{ Form::password('password', ['class' => 'form-control'.($errors->has('password') ? ' is-invalid' : ''), 'required']) }}
                                    @include('commonts.errors')
                                </div>
                            </div>
                            <div class="form-group row">
                                {{ Form::label(trans('message.password-confirm'), '', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                                <div class="col-md-6">
                                    {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    {{ Form::submit(trans('message.register'), ['class' => 'btn btn-primary']) }}
                                </div>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
