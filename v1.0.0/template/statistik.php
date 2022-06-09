<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Azia Responsive Bootstrap 4 Dashboard Template</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="../lib/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

  </head>
  <body class="az-body az-body-sidebar az-body-dashboard-nine">

    <?php include 'main_menu.php';?>
    <div class="az-content az-content-dashboard-nine">
      <div class="az-header az-header-dashboard-nine">
        <div class="container-fluid">
          <div class="az-header-left">
            <a href="" id="azSidebarToggle" class="az-header-menu-icon"><span></span></a>
          </div><!-- az-header-left -->
          <div class="az-header-center">
            <input type="search" class="form-control" placeholder="Search for anything...">
            <button class="btn"><i class="fas fa-search"></i></button>
          </div><!-- az-header-center -->
          <div class="az-header-right">
            <div class="az-header-message">
              <a href="app-chat.html"><i class="typcn typcn-messages"></i></a>
            </div><!-- az-header-message -->
            <div class="dropdown az-header-notification">
              <a href="" class="new"><i class="typcn typcn-bell"></i></a>
              <div class="dropdown-menu">
                <div class="az-dropdown-header mg-b-20 d-sm-none">
                  <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <h6 class="az-notification-title">Notifications</h6>
                <p class="az-notification-text">You have 2 unread notification</p>
                <div class="az-notification-list">
                  <div class="media new">
                    <div class="az-img-user"><img src="../img/faces/face2.jpg" alt=""></div>
                    <div class="media-body">
                      <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                      <span>Mar 15 12:32pm</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media new">
                    <div class="az-img-user online"><img src="../img/faces/face3.jpg" alt=""></div>
                    <div class="media-body">
                      <p><strong>Joyce Chua</strong> just created a new blog post</p>
                      <span>Mar 13 04:16am</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="az-img-user"><img src="../img/faces/face4.jpg" alt=""></div>
                    <div class="media-body">
                      <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                      <span>Mar 13 02:56am</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="az-img-user"><img src="../img/faces/face5.jpg" alt=""></div>
                    <div class="media-body">
                      <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                      <span>Mar 12 10:40pm</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </div><!-- az-notification-list -->
                <div class="dropdown-footer"><a href="">View All Notifications</a></div>
              </div><!-- dropdown-menu -->
            </div><!-- az-header-notification -->
            <div class="dropdown az-profile-menu">
              <a href="" class="az-img-user"><img src="../img/faces/face1.jpg" alt=""></a>
              <div class="dropdown-menu">
                <div class="az-dropdown-header d-sm-none">
                  <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <div class="az-header-profile">
                  <div class="az-img-user">
                    <img src="../img/faces/face1.jpg" alt="">
                  </div><!-- az-img-user -->
                  <h6>Aziana Pechon</h6>
                  <span>Premium Member</span>
                </div><!-- az-header-profile -->

                <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
                <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
              </div><!-- dropdown-menu -->
            </div>
          </div><!-- az-header-right -->
        </div><!-- container -->
      </div><!-- az-header -->
      <div class="az-content-header">
        <div class="az-content-header-top">
         
        </div><!-- az-content-left -->
        <div class="az-content-body pd-lg-l-40 d-flex flex-column">
          <div class="az-content-breadcrumb">
            <span>Financial Report</span>
            <span>Statistic</span>
          </div>
        <h2 class="az-content-title">Statistic</h2>

        <div class="az-content-label mg-b-5">Student</div>
        <div class="row row-sm">
            <div class="col-sm-8 col-md-6 mg-t-20 mg-md-t-0">
                <div class="card card-dashboard-four">
                <div class="card-header">
                    <h6 class="card-title">Numbers of enrolled students in all courses.</h6>
                </div><!-- card-header -->
                    <div class="chartjs-wrapper-demo"><canvas id="chartLine1"></canvas></div>
                    </div><!-- col-6 --></div>
            <div class="col-sm-8 col-md-6 mg-t-20 mg-md-t-0">
                <div class="card card-dashboard-four">
                <div class="card-header">
                    <h6 class="card-title">Numbers of enrolled students in all courses.</h6>
                </div><!-- card-header -->
                    <div class="chartjs-wrapper-demo mg-b-20 mg-md-b-0 mg-md-r-30 mg-xl-r-40"><canvas id="chartPie"></canvas></div>
                </div><!-- col-6 --></div>
                </div><!-- row -->
                <hr class="mg-y-5">
                <div>
                <a href="" class="btn btn-purple" style="float: right;">Export</a>
                </div>

        <hr class="mg-y-20">
        <div class="az-content-label mg-b-5">Courses</div>
        <div class="row row-sm">
            <div class="col-sm-8 col-md-6 mg-t-20 mg-md-t-0">
                <div class="card card-dashboard-four">
                <div class="card-header">
                    <h6 class="card-title">Numbers of enrolled students in all courses.</h6>
                </div><!-- card-header -->
                    <div class="chartjs-wrapper-demo"><canvas id="chartLine2"></canvas></div>
                </div><!-- col-6 --></div>
        <div class="col-sm-8 col-md-6 mg-t-20 mg-md-t-0">
                <div class="card card-dashboard-four">
                <div class="card-header">
                    <h6 class="card-title">Course in the Category.</h6>
                </div><!-- card-header -->
                    <div class="chartjs-wrapper-demo"><canvas id="chartBar4"></canvas></div>
                </div></div>
                </div><!-- row -->
                <hr class="mg-y-5">
                <div>
                <a href="" class="btn btn-purple" style="float: right;">Export</a>
                </div>

        <hr class="mg-y-20">
        <div class="az-content-label mg-b-5">Instructor/Course Owner</div>
        <div class="row row-sm">
            <div class="col-sm-8 col-md-6 mg-t-20 mg-md-t-0">
                <div class="card card-dashboard-four">
                <div class="card-header">
                   <h6 class="card-title">Numbers of enrolled students in all courses.</h6>
                </div><!-- card-header -->
                    <div id="morrisBar1" class="morris-wrapper-demo"></div>
                </div><!-- col-6 --></div>
            <div class="col-sm-8 col-md-6 mg-t-20 mg-md-t-0">
                <div class="card card-dashboard-four">
                <div class="card-header">
                    <h6 class="card-title">Overall Sales.</h6>
            </div><!-- card-header -->
                    <div id="morrisBar2" class="morris-wrapper-demo"></div>
            </div></div>
            </div><hr class="mg-y-5">
                <div>
                <a href="" class="btn btn-purple" style="float: right;">Export</a>
                </div>
            
            
            
            </div>
            </div><!-- az-content-body -->
      <?php include 'footer.php';?>
    </div><!-- az-content -->


    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
    <script src="../lib/chart.js/Chart.bundle.min.js"></script>
    <script src="../lib/morris.js/morris.min.js"></script>
    <script src="../lib/raphael/raphael.min.js"></script>

    <script src="../js/azia.js"></script>
    <script>
      $(function(){
  'use strict';


  var ctx4 = document.getElementById('chartBar4').getContext('2d');
  new Chart(ctx4, {
    type: 'horizontalBar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        label: '# of Votes',
        data: [12, 39, 20, 10, 25, 18],
        backgroundColor: ['#560bd0', '#007bff','#00cccc','#cbe0e3','#74de00','#f10075']
      }]
    },
    options: {
      maintainAspectRatio: false,
      legend: {
        display: false,
          labels: {
            display: false
          }
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 10,
          }
        }],
        xAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 11,
            max: 80
          }
        }]
      }
    }
  }); 


  /** PIE CHART **/
  var datapie = {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
    datasets: [{
      data: [20,20,30,5,25],
      backgroundColor: ['#560bd0', '#007bff','#00cccc','#cbe0e3','#74de00']
    }]
  };

  var optionpie = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
      display: false,
    },
    animation: {
      animateScale: true,
      animateRotate: true
    }
  };

  // For a doughnut chart
  var ctx6 = document.getElementById('chartPie');
  var myPieChart6 = new Chart(ctx6, {
    type: 'doughnut',
    data: datapie,
    options: optionpie
  });
  

   /* LINE CHART */
   var ctx8 = document.getElementById('chartLine1');
  new Chart(ctx8, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      datasets: [{
        data: [12, 15, 18, 40, 35, 38, 32, 20, 25, 15, 25, 30],
        borderColor: '#f10075',
        borderWidth: 1,
        fill: false
      },{
        data: [10, 20, 25, 55, 50, 45, 35, 30, 45, 35, 55, 40],
        borderColor: '#007bff',
        borderWidth: 1,
        fill: false
      }]
    },
    options: {
      maintainAspectRatio: false,
      legend: {
        display: false,
          labels: {
            display: false
          }
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 10,
            max: 80
          }
        }],
        xAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 11
          }
        }]
      }
    }
  });


  var ctx8 = document.getElementById('chartLine2');
  new Chart(ctx8, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      datasets: [{
        data: [12, 15, 18, 40, 35, 38, 32, 20, 25, 15, 25, 30],
        borderColor: '#f10075',
        borderWidth: 1,
        fill: false
      },{
        data: [10, 20, 25, 55, 50, 45, 35, 30, 45, 35, 55, 40],
        borderColor: '#007bff',
        borderWidth: 1,
        fill: false
      }]
    },
    options: {
      maintainAspectRatio: false,
      legend: {
        display: false,
          labels: {
            display: false
          }
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 10,
            max: 80
          }
        }],
        xAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 11
          }
        }]
      }
    }
  });


});

    </script>
    <script>
      $(function(){
  'use strict';

  var morrisData = [
    { y: '2006', a: 100, b: 90 },
    { y: '2007', a: 75,  b: 65 },
    { y: '2008', a: 50,  b: 40 },
    { y: '2009', a: 75,  b: 65 },
    { y: '2010', a: 50,  b: 40 },
    { y: '2011', a: 80, b: 90 },
    { y: '2012', a: 75,  b: 65 },
    { y: '2013', a: 50,  b: 70 }
  ];


  new Morris.Bar({
    element: 'morrisBar1',
    data: morrisData,
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B'],
    barColors: ['#560bd0', '#007bff'],
    gridTextSize: 11,
    hideHover: 'auto',
    resize: true
  });

  new Morris.Bar({
    element: 'morrisBar2',
    data: morrisData,
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B'],
    barColors: ['#560bd0', '#007bff'],
    gridTextSize: 11,
    hideHover: 'auto',
    resize: true
  });

});
    </script>
   
    
  </body>
</html>
