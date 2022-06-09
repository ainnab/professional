<?php

session_start();

include_once 'config.php';
    
     error_reporting(E_ALL);
 $login_session=$_SESSION['username'];
 use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;





if (isset($_POST['btn_profit'])) {

 $set =$_REQUEST['set'];
  $contract =$_REQUEST['contract'];
        $fakulti =$_REQUEST['fakulti'];
        $institusi = $_REQUEST['institusi'];
        $coordinator = $_REQUEST['coordinator'];
        $courseowner = $_REQUEST['courseowner'];
         $instructor = $_REQUEST['instructor'];
       


  date_default_timezone_set("asia/kuala_lumpur");
  $dateToday = date('Y-m-d');
 
      

        //checkbox yuran
       
         //if(isset($_REQUEST['yuranSetuju'])){$yuranSetuju = $_REQUEST['yuranSetuju'];}
        //  if(isset($_REQUEST['inbois'])){$inbois = $_REQUEST['inbois'];}




//filezip
$query1 = "INSERT INTO profit_manager (ipd,contract,fakulti,institusi,coordinator,courseowner,instructor,date_today,username) 
          VALUES ('$set', '$contract','$fakulti','$institusi','$coordinator','$courseowner','$instructor','$dateToday','$login_session')";




            if ($dbconfig2->query($query1) === TRUE) {
                    echo "<script>alert('Application successfully saved.')</script>";
                   //echo '<META http-equiv="refresh" content="0;URL=main-dashboard.php">';
                  }else {
          echo "<script>alert('Opss! There is error')</script>";
          echo "Error updating record: " . $dbconfig2->error;
        }

}
  




  if (isset($_POST['btn_update'])) {

//$id = $_REQUEST['id']; 
 $set =$_REQUEST['set'];
  $contract =$_REQUEST['contract'];
        $fakulti =$_REQUEST['fakulti'];
        $institusi = $_REQUEST['institusi'];
        $coordinator = $_REQUEST['coordinator'];
        $courseowner = $_REQUEST['courseowner'];
         $instructor = $_REQUEST['instructor'];
       


  date_default_timezone_set("asia/kuala_lumpur");
  $dateToday = date('Y-m-d');
 
    



//filezip
/**$query1 = "update  profit_manager set(,contract,fakulti,institusi,coordinator,courseowner,instructor,date_today,username) 
          VALUES ('$set', '$contract','$fakulti','$institusi','$coordinator','$courseowner','$instructor','$dateToday','$login_session')";**/

$query1 = "update  profit_manager set  ipd='$set',contract='$contract',fakulti='$fakulti',institusi='$institusi',coordinator='$coordinator',courseowner='$courseowner',instructor='$instructor' where ipd='$set'";


            if ($dbconfig2->query($query1) === TRUE) {
                    echo "<script>alert('Application successfully saved.')</script>";
                   echo '<META http-equiv="refresh" content="0;URL=list_manager_profit.php">';

                  }else {
          echo "<script>alert('Opss! There is error')</script>";
          echo "Error updating record: " . $dbconfig2->error;
        }


    


?>
<?php

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


 $sql_query5="SELECT  distinct u.email
        FROM `mdl_course_categories` as cc 
        inner join mdl_context as cnt on cnt.instanceid=cc.id 
        inner join mdl_role_assignments as ra on ra.contextid=cnt.id 
        inner join mdl_role as r on r.id=ra.roleid 
        inner join mdl_user as u on u.id=ra.userid 
        where cc.path  LIKE '/".$userRow["inst_id"]."/%' and r.id!='5' and u.email!='nurainnabila@ump.my' and u.email!='farhana@gmail.com' ";


  $res5=mysqli_query($dbconfig,$sql_query5);
  //echo $sql_query;
  while($userRow5=mysqli_fetch_array($res5)){
  $user_email = $userRow5['email'];
 

 require_once 'src/plugins/PHPMailer/src/Exception.php';
 require_once 'src/plugins/PHPMailer/src/PHPMailer.php';
 require_once 'src/plugins/PHPMailer/src/SMTP.php';

 //$mail = $user_email;

 //$bcc = implode(',', $user_email); 

 $mail = new PHPMailer();
 //$mail2 = new PHPMailer();
          


$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true

)
);
$mail->isSMTP();                                            // Send using SMTP smtp.gmail.com / gw4.ump.edu.my
$mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = 'umpadvancedit@gmail.com';                                       // SMTP username
$mail->Password   = 'umpa2021';                                       // SMTP password
$mail->SMTPSecure = 'PHPMailer::ENCRYPTION_STARTTLS; ';                                     // Enable TLS encryption; `
$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above`PHPMailer::ENCRYPTION_SMTPS` above
$mail->SMTPDebug  = 0;
//Recipients
$mail->Sender=$email;
$mail->setFrom( 'umpadvancedit@gmail.com', 'Profit', FALSE);



     $mail->addAddress($userRow5['email']);



//$mail->addAddress($bcc);   
//$mail->AddCC($parentEmail1);
//$mail->AddCC($parentEmail2);  // Add a recipient
//if($role == 'agent'){$mail->addCC($agent_mail);}
$mail->addReplyTo($email, 'Reply');
$mail->AddEmbeddedImage('vendors/images/logo.png', 'ump_advanced');

// Content
$bodyString = nl2br("From: $email");

$mail->isHTML(true);
$mail->Subject = 'Profit Updating(Testing)';
$mail->Body    = '
<html>
<body>
<table width="800" border="0" align="center">
 <tbody>
   <tr>
     <td><table width="838" border="0">
         <tbody>
           <tr>
             <td width="322"><img src="cid:ump_advanced" width="300" height="200" alt=""/></td>
             <td width="506"><h1>&nbsp;UMP Advanced&nbsp;</h1>
               <p>&nbsp;<strong>&nbsp; Kompleks Pentadbiran Utama, Universiti Malaysia Pahang,</strong></p>
               <p>&nbsp;<strong>&nbsp; Lebuhraya Tun Razak, 26300 Gambang, Kuantan,</strong></p>
               <p>&nbsp;<strong>&nbsp; Pahang Darul Makmur</strong></p>
               <p>&nbsp;<strong>&nbsp; TEL : +609 549 3172 / 3177&nbsp;</strong></p>
             <p><strong>&nbsp; &nbsp;FAKS  :+609 549 3172 / 3177</strong></p></td>
           </tr>
         </tbody>
       </table>
       <p>&nbsp;________________________________________________________________________________________________________

       </p>
       <p>&nbsp;</p>
       <table width="839" border="0">
         <tbody>
           <tr>
             <td><strong>INSTITUSI</strong></td>
             <td><strong>'.$institusi.'</strong></td>
             <td></td>
           </tr>

           <tr>COORDINATOR</strong></td>
             <td><strong>'.$coordinator.'</strong></td>
             <td></td>
           </tr>


           <tr>COURSE OWNER</strong></td>
             <td><strong>'.$courseowner.'</strong></td>
             <td></td>
           </tr>


           <tr>INSTRUCTOR</strong></td>
             <td><strong>'.$instructor.'</strong></td>
             <td></td>
           </tr>
          
         </tbody>
       </table>
   </tr>
 </tbody>
 </table>
</html>';

$mail->send();

  
}}
?>
