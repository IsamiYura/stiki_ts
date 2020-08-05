<?=$this->include('layout/header_page')?>

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
        <?=$this->include('layout/navbar_top')?>

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
        <?=$this->include('layout/navbar_left')?>
        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">

            <!-- Start: Topbar -->
            <header id="topbar">
                <div class="topbar-left">
                    <ol class="breadcrumb">
                        <li class="crumb-active">
                            <a href="/user">Dashboard</a>
                        </li>
                        <li class="crumb-icon">
                            <a href="/user">
                                <span class="glyphicon glyphicon-home"></span>
                            </a>
                        </li>
                        <li class="crumb-trail">Tracer</li>
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
                        <h3>Data Pengisi Tracer Study</h3>
                        <hr class="alt short">
                        <!-- Isi data user yang login -->
                        <div class="col-md-3">
                            <ul>Nama</ul>
                            <ul>NRP</ul>
                            <ul>Prodi</ul>
                            <ul>No.Telp</ul>
                            <ul>Email</ul>
                            <ul>Tahun Lulus</ul>
                        </div>

                        <div class="col-md-6">
                            <!--- gunakan perulangan --->
                            <ul>: <?php echo ("Nama mahasiswa") ?></ul>
                            <ul>: <?php echo ("NRP mahasiswa") ?></ul>
                            <ul>: <?php echo ("Prodi mahasiswa") ?></ul>
                            <ul>: <?php echo ("Telepon mahasiswa") ?></ul>
                            <ul>: <?php echo ("Email mahasiswa") ?></ul>
                            <ul>: <?php echo ("Tahun lulus mahasiswa") ?></ul>
                        </div>
                    </div>
                </div>

                <?=$this->include('section1')?>
                <?=$this->include('section2')?>

    </div>



    </section>




    <!-- End: Content -->


    </section>
    <!-- End: Content-Wrapper -->
    </div>

    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <script src=<?php echo base_url("vendor/jquery/jquery-1.11.1.min.js") ?>></script>

    <script src=<?php echo base_url("vendor/jquery/jquery_ui/jquery-ui.min.js") ?>></script>

    <!-- Theme Javascript -->
    <script src=<?php echo base_url("assets/js/utility/utility.js") ?>></script>
    <script src=<?php echo base_url("assets/js/demo/demo.js") ?>></script>
    <script src=<?php echo base_url("assets/js/main.js") ?>></script>

    <!-- Widget Javascript -->
    <script src=<?php echo base_url("assets/js/demo/widgets.js") ?>></script>

    <script type="text/javascript">
    $section = 1;

    $(".confirm").click(function() {
        alert(this.id);
        alert($section);
    });

    $(".next").click(function() {
        // alert("move next section");
        $section++;
        alert("Masuk section "+$section)
        if ($section == 2) {
            $(".admin-form.section2").removeClass("hidden");
            $(".admin-form.section2").addClass("animated fadeIn");
            $(".admin-form.section1").addClass("hidden")
        } else if ($section == 3) {
            $(".admin-form.section3").removeClass("hidden");
            $(".admin-form.section3").addClass("animated fadeIn");
            $(".admin-form.section2").addClass("hidden")
        }
    });

    $(".prev").click(function() {
        $section--;
        alert("Masuk section "+$section)
        if ($section == 2) {
            $(".admin-form.section2").removeClass("hidden");
            $(".admin-form.section2").addClass("animated fadeIn");
            $(".admin-form.section3").addClass("hidden")
        } else if ($section == 1) {
            $(".admin-form.section1").removeClass("hidden");
            $(".admin-form.section1").addClass("animated fadeIn");
            $(".admin-form.section2").addClass("hidden")
        }
    });



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



    });
    </script>

    <!-- END: PAGE SCRIPTS -->

</body>

<!--- Modal --->


</html>