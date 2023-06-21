<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'app/core/controllers/user.php';
    $user = new User();
    $new_user=$user-> register($_POST['email'], $_POST['phone'], 2, $_POST['password'], $_POST['confirm']);
    header('Location: /info?u='.$new_user);
// Les variables pour récupérer les infos envoyées
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription_candidat</title>

    <?php
	 require 'app/core/views/import/top.php';
	?>

    <link rel="stylesheet" type="text/css" href="public/assets/css/style_II.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/css/responsive2.css" />
</head>

<body>
  
    <!-- Top Scroll End -->
    <!-- Top Header Wrapper Start -->
    <div class="jp_top_header_main_wrapper">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="jp_top_header_left_wrapper">
                        <div class="jp_top_header_left_cont">
                            <p> &nbsp; &nbsp;</p>
                            <p class=""> &nbsp; &nbsp;&nbsp;<a
                       href="#"><span class="__cf_email__" ></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="jp_top_header_right_wrapper">
                        <div class="jp_top_header_right_cont">
                            <ul>
                                <li><a href="/register"><i class="fa fa-user"></i>&nbsp; INSCRIPTION</a></li>
                                <li><a href="/login"><i class="fa fa-sign-in"></i>&nbsp; CONNEXION</a></li>
                            </ul>
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
                            <h2>Inscription</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="/">Accueil</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Inscription</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->

    <!-- jp register wrapper start -->
    <div class="register_section">
        <!-- register_form_wrapper -->
        <div class="register_tab_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div role="tabpanel">

                            <!-- Nav tabs 
                            <ul id="tabOne" class="nav register-tabs">
                                <li class="active"><a href="#contentOne-1" data-toggle="tab">Candidat<br>
                                        <span>Recherche de travail</span></a>
                                </li>
                               
                                
                            </ul>-->

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active register_left_form" id="contentOne-1">
                                    <div class="jp_regiter_top_heading">
                                    <h1><center><p>Créer votre compte </p></center></h1>
                                    </div>
                                    <div class="row">
                                        <form action="" data-toggle="validator" method="POST">
                                            

                                            <div class="form-group col-md-6 col-sm-6 col-xs-12 custom_input" required>
                                                <label for="cv"> Email </label>
                                                <input type="text" name="email" id="email" placeholder="votre mail">
                                            </div>

                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12 custom_input" required>
                                                <label for="cv"> Telephone </label>
                                                <input type="tel" name="phone" id="phone" placeholder="votre numero">
                                            </div>

                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Password</label>
                                                <input id="password" type="password" name="password" value="" onChange="onChange()" placeholder=" mot de passe" required>
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Confirm Password</label>
                                                <input type="password" name="confirm" value="" onChange="onChange()" placeholder="Confirmer mot de passe" required>
                                            </div>

                                            <!--Form Group-->


                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="check-box text-center">
                                                    <input type="checkbox" name="shipping-option" id="account-option_1">
                                                    &ensp;
                                                    <label for="account-option_1">J'accepte les <a href="#" class="check_box_anchr">Terms et Conditions</a> de l'utilisation de ISHEDE
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
                                                <button type="submit" name="btnAjouter" class="btn btn-primary login_btn">S'inscrire</button>
                                                <!-- <a type="submit" href="javascript:;" class="btn btn-primary login_btn"> register </a> -->
                                            </div>
                                        </form>
                                    </div>
                                    <div class="login_message">
                                        <p>Vous avez déjà un compte? <a href="/login"> Connexion </a> </p>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp register wrapper end -->

    <!-- jp Newsletter Wrapper Start -->
    <?php
 require 'app/core/views/partial/footer.php';
 require 'app/core/views/import/bottom.php';
    ?>
    

</body>

</html>