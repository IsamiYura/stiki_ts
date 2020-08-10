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

                        <?php if(!empty(session()->getFlashdata('message'))) : ?>

                        <div class="alert alert-success">
                            <?php echo session()->getFlashdata('message');?>
                        </div>

                        <?php endif ?>

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
                <form class="formulir">
                    <div><?=$this->include('section1')?></div>
                    <div><?=$this->include('section2')?></div>
                    <div><?=$this->include('section3')?></div>
                </form>












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


    <!--- Extra JS for Masking -->
    <script src=<?php echo base_url("assets/js/jquery.mask.js") ?>></script>

    <script type="text/javascript">
    $section = 1;
    var emptyNamaInstansi;
    var emptyDurasiTunggu;
    var emptyBidangPerusahaan;

    var statusPekerjaan;
    var durasiTunggu;
    var namaPerusahaan;
    var bidangPerusahaan;
    var kesesuaianPendidikan;

    var currentID;

    $(".next").click(function() {
        // alert("move next section");
        $section++;

        //ke section 2
        if ($section == 2) {
            $(".admin-form.section2").removeClass("hidden");
            $(".admin-form.section2").addClass("animated fadeIn");
            $(".admin-form.section1").addClass("hidden");
        }

        //ke section 3
        //pastikan semua input harus terisi sebelum pindah section
        if ($section == 3) {

            validasiIsian(2);
            //pindah section apabila isian di section2 telah terisi
            if (emptyNamaInstansi == true || emptyDurasiTunggu == true || emptyBidangPerusahaan == true) {
                $section--;
            } else if (emptyNamaInstansi == false && emptyDurasiTunggu == false && (emptyBidangPerusahaan ==
                    false && bidangPerusahaan != "")) {
                durasiTunggu = $('input[name="durasiTunggu"]:checked').val();
                namaPerusahaan = $('input[name="namaInstansi"]').val();
                bidangPerusahaan = $('input[name="jenisBidang"]:checked').val();

                if (bidangPerusahaan == "ganti") {
                    bidangPerusahaan = $(".lain").val();
                };

                $(".admin-form.section3").removeClass("hidden");
                $(".admin-form.section3").addClass("animated fadeIn");
                $(".admin-form.section2").addClass("hidden");
            }

        }

    });

    $(".prev").click(function() {
        $section--;
        if ($section == 2) {
            $(".admin-form.section2").removeClass("hidden");
            $(".admin-form.section2").addClass("animated fadeIn");
            $(".admin-form.section3").addClass("hidden");
        } else if ($section == 1) {

            $(".admin-form.section1").removeClass("hidden");
            $(".admin-form.section1").addClass("animated fadeIn");
            $(".admin-form.section2").addClass("hidden");
        }

    });

    function reply_click(clicked_id) {
        currentID = clicked_id;
    }

    function validasiIsian(section) {
        if (section == 2) {
            //validasi nama perusahaan
            if ($('input[name="namaInstansi"]').val() === "") {
                alert("Nama Instansi masih kosong");
                emptyNamaInstansi = true;
            } else {
                emptyNamaInstansi = false;
            }

            //validasi durasi tunggu
            $('input[name="durasiTunggu"]').each(function() {
                if ($('input[name="durasiTunggu"]:checked').length == 0) {
                    emptyDurasiTunggu = true;
                } else {
                    emptyDurasiTunggu = false;
                }
            });

            if (emptyDurasiTunggu == true) {
                alert("Pilih salah satu durasi tunggu!")
            }

            //validasi jenis bidang
            $('input[name="jenisBidang"]').each(function() {
                if ($('input[name="jenisBidang"]:checked').length == 0 && $(".lain").val() == "") {
                    emptyBidangPerusahaan = true;
                } else {
                    emptyBidangPerusahaan = false;
                }
            });

            if (emptyBidangPerusahaan == true) {
                alert("Pilih atau isi salah satu jenis bidang Perusahaan!")
            };
        } else if (section == 3) {

        }
    }


    jQuery(document).ready(function() {

        "use strict";

        $(".pilihan").css("margin", "15px");
        $(".lain").css("margin", "15px");



        $('input[type=radio][name=jenisBidang]').change(function() {
            if (this.value == 'ganti') {
                $(".lain").removeAttr("disabled");
            } else {
                $(".lain").attr("disabled", "disabled");
            }
        });


        $(".formulir").submit(function() {
            return false;
        });

        $(".confirm").click(function() {
            statusPekerjaan = $(this).val();
            if (statusPekerjaan == "Belum Bekerja") {
                $(".sudah").css("opacity", "0");
                $(".sudah").attr("disabled", "disabled");
            } else if (statusPekerjaan == "Sudah Bekerja") {
                $(".belum").css("opacity", "0");
                $(".belum").attr("disabled", "disabled");
            }
            $(".pull-right .pindah").removeClass("hidden");
        });

        $('.sesuai').click(function() {
            kesesuaianPendidikan = $(this).val();
            alert($(this).val());
            if (kesesuaianPendidikan == "Sesuai") {
                $(".tidak-sesuai").css("opacity", "0");
                $(".tidak-sesuai").attr("disabled", "disabled");
            } else if (kesesuaianPendidikan == "Tidak Sesuai") {
                $(".iya-sesuai").css("opacity", "0");
                $(".iya-sesuai").attr("disabled", "disabled");
            }
        });

        $('#myModal').on('show.bs.modal', function(event) {
            var modal = $(this);
            var toInt;

            modal.find('.statusKerja').val(statusPekerjaan);
            modal.find('.namaPerusahaan').val(namaPerusahaan);
            modal.find('.durasiTunggu').val(durasiTunggu);
            modal.find('.jenisPerusahaan').val(bidangPerusahaan);
            modal.find('.kesesuaianPendidikan').val(kesesuaianPendidikan);
            modal.find('.pendidikanMinimal').val($('input[name="pendidikanMinimal"]:checked').val());
            modal.find('.gajiRata2').val($('input[name="gajiRata2"]').val());

            toInt = modal.find('.gajiRata2').val();
            toInt = toInt.split('.').join('');
            modal.find('.formatter').val(toInt);
        });

        $(".admin-form .reset").click(function() {

            $(".sudah").css("opacity", "1");
            $(".sudah").removeAttr("disabled", "disabled");
            $(".belum").css("opacity", "1");
            $(".belum").removeAttr("disabled", "disabled");
            $(".pull-right .pindah").addClass("hidden");
        });

        $('.gajiRata2').mask('000.000.000', {
            reverse: true
        });

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
    <!--- Modal --->
    <div><?=$this->include('confirm_modal')?></div>


</body>



</html>