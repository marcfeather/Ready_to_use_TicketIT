@extends('layouts.app')
<head>
<script src="https://www.google.com/recaptcha/api.js"></script>
</head>


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 padding-loginForm">
                <div class="col-md-6 col-md-offset-4 center"><h2>Espace Client</h2></div>

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Adresse E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Mot de passe</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4 center">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Se souvenir de moi
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4 center">
                                <div class="g-recaptcha" data-sitekey='your_public_site_key'>
                                </div>

                                @if ($errors->has('g-recaptcha-response'))
                                <span id="help-block" class="help-block">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                                @endif

                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Connexion
                                </button>
                            </div>
                        </div>
                    </form>
                    <p class="col-md-6 col-md-offset-4 center padding-loginForm">Cliquez ici pour revenir sur notre site : </br>
                            <a class="lien_simple" href="#" target="_blank">Society Name</a>
                    </p>

                    <p class="col-md-6 col-md-offset-4 center padding-loginForm">
                    <b>Utilisateur test :</b> test1@example.fr</br>
                    <b>Mot de passe :</b> 123456
                    </p>
    </div>
</div>
@endsection
