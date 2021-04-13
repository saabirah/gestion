<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="PRISCA" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>SAVAN</title>



  <!-- Bootstrap core CSS -->
  <link href="css/style.css" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->

  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>


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
      <a href="index.html" class="logo"><b>SAV<span>AN</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->


        <!--  notification end -->
      </div>
      <div class="top-menu d-flex">


        <ul class="nav pull-right top-menu">
          <li>
            <a class="dropdown-item logout" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Se deconnecter') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>

          </li>
        </ul>
        <h5 class=" nav pull-right top-menu ">Gs Prisca</h5>
        <p class="nav pull-right top-menu"><a href="profile.html"><img src="img/uiprisca.jpg" class="img-circle" width="50" height="50"></a></p>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class=" bg-primary nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

          <li class="mt">
            <a class="active" href="{{ route('accueil') }}">
              <i class="fa fa-dashboard"></i>
              <span>ACCUEIL</span>
              </a>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              {{-- <i class="fa fa-cogs"></i> --}}
              <img src="img/book4.jpg" width="50" alt="">
              <span>LIVRES</span>
              </a>
            <ul class="sub">
              <li><a href="{{ route('ajouter') }}">ajouter</a></li>
              <li><a href="{{ route('classer') }}">classer</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              {{-- <i class="fa fa-book"></i> --}}
              <img src="img/pret5.PNG" width="50" alt="">
              <span>EMPRUNTS</span>
              </a>h
            <ul class="sub">
              <li><a href="{{ route('nemprunt') }}">Nouveau emprunt</a></li>
              <li><a href="nemprunt">Livres empruntés</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>ESPACE ABONNES</span>
              </a>
            <ul class="sub">
              <li><a href="form_component.html">nouveau abonné</a></li>
              <li><a href="advanced_form_components.html">historique</a></li>

            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>SETTING</span>
              </a>
            <ul class="sub">
              <li><a href=""> compte</a></li>
              <li><a href="{{route('register')}}">nouveau admin</a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">

            <!--CUSTOM CHART START -->
           @yield('contenu')
            <!-- / calendar -->

        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    {{-- <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights avril 2021 by <strong>PRISCA</strong>.
        </p>

        <a href="index.html#" class="go-bottom">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer> --}}
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'bienvenu sur SAVAN bibliotheque!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Developed by <a href="http://alvarez.is" target="_blank" style="color:#4ECDC4">Alvarez.is</a>.',
        // (string | optional) the image to display on the left
        image: 'img/uiprisca.jpg',
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
