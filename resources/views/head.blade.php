<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{URL::to('materialize/css/materialize.min.css')}}"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
    <div class="navbar-fixed">
      <?php
          if(Session::has('ID_User')){
        ?>
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="{{URL::to('/')}}">Profil</a></li>
          <li><a href="{{URL::to('/logout')}}">Déconnexion</a></li>
        </ul>
         <?php
          }
        ?>
      <nav class="top-nav blue darken-4">
        
        <a href="@yield('title-url')" class="center brand-logo">@yield('title')</a>
        <ul id="slide-out" class="side-nav">
          <li><a href="{{URL::to('/logout')}}">Deconnexion</a></li>
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a>
      </nav>
    </div>
    <div class="container">