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
    <li 
    <?php
        $uri = $_SERVER['REQUEST_URI'];
        
        if($uri == "/user/tracer" || $uri == "/user/tracer/"){
            echo ("class='active'");
        }
        ?>
    >
      <a href=<?php echo base_url('user/tracer')?>>
        <span class="fa fa-calendar"></span>
        <span class="sidebar-title">Tracer Study</span>
      </a>
    </li>
    <li class="sidebar-label pt15">Contoh Dropdown</li>
    <li>
      <a class="accordion-toggle" href="#">
        <span class="fa fa-columns"></span>
        <span class="sidebar-title">Layout Templates</span>
        <span class="caret"></span>
      </a>
      <ul class="nav sub-nav">
        <li>
          <a class="accordion-toggle" href="#">
            <span class=""></span>
            Sidebars
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