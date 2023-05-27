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
	<!-- preloader Start --
    <div id="preloader">
        <div id="status"><img src="public/assets/images/header/loadinganimation.gif" id="preloader_image" alt="loader">
        </div>
    </div> -->
	<!-- Top Scroll End -->
	<!-- Top Header Wrapper Start -->
	<div class="jp_top_header_main_wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="jp_top_header_left_wrapper">
						<div class="jp_top_header_left_cont">
							<p><i class="fa fa-phone"></i> &nbsp;Phone &nbsp;+229 00 00 00 00</p>
							<p class=""><i class="fa fa-envelope"></i> &nbsp;Email :&nbsp;&nbsp;ishede@gmail.com<a href="#"><span class="__cf_email__"></span></a></p>
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
							<img src="<?php echo $company_info['photo'] ?>" alt="profile_img">
							<h2><?php echo $company_info['nom_e'] ?></h2>
						</div>
					</div>

				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
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
										<td class="td-w65"><?php echo $company_info['nom_u'] ?></td>
									</tr>
									<tr>
										<td class="td-w25">Nom Entreprise</td>
										<td class="td-w10">:</td>
										<td class="td-w65"><?php echo $company_info['nom_e'] ?></td>
									</tr>
									<tr>
										<td class="td-w25">Email</td>
										<td class="td-w10">:</td>
										<td class="td-w65"><a href=""><?php echo $_SESSION['user_info']['email'] ?></a></td>
									</tr>
									<tr>
										<td class="td-w25">Phone</td>
										<td class="td-w10">:</td>
										<td class="td-w65"><?php echo $_SESSION['user_info']['phone'] ?></td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			<br><br>
			<?php
				require_once 'app/core/database/models.php';
				$profile = new Model();
				$offre = $profile->read_joie();
				
			
				if ($_GET['action'] == 'gestion') {
					
					
					echo '
					<div id="" style="text-align: center; margin-top:25px;">

				<style>
					table {
						border-collapse: collapse;
						width: 100%;
						margin-bottom: 20px;
					}

					th,
					td {
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
				<h1 style="text-align: center; margin-top:25px; background-color: burlywood;">Candidatures en attente</h1>
				

				<table >
					<thead></thead>
					<tr>
						<th>Nom</th>
						<th>Prénom</th>
						<th>Adresse</th>
						<th>Lettre de motivation</th>
						<th>Offre d\'emploi</th>
						<th>Date de candidature</th>
						<th>CV</th>
						<th>État de la candidature</th>
						
						
						<th>Action</th>
					</tr>';
					foreach ($offre as $company_info) :
						if ($company_info['decision'] == 0){
						echo '<tr>
							<td>' . $company_info['nom_c'] . '</td>
							<td> ' . $company_info['prenom_c'] . '</td>
							<td>' . $company_info['adresse'] . '</td>
							<td> ' . $company_info['lettre_motiv'] . '</td>
							<td> ' . $company_info['titre'] . '</td>
							<td>' . $company_info['date_cand'] . '</td>
							<td>' . $company_info['pdf_cv'] . '</td>
							<td>En attente</td>
							<td><a href="consulter?motiv=' . $company_info['lettre_motiv'] . '">Telecharger lettre de motivation</a><br><br>
							<a href="consulter?motiv='. $company_info['pdf_cv'] . '">Telecharger CV</a>
							</td>
							<td>
							
								<a href="/decision?action=1&target=' . $company_info['id_cand'] . '">Accepter</a>
							</td>
							<td>
								<form action="update_decision.php" method="post">
									<input type="hidden" name="decision" value="reject">
									<input type="hidden" name="candidatureId" value="' . $company_info['id_cand'] . '">
									<button type="submit">Rejeter</button>
								</form>
							</td>



						</tr>
						</div>
						';}
					endforeach;
					echo '</table>';
				}
				?>


			
			<br><br>
			


				

				<?php
				require_once 'app/core/database/models.php';
				$profile = new Model();
				$offre1 = $profile->read_joie(); // a reecrire
				
				if ($_GET['action'] == 'gestion') {

					echo'
					<div id="candidature" style="text-align: center; margin-top:25px">

				<style>
					table {
						border-collapse: collapse;
						width: 100%;
						margin-bottom: 20px;
					}

					th,
					td {
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
				<h1 style="text-align: center; margin-top:25px; background-color: burlywood;">Candidature accepter</h1>

				<table id="tab-candidature">
					<thead></thead>
					<tr>
						<th>Nom</th>
						<th>Prénom</th>
						<th>Adresse</th>
						<th>Lettre de motivation</th>
						<th>Offre d\'emploi</th>
						<th>Date de candidature</th>
						<th>Statut</th>
						<th></th>
						<th>Action</th>
					</tr>';
					
					 foreach ($offre as $company_info) : 
						echo'
						<td>< '.$company_info['nom_c'].'  </td>
							<td> '.$company_info['prenom_c'].' </td>
							<td> '.$company_info['adresse'].'  </td>
							<td> '. $company_info['lettre_motiv'].' </td>
							<td>  '.$company_info['titre'].' </td>
							<td>  '.$company_info['date_cand'].' </td>
							<td>Accepte</td>
							<td> <a href="/entretien"><input type="submit" value="Interview"></a></td>
							<td><button type="button" class="modal1" data-ido="'.$company_info['ido'] .' " data-idc="'.$company_info['idc'].'  ">Programme</button></td>
							<!-- Add Modal HTML -->
							<div id="addEmployeeModal" class="modal fade">
								<div class="modal-dialog">
									<div class="modal-content">
										<form id="add_form" method="post">
											<div class="modal-header">
												<h4 class="modal-title">Entretien</h4>
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											</div>
											<input type="hidden" id="ido" name="ido" value="'.$company_info['ido'].'  " class="form-control">
											<input type="hidden" id="idc" '.$company_info['idc'].'   name="idc" class="form-control">
											<div class="modal-body">
												<div class="form-group">
													<label>Date</label>
													<input type="date" id="date" name="date" class="form-control">
												</div>
												<div class="form-group">
													<label>Time</label>
													<input type="time" id="time" name="time" class="form-control">
												</div>
											</div>
											<div class="modal-footer">
												<!-- <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"> -->
												<button type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"><i class="fa fa-close"></i> Cancel</button>
												<button type="submit" name="btn-add" class="btn btn-success" id="btn-add"><i class="fa fa-plus"></i> Add</button>
											</div>
										</form>
									</div>
								</div>
							</div>

						</tr>
					<tr>	';
							

					 endforeach; 
				echo '</table>';
				}
				?>
				
			
			</div>

			<br><br>


			
				<h1 style="text-align: center; margin-top:25px; background-color: burlywood;">Interview Programmer</h1>
				<?php
				require_once 'app/core/database/models.php';
				$profile = new Model();
				$offre2 = $profile->read_joie();
				if ($_GET['action'] == 'interview') {
					echo '
					<div id="interview" style="text-align: center; margin-top:25px">

				<style>
					table {
						border-collapse: collapse;
						width: 100%;
						margin-bottom: 20px;
					}

					th,
					td {
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
					<table >
					<thead></thead>
					<tr>
						<th>Nom </th>
						<th>Prenom</th>
						<th>offre</th>
						<th>Date Interview</th>
						<th>Heure</th>
						<th>Action

						</th>

					</tr>';
						require_once 'app/utils/methods.php';
					 foreach ($offre2 as $company_info) : 
						echo '<tr>
						
							<td>'. $company_info['nom_c'] .' </td>
							<td> '. $company_info['prenom_c'] .'  </td>
							<td> '. $company_info['titre'] .'  </td>
							<td>'.convert_date($company_info['date_entretien']) .'</td>
							<td>'.$company_info['heure'].'  </td>
							<td> <a href="/entretien"><input type="submit" value="Interview"></a></td>.

						</tr>
						';

						
					 endforeach; 

				echo 	'</table>';
				}
				?>
				
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
	<script>
		let ido = "";
		let idc = "";

		let candidature1 = document.getElementById('candidature1');
		let btn_candidature1 = document.querySelector('.candidature1');
		let candidature = document.getElementById('candidature');
		let interview = document.getElementById('interview');
		let btn_interview = document.querySelector('.interview');
		btn_candidature1.addEventListener('click', function(e) {
			candidature1.style.display = 'block';
			candidature.style.display = 'block';
			interview.style.display = 'none';
		})
		btn_interview.addEventListener('click', function(e) {
			candidature1.style.display = 'none';
			candidature.style.display = 'none';
			interview.style.display = 'block';
		});





		$(document).on('click', '.modal1', function(e) {
			$('#addEmployeeModal').modal('show');
			ido = $(this).attr('data-ido');
			idc = $(this).attr('data-idc');

			$('#ido').val(ido);
			$('#idc').val(idc);
		});

		$(document).on('click', '#btn-add', function(e) {
			var data = $('#add_form').serialize();


			if ($('#date').val() == "" || $('#time').val() == "" || $('#ido').val() == "" || $('#idc').val() == "") {
				alert('Veuillez renseigner tous les champs');
				return;
			} else {
				document.cookie = "date =" + $('#date').val();
				document.cookie = "time =" + $('#time').val();
				document.cookie = "ido =" + ido;
				document.cookie = "idc =" + idc;

			}


   
		});
	</script>


	<!--main js file end-->
</body>



<!-- Mirrored from www.webstrot.com/html/jobpro/job_light/candidate_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Apr 2023 09:31:01 GMT -->

</html>