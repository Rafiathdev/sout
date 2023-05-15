<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'app/core/controllers/user.php';
    $user = new User();
    $new_user=$user-> register($_POST['email'], $_POST['phone'], 1, $_POST['password'], $_POST['confirm']);
    header('Location: /info?actor=company&u='.$new_user);
// Les variables pour récupérer les infos envoyées
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription_recruteur</title>
    <link rel="stylesheet" type="text/css" href="public/assets/css/style_II.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/css/responsive2.css" />
 
    <?php
	 require 'app/core/views/import/top.php';
     
	?> 

</head>
<body>

<div class="jp_top_header_main_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="jp_top_header_left_wrapper">
                        <div class="jp_top_header_left_cont">
                            <p><i class="fa fa-phone"></i> &nbsp;Phone &nbsp;+123456789</p>
                            <p class=""><i class="fa fa-envelope"></i> &nbsp;Email :&nbsp;<a href="#"><span class="__cf_email__" data-cfemail="8bcee6eae2e7cbeef3eae6fbe7eea5e8e4e6">[email&#160;protected]</span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="jp_top_header_right_wrapper">
                        <div class="jp_top_header_right_cont">
                            <ul>
                                <li><a href="/choice"><i class="fa fa-user"></i>&nbsp; SIGN UP</a></li>
                                <li><a href="/login"><i class="fa fa-sign-in"></i>&nbsp; LOGIN</a></li>
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
                            <h2>Register</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Register</li>
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
                                <li class="active"><a href="#contentOne-1" data-toggle="tab">Entreprise <br>
                                        <span>Recherche un employé</span></a>
                                </li>
                               
                                
                            </ul>-->


                            

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active register_left_form" id="contentOne-1">
                                    <div class="jp_regiter_top_heading">
                                        <h1><center><p>Créer votre compte </p></center></h1>
                                    </div>
                                    <div class="row ">
                                        <form action="" data-toggle="validator"  method="POST">
                                            <!--Form Group--
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label> Nom utilisateur </label>
                                            <input type="text" name="nom_U" id="nom_U" placeholder="entrez le nom utilisateur"
                                                    required>
                                            </div>

                                            -- Form Group--
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label>Nom Entreprise</label>
                                            <input type="text" name="nom_E" id="nom_E" placeholder="nom de l'entreprise"
                                                    required>
                                            </div>

                                            --Form Group--
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label>NºIFU</label>
                                            <input type="text" name="ifu" id="ifu"  placeholder="entrez l'IFU"
                                                    required>

                                            </div>
                                            --Form Group--
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label> RCCM</label>
                                            <input type="text" name="rccm" id="rccm" 
                                                    placeholder="entrez rccm">
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label>Télephone</label>
                                            <input type="text" name="telephone" id="telephone" 
                                                    placeholder="entrez votre numéro">
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label>Adresse</label>
                                            <input type="text" name="adresse" id="adresse" 
                                                    placeholder="entrez votre adresse">
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label>Site Web</label>
                                            <input type="text" name="site_web" id="site_web" 
                                                    placeholder="entrez votre site">
                                            </div>-->

                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label>Email</label>
                                            <input type="text" name="email" id="email" 
                                                    placeholder="entrez votre mail">
                                            </div>
                                            
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label>Telephone</label>
                                            <input type="tel" name="phone" id="phone" 
                                                    placeholder="entrez votre numero">
                                            </div>

                                            
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label> Password :</label>
                                                <input type="password" name="password" id="password" placeholder="password*"
                                                    onChange="onChange()" required>
                                            </div>
                                           <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label> Confirme Password :</label>
                                                <input type="password" name="confirm" id="password" onChange="onChange()"
                                                    placeholder="Confirmez mot de pass" required>
                                            </div>
                                            
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="check-box text-center">
                                                    <input type="checkbox" name="shipping-option" id="account-option_2">
                                                    &ensp;
                                                    <label for="account-option_2">J'accepte les <a href="#"
                                                            class="check_box_anchr">Terms et Conditions</a> d'utilisation de ISHEDE
                                                        </label>
                                                </div>
                                            </div>  
                                            <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
                                                <button type="submit" name="btnAjouter" class="btn btn-primary login_btn" >S'inscrire</button>
                                                <!-- <a type="submit" href="javascript:;" class="btn btn-primary login_btn"> register </a> -->
                                            </div>
                                        </form>
                                    </div>
                                    <div class="login_message">
                                        <p>Avez vous deja un compte? <a href="login.php"> connexion </a> </p>
                                    </div>

                            <div class="tab-content">
                                
                                <div class="tab-pane fade register_left_form" id="contentOne">
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
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/custom_II.js"></script>
    
   

</body>
</html>