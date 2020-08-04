<?= $this->include('layout/header_page') ?>

<body class="dashboard-page sb-l-o sb-r-c">

<!-------------------------------------------------------------+ 
  <body> Helper Classes: 
---------------------------------------------------------------+ 
  '.sb-l-o' - Sets Left Sidebar to "open"
  '.sb-l-m' - Sets Left Sidebar to "minified"
  '.sb-l-c' - Sets Left Sidebar to "closed"

  '.sb-r-o' - Sets Right Sidebar to "open"
  '.sb-r-c' - Sets Right Sidebar to "closed"
---------------------------------------------------------------+
 Example: <body class="example-page sb-l-o sb-r-c">
 Results: Sidebar left Open, Sidebar right Closed
--------------------------------------------------------------->

    
  <!-- Start: Main -->
  <div id="main">

    <!-----------------------------------------------------------------+ 
       ".navbar" Helper Classes: 
    -------------------------------------------------------------------+ 
       * Positioning Classes: 
        '.navbar-static-top' - Static top positioned navbar
        '.navbar-static-top' - Fixed top positioned navbar

       * Available Skin Classes:
         .bg-dark    .bg-primary   .bg-success   
         .bg-info    .bg-warning   .bg-danger
         .bg-alert   .bg-system 
    -------------------------------------------------------------------+
      Example: <header class="navbar navbar-fixed-top bg-primary">
      Results: Fixed top navbar with blue background 
    ------------------------------------------------------------------->
    <?= $this->include('layout/navbar_top') ?>
    
    <!-----------------------------------------------------------------+ 
       "#sidebar_left" Helper Classes: 
    -------------------------------------------------------------------+ 
       * Positioning Classes: 
        '.affix' - Sets Sidebar Left to the fixed position 

       * Available Skin Classes:
         .sidebar-dark (default no class needed)
         .sidebar-light  
         .sidebar-light.light   
    -------------------------------------------------------------------+
       Example: <aside id="sidebar_left" class="affix sidebar-light">
       Results: Fixed Left Sidebar with light/white background
    ------------------------------------------------------------------->

    <!-- Start: Sidebar Left -->
    
      <!-- End: Sidebar Left Content -->

    </aside>
    <!-- End: Sidebar Left -->
    <?= $this->include('layout/navbar_left') ?>
    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

      <!-- Start: Topbar -->
      <header id="topbar">
        <div class="topbar-left">
          <ol class="breadcrumb">
            <li class="crumb-active">
              <a href="dashboard.html">Dashboard</a>
            </li>
            <li class="crumb-icon">
              <a href="dashboard.html">
                <span class="glyphicon glyphicon-home"></span>
              </a>
            </li>
            <li class="crumb-trail">Dashboard</li>
          </ol>
        </div>
        
      </header>
      <!-- End: Topbar -->

      <!-- Begin: Content -->
      <section id="content" class="animated fadeIn">

      <div class="panel panel-primary">
  <div class="panel-heading">
    <span class="panel-title">Isi Data Tracer Study</span>
    <div class="widget-menu pull-right">
    </div>
  </div>
  <div class="panel-body">
  <h3>Data Pengisi</h3>
  <hr class="alt short">
  <!-- Isi data user yang login -->
    <ul class=>Nama : <?php echo('Nataniel David T')?></ul>
    <ul class=>NRP : <?php echo('171111029')?></ul>
    <ul class=>Tahun Lulus : <?php echo('2021')?></ul>
  </div>
