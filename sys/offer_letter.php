<html>
<head>
  <!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Surat Tawaran Rasmi</title>

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
            $name=$data2['stud_name'];
            
            
        
            $sql4="SELECT matrik_no FROM matrik_no WHERE ic = '$ic' ";
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
				<img src="img/logo.png" width="28%" style="float:left"></td>
				<!--<img src="img/border.png" width="0.6%" align="top" ></td>-->
                <br>
                <br>
				<b><p class="p" style="float:right">Universiti Malaysia Pahang <br>
				Lebuhraya Tun Razak<br>
				26300 Gambang, Kuantan<br>
				Pahang Darul Makmur<br>
				Tel: +609 549 3177<br>
				Fax: +609 549 2167<p></b>
			</div>
			<?php
            /*$rec = mysqli_query($dbconfig,"select * from running_no where stud_ic='$ic'"); 
            while($data = mysqli_fetch_array($rec)) { 

              
            $run=$data['running_no'];?>
			<div align="right" class="div3">
			<?php
				if ($program == 'FOUNDATION') {
			?>
				 Ruj. Kami :UMP.40.04/01.03 (<?php echo $run?>)
			<?php } else { ?>
				 Ruj. Kami :UMP.40.04/01.02 (<?php echo $run?>)
			<?php } ?>
				<br>  
				Tarikh : <?php echo date('d-M-Y')?></p>
			</div>
	        <?php }*/ ?>
	
		<br>
        <br>
        <br>
        <br>
		<div>
			<b>
            <dt class="p" ><?php echo strtoupper($name)?> (NO K/P:<?php echo $ic?>)</dt>
			<dt class="p" ><?php echo strtoupper($mailaddress)?></dt>
			<dt class="p" ><?php echo $postcode?> <?php echo strtoupper($city)?>, <?php echo strtoupper($state_name)?></dt>
            </b>
		</div>
        <div>

                    <p class="p">Saudara/i,</p>

					<p class="p"><b>TAWARAN KEMASUKAN KE PROGRAM AKADEMIK PEMBELAJARAN SEPANJANG HAYAT (PSH) UNIVERSITI MALAYSIA PAHANG SESI <?php echo strtoupper($adsName);?></p></b>
					
					<p class="p">Tahniah kerana saudara/i telah terpilih untuk mengikuti program pengajian serta yuran pengajian seperti berikut :</p>
				
                    <table  style="width:100%" border="0">
					  <tr valign="top">
						<th class="r" width="30%">Program Name/Program Pengajian</th>
						<td class="r" width="3%">:</td>
                        <td class="r" width="65%"><?php echo strtoupper($pg_name);?></td>
					  </tr>
					  <tr valign="top">
						<th class="r" width="30%">Program Code/Kod Program</th>
						<td class="r" width="3%">:</td>
						<td class="r" width="65%"><?php echo $pg_code;?></td>
					  </tr>
					  <tr valign="top">
						<th class="r" width="30%">Duration Of Study/Tempoh Pengajian</th>
						<td class="r" width="3%">:</td>
						<td class="r" width="65%"><?php echo $duration;?></td>
					  </tr>
					  <tr valign="top">
						<th class="r" width="30%">Registration Date/Tarikh Pendaftaran</th>
						<td class="r" width="3%">:</td>
						<td class="r" width="65%"><?php echo $new_date;?></td>
					  </tr>
					  <tr valign="top">
						<th class="r" width="30%">Learning Centre/Pusat Pembelajaran</th>
						<td class="r" width="3%">:</td>
						<td class="r" width="65%"><?php echo $learningCentre;?></td>
					  </tr>
					  <tr valign="top">
						<th class="r" width="30%">Specialization/Pengkhususan</th>
						<td class="r" width="3%">:</td>
						<td class="r" width="65%"><?php echo $Specialization;?></td>
					  </tr>
                    </br>
					</table>
					<?php
						
					?>
					<table class="table table-bordered mg-b-0" style="width:100%" border="1px solid black">
						<tr>
							<td class="r" >&nbsp;<b>Fees/Yuran </b></td>
							<td class="r" >&nbsp;<b>Total/Jumlah (RM)</b></td>
					</tr>
					<tr>
						<td class="r" >&nbsp;YURAN PENGAJIAN</td>
						<td class="r" >&nbsp;RM </td>
					</tr>
                    <tr>
						<td class="r" >&nbsp;YURAN PENDAFTARAN</td>
						<td class="r" >&nbsp;RM </td>
					</tr>
                    <tr>
						<td class="r" >&nbsp;<b>Total/Jumlah</b></td>
						<td class="r" >&nbsp;<b>RM </b></td>
					</tr>
					</table>
					
					
					<p class="p" >2.    Tawaran ini adalah tertakluk kepada syarat-syarat tawaran kemasukan sedia ada. Pihak universiti berhak membatalkan tawaran ini pada bila-bila
                     masa, jika kenyataan dan maklumat yang diberikan dalam borang permohonan kemasukan didapati <b>tidak benar</b>.
					
					<p class="p" >3.    Untuk makluman, program ini merupakan program terminal yang bermaksud ianya tidak boleh digunakan untuk melanjutkan pengajian di aliran
                    perdana. Program ini dianugerahkan oleh Universiti Malaysia Pahang dan tidak tertakluk kepada bahan pengiktirafan.</p>
					
					<p class="p" >4.    Adalah diharapkan pihak saudara/i dapat mengembalikan Borang Jawapan Penerimaan <b>(UMP-UAE D.E. 01)</b> kepada kami sebelum <b>7 hari dari tarikh
                    pendaftaran</b> untuk tujuan rekod. Semoga dengan penawaran program ini dapat memperkasakan agenda Pembelajaran Sepanjang Hayat seperti yang
                    digariskan dalam Pelan Pembangunan Pendidikan Malaysia (2015-2025) - Pengajian Tinggi (Lonjakan Ketiga) ke arah melahirkan generasi yang berilmu
                    pengetahuan dan berdaya saing.</p>
		
					<p class="p" >5.    Sila hubungi kami di talian 06-7611220 / 7644702 <b>(Norherliana Binti Abd Halim)</b> atau 09-549 3172 / 3196 <b>(Pn. Zuriyana binti
                    Hanapi)</b> untuk sebarang pertanyaan</p>

					<p class="p">Sekian, terima kasih.</p>
                    </br>
                    <p class="p">Yang Benar,</p>
					<img src="img/Picture5.jpg" width="10%">
					<p class="p"><b>(Prof. Madya Dr. Roslinazairimah Zakaria)
					<br class="p">Dekan,
					<br class="p">Pusat Diploma dan Asasi
					<br class="p">Universiti Malaysia Pahang</b></p>
                    </div>
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