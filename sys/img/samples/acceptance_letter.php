<html>
<head>
  <!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Acceptance Letter</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<!--link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"-->
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<!--link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css"-->
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>

  <style>
.div1 {
  height: 120px;
  width: 100%;
}
.div3 {
  height: 30px;
  width: 90%;
  font-size: 12px;
  
  
}
.p {
  font-family: "Arial Narrow";
  font-size: 12px;
  text-align: justify;
  text-justify: inter-word;
}
.ruj{
  font-family: "Arial Narrow";
  font-size: 12px;
}

.r {
  text-align: left;
  font-family: "Arial Narrow";
  font-size: 12px;
  padding: 0;
}

td {
  height: 20px;
}

body {
    margin: 0;
    padding: 0;
    background-color: #FAFAFA;
    font: 12pt "Arial Narrow";
}
* {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
}
.page {
    background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
  width: 21cm;
  height: 28.7cm; 
}
.subpage {
  padding-top: 0.5cm;
    padding-right: 2cm;
    padding-bottom: 0.5cm;
    padding-left: 2cm;
    height: 25.8cm;
   
}
 
@page {
    size: A4;
    margin: 0;
}
@media print {
    .page {
        margin: 0;
        border: initial;
        border-radius: initial;
        width: initial;
        min-height: initial;
        box-shadow: initial;
        background: initial;
        page-break-after: always;
    }
}


/* The hero image */
.hero-image {
  /* Position and center the image to scale nicely on all screens */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: center;
}

</style>
</head>

 <?php
					
		include_once 'talum.php';
		
       
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        } 


        $ic=$_SESSION['ic'];       
        $records = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'"); 
        while($data2 = mysqli_fetch_array($records)) { 
           
     $role = $data2['role'];
    $agent=$data2['agent'];
    $app_status = $data2['app_status'];
    
}

    $queryS = "SELECT * FROM `student`  where    stud_ic='$ic'";

                             $apps=mysqli_query($dbconfig,$queryS);

                          while($rows=mysqli_fetch_array($apps,MYSQLI_ASSOC)){

                          	$name=$rows['stud_name'];
            
            
        
            $sql4="SELECT matrik_no FROM matrik_no WHERE ic = '$ic'   ";
            //echo $sql1;
            $result4=mysqli_query($dbconfig,$sql4);
            $row4=mysqli_fetch_array($result4,MYSQLI_ASSOC);
            $matrik_no = $row4['matrik_no'];
            
            $sql5="SELECT * FROM programselection where stud_ic='$ic'";
            $result5=mysqli_query($dbconfig,$sql5);
            $row5=mysqli_fetch_array($result5,MYSQLI_ASSOC);
                $pg_code=$row5['pg_code'];
                $pg_name=$row5['pg_name'];

            $sql6="SELECT * FROM program_diploma where pg_code='$pg_code'";
            $result6=mysqli_query($dbconfig,$sql6);
            $row6=mysqli_fetch_array($result6,MYSQLI_ASSOC);
                $adsName=$row6['adsName'];
                $duration=$row6['duration'];
                $regDate=$row6['regDate'];
                $timestamp = strtotime($regDate);
                $new_date = date("d-m-Y", $timestamp);
                $learningCentre=$row6['learningCentre'];
                $Specialization=$row6['Specialization'];

          $sql7="SELECT * FROM contact where stud_ic='$ic'";
          $result7=mysqli_query($dbconfig,$sql7);
          $row7=mysqli_fetch_array($result7,MYSQLI_ASSOC);
            $mailaddress=$row7['mailaddress'];
            $postcode=$row7['postcode'];
            $city=$row7['city'];
            $state=$row7['stud_state'];

            $sql8="SELECT * FROM state_my where state_code='$state'";
          $result8=mysqli_query($dbconfig,$sql8);
          $row8=mysqli_fetch_array($result8,MYSQLI_ASSOC);
            $state_name=$row8['state_name'];
            


            
        }
    
      ?>


