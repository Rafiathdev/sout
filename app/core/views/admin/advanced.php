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
  <link href="public/admin/assets/img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="public/admin/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="public/admin/assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="public/admin/assets/lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="public/admin/assets/lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="public/admin/assets/lib/advanced-datatable/css/DT_bootstrap.css" />
  <!-- Custom styles for this template -->
  <link href="public/admin/assets/css/style.css" rel="stylesheet">
  <link href="public/admin/assets/css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
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
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Gerer les demandes</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
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
                <h1 class="" style="text-align: center; margin-top:25px; background-color: rgb(228, 225, 72);">Les Offres</h1>
          <?php
          
          
          ?>
                <table id="gestion" >
                  <thead></thead>
                  <tr>
                  <th>Nom Entreprise</th>
                  <th>Adresse</th>
                  <th>Categories</th>
                  <th>type</th>
                  <th>titre</th>
                  <th>date_expiration</th>
                  <th>annee experience</th>
                  <th>diplome</th>
                  <th>Nombre de poste</th>
                  <th>Activite pricipal</th>
                  <th>Description</th>
                  <th>Competence requise</th>
                  <th></th>
                  <th>Action
                  
                    
                  </th>
                  </tr>
                  
                  <tr>
                  <td>Pierre</td>
                  <td>Leblanc</td>
                  <td>pierre.leblanc@gmail.com</td>
                  <td>06 11 22 33 44</td>
                  <td>qualification</td>
                  <td>titre</td>
                  <td>titre</td>
                  <td>titre</td>
                  <td>titre</td>
                  <td>titre</td>
                  <td>titre</td>
                  <td>titre</td>
                  

                 
                  <td> <a href="/decrire"><input type="submit" value="voir plus" ></a></td>
                    <td> <input type="submit" value="Valider" ></td>
                                  <td> <input type="submit" value="Rejeter" ></td>
      
                      
                  
                  </tr>
                  
                </table>
              </div>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Admin</strong>. All Rights Reserved
        </p>
        <div class="credits">
          
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="advanced_table.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="public/admin/assets/lib/jquery/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="public/admin/assets/lib/advanced-datatable/js/jquery.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="public/admin/assets/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="public/admin/assets/lib/jquery.scrollTo.min.js"></script>
  <script src="public/admin/assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="public/admin/assets/lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="public/admin/assets/lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="public/admin/assets/lib/common-scripts.js"></script>
  <!--script for this page-->
  <script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
      sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
      sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.innerHTML = '<img src="public/admin/assets/lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "public/admin/assets/lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "public/admin/assets/lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>
</body>

</html>
