<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Administrateur</title>

  <!-- Favicons -->
  <link href="public/admin/assets/img/" rel="icon">
  <link href="public/admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="public/admin/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="public/admin/assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="public/admin/assets/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="public/admin/assets/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="public/admin/assets/css/style.css" rel="stylesheet">
  <link href="public/admin/assets/css/style-responsive.css" rel="stylesheet">
  <script src="public/admin/assets/lib/chart-master/Chart.js"></script>

  
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="" class="logo"><b>ADM<span>IN</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
         
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="/adminlog">Deconnexion</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    
     <!--sidebar start-->
     <?php require_once('./app/core/views/admin/aside.php');   ?>
    
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="#" class="go-top">
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
  <script src="public/admin/assets/lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="public/admin/assets/lib/common-scripts.js"></script>
  <script type="text/javascript" src="public/admin/assets/lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="public/admin/assets/lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="public/admin/assets/lib/sparkline-chart.js"></script>
  <script src="public/admin/assets/lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
