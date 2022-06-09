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

    <!-- Twitter -->
    <!-- <meta name="twitter:site" content="@bootstrapdash">
    <meta name="twitter:creator" content="@bootstrapdash">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

    <!-- Facebook -->
    <!-- <meta property="og:url" content="https://www.bootstrapdash.com/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> -->

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Azia Responsive Bootstrap 4 Dashboard Template</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="../lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

   </head>
  <body class="az-body az-body-sidebar az-body-dashboard-nine">
    <?php include 'main_menu.php';?>
    <?php include 'topmenu.php';?>

      <hr>


      <div class="az-content az-content-profile">
      <div class="container mn-ht-100p">
        <div class="content-wrapper w-100">
          <div class="row">
             <div class="col-12">
               <div class="card">
            <div class="card-body">
              <div class="invoice-header">
                <h1 class="invoice-title">Invoice</h1>
                <div class="billed-from">
                  <h6>UMP ADVANCED</h6>
                  <p>Kompleks Pentadbiran Utama,<br>
                  Lebuhraya Tun Razak,<br>
                  26300 Gambang</p>
                </div><!-- billed-from -->
              </div><!-- invoice-header -->

              <div class="row mg-t-20">
                <div class="col-md">
                  <label class="tx-gray-600">Billed To</label>
                  <div class="billed-to">
                    <h6>Juan Dela Cruz</h6>
                    <p>4033 Patterson Road, Staten Island, NY 10301 <br>
                    Tel No: 324 445-4544<br>
                    Email: youremail@companyname.com</p>
                  </div>
                </div><!-- col -->
                <div class="col-md">
                  <label class="tx-gray-600">Invoice Information</label>
                  <p class="invoice-info-row">
                    <span>Invoice No</span>
                    <span>GHT-673-00</span>
                  </p>
                  <p class="invoice-info-row">
                    <span>Project ID</span>
                    <span>32334300</span>
                  </p>
                  <p class="invoice-info-row">
                    <span>Issue Date:</span>
                    <span>November 21, 2017</span>
                  </p>
                  <p class="invoice-info-row">
                    <span>Due Date:</span>
                    <span>November 30, 2017</span>
                  </p>
                </div><!-- col -->
              </div><!-- row -->

              <div class="table-responsive mg-t-40">
                <table class="table table-invoice">
                  <thead>
                    <tr>
                      <th class="wd-20p">Type</th>
                      <th class="wd-40p">Description</th>
                      <th class="tx-center">QNTY</th>
                      <th class="tx-right">Unit Price</th>
                      <th class="tx-right">Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Website Design</td>
                      <td class="tx-12">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam...</td>
                      <td class="tx-center">2</td>
                      <td class="tx-right">$150.00</td>
                      <td class="tx-right">$300.00</td>
                    </tr>
                    <tr>
                      <td>Firefox Plugin</td>
                      <td class="tx-12">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque...</td>
                      <td class="tx-center">1</td>
                      <td class="tx-right">$1,200.00</td>
                      <td class="tx-right">$1,200.00</td>
                    </tr>
                    <tr>
                      <td>iPhone App</td>
                      <td class="tx-12">Et harum quidem rerum facilis est et expedita distinctio</td>
                      <td class="tx-center">2</td>
                      <td class="tx-right">$850.00</td>
                      <td class="tx-right">$1,700.00</td>
                    </tr>
                    <tr>
                      <td>Android App</td>
                      <td class="tx-12">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut</td>
                      <td class="tx-center">3</td>
                      <td class="tx-right">$850.00</td>
                      <td class="tx-right">$2,550.00</td>
                    </tr>
                    <tr>
                      <td colspan="2" rowspan="4" class="valign-middle">
                        <div class="invoice-notes">
                          <label class="az-content-label tx-13">Notes</label>
                          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                        </div><!-- invoice-notes -->
                      </td>
                      <td class="tx-right">Sub-Total</td>
                      <td colspan="2" class="tx-right">$5,750.00</td>
                    </tr>
                    <tr>
                      <td class="tx-right">Tax (5%)</td>
                      <td colspan="2"  class="tx-right">$287.50</td>
                    </tr>
                    <tr>
                      <td class="tx-right">Discount</td>
                      <td colspan="2" class="tx-right">-$50.00</td>
                    </tr>
                    <tr>
                      <td class="tx-right tx-uppercase tx-bold tx-inverse">Total Due</td>
                      <td colspan="2" class="tx-right"><h4 class="tx-primary tx-bold">$5,987.50</h4></td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- table-responsive -->

              <hr class="mg-b-40">

              <a href="" class="btn btn-primary btn-block">Pay Now</a>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- az-content-body -->
      </div>
    </div><!-- az-content -->
  </div>
</div>
  
  <hr>

