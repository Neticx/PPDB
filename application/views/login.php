<!DOCTYPE html>
<html>
<head>
  <title>Admin Pesantren Al'Azzam</title>

  <style type="text/css" media="screen">
      body {
    padding-top: 120px;
    padding-bottom: 40px;
    background-color: #eee;
  
  }
  .btn 
  {
   outline:0;
   border:none;
   border-top:none;
   border-bottom:none;
   border-left:none;
   border-right:none;
   box-shadow:inset 2px -3px rgba(0,0,0,0.15);
  }
  .btn:focus
  {
   outline:0;
   -webkit-outline:0;
   -moz-outline:0;
  }
  .fullscreen_bg {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-size: cover;
    background-position: 50% 50%;
    background-image: url('http://cleancanvas.herokuapp.com/img/backgrounds/color-splash.jpg');
    background-repeat:repeat;
  }
  .form-signin {
    max-width: 280px;
    padding: 15px;
    margin: 0 auto;
      margin-top:50px;
  }
  .form-signin .form-signin-heading, .form-signin {
    margin-bottom: 10px;
  }
  .form-signin .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  .form-signin .form-control:focus {
    z-index: 2;
  }
  .form-signin input[type="text"] {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: none;
    border-left-style: solid;
    border-color: #000;
  }
  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-top-style: none;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-color: rgb(0,0,0);
    border-top:1px solid rgba(0,0,0,0.08);
  }
  .form-signin-heading {
    color: #fff;
    text-align: center;
    text-shadow: 0 2px 2px rgba(0,0,0,0.5);
  }
  </style>
  <link href="<?= base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>

</head>
<body>

<div id="fullscreen_bg" class="fullscreen_bg"/>

<div class="container">
<?php $error = $this->session->flashdata("error"); ?>
          <div style="    width: 365px;    margin-left: 16px;" class="alert alert-<?php echo $error ? 'warning' : 'info' ?> alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $error ? $error : 'Enter your username and password' ?>
          </div>

    <h1 class="form-signin-heading text-active">Pesantren Tahfizul Qur'an Al'Azzam</h1>
    <form action="<?= site_url('auth'); ?>"  class="form-signin" method="POST">
      <h1 class="form-signin-heading text-active">Sign In</h1>
      <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="">
      <input type="password" class="form-control" name="password" placeholder="Password" required="">
      <button class="btn btn-lg btn-primary btn-block" type="submit">
        Sign In
      </button>
    </form>

</div>


</body>
</html>