<body>
<div class="container">
	<div class="row">
	<div class="col-lg-12 col-lg-10">
	<div class="card">
	<div class="card-body">
        </br>
    <div align="center"><button class="btn btn-outline-primary btn-md" onclick="printDiv('printableArea')">Print</button></div>
	<div class="container right-container col-md-6" id="printableArea" style="display:block;">
        </br>
	<div class="page">
		

		<div class="subpage">
			<div class="div1">
				<img src="img/ol.png" width="100%" style="float:left"></td>
				<!--<img src="img/border.png" width="0.6%" align="top" ></td>-->
				<p class="p">Kompleks Pentadbiran Utama,<br>
Universiti Malaysia Pahang<br>
Lebuhraya Tun Razak<br>
26300 Gambang, Kuantan<br>
Pahang Darul Makmur<br>
Tel : +609 549 3177 / 3172<br>
Fax : +609 549 3166 </p>
				
                <br>
                <br>
				<b></b>
			</div>
			<?php
         ?>
	
		<br>
    
		<div>
			
		</div><br><br><br><br><br>
        <div>

                    <p class="p"></p>

					<p class="p"><b><br>TAWARAN KEMASUKAN KE UNIVERSITI MALAYSIA PAHANG SESI <?php echo strtoupper($adsName);?></p></b>
					
					<p class="p">Saya dengan ini menerima kemasukan ke program pengajian seperti berikut :</p>
				
                    <table  style="width:100%" border="0">
					  <tr valign="top">
						<th class="r" width="30%">Program Name</th>
						<td class="r" width="3%">:</td>
                        <td class="r" width="65%"><?php echo strtoupper($pg_name);?></td>
					  </tr>
					  <tr valign="top">
						<th class="r" width="30%">Matric Number:</th>
						<td class="r" width="3%">:</td>
						<td class="r" width="65%"><?php echo $ic;?></td>
					  </tr>
					 
					  <tr valign="top">
						<th class="r" width="30%">Registration Date</th>
						<td class="r" width="3%">:</td>
						<td class="r" width="65%"><?php echo $new_date;?></td>
					  </tr>
					  <tr valign="top">
						<th class="r" width="30%">Learning Centre</th>
						<td class="r" width="3%">:</td>
						<td class="r" width="65%"><?php echo $learningCentre;?></td>
					  </tr>
					  
                    </br>
					</table>
					<?php
						
					?>
					
					
					
					<p class="p" >Saya dengan ini :
					
					<p class="p" >(1) Mengesahkan bahawa maklumat yang diberikan semasa pemohonan adalah benar;</p>
					
					<p class="p" >(2) Bersetuju dengan syarat-syarat tawaran kemasukan. Pihak universiti berhak membatalkan tawaran ini pada bila-bila masa, jika 
kenyataan dan maklumat yang diberikan dalam permohonan kemasukan didapati tidak benar;
</p>
		
					<p class="p" >(3) Akan menjelaskan bayaran yuran pengajian seperti yang dimaklumkan oleh pihak universiti; dan

</b>

					<p class="p">(4) Mengambil maklum bahawa program ini adalah program terminal bermaksud ianya tidak boleh digunakan untuk melanjutkan 
pengajian di aliran perdana. Program ini dianugerahkan oleh Universiti Malaysia Pahang dan tidak tertakluk kepada badan 
pengiktirafan</p>
                    </br>
                    <p class="p"></p>
					<br class="p">
					<br class="p">
					<br>
					<br class="p">
					<br class="p">
					<br class="p">
					<br class="p">
					<br class="p">
					<br class="p">
					<br class="p">
					<br class="p">
					<br class="p">
					<br class="p">
					<p class="p"><b>
					<br class="p">
					<br class="p">
					<br class="p"></b></p>
                    </div>
                    <br class="p"><b></b></p>   <img src="img/footerupdate.png" width="100%" style="float:left">
                    </div>
                 
                    </div>
					
                    
                    </div>
                    
			</div>
          </div>

	</div><!-- print -->



	</div>
	</div>
	</div>
	</div>
</div>			
		
</body>
<script>
function printDiv(printableArea) {
     var printContents = document.getElementById(printableArea).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
</html> 