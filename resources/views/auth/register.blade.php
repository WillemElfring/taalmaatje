@extends('layouts.app')

@section('content')
        <!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/app.css">


</head>

    <body id="template-register">

    <div id="app">

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

                                <button type="submit" class="btn btn-default">
                                    Register
                                </button>

                            </div>

                    </form>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <script src="js/app.js"></script>

    </body>
@endsection
