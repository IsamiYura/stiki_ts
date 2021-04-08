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
      <div class="page-heading">
            <div class="media clearfix">
              <div class="media-left pr30">
                <a href="#">
                  <img class="media-object mw150" src="<?= base_url('/assets/img/avatars/profile_avatar.jpg') ?>" alt="...">
                </a>
              </div>                      
              <div class="media-body va-m">
                <h2 class="media-heading">Michael Halls
                  <small> - Profile</small>
                </h2>
                <p class="lead">Lorem ipsum dolor sit amet ctetur adicing elit, sed do eiusmod tempor incididunt</p>
                <div class="media-links">
                  <ul class="list-inline list-unstyled">
                    <li>
                      <a href="#" title="facebook link">
                        <span class="fa fa-facebook-square fs35 text-primary"></span>
                      </a>
                    </li>
                    <li>
                      <a href="#" title="twitter link">
                        <span class="fa fa-twitter-square fs35 text-info"></span>
                      </a>
                    </li>
                    <li>
                      <a href="#" title="google plus link">
                        <span class="fa fa-google-plus-square fs35 text-danger"></span>
                      </a>
                    </li>
                    <li class="hidden">
                      <a href="#" title="behance link">
                        <span class="fa fa-behance-square fs35 text-primary"></span>
                      </a>
                    </li>
                    <li class="hidden">
                      <a href="#" title="pinterest link">
                        <span class="fa fa-pinterest-square fs35 text-danger-light"></span>
                      </a>
                    </li>
                    <li class="hidden">
                      <a href="#" title="linkedin link">
                        <span class="fa fa-linkedin-square fs35 text-info"></span>
                      </a>
                    </li>
                    <li class="hidden">
                      <a href="#" title="github link">
                        <span class="fa fa-github-square fs35 text-dark"></span>
                      </a>
                    </li>
                    <li class="">
                      <a href="#" title="phone link">
                        <span class="fa fa-phone-square fs35 text-system"></span>
                      </a>
                    </li>
                    <li>
                      <a href="#" title="email link">
                        <span class="fa fa-envelope-square fs35 text-muted"></span>
                      </a>
                    </li>
                    <li class="hidden">
                      <a href="#" title="external link">
                        <span class="fa fa-external-link-square fs35 text-muted"></span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
              <div class="panel">
                <div class="panel-heading">
                  <span class="panel-icon">
                    <i class="fa fa-star"></i>
                  </span>
                  <span class="panel-title"> User Popularity</span>
                </div>
                <div class="panel-body pn">
                  <table class="table mbn tc-icon-1 tc-med-2 tc-bold-last">
                    <thead>
                      <tr class="hidden">
                        <th class="mw30">#</th>
                        <th>First Name</th>
                        <th>Revenue</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <span class="fa fa-desktop text-warning"></span>
                        </td>
                        <td>Television</td>
                        <td>
                          <i class="fa fa-caret-up text-info pr10"></i>$855,913</td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fa fa-microphone text-primary"></span>
                        </td>
                        <td>Radio</td>
                        <td>
                          <i class="fa fa-caret-down text-danger pr10"></i>$349,712</td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fa fa-newspaper-o text-info"></span>
                        </td>
                        <td>Newspaper</td>
                        <td>
                          <i class="fa fa-caret-up text-info pr10"></i>$1,259,742</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="panel">
                <div class="panel-heading">
                  <span class="panel-icon">
                    <i class="fa fa-trophy"></i>
                  </span>
                  <span class="panel-title"> My Skills</span>
                </div>
                <div class="panel-body pb5">
                  <span class="label label-warning mr5 mb10 ib lh15">Default</span>
                  <span class="label label-primary mr5 mb10 ib lh15">Primary</span>
                  <span class="label label-info mr5 mb10 ib lh15">Success</span>
                  <span class="label label-success mr5 mb10 ib lh15">Info</span>
                  <span class="label label-alert mr5 mb10 ib lh15">Warning</span>
                  <span class="label label-system mr5 mb10 ib lh15">Danger</span>
                  <span class="label label-info mr5 mb10 ib lh15">Success</span>
                  <span class="label label-success mr5 mb10 ib lh15">Ui Design</span>
                  <span class="label label-primary mr5 mb10 ib lh15">Primary</span>

                </div>
              </div>
              <div class="panel">
                <div class="panel-heading">
                  <span class="panel-icon">
                    <i class="fa fa-pencil"></i>
                  </span>
                  <span class="panel-title">About Me</span>
                </div>
                <div class="panel-body pb5">

                  <h6>Experience</h6>

                  <h4>Facebook Internship</h4>
                  <p class="text-muted"> University of Missouri, Columbia
                    <br> Student Health Center, June 2010 - 2012
                  </p>

                  <hr class="short br-lighter">

                  <h6>Education</h6>

                  <h4>Bachelor of Science, PhD</h4>
                  <p class="text-muted"> University of Missouri, Columbia
                    <br> Student Health Center, June 2010 through Aug 2011
                  </p>

                  <hr class="short br-lighter">

                  <h6>Accomplishments</h6>

                  <h4>Successful Business</h4>
                  <p class="text-muted pb10"> University of Missouri, Columbia
                    <br> Student Health Center, June 2010 through Aug 2011
                  </p>

                </div>
              </div>
            </div>
            <div class="col-md-8">

              <div class="tab-block">
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a href="#tab1" data-toggle="tab">Activity</a>
                  </li>
                  <li>
                    <a href="#tab2" data-toggle="tab">Social</a>
                  </li>
                  <li>
                    <a href="#tab3" data-toggle="tab">Media</a>
                  </li>
                </ul>
                <div class="tab-content p30" style="height: 730px;">
                  <div id="tab1" class="tab-pane active">
                    <div class="media">
                      <a class="pull-left" href="#"> <img class="media-object mn thumbnail mw50" src="assets/img/avatars/4.jpg" alt="..."> </a>
                      <div class="media-body">
                        <h5 class="media-heading mb20">Simon Rivers Posted
                          <small> - 3 hours ago</small>
                        </h5>
                        <img src="assets/img/stock/1.jpg" class="mw140 mr25 mb20"><img src="assets/img/stock/2.jpg" class="mw140 mr25 mb20"> <img src="assets/img/stock/3.jpg" class="mw140 mb20">
                        <div class="media-links">
                          <span class="text-light fs12 mr10">
                            <span class="fa fa-thumbs-o-up text-primary mr5"></span> Like </span>
                          <span class="text-light fs12 mr10">
                            <span class="fa fa-share text-primary mr5"></span> Share </span>
                          <span class="text-light fs12 mr10">
                            <span class="fa fa-floppy-o text-primary mr5"></span> Save </span>
                          <span class="text-light fs12 mr10">
                            <span class="fa fa-comment text-primary mr5"></span> Comment </span>
                        </div>
                      </div>
                    </div>
                    <div class="media mt25">
                      <a class="pull-left" href="#"> <img class="media-object mn thumbnail thumbnail-sm rounded mw40" src="assets/img/avatars/3.jpg" alt="..."> </a>
                      <div class="media-body mb5">
                        <h5 class="media-heading mbn">Simon Rivers Posted
                          <small> - 3 hours ago</small>
                        </h5>
                        <p> Omg so freaking sweet dude.</p>
                        <div class="media pb10">
                          <a class="pull-left" href="#"> <img class="media-object mn thumbnail thumbnail-sm rounded mw40" src="assets/img/avatars/4.jpg" alt="..."> </a>
                          <div class="media-body mb5">
                            <h5 class="media-heading mbn">Jessica Wong
                              <small> - 3 hours ago</small>
                            </h5>
                            <p>Omgosh I'm in love</p>
                          </div>
                        </div>
                        <div class="media mtn">
                          <a class="pull-left" href="#"> <img class="media-object mn thumbnail thumbnail-sm rounded mw40" src="assets/img/avatars/3.jpg" alt="..."> </a>
                          <div class="media-body mb5">
                            <h5 class="media-heading mbn">Jessica Wong
                              <small> - 3 hours ago</small>
                            </h5>
                            <p>Omgosh I'm in love</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="media mt25">
                      <a class="pull-left" href="#"> <img class="media-object thumbnail mw50" src="assets/img/avatars/5.jpg" alt="..."> </a>
                      <div class="media-body">
                        <h5 class="media-heading mb20">Simon Rivers Posted
                          <small> - 3 hours ago</small>
                        </h5>
                        <img src="assets/img/stock/4.jpg" class="mw140 mr25 mb20"><img src="assets/img/stock/2.jpg" class="mw140 mr25 mb20"> <img src="assets/img/stock/5.jpg" class="mw140 mb20">
                        <div class="media-links">
                          <span class="text-light fs12 mr10">
                            <span class="fa fa-thumbs-o-up text-primary mr5"></span> Like </span>
                          <span class="text-light fs12 mr10">
                            <span class="fa fa-share text-primary mr5"></span> Share </span>
                          <span class="text-light fs12 mr10">
                            <span class="fa fa-floppy-o text-primary mr5"></span> Save </span>
                          <span class="text-light fs12 mr10">
                            <span class="fa fa-comment text-primary mr5"></span> Comment </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="tab2" class="tab-pane"></div>
                  <div id="tab3" class="tab-pane"></div>
                  <div id="tab4" class="tab-pane"></div>
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
