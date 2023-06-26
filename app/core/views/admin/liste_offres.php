<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title></title>

  <!-- Favicons -->
  <link href="public/admin/assets/img/" rel="icon">
  <link href="public/admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="public/admin/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="public/admin/assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="public/admin/assets/css/style.css" rel="stylesheet">
  <link href="public/admin/assets/css/style-responsive.css" rel="stylesheet">
  
 
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <?php require_once('./app/core/views/admin/header.php');   ?>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <?php require_once('./app/core/views/admin/aside.php');   ?>

    <!--sidebar end-->
     <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        
        <div class="row">
          
          <!-- /col-md-12 -->
          
          <!-- /col-md-12 -->
        </div>

        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4>Liste des Offres</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> Categorie</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Titre</th>
                    <th><i class="fa fa-bookmark"></i> Expiration</th>
                  
                    <th>Description</th>
                    <th>Entreprise</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php	
                    require_once 'app/core/database/models.php';
                    $profile = new Model();
                    $offres = $profile->liste_offres()->fetchAll();
                  
                  ?>
                  <?php foreach($offres as $offre): ?>
                    <tr>
                    <td><?php echo $offre['libelle']?></td>
                    
                    <td><?php echo $offre['titre']?></td>
                    <td><?php echo $offre['date_exp']?></td>
                    <td><a href="#"><?php echo $offre['description']?></a></td>
                    <td><?php echo $offre['nom_e']?></td>
                    <td>
                      <?php 
            var_dump($offre);
                        
                        if ($offre['isValidated'] == 0) {
                          echo "en attente";
                        } else if($offre['isValidated'] == 1) {
                          echo "acceptée";
                        }
                        else {
                          echo "refusée";
                        }	
                        
                      ?>
                    </td>

                   
                  
                    
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>AMIN</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
        </div>
        <a href="basic_table.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="public/admin/assets/lib/jquery/jquery.min.js"></script>
  <script src="public/admin/assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="public/admin/assets/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="public/admin/assets/lib/jquery.scrollTo.min.js"></script>
  <script src="public/admin/assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="public/admin/assets/lib/common-scripts.js"></script>
  <!--script for this page-->
  
</body>

</html>
