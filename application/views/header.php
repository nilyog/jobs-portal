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
            <a href="<?php echo base_url(); ?>" class="brand-logo"> Jobs Recruters </a>
            <ul class="right hide-on-med-and-down">
              <li><a href="<?php echo base_url(); ?>jobs">Jobs</a></li>
              <li><a href="<?php echo base_url(); ?>recruiters">Recruiters</a></li>
               <li><a href="<?php echo base_url(); ?>companies">Companies</a></li>
              <!-- Dropdown Trigger -->
              <li><a class="waves-effect waves-light modal-trigger" href="#login_modal">Login</a></li>
              <!-- <li><a class="dropdown-button" href="#!" data-activates="subMenu">Login<i class="material-icons right">arrow_drop_down</i></a></li> -->
            </ul>
          </div>
        </nav>
      </div>
    </header>

  <!-- Login Modal Structure -->
  <div id="login_modal" class="modal login">
    <div class="modal-content">
      <h6 class="text-center">Jonseeker / Company Login</h6>
      <h6> &nbsp;</h6>
      <div class="row">
          <div class="input-field col s12">
              <input id="username" type="email" class="validate" name="username" required>
              <label for="username">Email id</label>
          </div>
          <div class="input-field col s12">
            <input id="login_pwd" type="password" class="validate" name="login_pwd" required>
            <label for="login_pwd"  >Password</label>
          </div>
          
      </div>  
    </div>
    <div class="modal-footer">
      <div class="row">
          <div class="col s6 offset-s6 ">
            <a href="" class=" modal-action modal-close waves-effect waves-green btn ">Login</a>
          </div>
          <div class="col s6"> 
            <h6 class="pull-left"> Not yet register <a href="" class="modal-action modal-close modal-register"> Register </a> </h6>
          </div>
          <div class="col s6 ">
           <h6 class="pull-right forgotpwd"> <a href="" class="modal-action modal-close modal-forgotpwd" href="#forgotPWD_modal" >  Forgot Password? </a> </h6>
          </div>
      </div>
    </div>
  </div>

<!-- Register Modal Structure -->
  <div id="register_modal" class="modal register">
    <div class="modal-content">
      <h6 class="text-center">Jonseeker / Company Register</h6>
      <h6> &nbsp;</h6>
      <div class="row">
          <div class="input-field col s12">
              <input id="reg_email" type="email" class="validate" name="reg_email" required>
              <label for="reg_email">Email id</label>
          </div>
          <div class="input-field col s12">
            <input id="pwd_org" type="password" class="validate" name="pwd_org" required>
            <label for="pwd_org"  >Password</label>
          </div>
          <div class="input-field col s12">
            <input id="reg_pwd" type="password" class="validate" name="reg_pwd" required>
            <label for="reg_pwd"  >Re Password</label>
          </div>
          
      </div>  
    </div>
    <div class="modal-footer">
      <div class="row">
          <div class="col s6 offset-s6 ">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn ">Login</a>
          </div> 
      </div>
    </div>
  </div>

<!-- Forgot password Modal Structure -->
  <div id="forgotPWD_modal" class="modal forgotpwd">
    <div class="modal-content">
      <h6 class="text-center">Forgot Password</h6>
      <h6> &nbsp;</h6>
      <div class="row">
          <div class="input-field col s12">
              <input id="reg_email" type="email" class="validate" name="reg_email" required>
              <label for="reg_email">Email id</label>
          </div>
          <div class="input-field col s12">
            <input id="pwd_org" type="password" class="validate" name="pwd_org" required>
            <label for="pwd_org"  >Password</label>
          </div>
          <div class="input-field col s12">
            <input id="reg_pwd" type="password" class="validate" name="reg_pwd" required>
            <label for="reg_pwd"  >Re Password</label>
          </div>
      </div>  
    </div>
    <div class="modal-footer">
      <div class="row">
          <div class="col s6 offset-s6 ">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn ">Submit</a>
          </div> 
      </div>
    </div>
  </div>



  