<!DOCTYPE html>

<html lang="en">
<!--<![endif]-->


<!-- Mirrored from www.webstrot.com/html/jobpro/job_light/listing_single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Apr 2023 09:30:58 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Listing_single</title>
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
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="jp_top_header_right_wrapper">
                        <div class="jp_top_header_right_cont">
                            <ul>
                                <li><a href="inscription.html"><i class="fa fa-user"></i>&nbsp; INSCRIPTION</a></li>
                                <li><a href="login.html"><i class="fa fa-sign-in"></i>&nbsp; CONNEXION</a></li>
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
                        
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Jobs</a> <i class="fa fa-angle-right"></i></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- jp listing Single cont Wrapper Start -->
    <div class="jp_listing_single_main_wrapper">
        <div class="container">
            <div class="row">
            <?php
                
                if(isset($_GET['id']) && !empty($_GET['id'])) {
                    $id = htmlspecialchars($_GET['id']);
                    require_once 'app/core/database/models.php';
                    $info = new Model();
                    $offre_info = $info->read_join($id);
                    $data = $offre_info->fetch();
                   // var_dump($data);
                }
                ?>

            <?php
                
                if(isset($_POST['modifier'])) {
                    require 'app/core/controllers/user.php';
                   
                        $user = new User();
                        $user-> update_offer($_POST['date_exp'], $_POST['act_principal'], $_POST['description'], $_POST['comp_req'], $_POST['id']);

                   
                }
                ?>
                
                <form action="" method="POST">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_listing_left_sidebar_wrapper">
                    <div class="jp_job_res jp_job_qua">
                            <h2> Date expiration</h2>
                            <p><?php echo $data['date_exp']?></p>
                            <input type="date" value=""  name="date_exp">
                        </div>
                        <div class="jp_job_res">
                            <h2>Activité Principal</h2>
                            <p><input type="text" value="<?php echo $data['act_principal']?>" name="act_principal"></p>
                            
                        </div>
                        <div class="jp_job_des">

                            <h2> Description</h2>
                            <p><input type="text" value="<?php echo $data['description']?>" name="description"></p>
                            
                        </div>
                        
                        <div class="jp_job_res jp_job_qua">
                            <h2> Competence requise</h2>
                            <p><input type="text" value="<?php echo $data['comp_req']?>" name="comp_req"></p>
                        </div>
                        
                        <input type="hidden" value="<?php echo $data['id']?>"  name="id">
                        <input type="submit" value="valider" name="modifier" style="background-color:blue; margin-top:50px; margin-left:500px; padding:15px" >
                    </div>
                  
                </div>
                </form>
                
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
    <script>
        function initMap() {
        	var uluru = {lat: -36.742775, lng:  174.731559};
        	var map = new google.maps.Map(document.getElementById('map'), {
        	zoom: 15,
        	scrollwheel: false,
        	center: uluru
        	});
        	var marker = new google.maps.Marker({
        	position: uluru,
        	map: map
        	});
        	}
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmdG8C6ItElq5ipuFv6O9AE48wyZm_vqU&amp;callback=initMap">
    </script>
</body>


<!-- Mirrored from www.webstrot.com/html/jobpro/job_light/listing_single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Apr 2023 09:30:58 GMT -->
</html>