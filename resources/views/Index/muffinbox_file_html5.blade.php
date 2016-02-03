@extends('materialize')
@section('title-url')
	{{URL::to('/')}}
@stop 
@section('title')
MuffinBox
@stop

@section('contenu')
	<div class="container">
		<?php 
			echo '/videos/'.$file;
			$url =  URL::to('videos/'.$file);
		?>
		<div class="video-container">
		<video controls>
		  	<source type="video/divx" src="<?php echo $url; ?>"/>
		  	<!-- Texte alternatif en cas de non prise en charge de la balise video -->
		  	<p class="warning">Le format *.mkv n'est pas pris en charge par votre navigateur</p>
		</video>
	</div>	
	</div>
@stop
