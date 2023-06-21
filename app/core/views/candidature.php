<?php
	session_start()
     
	?> 
<!DOCTYPE html>

<html lang="en">
<!--<![endif]-->


<!-- Mirrored from www.webstrot.com/html/jobpro/job_light/blog_left.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Apr 2023 09:31:02 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Entretien</title>
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
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="public/assets/images/header/favicon.ico" />
</head>

<body>
    <!-- preloader Start 
    <div id="preloader">
        <div id="status"><img src="public/assets/images/header/loadinganimation.gif" id="preloader_image" alt="loader">
        </div>
    </div>-->
   
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
                
            </div>
        </div>
    </div>
	<!-- Top Header Wrapper End -->
	<!-- Header Wrapper Start -->
	<div class="jp_top_header_img_wrapper" >
		<div class="gc_main_menu_wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm full_width">
						<div class="gc_header_wrapper">
							<div class="gc_logo">
								<a href="index.html">
									<img src="public/assets/images/index_vi/logo.png" alt="" title="" class="img-responsive">
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-7 col-md-8 col-sm-12 col-xs-12 center_responsive">
						<div class="header-area hidden-menu-bar stick" id="sticker">
							<!-- mainmenu start -->
							<?php require 'partial/header.php'; ?>
	<?php
			
		require_once 'app/utils/methods.php';


		is_authenticate();
		

		if (is_authenticate() && $_SESSION['user_info']['type'] == 1) {
			
			echo $table1; 

		} else if (is_authenticate() && $_SESSION['user_info']['type'] == 2) {

			echo $table2;
			
		} else {

			echo $table3;
		}

	?>
                    <!-- mainmenu end -->
                    <!-- mobile menu area start -->
                    <header class="mobail_menu">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6">
                                    <div class="gc_logo">
                                        <a href="index.html">
                                            <img src="public/assets/images/index_vi/logo.png" alt="Logo" title="Grace Church">
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
                                                    <a href="#">Accueil</a>

                                                    
                                                    
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
                                                <li>
                                                    <a href="register.html">Sign Up</a>
                                                </li>
                                                <li>
                                                    <a href="login.html">Login</a>
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

    <div class="jp_downlord_main_wrapper">
        <div class=""></div>
        <style>
            form {
                max-width: 500px;
                margin: 0 auto;
                padding: 20px;
                background-color: #f2f2f2;
                border: 1px solid #ccc;
                border-radius: 5px;
            }
            label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
            }
            input[type="text"],
            input[type="email"],
            textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                margin-bottom: 10px;
                font-size: 16px;
                box-sizing: border-box;
            }
            input[type="file"] {
                margin-top: 10px;
                margin-bottom: 20px;
            }
            input[type="submit"] {
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            input[type="submit"]:hover {
                background-color: #45a049;
            }
        </style>
	<?php
                
                	
				require_once 'app/core/database/models.php';
				$profile = new Model();
				$offres = $profile->read_cand_id()->fetchAll();
                $id_offre = $_GET['id'];
                foreach ($offres as $offre) {
                    if($id_offre==$offre['id']){
                        echo '<script>alert("Vous avez deja postulé a cette offre")</script>'; 
                        $xxx=true;          
                    }                     
                }     

                if(isset($_POST['send'])) {


                    $nomFichierLettreMotivation = $_FILES['lettre_motiv']['name'];
                    $id_offre = $_GET['id'];
                  
                    require 'app/core/controllers/offer.php';
                        //$_SESSION['id'];
                        //$_SESSION['id_cand'];
                        $user = new Offer();
                        $user-> candidature($_FILES['lettre_motiv'], $_SESSION['id_cand'], $id_offre);

                       
                }

    ?>


	<form action="" method="POST" enctype="multipart/form-data">
        
		
        <?php
        if($xxx==true){
            echo '
            <h3 style="color:red">Vous avez deja postuler a cette offre</h3>';
        }
        else {
            echo '
             <label for="lettre">Lettre de motivation (pdf requis) :</label>
             <input type="file" name="lettre_motiv" accept=".pdf" >
             <br>

             <input type="submit"  value="Envoyer" name="send">';
        }                   
        ?>
	</form>


      
    </div>
    <!-- jp downlord Wrapper End -->
    <!-- jp Newsletter Wrapper Start -->
    <?php
 require 'app/core/views/partial/footer.php';
 require 'app/core/views/import/bottom.php';
 
    ?>
    <script src="public/assets/js/jquery.magnific-popup.js"></script>
    <script src="public/assets/js/custom_II.js"></script>
    
    <script>
        // Magnific popup-video//
        	$('.popup-youtube').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
        
                fixedContentPos: false
            });
    </script>
    <!--main js file end-->
</body>


</html>