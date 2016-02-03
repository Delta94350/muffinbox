<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{ URL::to('materialize/css/materialize.min.css') }}"  media="screen,projection"/>
      <link href="http://vjs.zencdn.net/vjs-version/video-js.css" rel="stylesheet">

  	<!-- If you'd like to support IE8 -->
  	<script src="http://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

    
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a href="{{URL::to('/')}}" class="brand-logo">Decibro.fr</a>
        <ul class="right hide-on-med-and-down">
          <li>
            <form>
              <div class="input-field">
                <input id="search" type="search" required>
                <label for="search"><i class="material-icons">search</i></label>
              </div>
            </form>
          </li>
        </ul>
      </div>
    </nav>
  </div>
        
        
      @yield('contenu')
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="{{ URL::to('materialize/js/materialize.min.js') }}"></script>
      <script type="text/javascript">
        jQuery.expr[':'].Contains = function(a,i,m){
          return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase())>=0;
        };
        $('#search').on('input', function() {
          var filter = $(this).val();
          //alert($('#list'));
          if(filter) {
            // this finds all links in a list that contain the input,
            // and hide the ones not containing the input while showing the ones that do
            $('#tree').find("a#caca:not(:Contains(" + filter + "))").parent().hide();
            $('#tree').find("a#caca:Contains(" + filter + ")").parent().slideDown();
            $('#tree').find("span#caca2:not(:Contains(" + filter + "))").parent().hide();
            $('#tree').find("span#caca2:Contains(" + filter + ")").parent().slideDown();
          } else {
            $('#tree').find("li").slideDown();
          }
          return false;
        });
      </script>
    </body>
  </html>
