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
                  <h4 class="card-title">Orders</h4>
                  <div class="row grid-margin">
                    <div class="col-12">
                      <div class="alert alert-warning" role="alert">
                        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                      </div>
                    </div>
                  </div>
                  <div class="row overflow-auto">
                    <div class="col-12">
                      <table id="order-listing" class="table" cellspacing="0" width="100%">
                        <thead>
                          <tr class="bg-primary text-white">
                            <th>Order #</th>
                            <th>Customer</th>
                            <th>Ship to</th>
                            <th>Base Price</th>
                            <th>Purchased Price</th>
                            <th>Status</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>WD-61</td>
                            <td>Edinburgh</td>
                            <td>New York</td>
                            <td>$1500</td>
                            <td>$3200</td>
                            <td>
                              <label class="badge badge-info">On hold</label>
                            </td>
                            <td class="text-right">
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-eye text-primary"></i>View </button>
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-delete-outline text-danger"></i>Remove </button>
                            </td>
                          </tr>
                          <tr>
                            <td>WD-62</td>
                            <td>Doe</td>
                            <td>Brazil</td>
                            <td>$4500</td>
                            <td>$7500</td>
                            <td>
                              <label class="badge badge-danger">Pending</label>
                            </td>
                            <td class="text-right">
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-eye text-primary"></i>View </button>
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-delete-outline text-danger"></i>Remove </button>
                            </td>
                          </tr>
                          <tr>
                            <td>WD-63</td>
                            <td>Sam</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td class="text-right">
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-eye text-primary"></i>View </button>
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-delete-outline text-danger"></i>Remove </button>
                            </td>
                          </tr>
                          <tr>
                            <td>WD-64</td>
                            <td>Joe</td>
                            <td>Netherland</td>
                            <td>$1100</td>
                            <td>$7300</td>
                            <td>
                              <label class="badge badge-warning">Open</label>
                            </td>
                            <td class="text-right">
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-eye text-primary"></i>View </button>
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-delete-outline text-danger"></i>Remove </button>
                            </td>
                          </tr>
                          <tr>
                            <td>WD-65</td>
                            <td>Edward</td>
                            <td>Indonesia</td>
                            <td>$3600</td>
                            <td>$4800</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td class="text-right">
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-eye text-primary"></i>View </button>
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-delete-outline text-danger"></i>Remove </button>
                            </td>
                          </tr>
                          <tr>
                            <td>WD-66</td>
                            <td>Stella</td>
                            <td>Japan</td>
                            <td>$5600</td>
                            <td>$3600</td>
                            <td>
                              <label class="badge badge-info">On hold</label>
                            </td>
                            <td class="text-right">
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-eye text-primary"></i>View </button>
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-delete-outline text-danger"></i>Remove </button>
                            </td>
                          </tr>
                          <tr>
                            <td>WD-67</td>
                            <td>Jaqueline</td>
                            <td>Germany</td>
                            <td>$1100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td class="text-right">
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-eye text-primary"></i>View </button>
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-delete-outline text-danger"></i>Remove </button>
                            </td>
                          </tr>
                          <tr>
                            <td>WD-68</td>
                            <td>Tim</td>
                            <td>Italy</td>
                            <td>$6300</td>
                            <td>$2100</td>
                            <td>
                              <label class="badge badge-warning">Open</label>
                            </td>
                            <td class="text-right">
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-eye text-primary"></i>View </button>
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-delete-outline text-danger"></i>Remove </button>
                            </td>
                          </tr>
                          <tr>
                            <td>WD-69</td>
                            <td>John</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td class="text-right">
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-eye text-primary"></i>View </button>
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-delete-outline text-danger"></i>Remove </button>
                            </td>
                          </tr>
                          <tr>
                            <td>WD-70</td>
                            <td>Tom</td>
                            <td>Germany</td>
                            <td>$1100</td>
                            <td>$2300</td>
                            <td>
                              <label class="badge badge-danger">Pending</label>
                            </td>
                            <td class="text-right">
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-eye text-primary"></i>View </button>
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-delete-outline text-danger"></i>Remove </button>
                            </td>
                          </tr>
                          <tr>
                            <td>WD-71</td>
                            <td>Aleena</td>
                            <td>New York</td>
                            <td>$1600</td>
                            <td>$3500</td>
                            <td>
                              <label class="badge badge-danger">Pending</label>
                            </td>
                            <td class="text-right">
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-eye text-primary"></i>View </button>
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-delete-outline text-danger"></i>Remove </button>
                            </td>
                          </tr>
                          <tr>
                            <td>WD-72</td>
                            <td>Alphy</td>
                            <td>Brazil</td>
                            <td>$5500</td>
                            <td>$7200</td>
                            <td>
                              <label class="badge badge-warning">Open</label>
                            </td>
                            <td class="text-right">
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-eye text-primary"></i>View </button>
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-delete-outline text-danger"></i>Remove </button>
                            </td>
                          </tr>
                          <tr>
                            <td>WD-73</td>
                            <td>Twinkle</td>
                            <td>Italy</td>
                            <td>$1560</td>
                            <td>$2530</td>
                            <td>
                              <label class="badge badge-warning">Open</label>
                            </td>
                            <td class="text-right">
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-eye text-primary"></i>View </button>
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-delete-outline text-danger"></i>Remove </button>
                            </td>
                          </tr>
                          <tr>
                            <td>WD-74</td>
                            <td>Catherine</td>
                            <td>Brazil</td>
                            <td>$1600</td>
                            <td>$5600</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td class="text-right">
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-eye text-primary"></i>View </button>
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-delete-outline text-danger"></i>Remove </button>
                            </td>
                          </tr>
                          <tr>
                            <td>WD-75</td>
                            <td>Daniel</td>
                            <td>Singapore</td>
                            <td>$6800</td>
                            <td>$9800</td>
                            <td>
                              <label class="badge badge-danger">Pending</label>
                            </td>
                            <td class="text-right">
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-eye text-primary"></i>View </button>
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-delete-outline text-danger"></i>Remove </button>
                            </td>
                          </tr>
                          <tr>
                            <td>WD-76</td>
                            <td>Tom</td>
                            <td>Tokyo</td>
                            <td>$1600</td>
                            <td>$6500</td>
                            <td>
                              <label class="badge badge-info">On hold</label>
                            </td>
                            <td class="text-right">
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-eye text-primary"></i>View </button>
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-delete-outline text-danger"></i>Remove </button>
                            </td>
                          </tr>
                          <tr>
                            <td>WD-77</td>
                            <td>Cris</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-warning">Open</label>
                            </td>
                            <td class="text-right">
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-eye text-primary"></i>View </button>
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-delete-outline text-danger"></i>Remove </button>
                            </td>
                          </tr>
                          <tr>
                            <td>WD-78</td>
                            <td>Tim</td>
                            <td>Italy</td>
                            <td>$6300</td>
                            <td>$2100</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td class="text-right">
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-eye text-primary"></i>View </button>
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-delete-outline text-danger"></i>Remove </button>
                            </td>
                          </tr>
                          <tr>
                            <td>WD-79</td>
                            <td>Jack</td>
                            <td>Tokyo</td>
                            <td>$3100</td>
                            <td>$7300</td>
                            <td>
                              <label class="badge badge-danger">Pending</label>
                            </td>
                            <td class="text-right">
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-eye text-primary"></i>View </button>
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-delete-outline text-danger"></i>Remove </button>
                            </td>
                          </tr>
                          <tr>
                            <td>WD-80</td>
                            <td>Tony</td>
                            <td>Germany</td>
                            <td>$1100</td>
                            <td>$2300</td>
                            <td>
                              <label class="badge badge-info">On hold</label>
                            </td>
                            <td class="text-right">
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-eye text-primary"></i>View </button>
                              <button class="btn btn-light">
                                <i class="typcn icon typcn-delete-outline text-danger"></i>Remove </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- container -->
    </div><!-- az-content -->
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

        $('#order-listing').DataTable({
      "aLengthMenu": [
        [5, 10, 15, -1],
        [5, 10, 15, "All"]
      ],
      "iDisplayLength": 10,
      "language": {
        search: ""
      }
    });
    $('#order-listing').each(function() {
      var datatable = $(this);
      // SEARCH - Add the placeholder for Search and Turn this into in-line form control
      var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
      search_input.attr('placeholder', 'Search');
      search_input.removeClass('form-control-sm');
      // LENGTH - Inline-Form control
      var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
      length_sel.removeClass('form-control-sm');
    });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
  </body>
</html>
