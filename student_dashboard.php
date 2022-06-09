
      <div class="az-content-header">
        <div class="az-content-header-top">
          <div>
            <h2 class="az-content-title mg-b-5 mg-b-lg-8">Dashboard</h2>
            <p class="mg-b-0">Learner Info</p>
          </div>
        </div><!-- az-content-body-title -->
      </div><!-- az-content-header -->
      <div class="az-content-body">

        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card card-dashboard-twentytwo">
              <div class="media">
                <div class="media-icon bg-purple"><i class="typcn typcn-chart-line-outline"></i></div>
                <div class="media-body">
                 
                  <span>Enrolled Courses</span>
                   <?php
                
                          /**  $query = "SELECT distinct u.username ,c.fullname,cats.name ,ra.roleid FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid 
                             JOIN mdl_role_assignments AS ra ON ra.contextid = ctx.id join mdl_user as u on u.id=ra.userid JOIN mdl_course_categories AS cats ON c.category = cats.id where u.username='$login_session'

                            ";  **/

                            $query="SELECT distinct u.username ,c.fullname,cats.name ,ra.roleid FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid 
                             JOIN mdl_role_assignments AS ra ON ra.contextid = ctx.id join mdl_user as u on u.id=ra.userid JOIN mdl_course_categories AS cats ON c.category = cats.id where u.username='$login_session'";
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
                <div class="media-icon bg-primary"><i class="typcn typcn-chart-line-outline"></i></div>
                <div class="media-body">
                  
                  <span>Completed Courses</span>
                   <?php
                
                            $query = "SELECT *  FROM mdl_course_completions AS p JOIN mdl_course AS c ON p.course = c.id JOIN mdl_user AS u ON p.userid = u.id WHERE c.enablecompletion = 1 and  u.username='$login_session' and p.timecompleted!=null

                            ";  
                            $query_run = mysqli_query($dbconfig, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h6>  '.$row.'</h6>';
                        ?>
                </div>
              </div>
              <div class="chart-wrapper">
                <div id="flotChart2" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card card-dashboard-twentytwo">
              <div class="media">
                <div class="media-icon bg-pink"><i class="typcn typcn-chart-line-outline"></i></div>
                <div class="media-body">
                 
                  <span>Active Courses</span>
                   <?php
                
                            $query = "SELECT distinct u.username ,c.fullname,cats.name ,ra.roleid FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid 
                             JOIN mdl_role_assignments AS ra ON ra.contextid = ctx.id join mdl_user as u on u.id=ra.userid JOIN mdl_course_categories AS cats ON c.category = cats.id where u.username='$login_session' and c.visible= 1

                            ";  
                            $query_run = mysqli_query($dbconfig, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h6>  '.$row.'</h6>';
                        ?>
                </div>
              </div>
              <div class="chart-wrapper">
                <div id="flotChart3" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card -->
          </div><!-- col -->
         
