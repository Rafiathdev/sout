

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'app/core/controllers/user.php';
    $user = new User();
    $user-> login($_POST['email'], $_POST['password']);
  
// Les variables pour récupérer les infos envoyées
}
?>


<!DOCTYPE html>


<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Administrateur</title>

  <!-- Favicons -->
  <link href="public/admin/assets/img/" rel="icon">
  <link href="public/admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="public/admin/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="public/admin/assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="public/admin/assets/css/style.css" rel="stylesheet">
  <link href="public/admin/assets/css/style-responsive.css" rel="stylesheet">
  
  
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="" method="POST">
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
          <input type="email" name="email" class="form-control" placeholder="Email" autofocus>
          <br>
          <input type="password" name="password" class="form-control" placeholder="Password">
          <label class="checkbox">
            <input type="checkbox" value="remember-me"> Remember me
            <span class="pull-right">
            <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
            </span>
            </label>
          <button class="btn btn-theme btn-block"  type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
          <hr>
         
          
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="emailrecover" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="public/admin/assets/lib/jquery/jquery.min.js"></script>
  <script src="public/admin/assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="public/admin/assets/lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
