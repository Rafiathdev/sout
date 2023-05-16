
<!DOCTYPE html>

<html lang="en">
<!--<![endif]-->


<!-- Mirrored from www.webstrot.com/html/jobpro/job_light/candidate_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Apr 2023 09:31:00 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Employeur-Profile</title>
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
    <link rel="shortcut icon" type="image/png" href="images/header/favicon.ico" />
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
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="jp_top_header_left_wrapper">
                        <div class="jp_top_header_left_cont">
                            <p><i class="fa fa-phone"></i> &nbsp;Phone &nbsp;+229 00 00 00 00</p>
                            <p class=""><i class="fa fa-envelope"></i> &nbsp;Email :&nbsp;&nbsp;ishede@gmail.com<a
                       href="#"><span class="__cf_email__" ></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                        <div class="jp_navi_right_btn_wrapper">
                            <ul>
                                <li><a href="/offer"><i class="fa fa-plus-circle"></i>&nbsp; Post a job</a></li>
                            </ul>
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
                            <h2>Employeur-Profile</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Profil de l'employeur</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- jp profile Wrapper Start -->
	<div class="jp_cp_profile_main_wrapper">
		<div class="container">
			<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="jp_cp_left_side_wrapper">
					<?php
									require_once 'app/core/controllers/profile.php';
										$profile = new Profile();
										$company_info = $profile->get_company_info($_SESSION['user_info']['id']);
									?>
						<div class="jp_cp_left_pro_wallpaper">
							<img src="<?php echo $company_info['photo']?>" alt="profile_img">
							<h2><?php echo $company_info['nom_e']?></h2>
							
							
						</div>
						
					</div>
                   
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" >
					<div class="jp_cp_right_side_wrapper">
						<div class="jp_cp_right_side_inner_wrapper">
							<h2>PERSONAL DETAILS</h2>
							<table>
                                <tbody>
									<?php
									require_once 'app/core/controllers/profile.php';
										$profile = new Profile();
										$company_info = $profile->get_company_info($_SESSION['user_info']['id']);
									?>
                                    <tr>
                                        <td class="td-w25">Nom Utilisateur</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $company_info['nom_u']?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-w25">Nom Entreprise</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $company_info['nom_e']?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-w25">Email</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><a href=""><?php echo $_SESSION['user_info']['email']?></a></td>
                                    </tr>
                                    <tr>
                                        <td class="td-w25">Phone</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $_SESSION['user_info']['phone']?></td>
                                    </tr>
                                   
                                    
                                </tbody>
                            </table>
						</div>
					</div>
				</div>
			</div>
		
				<br><br>
				<div  style="text-align: center; margin-top:25px">
					
					<style>
						table {
						  border-collapse: collapse;
						  width: 100%;
						  margin-bottom: 20px;
						}
				  
						th, td {
						  padding: 8px;
						  text-align: left;
						  border-bottom: 1px solid #ddd;
						}
				  
						th {
						  background-color: #f2f2f2;
						}
				  
						.action-buttons button {
						  margin-right: 10px;
						}
					  </style>
					<h1 class="" style="text-align: center; margin-top:25px; background-color: burlywood;">Gestion des candidatures</h1>
    
					<table id="gestion" >
						<thead></thead>
					  <tr>
						<th>Nom</th>
						<th>Prénom</th>
						<th>Adresse e-mail</th>
						<th>Numéro de téléphone</th>
						<th>Offre d'emploi</th>
						<th>État de la candidature</th>
						<th></th>
						<th>Action
						
							
						</th>
					  </tr>
					  
					  <tr>
						<td>Pierre</td>
						<td>Leblanc</td>
						<td>pierre.leblanc@gmail.com</td>
						<td>06 11 22 33 44</td>
						<td>Ingénieur logiciel</td>
						<td>Acceptée</td>
						<td> <a href="entretien.html"><input type="submit" value="Interview" ></a></td>
							<td> <input type="submit" value="Programmer interview" ></td>
                            <td> <input type="submit" value="Discuter" ></td>

							  
						
					  </tr>
					  
					</table>
				</div>
				<br><br>
                <div  style="text-align: center; margin-top:25px">
					
					<style>
						table {
						  border-collapse: collapse;
						  width: 100%;
						  margin-bottom: 20px;
						}
				  
						th, td {
						  padding: 8px;
						  text-align: left;
						  border-bottom: 1px solid #ddd;
						}
				  
						th {
						  background-color: #f2f2f2;
						}
				  
						.action-buttons button {
						  margin-right: 10px;
						}
					  </style>
					<h1 class="" style="text-align: center; margin-top:25px; background-color: burlywood;">Candidatures en attente</h1>
    
					<table id="candidature">
						<thead></thead>
					  <tr>
						<th>Nom</th>
						<th>Prénom</th>
						<th>Adresse e-mail</th>
						<th>Numéro de téléphone</th>
						<th>Offre d'emploi</th>
						<th>État de la candidature</th>
						<th></th>
						<th>Action
						
							
						</th>
					  </tr>
					  
					  <tr>
						<td>Pierre</td>
						<td>Leblanc</td>
						<td>pierre.leblanc@gmail.com</td>
						<td>06 11 22 33 44</td>
						<td>Ingénieur logiciel</td>
						<td>En attente</td>
						<td> <input type="submit" value="Consulter"></td>
							<td> <input type="submit" value="Accepter"></td>

							<td> <input type="submit" value="Refuser"></td>
                            
						
					  </tr>
                      <tr>
						<td>Pierre</td>
						<td>Leblanc</td>
						<td>pierre.leblanc@gmail.com</td>
						<td>06 11 22 33 44</td>
						<td>Ingénieur logiciel</td>
						<td>En attente</td>
						<td> <input type="submit" value="Consulter"></td>
							<td> <input type="submit" value="Accepter"></td>

							<td> <input type="submit" value="Refuser"></td>
                            
						
					  </tr>
					  
					</table>
				</div>

                <br><br>

                <div  style="text-align: center; margin-top:25px">
					
					<style>
						table {
						  border-collapse: collapse;
						  width: 100%;
						  margin-bottom: 20px;
						}
				  
						th, td {
						  padding: 8px;
						  text-align: left;
						  border-bottom: 1px solid #ddd;
						}
				  
						th {
						  background-color: #f2f2f2;
						}
				  
						.action-buttons button {
						  margin-right: 10px;
						}
					  </style>
					<h1 class="" style="text-align: center; margin-top:25px; background-color: burlywood;">Vos offres</h1>
    
					<table id="offer">
						<thead></thead>
					  <tr>
						<th>Type</th>
						<th>Titre</th>
						<th>Adresse</th>
						<th>Nombre de poste</th>
						<th>Diplome</th>
                        <th>Date d'expiration</th>
						<th>État de l'offre</th>
						<th></th>
						<th>Action
						
							
						</th>
					  </tr>
					  
					  <tr>
						<td>Plein temps</td>
						<td>Comptable</td>
						<td>Akpakpa/degakon</td>
						<td>06 </td>
						<td>Licence en Informatique</td>
						<td>15/08/2023</td>
						<td> Publier</td>
							
						
					  </tr>
                      <tr>
						<td>Plein temps</td>
						<td>Comptable</td>
						<td>Akpakpa/degakon</td>
						<td>06 </td>
						<td>Licence en Informatique</td>
						<td>15/08/2023</td>
						<td>En attente</td>
                        <td> <input type="submit" value="Modifier"></td>
							
							
						
					  </tr>

                      <tr>
						<td>Plein temps</td>
						<td>Comptable</td>
						<td>Akpakpa/degakon</td>
						<td>06 </td>
						<td>Licence en Informatique</td>
						<td>15/08/2023</td>
						<td>Rejeter</td>
                        <td> <input type="submit" value="Motif du rejet"></td>
							<td> <input type="submit" value="Modifier"></td>
                        
							
						
					  </tr>
					  
					</table>
				</div>
                <br><br>
                <div  style="text-align: center; margin-top:25px">
					
					<style>
						table {
						  border-collapse: collapse;
						  width: 100%;
						  margin-bottom: 20px;
						}
				  
						th, td {
						  padding: 8px;
						  text-align: left;
						  border-bottom: 1px solid #ddd;
						}
				  
						th {
						  background-color: #f2f2f2;
						}
				  
						.action-buttons button {
						  margin-right: 10px;
						}
					  </style>
					<h1 class="" style="text-align: center; margin-top:25px; background-color: burlywood;">Interview Programmer</h1>
    
					<table id="interview">
						<thead></thead>
					  <tr>
						<th>Nom </th>
						<th>Prenom</th>
						<th>offre</th>
						<th>Date Interview</th>
					
						<th>Action
						
							
						</th>
					  </tr>
					  
					  <tr>
						<td>SAGBO</td>
						<td>Jean</td>
						<td>Comptable</td>
						<td>25/06/2023</td>
						<td> <input type="submit" value="Interview"></td>
							
						
					  </tr>
                      
					  
					</table>
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


<!-- Mirrored from www.webstrot.com/html/jobpro/job_light/candidate_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Apr 2023 09:31:01 GMT -->
</html>