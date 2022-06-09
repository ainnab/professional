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
    <style>
      .form-control2 {
  display: block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1.5;
  color: #596882;
  background-color: #fff;
  background-clip: padding-box;
  border: 0px solid #cdd4e0;
  border-radius: 3px;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
  </style>

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
    <link href="../lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

  </head>
  <?php
    session_start();
    if(!isset($_SESSION["ic"])) {
        header("Location: signin.php");
        exit();
    }
  ?>
  <body>

    <div class="az-header">
      <div class="container">
        <div class="az-header-left">
          <a href="index.html" class="az-logo"><span></span> azia</a>
          <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
          <div class="az-header-menu-header">
            <a href="index.html" class="az-logo"><span></span> azia</a>
            <a href="" class="close">&times;</a>
          </div><!-- az-header-menu-header -->
          <ul class="nav">
            <li class="nav-item">
              <a href="" class="nav-link with-sub"><i class="typcn typcn-folder"></i> Apps</a>
              <nav class="az-menu-sub">
                <a href="app-mail.html" class="nav-link">Mailbox</a>
                <a href="app-chat.html" class="nav-link">Chat</a>
                <a href="app-calendar.html" class="nav-link">Calendar</a>
                <a href="app-contacts.html" class="nav-link">Contacts</a>
                <a href="app-kanban.html" class="nav-link">Kanban</a>
                <a href="app-tickets.html" class="nav-link">Tickets</a>
              </nav>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i> Pages</a>
              <nav class="az-menu-sub">
                <a href="page-profile.html" class="nav-link">Profile</a>
                <a href="page-invoice.html" class="nav-link">Invoice</a>
                <a href="page-signin.html" class="nav-link">Sign In</a>
                <a href="page-signup.html" class="nav-link">Sign Up</a>
                <a href="page-404.html" class="nav-link">Page 404</a>
                <a href="page-faq.html" class="nav-link">Faq</a>
                <a href="page-news-grid.html" class="nav-link">News Grid</a>
                <a href="page-product-catalogue.html" class="nav-link">Product Catalogue</a>
                <a href="page-project-list.html" class="nav-link">Project List</a>
                <a href="page-order.html" class="nav-link">Orders</a>
                <a href="page-pricing.html" class="nav-link">Pricing</a>
                <a href="landing-sass.html" class="nav-link">Landing Page</a>
              </nav>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link with-sub"><i class="typcn typcn-book"></i> Components</a>
              <div class="az-menu-sub az-menu-sub-mega">
                <div class="container">
                  <div>
                    <nav class="nav">
                      <span>UI Elements</span>
                      <a href="elem-accordion.html" class="nav-link">Accordion</a>
                      <a href="elem-alerts.html" class="nav-link">Alerts</a>
                      <a href="elem-avatar.html" class="nav-link">Avatar</a>
                      <a href="elem-badge.html" class="nav-link">Badge</a>
                      <a href="elem-breadcrumbs.html" class="nav-link">Breadcrumbs</a>
                      <a href="elem-buttons.html" class="nav-link">Buttons</a>
                      <a href="elem-cards.html" class="nav-link">Cards</a>
                      <a href="elem-carousel.html" class="nav-link">Carousel</a>
                    </nav>
                    <nav class="nav">
                      <a href="elem-collapse.html" class="nav-link">Collapse</a>
                      <a href="elem-dropdown.html" class="nav-link">Dropdown</a>
                      <a href="elem-icons.html" class="nav-link">Icons</a>
                      <a href="elem-images.html" class="nav-link">Images</a>
                      <a href="elem-list-group.html" class="nav-link">List Group</a>
                      <a href="elem-media-object.html" class="nav-link">Media Object</a>
                      <a href="elem-modals.html" class="nav-link">Modals</a>
                      <a href="elem-navigation.html" class="nav-link">Navigation</a>
                    </nav>
                    <nav class="nav">
                      <a href="elem-pagination.html" class="nav-link">Pagination</a>
                      <a href="elem-popover.html" class="nav-link">Popover</a>
                      <a href="elem-progress.html" class="nav-link">Progress</a>
                      <a href="elem-spinners.html" class="nav-link">Spinners</a>
                      <a href="elem-toast.html" class="nav-link">Toast</a>
                      <a href="elem-tooltip.html" class="nav-link">Tooltip</a>
                    </nav>
                  </div>
                  <div>
                    <nav class="nav">
                      <span>Forms</span>
                      <a href="form-elements.html" class="nav-link">Form Elements</a>
                      <a href="form-layouts.html" class="nav-link">Form Layouts</a>
                      <a href="form-validation.html" class="nav-link">Form Validation</a>
                      <a href="form-wizards.html" class="nav-link">Form Wizards</a>
                      <a href="form-editor.html" class="nav-link">WYSIWYG Editor</a>
                    </nav>
                  </div>
                  <div>
                    <nav class="nav">
                      <span>Charts</span>
                      <a href="chart-morris.html" class="nav-link">Morris Charts</a>
                      <a href="chart-flot.html" class="nav-link">Flot Charts</a>
                      <a href="chart-chartjs.html" class="nav-link">ChartJS</a>
                      <a href="chart-sparkline.html" class="nav-link">Sparkline</a>
                      <a href="chart-peity.html" class="nav-link">Peity</a>
                    </nav>
                  </div>
                  <div>
                    <nav class="nav">
                      <span>Maps</span>
                      <a href="map-google.html" class="nav-link">Google Maps</a>
                      <a href="map-leaflet.html" class="nav-link">Leaflet</a>
                      <a href="map-vector.html" class="nav-link">Vector Maps</a>
                      <span>Tables</span>
                      <a href="table-basic.html" class="nav-link">Basic Tables</a>
                      <a href="table-data.html" class="nav-link">Data Tables</a>
                    </nav>
                  </div>
                </div><!-- container -->
              </div>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link with-sub"><i class="typcn typcn-tabs-outline"></i> Utilities</a>
              <nav class="az-menu-sub">
                <a href="util-background.html" class="nav-link">Background</a>
                <a href="util-border.html" class="nav-link">Border</a>
                <a href="util-display.html" class="nav-link">Display</a>
                <a href="util-flex.html" class="nav-link">Flex</a>
                <a href="util-height.html" class="nav-link">Height</a>
                <a href="util-margin.html" class="nav-link">Margin</a>
                <a href="util-padding.html" class="nav-link">Padding</a>
                <a href="util-position.html" class="nav-link">Position</a>
                <a href="util-typography.html" class="nav-link">Typography</a>
                <a href="util-width.html" class="nav-link">Width</a>
                <a href="util-extras.html" class="nav-link">Extras</a>
              </nav>
            </li>
          </ul>
        </div><!-- az-header-menu -->
        
         
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
              <a href="signout.php" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- az-header-right -->
      </div><!-- container -->
    </div><!-- az-header -->

    <div class="az-content az-content-dashboard">
      <div class="container">
        <div class="az-content-body">
          <div class="row row-sm mg-b-20">
            <div class="col-lg-12">
              <div class="card card-dashboard-pageviews">
                <div class="card-body">
                  <form id="wform">
                    <div id="wizard3">
                      <h3>Personal Information</h3>
                      <section>
                      <?php include 'tab_personal.php';?>
                      </section>
                      <h3>Parent Information</h3>
                      <section>
                      <?php include 'tab_parent.php';?>
                      </section>
                      <h3>Application</h3>
                      <section>
                      <?php include 'testwizard2.php';?>
                      </section>
                    </div>
                  </form>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- az-content-body -->
      </div><!-- container -->
    </div><!-- az-content -->

    <div class="az-footer ht-40">
      <div class="container ht-100p pd-t-0-f">
        <span>&copy; 2019 Azia Responsive Bootstrap 4 Dashboard Template</span>
      </div>  
    </div><!-- az-footer -->

   
    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
    <script src="../lib/jquery-steps/jquery.steps.min.js"></script>
    <script src="../lib/parsleyjs/parsley.min.js"></script>
    <script src="../lib/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js"></script>
    <script src="../lib/jquery.maskedinput/jquery.maskedinput.js"></script>
    <script src="../js/azia.js"></script>
   

    <script>
	$('#pgFirst').on('change', function() {
		if (this.value == 'DIP') {
			$("#diploma_first").show();
			$("#pre_diploma_first").hide();
			$("#foundation_first").hide();
		} else if (this.value == 'PREDIP') {
			$("#diploma_first").hide();
			$("#pre_diploma_first").show();
			$("#foundation_first").hide();
		} else if (this.value == 'FOUNDATION') {
			$("#diploma_first").hide();
			$("#pre_diploma_first").hide();
			$("#foundation_first").show();
		}
	});
	$('#pgSecond').on('change', function() {
		if (this.value == 'DIP') {
			$("#diploma_second").show();
			$("#pre_diploma_second").hide();
			$("#foundation_second").hide();
		} else if (this.value == 'PREDIP') {
			$("#diploma_second").hide();
			$("#pre_diploma_second").show();
			$("#foundation_second").hide();
		} else if (this.value == 'FOUNDATION') {
			$("#diploma_second").hide();
			$("#pre_diploma_second").hide();
			$("#foundation_second").show();
		}
	});
	$('#pgThird').on('change', function() {
		if (this.value == 'DIP') {
			$("#diploma_third").show();
			$("#pre_diploma_third").hide();
			$("#foundation_third").hide();
		} else if (this.value == 'PREDIP') {
			$("#diploma_third").hide();
			$("#pre_diploma_third").show();
			$("#foundation_third").hide();
		} else if (this.value == 'FOUNDATION') {
			$("#diploma_third").hide();
			$("#pre_diploma_third").hide();
			$("#foundation_third").show();
		}
	});
	$(function() {
		$("input[name='newNationality']").click(function() {
			if ($("#local").is(":checked")) {
				$("#ic_num").show();
				$("#passport").hide();
			} else {
				$("#ic_num").hide();
				$("#passport").show();
			}
		});
	});
	$(function() {
		$("input[name='newDisabilities']").click(function() {
			if ($("#no").is(":checked")) {
				$("#oku").hide();
			} else {
				$("#oku").show();
			}
		});
	});
	$("#same_address").click(function() {
		if($(this).is(":checked")) {
			$("#address2").hide();
		} else {
			$("#address2").show();
		}
	});
	$('#newEntryQuali').on('change', function() {

		if ( this.value == '5') {
			$("#otherQuali").show();
			$("#subject").hide();
			$("#others").show();     

			$(document).on('click', '.add_others', function(){
				var html = '';
				html += '<tr>';
				html += '<td><input type="text" name="spm_subject[]" placeholder="Select Subject" class="form-control spm_subject" /></td>';
				html += '<td><select name="spm_grade[]" class="form-control spm_grade"><option value="">Select Grade</option><?php $sql4 = "SELECT * FROM spm_grade ORDER BY spm_grade ASC";$result4 = mysqli_query($dbconfig, $sql4) or die("database error:". mysqli_error($dbconfig));while( $row4 = mysqli_fetch_assoc($result4) ) {$spmCode=$row4['spm_code'];$spmGrade=$row4['spm_grade'];?><option value="<?php echo $spmCode; ?>"><?php echo $spmGrade; ?></option><?php }?></select></td>';
				html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fa fa-minus"></span></button></td></tr>';
				$('#others_table').append(html);
			});
			
			$(document).on('click', '.remove', function(){
				$(this).closest('tr').remove();
			});

		}  

		else if ( this.value == '1' || this.value == '2' ) {
			$("#subject").show();
			$("#others").hide();

			$(document).on('click', '.add_subject', function(){
				var html = '';
				html += '<tr>';
				html += '<td><select name="spm_subject[]" class="form-control spm_subject"><option value="">Select Subject</option><?php $sql4 = "SELECT * FROM spm_subject ORDER BY subject_name ASC";$result4 = mysqli_query($dbconfig, $sql4) or die("database error:". mysqli_error($dbconfig));while( $row4 = mysqli_fetch_assoc($result4) ) {$subjectCode=$row4['subject_code'];$subjectName=$row4['subject_name'];?><option value="<?php echo $subjectCode; ?>"><?php echo $subjectName; ?></option><?php }?></select></td>';
				html += '<td><select name="spm_grade[]" class="form-control spm_grade"><option value="">Select Grade</option><?php $sql4 = "SELECT * FROM spm_grade ORDER BY spm_grade ASC";$result4 = mysqli_query($dbconfig, $sql4) or die("database error:". mysqli_error($dbconfig));while( $row4 = mysqli_fetch_assoc($result4) ) {$spmCode=$row4['spm_code'];$spmGrade=$row4['spm_grade'];?><option value="<?php echo $spmCode; ?>"><?php echo $spmGrade; ?></option><?php }?></select></td>';
				html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fa fa-minus"></span></button></td></tr>';
				$('#subject_table').append(html);
			});
			
			$(document).on('click', '.remove', function(){
				$(this).closest('tr').remove();
			});

		} else {
			$("#subject").hide();
			$("#others").show();

			$(document).on('click', '.add_others', function(){
				var html = '';
				html += '<tr>';
				html += '<td><input type="text" name="spm_subject[]" placeholder="Select Subject" class="form-control spm_subject" /></td>';
				html += '<td><select name="spm_grade[]" class="form-control spm_grade"><option value="">Select Grade</option><?php $sql4 = "SELECT * FROM spm_grade ORDER BY spm_grade ASC";$result4 = mysqli_query($dbconfig, $sql4) or die("database error:". mysqli_error($dbconfig));while( $row4 = mysqli_fetch_assoc($result4) ) {$spmCode=$row4['spm_code'];$spmGrade=$row4['spm_grade'];?><option value="<?php echo $spmCode; ?>"><?php echo $spmGrade; ?></option><?php }?></select></td>';
				html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fa fa-minus"></span></button></td></tr>';
				$('#others_table').append(html);
			});
			
			$(document).on('click', '.remove', function(){
				$(this).closest('tr').remove();
			});
		}
	});
</script>

    <script>
      $(function(){
        'use strict'


        $('#wizard3').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          stepsOrientation: 1,
          onStepChanging: function (event, currentIndex, newIndex) {
            if(currentIndex < newIndex) {
              // Step 1 form validation
              if(currentIndex === 0) {
                var fname = $('#firstname').parsley();
                var phone = $('#phone').parsley();

                if(fname.isValid() && phone.isValid()) {
                  return true;
                } else {
                  fname.validate();
                  phone.validate();
                }
              }

              // Step 2 form validation
              if(currentIndex === 1) {
                var email = $('#email').parsley();
                if(email.isValid()) {
                  return true;
                } else { email.validate(); }
              }
            // Always allow step back to the previous step even if the current step is not valid.
            } else { return true; }
          },
          onFinished: function(event, currentIndex) {
            $.ajax({
            url: "save.php",
            data: $("#wform").serialize(),
            type: "POST",
            success: function (result) {
              alert("Data Updated Sucessfully!");
              window.location = "dashboard.php";
            },
            error: function (xhr, status, errorThrown) {
              alert("Sorry, there was a problem!");
              console.log("Error: " + errorThrown);
              console.log("Status: " + status);
              console.dir(xhr);
            }
        });
        },
        });
      });
    </script>

    <script>  
    $(document).ready(function(){  
          var i=1;  
          $('#add').click(function(){  
              i++;  
              $('#dynamic_field').append('<tr id="row'+i+'"><td><select name="sub" class="form-control select2"><option>Select</option><?php include 'talum.php'; $sql31 = "SELECT * FROM `spm_subject`"; $all_sub = mysqli_query($dbconfig,$sql31); while ($sub = mysqli_fetch_array($all_sub,MYSQLI_ASSOC)):; ?><option value="<?php echo $sub["subject_code"];?>"><?php echo $sub["subject_name"];?></option><?php endwhile; ?></select></td><td><select name="gred2" class="form-control select2"><option>Select</option><?php include 'talum.php'; $sql32 = "SELECT * FROM `spm_grade`"; $all_gred = mysqli_query($dbconfig,$sql32); while ($gred = mysqli_fetch_array($all_gred,MYSQLI_ASSOC)):; ?><option value="<?php echo $gred["spm_code"];?>"><?php echo $gred["spm_grade"];?></option><?php endwhile; ?></select></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
          });  
          $(document).on('click', '.btn_remove', function(){  
              var button_id = $(this).attr("id");   
              $('#row'+button_id+'').remove();  
          });  
        
    });  
    </script>

    <script>
    $(function(){
      'use strict'

      // Toggle Switches
      $('.az-toggle').on('click', function(){
        $(this).toggleClass('on');
      })

      // Input Masks
      $('#dateMask').mask('99/99/9999');
      $('#phoneMask').mask('(999) 999-9999');
      $('#phoneExtMask').mask('(999) 999-9999? ext 99999');
      $('#ssnMask').mask('999-99-9999');

      // Color picker
      $('#colorpicker').spectrum({
        color: '#17A2B8'
      });

      $('#showAlpha').spectrum({
        color: 'rgba(23,162,184,0.5)',
        showAlpha: true
      });

      $('#showPaletteOnly').spectrum({
          showPaletteOnly: true,
          showPalette:true,
          color: '#DC3545',
          palette: [
              ['#1D2939', '#fff', '#0866C6','#23BF08', '#F49917'],
              ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
          ]
      });

      // Datepicker
      $('.fc-datepicker').datepicker({
        showOtherMonths: true,
        selectOtherMonths: true
      });

      $('#datepickerNoOfMonths').datepicker({
        showOtherMonths: true,
        selectOtherMonths: true,
        numberOfMonths: 2
      });

      // AmazeUI Datetimepicker
      $('#datetimepicker').datetimepicker({
        format: 'yyyy-mm-dd hh:ii',
        autoclose: true
      });

      // jQuery Simple DateTimePicker
      $('#datetimepicker2').appendDtpicker({
        closeOnSelected: true,
        onInit: function(handler) {
          var picker = handler.getPicker();
          $(picker).addClass('az-datetimepicker');
        }
      });

      new Picker(document.querySelector('#datetimepicker3'), {
        headers: true,
        format: 'MMMM DD, YYYY HH:mm',
        text: {
          title: 'Pick a Date and Time',
          year: 'Year',
          month: 'Month',
          day: 'Day',
          hour: 'Hour',
          minute: 'Minute'
        },
      });


      $(document).ready(function(){
        $('.select2').select2({
          placeholder: 'Choose one',
          searchInputPlaceholder: 'Search'
        });

        $('.select2-no-search').select2({
          minimumResultsForSearch: Infinity,
          placeholder: 'Choose one'
        });
      });

      $('.rangeslider1').ionRangeSlider();

      $('.rangeslider2').ionRangeSlider({
          min: 100,
          max: 1000,
          from: 550
      });

      $('.rangeslider3').ionRangeSlider({
          type: 'double',
          grid: true,
          min: 0,
          max: 1000,
          from: 200,
          to: 800,
          prefix: '$'
      });

      $('.rangeslider4').ionRangeSlider({
          type: 'double',
          grid: true,
          min: -1000,
          max: 1000,
          from: -500,
          to: 500,
          step: 250
      });

    });
  </script>
     

  
  </body>
</html>
