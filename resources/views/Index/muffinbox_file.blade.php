@extends('master_2')

@section('title')
	MuffinBox
@stop

@section('title-url')
	{{URL::to('/')}}
@stop 



@section('contenu')
<div class="container">
	<?php 
		echo '/videos/'.$file;
		$url =  URL::to('videos/'.$file);
	?>
	<div class="video-container">
		<embed id="divxplayer" 
		type="video/divx" width="853" height="480" src ="<?php echo $url; ?>" 
		autoPlay="false" pluginspage="http://go.divx.com/plugin/download/"></embed>
	</div>
	<div class="video-container">
	<embed type="application/x-vlc-plugin"
pluginspage="http://www.videolan.org"version="VideoLAN.VLCPlugin.2"  width="100%"        
height="100%" id="vlc" loop="yes"autoplay="no" target="<?php echo $url; ?>"></embed></div>
</div>
@stop