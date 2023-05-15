<?php
   

require_once 'app/utils/methods.php';

if(is_authenticate()){


        if($_SERVER['REQUEST_METHOD']=='POST'){

            require_once 'app/core/controllers/offer.php';
            $offer = new Offer();
            $offer->publish($_POST['type'], $_POST['titre'], $_POST['adresse'], $_POST['date_exp'], $_POST['annee_exp'], $_POST['diplome'],$_POST['nbr_post'], $_POST['act_principal'], $_POST['description'], $_POST['comp_req']);
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
    <?php
 require 'app/core/views/partial/header.php'
    ?>
    <!-- Top Header Wrapper End -->
    <!-- Header Wrapper Start -->
    <div class="jp_top_header_img_wrapper">
        <div class="gc_main_menu_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm full_width">
                        <div class="gc_header_wrapper">
                            <div class="gc_logo">
                                <a href="index.html">
                                    <img src="public/assets/images/index_vi/logo.png" alt="Logo" title="Job Pro" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12 center_responsive">
                        <div class="header-area hidden-menu-bar stick" id="sticker">
                            <!-- mainmenu start -->
                            <div class="mainmenu">
                                <div class="gc_right_menu">
                                    <ul>
                                        <li id="search_button">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_3" x="0px" y="0px" viewBox="0 0 451 451" style="enable-background:new 0 0 451 451;" xml:space="preserve">
                                                <g>
                                                    <path id="search" d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3   s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4   C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3   s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z" fill="#00e2bd" />
                                                </g>
                                            </svg>
                                        </li>
                                        <li>
                                            <div id="search_open" class="gc_search_box">
                                                <input type="text" placeholder="Search here">
                                                <button><i class="fa fa-search" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="float_left">

                                    <li class="has-mega gc_main_navigation"><a href="listing_single.php" class="gc_main_navigation"> Offres&nbsp;</a>
                                        <!-- mega menu start -->

                                    </li>

                                    <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation"> A propos&nbsp;</a>
                                        <!-- mega menu start -->

                                    </li>
                                    <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation"> Blog&nbsp;<i class="fa fa-angle-down"></i></a>
                                        <!-- mega menu start -->
                                        <ul>
                                            <li class="parent"><a href="blog_left.php">Blog-Left</a></li>
                                            <li class="parent"><a href="blog_right.php">Blog-Right</a></li>

                                        </ul>
                                    </li>
                                    <li class="gc_main_navigation parent"><a href="contact.php" class="gc_main_navigation">Contact</a></li>
                                </ul>
                            </div>
                            <!-- mainmenu end -->
                            <!-- mobile menu area start -->
                            <header class="mobail_menu">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6">
                                            <div class="gc_logo">
                                                <a href="index.html">
                                                    <img src="images/index_vi/logo.png" alt="Logo" title="Grace Church">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6">
                                            <div class="cd-dropdown-wrapper">
                                                <a class="house_toggle" href="#0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px">
                                                        <g>
                                                            <g>
                                                                <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#00e2bd" />
                                                            </g>
                                                            <g>
                                                                <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#00e2bd" />
                                                            </g>
                                                            <g>
                                                                <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#00e2bd" />
                                                            </g>
                                                            <g>
                                                                <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#00e2bd" />
                                                            </g>
                                                            <g>
                                                                <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#00e2bd" />
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </a>
                                                <nav class="cd-dropdown">
                                                    <h2><a href="#">ISH<span>EDE</span></a></h2>
                                                    <a href="#0" class="cd-close">Close</a>
                                                    <ul class="cd-dropdown-content">
                                                        <li>
                                                            <form class="cd-search">
                                                                <input type="search" placeholder="Search...">
                                                            </form>
                                                        </li>
                                                        <li class="has-children">
                                                            <a href="#">Acceuil</a>



                                                        </li>
                                                        <!-- .has-children -->


                                                        <li class="has-children">
                                                            <a href="#">Listing</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class="go-back"><a href="#0">Menu</a></li>


                                                                <li>
                                                                    <a href="listing_single.html">listing-Single</a>
                                                                </li>
                                                                <!-- .has-children -->

                                                            </ul>
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
                                                        <!-- .has-children -->
                                                        <li class="has-children">
                                                            <a href="#">Utilisateur</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class="go-back"><a href="#0">Menu</a></li>
                                                                <li><a href="company_listing.html">Liste des entreprises</a></li>
                                                                <li><a href="company_listing_single.html">Company-Single</a></li>
                                                                <li><a href="candidate_listing.html">Liste des candidat</a></li>
                                                                <li><a href="candidate_profile.html">Profil Candidat</a></li>
                                                                <!-- .has-children -->

                                                            </ul>
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
                                                        <li class="has-children">
                                                            <a href="about.php">A propos</a>


                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
                                                        <!-- .has-children -->
                                                        <li class="has-children">
                                                            <a href="#">Blog</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class="go-back"><a href="#0">Menu</a></li>
                                                                <li>
                                                                    <a href="blog_left.html">Blog-Left</a>
                                                                </li>
                                                                <!-- .has-children -->

                                                                <li>
                                                                    <a href="blog_right.html">Blog-Right</a>
                                                                </li>
                                                                <!-- .has-children -->


                                                            </ul>
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
                                                        <!-- .has-children -->
                                                        <li>
                                                            <a href="contact.html">Contact</a>
                                                        </li>


                                                    </ul>
                                                    <!-- .cd-dropdown-content -->



                                                </nav>
                                                <!-- .cd-dropdown -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- .cd-dropdown-wrapper -->
                            </header>
                        </div>
                    </div>
                    <!-- mobile menu area end -->

                </div>
            </div>
        </div>
    </div>
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
                                    <li><a href="Acceuil.php">Acceuil</a> <i class="fa fa-angle-right"></i></li>
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

                <form action="add_postin.php" method="POST">



                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="jp_adp_form_heading_wrapper">
                            <h2>Remplir le formulaire de l'offre</h2>
                        </div>
                        <div class="jp_adp_form_wrapper">
                            <input type="text" placeholder="Type d'offre" name="typ_offre" id="typ_offre">
                        </div>
                        

                        <div class="jp_adp_form_wrapper">
                            <input type="text" name="titre" id="titre" placeholder="insérer le titre de l'offre">
                        </div>

                        

                        <div class="jp_adp_form_wrapper">
                            <input type="date" name="date_exp" id="date_exp" placeholder="date d'expiration de l'offre">
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bottom_line_Wrapper">

                        
                        <div class="jp_adp_form_wrapper">
                            <input type="text" name="diplome" id="diplome" placeholder="Quel sont les diplôme requise?">

                        </div>


                        <div class="jp_adp_form_wrapper">
                            <input type="text" name="nbr_post" id="nbr_post" placeholder="Combien de place disponible pour l'offre">
                        </div>
                        <div class="jp_adp_form_wrapper">
                            <input type="text" name="act_principal" id="act_principal" placeholder="Quel est l'activité principal de l'offre">
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

                    
                        <input type="submit" name="btnAjouter" value="PUBLIER">
                </form>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_adp_choose_resume">

                        <div class="custom-input">
                            <span><i class="fa fa-upload"></i> &nbsp;Mise à jour offre</span>
                            <input type="file" name="resume" id="resume" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_adp_choose_resume_bottom_btn_post">
                        <ul>
                            <li><a href=""><i class="fa fa-plus-circle"></i>&nbsp; Publier une offre</a></li>
                        </ul>
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
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/custom_II.js"></script>
    <!--main js file end-->
</body>


<!-- Mirrored from www.webstrot.com/html/jobpro/job_light/add_postin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Apr 2023 09:31:01 GMT -->

</html>


