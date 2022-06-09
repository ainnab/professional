
     

   <?php

include_once 'config.php';



     $sql_query="SELECT u.username as username,u.firstname,u.lastname, u.email, cc.name as institution ,r.name as rolename, cc.id as inst_id, ra.roleid,ra.userid
        FROM `mdl_course_categories` as cc 
        inner join mdl_context as cnt on cnt.instanceid=cc.id 
        inner join mdl_role_assignments as ra on ra.contextid=cnt.id 
        inner join mdl_role as r on r.id=ra.roleid 
        inner join mdl_user as u on u.id=ra.userid 
        where u.username = '$login_session' ";

  $res=mysqli_query($dbconfig,$sql_query);
  //echo $sql_query;
  while($userRow=mysqli_fetch_array($res,MYSQLI_ASSOC)){
  $username = $userRow['username'];
  $userId = $userRow['userid'];
  $userRole = $userRow['roleid'];
  $name = $userRow['firstname'];
  $lastname = $userRow['lastname'];
  $role = $userRow['rolename'];
  $email = $userRow['email'];
  $institution = $userRow['institution'];
  $inst_id = $userRow['inst_id'];

  ?>

      <div class="az-content-body">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card card-dashboard-twentytwo">
              <div class="media">
                <div class="media-icon bg-purple"><i class="fas fa-user-graduate"></i></div>
                <div class="media-body">
                  <span><a href="manager_totalstud.php">TOTAL STUDENTS</a></span>
              <?php

                 
  
$sqlb="SELECT count( u.username) as username ,cats.path,c.fullname,cats.name ,ra.roleid FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS ra ON ra.contextid = ctx.id join mdl_user as u on u.id=ra.userid JOIN mdl_course_categories AS cats ON c.category = cats.id where ra.roleid='5' and cats.path LIKE '/".$userRow["inst_id"]."/%' ";


$mysqlb = mysqli_query($dbconfig,$sqlb);
while($var = mysqli_fetch_array($mysqlb)) {
$path = explode("/", $var["path"]);
echo "<h6>".$var["username"]."</h6>";
if(count($path) > 2) {
$temp = array_shift($path); //don't need the parent cat
$temp = array_pop($path); //don't need the current cat either



foreach($path as $ids) {


$nextsql = "SELECT cc.name,cc.id FROM mdl_course_categories as cc WHERE cc.id = '$ids'  ";

$name = mysqli_fetch_array(mysqli_query($dbconfig,$nextsql ));

 $name["name"].'/';







}
}

}







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
                <div class="media-icon bg-primary"><i class="typcn typcn-document-add"></i></div>
                <div class="media-body">
                  <span><a href="total_course.php">TOTAL ACTIVE COURSE</a></span>
                   <?php

$sqlb="SELECT distinct c.fullname as fullname,ct.name ,ct.visible,FROM_UNIXTIME(c.startdate) as startdate FROM mdl_course_categories ct JOIN mdl_course_categories basecat ON basecat.id = ct.id 
 JOIN mdl_course c ON c.category = ct.id join mdl_context as cnt on cnt.instanceid=ct.id WHERE  ct.visible = '1' AND ct.path LIKE '/".$userRow["inst_id"]."/%' ";



$mysqlb = mysqli_query($dbconfig,$sqlb);
$var = mysqli_fetch_array($mysqlb);
$enrol=mysqli_num_rows($mysqlb);


//$visible= $var['visible'];


echo "<h6>".$enrol."</h6>";










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
                <div class="media-icon bg-pink"><i class="typcn typcn-document-delete"></i></div>
                <div class="media-body">
                  <span>TOTAL INACTIVE COURSE</span>
                                   <?php



                  
  

$sqlb="SELECT count( c.fullname) as fullname,ct.path  FROM mdl_course_categories ct JOIN mdl_course_categories basecat ON basecat.id = ct.id 
 JOIN mdl_course c ON c.category = ct.id join mdl_context as cnt on cnt.instanceid=ct.id WHERE  ct.visible = '0' AND ct.path LIKE '/".$userRow["inst_id"]."/%' ";



$mysqlb = mysqli_query($dbconfig,$sqlb);
while($var = mysqli_fetch_array($mysqlb)) {
$path = explode("/", $var["path"]);

//echo "<option value=\"".$var["id"]."\">";
echo "<h6>".$var["fullname"]."</h6>";
if(count($path) > 2) {
$temp = array_shift($path); //don't need the parent cat
$temp = array_pop($path); //don't need the current cat either



foreach($path as $ids) {
$nextsql = "SELECT cc.name,cc.id FROM mdl_course_categories as cc WHERE cc.id = '$ids'  ";

$name = mysqli_fetch_array(mysqli_query($dbconfig,$nextsql ));

//echo $name["name"].'/';





//echo $name1["fullname"].'/';
}
}
//echo $var["name"]."</option>";
}






?>
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
                <div class="media-icon bg-teal"><i class="fas fa-address-card"></i></div>
                <div class="media-body">
                  <span><a href="total_courseOwner.php">TOTAL COURSE OWNER</a></span>
                 
                                   <?php


  $sqlb="SELECT distinct u.firstname as fname ,u.username ,u.lastname as lname ,cats.path,c.fullname,cats.name ,ra.roleid,u.department FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS ra ON ra.contextid = ctx.id join mdl_user as u on u.id=ra.userid  JOIN mdl_course_categories AS cats ON c.category = cats.id where ra.roleid='3' and ctx.contextlevel='50' and  cats.path LIKE '/".$userRow["inst_id"]."/%' ";



$mysqlb = mysqli_query($dbconfig,$sqlb);
$var = mysqli_fetch_array($mysqlb);
$enrol=mysqli_num_rows($mysqlb);


//$visible= $var['visible'];


echo "<h6>".$enrol."</h6>";



/*$sqlb="SELECT count(distinct u.username) as username ,cats.path,c.fullname,cats.name ,ra.roleid FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS ra ON ra.contextid = ctx.id join mdl_user as u on u.id=ra.userid JOIN mdl_course_categories AS cats ON c.category = cats.id where ra.roleid='3' and ctx.contextlevel='50' and cats.path LIKE '/".$userRow["inst_id"]."/%' ";


$mysqlb = mysqli_query($dbconfig,$sqlb);
while($var = mysqli_fetch_array($mysqlb)) {
$path = explode("/", $var["path"]);

//echo "<option value=\"".$var["id"]."\">";
//echo "<h6>".$var["fullname"]."</h6>";
echo "<h6>".$var["username"]."</h6>";
if(count($path) > 2) {
$temp = array_shift($path); //don't need the parent cat
$temp = array_pop($path); //don't need the current cat either



foreach($path as $ids) {


$nextsql = "SELECT cc.name,cc.id FROM mdl_course_categories as cc WHERE cc.id = '$ids'  ";

$name = mysqli_fetch_array(mysqli_query($dbconfig,$nextsql ));

//echo $name["name"].'/';





//echo $name1["fullname"].'/';


}
}

}*/







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
                <div class="media-icon bg-info"><i class="fas fa-chalkboard-teacher"></i></div>
                <div class="media-body">
                  <span><a href="total_instructor.php">TOTAL INSTRUCTORS</a></span>
               
                                   <?php



                  

/**$sqlb="SELECT  count(distinct u.username) as username ,cats.path,c.fullname,cats.name ,ra.roleid FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS ra ON ra.contextid = ctx.id join mdl_user as u on u.id=ra.userid JOIN mdl_course_categories AS cats ON c.category = cats.id where ra.roleid='9' and ctx.contextlevel='50' and cats.path LIKE '/".$userRow["inst_id"]."/%' ";

$mysqlb = mysqli_query($dbconfig,$sqlb);
while($var = mysqli_fetch_array($mysqlb)) {
$path = explode("/", $var["path"]);

//echo "<option value=\"".$var["id"]."\">";
//echo "<h6>".$var["fullname"]."</h6>";
echo "<h6>".$var["username"]."</h6>";
if(count($path) > 2) {
$temp = array_shift($path); //don't need the parent cat
$temp = array_pop($path); //don't need the current cat either



foreach($path as $ids) {


$nextsql = "SELECT cc.name,cc.id FROM mdl_course_categories as cc WHERE cc.id = '$ids'  ";

$name = mysqli_fetch_array(mysqli_query($dbconfig,$nextsql ));

//echo $name["name"].'/';





}
}


}**/



  $sqlb="SELECT distinct u.firstname as fname ,u.username ,u.lastname as lname ,cats.path,c.fullname,cats.name ,ra.roleid,u.department FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS ra ON ra.contextid = ctx.id join mdl_user as u on u.id=ra.userid  JOIN mdl_course_categories AS cats ON c.category = cats.id where ra.roleid='9' and ctx.contextlevel='50' and  cats.path LIKE '/".$userRow["inst_id"]."/%'  ";



$mysqlb = mysqli_query($dbconfig,$sqlb);
$var = mysqli_fetch_array($mysqlb);
$enrol=mysqli_num_rows($mysqlb);


//$visible= $var['visible'];


echo "<h6>".$enrol."</h6>";

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
                <div class="media-icon bg-primary"><i class="fas fa-id-card-alt"></i></div>
                <div class="media-body">
                  <span><a href="total_coordinator.php">TOTAL COURSE COORDINATOR</a></span>
                
                                   <?php



/**$sqlb="SELECT count(distinct u.username) as username ,cats.path,c.fullname,cats.name ,ra.roleid FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS ra ON ra.contextid = ctx.id join mdl_user as u on u.id=ra.userid JOIN mdl_course_categories AS cats ON c.category = cats.id where ra.roleid='2' and ctx.contextlevel='40' and cats.path LIKE '/".$userRow["inst_id"]."/%' ";**/

$sqlb="SELECT count(u.username) as username FROM `mdl_course_categories` as cc inner join mdl_context as cnt on cnt.instanceid=cc.id inner join mdl_role_assignments as ra on ra.contextid=cnt.id inner join mdl_role as r on r.id=ra.roleid inner join mdl_user as u on u.id=ra.userid where r.id=2 and cc.path LIKE '/".$userRow["inst_id"]."' ";


$mysqlb = mysqli_query($dbconfig,$sqlb);
$var = mysqli_fetch_array($mysqlb);



echo "<h6>".$var["username"]."</h6>";










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
                <div class="media-icon bg-success"><i class="fas fa-money-check-alt"></i></div>
                <div class="media-body">
                  <span>TOTAL EARNINGS</span>
                  <h6>RM 100,000.00</h6>
                </div>
              </div>
              <div class="chart-wrapper">
                <div id="flotChart3" class="flot-chart"></div>
              </div>
            </div>
          </div--><!-- col -->
          


           </div>
          </div><!-- az-content-header -->
    <?php  }?>