@extends('layouts.app')

<?php $template = 'register' ?>

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">

            <h1 class="welcome">I want to...</h1>
            <div class="pop">

                <form id="form-register" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="form-header">

                        <div class="radio selected">
                            <label>
                                <input type="radio" name="optionsRadios" value="findTaalmaatje" checked>
                                ...find a Taalmaatje
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" value="becomeTaalmaatje">
                                ...become a Taalmaatje
                            </label>
                        </div>

                    </div>

                    <div class="form-body">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input type="text" class="form-control" name="name" placeholder="first name" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" class="form-control" name="email" placeholder="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" class="form-control" name="password" placeholder="password" required>
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-control" placeholder="Confirm password" name="password_confirmation" required>
                        </div>

                        <button type="submit" class="btn btn-default">Register</button>

                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

@endsection