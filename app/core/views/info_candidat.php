<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'app/core/controllers/user.php';
    $user = new User();
    $new_user = $_GET['u'];
    $user-> add_info_candidat($_POST['nom_c'], $_POST['prenom_c'], $_POST['date_n'], $_POST['sexe'], $_POST['niveau'], $_POST['nationalite'], $_POST['adresse'], $_POST['qualification'], 'pdf_cv', 'photo', $new_user);
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
                                <li class="active"><a href="#contentOne-1" data-toggle="tab">Candidat<br>
                                        <span>Recherche de travail</span></a>
                                </li>
                               
                                
                            </ul>-->

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active register_left_form" id="contentOne-1">
                                    <div class="jp_regiter_top_heading">
                                    <h1><center><p>Completer vos informations </p></center></h1>
                                    </div>
                                    <div class="row">
                                        <form action="" data-toggle="validator" method="POST" enctype="multipart/form-data">
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Nom </label>
                                                <input type="text" name="nom_c" id="nom_c" placeholder="entrez votre nom" required>
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Prénom</label>
                                                <input type="text" name="prenom_c" id="prenom_c" placeholder="entrez votre prénom " required>
                                            </div>

                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Sexe</label>
                                                <select name="sexe" id="sexe">
                                                    <option value="F"> Feminin </option>
                                                    <option value="M"> Masculin </option>
                                                </select>

                                            </div>

                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Date de naissance</label>
                                                <input type="date" name="date_n" id="date_n">

                                            </div>

                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Niveau</label>
                                                <select name="niveau" id="niveau">
                                                    <option value="CEP">CEP</option>
                                                    <option value="BEPC">BEPC</option>
                                                    <option value="CAP">CAP</option>
                                                    <option value="BAC">BAC</option>
                                                    <option value="Licence">Licence</option>
                                                    <option value="Master">Master</option>
                                                    <option value="Autres">Autres</option>
                                                </select>
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Nationalité</label>
                                                <input type="text" name="nationalite" id="nationalite" placeholder="Votre nationalité" required>
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Adresse</label>
                                                <input type="text" name="adresse" id="adresse" placeholder="Votre adresse ici" required>
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6 col-xs-12 custom_input" required>
                                                <label for="cv"> CV</label>
                                                <input type="file" name="pdf_cv" id="pdf_cv">
                                            </div>
                                           
                                            
                                            <!--Form Group
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Numero </label>
                                                <input type="tel" name="telephone" id="telephone" placeholder="numero" required>
                                            </div>-->
                                            
                                           
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12 custom_input" required>
                                                <label for="">Profil</label>
                                                <input type='file' name="photo" id="photo" onchange="readURL(this);" />
                                                <div class="img-upload">
                                                    <img id="blah" src="/public/assets/images/content/base.png" alt="your image" />
                                                </div>
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Qualification</label>
                                                <textarea type="text" name="qualification" id="qualification" placeholder="Vos qualification" required> </textarea>
                                            </div>
                                            

                                                <!--Form Group
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12 custom_input" required>
                                                <label for="cv"> Email </label>
                                                <input type="text" name="email" id="email" placeholder="votre mail">
                                            </div>

                                        
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12 custom_input" required>
                                                <label for="cv"> Telephone </label>
                                                <input type="tel" name="phone" id="phone" placeholder="votre numero">
                                            </div>

                                            Form Group--
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Password</label>
                                                <input id="password" type="password" name="password" value="" onChange="onChange()" placeholder=" mot de pass" required>
                                            </div>
                                            --Form Group--
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Confirm Password</label>
                                                <input type="password" name="confirm" value="" onChange="onChange()" placeholder="Confirmer mot de pass" required>
                                            </div>

                                            --Form Group-->


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
    <script src="public/assets/js/custom_II.js"></script>
    <script src="public/assets/js/jquery.magnific-popup.js"></script>
    

</body>

</html>