<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="theme-color" content="#00897b">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, width=device-width" name="viewport">
	<title>@yield('title_tab')</title>

	<!-- css -->
	<link href="{{ URL::to('css/base.min.css') }}" rel="stylesheet">

	<!-- css for this project -->
	<link href="{{ URL::to('css/project.min.css') }}" rel="stylesheet">

	<!-- css for this project -->
	<style type="text/css">
		body {
			padding-top: 56px;
			padding-bottom: 69px;
		}
	</style>

	<!-- favicon -->
	<!-- ... -->

	<!-- ie -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body class="avoid-fout page-green">
	<div class="avoid-fout-indicator avoid-fout-indicator-fixed">
		<div class="progress-circular progress-circular-alt progress-circular-center">
			<div class="progress-circular-wrapper">
				<div class="progress-circular-inner">
					<div class="progress-circular-left">
						<div class="progress-circular-spinner"></div>
					</div>
					<div class="progress-circular-gap"></div>
					<div class="progress-circular-right">
						<div class="progress-circular-spinner"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header class="header header-waterfall">
		<span class="header-logo">@yield('header_name')</span>
	</header>
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-lg-push-4 col-sm-6 col-sm-push-3">
					@yield('contenu')
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		//<![CDATA[ 
			function load(){
				document.getElementById('bnt').style.visibility = 'hidden';
				document.getElementById('load_bar').style.visibility = 'visible';
				return true;
			}
		//]]> 
	</script>
	<!-- js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="{{ URL::to('js/base.min.js') }}"></script>

	<!-- js for this project -->
	<script src="{{ URL::to('js/project.min.js') }}"></script>
</body>
</html>