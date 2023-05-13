

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'app/core/controllers/user.php';
    $user = new User();
    $user-> login($_POST['email'], $_POST['password']);
    header('Location: /');
// Les variables pour récupérer les infos envoyées
}
?><!DOCTYPE html>


<head>
    <meta charset="utf-8" />
    <title></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Job Pro" />
    
    <!--srart theme style -->
    <?php
    
	 require 'app/core/views/import/top.php';
    
     
	?> 
    <link rel="stylesheet" type="text/css" href="public/assets/css/style_II.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/css/responsive2.css" />
</head>

<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status"><img src="/public/assets/images/header/loadinganimation.gif" id="preloader_image" alt="loader">
        </div>
    </div>
    <!-- Top Scroll End -->
    <!-- Top Header Wrapper Start -->
    <div class="jp_top_header_main_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="jp_top_header_left_wrapper">
                        <div class="jp_top_header_left_cont">
                            <p><i class="fa fa-phone"></i> &nbsp;Phone &nbsp;+229 00 00 00 00</p>
                            <p class=""><i class="fa fa-envelope"></i> &nbsp;Email :&nbsp;<a href="#"><span class="__cf_email__" data-cfemail="f9bc94989095b99c81989489959cd79a9694">[ISHEDE@gmail.com]</span></a></p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Top Header Wrapper End -->
    <!-- Header Wrapper Start -->
    <?php
 require 'app/core/views/partial/header.php'
    ?>
    <!-- Header Wrapper End -->
	  <!-- jp Tittle Wrapper Start -->
    <div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>Login</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="Acceuil.php">Acceuil</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Login</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
	
	<!-- jp login wrapper start -->
	<div class="login_section">
		<!-- login_form_wrapper -->
		<div class="login_form_wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<!-- login_wrapper -->
						<h1>Connexion</h1>
						<div class="login_wrapper">
							
                            <form method="POST">
                            <div class="formsix-pos">
								<div class="form-group i-email">
									<input type="email" class="form-control" required="" id="email2" placeholder="email">
								</div>
							</div>
							<div class="formsix-e">
								<div class="form-group i-password">
									<input type="password" class="form-control" required="" id="password2" placeholder="Password *">
								</div>
							</div>
							<div class="login_remember_box">
								<label class="control control--checkbox">Se rappeler
									<input type="checkbox">
									<span class="control__indicator"></span>
								</label>
								<a href="#" class="forget_password">
									Mot de pass oublier
								</a>
							</div>
							<div class="login_btn_wrapper">
								<input type="submit" class="btn btn-primary login_btn" value="Connexion"> 
							</div>
							<div class="login_message">
								<p>Vous n'aviez de compte ? <a href="inscription.php"> Inscrivez-vous </a> </p>
							</div>
                            </form>
							
						</div>
						
						<!-- /.login_wrapper-->
					</div>
				</div>
			</div>
		</div>
		<!-- /.login_form_wrapper-->
	</div>
	<!-- jp login wrapper end -->
	<!-- jp Newsletter Wrapper Start -->
    <?php
 require 'app/core/views/partial/footer.php';
 require 'app/core/views/import/bottom.php';
 
    ?>

<script src="public/assets/js/jquery.magnific-popup.js"></script>
    <script src="public/assets/js/custom_II.js"></script>
    <!--main js file end-->
</body>


<!-- Mirrored from www.webstrot.com/html/jobpro/job_light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Apr 2023 09:31:01 GMT -->
</html>