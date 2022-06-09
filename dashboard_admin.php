
      <div class="az-content-body">
        <div class="row row-sm">

          <div class="col-sm-6 col-xl-3">
            <div class="card card-dashboard-twentytwo">
              <div class="media">
                <div class="media-icon bg-purple"><i class="typcn typcn-chart-line-outline"></i></div>
                <div class="media-body">
                  <span><a href="admin_list_total_student.php">TOTAL STUDENTS</a></span>
                 <?php
                
                            $query = "SELECT distinct mdl_user.id FROM mdl_user
join mdl_role_assignments as ra on ra.userid=mdl_user.id where ra.roleid=5
 
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
                <div class="media-icon bg-primary"><i class="typcn typcn-chart-line-outline"></i></div>
                <div class="media-body">
                  <span><a href="admin_list_total_active_course.php">TOTAL ACTIVE COURSE</a></span>
                  <?php
                
                            $query = "SELECT * from mdl_course where visible=1
 
                            ";  
                            $query_run = mysqli_query($dbconfig, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h6>  '.$row.'</h6>';
                        ?>
                  <h6></h6>
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
                  <span><a href="admin_list_total_inactive_course.php">TOTAL INACTIVE COURSE</a></span>  <?php
                
                            $query = "SELECT * from mdl_course where visible=0
 
                            ";  
                            $query_run = mysqli_query($dbconfig, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h6>  '.$row.'</h6>';
                        ?>
                  <h6></h6>
                </div>
              </div>
              <div class="chart-wrapper">
                <div id="flotChart3" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card card-dashboard-twentytwo">
              <div class="media">
                <div class="media-icon bg-teal"><i class="typcn typcn-chart-line-outline"></i></div>
                <div class="media-body">
                  <span><a href="admin_list_total_course_owner.php">TOTAL COURSE OWNER</a></span>
               <?php
                
                            $query = "SELECT distinct mdl_user.id FROM mdl_user
join mdl_role_assignments as ra on ra.userid=mdl_user.id where ra.roleid=3
 
                            ";  
                            $query_run = mysqli_query($dbconfig, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h6>  '.$row.'</h6>';
                        ?>
                </div>
              </div>
              <div class="chart-wrapper">
                <div id="flotChart4" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card -->
          </div><!-- col -->
          </div>
          </div><!-- az-content-header -->
      <div class="az-content-body">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card card-dashboard-twentytwo">
              <div class="media">
                <div class="media-icon bg-purple"><i class="typcn typcn-chart-line-outline"></i></div>
                <div class="media-body">
                  <span><a href="admin_list_total_instructors.php">TOTAL INSTRUCTORS</span>
                 <?php
                
                            $query = "SELECT distinct mdl_user.id FROM mdl_user
join mdl_role_assignments as ra on ra.userid=mdl_user.id where ra.roleid=9
 
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
                <div class="media-icon bg-primary"><i class="typcn typcn-chart-line-outline"></i></div>
                <div class="media-body">
                  <span><a href="admin_list_total_course_coordinator.php">TOTAL COURSE COORDINATOR</a></span>
                <?php
                
                            $query = "SELECT distinct mdl_user.id FROM mdl_user
join mdl_role_assignments as ra on ra.userid=mdl_user.id where ra.roleid=2
 
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
                  <span><a href="admin_total_institution.php">TOTAL INSTITUTION</a></span>  <?php
                
                            $query = "SELECT * from mdl_course_categories where parent=0
 
                            ";  
                            $query_run = mysqli_query($dbconfig, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h6>  '.$row.'</h6>';
                        ?>
                  <h6></h6>
                </div>
              </div>
              <div class="chart-wrapper">
                <div id="flotChart3" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card -->
          </div><!-- col -->
          </div>
          </div><!-- az-content-header -->
          
      <div class="az-content-body">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card card-dashboard-twentytwo">
              <div class="media">
                <div class="media-icon bg-purple"><i class="typcn typcn-chart-line-outline"></i></div>
                <div class="media-body">
                  <span><a href="admin_financial_report.php">TOTAL EARNINGS</a></span>
                  <h6></h6>
                </div>
              </div>
              <div class="chart-wrapper">
                <div id="flotChart1" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card -->
          </div><!-- col -->

          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card card-dashboard-twentytwo">
              <div class="media">
                <div class="media-icon bg-pink"><i class="typcn typcn-chart-line-outline"></i></div>
                <div class="media-body">
                  <span><a href="admin_statistik.php">GRAPHICAL REPORTING</a></span>
                </div>
              </div>
              <div class="chart-wrapper">
                <div id="flotChart3" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card -->
          </div><!-- col -->

        </div><!-- row -->
      </div><!-- az-content-body -->
      