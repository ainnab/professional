<?php 

include 'talum.php';
session_start();
$ic=$_SESSION['ic'];

//program
   $pgFirst = $_REQUEST['pgFirst'];
   $pgSecond = $_REQUEST['pgSecond'];
   $pgThird = $_REQUEST['pgThird'];
  

      
  // first choice
  if ($pgFirst == 'DIP') {
    if(!empty($_REQUEST['pgDipFirst'])) {
      
      foreach($_REQUEST['pgDipFirst'] as $firstCourse){
        $firstList[] = $firstCourse;
        $firstListCode = implode (',',$firstList);
        
      }
    }
  } elseif($pgFirst == 'PREDIP'){
    if(!empty($_REQUEST['pgPreDip1'])) {
      $pgPreDip1 = $_REQUEST['pgPreDip1'];

      
      foreach($_REQUEST['pgPreDip1'] as $firstCourse){
        $firstList[] = $firstCourse;
        $firstListCode = implode (',',$firstList);
      }
    }
  }elseif($pgFirst == 'FOUNDATION'){
    if(!empty($_REQUEST['pgFoundation1'])) {
      foreach($_REQUEST['pgFoundation1'] as $firstCourse){
        $firstList[] = $firstCourse;
        $firstListCode = implode (',',$firstList);
      }
    }
  }

  //second choice
  if(!empty($pgSecond)){
    if ($pgSecond == 'DIP') {
      if(!empty($_REQUEST['pgDipSecond'])) {
        foreach($_REQUEST['pgDipSecond'] as $secondCourse){
          $secondList[] = $secondCourse;
          $secondListCode = implode (',',$secondList);
          
        }
      }
    }elseif($pgSecond == 'PREDIP'){
      if(!empty($_REQUEST['pgPreDip2'])) {
        foreach($_REQUEST['pgPreDip2'] as $secondCourse){
          $secondList[] = $secondCourse;
          $secondListCode = implode (',',$secondList);
          
        }
      }
    }elseif($pgSecond == 'FOUNDATION'){
      if(!empty($_REQUEST['pgFoundation2'])) {
        foreach($_REQUEST['pgFoundation2'] as $secondCourse){
          $secondList[] = $secondCourse;
          $secondListCode = implode (',',$secondList);
          
        }
      }
    }
  }else{
    $pgSecond = '';
    $secondListCode = '';
  }

  //Third choice
  if(!empty($pgThird)){
    if ($pgThird == 'DIP') {
      if(!empty($_REQUEST['pgDipThird'])) {
        foreach($_REQUEST['pgDipThird'] as $thirdCourse){
          $thirdList[] = $thirdCourse;
          $thirdListCode = implode (',',$thirdList);
          
        }
      }
    }elseif($pgThird == 'PREDIP'){
      if(!empty($_REQUEST['pgPreDip3'])) {
        foreach($_REQUEST['pgPreDip3'] as $thirdCourse){
          $thirdList[] = $thirdCourse;
          $thirdListCode = implode (',',$thirdList);
          
        }
      }
    }elseif($pgThird == 'FOUNDATION'){
      if(!empty($_REQUEST['pgFoundation3'])) {
        foreach($_REQUEST['pgFoundation3'] as $thirdCourse){
          $thirdList[] = $thirdCourse;
          $thirdListCode = implode (',',$thirdList);
        }
      }
    }
  }else{
    $pgThird = '';
    $thirdListCode = '';
  }
     



  //$sql41 = "INSERT INTO application (first_choice, firstList ,second_choice, secList, third_choice, thirdList) VALUES ('$pgFirst', '$firstListCode','$pgSecond', '$secondListCode','$pgThird','$thirdListCode') WHERE stud_ic='$ic'";
 
  $sql41="UPDATE application SET";
  $sql41.= " first_choice='$pgFirst', second_choice='$pgSecond', third_choice='$pgThird'";
  $sql41.= " WHERE stud_ic='$ic'";


  if(mysqli_query($dbconfig, $sql41) == TRUE){
    echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_application.php';</script>";

} else{
    echo "ERROR: Hush! Sorry $sql41. " 
        . mysqli_error($dbconfig);
}

mysqli_close($dbconfig);

  ?>