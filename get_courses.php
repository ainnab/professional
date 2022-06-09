<?php               


include 'config.php';
              //$year = strtoupper($_REQUEST['year']);              
              if(isset($_POST['search'])) {
                $course = $_POST['course'];
               

                $sql2="SELECT *FROM mdl_course where visible='1' and fullname = '$course'";
                                
                $result2=mysqli_query($dbconfig,$sql2);
                $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
                }
                
              ?>  