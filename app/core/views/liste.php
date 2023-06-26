<!DOCTYPE html>

<html lang="en">
<!--<![endif]-->


<!-- Mirrored from www.webstrot.com/html/jobpro/job_light/listing_right.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Apr 2023 09:30:58 GMT -->
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
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="public/assets/images/header/favicon.ico" />
</head>


<body>
   <!-- preloader Start 
	<div id="preloader">
		<div id="status">
			<img src="public/assets/images/header/loadinganimation.gif" id="preloader_image" alt="loader">
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
                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 hidden-xs">
					<div class="jp_top_header_right_wrapper">
						
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
	<!-- map Wrapper Start -->
    <div class="jp_bottom_footer_Wrapper_header_img_wrapper">
        <div class="jp_slide_img_overlay"></div>
        <div class="jp_banner_heading_cont_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_job_heading_wrapper">
                            <div class="jp_job_heading">
                                <h1><span>+ de 3000</span> Offres</h1>
                                <p>Consulter la liste des offres ci dessous</p>
                            </div>
                        </div>
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
                
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_listing_tabs_wrapper">
                                
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="gc_causes_view_tabs_wrapper">
                                        <div class="gc_causes_view_tabs">
                                            <ul class="nav nav-pills">
                                                
                                                <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="tab-content">
                            <?php
								require_once 'app/core/database/models.php';
									$profile = new Model();
									$company_infos = $profile->read_joind();
								?>
                               
                             <div id="list" class="">
                                <div class="row">
                                    <?php foreach($company_infos as $company_info): ?>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="<?php echo $company_info['photo']?>" style = 'width:70%' alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4><?php echo $company_info['titre']?> (<?php echo $company_info['annee_exp']?> ans d'expérience)</h4>
                                                                <p><?php echo $company_info['nom_e']?></p>
                                                                <p><?php echo $company_info['type']?></p>
                                                                <ul>
                                                                    
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp;<?php echo $company_info['adresse']?></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class=""></i></a></li>
                                                                    <li><a href="/decrire?id=<?php echo $company_info['id']?>">Voir plus</a></li>
                                                                    <li><a href="/candidature?id=<?php echo $company_info['id']?>">Postuler</a></li>

                                                    
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        
                                    <?php endforeach ;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
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
    <script src="public/assets/js/jquery.magnific-popup.js"></script>
    <script src="public/assets/js/custom_II.js"></script>
    
    <!--main js file end-->
</body>

<!-- Mirrored from www.webstrot.com/html/jobpro/job_light/listing_right.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Apr 2023 09:30:58 GMT -->
</html>