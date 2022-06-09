//student
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


                  
  //$sqla = "SELECT id, name FROM mdl_course_categories WHERE visible = '1' AND parent = '0' ORDER BY name ASC "; //first quering all the parent cats
  $sqla="SELECT u.firstname,u.lastname,cc.name,cc.path,u.username,cc.id FROM `mdl_course_categories` as cc inner join mdl_context as cnt on cnt.instanceid=cc.id inner join mdl_role_assignments as ra on ra.contextid=cnt.id inner join mdl_role as r on r.id=ra.roleid inner join mdl_user as u on u.id=ra.userid where cnt.contextlevel='40' and cc.parent='0' and u.username='$login_session' ";

$mysqla = mysqli_query($dbconfig,$sqla);
while($parent = mysqli_fetch_array($mysqla)) {
//echo "<option value=\"".$parent["id"]."\">";
//echo $parent["name"];
//echo "</option>"; //putting your parent cat as the first position on the list and going through it's children categories


//course
//$sqlb="SELECT  distinct c.fullname,ct.path  FROM mdl_course_categories ct JOIN mdl_course_categories basecat ON basecat.id = ct.id 
 //JOIN mdl_course c ON c.category = ct.id join mdl_context as cnt on cnt.instanceid=ct.id WHERE  ct.visible = '1' AND ct.path LIKE '/".$parent["idSELECT distinct u.username ,c.fullname,cats.name ,ra.roleid FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS ra ON ra.contextid = ctx.id join mdl_user as u on u.id=ra.userid JOIN mdl_course_categories AS cats ON c.category = cats.id""]."/%' ";

$sqlb="SELECT distinct u.username ,cats.path,c.fullname,cats.name ,ra.roleid FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS ra ON ra.contextid = ctx.id join mdl_user as u on u.id=ra.userid JOIN mdl_course_categories AS cats ON c.category = cats.id where ra.roleid='5' and cats.path LIKE '/".$parent["id"]."/%' ";


$mysqlb = mysqli_query($dbconfig,$sqlb);
while($var = mysqli_fetch_array($mysqlb)) {
$path = explode("/", $var["path"]);

//echo "<option value=\"".$var["id"]."\">";
echo "<h6>".$var["fullname"]."</h6>";
echo "<h6>".$var["username"]."</h6>";
if(count($path) > 2) {
$temp = array_shift($path); //don't need the parent cat
$temp = array_pop($path); //don't need the current cat either



foreach($path as $ids) {


$nextsql = "SELECT cc.name,cc.id FROM mdl_course_categories as cc WHERE cc.id = '$ids'  ";

$name = mysqli_fetch_array(mysqli_query($dbconfig,$nextsql ));

//echo $name["name"].'/';




$test="SELECT c.fullname,cats.name ,ra.roleid FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS ra ON ra.contextid = ctx.id join mdl_user as u on u.id=ra.userid JOIN mdl_course_categories AS cats ON c.category = cats.id where ra.roleid=5  and cats.id='$ids' ";


  //$rest=mysqli_query($dbconfig,$test);
  //echo $sql_query;
$name1 = mysqli_fetch_array(mysqli_query($dbconfig,$test));
//echo $name1["fullname"].'/';


}
}

}


}




?>
              

//instructor


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


                  
  //$sqla = "SELECT id, name FROM mdl_course_categories WHERE visible = '1' AND parent = '0' ORDER BY name ASC "; //first quering all the parent cats
  $sqla="SELECT u.firstname,u.lastname,cc.name,cc.path,u.username,cc.id FROM `mdl_course_categories` as cc inner join mdl_context as cnt on cnt.instanceid=cc.id inner join mdl_role_assignments as ra on ra.contextid=cnt.id inner join mdl_role as r on r.id=ra.roleid inner join mdl_user as u on u.id=ra.userid where cnt.contextlevel='40' and cc.parent='0' and u.username='$login_session' ";

