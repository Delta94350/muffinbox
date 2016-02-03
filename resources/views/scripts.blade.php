</div><!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="{{URL::to('materialize/js/materialize.min.js')}}"></script>
  <script type="text/javascript" src='https://www.google.com/recaptcha/api.js'></script>
  <script type="text/javascript">
	  /*(function($){
	  	$(function(){
	  		$('.button-collapse').sideNav();
	  		$('.collapsible').collapsible();
	  	}); // end of document ready
	  })(jQuery); // end of jQuery name space*/
	  // Initialize collapse button
	  $(".button-collapse").sideNav();
	  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
	  $('.collapsible').collapsible();
  </script>
  @yield('script')