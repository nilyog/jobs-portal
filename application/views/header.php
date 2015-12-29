<!DOCTYPE html>
  <html>
    <head>
      <title> Jobs - Recruitment - Job Search </title>
        <!--Import Google Icon Font-->
       <!--  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        --> <!--Import materialize.css-->
        <link rel="icon" href="assets/images/favicon1.png" sizes="32x32" />
        <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="assets/css/custom.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <header>
      <!-- Dropdown Structure -->
      <ul id="subMenu" class="dropdown-content">
        <li><a href="<?php echo base_url(); ?>profile">Profile</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li><a href="#!">three</a></li>
      </ul>

       <div class="navbar-fixed">  
        <nav>
          <div class="nav-wrapper">
            <a href="<?php echo base_url(); ?>" class="brand-logo"> Jobs Recruiters </a>
            <ul class="right hide-on-med-and-down">
              <li><a href="<?php echo base_url(); ?>jobs">Jobs</a></li>
              <li><a href="<?php echo base_url(); ?>recruiters">Recruiters</a></li>
               <li><a href="<?php echo base_url(); ?>companies">Companies</a></li>
              <!-- Dropdown Trigger -->
              <li><a class="dropdown-button" href="#!" data-activates="subMenu">Login<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
          </div>
        </nav>
      </div>
    </header>

  