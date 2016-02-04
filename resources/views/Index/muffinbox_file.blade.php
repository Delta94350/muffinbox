@extends('master_2')

@section('title')
	MuffinBox
@stop

@section('title-url')
	{{URL::to('/')}}
@stop 


<?php 
	//echo '/videos/'.$file;
	$url =  URL::to('videos/'.$file);
?>
@section('contenu')
	<div class=""><div class="row"></div>
		<div class="row">
		    <div class="col s12">
		      <ul class="tabs">
		        <li class="tab col s3"><a href="#divx" class="active">DivXPlayer</a></li>
		        <li class="tab col s3"><a href="#vlc">VLC WebPlayer</a></li>
		        <li class="tab col s3"><a href="#html5">HTML5 Player</a></li>
		      </ul>
		    </div>
		    <div class="row"></div>
		    <div id="divx" class="col s12"><div class="row"></div>
		    	<div class="card-panel teal lighten-2">Le navigateur Mozilla Firefox est conseillé pour ce player</div><div class="row"></div>
		    	<div class="video-container">
					<embed id="divxplayer" 
					type="video/divx" width="853" height="480" src ="<?php echo $url; ?>" 
					autoPlay="false" pluginspage="http://go.divx.com/plugin/download/"></embed>
				</div>
		    </div>

		    <div id="vlc" class="col s12">
		    		<div class="row"></div>
		    	<div class="card-panel teal lighten-2">Le navigateur Mozilla Firefox est conseillé pour ce player</div><div class="row"></div>
					<div class="video-container">
						<embed type="application/x-vlc-plugin" pluginspage="http://www.videolan.org"version="VideoLAN.VLCPlugin.2"  width="100%"        
							height="100%" id="vlc" loop="yes"autoplay="no" target="<?php echo $url; ?>">
						</embed>
					</div>
		    </div>
		    <div id="html5" class="col s12"><div class="row"></div>
		    	<div class="card-panel teal lighten-2">Le navigateur Google Chrome est conseillé pour ce player</div><div class="row"></div>
		    	<div class="video-container">
		    		<video controls>
	  					<source src="<?php echo $url; ?>">Your browser does not support the video tag.
					</video> 
				</div>
				
	 		</div>

	</div>
	<div class="fixed-action-btn horizontal click-to-toggle" style="bottom: 150px; right: 24px;">
    <a download class="btn-floating btn-large red" href="<?php echo $url; ?>">
      <i class="material-icons prefix">file_download</i>
    </a>

@stop