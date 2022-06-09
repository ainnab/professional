
<?php
          
          
          
           //if (isset($_POST["submit"]) && !empty($_POST["submit"])) {
            if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
            include_once 'config.php';
            
            $login_session=$_SESSION['username'];

  /*$sql_query="SELECT * from mdl_user  WHERE username = '$login_session' ";
  $res=mysqli_query($dbconfig,$sql_query);
  $userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);
  $username = $userRow['username'];*/

  /*$sql_query="select * from mdl_user

  inner join mdl_role_assignments on mdl_role_assignments.userid=mdl_user.id
  inner join mdl_role on mdl_role.id = mdl_role_assignments.roleid

  where mdl_user.username = '$login_session' ";*/
  $sql_query="SELECT u.username as username,u.firstname,u.lastname, u.email, cc.name as institution ,r.name as rolename, cc.id as inst_id, ra.roleid,ra.userid
        FROM `mdl_course_categories` as cc 
        inner join mdl_context as cnt on cnt.instanceid=cc.id 
        inner join mdl_role_assignments as ra on ra.contextid=cnt.id 
        inner join mdl_role as r on r.id=ra.roleid 
        inner join mdl_user as u on u.id=ra.userid 
        where u.username = '$login_session' ";

  $res=mysqli_query($dbconfig,$sql_query);
  //echo $sql_query;
  $userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);
  $username = $userRow['username'];
  $userId = $userRow['userid'];
  $userRole = $userRow['roleid'];
  $name = $userRow['firstname'];
  $lastname = $userRow['lastname'];
  $role = $userRow['rolename'];
  $email = $userRow['email'];
  $institution = $userRow['institution'];
  $inst_id = $userRow['inst_id'];
  
}

?>
<div class="az-content az-content-dashboard-nine">
      <div class="az-header az-header-dashboard-nine">
        <div class="container-fluid">
          <div class="az-header-left">
            <a href="" id="azSidebarToggle" class="az-header-menu-icon"><span></span></a>
          </div><!-- az-header-left -->
          
          <div class="az-header-right">
            
              



            </div><!-- az-header-notification -->
            <div class="dropdown az-profile-menu">
              <a href="" class="az-img-user"><img src="../ilmuplus/img/faces/face1.jpeg" alt=""></a>
              <div class="dropdown-menu">
                <div class="az-dropdown-header d-sm-none">
                  <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <div class="dropdown-footer">
                 
             
               
                <a href="signout.php" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
              </div><!-- dropdown-menu -->
            </div>
          </div><!-- az-header-right -->
        </div><!-- container -->
      </div><!-- az-header -->