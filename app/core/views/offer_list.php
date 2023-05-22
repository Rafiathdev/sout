<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>candidate Listing</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Job Pro" />
    <meta name="keywords" content="Job Pro" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--srart theme style -->
    <?php
	 require 'app/core/views/import/top.php';
	?>
    <link rel="stylesheet" href="public/assets/css/styl.css">
    <link rel="stylesheet" type="text/css" href="public/assets/css/style_II.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/css/responsive2.css" />
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="public/assets/images/header/favicon.ico" />
</head></head>

<body>
    <!-- preloader Start 
    <div id="preloader">
        <div id="status"><img src="images/header/loadinganimation.gif" id="preloader_image" alt="loader">
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
                            <p><i class="fa fa-phone"></i> &nbsp;Phone &nbsp;+123456789</p>
                            <p class=""><i class="fa fa-envelope"></i> &nbsp;Email :&nbsp;<a href="#"><span class="__cf_email__" data-cfemail="4f0a222e26230f2a372e223f232a612c2022">[email&#160;protected]</span></a></p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Top Header Wrapper End -->
    <!-- Header Wrapper Start -->
    <div class="jp_top_header_img_wrapper">
        <div class="gc_main_menu_wrapper">
            <div class="container-fluid">
                <div class="row">
                    
                 <!-- mobile menu area end -->
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                        <div class="jp_navi_right_btn_wrapper">
                            <ul>
                                <li><a href="/offer"><i class="fa fa-plus-circle"></i>&nbsp; Post a job</a></li>
                            </ul>
                        </div>
                    </div>
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
       
                </div>
            </div>
        </div>
    </div>
    <!-- Header Wrapper End -->
    <!-- Header Wrapper End -->
    <div class="jp_bottom_footer_Wrapper_header_img_wrapper">
        <div class="jp_slide_img_overlay"></div>
        <div class="jp_banner_heading_cont_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_job_heading_wrapper">
                            <div class="jp_job_heading">
                                <h1><span>3,000+</span> Browse Jobs</h1>
                                <p>Find Jobs, Employment & Career Opportunities</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Header W rapper End -->
    <!-- jp listing sidebar Wrapper Start -->
    <div class="jp_listing_sidebar_main_wrapper">
        <div class="container">
            <div class="row">
            <?php
                
                if(isset($_GET['id']) && !empty($_GET['id'])) {
                    $id = htmlspecialchars($_GET['id']);
                    require_once 'app/core/controllers/offer.php';
                    $info = new Offer();
                    $offre_info = $info->read_offre($id);
                    //$data = $offre_info->fetch();
                    //var_dump($data);
                }
                ?>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper">
                               
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 jp_cl_right_bar">
                    <div class="row">
                     <?php foreach($offre_info as $offre): ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="jp_recent_resume_box_wrapper">
								<div class="jp_recent_resume_img_wrapper">
                                <h5><?php echo $offre['categories']?></h5>
								</div>
								<div class="jp_recent_resume_cont_wrapper">
									<h3><?php echo $offre['titre']?></h3>
									<p><i class="fa fa-folder-open-o"></i> <a href="#"><?php echo $offre['type']?></a></p>
								</div>
								<div class="jp_recent_resume_btn_wrapper">
								    <ul>
                                        <li><a href="/voirModifie?id=<?php echo $offre['id']?>">Modifier</a></li><br>
									</ul>
                                    <ul>
                                        <li><a href="/delete?id=<?php echo $offre['id']?>">Supprimer</a></li>
									</ul>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
  
    <!-- jp downlord Wrapper End -->
    <!-- jp Newsletter Wrapper Start -->
    <?php
 require 'app/core/views/partial/footer.php';
 require 'app/core/views/import/bottom.php';
    ?>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/custom_II.js"></script>
    <!--main js file end-->
</body>
    <!--main js file end-->
</body>


<!-- Mirrored from www.webstrot.com/html/jobpro/job_light/candidate_listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Apr 2023 09:31:00 GMT -->
</html>