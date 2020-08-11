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

                        <?php if (!empty(session()->getFlashdata('message'))): ?>

                        <div class="alert alert-success">
                            <?php echo session()->getFlashdata('message'); ?>
                        </div>

                        <?php endif?>
                        <div class="panel panel-primary">
                            <div class="panel-body">
                                <table class="table table-striped table-bordered table-hover datatab"
                                    id="tabel_riwayat">
                                    <thead>
                                        <tr class="primary">
                                            <th>
                                                <h5>ID Laporan</h5>
                                            </th>
                                            <th>
                                                <h5>Nama Instansi</h5>
                                            </th>
                                            <th>
                                                <h5>Jenis Instansi</h5>
                                            </th>
                                            <th>
                                                <h5>Gaji per Bulan</h5>
                                            </th>
                                            <th>
                                                <h5>Aksi</h5>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($laporan as $post): ?>

                                        <tr class="data">
                                            <td><?php echo $post->id_laporan; ?></td>
                                            <td><?php echo $post->instansi_pekerjaan; ?></td>
                                            <td><?php echo $post->jenis_instansi; ?></td>
                                            <td class="gaji">Rp. <?php echo $post->gaji_rata2; ?></td>
                                            <td class="text-center">

                                                <div class="btn-group">
                                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                                        <i class="fa fa-cog"></i>
                                                    </a>

                                                    <ul class="dropdown-menu pull-right text-left">
                                                        <li>
                                                            <a class="clickable"
                                                                onclick="lihatTracer(<?php echo $post->id_laporan; ?>)">
                                                                <i class="fa fa-eye fa20"></i>
                                                                Lihat Detail
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
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
    <script src="<?php echo base_url()?>/vendor/jquery/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url()?>/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Theme Javascript -->
    <script src=<?php echo base_url("assets/js/utility/utility.js") ?>></script>
    <script src=<?php echo base_url("assets/js/demo/demo.js") ?>></script>
    <script src=<?php echo base_url("assets/js/main.js") ?>></script>


    <!-- Datatables -->
    <script src="<?php echo base_url()?>/vendor/plugins/datatables/media/js/jquery.dataTables.js"></script>

    <!-- Datatables Tabletools addon -->
    <script
        src="<?php echo base_url()?>/vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js">
    </script>

    <!-- Datatables ColReorder addon -->
    <script
        src="<?php echo base_url()?>/vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js">
    </script>

    <!-- Datatables Bootstrap Modifications  -->
    <script src="<?php echo base_url()?>/vendor/plugins/datatables/media/js/dataTables.bootstrap.js"></script>

    <!-- Widget Javascript -->
    <script src=<?php echo base_url("assets/js/demo/widgets.js") ?>></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#tabel_riwayat').dataTable();
    });

    function lihatTracer(id_laporan) {

        //Ajax Load data from ajax
        $.ajax({
            url: "<?= site_url('tracer/get_by_id')?>", //controller tracer fungsi get_by_id
            type: "POST",
            data: {
                id_laporan: id_laporan
            },
            dataType: "JSON",
            success: function(data) {
                // $('#detailModal').modal("show");
                console.log(data)
                $('.idnya').val(data.id_laporan);
                $('.gajiRata2').val(data.gaji_rata2);
                $('#model').modal('toggle');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR);
                alert('Error get data from ajax');
            }
        });
    }

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
            },
            onSave: function() {
                $(window).trigger('resize');
            }
        });
    });
    </script>

    <!-- END: PAGE SCRIPTS -->
    <!--- Modal --->


</body>
<?=$this->include ('tracer/detail_modal')?>

</html>