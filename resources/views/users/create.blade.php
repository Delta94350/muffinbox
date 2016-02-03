@extends('master_2')


@section('title')
	Inscription
@stop

@section('contenu')
	<main>
		<div class="container">
			<div class="row"></div><div class="row"></div><div class="row"></div>
	        <div class="row">
	      		<div class="col s12">
	      				<div class="row">
	      					{!! Form::open(['url' => 'user/create/check' ,'class'=>'col s12']) !!}
                        		<div class="input-field col s12"><i class="material-icons prefix">account_circle</i>
				          			<?php 
		                                $class='validate';
		                                $error="";
		                                if(null != ($errors->first('login-username'))){
		                                    $class='validate invalid';
		                                    $error = $errors->first('login-username');
		                                }
		                            ?>
				          			{!! Form::text('login-username', null, ['class' => $class,'id'=>'login-username']) !!}
				          			<label data-error="{{$error}}" for="login-username">Login</label>
				          		</div>
				          		<div class="input-field col s12"><i class="material-icons prefix">lock</i>
				          			<?php 
		                                $class='validate';
		                                $error="";
		                                if(null != ($errors->first('login-password'))){
		                                    $class='validate invalid';
		                                    $error = $errors->first('login-password');
		                                }
		                            ?>
				          			{!! Form::password('login-password', ['class' => $class,'id'=>'login-password']) !!}
				          			<label data-error="{{$error}}" for="login-password">Mot de passe</label>
				          		</div>
				          		<div class="input-field col s12"><i class="material-icons prefix">lock</i>
				          			<?php 
		                                $class='validate';
		                                $error="";
		                                if(null != ($errors->first('login-password2'))){
		                                    $class='validate invalid';
		                                    $error = $errors->first('login-password2');
		                                }
		                            ?>
				          			{!! Form::password('login-password2', ['class' => $class,'id'=>'login-password2']) !!}
				          			<label data-error="{{$error}}" for="login-password2">Répéter le mot de passe</label>
				          		</div>
				          		<div class="input-field col s12"><i class="material-icons prefix">email</i>
				          			<?php 
		                                $class='validate';
		                                $error="";
		                                if(null != ($errors->first('login-mail'))){
		                                    $class='validate invalid';
		                                    $error = $errors->first('login-mail');
		                                }
		                            ?>
				          			{!! Form::email('login-mail',null, ['class' => $class,'id'=>'login-mail']) !!}
				          			<label data-error="{{$error}}" for="login-mail">Adresse mail</label>
				          		</div>
				          		<div class="row"></div>
				          		<div class="row">
		                            <div class="input-field col s6">
		                                <button id="bnt" class="btn green darken-2 btn-block waves-attach waves-button">Créer le compte</button>
		                            </div>
                        		</div>
				          	{!! Form::close() !!}
				        </div>
	      		</div>
	    	</div>
	  	</div>
	</main>
	<?php
		if($errors->first('error')){
	?>
		<div id="modal1" class="modal">
		    <div class="modal-content">
		      <h4>Erreur</h4>
		      <p>{{$errors->first('error')}}</p>
		    </div>
		    <div class="modal-footer">
		      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">OK</a>
		    </div>
	  	</div>
	<?php
		}
	?>
	<?php
		if(Session::get('alert-success')){
	?>
		<div id="modal1" class="modal">
		    <div class="modal-content">
		      <h4>Success</h4>
		      <p>{{Session::get('alert-success')}}</p>
		    </div>
		    <div class="modal-footer">
		      <a href="{{URL::to('/')}}" class=" modal-action modal-close waves-effect waves-green btn-flat">OK</a>
		    </div>
	  	</div>
	<?php
		}
	?>
@stop

@section('script')
	<?php
		if($errors->first('error') || Session::get('alert-success')){
	?>
  			<script type="text/javascript">$('#modal1').openModal();</script> 
  	<?php  
  		}
  	

  	Session::forget('alert-success');

  	?>
@stop