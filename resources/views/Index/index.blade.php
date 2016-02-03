@extends('template')

@section('title_tab')
   Apps
@stop

@section('site')
    decibro.fr
@stop

@section('title')
    Apps
@stop

@section('contenu')
	<div class="container">
	<section class="content-inner">
			<div class="card-wrap">
					<div class="row">
						<?php
							$height_px = '150';
							$full_pathname =  URL::to('Images/logo-phpmy.png');
							$pull = 'right';
							$link = 'http://www.decibro.fr/phpmyadmin/';
							$text_color = 'green';
							$text = 'Accès à PHPMyAdmin';
						?>
						@include('card')
						
						
							<?php 
								$height_px = '150';
								$full_pathname =  URL::to('Images/webmin_hosting1.png');
								$pull = 'right';
								$link = 'https://www.decibro.fr:10000/';
								$text_color = 'green';
								$text = 'Accès à Webmin';
							?>
						@include('card')
						
							<?php 
								$height_px = '150';
								$full_pathname =  URL::to('Images/360039.jpg');
								$pull = 'right';
								//$link = 'http://decibro.fr/cakebox';
								$link = URL::to('/cakebox');
								$text_color = 'green';
								$text = 'Accès à Cakebox';
								
							?>
						@include('card')
						
							<?php 
								$height_px = '150';
								$full_pathname = URL::to('Images/rutorrent.jpg');
								$pull = 'right';
								$link = 'http://rutorrent.decibro.fr/';
								$text_color = 'green';
								$text = 'Accès à ruTorrent';
								
							?>
						@include('card')
						
							<?php 
								$height_px = '150';
								$full_pathname = URL::to('Images/Owncloud-logo.png');
								$pull = 'right';
								$link = 'http://cloud.decibro.fr/';
								$text_color = 'green';
								$text = 'Accès à owncloud';
								
							?>
						@include('card')
						<?php 
								$height_px = '150';
								$full_pathname = URL::to('Images/googleplus-photo-cb6f717c8cfd8b48df6dbb09aa369198.png');
								$pull = 'right';
								$link = 'http://decibro.fr:32400/web/index.html';
								$text_color = 'green';
								$text = 'Accès à Plex';
								
							?>
						@include('card')
					</div>
				
			</div>
			</div>
			</section>
		</div>

	</div>
	
@stop