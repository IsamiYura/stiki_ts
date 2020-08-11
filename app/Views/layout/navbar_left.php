<!-- Start: Sidebar Left -->
<aside id="sidebar_left" class="nano nano-primary affix">

    <!-- Start: Sidebar Left Content -->
    <div class="sidebar-left-content nano-content">

        <!-- Start: Sidebar Header -->
        <header class="sidebar-header">

        </header>
        <!-- End: Sidebar Header -->

        <!-- Start: Sidebar Left Menu -->
        <ul class="nav sidebar-menu">
            <li class="sidebar-label pt20">Menu</li>
            <li>
                <a href=<?php echo base_url('user')?>>
                    <span class="fa fa-calendar"></span>
                    <span class="sidebar-title">Beranda</span>
                </a>
            </li>
            <li>
                <a href=#>
                    <span class="fa fa-calendar"></span>
                    <span class="sidebar-title">.......</span>
                </a>
            </li>
            <li>
                <a href=#>
                    <span class="fa fa-calendar"></span>
                    <span class="sidebar-title">.......</span>
                </a>
            </li>
            <li>
                <a href=#>
                    <span class="fa fa-calendar"></span>
                    <span class="sidebar-title">.......</span>
                </a>
            </li>
            <li>
                <a href=#>
                    <span class="fa fa-calendar"></span>
                    <span class="sidebar-title">.......</span>
                </a>
            </li>
            <li <?php
        $uri = $_SERVER['REQUEST_URI'];
        $word = "tracer";
        
        if(strpos($uri, $word) !== false){
            echo ("class='active'");
        }

        echo $uri;
        ?>>
                <a class="accordion-toggle">
                    <span class="fa fa-calendar"></span>
                    <span class="sidebar-title">Tracer Study</span>
                    <span class="caret"></span>
                </a>

                <ul class="nav sub-nav">
                    <li>
                        <a href=<?php echo base_url('tracer/isi')?>>
                            <span class="sidebar-title">Isi Tracer Study</span>
                        </a>

                    </li>

                    <li>
                        <a href=<?php echo base_url('tracer')?> id="tab-admin">
                            <span class="sidebar-title">Riwayat Tracer Study</span>
                        </a>
                    </li>

                    <li>
                        <a href=<?php echo base_url('tracer')?> id="tab-mhs">
                            <span class="sidebar-title">Riwayat Tracer Study</span>
                        </a>
                    </li>
                </ul>

            </li>

        </ul>
        <!-- End: Sidebar Menu -->

        <!-- Start: Sidebar Collapse Button -->
        <div class="sidebar-toggle-mini">
            <a href="#">
                Collapse Navbar
                <span class="fa fa-sign-out"></span>
            </a>
        </div>
        <!-- End: Sidebar Collapse Button -->

    </div>
    <!-- End: Sidebar Left Content -->

</aside>
<!-- End: Sidebar Left -->