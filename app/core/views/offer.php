<?php
   

require_once 'app/utils/methods.php';
require_once 'app/core/controllers/offer.php';
$offer = new Offer();
if(is_authenticate()){


        if($_SERVER['REQUEST_METHOD']=='POST'){

          
            $offer->publish($_POST['type'], $_POST['titre'], $_POST['adresse'], $_POST['date_exp'], $_POST['annee_exp'], $_POST['diplome'],$_POST['nbr_post'], $_POST['act_principal'], $_POST['description'], $_POST['comp_req'], $_POST['categories']);
        }
  
        
}
else{
   header('location: /login');

}

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Add-Posting</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Job Pro" />
    <meta name="keywords" content="Job Pro" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
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
        <div id="status"><img src="public/assets/images/header/loadinganimation.gif" id="preloader_image" alt="loader">
        </div>
    </div>
    <!-- Top Scroll End -->
    <!-- Top Header Wrapper Start -->
    <div class="jp_top_header_main_wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 hidden-xs">
					<div class="jp_top_header_left_wrapper">
						<div class="jp_top_header_left_cont">
							<p><i class="fa fa-phone"></i> &nbsp;Phone &nbsp;+229 00 00 00 00</p>
							<p class=""><i class="fa fa-envelope"></i> &nbsp;Email :&nbsp;<a href="#"><span class="__cf_email__" data-cfemail="9cd9f1fdf5f0dcf9e4fdf1ecf0f9b2fff3f1">Ishede@gmail.com</span></a>
							</p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<?php
 require 'app/core/views/partial/header.php'
    ?>
    <!-- Top Header Wrapper End -->
    <!-- Header Wrapper Start -->
    
    <!-- Header Wrapper End -->
    <!-- jp Tittle Wrapper Start -->
    <div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>Ajout_Offre</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href=" /">Acceuil</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Ajout_Offre</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- jp ad post Wrapper Start -->
    <div class="jp_adp_main_section_wrapper">
        <div class="container">
            <div class="row">

                <form action="" method="POST">



                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="jp_adp_form_heading_wrapper">
                            <h2>Remplir le formulaire de l'offre</h2>
                        </div>
                        <div class="jp_adp_form_wrapper">
                        
                             <label for="">Type d'offre</label>
                                        <select name="type" id="type"> 

                                        <option value="medical">Select type</option>
                                        <option value="medical">Par Quinzaine</option>
                                        <option value="medical">A distance</option>
                                        <option value="medical">A temps partiel</option>
                                        <option value="medical">A temps plein </option>

                                            
                                            
                                        </select>
         
                        </div>
                        

                        <div class="jp_adp_form_wrapper">
                        <label for="">Titre</label>
                            <input type="text" name="titre" id="titre" placeholder="insérer le titre de l'offre">
                        </div>
                        <?php 
                      
                        $categories = $offer-> recupCategorie();
                    
                        ?>
                        <div class="jp_adp_form_wrapper">
                        <label for="">Categories</label>
                                                <select name="categories" id="categories"> 

                                                    <option value="medical">Select category</option>

                                                    <?php foreach($categories as $categorie): ?>
                                                    <option value="<?= $categorie['id'] ?>"><?= $categorie['libelle'] ?></option>
                                                    <?php endforeach; ?>   
                                                    
                                                </select>
         
                        </div>

                        <div class="jp_adp_form_wrapper">
                        <label for="">Date d'expiration</label>
                            <input type="date" name="date_exp" id="date_exp" placeholder="date d'expiration de l'offre">
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bottom_line_Wrapper">

                        
                        <div class="jp_adp_form_wrapper">
                        <label for="">Diplome</label>
                            <input type="text" name="diplome" id="diplome" placeholder="Quel sont les diplôme requise?">

                        </div>
                        <div class="jp_adp_form_wrapper">
                        <label for="">Annee d'experience</label>
                            <input type="text" name="annee_exp" id="annee_exp" placeholder="Annee d'experience requise pour l'offre">
                        </div>


                        <div class="jp_adp_form_wrapper">
                        <label for="">Nombre de poste disponible</label>
                            <input type="text" name="nbr_post" id="nbr_post" placeholder="Combien de place disponible pour l'offre">
                        </div>
                        <div class="jp_adp_form_wrapper">
                        <label for="">Activite principale</label>
                            <input type="text" name="act_principal" id="act_principal" placeholder="Quel est l'activité principale de l'offre">
                        </div>
                        <div class="jp_adp_form_wrapper">
                        <label for="">Adresse</label>
                            <input type="text" name="adresse" id="adresse" placeholder="Adresse de l'entreprise">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_adp_textarea_main_wrapper">
                            <textarea rows="7" placeholder="Description" id="description" name="description"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_adp_textarea_main_wrapper">
                            <textarea rows="7" name="comp_req" id="comp_req" cols="30" rows="10" placeholder="Quel sont les compétences que vous rechercher?"></textarea>
                        </div>
                    </div>

                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_adp_choose_resume_bottom_btn_post">
                        <ul>
                            <button type="submit"><i class="fa fa-plus-circle" ></i>&nbsp; Publier offre</button>
                           
                        </ul>
                    </div>
                </div>
                </form>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_adp_choose_resume">

                        <div class="custom-input">
                            <span><i class="fa fa-upload"></i> &nbsp;Mise à jour offre</span>
                            <input type="file" name="resume" id="resume" />
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- jp ad post Wrapper End -->
    <!-- jp downlord Wrapper Start -->

    <!-- jp Newsletter Wrapper Start -->
    <?php
 require 'app/core/views/partial/footer.php';
 require 'app/core/views/import/bottom.php';
    ?>
    <script src="public/assets/js/jquery.magnific-popup.js"></script>
    <script src="public/assets/js/custom_II.js"></script>
    <!--main js file end-->
</body>


<!-- Mirrored from www.webstrot.com/html/jobpro/job_light/add_postin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Apr 2023 09:31:01 GMT -->

</html>


