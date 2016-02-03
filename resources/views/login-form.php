@extends('master')

@section('title_tab')
   Login
@stop

@section('header_name')
    decibro.fr
@stop


@section('contenu')

    
    <section class="content-inner">
                        <div class="card-wrap">
                            <div class="card">
                                <div class="card-main">
                                <div id="load_bar" style="visibility: hidden;" class="progress progress-position-absolute-bottom">
                                    <div class="load-bar">
                                        <div class="load-bar-base">
                                            <div class="load-bar-content">
                                                <div class="load-bar-progress"></div>
                                                <div class="load-bar-progress load-bar-progress-alt"></div>
                                                <div class="load-bar-progress load-bar-progress-purple"></div>
                                                <div class="load-bar-progress load-bar-progress-red"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="load-bar">
                                        <div class="load-bar-base">
                                            <div class="load-bar-content">
                                                <div class="load-bar-progress"></div>
                                                <div class="load-bar-progress load-bar-progress-red"></div>
                                                <div class="load-bar-progress load-bar-progress-purple"></div>
                                                <div class="load-bar-progress load-bar-progress-alt"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="card-header">
                                        <div class="card-inner">
                                            <h1 class="card-heading ">Connexion</h1>
                                        </div>
                                    </div>
                                    <div class="card-inner">
                                        <p class="text-center">
                                            <span class="avatar avatar-inline avatar-lg">
                                                <img alt="Login" src="{{ URL::to('Images/users/avatar-001.jpg') }}">
                                            </span>
                                        </p>
                                        {!! Form::open(['url' => 'home/apps' , 'onsubmit' => 'return load();']) !!}
                                            <div class="form-group-green form-group-label ">
                                                <div class="row">
                                                    <div class="col-md-10 col-md-push-1">
                                                        <label class="floating-label" for="'pseudo'">Login</label>
                                                        {!! Form::text('login-username', null, ['class' => 'form-control']) !!}
                                                        {!! $errors->first('login-username', '<small class="help-block">:message</small>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-green form-group-label">
                                                <div class="row">
                                                    <div class="col-md-10 col-md-push-1">
                                                        <label class="floating-label" for="'pseudo'">Login</label>
                                                        {!! Form::password('login-password', ['class' => 'form-control']) !!}
                                                        {!! $errors->first('login-password', '<small class="help-block">:message</small>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-green form-group-label">
                                                <div class="row">
                                                    <div class="col-md-10 col-md-push-1">
                                                        <div class="g-recaptcha" data-sitekey="6LeNYwsTAAAAALGEjnpghB6jUpZMcI-pm2WxkgGX" data-size="normal"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-10 col-md-push-1">
                                                        <button id="bnt" class="btn btn-green btn-block waves-attach waves-button">Se connecter</button>
                                                    </div>
                                                </div>
                                            </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">
                            <p class="margin-no-top pull-right"><a class="btn btn-flat btn-blue waves-attach">Création de compte</a></p>
                        </div>
                    </section>
@stop