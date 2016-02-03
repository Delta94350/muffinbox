@extends('materialize')

@section('contenu')
	<div class="container">
	<ul id="tree" class="collection">
	<?php

		$video = array('mp4','mkv','flv','webm','wmv','avi');
		$images = array('png','jpg','jpeg','tiff','ico','gif');
		$pdfs = array('pdf');
		$subs = array('srt');

		function inarray($filename,$array){
			$ext = explode('.',$filename);
			return in_array($ext[count($ext)-1], $array);
		}


		while (false !== ($entry = $dirs->read())) {
			if($entry!='.'){
			    $filepath = "{$path}/{$entry}";
			    $latest_ctime = filectime($filepath);//like: 1402783996 that is timestamp so highest is latest.
			    $latest_filename = $entry;
			    $file_type = filetype($filepath);//get file type.
			    $file_size = filesize($filepath);//get file size.

			    if(is_dir($filepath)){
				    if(!$d_root){
				    	if($entry!='..'){
							$url_target = url('/').'/muffinbox/dirs/'.$cd.'/'.$entry;
						}else{
							$url_target = url('/').'/muffinbox/dirs/'.$cd;
							$parents = explode('/',url('/').'/muffinbox/dirs/'.$cd);
							//var_dump($parents);
							$url_target = str_replace('/'.$parents[count($parents)-1], '', $url_target);
						}
					}else{
						if($entry!='..'){						
							$url_target = url('/').'/muffinbox/dirs/'.$entry;		
						}else{
							continue;
						}										
					}
					$text = '<li class="collection-item avatar">
						      <i class="material-icons circle">folder</i>
						      <a id="caca" href="'.$url_target.'"><span class="title">'.$entry.'</span>
						      </a><p>'.$file_size.' ko</p>
						      
						    </li>';
				}else{
					if(!$d_root){
						$url_target = $url_target = url('/').'/muffinbox/files/'.$cd.'/'.$entry;
					}else{
						$url_target = $url_target = url('/').'/muffinbox/files/'.$cd.$entry;
					}
					$url =  URL::to('videos/'.$cd.'/'.$entry);

					$vid = false;
					$type = 'insert_drive_file';
					//$ext = explode('.',$entry);
					if(inarray($entry, $video)){
						$type = 'play_arrow';
						$vid = true;
					}else if(inarray($entry,$images)){
						$type = 'image';
					}else if(inarray($entry,$pdfs)){
						$type = 'picture_as_pdf';
					}else if(inarray($entry,$subs)){
						$type = 'subtitles';
					}

					if($vid){
						$con = '<a id="caca" href="'.$url_target.'"><span class="title">'.$entry.'</span>
						      </a><p>'.$file_size.' ko</p>';
					}else{
						$con = '<span id="caca2" class="title">'.$entry.'</span>
						      <p>'.$file_size.' ko</p>';
					}
					$text = '<li class="collection-item avatar">
						      <i class="material-icons circle red">'.$type.'</i>'
						      .$con.'<a download href="'.$url.'" class="secondary-content"><i class="material-icons">file_download</i></a>
						    </li>';
					
				}
				echo $text;
			}
	    }
	?>
  </ul>
</div>
@stop