<?php
$table1 = '<!-- Header Wrapper Start -->
<div class="jp_top_header_img_wrapper" >
	<div class="gc_main_menu_wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm full_width">
					<div class="gc_header_wrapper">
						<div class="gc_logo">
							<a href="index.html">
								<img src="public/assets/images/index_vi/logo.png" class="img-responsive">
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
							   
								<li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">  Offres&nbsp;<i class="fa fa-angle-down"></i></a>
									<!-- mega menu start -->
									<ul>
										<li class="parent"><a href="/liste">Liste doffres</a></li>
										
									</ul>
								</li>
								<li class="parent gc_main_navigation"><a href="#" class="gc_main_navigation">Menu &nbsp;<i class="fa fa-angle-down"></i></a>
									<!-- sub menu start -->
									<ul>
									   
										<li class="parent"><a href="/offre?id='.$_SESSION['user_info']['id'].'">Mes offres</a></li>
										<li class="parent"><a href="/profile?actor=company&action=gestion" >Voir candidature</a>
										<li class="parent"><a href="/profile?actor=company&action=interview" class="interview">Entretien Programmer</a></li>
										<li class="parent"><a href="candidate_profile.html">Mise a jour</a></li>
									   
										   
									</ul>
									<!-- sub menu end -->
								</li>
								<li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">  A propos&nbsp;</a>
									<!-- mega menu start -->
									
								</li>
							   
								<li class="gc_main_navigation parent"><a href="contact.html" class="gc_main_navigation">Contact</a></li>
							</ul>
						</div>
						<!-- mainmenu end -->
						<!-- mobile menu area start -->
						
					</div>
				</div>
				<!-- mobile menu area end -->

				<div class="jp_top_header_right_cont">
					<ul>
						<li><a href="/profile"><i class="fa fa-user"></i>&nbsp; '.$_SESSION['user_info']['name'].'</a> </li>
						<li ><a href="/logout"><i class="fa fa-sign-in"></i>&nbsp; Logout</a></li>
					</ul>
				</div>
				
			</div>
		</div>
	</div>
</div>';


$table2 .= '<!-- Header Wrapper Start -->
<div class="jp_top_header_img_wrapper" >
	<div class="gc_main_menu_wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm full_width">
					<div class="gc_header_wrapper">
						<div class="gc_logo">
							<a href="#">
								<img src="public/assets/images/index_vi/logo.png" alt="Logo" title="" class="img-responsive">
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
							   
								<li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">  Offres&nbsp;<i class="fa fa-angle-down"></i></a>
									<!-- mega menu start -->
									<ul>
										<li class="parent"><a href="/liste">Liste doffres</a></li>
										
									</ul>
								</li>
								<li class="parent gc_main_navigation"><a href="#" class="gc_main_navigation">Menu &nbsp;<i class="fa fa-angle-down"></i></a>
									<!-- sub menu start -->
									<ul>
									   
										<li class="parent"><a href="company_listing.html">Voir mes candidatures</a></li>
										<li class="parent"><a href="/liste">Voir les offres</a></li>
										<li class="parent"><a href="candidate_listing.html">Mise a jour</a></li>
										
									   
										   
									</ul>
									<!-- sub menu end -->
								</li>
								<li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">  A propos&nbsp;</a>
									<!-- mega menu start -->
									
								</li>
							   
								<li class="gc_main_navigation parent"><a href="contact.html" class="gc_main_navigation">Contact</a></li>
							</ul>
						</div>
						<!-- mainmenu end -->
						<!-- mobile menu area start -->
						
					</div>
				</div>
				<!-- mobile menu area end -->

				<div class="jp_top_header_right_cont">
					<ul>
						<li><a href="/profile"><i class="fa fa-user"></i>&nbsp; '.$_SESSION['user_info']['name'].'</a> </li>
						<li ><a href="/logout"><i class="fa fa-sign-in"></i>&nbsp; Logout</a></li>
					</ul>
				</div>
				
			</div>
		</div>
	</div>
</div>';


$table3 .= '<div class="jp_navi_right_btn_wrapper">
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm full_width">
	<div class="gc_header_wrapper">
		<div class="gc_logo">
			<a href="#">
				<img src="public/assets/images/index_vi/logo.png" alt="Logo" title="" class="img-responsive">
			</a>
		</div>
	</div>
</div>
<ul>
	<li><a href="/choice"><i class="fa fa-user"></i>&nbsp; INSCRIPTION</a>
	</li>
	<li ><a href="/login"><i class="fa fa-sign-in"></i>&nbsp; CONNEXION</a>
	</li>
</ul>
</div>';

?>