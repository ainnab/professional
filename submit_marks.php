<?php

include_once 'config.php';
    
error_reporting(E_ALL ^ E_NOTICE);


        //$program =$_REQUEST['program'];
        $semester = $_REQUEST['semester'];
        $course = $_REQUEST['course'];
        $total = $_REQUEST['total'];

        $item = $_REQUEST['item'];
        $grade = $_REQUEST['grade'];


        $name = $_REQUEST['stdName'];
        $id = $_REQUEST['id'];

 if(!empty($_REQUEST['item'])) {
          foreach($_REQUEST['item'] as $item){
            $itemList[] = $item;
            $item_name= implode (',',$itemList);


          }
        }


 if(!empty($_REQUEST['grade'])) {
          foreach($_REQUEST['grade'] as $grade){
            $gradeList[] = $grade;
            $grade_mark= implode (',',$gradeList);


          }
        }
    

if ($total >=80 && $total <= 100) { 

    $grades = '4.00' ;} 

if ($total >=75 && $total <=79) { 

 $grades = '3.67' ;}

if ($total >=70 && $total <=74) { 

 $grades = '3.33' ;} 
    
echo $grades;

  date_default_timezone_set("asia/kuala_lumpur");
  $dateToday = date('Y-m-d');
      

//filezip
$query1 = "INSERT INTO student_mark(name,marks,item,course,semester,total_marks,userid,point_no) VALUES ('$name', '$grade_mark','$item_name','$course','$semester','$total','$id','$grades')";




            if ($dbconfig2->query($query1) === TRUE) {
                    echo "<script>alert('Application successfully saved.')</script>";
                  echo '<META http-equiv="refresh" content="0;URL=verify_marks.php">';
                  }else {
          echo "<script>alert('Opss! There is error')</script>";
          echo "Error updating record: " . $dbconfig2->error;
        }


  


?>