</div>
    
      <div class="admin-form">

        <div class="panel heading-border">
            <div class="panel-body bg-light">
            <form method="post" action="" id="form-ui">
                    <div class="section-divider mb40" id="spy1">
                      <span>Form Tracer Study</span>
                    </div>
                    <!-- .section-divider -->
                            
                    <!-- Basic Inputs -->
                    <div class="row">
                      <div>
                        <div class="section">
                            <h4>Masukkan nama anda :</h4>
                          <label class="field">
                            <input type="text" name="from" id="from" class="gui-input" placeholder="Masukkan nama disini">
                          </label>
                        </div>
                      </div>
                    </div>

                    <!-- Multi Selects -->
                    <div class="row">
                        <div class="section">
                          <label class="field select">
                            <select id="country" name="country">
                              <option value="">Contoh multi select</option>
                              <option value="AL">Albania</option>
                              <option value="DZ">Algeria</option>
                            </select>
                            <i class="arrow"></i>
                          </label>
                      </div>
                
                    </form>
            </div>
        </div>
      </section>
      <!-- End: Content -->

    
    </section>
    <!-- End: Content-Wrapper -->
  </div>
  <!-- End: Main -->

  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
  <script src=<?php echo base_url("vendor/jquery/jquery-1.11.1.min.js")?>></script>

  <script src=<?php echo base_url("vendor/jquery/jquery_ui/jquery-ui.min.js")?>></script>

  <!-- Theme Javascript -->
  <script src=<?php echo base_url("assets/js/utility/utility.js")?>></script>
  <script src=<?php echo base_url("assets/js/demo/demo.js")?>></script>
  <script src=<?php echo base_url("assets/js/main.js")?>></script>

  <!-- Widget Javascript -->
  <script src=<?php echo base_url("assets/js/demo/widgets.js")?>></script>
  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core      
    Core.init();

    // Init Demo JS
    Demo.init();

    // Init Widget Demo JS
    // demoHighCharts.init();

    // Because we are using Admin Panels we use the OnFinish 
    // callback to activate the demoWidgets. It's smoother if
    // we let the panels be moved and organized before 
    // filling them with content from various plugins

    // Init plugins used on this page
    // HighCharts, JvectorMap, Admin Panels

    // Init Admin Panels on widgets inside the ".admin-panels" container
    $('.admin-panels').adminpanel({
      grid: '.admin-grid',
      draggable: true,
      preserveGrid: true,
      mobile: false,
      onStart: function() {
        // Do something before AdminPanels runs
      },
      onFinish: function() {
        $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');

        // Init the rest of the plugins now that the panels
        // have had a chance to be moved and organized.
        // It's less taxing to organize empty panels
        demoHighCharts.init();
        runVectorMaps(); // function below
      },
      onSave: function() {
        $(window).trigger('resize');
      }
    });

    // Widget VectorMap
    function runVectorMaps() {

      // Jvector Map Plugin
      var runJvectorMap = function() {
        // Data set
        var mapData = [900, 700, 350, 500];
        // Init Jvector Map
        $('#WidgetMap').vectorMap({
          map: 'us_lcc_en',
          //regionsSelectable: true,
          backgroundColor: 'transparent',
          series: {
            markers: [{
              attribute: 'r',
              scale: [3, 7],
              values: mapData
            }]
          },
          regionStyle: {
            initial: {
              fill: '#E5E5E5'
            },
            hover: {
              "fill-opacity": 0.3
            }
          },
          markers: [{
            latLng: [37.78, -122.41],
            name: 'San Francisco,CA'
          }, {
            latLng: [36.73, -103.98],
            name: 'Texas,TX'
          }, {
            latLng: [38.62, -90.19],
            name: 'St. Louis,MO'
          }, {
            latLng: [40.67, -73.94],
            name: 'New York City,NY'
          }],
          markerStyle: {
            initial: {
              fill: '#a288d5',
              stroke: '#b49ae0',
              "fill-opacity": 1,
              "stroke-width": 10,
              "stroke-opacity": 0.3,
              r: 3
            },
            hover: {
              stroke: 'black',
              "stroke-width": 2
            },
            selected: {
              fill: 'blue'
            },
            selectedHover: {}
          },
        });
        // Manual code to alter the Vector map plugin to 
        // allow for individual coloring of countries
        var states = ['US-CA', 'US-TX', 'US-MO',
          'US-NY'
        ];
        var colors = [bgWarningLr, bgPrimaryLr, bgInfoLr, bgAlertLr];
        var colors2 = [bgWarning, bgPrimary, bgInfo, bgAlert];
        $.each(states, function(i, e) {
          $("#WidgetMap path[data-code=" + e + "]").css({
            fill: colors[i]
          });
        });
        $('#WidgetMap').find('.jvectormap-marker')
          .each(function(i, e) {
            $(e).css({
              fill: colors2[i],
              stroke: colors2[i]
            });
          });
      }

      if ($('#WidgetMap').length) {
        runJvectorMap();
      }
    }



  });
  </script>

  <!-- END: PAGE SCRIPTS -->

</body>

</html>