$mysqla = mysqli_query($dbconfig,$sqla);
while($parent = mysqli_fetch_array($mysqla)) {
//echo "<option value=\"".$parent["id"]."\">";
//echo $parent["name"];
//echo "</option>"; //putting your parent cat as the first position on the list and going through it's children categories


//course
//$sqlb="SELECT  distinct c.fullname,ct.path  FROM mdl_course_categories ct JOIN mdl_course_categories basecat ON basecat.id = ct.id 
 //JOIN mdl_course c ON c.category = ct.id join mdl_context as cnt on cnt.instanceid=ct.id WHERE  ct.visible = '1' AND ct.path LIKE '/".$parent["idSELECT distinct u.username ,c.fullname,cats.name ,ra.roleid FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS ra ON ra.contextid = ctx.id join mdl_user as u on u.id=ra.userid JOIN mdl_course_categories AS cats ON c.category = cats.id""]."/%' ";

$sqlb="SELECT distinct u.username ,cats.path,c.fullname,cats.name ,ra.roleid FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS ra ON ra.contextid = ctx.id join mdl_user as u on u.id=ra.userid JOIN mdl_course_categories AS cats ON c.category = cats.id where ra.roleid='9' and cats.path LIKE '/".$parent["id"]."/%' ";


$mysqlb = mysqli_query($dbconfig,$sqlb);
while($var = mysqli_fetch_array($mysqlb)) {
$path = explode("/", $var["path"]);

//echo "<option value=\"".$var["id"]."\">";
echo "<h6>".$var["fullname"]."</h6>";
echo "<h6>".$var["username"]."</h6>";
if(count($path) > 2) {
$temp = array_shift($path); //don't need the parent cat
$temp = array_pop($path); //don't need the current cat either



foreach($path as $ids) {


$nextsql = "SELECT cc.name,cc.id FROM mdl_course_categories as cc WHERE cc.id = '$ids'  ";

$name = mysqli_fetch_array(mysqli_query($dbconfig,$nextsql ));

//echo $name["name"].'/';




$test="SELECT c.fullname,cats.name ,ra.roleid FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS ra ON ra.contextid = ctx.id join mdl_user as u on u.id=ra.userid JOIN mdl_course_categories AS cats ON c.category = cats.id where ra.roleid=5  and cats.id='$ids' ";


  //$rest=mysqli_query($dbconfig,$test);
  //echo $sql_query;
$name1 = mysqli_fetch_array(mysqli_query($dbconfig,$test));
//echo $name1["fullname"].'/';


}
}

}


}




?>
              
//course owner


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


                  
  //$sqla = "SELECT id, name FROM mdl_course_categories WHERE visible = '1' AND parent = '0' ORDER BY name ASC "; //first quering all the parent cats
  $sqla="SELECT u.firstname,u.lastname,cc.name,cc.path,u.username,cc.id FROM `mdl_course_categories` as cc inner join mdl_context as cnt on cnt.instanceid=cc.id inner join mdl_role_assignments as ra on ra.contextid=cnt.id inner join mdl_role as r on r.id=ra.roleid inner join mdl_user as u on u.id=ra.userid where cnt.contextlevel='40' and cc.parent='0' and u.username='$login_session' ";

$mysqla = mysqli_query($dbconfig,$sqla);
while($parent = mysqli_fetch_array($mysqla)) {
//echo "<option value=\"".$parent["id"]."\">";
//echo $parent["name"];
//echo "</option>"; //putting your parent cat as the first position on the list and going through it's children categories


//course
//$sqlb="SELECT  distinct c.fullname,ct.path  FROM mdl_course_categories ct JOIN mdl_course_categories basecat ON basecat.id = ct.id 
 //JOIN mdl_course c ON c.category = ct.id join mdl_context as cnt on cnt.instanceid=ct.id WHERE  ct.visible = '1' AND ct.path LIKE '/".$parent["idSELECT distinct u.username ,c.fullname,cats.name ,ra.roleid FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS ra ON ra.contextid = ctx.id join mdl_user as u on u.id=ra.userid JOIN mdl_course_categories AS cats ON c.category = cats.id""]."/%' ";

$sqlb="SELECT distinct u.username ,cats.path,c.fullname,cats.name ,ra.roleid FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS ra ON ra.contextid = ctx.id join mdl_user as u on u.id=ra.userid JOIN mdl_course_categories AS cats ON c.category = cats.id where ra.roleid='3' and cats.path LIKE '/".$parent["id"]."/%' ";


$mysqlb = mysqli_query($dbconfig,$sqlb);
while($var = mysqli_fetch_array($mysqlb)) {
$path = explode("/", $var["path"]);

//echo "<option value=\"".$var["id"]."\">";
echo "<h6>".$var["fullname"]."</h6>";
echo "<h6>".$var["username"]."</h6>";
if(count($path) > 2) {
$temp = array_shift($path); //don't need the parent cat
$temp = array_pop($path); //don't need the current cat either



foreach($path as $ids) {


$nextsql = "SELECT cc.name,cc.id FROM mdl_course_categories as cc WHERE cc.id = '$ids'  ";

$name = mysqli_fetch_array(mysqli_query($dbconfig,$nextsql ));

//echo $name["name"].'/';




$test="SELECT c.fullname,cats.name ,ra.roleid FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS ra ON ra.contextid = ctx.id join mdl_user as u on u.id=ra.userid JOIN mdl_course_categories AS cats ON c.category = cats.id where ra.roleid=5  and cats.id='$ids' ";


  //$rest=mysqli_query($dbconfig,$test);
  //echo $sql_query;
$name1 = mysqli_fetch_array(mysqli_query($dbconfig,$test));
//echo $name1["fullname"].'/';


}
}

}


}




?>
              

