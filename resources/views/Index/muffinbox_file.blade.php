@extends('materialize')

@section('contenu')
<div class="container">
	<?php 
		echo '/videos/'.$file;
		$url =  URL::to('videos/'.$file);
	?>
	<div class="video-container">
		<embed id="divxplayer" 
		type="video/divx" width="853" height="480" src ="<?php echo $url; ?>" 
		autoPlay="false" pluginspage=\"http://go.divx.com/plugin/download/\"></embed>
	</div>
</div>
@stop