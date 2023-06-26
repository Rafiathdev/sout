<!DOCTYPE html>

<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>ISHEDE</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta name="description" content="Job Pro" />
	<!--srart theme style -->
	<?php
	 require 'app/core/views/import/top.php';
	?>
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
	<!-- map Wrapper Start -->
	<div class="jp_map_indx_wrapper">
		<div class="jb_indexvi_img_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="jp_slider_form_main_wrapper">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="jp_job_heading">
									<h1><span>+ de 3000</span> Offres </h1>
									<p>Trouver un emploie, Recruter & Réaliser vos rêves</p>
								</div>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<h2><p><span style="color: red">ISHEDE</span>  est une plateforme de recrutement et de publication d'offres. Elle permet au citoyens en chomage de trouver un emploie au plus vite
								possible afin d'éviter d'écrire les lettres de demande sans suite  et au recruteur de trouver des employers correspondant à leur attentes et aussi d'éviter l'emmagasinage des documents </p></h2>
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
					<div class="jp_banner_right_img">
						<img src="public/assets/images/index_vi/banner_image.png" alt="img">
					</div>
				</div>
			</div>
		</div>
		<!-- jp tittle slider Wrapper Start -->
	</div>
	<?php 
                        require 'app/core/controllers/offer.php'; 
                        $offre = new Offer() ;
                        $categories = $offre-> recupCategorie();
                    
                        ?>
	<div class="jp_banner_jobs_categories_wrapper">
		<div class="container">
		<?php foreach($categories as $categorie): ?>
			<div class="jp_top_jobs_category_wrapper jp_job_cate_left_border jp_job_cate_left_border_bottom">
				<div class="jp_top_jobs_category"> <i class="fa fa-code"></i>
					<h3><a href="#"><?= $categorie['libelle'] ?></a></h3>
					<p>(240 offres)</p>
				</div>
			</div>
			<?php endforeach; ?>  
			
		</div>
	</div>
	<!-- map Wrapper End -->
	<!-- jp Hiring company Wrapper Start -->
	
	<!-- jp Hiring company Wrapper End -->
	<!-- jp recent jobs Wrapper Start -->
	<div class="jp_recent_job_main_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="cc_featured_product_main_wrapper">
						<div class="jp_hiring_heading_wrapper jp_job_post_heading_wrapper">
							<h2>Les offres récentes</h2>
						</div>
						<div class="jp_recent_job_main_wrapper">
						
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="best.php?mot=Par quinzaine" aria-controls="best" role="tab" data-toggle="tab">Par Quinzaine</a>
							</li>
							<li role="presentation"><a href="#hot" aria-controls="hot" role="tab" data-toggle="tab">A distance</a>
							</li>
							<li role="presentation"><a href="#trand" aria-controls="trand" role="tab" data-toggle="tab">A temps partiel</a>
							</li>
							<li role="presentation"><a href="#best" aria-controls="best" role="tab" data-toggle="tab"> A temps plein </a>
							</li>
						</ul>
					</div>
				
					</div>
					<div class="tab-content">
					<?php
								require_once 'app/core/database/models.php';
									$profile = new Model();
									$company_infos = $profile->read_joind();
								?>
						<div role="tabpanel" class="tab-pane fade in active" id="best">
							<div class="ss_featured_products">
								<div class="owl-carousel owl-theme">
									<div class="item" data-hash="zero">
									<?php foreach($company_infos as $company_info): ?>
										<div class="jp_job_post_main_wrapper_cont">
											<div class="jp_job_post_main_wrapper">
												<div class="row">
												
													<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
													
														<div class="jp_job_post_side_img">
															<img src="<?php echo $company_info['photo']?>" alt="post_img" />
														</div>
														<div class="jp_job_post_right_cont">
															<h4><?php echo $company_info['titre']?> (<?php echo $company_info['annee_exp']?> ans d'expérience)</h4>
															<p> <?php echo $company_info['nom_u']?></p>
															<p>Date d'expiration : <?php echo $company_info['date_exp']?></p>
															<ul>
																
																<li><i class="fa fa-map-marker"></i>&nbsp; <?php echo $company_info['adresse']?></li>
															</ul>
														</div>
														
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
														<div class="jp_job_post_right_btn_wrapper">
															<ul>
																<li><a href="#"><i class="fa fa-heart-o"></i></a>
																</li>
								
																<li><a href="/login">Postuler</a>
																<li><a href="/decrire?id=<?php echo $company_info['id']?>">Voir</a></li>
																</li>
															</ul>
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
	</div>
	<!-- jp recent jobs Wrapper End -->
	<!-- jp best deal Wrapper Start -->
	
	<div class="jp_best_deal_main_wrapper">
		<div class="jp_counter_loverlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="jp_hiring_slider_main_wrapper">
						<div class="jp_hiring_slider_wrapper">
							<div class="owl-carousel owl-theme">

								
									<div class="item">
										<div class="jp_hiring_content_main_wrapper">
											<div class="jp_hiring_content_wrapper">
												<img src="/public/assets/images/1.jpg" style="height: 150px; width: 30px;">
											</div>
											
										</div>
									</div>
							

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- jp best deal Wrapper End -->
	<!-- jp counter Wrapper Start -->
	
	<!-- jp counter Wrapper End -->
	<!-- jp Newsletter Wrapper Start -->
	<!-- jp downlord Wrapper Start -->
	
	<!-- jp downlord Wrapper End -->
	<!-- jp career Wrapper Start -->
	<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="jp_best_deal_heading_wrapper">
						<div class="jp_pricing_heading "><br><br>
							<h4>Abonnement</h4>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="pricing_box1_wrapper">
						<div class="box1_heading_wrapper">
							<h4>1mois</h4>
						</div>
						<div class="price_box1_wrapper">
							<div class="price_box1">
								<h1><span>2000fcfa</span></h1>
								
							</div>
						</div>
						
						<div class="pricing_btn_wrapper">
							<div class="pricing_btn1">
								<ul>
									<li><a href="/register"> Commencer</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="jp_pricing_label_wrapper"> <i class="fa fa-star"></i>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="pricing_box1_wrapper">
						<div class="box1_heading_wrapper">
							<h4>6 mois</h4>
						</div>
						<div class="price_box1_wrapper">
							<div class="price_box1">
								<h1><span>8000 fcfa</span></h1>
								
							</div>
						</div>
						
						<div class="pricing_btn_wrapper">
							<div class="pricing_btn1">
								<ul>
									<li><a href="/register"> Commencer</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="jp_pricing_label_wrapper"> <i class="fa fa-star"></i>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="pricing_box1_wrapper">
						<div class="box1_heading_wrapper">
							<h4>1 ans</h4>
						</div>
						<div class="price_box1_wrapper">
							<div class="price_box1">
								<h1><span>15000 fcfa</span></h1>
								
							</div>
						</div>
						
						<div class="pricing_btn_wrapper">
							<div class="pricing_btn1">
								<ul>
									<li><a href="/register"> Commencer</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="jp_pricing_label_wrapper"> <i class="fa fa-star"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- jp career Wrapper End -->
	
		<!-- jp Newsletter Wrapper End -->
		<!-- jp footer Wrapper Start -->
		
        <?php
 require 'app/core/views/partial/footer.php';
 require 'app/core/views/import/bottom.php';
    ?>
	

</body>


<!-- Mirrored from www.webstrot.com/html/jobpro/job_light/index_vi.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Apr 2023 09:30:57 GMT -->
</html>