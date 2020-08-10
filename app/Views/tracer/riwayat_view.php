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
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="crumb-icon">
                            <a href="dashboard.html">
                                <span class="glyphicon glyphicon-home"></span>
                            </a>
                        </li>
                        <li class="crumb-trail">Tracer</li>
                        </li>
                        <li class="crumb-trail">Riwayat</li>
                    </ol>
                </div>

            </header>
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content" class="animated fadeIn">

                <div class="row">
                    <div class="col-md-12">

                        <?php if(!empty(session()->getFlashdata('message'))) : ?>

                        <div class="alert alert-success">
                            <?php echo session()->getFlashdata('message');?>
                        </div>

                        <?php endif ?>
                        <div class="panel panel-primary">
                            <div class="panel-body">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr class="primary">
                                            <th>
                                                <h5>Nama Instansi</h5>
                                            </th>
                                            <th>
                                                <h5>Jenis Instansi</h5>
                                            </th>
                                            <th>
                                                <h5>Gaji per Bulan</h5>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($tbl_laporan_tracer as $key => $post) : ?>

                                        <tr>
                                            <td><?php echo $post['instansi_pekerjaan'] ?></td>
                                            <td><?php echo $post['jenis_instansi'] ?></td>
                                            <td class="gaji">Rp. <?php echo $post['gaji_rata2'] ?></td>
                                        </tr>

                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <?php echo $pager->links('post', 'default_full') ?>
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

        $('.gaji').each(function() {
        });

    });
    </script>

    <!-- END: PAGE SCRIPTS -->

</body>

</html>