<?php include 'footer.php';?>
     

    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
    <script src="../lib/chart.js/Chart.bundle.min.js"></script>
    <script src="../lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="../lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    <script src="../lib/select2/js/select2.min.js"></script>


    <script src="../js/azia.js"></script>
    <script src="../js/dashboard.sampledata.js"></script>

    <script>
      $(function(){
        'use strict'

        $('.az-sidebar .with-sub').on('click', function(e){
          e.preventDefault();
          $(this).parent().toggleClass('show');
          $(this).parent().siblings().removeClass('show');
        })

        $(document).on('click touchstart', function(e){
          e.stopPropagation();

          // closing of sidebar menu when clicking outside of it
          if(!$(e.target).closest('.az-header-menu-icon').length) {
            var sidebarTarg = $(e.target).closest('.az-sidebar').length;
            if(!sidebarTarg) {
              $('body').removeClass('az-sidebar-show');
            }
          }
        });


        $('#azSidebarToggle').on('click', function(e){
          e.preventDefault();

          if(window.matchMedia('(min-width: 992px)').matches) {
            $('body').toggleClass('az-sidebar-hide');
          } else {
            $('body').toggleClass('az-sidebar-show');
          }
        });

        new PerfectScrollbar('.az-sidebar-body', {
          suppressScrollX: true
        });

        /* ----------------------------------- */
        /* Dashboard content */


        $.plot('#flotChart1', [{
            data: dashData1,
            color: '#6f42c1'
          }], {
          series: {
            shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
          yaxis: {
            show: false,
            min: 0,
            max: 100
          },
          xaxis: { show: false }
        });

        $.plot('#flotChart2', [{
            data: dashData2,
            color: '#007bff'
          }], {
          series: {
            shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
          yaxis: {
            show: false,
            min: 0,
            max: 100
          },
          xaxis: { show: false }
        });

        $.plot('#flotChart3', [{
            data: dashData3,
            color: '#f10075'
          }], {
          series: {
            shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
          yaxis: {
            show: false,
            min: 0,
            max: 100
          },
          xaxis: { show: false }
        });

        $.plot('#flotChart4', [{
            data: dashData4,
            color: '#00cccc'
          }], {
          series: {
            shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
          yaxis: {
            show: false,
            min: 0,
            max: 100
          },
          xaxis: { show: false }
        });

        $.plot('#flotChart5', [{
            data: dashData2,
            color: '#00cccc'
          },{
            data: dashData3,
            color: '#007bff'
          },{
            data: dashData4,
            color: '#f10075'
          }], {
          series: {
            shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: false,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 20
          },
          yaxis: {
            show: false,
            min: 0,
            max: 100
          },
          xaxis: {
            show: true,
            color: 'rgba(0,0,0,.16)',
            ticks: [
              [0, ''],
              [10, '<span>Nov</span><span>05</span>'],
              [20, '<span>Nov</span><span>10</span>'],
              [30, '<span>Nov</span><span>15</span>'],
              [40, '<span>Nov</span><span>18</span>'],
              [50, '<span>Nov</span><span>22</span>'],
              [60, '<span>Nov</span><span>26</span>'],
              [70, '<span>Nov</span><span>30</span>'],
            ]
          }
        });

        $.plot('#flotChart6', [{
            data: dashData2,
            color: '#6f42c1'
          },{
            data: dashData3,
            color: '#007bff'
          },{
            data: dashData4,
            color: '#00cccc'
          }], {
          series: {
            shadowSize: 0,
            stack: true,
            bars: {
              show: true,
              lineWidth: 0,
              fill: 0.85
              //fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 20
          },
          yaxis: {
            show: false,
            min: 0,
            max: 100
          },
          xaxis: {
            show: true,
            color: 'rgba(0,0,0,.16)',
            ticks: [
              [0, ''],
              [10, '<span>Nov</span><span>05</span>'],
              [20, '<span>Nov</span><span>10</span>'],
              [30, '<span>Nov</span><span>15</span>'],
              [40, '<span>Nov</span><span>18</span>'],
              [50, '<span>Nov</span><span>22</span>'],
              [60, '<span>Nov</span><span>26</span>'],
              [70, '<span>Nov</span><span>30</span>'],
            ]
          }
        });

        $('#vmap').vectorMap({
          map: 'world_en',
          showTooltip: true,
          backgroundColor: '#f8f9fa',
          color: '#ced4da',
          colors: {
            us: '#6610f2',
            gb: '#8b4bf3',
            ru: '#aa7df3',
            cn: '#c8aef4',
            au: '#dfd3f2'
          },
          hoverColor: '#222',
          enableZoom: false,
          borderOpacity: .3,
          borderWidth: 3,
          borderColor: '#fff',
          hoverOpacity: .85
        });

      });
    </script>

    <script>
      $(function(){
        'use strict'

        new PerfectScrollbar('#azInvoiceList', {
          suppressScrollX: true
        });

        new PerfectScrollbar('.az-content-body-invoice', {
          suppressScrollX: true
        });

        $('#azInvoiceList .media').on('click', function(e){
          $(this).addClass('selected');
          $(this).siblings().removeClass('selected');

          $('body').addClass('az-content-body-show');
        });

      });
    </script>


  </body>
</html>
