





      <div class="az-content-body">

        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card card-dashboard-twentytwo">
              <div class="media">
                <div class="media-icon bg-purple"><i class="typcn typcn-user"></i></div>
                <div class="media-body">
                  <span><a href="instructor_course.php">Total Students</a></span>
                  
                   <?php
                
                            $query = "SELECT c.fullname,u.username,lra.roleid,us.username,tra.roleid FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS lra ON lra.contextid = ctx.id JOIN mdl_role_assignments AS tra ON tra.contextid = ctx.id join mdl_user as u on u.id=lra.userid join mdl_user as us on us.id=tra.userid WHERE lra.roleid=5 AND tra.roleid=9 and tra.userid =7
                            and tra.userid ='$userId'
 
                            ";  
                            $query_run = mysqli_query($dbconfig, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h6>  '.$row.'</h6>';
                        ?>
                </div>
              </div>
              <div class="chart-wrapper">
                <div id="flotChart1" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card card-dashboard-twentytwo">
              <div class="media">
                <div class="media-icon bg-primary"><i class="typcn typcn-mortar-board"></i></div>
                <div class="media-body">
                  <span>Total Courses</span>
                  
                   <?php
                
                            $query1 = "SELECT distinct c.fullname,us.username,tra.roleid FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS tra ON tra.contextid = ctx.id join mdl_user as us on us.id=tra.userid where tra.userid ='$userId'
 
                            ";  
                            $query_run1 = mysqli_query($dbconfig, $query1);
                            $row1 = mysqli_num_rows($query_run1);
                            echo '<h6>  '.$row1.'</h6>';
                        ?>
                </div>
              </div>
              <div class="chart-wrapper">
                <div id="flotChart2" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <!--div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card card-dashboard-twentytwo">
              <div class="media">
                <div class="media-icon bg-pink"><i class="typcn typcn-user"></i></div>
                <div class="media-body">
                  <span><a href="instructor_financial_report.php">Total Earnings</a></span>
                  <h6>RM 1,500.00</h6>
                </div>
              </div-->
              <div class="chart-wrapper">
                <div id="flotChart3" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card -->
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- az-content-body -->
     