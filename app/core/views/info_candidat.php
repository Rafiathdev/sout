<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'app/core/controllers/user.php';
    $user = new User();
    $new_user = $_GET['u'];
    $user->add_info_candidat($_POST['nom_c'], $_POST['prenom_c'], $_POST['date_n'], $_POST['sexe'], $_POST['niveau'], $_POST['nationalite'], $_POST['adresse'], $_POST['qualification'], 'pdf_cv', 'photo', $new_user);
    header('Location: /login');
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
                                        <h1>
                                            <center>
                                                <p>Completer vos informations </p>
                                            </center>
                                        </h1>
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
                                                <input type="date" class="form-control" name="date_n" id="date_n">

                                            </div>

                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Niveau</label>
                                                <select name="niveau" id="niveau" onchange="ajouterChampTexte()">
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
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12" id="champTexteContainer" style="display: none;">
                                                <label for="autresEtudes">Niveau d'etude :</label>
                                                <input type="text" id="autresEtudes" name="autresEtudes">
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Adresse</label>
                                                <input type="text" name="adresse" id="adresse" placeholder="Votre adresse ici" required>
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6 col-xs-12 custom_input" required>
                                                <label for="cv"> CV</label>
                                                <input type="file" class="form-control" name="pdf_cv" id="pdf_cv">
                                            </div>


                                            <!--Form Group
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Numero </label>
                                                <input type="tel" name="telephone" id="telephone" placeholder="numero" required>
                                            </div>-->


                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12 custom_input" required>
                                                <label for="">Profil</label>
                                                <input type='file' class="form-control" name="photo" id="photo" onchange="readURL(this);" />
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
                                                <input id="password" type="password" name="password" value="" onChange="onChange()" placeholder=" mot de passe" required>
                                            </div>
                                            --Form Group--
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Confirm Password</label>
                                                <input type="password" name="confirm" value="" onChange="onChange()" placeholder="Confirmer mot de passe" required>
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
                                                <button type="submit" id="signupButton" name="btnAjouter" class="btn btn-primary login_btn" style="display:none">You cannot see me</button>
                                                <span class="chipdeals-button btn btn-primary login_btn btn-block" amount="3" style="
                                                    position: relative;
                                                    background-color: rgb(2, 123, 253);
                                                    font-size: 1rem;
                                                    line-height: 1.125rem;
                                                    cursor: pointer;
                                                    text-transform: capitalize;
                                                    color:white !important;
                                                    transition: all 0.15s linear 0s;
                                                    padding: 1rem 2rem;
                                                    border-radius: 10px;
                                                    text-decoration: none !important;">S'inscrire</span>
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
    <script src="https://cdn.jsdelivr.net/gh/Chipdeals/mobile-money-api-Javascript@1.8.3/lib.min.js" apiKey="test-b8bf0477-34ed-4de9-86f8-0b8f38c98377"></script>
    <script>
        function ajouterChampTexte() {
            var selectElement = document.getElementById("niveau");
            var champTexteContainer = document.getElementById("champTexteContainer");

            if (selectElement.value === "Autres") {
                champTexteContainer.style.display = "block";
            } else {
                champTexteContainer.style.display = "none";
            }
        }
    </script>
    <script>
        document.addEventListener("chipdealsPaymentSucceeded", (event) => {
            var signupButton = document.getElementById("signupButton")
            signupButton.click()
            console.log(event.detail.description);
            console.log(event.detail);

            /* event.detail
  {
    "status": "success",
    "message": "Successfully processed transaction",
    "title": "Paiement effectué",
    "description": "Paiement a réussi",
    "code": 200,
    "fullTransaction": {
      "reference": "t-66a7879b-2af5-442c-b2ea-caa201c4a039",
      "senderPhoneNumber": "22951010580",
      "senderCountryCode": "BJ",
      "senderOperator": "MTN",
      "senderFirstName": "Dougbe",
      "senderLastName": "Dougbe",
      "status": "success",
      "statusMessage": "Successfully processed transaction",
      "statusMessageCode": 200,
      "startTimestampInSecond": 1685073059,
      "endTimestampInSecond": 1685073071,
      "originalCurrency": "USD",
      "originalAmount": 8,
      "currency": "XOF",
      "amount": 4893,
      "transactionType": "payment",
      "operatorReference": ""
    }
  }
*/
        });


           /*document.getElementById("date_n").setAttribute("min", "1900-01-01");
document.getElementById("date_n").setAttribute("max", "2010-12-31");


     let max = new Date();
max.setFullYear(2010);
document.getElementById("date_n").setAttribute("max", "2010-01-01");
document.getElementById("date_n").setAttribute("max", new Date().toISOString().split("T")[0]);


document.getElementById("date_n").setAttribute("max", max.toISOString().split("T")[0]);*/


       // let max = new Date();
            //max.setFullYear(2010);


        document.getElementById("date_n").max = new Date().toISOString().split("T")[0];
    </script>


</body>

</html>