<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>ISHEDE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="ISHEDE" />
    <meta name="keywords" content="ISHEDE" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--srart theme style -->
    <?php
	 require 'app/core/views/import/top.php';
	?>
     <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
</head>

<body>
   
    
    <?php
 require 'app/core/views/partial/header.php'
    ?> 

    <div class="jp_top_header_img_wrapper">
        <div class="jp_slide_img_overlay"></div>
       



                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_register_section_main_wrapper">
                                <div class="jp_regis_left_side_box_wrapper">
                                    <div class="jp_regis_left_side_box">
                                        <img src="public/assets/images/content/regis_icon.png" alt="icon" />
                                        <h4>Je suis employeur </h4>
                                        <p>Inscrit toi pour avoir une multitude d'employer  <br> </p>
                                        <ul>
                                            <li><a href="/register?actor=company"><i class="fa fa-plus-circle"></i> &nbsp;JE SUIS RECRUTEUR</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="jp_regis_right_side_box_wrapper">
                                    <div class="jp_regis_right_img_overlay"></div>
                                    <div class="jp_regis_right_side_box">
                                        <img src="public/assets/images/content/regis_icon2.png" alt="icon" />
                                        <h4>Je suis a la recherche de travail</h4>
                                        <p>Inscrire toi pour trouver ton emploie de reve<br> en quelque jours</p>
                                        <ul>
                                            <li><a href="/register"><i class="fa fa-plus-circle"></i> &nbsp;INSCRIRE TOI CANDIDAT </a></li>
                                        </ul>
                                    </div>
                                    <div class="jp_regis_center_tag_wrapper">
                                        <p>OR</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                
                            
            </div>
        </div>
    </div>
  
    
    <?php
 require 'app/core/views/partial/footer.php';
 require 'app/core/views/import/bottom.php';
    ?>
      <script src="js/custom.js"></script>
	
   
</body>


</html>