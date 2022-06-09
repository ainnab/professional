
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/jpg" href="img/favicon.png"/>

    
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Admission</title>

    <!-- vendor css -->
    <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="lib/morris.js/morris.css" rel="stylesheet">
    <link href="lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="lib/jqvmap/jqvmap.min.css" rel="stylesheet">
    <link href="lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="css/azia.css">
    <?php 
    include 'talum.php';
   
    ?>

    <?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    $ic=$_SESSION['ic'];       
    $records = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'"); 
    while($data2 = mysqli_fetch_array($records)) { 
      
           
  $role = $data2['role'];
   $agent=$data2['stud_name'];  

        include 'main_menu.php';
      }
       
    ?>
    <?php     
    $sql31 = "SELECT * FROM `spm_subject`";
    $all_sub = mysqli_query($dbconfig,$sql31);
    $sql32 = "SELECT * FROM `spm_grade`";  
    $records3 = mysqli_query($dbconfig,"select * from application where stud_ic='$ic'"); 
    while($data = mysqli_fetch_array($records3)) {   

    ?>
      </head>

    
  <body class="az-body az-body-sidebar">
    

   
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
</head>
      <div class="az-content-header d-block d-md-flex">
        <div>
          <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Update Student's Information</h2>
        </div>
        <div class="az-dashboard-header-right">
        </div><!-- az-dashboard-header-right -->
      </div><!-- az-content-header -->
      <div class="az-content-body">
      <div class="row row-sm">
      <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="card card-dashboard-seven">
          <div class="card-body">
          
                  <div>
            <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Application')" id="defaultOpen">Programme</button>
            <button class="tablinks" onclick="openCity(event, 'Personal')">Personal</button>
            <button class="tablinks" onclick="openCity(event, 'Parent')">Parent</button>
            <button class="tablinks" onclick="openCity(event, 'Academic')">Academic</button>
            <button class="tablinks" onclick="openCity(event, 'Upload')">Upload Document</button>
            <button class="tablinks" onclick="openCity(event, 'Declaration')">Declaration</button>
</div>


<div id="Application" class="tabcontent">
</br>
  <h3>Application</h3>
  </br>
    <form action="save_application_agent.php" method="post">
      <div class="row row-sm">
        <div class="col-md-12 col-lg-12 col-xl-6">
          <div class="form-group">
          <label for="">Programme Category -First Choice:</label>
          <select class="form-control" id="" name="pgFirst" required>
          <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                                                                <option style="text-transform:uppercase" value="FOUNDATION">Foundation In Science And Technology</option>
                                                                                              <option style="text-transform:uppercase" value="DRM">Diploma In Mechanical Engineering</option>
                                                                <option style="text-transform:uppercase" value="DRK">Diploma In Chemical Engineering</option>
                                                                <option style="text-transform:uppercase" value="DRA">Diploma In Civil Engineering</option>
                                                                <option style="text-transform:uppercase" value="DRE">Diploma In Electrical And Electronic </option>
                                                                <option style="text-transform:uppercase" value="DRC">Diploma In Computer Science</option>
                                        </select>
          </div>
        </div> 
        <div class="col-md-12 col-lg-12 col-xl-6">
        
      </div>
      </div><!-- row -->
      <div class="row row-sm">
        <div class="col-md-12 col-lg-12 col-xl-6">
          <div class="form-group">
          <label for="">Programme Category -Second Choice:</label>
          <select class="form-control" id="" name="pgSecond" required>
          <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                                                                <option style="text-transform:uppercase" value="FOUNDATION">Foundation In Science And Technology</option>
                                                                                              <option style="text-transform:uppercase" value="DRM">Diploma In Mechanical Engineering</option>
                                                                <option style="text-transform:uppercase" value="DRK">Diploma In Chemical Engineering</option>
                                                                <option style="text-transform:uppercase" value="DRA">Diploma In Civil Engineering</option>
                                                                <option style="text-transform:uppercase" value="DRE">Diploma In Electrical And Electronic </option>
                                                                <option style="text-transform:uppercase" value="DRC"selected="selected">Diploma In Computer Science</option>
                                        </select>
          </div>
        </div>
        <div class="col-md-12 col-lg-12 col-xl-6">
        
      </div>
      </div><!-- row -->
      <div class="row row-sm">
        <div class="col-md-12 col-lg-12 col-xl-6">
          <div class="form-group">
          <label for="">Programme Category -Third Choice:</label>
          <select class="form-control" id="" name="pgThird" required>
          <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                                                                <option style="text-transform:uppercase" value="FOUNDATION">Foundation In Science And Technology</option>
                                                                                              <option style="text-transform:uppercase" value="DRM">Diploma In Mechanical Engineering</option>
                                                                <option style="text-transform:uppercase" value="DRK">Diploma In Chemical Engineering</option>
                                                                <option style="text-transform:uppercase" value="DRA"selected="selected">Diploma In Civil Engineering</option>
                                                                <option style="text-transform:uppercase" value="DRE">Diploma In Electrical And Electronic </option>
                                                                <option style="text-transform:uppercase" value="DRC">Diploma In Computer Science</option>
                                        </select>
          </div>
        </div>
        <div class="col-md-12 col-lg-12 col-xl-6">
          
      </div>
      </div><!-- row -->      <input type='hidden' name='ic' value='011014121019'>
      <input type="submit" name="submit" value="Update" class="btn btn-az-primary btn-block">   
      </form>
</div>

<div id="Personal" class="tabcontent">
</br>
  <h3>Personal Info</h3>
  </br>
    <form action="save_personal_agent.php" method="post">
            <div class="row row-sm">
            <div class="col-md-12 col-lg-12">
                <div class="form-group">
                <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                <input id="" class="form-control" name="name" placeholder="Enter Full Name" value="AZWAN BIN AMANDO" type="text" style="text-transform:uppercase" required>
                </div><!-- form group -->
            </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">IC number/passport: <span class="tx-danger">*</span></label>
                <input id="" class="form-control" name="ic" type="text" value="011014121019" readonly>
                </div><!-- form group -->
            </div><!--col-->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                <div class="form-group">
                <label class="form-control-label">Nationality: <span class="tx-danger">*</span></label>
                <select name="nation" class="form-control select2" required>
                <option value="">SELECT</option>
                                <option value="0">BUKAN WARGANEGARA</option>
                                <option value="1"selected="selected">WARGANEGARA</option>
                                <option value="2">PEMASTAUTIN TETAP</option>
                                </select>
                </div><!-- form group -->
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                <div class="form-group">
                <label class="form-control-label">Place Of Birth: <span class="tx-danger">*</span></label>
                <select name="pob" class="form-control select2" required>
                <option value="">SELECT</option>
                                <option value="MYS01">JOHOR</option>
                                <option value="MYS02">KEDAH</option>
                                <option value="MYS03">KELANTAN</option>
                                <option value="MYS04">MELAKA</option>
                                <option value="MYS05">NEGERI SEMBILAN</option>
                                <option value="MYSLL">OTHERS</option>
                                <option value="MYS06">PAHANG</option>
                                <option value="MYS08">PERAK</option>
                                <option value="MYS09">PERLIS</option>
                                <option value="MYS07">PULAU PINANG</option>
                                <option value="MYS12"selected="selected">SABAH</option>
                                <option value="MYS13">SARAWAK</option>
                                <option value="MYS10">SELANGOR</option>
                                <option value="MYS11">TERENGGANU</option>
                                <option value="MYS15">WILAYAH PERSEKUTUAN</option>
                                </select>
                </div><!-- form group -->
            </div><!-- col-4 -->
            </div><!-- row -->
            <div class="row row-sm">
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                <input id="email" class="form-control" placeholder="ENTER EMAIL" name="email" type="text" value="yazwanazwan@gmail.com" required>
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-md-5 col-lg-4 mg-t-20 mg-md-t-0">
                <div class="form-group">
                <label class="form-control-label">Home Tel Number: <span class="tx-danger">*</span></label>
                <input name="hometel" class="form-control" placeholder="ENTER HOME TEL NUMBER" value="0193467449" type="text" required>
                </div><!-- form group -->
            </div><!--col-->
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                <input id="phone" class="form-control" placeholder="ENTER PHONE NUMBER" name="phone" type="text" value="0168036108" required>
                </div><!-- form group -->
            </div><!-- col -->  
            </div><!-- row -->
            <div class="row row-sm">
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Gender: <span class="tx-danger">*</span></label>
                <select name="gender" class="form-control select2" required>
                <option value="">SELECT</option>
                                <option value="F">FEMALE</option>
                                <option value="M"selected="selected">MALE</option>
                                </select>
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Age: <span class="tx-danger">*</span></label>
                <input id="age" class="form-control" name="age" type="text" value="21" readonly>
                </div><!-- form group -->
            </div><!-- col -->  
            <div class="col-lg-3">
                <div class="form-group">
                <label class="form-control-label">Date of Birth: <span class="tx-danger">*</span></label>
                    <div class="input-group">

                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        Date:
                        </div>
                    </div>
                    <input id="dateMask" type="text" name="dob" class="form-control" value="14/10/2001" placeholder="MM/DD/YYYY" required>
                    </div><!-- input-group -->
                </div><!-- form group -->
            </div><!-- col-4 -->
            </div><!-- row -->
            <div class="row row-sm">
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Marital Status: <span class="tx-danger">*</span></label>
                <select name="marital" class="form-control select2" required>
                <option value="">SELECT</option>
                                <option value="B"selected="selected">BUJANG</option>
                                <option value="D">DUDA</option>
                                <option value="J">JANDA</option>
                                <option value="K">KAHWIN</option>
                                <option value="L">BALU</option>
                                </select>
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Race: <span class="tx-danger">*</span></label>
                <select name="race" class="form-control select2">
                <option value="">SELECT</option>
                                <option value="0100">MELAYU</option>
                                <option value="0200">CINA</option>
                                <option value="0300">INDIA</option>
                                <option value="0800">ANAK NEGERI SABAH</option>
                                <option value="1000">ANAK NEGERI SARAWAK</option>
                                <option value="1200">ORANG ASLI </option>
                                <option value="0000">LAIN-LAIN</option>
                                <option value="0101">BUGIS</option>
                                <option value="0102">BOYAN</option>
                                <option value="0103">BANJAR</option>
                                <option value="0104">JAWA</option>
                                <option value="0105">JAWI PEKAN</option>
                                <option value="0106">MINANGKABAU</option>
                                <option value="0201">CANTONESE</option>
                                <option value="0202">FOOCHOW</option>
                                <option value="0203">HAINANESE</option>
                                <option value="0204">HENGHUA</option>
                                <option value="0205">HOKCHIA</option>
                                <option value="0206">HOKCHIU</option>
                                <option value="0207">HOKKIEN</option>
                                <option value="0208">KHEK</option>
                                <option value="0209">KWONGSAI </option>
                                <option value="0210">TEOCHEW</option>
                                <option value="0211">KONGFOO</option>
                                <option value="0212">HYLAM</option>
                                <option value="0213">KENGCHU</option>
                                <option value="0214">KOCHOU</option>
                                <option value="0301">MALAYALI</option>
                                <option value="302 ">PUNJABI</option>
                                <option value="0303">SIKH</option>
                                <option value="0304">TAMIL</option>
                                <option value="0305">TELEGU</option>
                                <option value="0306">MALABARI</option>
                                <option value="0307">INDIA MUSLIM</option>
                                <option value="0308">TELUGU</option>
                                <option value="0309">ORISSA</option>
                                <option value="0400">BANGLADESHI</option>
                                <option value="0500">PAKISTANI</option>
                                <option value="0600">SRI LANKA</option>
                                <option value="0601">TAMIL SRI LANKA</option>
                                <option value="0602">MELAYU SRI LANKA</option>
                                <option value="0603">SINHALESE</option>
                                <option value="0604">CEYLONESE</option>
                                <option value="0700">INDONESIA</option>
                                <option value="0701">TIDUNG</option>
                                <option value="0801"selected="selected">BAJAU</option>
                                <option value="0802">DUSUN</option>
                                <option value="0803">KADAZAN</option>
                                <option value="0804">MURUT</option>
                                <option value="0805">SINO-NATIVE</option>
                                <option value="0806">SULUK</option>
                                <option value="0807">TIDUNG</option>
                                <option value="0901">BINADAN</option>
                                <option value="0902">BISAYA</option>
                                <option value="0903">BONGOL</option>
                                <option value="0904">BRUNEI</option>
                                <option value="0905">DUMPAS</option>
                                <option value="0906">IRANUN</option>
                                <option value="0907">IDAHAN</option>
                                <option value="0908">KWIJAU</option>
                                <option value="0909">KEDAYAN</option>
                                <option value="0910">LINGKABAU</option>
                                <option value="0911">LUNDAYEH</option>
                                <option value="0912">LASAU</option>
                                <option value="0913">MELANAU</option>
                                <option value="0914">MANGKAAK</option>
                                <option value="0915">MATAGANG</option>
                                <option value="0916">MINOKOK</option>
                                <option value="0917">MELAYU SABAH</option>
                                <option value="0918">MOMOGUN</option>
                                <option value="0919">PAITAN</option>
                                <option value="0920">RUMANAU</option>
                                <option value="0921">RUNGUS</option>
                                <option value="0922">SUNGAI</option>
                                <option value="0923">SONSONGAN</option>
                                <option value="0924">SINULIHAN</option>
                                <option value="0925">TOMBONUO</option>
                                <option value="0926">TAGAL</option>
                                <option value="0927">TINAGAS</option>
                                <option value="0928">COCOS</option>
                                <option value="0929">KIMARAGANG</option>
                                <option value="0930">BOLONGAN</option>
                                <option value="0931">BUTON</option>
                                <option value="0932">KAGAYAN</option>
                                <option value="0933">BALABAK</option>
                                <option value="0934">KADAZAN-SINO</option>
                                <option value="0935">DUSUN-SINO</option>
                                <option value="0936">BAJAU-SINO</option>
                                <option value="0937">MURUT-SINO</option>
                                <option value="0938">BRUNEI-SINO</option>
                                <option value="0939">RUNGUS-SINO</option>
                                <option value="0940">BISAYA-SINO</option>
                                <option value="0941">IDAHAN-SINO</option>
                                <option value="0942">IRANUN-SINO</option>
                                <option value="0943">KEDAYAN-SINO</option>
                                <option value="0944">SUNGAI-SINO</option>
                                <option value="0945">LUNDAYEH-SINO</option>
                                <option value="0946">SULUK-SINO</option>
                                <option value="0947">TIDUNG-SINO</option>
                                <option value="0948">BOLONGAN-SINO</option>
                                <option value="0949">BALABAK-SINO</option>
                                <option value="1001">MELAYU SARAWAK</option>
                                <option value="1002">MELANAU</option>
                                <option value="1003">KEDAYAN</option>
                                <option value="1004">IBAN ATAU SEA DAYAK</option>
                                <option value="0203">HAINANESE</option>
                                <option value="0204">HENGHUA</option>
                                <option value="0205">HOKCHIA</option>
                                <option value="0206">HOKCHIU</option>
                                <option value="0207">HOKKIEN</option>
                                <option value="0208">KHEK</option>
                                <option value="0209">KWONGSAI </option>
                                <option value="0210">TEOCHEW</option>
                                <option value="0211">KONGFOO</option>
                                <option value="0212">HYLAM</option>
                                <option value="0213">KENGCHU</option>
                                <option value="0214">KOCHOU</option>
                                <option value="0301">MALAYALI</option>
                                <option value="302 ">PUNJABI</option>
                                <option value="0303">SIKH</option>
                                <option value="0304">TAMIL</option>
                                <option value="0305">TELEGU</option>
                                <option value="0306">MALABARI</option>
                                <option value="0307">INDIA MUSLIM</option>
                                <option value="0308">TELUGU</option>
                                <option value="0309">ORISSA</option>
                                <option value="0400">BANGLADESHI</option>
                                <option value="0500">PAKISTANI</option>
                                <option value="0600">SRI LANKA</option>
                                <option value="0601">TAMIL SRI LANKA</option>
                                <option value="0602">MELAYU SRI LANKA</option>
                                <option value="0603">SINHALESE</option>
                                <option value="0604">CEYLONESE</option>
                                <option value="0700">INDONESIA</option>
                                <option value="0701">TIDUNG</option>
                                <option value="0801"selected="selected">BAJAU</option>
                                <option value="0802">DUSUN</option>
                                <option value="0803">KADAZAN</option>
                                <option value="0804">MURUT</option>
                                <option value="0805">SINO-NATIVE</option>
                                <option value="0806">SULUK</option>
                                <option value="0807">TIDUNG</option>
                                <option value="0901">BINADAN</option>
                                <option value="0902">BISAYA</option>
                                <option value="0903">BONGOL</option>
                                <option value="0904">BRUNEI</option>
                                <option value="0905">DUMPAS</option>
                                <option value="0906">IRANUN</option>
                                <option value="0907">IDAHAN</option>
                                <option value="0908">KWIJAU</option>
                                <option value="0909">KEDAYAN</option>
                                <option value="0910">LINGKABAU</option>
                                <option value="0911">LUNDAYEH</option>
                                <option value="0912">LASAU</option>
                                <option value="0913">MELANAU</option>
                                <option value="0914">MANGKAAK</option>
                                <option value="0915">MATAGANG</option>
                                <option value="0916">MINOKOK</option>
                                <option value="0917">MELAYU SABAH</option>
                                <option value="0918">MOMOGUN</option>
                                <option value="0919">PAITAN</option>
                                <option value="0920">RUMANAU</option>
                                <option value="0921">RUNGUS</option>
                                <option value="0922">SUNGAI</option>
                                <option value="0923">SONSONGAN</option>
                                <option value="0924">SINULIHAN</option>
                                <option value="0925">TOMBONUO</option>
                                <option value="0926">TAGAL</option>
                                <option value="0927">TINAGAS</option>
                                <option value="0928">COCOS</option>
                                <option value="0929">KIMARAGANG</option>
                                <option value="0930">BOLONGAN</option>
                                <option value="0931">BUTON</option>
                                <option value="0932">KAGAYAN</option>
                                <option value="0933">BALABAK</option>
                                <option value="0934">KADAZAN-SINO</option>
                                <option value="0935">DUSUN-SINO</option>
                                <option value="0936">BAJAU-SINO</option>
                                <option value="0937">MURUT-SINO</option>
                                <option value="0938">BRUNEI-SINO</option>
                                <option value="0939">RUNGUS-SINO</option>
                                <option value="0940">BISAYA-SINO</option>
                                <option value="0941">IDAHAN-SINO</option>
                                <option value="0942">IRANUN-SINO</option>
                                <option value="0943">KEDAYAN-SINO</option>
                                <option value="0944">SUNGAI-SINO</option>
                                <option value="0945">LUNDAYEH-SINO</option>
                                <option value="0946">SULUK-SINO</option>
                                <option value="0947">TIDUNG-SINO</option>
                                <option value="0948">BOLONGAN-SINO</option>
                                <option value="0949">BALABAK-SINO</option>
                                <option value="1001">MELAYU SARAWAK</option>
                                <option value="1002">MELANAU</option>
                                <option value="1003">KEDAYAN</option>
                                <option value="1004">IBAN ATAU SEA DAYAK</option>
                                <option value="0914">MANGKAAK</option>
                                <option value="0915">MATAGANG</option>
                                <option value="0916">MINOKOK</option>
                                <option value="0917">MELAYU SABAH</option>
                                <option value="0918">MOMOGUN</option>
                                <option value="0919">PAITAN</option>
                                <option value="0920">RUMANAU</option>
                                <option value="0921">RUNGUS</option>
                                <option value="0922">SUNGAI</option>
                                <option value="0923">SONSONGAN</option>
                                <option value="0924">SINULIHAN</option>
                                <option value="0925">TOMBONUO</option>
                                <option value="0926">TAGAL</option>
                                <option value="0927">TINAGAS</option>
                                <option value="0928">COCOS</option>
                                <option value="0929">KIMARAGANG</option>
                                <option value="0930">BOLONGAN</option>
                                <option value="0931">BUTON</option>
                                <option value="0932">KAGAYAN</option>
                                <option value="0933">BALABAK</option>
                                <option value="0934">KADAZAN-SINO</option>
                                <option value="0935">DUSUN-SINO</option>
                                <option value="0936">BAJAU-SINO</option>
                                <option value="0937">MURUT-SINO</option>
                                <option value="0938">BRUNEI-SINO</option>
                                <option value="0939">RUNGUS-SINO</option>
                                <option value="0940">BISAYA-SINO</option>
                                <option value="0941">IDAHAN-SINO</option>
                                <option value="0942">IRANUN-SINO</option>
                                <option value="0943">KEDAYAN-SINO</option>
                                <option value="0944">SUNGAI-SINO</option>
                                <option value="0945">LUNDAYEH-SINO</option>
                                <option value="0946">SULUK-SINO</option>
                                <option value="0947">TIDUNG-SINO</option>
                                <option value="0948">BOLONGAN-SINO</option>
                                <option value="0949">BALABAK-SINO</option>
                                <option value="1001">MELAYU SARAWAK</option>
                                <option value="1002">MELANAU</option>
                                <option value="1003">KEDAYAN</option>
                                <option value="1004">IBAN ATAU SEA DAYAK</option>
                                <option value="0913">MELANAU</option>
                                <option value="0914">MANGKAAK</option>
                                <option value="0915">MATAGANG</option>
                                <option value="0916">MINOKOK</option>
                                <option value="0917">MELAYU SABAH</option>
                                <option value="0918">MOMOGUN</option>
                                <option value="0919">PAITAN</option>
                                <option value="0920">RUMANAU</option>
                                <option value="0921">RUNGUS</option>
                                <option value="0922">SUNGAI</option>
                                <option value="0923">SONSONGAN</option>
                                <option value="0924">SINULIHAN</option>
                                <option value="0925">TOMBONUO</option>
                                <option value="0926">TAGAL</option>
                                <option value="0927">TINAGAS</option>
                                <option value="0928">COCOS</option>
                                <option value="0929">KIMARAGANG</option>
                                <option value="0930">BOLONGAN</option>
                                <option value="0931">BUTON</option>
                                <option value="0932">KAGAYAN</option>
                                <option value="0933">BALABAK</option>
                                <option value="0934">KADAZAN-SINO</option>
                                <option value="0935">DUSUN-SINO</option>
                                <option value="0936">BAJAU-SINO</option>
                                <option value="0937">MURUT-SINO</option>
                                <option value="0938">BRUNEI-SINO</option>
                                <option value="0939">RUNGUS-SINO</option>
                                <option value="0940">BISAYA-SINO</option>
                                <option value="0941">IDAHAN-SINO</option>
                                <option value="0942">IRANUN-SINO</option>
                                <option value="0943">KEDAYAN-SINO</option>
                                <option value="0944">SUNGAI-SINO</option>
                                <option value="0945">LUNDAYEH-SINO</option>
                                <option value="0946">SULUK-SINO</option>
                                <option value="0947">TIDUNG-SINO</option>
                                <option value="0948">BOLONGAN-SINO</option>
                                <option value="0949">BALABAK-SINO</option>
                                <option value="1001">MELAYU SARAWAK</option>
                                <option value="1002">MELANAU</option>
                                <option value="1003">KEDAYAN</option>
                                <option value="1004">IBAN ATAU SEA DAYAK</option>
                                <option value="0102">BIDAYUH ATAU LAND DAYAK</option>
                                <option value="0102">KAYAN</option>
                                <option value="0102">KENYAH</option>
                                <option value="1010">PUNAN</option>
                                <option value="1011">PENAN</option>
                                <option value="1012">TRING</option>
                                <option value="1013">LOGAT</option>
                                <option value="1014">BAH MALI</option>
                                <option value="1015">NAROM</option>
                                <option value="1016">BAKONG</option>
                                <option value="1017">MIRIEK</option>
                                <option value="1018">DALI</option>
                                <option value="1019">SEGAN</option>
                                <option value="1101">BISAYA</option>
                                <option value="1102">BERAWAN</option>
                                <option value="1103">BELOT</option>
                                <option value="1104">BHUKET ATAU UKIT</option>
                                <option value="1105">BALAU</option>
                                <option value="1106">BATANG AI</option>
                                <option value="1107">BATU ELAH</option>
                                <option value="1108">BAKETAN</option>
                                <option value="1109">BINTULU</option>
                                <option value="1110">BADENG</option>
                                <option value="1111">DUSUN</option>
                                <option value="1112">JAGOI</option>
                                <option value="1113">LAKIPUT</option>
                                <option value="1114">KAJANG</option>
                                <option value="1115">KEJAMAN</option>
                                <option value="1116">KANOWIT</option>
                                <option value="1117">LIRONG</option>
                                <option value="1118">LEMANAK</option>
                                <option value="1119">LAHANAN</option>
                                <option value="1120">LISUM ATAU LUGUM</option>
                                <option value="1121">MATU</option>
                                <option value="1122">MEMALOH</option>
                                <option value="1123">MELIKIN</option>
                                <option value="1124">MELAING</option>
                                <option value="1125">NGORIK ATAU MUREK</option>
                                <option value="1126">MENONDO</option>
                                <option value="1127">JAMOK</option>
                                <option value="1128">SEBOP</option>
                                <option value="1129">SEDUAN</option>
                                <option value="1130">SEKAPAN</option>
                                <option value="1131">SEGALANG</option>
                                <option value="1132">SIHAN</option>
                                <option value="1133">SEPING</option>
                                <option value="1134">SARIBAS</option>
                                <option value="1135">SEBUYAU</option>
                                <option value="1136">SKRANG</option>
                                <option value="1137">SABAN</option>
                                <option value="0102">BIDAYUH ATAU LAND DAYAK</option>
                                <option value="0102">KAYAN</option>
                                <option value="0102">KENYAH</option>
                                <option value="1137">SABAN</option>
                                <option value="1138">SELAKAN</option>
                                <option value="1139">SELAKO</option>
                                <option value="1140">TAGAL</option>
                                <option value="1141">TABUN</option>
                                <option value="1142">TUTONG</option>
                                <option value="1143">TANJONG</option>
                                <option value="1144">TATAU</option>
                                <option value="1145">TAUP</option>
                                <option value="1146">UKIT</option>
                                <option value="1147">UNKOP</option>
                                <option value="1148">ULU AI</option>
                                <option value="1149">TORAJA</option>
                                <option value="1150">TIMOR</option>
                                <option value="1151">MENADO</option>
                                <option value="1152">MANURA</option>
                                <option value="1153">BATAK</option>
                                <option value="1154">PATHAN</option>
                                <option value="1155">TONGANS</option>
                                <option value="1201">JAKUN</option>
                                <option value="1202">NEGRITO</option>
                                <option value="1203">SAKAI</option>
                                <option value="1204">SEMAI</option>
                                <option value="1205">SEMALAI</option>
                                <option value="1206">TEMIAR</option>
                                <option value="1207">SENOI</option>
                                <option value="1118">LEMANAK</option>
                                <option value="1119">LAHANAN</option>
                                <option value="1120">LISUM ATAU LUGUM</option>
                                <option value="1121">MATU</option>
                                <option value="1122">MEMALOH</option>
                                <option value="1123">MELIKIN</option>
                                <option value="1124">MELAING</option>
                                <option value="1125">NGORIK ATAU MUREK</option>
                                <option value="1126">MENONDO</option>
                                <option value="1127">JAMOK</option>
                                <option value="1128">SEBOP</option>
                                <option value="1129">SEDUAN</option>
                                <option value="1130">SEKAPAN</option>
                                <option value="1131">SEGALANG</option>
                                <option value="1132">SIHAN</option>
                                <option value="1133">SEPING</option>
                                <option value="1134">SARIBAS</option>
                                <option value="1135">SEBUYAU</option>
                                <option value="1136">SKRANG</option>
                                <option value="1108">BAKETAN</option>
                                <option value="1109">BINTULU</option>
                                <option value="1110">BADENG</option>
                                <option value="1111">DUSUN</option>
                                <option value="1112">JAGOI</option>
                                <option value="1113">LAKIPUT</option>
                                <option value="1114">KAJANG</option>
                                <option value="1115">KEJAMAN</option>
                                <option value="1116">KANOWIT</option>
                                <option value="1117">LIRONG</option>
                                <option value="1017">MIRIEK</option>
                                <option value="1018">DALI</option>
                                <option value="1019">SEGAN</option>
                                <option value="1101">BISAYA</option>
                                <option value="1102">BERAWAN</option>
                                <option value="1103">BELOT</option>
                                <option value="1104">BHUKET ATAU UKIT</option>
                                <option value="1105">BALAU</option>
                                <option value="1106">BATANG AI</option>
                                <option value="1107">BATU ELAH</option>
                                <option value="1008">MURUT ATAU LUN BAWANG</option>
                                <option value="1009">KELABIT</option>
                                <option value="1010">PUNAN</option>
                                <option value="1011">PENAN</option>
                                <option value="1012">TRING</option>
                                <option value="1013">LOGAT</option>
                                <option value="1014">BAH MALI</option>
                                <option value="1015">NAROM</option>
                                <option value="1016">BAKONG</option>
                                <option value="1300">LAIN-LAIN ASIA</option>
                                <option value="1301">ARAB</option>
                                <option value="1302">BURMESE</option>
                                <option value="1303">EURASIAN</option>
                                <option value="1304">FIJIAN</option>
                                <option value="1305">FILIPINO</option>
                                <option value="1306">GURKHA</option>
                                <option value="1307">JAPANESE</option>
                                <option value="1308">KHMER</option>
                                <option value="1309">KOREAN</option>
                                <option value="1310">MALTESE</option>
                                <option value="1311">PORTUGESE</option>
                                <option value="1312">THAI</option>
                                <option value="1313">VIETNAMESE</option>
                                <option value="1314">IRANIAN</option>
                                <option value="1315">AFGHAN</option>
                                <option value="1316">CAUCASIAN</option>
                                <option value="1317">KYRGYZ</option>
                                <option value="1318">UBIAN</option>
                                <option value="1319">UZBEKISTAN</option>
                                <option value="1320">AZERBAIJAN</option>
                                <option value="1321">SIAM</option>
                                <option value="1322">KAZAKHSTAN</option>
                                <option value="1323">TAJIKISTAN</option>
                                <option value="1400">EUROPEAN</option>
                                <option value="1401">BRITISH</option>
                                <option value="1402">ALGERIA</option>
                                <option value="1403">ANTIGUA-BARBUDA</option>
                                <option value="1404">AUSTRALIA</option>
                                <option value="1405">ANGOLA</option>
                                <option value="1406">ARGENTINA</option>
                                <option value="1407">ALBANIA</option>
                                <option value="1408">AUSTRIA</option>
                                <option value="1410">MIDDLE AFRICA</option>
                                <option value="1411">SOUTH AFRICA</option>
                                <option value="1412">BAHRAIN</option>
                                <option value="1413">BAHAMAS</option>
                                <option value="1414">BARBADOS</option>
                                <option value="1415">BELIZE</option>
                                <option value="1416">BOTSWANA</option>
                                <option value="1418">BENIN</option>
                                <option value="1419">BHUTAN</option>
                                <option value="1420">BOLIVIA</option>
                                <option value="1421">BRAZIL</option>
                                <option value="1422">BURUNDI</option>
                                <option value="1423">BULGARIA</option>
                                <option value="1424">BELGIUM</option>
                                <option value="1425">BELARUS</option>
                                <option value="1427">BOSNIA-HERZEGOVINA</option>
                                <option value="1428">CAMEROON</option>
                                <option value="1429">CHAD</option>
                                <option value="1430">CANADA</option>
                                <option value="1431">CYPRUS</option>
                                <option value="1432">CAPE VERDE</option>
                                <option value="1433">CROTIA</option>
                                <option value="1434">CHILE</option>
                                <option value="1435">COLOMBIA</option>
                                <option value="1436">COMOROS</option>
                                <option value="1437">COSTA-RICA</option>
                                <option value="1438">CUBA</option>
                                <option value="1439">DJBOUTI</option>
                                <option value="1440">DOMINICA</option>
                                <option value="1441">DAHOMEY</option>
                                <option value="1442">DENMARK</option>
                                <option value="1443">EQUADOR</option>
                                <option value="1444">EL SALVADOR</option>
                                <option value="1445">EQUATORIAL GUINEA</option>
                                <option value="1446">ETOPIA</option>
                                <option value="1448">FRANCE</option>
                                <option value="1449">FINLAND</option>
                                <option value="1451">GABON</option>
                                <option value="1452">GAMBIA</option>
                                <option value="1453">GUINEA</option>
                                <option value="1454">GUINEA-BISSAU</option>
                                <option value="1455">GHANA</option>
                                <option value="1456">GRENADA</option>
                                <option value="1457">GUYANA</option>
                                <option value="1458">GUATEMALA</option>
                                <option value="1459">GREECE</option>
                                <option value="1460">GERMANY</option>
                                <option value="1461">HAITI</option>
                                <option value="1462">HONDURAS</option>
                                <option value="1463">HUNGARY</option>
                                <option value="1464">HONG KONG</option>
                                <option value="1466">IRAQ</option>
                                <option value="1467">IVORY COAST</option>
                                <option value="1468">ISRAEL</option>
                                <option value="1469">IRELAND</option>
                                <option value="1470">ITALY</option>
                                <option value="1471">ICELAND</option>
                                <option value="1472">JORDAN</option>
                                <option value="1473">JAMAICA</option>
                                <option value="1475">KUWAIT</option>
                                <option value="1476">KENYA</option>
                                <option value="1477">KIRIBATI</option>
                                <option value="1479">KOREA(UTARA)</option>
                                <option value="1480">KEMBOJA</option>
                                <option value="1481">LEBANON</option>
                                <option value="1482">LIBYA</option>
                                <option value="1483">LESOTHO</option>
                                <option value="1484">LAOS</option>
                                <option value="1485">LIBERIA</option>
                                <option value="1486">LUXEMBOURG</option>
                                <option value="1487">MALI</option>
                                <option value="1488">MALDIVES</option>
                                <option value="1489">MAURITANIA</option>
                                <option value="1490">MOROCCO</option>
                                <option value="1491">MALAWI</option>
                                <option value="1493">MADAGASCAR</option>
                                <option value="1494">MAURITIUS</option>
                                <option value="1495">MEXICO</option>
                                <option value="1496">MOZAMBIQUE</option>
                                <option value="1497">MONGOLIA</option>
                                <option value="1498">MESIR</option>
                                <option value="1499">MYANMAR</option>
                                <option value="1500">LAIN-LAIN</option>
                                <option value="1501">NAMIBIA</option>
                                <option value="1502">NAURU</option>
                                <option value="1503">NEW ZEALAND</option>
                                <option value="1504">NIGERIA</option>
                                <option value="1505">NEPAL</option>
                                <option value="1506">NICARAGUA</option>
                                <option value="1507">NETHERLAND</option>
                                <option value="1508">NORWAY</option>
                                <option value="1509">OMAN</option>
                                <option value="1510">PAPUA NEW GUINEA</option>
                                <option value="1511">PALESTIN</option>
                                <option value="1512">PANAMA</option>
                                <option value="1513">PARAGUAY</option>
                                <option value="1514">PERU</option>
                                <option value="1515">POLAND</option>
                                <option value="1517">QATAR</option>
                                <option value="1518">ROMANIA</option>
                                <option value="1519">RWANDA</option>
                                <option value="1520">REPUBLIK CZECH</option>
                                <option value="1521">REPUBLIK SLOVAKIA</option>
                                <option value="1522">SENEGAL</option>
                                <option value="1523">SIERRA LEONE</option>
                                <option value="1524">SOMALIA</option>
                                <option value="1525">SUDAN</option>
                                <option value="1526">SYRIA</option>
                                <option value="1527">ST.LUCIA</option>
                                <option value="1528">ST.VINCENT</option>
                                <option value="1529">SYCHELLES</option>
                                <option value="1530">SOLOMON ISLAND</option>
                                <option value="1531">SRI LANKA</option>
                                <option value="1532">SWAZILAND</option>
                                <option value="1533">SAMOA</option>
                                <option value="1534">SAO TOME & PRINCIPE</option>
                                <option value="1535">SURINAM</option>
                                <option value="1536">SAMOA BARAT</option>
                                <option value="1537">SWEDEN</option>
                                <option value="1538">SPAIN</option>
                                <option value="1539">SWITZERLAND</option>
                                <option value="1540">TUNISIA</option>
                                <option value="1541">TURKEY</option>
                                <option value="1542">TANZANIA</option>
                                <option value="1543">TONGA</option>
                                <option value="1544">TRINIDAD & TOBAGO</option>
                                <option value="1545">TUVALI</option>
                                <option value="1547">TOGO</option>
                                <option value="1548">TAIWAN</option>
                                <option value="1549">UGANDA</option>
                                <option value="1550">UNITED ARAB EMIRATES</option>
                                <option value="1551">UPPER VOLTA</option>
                                <option value="1552">URUGUAY</option>
                                <option value="1553">RUSSIA</option>
                                <option value="1554">UKRAINE</option>
                                <option value="1555">UNITED STATES OF AMERICA</option>
                                <option value="1556">VANUATU</option>
                                <option value="1557">VENEZUELA</option>
                                <option value="1559">YEMEN</option>
                                <option value="1560">YUGOSLAVIA</option>
                                <option value="1561">MACEDONIA</option>
                                <option value="1562">ZAIRE</option>
                                <option value="1563">ZAMBIA</option>
                                <option value="1564">ZIMBABWE</option>
                                <option value="1565">SLOVENIA</option>
                                <option value="1566">TURKMENISTAN</option>
                                <option value="9999">MAKLUMAT TIADA</option>
                                <option value="1300">LAIN-LAIN ASIA</option>
                                <option value="1301">ARAB</option>
                                <option value="1302">BURMESE</option>
                                <option value="1303">EURASIAN</option>
                                <option value="1304">FIJIAN</option>
                                <option value="1305">FILIPINO</option>
                                <option value="1306">GURKHA</option>
                                <option value="1307">JAPANESE</option>
                                <option value="1308">KHMER</option>
                                <option value="1309">KOREAN</option>
                                <option value="1310">MALTESE</option>
                                <option value="1311">PORTUGESE</option>
                                <option value="1312">THAI</option>
                                <option value="1313">VIETNAMESE</option>
                                <option value="1314">IRANIAN</option>
                                <option value="1315">AFGHAN</option>
                                <option value="1316">CAUCASIAN</option>
                                <option value="1317">KYRGYZ</option>
                                <option value="1318">UBIAN</option>
                                <option value="1319">UZBEKISTAN</option>
                                <option value="1320">AZERBAIJAN</option>
                                <option value="1321">SIAM</option>
                                <option value="1322">KAZAKHSTAN</option>
                                <option value="1323">TAJIKISTAN</option>
                                <option value="1400">EUROPEAN</option>
                                <option value="1401">BRITISH</option>
                                <option value="1402">ALGERIA</option>
                                <option value="1403">ANTIGUA-BARBUDA</option>
                                <option value="1404">AUSTRALIA</option>
                                <option value="1405">ANGOLA</option>
                                <option value="1406">ARGENTINA</option>
                                <option value="1407">ALBANIA</option>
                                <option value="1408">AUSTRIA</option>
                                <option value="1410">MIDDLE AFRICA</option>
                                <option value="1411">SOUTH AFRICA</option>
                                <option value="1412">BAHRAIN</option>
                                <option value="1413">BAHAMAS</option>
                                <option value="1414">BARBADOS</option>
                                <option value="1415">BELIZE</option>
                                <option value="1416">BOTSWANA</option>
                                <option value="1418">BENIN</option>
                                <option value="1419">BHUTAN</option>
                                <option value="1420">BOLIVIA</option>
                                <option value="1421">BRAZIL</option>
                                <option value="1422">BURUNDI</option>
                                <option value="1423">BULGARIA</option>
                                <option value="1424">BELGIUM</option>
                                <option value="1425">BELARUS</option>
                                <option value="1427">BOSNIA-HERZEGOVINA</option>
                                <option value="1428">CAMEROON</option>
                                <option value="1429">CHAD</option>
                                <option value="1430">CANADA</option>
                                <option value="1431">CYPRUS</option>
                                <option value="1432">CAPE VERDE</option>
                                <option value="1433">CROTIA</option>
                                <option value="1434">CHILE</option>
                                <option value="1435">COLOMBIA</option>
                                <option value="1436">COMOROS</option>
                                <option value="1437">COSTA-RICA</option>
                                <option value="1438">CUBA</option>
                                <option value="1439">DJBOUTI</option>
                                <option value="1440">DOMINICA</option>
                                <option value="1441">DAHOMEY</option>
                                <option value="1442">DENMARK</option>
                                <option value="1443">EQUADOR</option>
                                <option value="1444">EL SALVADOR</option>
                                <option value="1445">EQUATORIAL GUINEA</option>
                                <option value="1446">ETOPIA</option>
                                <option value="1448">FRANCE</option>
                                <option value="1449">FINLAND</option>
                                <option value="1451">GABON</option>
                                <option value="1452">GAMBIA</option>
                                <option value="1453">GUINEA</option>
                                <option value="1454">GUINEA-BISSAU</option>
                                <option value="1455">GHANA</option>
                                <option value="1456">GRENADA</option>
                                <option value="1457">GUYANA</option>
                                <option value="1458">GUATEMALA</option>
                                <option value="1459">GREECE</option>
                                <option value="1460">GERMANY</option>
                                <option value="1461">HAITI</option>
                                <option value="1462">HONDURAS</option>
                                <option value="1463">HUNGARY</option>
                                <option value="1464">HONG KONG</option>
                                <option value="1466">IRAQ</option>
                                <option value="1467">IVORY COAST</option>
                                <option value="1468">ISRAEL</option>
                                <option value="1469">IRELAND</option>
                                <option value="1470">ITALY</option>
                                <option value="1471">ICELAND</option>
                                <option value="1472">JORDAN</option>
                                <option value="1473">JAMAICA</option>
                                <option value="1475">KUWAIT</option>
                                <option value="1476">KENYA</option>
                                <option value="1477">KIRIBATI</option>
                                <option value="1479">KOREA(UTARA)</option>
                                <option value="1480">KEMBOJA</option>
                                <option value="1481">LEBANON</option>
                                <option value="1482">LIBYA</option>
                                <option value="1483">LESOTHO</option>
                                <option value="1484">LAOS</option>
                                <option value="1485">LIBERIA</option>
                                <option value="1486">LUXEMBOURG</option>
                                <option value="1487">MALI</option>
                                <option value="1488">MALDIVES</option>
                                <option value="1489">MAURITANIA</option>
                                <option value="1490">MOROCCO</option>
                                <option value="1491">MALAWI</option>
                                <option value="1493">MADAGASCAR</option>
                                <option value="1494">MAURITIUS</option>
                                <option value="1495">MEXICO</option>
                                <option value="1496">MOZAMBIQUE</option>
                                <option value="1497">MONGOLIA</option>
                                <option value="1498">MESIR</option>
                                <option value="1499">MYANMAR</option>
                                <option value="1500">LAIN-LAIN</option>
                                <option value="1501">NAMIBIA</option>
                                <option value="1502">NAURU</option>
                                <option value="1503">NEW ZEALAND</option>
                                <option value="1504">NIGERIA</option>
                                <option value="1505">NEPAL</option>
                                <option value="1506">NICARAGUA</option>
                                <option value="1507">NETHERLAND</option>
                                <option value="1508">NORWAY</option>
                                <option value="1509">OMAN</option>
                                <option value="1510">PAPUA NEW GUINEA</option>
                                <option value="1511">PALESTIN</option>
                                <option value="1512">PANAMA</option>
                                <option value="1513">PARAGUAY</option>
                                <option value="1514">PERU</option>
                                <option value="1515">POLAND</option>
                                <option value="1517">QATAR</option>
                                <option value="1518">ROMANIA</option>
                                <option value="1519">RWANDA</option>
                                <option value="1520">REPUBLIK CZECH</option>
                                <option value="1521">REPUBLIK SLOVAKIA</option>
                                <option value="1522">SENEGAL</option>
                                <option value="1523">SIERRA LEONE</option>
                                <option value="1524">SOMALIA</option>
                                <option value="1525">SUDAN</option>
                                <option value="1526">SYRIA</option>
                                <option value="1527">ST.LUCIA</option>
                                <option value="1528">ST.VINCENT</option>
                                <option value="1529">SYCHELLES</option>
                                <option value="1530">SOLOMON ISLAND</option>
                                <option value="1531">SRI LANKA</option>
                                <option value="1532">SWAZILAND</option>
                                <option value="1533">SAMOA</option>
                                <option value="1534">SAO TOME & PRINCIPE</option>
                                <option value="1535">SURINAM</option>
                                <option value="1536">SAMOA BARAT</option>
                                <option value="1537">SWEDEN</option>
                                <option value="1538">SPAIN</option>
                                <option value="1539">SWITZERLAND</option>
                                <option value="1540">TUNISIA</option>
                                <option value="1541">TURKEY</option>
                                <option value="1542">TANZANIA</option>
                                <option value="1543">TONGA</option>
                                <option value="1544">TRINIDAD & TOBAGO</option>
                                <option value="1545">TUVALI</option>
                                <option value="1547">TOGO</option>
                                <option value="1548">TAIWAN</option>
                                <option value="1549">UGANDA</option>
                                <option value="1550">UNITED ARAB EMIRATES</option>
                                <option value="1551">UPPER VOLTA</option>
                                <option value="1552">URUGUAY</option>
                                <option value="1553">RUSSIA</option>
                                <option value="1554">UKRAINE</option>
                                <option value="1555">UNITED STATES OF AMERICA</option>
                                <option value="1556">VANUATU</option>
                                <option value="1557">VENEZUELA</option>
                                <option value="1559">YEMEN</option>
                                <option value="1560">YUGOSLAVIA</option>
                                <option value="1561">MACEDONIA</option>
                                <option value="1562">ZAIRE</option>
                                <option value="1563">ZAMBIA</option>
                                <option value="1564">ZIMBABWE</option>
                                <option value="1565">SLOVENIA</option>
                                <option value="1566">TURKMENISTAN</option>
                                <option value="9999">MAKLUMAT TIADA</option>
                                </select>
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Religion: <span class="tx-danger">*</span></label>
                <select name="religion" class="form-control select2">
                <option value="">SELECT</option>
                                <option value="1"selected="selected">ISLAM</option>
                                <option value="2">CHRISTIAN</option>
                                <option value="3">BUDDHA</option>
                                <option value="4">HINDU</option>
                                <option value="5">SIKHISM</option>
                                <option value="A">TAO</option>
                                <option value="B">CONFUSIANISM</option>
                                <option value="C">BAHAI</option>
                                <option value="D">JUDAISM</option>
                                <option value="6">NO RELIGION</option>
                                <option value="7">OTHERS</option>
                                <option value="9">NO INFORMATION</option>
                                </select>
                </div><!-- form group -->
            </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
            <div class="col-md-12 col-lg-12">
                <div class="form-group">
                <label class="form-control-label">Address: <span class="tx-danger">*</span></label>
                <input id="" class="form-control" style="text-transform:uppercase" name="add1" placeholder=" " value="KAMPUNG TANJUNG LABIAN, LAHAD  DATU SABA" type="text" required>
                <br>
                <input id="" class="form-control" style="text-transform:uppercase" name="add2" placeholder=" " value="91150, JALAN TUNGKU" type="text" required>
                </div><!-- form group -->
            </div><!-- col -->
            </div><!-- row -->
            <!--div class="row row-sm">
            <div class="col-md-12 col-lg-12">
                <div class="form-group">
                <label class="form-control-label">Address Line 2: <span class="tx-danger">*</span></label>
                <input id="" class="form-control" style="text-transform:uppercase" name="add2" placeholder="Enter Address EG: House No., Building, Street Name" value="91150, JALAN TUNGKU" type="text" required>
                </div><!-- form group -->
            <!--/div><!-- col -->
            <!--/div--><!-- row -->
            <div class="row row-sm">
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">City: <span class="tx-danger">*</span></label>
                <input id="city" class="form-control" style="text-transform:uppercase" placeholder="Enter City" name="city" type="text" value="LAHAD DATU" required>
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-md-5 col-lg-4 mg-t-20 mg-md-t-0">
                <div class="form-group">
                <label class="form-control-label">Postcode: <span class="tx-danger">*</span></label>
                <input id="" class="form-control" placeholder="ENTER POSTCODE" name="postcode" value="91150" type="text"  onKeyPress="if(this.value.length==5) return false;" required>
                </div><!-- form group -->
            </div><!--col-->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                <div class="form-group">
                <label class="form-control-label">State: <span class="tx-danger">*</span></label>
                <select name="state" class="form-control select2" required>
                <option value="NULL">SELECT</option>
                                <option value="MYS01">JOHOR</option>
                                <option value="MYS02">KEDAH</option>
                                <option value="MYS03">KELANTAN</option>
                                <option value="MYS04">MELAKA</option>
                                <option value="MYS05">NEGERI SEMBILAN</option>
                                <option value="MYSLL">OTHERS</option>
                                <option value="MYS06">PAHANG</option>
                                <option value="MYS08">PERAK</option>
                                <option value="MYS09">PERLIS</option>
                                <option value="MYS07">PULAU PINANG</option>
                                <option value="MYS12"selected="selected">SABAH</option>
                                <option value="MYS13">SARAWAK</option>
                                <option value="MYS10">SELANGOR</option>
                                <option value="MYS11">TERENGGANU</option>
                                <option value="MYS15">WILAYAH PERSEKUTUAN</option>
                                </select>
                </div><!-- form group -->
            </div><!-- col-4 -->
            </div><!-- row -->
            <div class="row row-sm">
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">OKU Number: <span class="tx-danger">if applicable</span></label>
                <input id="nooku" class="form-control" placeholder="ENTER OKU NUMBER" name="nooku" type="text" value="" >
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-lg-8 mg-t-20 mg-lg-t-0">
                <div class="form-group">
                <label class="form-control-label">OKU Type: <span class="tx-danger">if applicable</span></label>
                <select name="okutype" class="form-control select2">
                <option value="NULL">SELECT</option>
                                <option value="B">KETIDAKUPAYAAN PENGLIHATAN (BUTA)</option>
                                <option value="D">KETIDAKUPAYAAN PENDENGARAN (PEKAK GUNA ALAT)</option>
                                <option value="R">KETIIDAKUPAYAAN PENDENGARAN ( RABUN (TIDAK BERKACA MATA))</option>
                                <option value="W">KETIDAKUPAYAAN PENGLIHATAN (BUTA WARNA)</option>
                                <option value="P">KETIDAKUPAYAAN PENDENGARAN (PEKAK)</option>
                                <option value="S">KETIDAKUPAYAAN PERTUTURAN (BISU)</option>
                                <option value="J">KETIDAKUPAYAAN FIZIKAL (KERDIL)</option>
                                <option value="G">KETIDAKUPAYAAN PERTUTURAN (GAGAP)</option>
                                <option value="K">KETIDAKUPAYAAN FIZIKAL (KAKI)</option>
                                <option value="T">KETIDAKUPAYAAN FIZIKAL (TANGAN)</option>
                                <option value="L">KETIDAKUPAYAAN FIZIKAL (LUMPUH)</option>
                                <option value="C">KETIDAKUPAYAAN FIZIKAL ( LAIN - LAIN)</option>
                                <option value="N">KETIDAKUPAYAAN PERTUTURAN (SENGAU)</option>
                                </select>
                </div><!-- form group -->
            </div><!-- col-4 -->
            </div><!-- row -->
                        </br>
            <input type='hidden' name='ic' value='011014121019'>
            <input type="submit" name="submit" value="Update" class="btn btn-az-primary btn-block">
            </form>
            </br>
</div>

<div id="Parent" class="tabcontent">
</br>
  <h3>Parent's Info</h3>
  </br>
  <form action="save_parent_agent.php" method="post">     
<p class="mg-b-20"></p>
<div class="row row-sm">
  <div class="col-md-12 col-lg-12">
    <div class="form-group">
      <label class="form-control-label">Name of Parent/Guardian2: <span class="tx-danger">*</span></label>
      <input id="namep1" class="form-control" style="text-transform:uppercase" name="namep1" placeholder="Enter Full Name" value="" type="text" required>
    </div><!-- form group -->
  </div><!-- col -->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">IC/Passport Number: <span class="tx-danger">*</span></label>
      <input id="icp1" class="form-control" name="icp1" placeholder="Enter IC PARENT/GUARDIAN1" type="text" value="" required>
    </div><!-- form group -->
  </div><!--col-->
  <div class="col-lg-4 mg-t-20 mg-lg-t-0">
    <div class="form-group">
      <label class="form-control-label">Nationality: <span class="tx-danger">*</span></label>
      <select name="nationp1" class="form-control select2" required>
      <option value="">SELECT</option>
            <option value="0">BUKAN WARGANEGARA</option>
            <option value="1">WARGANEGARA</option>
            <option value="2">PEMASTAUTIN TETAP</option>
            </select>
    </div><!-- form group -->
  </div><!-- col-4 -->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
      <input id="emailp1" class="form-control" placeholder="ENTER EMAIL" name="emailp1" type="text" value="" required>
    </div><!-- form group -->
  </div><!-- col -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
      <input id="phonep1" class="form-control" placeholder="ENTER PHONE" name="phonep1" type="text" value="" required>
    </div><!-- form group -->
  </div><!-- col -->  
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Marital Status: <span class="tx-danger">*</span></label>
      <select name="maritalp1" class="form-control select2" required>
      <option value="">SELECT</option>
            <option value="B">BUJANG</option>
            <option value="D">DUDA</option>
            <option value="J">JANDA</option>
            <option value="K">KAHWIN</option>
            <option value="L">BALU</option>
            </select>
    </div><!-- form group -->
  </div><!-- col -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Race: <span class="tx-danger">*</span></label>
      <select name="racep1" class="form-control select2" required>
      <option value="">SELECT</option>
            <option value="0100">MELAYU</option>
            <option value="0200">CINA</option>
            <option value="0300">INDIA</option>
            <option value="0800">ANAK NEGERI SABAH</option>
            <option value="1000">ANAK NEGERI SARAWAK</option>
            <option value="1200">ORANG ASLI </option>
            <option value="0000">LAIN-LAIN</option>
            <option value="0101">BUGIS</option>
            <option value="0102">BOYAN</option>
            <option value="0103">BANJAR</option>
            <option value="0104">JAWA</option>
            <option value="0105">JAWI PEKAN</option>
            <option value="0106">MINANGKABAU</option>
            <option value="0201">CANTONESE</option>
            <option value="0202">FOOCHOW</option>
            <option value="0203">HAINANESE</option>
            <option value="0204">HENGHUA</option>
            <option value="0205">HOKCHIA</option>
            <option value="0206">HOKCHIU</option>
            <option value="0207">HOKKIEN</option>
            <option value="0208">KHEK</option>
            <option value="0209">KWONGSAI </option>
            <option value="0210">TEOCHEW</option>
            <option value="0211">KONGFOO</option>
            <option value="0212">HYLAM</option>
            <option value="0213">KENGCHU</option>
            <option value="0214">KOCHOU</option>
            <option value="0301">MALAYALI</option>
            <option value="302 ">PUNJABI</option>
            <option value="0303">SIKH</option>
            <option value="0304">TAMIL</option>
            <option value="0305">TELEGU</option>
            <option value="0306">MALABARI</option>
            <option value="0307">INDIA MUSLIM</option>
            <option value="0308">TELUGU</option>
            <option value="0309">ORISSA</option>
            <option value="0400">BANGLADESHI</option>
            <option value="0500">PAKISTANI</option>
            <option value="0600">SRI LANKA</option>
            <option value="0601">TAMIL SRI LANKA</option>
            <option value="0602">MELAYU SRI LANKA</option>
            <option value="0603">SINHALESE</option>
            <option value="0604">CEYLONESE</option>
            <option value="0700">INDONESIA</option>
            <option value="0701">TIDUNG</option>
            <option value="0801">BAJAU</option>
            <option value="0802">DUSUN</option>
            <option value="0803">KADAZAN</option>
            <option value="0804">MURUT</option>
            <option value="0805">SINO-NATIVE</option>
            <option value="0806">SULUK</option>
            <option value="0807">TIDUNG</option>
            <option value="0901">BINADAN</option>
            <option value="0902">BISAYA</option>
            <option value="0903">BONGOL</option>
            <option value="0904">BRUNEI</option>
            <option value="0905">DUMPAS</option>
            <option value="0906">IRANUN</option>
            <option value="0907">IDAHAN</option>
            <option value="0908">KWIJAU</option>
            <option value="0909">KEDAYAN</option>
            <option value="0910">LINGKABAU</option>
            <option value="0911">LUNDAYEH</option>
            <option value="0912">LASAU</option>
            <option value="0913">MELANAU</option>
            <option value="0914">MANGKAAK</option>
            <option value="0915">MATAGANG</option>
            <option value="0916">MINOKOK</option>
            <option value="0917">MELAYU SABAH</option>
            <option value="0918">MOMOGUN</option>
            <option value="0919">PAITAN</option>
            <option value="0920">RUMANAU</option>
            <option value="0921">RUNGUS</option>
            <option value="0922">SUNGAI</option>
            <option value="0923">SONSONGAN</option>
            <option value="0924">SINULIHAN</option>
            <option value="0925">TOMBONUO</option>
            <option value="0926">TAGAL</option>
            <option value="0927">TINAGAS</option>
            <option value="0928">COCOS</option>
            <option value="0929">KIMARAGANG</option>
            <option value="0930">BOLONGAN</option>
            <option value="0931">BUTON</option>
            <option value="0932">KAGAYAN</option>
            <option value="0933">BALABAK</option>
            <option value="0934">KADAZAN-SINO</option>
            <option value="0935">DUSUN-SINO</option>
            <option value="0936">BAJAU-SINO</option>
            <option value="0937">MURUT-SINO</option>
            <option value="0938">BRUNEI-SINO</option>
            <option value="0939">RUNGUS-SINO</option>
            <option value="0940">BISAYA-SINO</option>
            <option value="0941">IDAHAN-SINO</option>
            <option value="0942">IRANUN-SINO</option>
            <option value="0943">KEDAYAN-SINO</option>
            <option value="0944">SUNGAI-SINO</option>
            <option value="0945">LUNDAYEH-SINO</option>
            <option value="0946">SULUK-SINO</option>
            <option value="0947">TIDUNG-SINO</option>
            <option value="0948">BOLONGAN-SINO</option>
            <option value="0949">BALABAK-SINO</option>
            <option value="1001">MELAYU SARAWAK</option>
            <option value="1002">MELANAU</option>
            <option value="1003">KEDAYAN</option>
            <option value="1004">IBAN ATAU SEA DAYAK</option>
            <option value="0203">HAINANESE</option>
            <option value="0204">HENGHUA</option>
            <option value="0205">HOKCHIA</option>
            <option value="0206">HOKCHIU</option>
            <option value="0207">HOKKIEN</option>
            <option value="0208">KHEK</option>
            <option value="0209">KWONGSAI </option>
            <option value="0210">TEOCHEW</option>
            <option value="0211">KONGFOO</option>
            <option value="0212">HYLAM</option>
            <option value="0213">KENGCHU</option>
            <option value="0214">KOCHOU</option>
            <option value="0301">MALAYALI</option>
            <option value="302 ">PUNJABI</option>
            <option value="0303">SIKH</option>
            <option value="0304">TAMIL</option>
            <option value="0305">TELEGU</option>
            <option value="0306">MALABARI</option>
            <option value="0307">INDIA MUSLIM</option>
            <option value="0308">TELUGU</option>
            <option value="0309">ORISSA</option>
            <option value="0400">BANGLADESHI</option>
            <option value="0500">PAKISTANI</option>
            <option value="0600">SRI LANKA</option>
            <option value="0601">TAMIL SRI LANKA</option>
            <option value="0602">MELAYU SRI LANKA</option>
            <option value="0603">SINHALESE</option>
            <option value="0604">CEYLONESE</option>
            <option value="0700">INDONESIA</option>
            <option value="0701">TIDUNG</option>
            <option value="0801">BAJAU</option>
            <option value="0802">DUSUN</option>
            <option value="0803">KADAZAN</option>
            <option value="0804">MURUT</option>
            <option value="0805">SINO-NATIVE</option>
            <option value="0806">SULUK</option>
            <option value="0807">TIDUNG</option>
            <option value="0901">BINADAN</option>
            <option value="0902">BISAYA</option>
            <option value="0903">BONGOL</option>
            <option value="0904">BRUNEI</option>
            <option value="0905">DUMPAS</option>
            <option value="0906">IRANUN</option>
            <option value="0907">IDAHAN</option>
            <option value="0908">KWIJAU</option>
            <option value="0909">KEDAYAN</option>
            <option value="0910">LINGKABAU</option>
            <option value="0911">LUNDAYEH</option>
            <option value="0912">LASAU</option>
            <option value="0913">MELANAU</option>
            <option value="0914">MANGKAAK</option>
            <option value="0915">MATAGANG</option>
            <option value="0916">MINOKOK</option>
            <option value="0917">MELAYU SABAH</option>
            <option value="0918">MOMOGUN</option>
            <option value="0919">PAITAN</option>
            <option value="0920">RUMANAU</option>
            <option value="0921">RUNGUS</option>
            <option value="0922">SUNGAI</option>
            <option value="0923">SONSONGAN</option>
            <option value="0924">SINULIHAN</option>
            <option value="0925">TOMBONUO</option>
            <option value="0926">TAGAL</option>
            <option value="0927">TINAGAS</option>
            <option value="0928">COCOS</option>
            <option value="0929">KIMARAGANG</option>
            <option value="0930">BOLONGAN</option>
            <option value="0931">BUTON</option>
            <option value="0932">KAGAYAN</option>
            <option value="0933">BALABAK</option>
            <option value="0934">KADAZAN-SINO</option>
            <option value="0935">DUSUN-SINO</option>
            <option value="0936">BAJAU-SINO</option>
            <option value="0937">MURUT-SINO</option>
            <option value="0938">BRUNEI-SINO</option>
            <option value="0939">RUNGUS-SINO</option>
            <option value="0940">BISAYA-SINO</option>
            <option value="0941">IDAHAN-SINO</option>
            <option value="0942">IRANUN-SINO</option>
            <option value="0943">KEDAYAN-SINO</option>
            <option value="0944">SUNGAI-SINO</option>
            <option value="0945">LUNDAYEH-SINO</option>
            <option value="0946">SULUK-SINO</option>
            <option value="0947">TIDUNG-SINO</option>
            <option value="0948">BOLONGAN-SINO</option>
            <option value="0949">BALABAK-SINO</option>
            <option value="1001">MELAYU SARAWAK</option>
            <option value="1002">MELANAU</option>
            <option value="1003">KEDAYAN</option>
            <option value="1004">IBAN ATAU SEA DAYAK</option>
            <option value="0914">MANGKAAK</option>
            <option value="0915">MATAGANG</option>
            <option value="0916">MINOKOK</option>
            <option value="0917">MELAYU SABAH</option>
            <option value="0918">MOMOGUN</option>
            <option value="0919">PAITAN</option>
            <option value="0920">RUMANAU</option>
            <option value="0921">RUNGUS</option>
            <option value="0922">SUNGAI</option>
            <option value="0923">SONSONGAN</option>
            <option value="0924">SINULIHAN</option>
            <option value="0925">TOMBONUO</option>
            <option value="0926">TAGAL</option>
            <option value="0927">TINAGAS</option>
            <option value="0928">COCOS</option>
            <option value="0929">KIMARAGANG</option>
            <option value="0930">BOLONGAN</option>
            <option value="0931">BUTON</option>
            <option value="0932">KAGAYAN</option>
            <option value="0933">BALABAK</option>
            <option value="0934">KADAZAN-SINO</option>
            <option value="0935">DUSUN-SINO</option>
            <option value="0936">BAJAU-SINO</option>
            <option value="0937">MURUT-SINO</option>
            <option value="0938">BRUNEI-SINO</option>
            <option value="0939">RUNGUS-SINO</option>
            <option value="0940">BISAYA-SINO</option>
            <option value="0941">IDAHAN-SINO</option>
            <option value="0942">IRANUN-SINO</option>
            <option value="0943">KEDAYAN-SINO</option>
            <option value="0944">SUNGAI-SINO</option>
            <option value="0945">LUNDAYEH-SINO</option>
            <option value="0946">SULUK-SINO</option>
            <option value="0947">TIDUNG-SINO</option>
            <option value="0948">BOLONGAN-SINO</option>
            <option value="0949">BALABAK-SINO</option>
            <option value="1001">MELAYU SARAWAK</option>
            <option value="1002">MELANAU</option>
            <option value="1003">KEDAYAN</option>
            <option value="1004">IBAN ATAU SEA DAYAK</option>
            <option value="0913">MELANAU</option>
            <option value="0914">MANGKAAK</option>
            <option value="0915">MATAGANG</option>
            <option value="0916">MINOKOK</option>
            <option value="0917">MELAYU SABAH</option>
            <option value="0918">MOMOGUN</option>
            <option value="0919">PAITAN</option>
            <option value="0920">RUMANAU</option>
            <option value="0921">RUNGUS</option>
            <option value="0922">SUNGAI</option>
            <option value="0923">SONSONGAN</option>
            <option value="0924">SINULIHAN</option>
            <option value="0925">TOMBONUO</option>
            <option value="0926">TAGAL</option>
            <option value="0927">TINAGAS</option>
            <option value="0928">COCOS</option>
            <option value="0929">KIMARAGANG</option>
            <option value="0930">BOLONGAN</option>
            <option value="0931">BUTON</option>
            <option value="0932">KAGAYAN</option>
            <option value="0933">BALABAK</option>
            <option value="0934">KADAZAN-SINO</option>
            <option value="0935">DUSUN-SINO</option>
            <option value="0936">BAJAU-SINO</option>
            <option value="0937">MURUT-SINO</option>
            <option value="0938">BRUNEI-SINO</option>
            <option value="0939">RUNGUS-SINO</option>
            <option value="0940">BISAYA-SINO</option>
            <option value="0941">IDAHAN-SINO</option>
            <option value="0942">IRANUN-SINO</option>
            <option value="0943">KEDAYAN-SINO</option>
            <option value="0944">SUNGAI-SINO</option>
            <option value="0945">LUNDAYEH-SINO</option>
            <option value="0946">SULUK-SINO</option>
            <option value="0947">TIDUNG-SINO</option>
            <option value="0948">BOLONGAN-SINO</option>
            <option value="0949">BALABAK-SINO</option>
            <option value="1001">MELAYU SARAWAK</option>
            <option value="1002">MELANAU</option>
            <option value="1003">KEDAYAN</option>
            <option value="1004">IBAN ATAU SEA DAYAK</option>
            <option value="0102">BIDAYUH ATAU LAND DAYAK</option>
            <option value="0102">KAYAN</option>
            <option value="0102">KENYAH</option>
            <option value="1010">PUNAN</option>
            <option value="1011">PENAN</option>
            <option value="1012">TRING</option>
            <option value="1013">LOGAT</option>
            <option value="1014">BAH MALI</option>
            <option value="1015">NAROM</option>
            <option value="1016">BAKONG</option>
            <option value="1017">MIRIEK</option>
            <option value="1018">DALI</option>
            <option value="1019">SEGAN</option>
            <option value="1101">BISAYA</option>
            <option value="1102">BERAWAN</option>
            <option value="1103">BELOT</option>
            <option value="1104">BHUKET ATAU UKIT</option>
            <option value="1105">BALAU</option>
            <option value="1106">BATANG AI</option>
            <option value="1107">BATU ELAH</option>
            <option value="1108">BAKETAN</option>
            <option value="1109">BINTULU</option>
            <option value="1110">BADENG</option>
            <option value="1111">DUSUN</option>
            <option value="1112">JAGOI</option>
            <option value="1113">LAKIPUT</option>
            <option value="1114">KAJANG</option>
            <option value="1115">KEJAMAN</option>
            <option value="1116">KANOWIT</option>
            <option value="1117">LIRONG</option>
            <option value="1118">LEMANAK</option>
            <option value="1119">LAHANAN</option>
            <option value="1120">LISUM ATAU LUGUM</option>
            <option value="1121">MATU</option>
            <option value="1122">MEMALOH</option>
            <option value="1123">MELIKIN</option>
            <option value="1124">MELAING</option>
            <option value="1125">NGORIK ATAU MUREK</option>
            <option value="1126">MENONDO</option>
            <option value="1127">JAMOK</option>
            <option value="1128">SEBOP</option>
            <option value="1129">SEDUAN</option>
            <option value="1130">SEKAPAN</option>
            <option value="1131">SEGALANG</option>
            <option value="1132">SIHAN</option>
            <option value="1133">SEPING</option>
            <option value="1134">SARIBAS</option>
            <option value="1135">SEBUYAU</option>
            <option value="1136">SKRANG</option>
            <option value="1137">SABAN</option>
            <option value="0102">BIDAYUH ATAU LAND DAYAK</option>
            <option value="0102">KAYAN</option>
            <option value="0102">KENYAH</option>
            <option value="1137">SABAN</option>
            <option value="1138">SELAKAN</option>
            <option value="1139">SELAKO</option>
            <option value="1140">TAGAL</option>
            <option value="1141">TABUN</option>
            <option value="1142">TUTONG</option>
            <option value="1143">TANJONG</option>
            <option value="1144">TATAU</option>
            <option value="1145">TAUP</option>
            <option value="1146">UKIT</option>
            <option value="1147">UNKOP</option>
            <option value="1148">ULU AI</option>
            <option value="1149">TORAJA</option>
            <option value="1150">TIMOR</option>
            <option value="1151">MENADO</option>
            <option value="1152">MANURA</option>
            <option value="1153">BATAK</option>
            <option value="1154">PATHAN</option>
            <option value="1155">TONGANS</option>
            <option value="1201">JAKUN</option>
            <option value="1202">NEGRITO</option>
            <option value="1203">SAKAI</option>
            <option value="1204">SEMAI</option>
            <option value="1205">SEMALAI</option>
            <option value="1206">TEMIAR</option>
            <option value="1207">SENOI</option>
            <option value="1118">LEMANAK</option>
            <option value="1119">LAHANAN</option>
            <option value="1120">LISUM ATAU LUGUM</option>
            <option value="1121">MATU</option>
            <option value="1122">MEMALOH</option>
            <option value="1123">MELIKIN</option>
            <option value="1124">MELAING</option>
            <option value="1125">NGORIK ATAU MUREK</option>
            <option value="1126">MENONDO</option>
            <option value="1127">JAMOK</option>
            <option value="1128">SEBOP</option>
            <option value="1129">SEDUAN</option>
            <option value="1130">SEKAPAN</option>
            <option value="1131">SEGALANG</option>
            <option value="1132">SIHAN</option>
            <option value="1133">SEPING</option>
            <option value="1134">SARIBAS</option>
            <option value="1135">SEBUYAU</option>
            <option value="1136">SKRANG</option>
            <option value="1108">BAKETAN</option>
            <option value="1109">BINTULU</option>
            <option value="1110">BADENG</option>
            <option value="1111">DUSUN</option>
            <option value="1112">JAGOI</option>
            <option value="1113">LAKIPUT</option>
            <option value="1114">KAJANG</option>
            <option value="1115">KEJAMAN</option>
            <option value="1116">KANOWIT</option>
            <option value="1117">LIRONG</option>
            <option value="1017">MIRIEK</option>
            <option value="1018">DALI</option>
            <option value="1019">SEGAN</option>
            <option value="1101">BISAYA</option>
            <option value="1102">BERAWAN</option>
            <option value="1103">BELOT</option>
            <option value="1104">BHUKET ATAU UKIT</option>
            <option value="1105">BALAU</option>
            <option value="1106">BATANG AI</option>
            <option value="1107">BATU ELAH</option>
            <option value="1008">MURUT ATAU LUN BAWANG</option>
            <option value="1009">KELABIT</option>
            <option value="1010">PUNAN</option>
            <option value="1011">PENAN</option>
            <option value="1012">TRING</option>
            <option value="1013">LOGAT</option>
            <option value="1014">BAH MALI</option>
            <option value="1015">NAROM</option>
            <option value="1016">BAKONG</option>
            <option value="1300">LAIN-LAIN ASIA</option>
            <option value="1301">ARAB</option>
            <option value="1302">BURMESE</option>
            <option value="1303">EURASIAN</option>
            <option value="1304">FIJIAN</option>
            <option value="1305">FILIPINO</option>
            <option value="1306">GURKHA</option>
            <option value="1307">JAPANESE</option>
            <option value="1308">KHMER</option>
            <option value="1309">KOREAN</option>
            <option value="1310">MALTESE</option>
            <option value="1311">PORTUGESE</option>
            <option value="1312">THAI</option>
            <option value="1313">VIETNAMESE</option>
            <option value="1314">IRANIAN</option>
            <option value="1315">AFGHAN</option>
            <option value="1316">CAUCASIAN</option>
            <option value="1317">KYRGYZ</option>
            <option value="1318">UBIAN</option>
            <option value="1319">UZBEKISTAN</option>
            <option value="1320">AZERBAIJAN</option>
            <option value="1321">SIAM</option>
            <option value="1322">KAZAKHSTAN</option>
            <option value="1323">TAJIKISTAN</option>
            <option value="1400">EUROPEAN</option>
            <option value="1401">BRITISH</option>
            <option value="1402">ALGERIA</option>
            <option value="1403">ANTIGUA-BARBUDA</option>
            <option value="1404">AUSTRALIA</option>
            <option value="1405">ANGOLA</option>
            <option value="1406">ARGENTINA</option>
            <option value="1407">ALBANIA</option>
            <option value="1408">AUSTRIA</option>
            <option value="1410">MIDDLE AFRICA</option>
            <option value="1411">SOUTH AFRICA</option>
            <option value="1412">BAHRAIN</option>
            <option value="1413">BAHAMAS</option>
            <option value="1414">BARBADOS</option>
            <option value="1415">BELIZE</option>
            <option value="1416">BOTSWANA</option>
            <option value="1418">BENIN</option>
            <option value="1419">BHUTAN</option>
            <option value="1420">BOLIVIA</option>
            <option value="1421">BRAZIL</option>
            <option value="1422">BURUNDI</option>
            <option value="1423">BULGARIA</option>
            <option value="1424">BELGIUM</option>
            <option value="1425">BELARUS</option>
            <option value="1427">BOSNIA-HERZEGOVINA</option>
            <option value="1428">CAMEROON</option>
            <option value="1429">CHAD</option>
            <option value="1430">CANADA</option>
            <option value="1431">CYPRUS</option>
            <option value="1432">CAPE VERDE</option>
            <option value="1433">CROTIA</option>
            <option value="1434">CHILE</option>
            <option value="1435">COLOMBIA</option>
            <option value="1436">COMOROS</option>
            <option value="1437">COSTA-RICA</option>
            <option value="1438">CUBA</option>
            <option value="1439">DJBOUTI</option>
            <option value="1440">DOMINICA</option>
            <option value="1441">DAHOMEY</option>
            <option value="1442">DENMARK</option>
            <option value="1443">EQUADOR</option>
            <option value="1444">EL SALVADOR</option>
            <option value="1445">EQUATORIAL GUINEA</option>
            <option value="1446">ETOPIA</option>
            <option value="1448">FRANCE</option>
            <option value="1449">FINLAND</option>
            <option value="1451">GABON</option>
            <option value="1452">GAMBIA</option>
            <option value="1453">GUINEA</option>
            <option value="1454">GUINEA-BISSAU</option>
            <option value="1455">GHANA</option>
            <option value="1456">GRENADA</option>
            <option value="1457">GUYANA</option>
            <option value="1458">GUATEMALA</option>
            <option value="1459">GREECE</option>
            <option value="1460">GERMANY</option>
            <option value="1461">HAITI</option>
            <option value="1462">HONDURAS</option>
            <option value="1463">HUNGARY</option>
            <option value="1464">HONG KONG</option>
            <option value="1466">IRAQ</option>
            <option value="1467">IVORY COAST</option>
            <option value="1468">ISRAEL</option>
            <option value="1469">IRELAND</option>
            <option value="1470">ITALY</option>
            <option value="1471">ICELAND</option>
            <option value="1472">JORDAN</option>
            <option value="1473">JAMAICA</option>
            <option value="1475">KUWAIT</option>
            <option value="1476">KENYA</option>
            <option value="1477">KIRIBATI</option>
            <option value="1479">KOREA(UTARA)</option>
            <option value="1480">KEMBOJA</option>
            <option value="1481">LEBANON</option>
            <option value="1482">LIBYA</option>
            <option value="1483">LESOTHO</option>
            <option value="1484">LAOS</option>
            <option value="1485">LIBERIA</option>
            <option value="1486">LUXEMBOURG</option>
            <option value="1487">MALI</option>
            <option value="1488">MALDIVES</option>
            <option value="1489">MAURITANIA</option>
            <option value="1490">MOROCCO</option>
            <option value="1491">MALAWI</option>
            <option value="1493">MADAGASCAR</option>
            <option value="1494">MAURITIUS</option>
            <option value="1495">MEXICO</option>
            <option value="1496">MOZAMBIQUE</option>
            <option value="1497">MONGOLIA</option>
            <option value="1498">MESIR</option>
            <option value="1499">MYANMAR</option>
            <option value="1500">LAIN-LAIN</option>
            <option value="1501">NAMIBIA</option>
            <option value="1502">NAURU</option>
            <option value="1503">NEW ZEALAND</option>
            <option value="1504">NIGERIA</option>
            <option value="1505">NEPAL</option>
            <option value="1506">NICARAGUA</option>
            <option value="1507">NETHERLAND</option>
            <option value="1508">NORWAY</option>
            <option value="1509">OMAN</option>
            <option value="1510">PAPUA NEW GUINEA</option>
            <option value="1511">PALESTIN</option>
            <option value="1512">PANAMA</option>
            <option value="1513">PARAGUAY</option>
            <option value="1514">PERU</option>
            <option value="1515">POLAND</option>
            <option value="1517">QATAR</option>
            <option value="1518">ROMANIA</option>
            <option value="1519">RWANDA</option>
            <option value="1520">REPUBLIK CZECH</option>
            <option value="1521">REPUBLIK SLOVAKIA</option>
            <option value="1522">SENEGAL</option>
            <option value="1523">SIERRA LEONE</option>
            <option value="1524">SOMALIA</option>
            <option value="1525">SUDAN</option>
            <option value="1526">SYRIA</option>
            <option value="1527">ST.LUCIA</option>
            <option value="1528">ST.VINCENT</option>
            <option value="1529">SYCHELLES</option>
            <option value="1530">SOLOMON ISLAND</option>
            <option value="1531">SRI LANKA</option>
            <option value="1532">SWAZILAND</option>
            <option value="1533">SAMOA</option>
            <option value="1534">SAO TOME & PRINCIPE</option>
            <option value="1535">SURINAM</option>
            <option value="1536">SAMOA BARAT</option>
            <option value="1537">SWEDEN</option>
            <option value="1538">SPAIN</option>
            <option value="1539">SWITZERLAND</option>
            <option value="1540">TUNISIA</option>
            <option value="1541">TURKEY</option>
            <option value="1542">TANZANIA</option>
            <option value="1543">TONGA</option>
            <option value="1544">TRINIDAD & TOBAGO</option>
            <option value="1545">TUVALI</option>
            <option value="1547">TOGO</option>
            <option value="1548">TAIWAN</option>
            <option value="1549">UGANDA</option>
            <option value="1550">UNITED ARAB EMIRATES</option>
            <option value="1551">UPPER VOLTA</option>
            <option value="1552">URUGUAY</option>
            <option value="1553">RUSSIA</option>
            <option value="1554">UKRAINE</option>
            <option value="1555">UNITED STATES OF AMERICA</option>
            <option value="1556">VANUATU</option>
            <option value="1557">VENEZUELA</option>
            <option value="1559">YEMEN</option>
            <option value="1560">YUGOSLAVIA</option>
            <option value="1561">MACEDONIA</option>
            <option value="1562">ZAIRE</option>
            <option value="1563">ZAMBIA</option>
            <option value="1564">ZIMBABWE</option>
            <option value="1565">SLOVENIA</option>
            <option value="1566">TURKMENISTAN</option>
            <option value="9999">MAKLUMAT TIADA</option>
            <option value="1300">LAIN-LAIN ASIA</option>
            <option value="1301">ARAB</option>
            <option value="1302">BURMESE</option>
            <option value="1303">EURASIAN</option>
            <option value="1304">FIJIAN</option>
            <option value="1305">FILIPINO</option>
            <option value="1306">GURKHA</option>
            <option value="1307">JAPANESE</option>
            <option value="1308">KHMER</option>
            <option value="1309">KOREAN</option>
            <option value="1310">MALTESE</option>
            <option value="1311">PORTUGESE</option>
            <option value="1312">THAI</option>
            <option value="1313">VIETNAMESE</option>
            <option value="1314">IRANIAN</option>
            <option value="1315">AFGHAN</option>
            <option value="1316">CAUCASIAN</option>
            <option value="1317">KYRGYZ</option>
            <option value="1318">UBIAN</option>
            <option value="1319">UZBEKISTAN</option>
            <option value="1320">AZERBAIJAN</option>
            <option value="1321">SIAM</option>
            <option value="1322">KAZAKHSTAN</option>
            <option value="1323">TAJIKISTAN</option>
            <option value="1400">EUROPEAN</option>
            <option value="1401">BRITISH</option>
            <option value="1402">ALGERIA</option>
            <option value="1403">ANTIGUA-BARBUDA</option>
            <option value="1404">AUSTRALIA</option>
            <option value="1405">ANGOLA</option>
            <option value="1406">ARGENTINA</option>
            <option value="1407">ALBANIA</option>
            <option value="1408">AUSTRIA</option>
            <option value="1410">MIDDLE AFRICA</option>
            <option value="1411">SOUTH AFRICA</option>
            <option value="1412">BAHRAIN</option>
            <option value="1413">BAHAMAS</option>
            <option value="1414">BARBADOS</option>
            <option value="1415">BELIZE</option>
            <option value="1416">BOTSWANA</option>
            <option value="1418">BENIN</option>
            <option value="1419">BHUTAN</option>
            <option value="1420">BOLIVIA</option>
            <option value="1421">BRAZIL</option>
            <option value="1422">BURUNDI</option>
            <option value="1423">BULGARIA</option>
            <option value="1424">BELGIUM</option>
            <option value="1425">BELARUS</option>
            <option value="1427">BOSNIA-HERZEGOVINA</option>
            <option value="1428">CAMEROON</option>
            <option value="1429">CHAD</option>
            <option value="1430">CANADA</option>
            <option value="1431">CYPRUS</option>
            <option value="1432">CAPE VERDE</option>
            <option value="1433">CROTIA</option>
            <option value="1434">CHILE</option>
            <option value="1435">COLOMBIA</option>
            <option value="1436">COMOROS</option>
            <option value="1437">COSTA-RICA</option>
            <option value="1438">CUBA</option>
            <option value="1439">DJBOUTI</option>
            <option value="1440">DOMINICA</option>
            <option value="1441">DAHOMEY</option>
            <option value="1442">DENMARK</option>
            <option value="1443">EQUADOR</option>
            <option value="1444">EL SALVADOR</option>
            <option value="1445">EQUATORIAL GUINEA</option>
            <option value="1446">ETOPIA</option>
            <option value="1448">FRANCE</option>
            <option value="1449">FINLAND</option>
            <option value="1451">GABON</option>
            <option value="1452">GAMBIA</option>
            <option value="1453">GUINEA</option>
            <option value="1454">GUINEA-BISSAU</option>
            <option value="1455">GHANA</option>
            <option value="1456">GRENADA</option>
            <option value="1457">GUYANA</option>
            <option value="1458">GUATEMALA</option>
            <option value="1459">GREECE</option>
            <option value="1460">GERMANY</option>
            <option value="1461">HAITI</option>
            <option value="1462">HONDURAS</option>
            <option value="1463">HUNGARY</option>
            <option value="1464">HONG KONG</option>
            <option value="1466">IRAQ</option>
            <option value="1467">IVORY COAST</option>
            <option value="1468">ISRAEL</option>
            <option value="1469">IRELAND</option>
            <option value="1470">ITALY</option>
            <option value="1471">ICELAND</option>
            <option value="1472">JORDAN</option>
            <option value="1473">JAMAICA</option>
            <option value="1475">KUWAIT</option>
            <option value="1476">KENYA</option>
            <option value="1477">KIRIBATI</option>
            <option value="1479">KOREA(UTARA)</option>
            <option value="1480">KEMBOJA</option>
            <option value="1481">LEBANON</option>
            <option value="1482">LIBYA</option>
            <option value="1483">LESOTHO</option>
            <option value="1484">LAOS</option>
            <option value="1485">LIBERIA</option>
            <option value="1486">LUXEMBOURG</option>
            <option value="1487">MALI</option>
            <option value="1488">MALDIVES</option>
            <option value="1489">MAURITANIA</option>
            <option value="1490">MOROCCO</option>
            <option value="1491">MALAWI</option>
            <option value="1493">MADAGASCAR</option>
            <option value="1494">MAURITIUS</option>
            <option value="1495">MEXICO</option>
            <option value="1496">MOZAMBIQUE</option>
            <option value="1497">MONGOLIA</option>
            <option value="1498">MESIR</option>
            <option value="1499">MYANMAR</option>
            <option value="1500">LAIN-LAIN</option>
            <option value="1501">NAMIBIA</option>
            <option value="1502">NAURU</option>
            <option value="1503">NEW ZEALAND</option>
            <option value="1504">NIGERIA</option>
            <option value="1505">NEPAL</option>
            <option value="1506">NICARAGUA</option>
            <option value="1507">NETHERLAND</option>
            <option value="1508">NORWAY</option>
            <option value="1509">OMAN</option>
            <option value="1510">PAPUA NEW GUINEA</option>
            <option value="1511">PALESTIN</option>
            <option value="1512">PANAMA</option>
            <option value="1513">PARAGUAY</option>
            <option value="1514">PERU</option>
            <option value="1515">POLAND</option>
            <option value="1517">QATAR</option>
            <option value="1518">ROMANIA</option>
            <option value="1519">RWANDA</option>
            <option value="1520">REPUBLIK CZECH</option>
            <option value="1521">REPUBLIK SLOVAKIA</option>
            <option value="1522">SENEGAL</option>
            <option value="1523">SIERRA LEONE</option>
            <option value="1524">SOMALIA</option>
            <option value="1525">SUDAN</option>
            <option value="1526">SYRIA</option>
            <option value="1527">ST.LUCIA</option>
            <option value="1528">ST.VINCENT</option>
            <option value="1529">SYCHELLES</option>
            <option value="1530">SOLOMON ISLAND</option>
            <option value="1531">SRI LANKA</option>
            <option value="1532">SWAZILAND</option>
            <option value="1533">SAMOA</option>
            <option value="1534">SAO TOME & PRINCIPE</option>
            <option value="1535">SURINAM</option>
            <option value="1536">SAMOA BARAT</option>
            <option value="1537">SWEDEN</option>
            <option value="1538">SPAIN</option>
            <option value="1539">SWITZERLAND</option>
            <option value="1540">TUNISIA</option>
            <option value="1541">TURKEY</option>
            <option value="1542">TANZANIA</option>
            <option value="1543">TONGA</option>
            <option value="1544">TRINIDAD & TOBAGO</option>
            <option value="1545">TUVALI</option>
            <option value="1547">TOGO</option>
            <option value="1548">TAIWAN</option>
            <option value="1549">UGANDA</option>
            <option value="1550">UNITED ARAB EMIRATES</option>
            <option value="1551">UPPER VOLTA</option>
            <option value="1552">URUGUAY</option>
            <option value="1553">RUSSIA</option>
            <option value="1554">UKRAINE</option>
            <option value="1555">UNITED STATES OF AMERICA</option>
            <option value="1556">VANUATU</option>
            <option value="1557">VENEZUELA</option>
            <option value="1559">YEMEN</option>
            <option value="1560">YUGOSLAVIA</option>
            <option value="1561">MACEDONIA</option>
            <option value="1562">ZAIRE</option>
            <option value="1563">ZAMBIA</option>
            <option value="1564">ZIMBABWE</option>
            <option value="1565">SLOVENIA</option>
            <option value="1566">TURKMENISTAN</option>
            <option value="9999">MAKLUMAT TIADA</option>
            </select>
    </div><!-- form group -->
  </div><!-- col -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Religion: <span class="tx-danger">*</span></label>
      <select name="religionp1" class="form-control select2" required>
      <option value="">SELECT</option>
            <option value="1">ISLAM</option>
            <option value="2">CHRISTIAN</option>
            <option value="3">BUDDHA</option>
            <option value="4">HINDU</option>
            <option value="5">SIKHISM</option>
            <option value="A">TAO</option>
            <option value="B">CONFUSIANISM</option>
            <option value="C">BAHAI</option>
            <option value="D">JUDAISM</option>
            <option value="6">NO RELIGION</option>
            <option value="7">OTHERS</option>
            <option value="9">NO INFORMATION</option>
            </select>
    </div><!-- form group -->
  </div><!-- col -->
  </div><!-- row -->
  <div class="row row-sm">
  <div class="col-lg-8 mg-t-20 mg-lg-t-0">
    <div class="form-group">
      <label class="form-control-label">Relation with applicant: <span class="tx-danger">*</span></label>
      <select name="relationp1" class="form-control select2" required>
      <option value="">SELECT</option>
            <option value="0">BAPA KANDUNG</option>
            <option value="1">BAPA TIRI/ ANGKAT</option>
            <option value="2">IBU KANDUNG</option>
            <option value="3">IBU TIRI/ ANGKAT</option>
            <option value="4">PENJAGA  / AHLI KELUARGA TERDEKAT</option>
            </select>
    </div><!-- form group -->
  </div><!-- col-4 -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">OKU Number: <span class="tx-danger">if applicable</span></label>
      <input id="nookup1" class="form-control" placeholder="ENTER OKU NUMBER" name="nookup1" type="text" value="">
    </div><!-- form group -->
  </div><!-- col -->
</div><!-- row -->
<p class="mg-b-20"></p>
<hr/>
<div class="row row-sm">
  <div class="col-md-12 col-lg-12">
    <div class="form-group">
      <label class="form-control-label">Name of Parent/Guardian2: <span class="tx-danger">*</span></label>
      <input id="namep1" class="form-control" style="text-transform:uppercase" name="namep2" placeholder="Enter Full Name" value="" type="text" required>
    </div><!-- form group -->
  </div><!-- col -->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">IC/Passport Number: <span class="tx-danger">*</span></label>
      <input id="icp1" class="form-control" name="icp2" placeholder="Enter IC PARENT/GUARDIAN2" type="text" value="" required>
    </div><!-- form group -->
  </div><!--col-->
  <div class="col-lg-4 mg-t-20 mg-lg-t-0">
    <div class="form-group">
      <label class="form-control-label">Nationality: <span class="tx-danger">*</span></label>
      <select name="nationp2" class="form-control select2" required>
      <option value="">SELECT</option>
            <option value="0">BUKAN WARGANEGARA</option>
            <option value="1">WARGANEGARA</option>
            <option value="2">PEMASTAUTIN TETAP</option>
            </select>
    </div><!-- form group -->
  </div><!-- col-4 -->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
      <input id="emailp2" class="form-control" name="emailp2" placeholder="ENTER EMAIL" type="text" value=""required>
    </div><!-- form group -->
  </div><!-- col -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
      <input id="phonep1" class="form-control" name="phonep2" placeholder="ENTER PHONE" type="text" value="" required>
    </div><!-- form group -->
  </div><!-- col -->  
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Marital Status: <span class="tx-danger">*</span></label>
      <select name="maritalp2" class="form-control select2" required>
      <option value="">SELECT</option>
            <option value="B">BUJANG</option>
            <option value="D">DUDA</option>
            <option value="J">JANDA</option>
            <option value="K">KAHWIN</option>
            <option value="L">BALU</option>
            </select>
    </div><!-- form group -->
  </div><!-- col -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Race: <span class="tx-danger">*</span></label>
      <select name="racep2" class="form-control select2" required>
      <option value="">SELECT</option>
            <option value="0100">MELAYU</option>
            <option value="0200">CINA</option>
            <option value="0300">INDIA</option>
            <option value="0800">ANAK NEGERI SABAH</option>
            <option value="1000">ANAK NEGERI SARAWAK</option>
            <option value="1200">ORANG ASLI </option>
            <option value="0000">LAIN-LAIN</option>
            <option value="0101">BUGIS</option>
            <option value="0102">BOYAN</option>
            <option value="0103">BANJAR</option>
            <option value="0104">JAWA</option>
            <option value="0105">JAWI PEKAN</option>
            <option value="0106">MINANGKABAU</option>
            <option value="0201">CANTONESE</option>
            <option value="0202">FOOCHOW</option>
            <option value="0203">HAINANESE</option>
            <option value="0204">HENGHUA</option>
            <option value="0205">HOKCHIA</option>
            <option value="0206">HOKCHIU</option>
            <option value="0207">HOKKIEN</option>
            <option value="0208">KHEK</option>
            <option value="0209">KWONGSAI </option>
            <option value="0210">TEOCHEW</option>
            <option value="0211">KONGFOO</option>
            <option value="0212">HYLAM</option>
            <option value="0213">KENGCHU</option>
            <option value="0214">KOCHOU</option>
            <option value="0301">MALAYALI</option>
            <option value="302 ">PUNJABI</option>
            <option value="0303">SIKH</option>
            <option value="0304">TAMIL</option>
            <option value="0305">TELEGU</option>
            <option value="0306">MALABARI</option>
            <option value="0307">INDIA MUSLIM</option>
            <option value="0308">TELUGU</option>
            <option value="0309">ORISSA</option>
            <option value="0400">BANGLADESHI</option>
            <option value="0500">PAKISTANI</option>
            <option value="0600">SRI LANKA</option>
            <option value="0601">TAMIL SRI LANKA</option>
            <option value="0602">MELAYU SRI LANKA</option>
            <option value="0603">SINHALESE</option>
            <option value="0604">CEYLONESE</option>
            <option value="0700">INDONESIA</option>
            <option value="0701">TIDUNG</option>
            <option value="0801">BAJAU</option>
            <option value="0802">DUSUN</option>
            <option value="0803">KADAZAN</option>
            <option value="0804">MURUT</option>
            <option value="0805">SINO-NATIVE</option>
            <option value="0806">SULUK</option>
            <option value="0807">TIDUNG</option>
            <option value="0901">BINADAN</option>
            <option value="0902">BISAYA</option>
            <option value="0903">BONGOL</option>
            <option value="0904">BRUNEI</option>
            <option value="0905">DUMPAS</option>
            <option value="0906">IRANUN</option>
            <option value="0907">IDAHAN</option>
            <option value="0908">KWIJAU</option>
            <option value="0909">KEDAYAN</option>
            <option value="0910">LINGKABAU</option>
            <option value="0911">LUNDAYEH</option>
            <option value="0912">LASAU</option>
            <option value="0913">MELANAU</option>
            <option value="0914">MANGKAAK</option>
            <option value="0915">MATAGANG</option>
            <option value="0916">MINOKOK</option>
            <option value="0917">MELAYU SABAH</option>
            <option value="0918">MOMOGUN</option>
            <option value="0919">PAITAN</option>
            <option value="0920">RUMANAU</option>
            <option value="0921">RUNGUS</option>
            <option value="0922">SUNGAI</option>
            <option value="0923">SONSONGAN</option>
            <option value="0924">SINULIHAN</option>
            <option value="0925">TOMBONUO</option>
            <option value="0926">TAGAL</option>
            <option value="0927">TINAGAS</option>
            <option value="0928">COCOS</option>
            <option value="0929">KIMARAGANG</option>
            <option value="0930">BOLONGAN</option>
            <option value="0931">BUTON</option>
            <option value="0932">KAGAYAN</option>
            <option value="0933">BALABAK</option>
            <option value="0934">KADAZAN-SINO</option>
            <option value="0935">DUSUN-SINO</option>
            <option value="0936">BAJAU-SINO</option>
            <option value="0937">MURUT-SINO</option>
            <option value="0938">BRUNEI-SINO</option>
            <option value="0939">RUNGUS-SINO</option>
            <option value="0940">BISAYA-SINO</option>
            <option value="0941">IDAHAN-SINO</option>
            <option value="0942">IRANUN-SINO</option>
            <option value="0943">KEDAYAN-SINO</option>
            <option value="0944">SUNGAI-SINO</option>
            <option value="0945">LUNDAYEH-SINO</option>
            <option value="0946">SULUK-SINO</option>
            <option value="0947">TIDUNG-SINO</option>
            <option value="0948">BOLONGAN-SINO</option>
            <option value="0949">BALABAK-SINO</option>
            <option value="1001">MELAYU SARAWAK</option>
            <option value="1002">MELANAU</option>
            <option value="1003">KEDAYAN</option>
            <option value="1004">IBAN ATAU SEA DAYAK</option>
            <option value="0203">HAINANESE</option>
            <option value="0204">HENGHUA</option>
            <option value="0205">HOKCHIA</option>
            <option value="0206">HOKCHIU</option>
            <option value="0207">HOKKIEN</option>
            <option value="0208">KHEK</option>
            <option value="0209">KWONGSAI </option>
            <option value="0210">TEOCHEW</option>
            <option value="0211">KONGFOO</option>
            <option value="0212">HYLAM</option>
            <option value="0213">KENGCHU</option>
            <option value="0214">KOCHOU</option>
            <option value="0301">MALAYALI</option>
            <option value="302 ">PUNJABI</option>
            <option value="0303">SIKH</option>
            <option value="0304">TAMIL</option>
            <option value="0305">TELEGU</option>
            <option value="0306">MALABARI</option>
            <option value="0307">INDIA MUSLIM</option>
            <option value="0308">TELUGU</option>
            <option value="0309">ORISSA</option>
            <option value="0400">BANGLADESHI</option>
            <option value="0500">PAKISTANI</option>
            <option value="0600">SRI LANKA</option>
            <option value="0601">TAMIL SRI LANKA</option>
            <option value="0602">MELAYU SRI LANKA</option>
            <option value="0603">SINHALESE</option>
            <option value="0604">CEYLONESE</option>
            <option value="0700">INDONESIA</option>
            <option value="0701">TIDUNG</option>
            <option value="0801">BAJAU</option>
            <option value="0802">DUSUN</option>
            <option value="0803">KADAZAN</option>
            <option value="0804">MURUT</option>
            <option value="0805">SINO-NATIVE</option>
            <option value="0806">SULUK</option>
            <option value="0807">TIDUNG</option>
            <option value="0901">BINADAN</option>
            <option value="0902">BISAYA</option>
            <option value="0903">BONGOL</option>
            <option value="0904">BRUNEI</option>
            <option value="0905">DUMPAS</option>
            <option value="0906">IRANUN</option>
            <option value="0907">IDAHAN</option>
            <option value="0908">KWIJAU</option>
            <option value="0909">KEDAYAN</option>
            <option value="0910">LINGKABAU</option>
            <option value="0911">LUNDAYEH</option>
            <option value="0912">LASAU</option>
            <option value="0913">MELANAU</option>
            <option value="0914">MANGKAAK</option>
            <option value="0915">MATAGANG</option>
            <option value="0916">MINOKOK</option>
            <option value="0917">MELAYU SABAH</option>
            <option value="0918">MOMOGUN</option>
            <option value="0919">PAITAN</option>
            <option value="0920">RUMANAU</option>
            <option value="0921">RUNGUS</option>
            <option value="0922">SUNGAI</option>
            <option value="0923">SONSONGAN</option>
            <option value="0924">SINULIHAN</option>
            <option value="0925">TOMBONUO</option>
            <option value="0926">TAGAL</option>
            <option value="0927">TINAGAS</option>
            <option value="0928">COCOS</option>
            <option value="0929">KIMARAGANG</option>
            <option value="0930">BOLONGAN</option>
            <option value="0931">BUTON</option>
            <option value="0932">KAGAYAN</option>
            <option value="0933">BALABAK</option>
            <option value="0934">KADAZAN-SINO</option>
            <option value="0935">DUSUN-SINO</option>
            <option value="0936">BAJAU-SINO</option>
            <option value="0937">MURUT-SINO</option>
            <option value="0938">BRUNEI-SINO</option>
            <option value="0939">RUNGUS-SINO</option>
            <option value="0940">BISAYA-SINO</option>
            <option value="0941">IDAHAN-SINO</option>
            <option value="0942">IRANUN-SINO</option>
            <option value="0943">KEDAYAN-SINO</option>
            <option value="0944">SUNGAI-SINO</option>
            <option value="0945">LUNDAYEH-SINO</option>
            <option value="0946">SULUK-SINO</option>
            <option value="0947">TIDUNG-SINO</option>
            <option value="0948">BOLONGAN-SINO</option>
            <option value="0949">BALABAK-SINO</option>
            <option value="1001">MELAYU SARAWAK</option>
            <option value="1002">MELANAU</option>
            <option value="1003">KEDAYAN</option>
            <option value="1004">IBAN ATAU SEA DAYAK</option>
            <option value="0914">MANGKAAK</option>
            <option value="0915">MATAGANG</option>
            <option value="0916">MINOKOK</option>
            <option value="0917">MELAYU SABAH</option>
            <option value="0918">MOMOGUN</option>
            <option value="0919">PAITAN</option>
            <option value="0920">RUMANAU</option>
            <option value="0921">RUNGUS</option>
            <option value="0922">SUNGAI</option>
            <option value="0923">SONSONGAN</option>
            <option value="0924">SINULIHAN</option>
            <option value="0925">TOMBONUO</option>
            <option value="0926">TAGAL</option>
            <option value="0927">TINAGAS</option>
            <option value="0928">COCOS</option>
            <option value="0929">KIMARAGANG</option>
            <option value="0930">BOLONGAN</option>
            <option value="0931">BUTON</option>
            <option value="0932">KAGAYAN</option>
            <option value="0933">BALABAK</option>
            <option value="0934">KADAZAN-SINO</option>
            <option value="0935">DUSUN-SINO</option>
            <option value="0936">BAJAU-SINO</option>
            <option value="0937">MURUT-SINO</option>
            <option value="0938">BRUNEI-SINO</option>
            <option value="0939">RUNGUS-SINO</option>
            <option value="0940">BISAYA-SINO</option>
            <option value="0941">IDAHAN-SINO</option>
            <option value="0942">IRANUN-SINO</option>
            <option value="0943">KEDAYAN-SINO</option>
            <option value="0944">SUNGAI-SINO</option>
            <option value="0945">LUNDAYEH-SINO</option>
            <option value="0946">SULUK-SINO</option>
            <option value="0947">TIDUNG-SINO</option>
            <option value="0948">BOLONGAN-SINO</option>
            <option value="0949">BALABAK-SINO</option>
            <option value="1001">MELAYU SARAWAK</option>
            <option value="1002">MELANAU</option>
            <option value="1003">KEDAYAN</option>
            <option value="1004">IBAN ATAU SEA DAYAK</option>
            <option value="0913">MELANAU</option>
            <option value="0914">MANGKAAK</option>
            <option value="0915">MATAGANG</option>
            <option value="0916">MINOKOK</option>
            <option value="0917">MELAYU SABAH</option>
            <option value="0918">MOMOGUN</option>
            <option value="0919">PAITAN</option>
            <option value="0920">RUMANAU</option>
            <option value="0921">RUNGUS</option>
            <option value="0922">SUNGAI</option>
            <option value="0923">SONSONGAN</option>
            <option value="0924">SINULIHAN</option>
            <option value="0925">TOMBONUO</option>
            <option value="0926">TAGAL</option>
            <option value="0927">TINAGAS</option>
            <option value="0928">COCOS</option>
            <option value="0929">KIMARAGANG</option>
            <option value="0930">BOLONGAN</option>
            <option value="0931">BUTON</option>
            <option value="0932">KAGAYAN</option>
            <option value="0933">BALABAK</option>
            <option value="0934">KADAZAN-SINO</option>
            <option value="0935">DUSUN-SINO</option>
            <option value="0936">BAJAU-SINO</option>
            <option value="0937">MURUT-SINO</option>
            <option value="0938">BRUNEI-SINO</option>
            <option value="0939">RUNGUS-SINO</option>
            <option value="0940">BISAYA-SINO</option>
            <option value="0941">IDAHAN-SINO</option>
            <option value="0942">IRANUN-SINO</option>
            <option value="0943">KEDAYAN-SINO</option>
            <option value="0944">SUNGAI-SINO</option>
            <option value="0945">LUNDAYEH-SINO</option>
            <option value="0946">SULUK-SINO</option>
            <option value="0947">TIDUNG-SINO</option>
            <option value="0948">BOLONGAN-SINO</option>
            <option value="0949">BALABAK-SINO</option>
            <option value="1001">MELAYU SARAWAK</option>
            <option value="1002">MELANAU</option>
            <option value="1003">KEDAYAN</option>
            <option value="1004">IBAN ATAU SEA DAYAK</option>
            <option value="0102">BIDAYUH ATAU LAND DAYAK</option>
            <option value="0102">KAYAN</option>
            <option value="0102">KENYAH</option>
            <option value="1010">PUNAN</option>
            <option value="1011">PENAN</option>
            <option value="1012">TRING</option>
            <option value="1013">LOGAT</option>
            <option value="1014">BAH MALI</option>
            <option value="1015">NAROM</option>
            <option value="1016">BAKONG</option>
            <option value="1017">MIRIEK</option>
            <option value="1018">DALI</option>
            <option value="1019">SEGAN</option>
            <option value="1101">BISAYA</option>
            <option value="1102">BERAWAN</option>
            <option value="1103">BELOT</option>
            <option value="1104">BHUKET ATAU UKIT</option>
            <option value="1105">BALAU</option>
            <option value="1106">BATANG AI</option>
            <option value="1107">BATU ELAH</option>
            <option value="1108">BAKETAN</option>
            <option value="1109">BINTULU</option>
            <option value="1110">BADENG</option>
            <option value="1111">DUSUN</option>
            <option value="1112">JAGOI</option>
            <option value="1113">LAKIPUT</option>
            <option value="1114">KAJANG</option>
            <option value="1115">KEJAMAN</option>
            <option value="1116">KANOWIT</option>
            <option value="1117">LIRONG</option>
            <option value="1118">LEMANAK</option>
            <option value="1119">LAHANAN</option>
            <option value="1120">LISUM ATAU LUGUM</option>
            <option value="1121">MATU</option>
            <option value="1122">MEMALOH</option>
            <option value="1123">MELIKIN</option>
            <option value="1124">MELAING</option>
            <option value="1125">NGORIK ATAU MUREK</option>
            <option value="1126">MENONDO</option>
            <option value="1127">JAMOK</option>
            <option value="1128">SEBOP</option>
            <option value="1129">SEDUAN</option>
            <option value="1130">SEKAPAN</option>
            <option value="1131">SEGALANG</option>
            <option value="1132">SIHAN</option>
            <option value="1133">SEPING</option>
            <option value="1134">SARIBAS</option>
            <option value="1135">SEBUYAU</option>
            <option value="1136">SKRANG</option>
            <option value="1137">SABAN</option>
            <option value="0102">BIDAYUH ATAU LAND DAYAK</option>
            <option value="0102">KAYAN</option>
            <option value="0102">KENYAH</option>
            <option value="1137">SABAN</option>
            <option value="1138">SELAKAN</option>
            <option value="1139">SELAKO</option>
            <option value="1140">TAGAL</option>
            <option value="1141">TABUN</option>
            <option value="1142">TUTONG</option>
            <option value="1143">TANJONG</option>
            <option value="1144">TATAU</option>
            <option value="1145">TAUP</option>
            <option value="1146">UKIT</option>
            <option value="1147">UNKOP</option>
            <option value="1148">ULU AI</option>
            <option value="1149">TORAJA</option>
            <option value="1150">TIMOR</option>
            <option value="1151">MENADO</option>
            <option value="1152">MANURA</option>
            <option value="1153">BATAK</option>
            <option value="1154">PATHAN</option>
            <option value="1155">TONGANS</option>
            <option value="1201">JAKUN</option>
            <option value="1202">NEGRITO</option>
            <option value="1203">SAKAI</option>
            <option value="1204">SEMAI</option>
            <option value="1205">SEMALAI</option>
            <option value="1206">TEMIAR</option>
            <option value="1207">SENOI</option>
            <option value="1118">LEMANAK</option>
            <option value="1119">LAHANAN</option>
            <option value="1120">LISUM ATAU LUGUM</option>
            <option value="1121">MATU</option>
            <option value="1122">MEMALOH</option>
            <option value="1123">MELIKIN</option>
            <option value="1124">MELAING</option>
            <option value="1125">NGORIK ATAU MUREK</option>
            <option value="1126">MENONDO</option>
            <option value="1127">JAMOK</option>
            <option value="1128">SEBOP</option>
            <option value="1129">SEDUAN</option>
            <option value="1130">SEKAPAN</option>
            <option value="1131">SEGALANG</option>
            <option value="1132">SIHAN</option>
            <option value="1133">SEPING</option>
            <option value="1134">SARIBAS</option>
            <option value="1135">SEBUYAU</option>
            <option value="1136">SKRANG</option>
            <option value="1108">BAKETAN</option>
            <option value="1109">BINTULU</option>
            <option value="1110">BADENG</option>
            <option value="1111">DUSUN</option>
            <option value="1112">JAGOI</option>
            <option value="1113">LAKIPUT</option>
            <option value="1114">KAJANG</option>
            <option value="1115">KEJAMAN</option>
            <option value="1116">KANOWIT</option>
            <option value="1117">LIRONG</option>
            <option value="1017">MIRIEK</option>
            <option value="1018">DALI</option>
            <option value="1019">SEGAN</option>
            <option value="1101">BISAYA</option>
            <option value="1102">BERAWAN</option>
            <option value="1103">BELOT</option>
            <option value="1104">BHUKET ATAU UKIT</option>
            <option value="1105">BALAU</option>
            <option value="1106">BATANG AI</option>
            <option value="1107">BATU ELAH</option>
            <option value="1008">MURUT ATAU LUN BAWANG</option>
            <option value="1009">KELABIT</option>
            <option value="1010">PUNAN</option>
            <option value="1011">PENAN</option>
            <option value="1012">TRING</option>
            <option value="1013">LOGAT</option>
            <option value="1014">BAH MALI</option>
            <option value="1015">NAROM</option>
            <option value="1016">BAKONG</option>
            <option value="1300">LAIN-LAIN ASIA</option>
            <option value="1301">ARAB</option>
            <option value="1302">BURMESE</option>
            <option value="1303">EURASIAN</option>
            <option value="1304">FIJIAN</option>
            <option value="1305">FILIPINO</option>
            <option value="1306">GURKHA</option>
            <option value="1307">JAPANESE</option>
            <option value="1308">KHMER</option>
            <option value="1309">KOREAN</option>
            <option value="1310">MALTESE</option>
            <option value="1311">PORTUGESE</option>
            <option value="1312">THAI</option>
            <option value="1313">VIETNAMESE</option>
            <option value="1314">IRANIAN</option>
            <option value="1315">AFGHAN</option>
            <option value="1316">CAUCASIAN</option>
            <option value="1317">KYRGYZ</option>
            <option value="1318">UBIAN</option>
            <option value="1319">UZBEKISTAN</option>
            <option value="1320">AZERBAIJAN</option>
            <option value="1321">SIAM</option>
            <option value="1322">KAZAKHSTAN</option>
            <option value="1323">TAJIKISTAN</option>
            <option value="1400">EUROPEAN</option>
            <option value="1401">BRITISH</option>
            <option value="1402">ALGERIA</option>
            <option value="1403">ANTIGUA-BARBUDA</option>
            <option value="1404">AUSTRALIA</option>
            <option value="1405">ANGOLA</option>
            <option value="1406">ARGENTINA</option>
            <option value="1407">ALBANIA</option>
            <option value="1408">AUSTRIA</option>
            <option value="1410">MIDDLE AFRICA</option>
            <option value="1411">SOUTH AFRICA</option>
            <option value="1412">BAHRAIN</option>
            <option value="1413">BAHAMAS</option>
            <option value="1414">BARBADOS</option>
            <option value="1415">BELIZE</option>
            <option value="1416">BOTSWANA</option>
            <option value="1418">BENIN</option>
            <option value="1419">BHUTAN</option>
            <option value="1420">BOLIVIA</option>
            <option value="1421">BRAZIL</option>
            <option value="1422">BURUNDI</option>
            <option value="1423">BULGARIA</option>
            <option value="1424">BELGIUM</option>
            <option value="1425">BELARUS</option>
            <option value="1427">BOSNIA-HERZEGOVINA</option>
            <option value="1428">CAMEROON</option>
            <option value="1429">CHAD</option>
            <option value="1430">CANADA</option>
            <option value="1431">CYPRUS</option>
            <option value="1432">CAPE VERDE</option>
            <option value="1433">CROTIA</option>
            <option value="1434">CHILE</option>
            <option value="1435">COLOMBIA</option>
            <option value="1436">COMOROS</option>
            <option value="1437">COSTA-RICA</option>
            <option value="1438">CUBA</option>
            <option value="1439">DJBOUTI</option>
            <option value="1440">DOMINICA</option>
            <option value="1441">DAHOMEY</option>
            <option value="1442">DENMARK</option>
            <option value="1443">EQUADOR</option>
            <option value="1444">EL SALVADOR</option>
            <option value="1445">EQUATORIAL GUINEA</option>
            <option value="1446">ETOPIA</option>
            <option value="1448">FRANCE</option>
            <option value="1449">FINLAND</option>
            <option value="1451">GABON</option>
            <option value="1452">GAMBIA</option>
            <option value="1453">GUINEA</option>
            <option value="1454">GUINEA-BISSAU</option>
            <option value="1455">GHANA</option>
            <option value="1456">GRENADA</option>
            <option value="1457">GUYANA</option>
            <option value="1458">GUATEMALA</option>
            <option value="1459">GREECE</option>
            <option value="1460">GERMANY</option>
            <option value="1461">HAITI</option>
            <option value="1462">HONDURAS</option>
            <option value="1463">HUNGARY</option>
            <option value="1464">HONG KONG</option>
            <option value="1466">IRAQ</option>
            <option value="1467">IVORY COAST</option>
            <option value="1468">ISRAEL</option>
            <option value="1469">IRELAND</option>
            <option value="1470">ITALY</option>
            <option value="1471">ICELAND</option>
            <option value="1472">JORDAN</option>
            <option value="1473">JAMAICA</option>
            <option value="1475">KUWAIT</option>
            <option value="1476">KENYA</option>
            <option value="1477">KIRIBATI</option>
            <option value="1479">KOREA(UTARA)</option>
            <option value="1480">KEMBOJA</option>
            <option value="1481">LEBANON</option>
            <option value="1482">LIBYA</option>
            <option value="1483">LESOTHO</option>
            <option value="1484">LAOS</option>
            <option value="1485">LIBERIA</option>
            <option value="1486">LUXEMBOURG</option>
            <option value="1487">MALI</option>
            <option value="1488">MALDIVES</option>
            <option value="1489">MAURITANIA</option>
            <option value="1490">MOROCCO</option>
            <option value="1491">MALAWI</option>
            <option value="1493">MADAGASCAR</option>
            <option value="1494">MAURITIUS</option>
            <option value="1495">MEXICO</option>
            <option value="1496">MOZAMBIQUE</option>
            <option value="1497">MONGOLIA</option>
            <option value="1498">MESIR</option>
            <option value="1499">MYANMAR</option>
            <option value="1500">LAIN-LAIN</option>
            <option value="1501">NAMIBIA</option>
            <option value="1502">NAURU</option>
            <option value="1503">NEW ZEALAND</option>
            <option value="1504">NIGERIA</option>
            <option value="1505">NEPAL</option>
            <option value="1506">NICARAGUA</option>
            <option value="1507">NETHERLAND</option>
            <option value="1508">NORWAY</option>
            <option value="1509">OMAN</option>
            <option value="1510">PAPUA NEW GUINEA</option>
            <option value="1511">PALESTIN</option>
            <option value="1512">PANAMA</option>
            <option value="1513">PARAGUAY</option>
            <option value="1514">PERU</option>
            <option value="1515">POLAND</option>
            <option value="1517">QATAR</option>
            <option value="1518">ROMANIA</option>
            <option value="1519">RWANDA</option>
            <option value="1520">REPUBLIK CZECH</option>
            <option value="1521">REPUBLIK SLOVAKIA</option>
            <option value="1522">SENEGAL</option>
            <option value="1523">SIERRA LEONE</option>
            <option value="1524">SOMALIA</option>
            <option value="1525">SUDAN</option>
            <option value="1526">SYRIA</option>
            <option value="1527">ST.LUCIA</option>
            <option value="1528">ST.VINCENT</option>
            <option value="1529">SYCHELLES</option>
            <option value="1530">SOLOMON ISLAND</option>
            <option value="1531">SRI LANKA</option>
            <option value="1532">SWAZILAND</option>
            <option value="1533">SAMOA</option>
            <option value="1534">SAO TOME & PRINCIPE</option>
            <option value="1535">SURINAM</option>
            <option value="1536">SAMOA BARAT</option>
            <option value="1537">SWEDEN</option>
            <option value="1538">SPAIN</option>
            <option value="1539">SWITZERLAND</option>
            <option value="1540">TUNISIA</option>
            <option value="1541">TURKEY</option>
            <option value="1542">TANZANIA</option>
            <option value="1543">TONGA</option>
            <option value="1544">TRINIDAD & TOBAGO</option>
            <option value="1545">TUVALI</option>
            <option value="1547">TOGO</option>
            <option value="1548">TAIWAN</option>
            <option value="1549">UGANDA</option>
            <option value="1550">UNITED ARAB EMIRATES</option>
            <option value="1551">UPPER VOLTA</option>
            <option value="1552">URUGUAY</option>
            <option value="1553">RUSSIA</option>
            <option value="1554">UKRAINE</option>
            <option value="1555">UNITED STATES OF AMERICA</option>
            <option value="1556">VANUATU</option>
            <option value="1557">VENEZUELA</option>
            <option value="1559">YEMEN</option>
            <option value="1560">YUGOSLAVIA</option>
            <option value="1561">MACEDONIA</option>
            <option value="1562">ZAIRE</option>
            <option value="1563">ZAMBIA</option>
            <option value="1564">ZIMBABWE</option>
            <option value="1565">SLOVENIA</option>
            <option value="1566">TURKMENISTAN</option>
            <option value="9999">MAKLUMAT TIADA</option>
            <option value="1300">LAIN-LAIN ASIA</option>
            <option value="1301">ARAB</option>
            <option value="1302">BURMESE</option>
            <option value="1303">EURASIAN</option>
            <option value="1304">FIJIAN</option>
            <option value="1305">FILIPINO</option>
            <option value="1306">GURKHA</option>
            <option value="1307">JAPANESE</option>
            <option value="1308">KHMER</option>
            <option value="1309">KOREAN</option>
            <option value="1310">MALTESE</option>
            <option value="1311">PORTUGESE</option>
            <option value="1312">THAI</option>
            <option value="1313">VIETNAMESE</option>
            <option value="1314">IRANIAN</option>
            <option value="1315">AFGHAN</option>
            <option value="1316">CAUCASIAN</option>
            <option value="1317">KYRGYZ</option>
            <option value="1318">UBIAN</option>
            <option value="1319">UZBEKISTAN</option>
            <option value="1320">AZERBAIJAN</option>
            <option value="1321">SIAM</option>
            <option value="1322">KAZAKHSTAN</option>
            <option value="1323">TAJIKISTAN</option>
            <option value="1400">EUROPEAN</option>
            <option value="1401">BRITISH</option>
            <option value="1402">ALGERIA</option>
            <option value="1403">ANTIGUA-BARBUDA</option>
            <option value="1404">AUSTRALIA</option>
            <option value="1405">ANGOLA</option>
            <option value="1406">ARGENTINA</option>
            <option value="1407">ALBANIA</option>
            <option value="1408">AUSTRIA</option>
            <option value="1410">MIDDLE AFRICA</option>
            <option value="1411">SOUTH AFRICA</option>
            <option value="1412">BAHRAIN</option>
            <option value="1413">BAHAMAS</option>
            <option value="1414">BARBADOS</option>
            <option value="1415">BELIZE</option>
            <option value="1416">BOTSWANA</option>
            <option value="1418">BENIN</option>
            <option value="1419">BHUTAN</option>
            <option value="1420">BOLIVIA</option>
            <option value="1421">BRAZIL</option>
            <option value="1422">BURUNDI</option>
            <option value="1423">BULGARIA</option>
            <option value="1424">BELGIUM</option>
            <option value="1425">BELARUS</option>
            <option value="1427">BOSNIA-HERZEGOVINA</option>
            <option value="1428">CAMEROON</option>
            <option value="1429">CHAD</option>
            <option value="1430">CANADA</option>
            <option value="1431">CYPRUS</option>
            <option value="1432">CAPE VERDE</option>
            <option value="1433">CROTIA</option>
            <option value="1434">CHILE</option>
            <option value="1435">COLOMBIA</option>
            <option value="1436">COMOROS</option>
            <option value="1437">COSTA-RICA</option>
            <option value="1438">CUBA</option>
            <option value="1439">DJBOUTI</option>
            <option value="1440">DOMINICA</option>
            <option value="1441">DAHOMEY</option>
            <option value="1442">DENMARK</option>
            <option value="1443">EQUADOR</option>
            <option value="1444">EL SALVADOR</option>
            <option value="1445">EQUATORIAL GUINEA</option>
            <option value="1446">ETOPIA</option>
            <option value="1448">FRANCE</option>
            <option value="1449">FINLAND</option>
            <option value="1451">GABON</option>
            <option value="1452">GAMBIA</option>
            <option value="1453">GUINEA</option>
            <option value="1454">GUINEA-BISSAU</option>
            <option value="1455">GHANA</option>
            <option value="1456">GRENADA</option>
            <option value="1457">GUYANA</option>
            <option value="1458">GUATEMALA</option>
            <option value="1459">GREECE</option>
            <option value="1460">GERMANY</option>
            <option value="1461">HAITI</option>
            <option value="1462">HONDURAS</option>
            <option value="1463">HUNGARY</option>
            <option value="1464">HONG KONG</option>
            <option value="1466">IRAQ</option>
            <option value="1467">IVORY COAST</option>
            <option value="1468">ISRAEL</option>
            <option value="1469">IRELAND</option>
            <option value="1470">ITALY</option>
            <option value="1471">ICELAND</option>
            <option value="1472">JORDAN</option>
            <option value="1473">JAMAICA</option>
            <option value="1475">KUWAIT</option>
            <option value="1476">KENYA</option>
            <option value="1477">KIRIBATI</option>
            <option value="1479">KOREA(UTARA)</option>
            <option value="1480">KEMBOJA</option>
            <option value="1481">LEBANON</option>
            <option value="1482">LIBYA</option>
            <option value="1483">LESOTHO</option>
            <option value="1484">LAOS</option>
            <option value="1485">LIBERIA</option>
            <option value="1486">LUXEMBOURG</option>
            <option value="1487">MALI</option>
            <option value="1488">MALDIVES</option>
            <option value="1489">MAURITANIA</option>
            <option value="1490">MOROCCO</option>
            <option value="1491">MALAWI</option>
            <option value="1493">MADAGASCAR</option>
            <option value="1494">MAURITIUS</option>
            <option value="1495">MEXICO</option>
            <option value="1496">MOZAMBIQUE</option>
            <option value="1497">MONGOLIA</option>
            <option value="1498">MESIR</option>
            <option value="1499">MYANMAR</option>
            <option value="1500">LAIN-LAIN</option>
            <option value="1501">NAMIBIA</option>
            <option value="1502">NAURU</option>
            <option value="1503">NEW ZEALAND</option>
            <option value="1504">NIGERIA</option>
            <option value="1505">NEPAL</option>
            <option value="1506">NICARAGUA</option>
            <option value="1507">NETHERLAND</option>
            <option value="1508">NORWAY</option>
            <option value="1509">OMAN</option>
            <option value="1510">PAPUA NEW GUINEA</option>
            <option value="1511">PALESTIN</option>
            <option value="1512">PANAMA</option>
            <option value="1513">PARAGUAY</option>
            <option value="1514">PERU</option>
            <option value="1515">POLAND</option>
            <option value="1517">QATAR</option>
            <option value="1518">ROMANIA</option>
            <option value="1519">RWANDA</option>
            <option value="1520">REPUBLIK CZECH</option>
            <option value="1521">REPUBLIK SLOVAKIA</option>
            <option value="1522">SENEGAL</option>
            <option value="1523">SIERRA LEONE</option>
            <option value="1524">SOMALIA</option>
            <option value="1525">SUDAN</option>
            <option value="1526">SYRIA</option>
            <option value="1527">ST.LUCIA</option>
            <option value="1528">ST.VINCENT</option>
            <option value="1529">SYCHELLES</option>
            <option value="1530">SOLOMON ISLAND</option>
            <option value="1531">SRI LANKA</option>
            <option value="1532">SWAZILAND</option>
            <option value="1533">SAMOA</option>
            <option value="1534">SAO TOME & PRINCIPE</option>
            <option value="1535">SURINAM</option>
            <option value="1536">SAMOA BARAT</option>
            <option value="1537">SWEDEN</option>
            <option value="1538">SPAIN</option>
            <option value="1539">SWITZERLAND</option>
            <option value="1540">TUNISIA</option>
            <option value="1541">TURKEY</option>
            <option value="1542">TANZANIA</option>
            <option value="1543">TONGA</option>
            <option value="1544">TRINIDAD & TOBAGO</option>
            <option value="1545">TUVALI</option>
            <option value="1547">TOGO</option>
            <option value="1548">TAIWAN</option>
            <option value="1549">UGANDA</option>
            <option value="1550">UNITED ARAB EMIRATES</option>
            <option value="1551">UPPER VOLTA</option>
            <option value="1552">URUGUAY</option>
            <option value="1553">RUSSIA</option>
            <option value="1554">UKRAINE</option>
            <option value="1555">UNITED STATES OF AMERICA</option>
            <option value="1556">VANUATU</option>
            <option value="1557">VENEZUELA</option>
            <option value="1559">YEMEN</option>
            <option value="1560">YUGOSLAVIA</option>
            <option value="1561">MACEDONIA</option>
            <option value="1562">ZAIRE</option>
            <option value="1563">ZAMBIA</option>
            <option value="1564">ZIMBABWE</option>
            <option value="1565">SLOVENIA</option>
            <option value="1566">TURKMENISTAN</option>
            <option value="9999">MAKLUMAT TIADA</option>
            </select>
    </div><!-- form group -->
  </div><!-- col -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Religion: <span class="tx-danger">*</span></label>
      <select name="religionp2" class="form-control select2" required>
      <option value="">SELECT</option>
            <option value="1">ISLAM</option>
            <option value="2">CHRISTIAN</option>
            <option value="3">BUDDHA</option>
            <option value="4">HINDU</option>
            <option value="5">SIKHISM</option>
            <option value="A">TAO</option>
            <option value="B">CONFUSIANISM</option>
            <option value="C">BAHAI</option>
            <option value="D">JUDAISM</option>
            <option value="6">NO RELIGION</option>
            <option value="7">OTHERS</option>
            <option value="9">NO INFORMATION</option>
            </select>
    </div><!-- form group -->
  </div><!-- col -->
  </div><!-- row -->
  <div class="row row-sm">
  <div class="col-lg-8 mg-t-20 mg-lg-t-0">
    <div class="form-group">
      <label class="form-control-label">Relation with applicant: <span class="tx-danger">*</span></label>
      <select name="relationp2" class="form-control select2" required>
      <option value="">SELECT</option>
            <option value="0">BAPA KANDUNG</option>
            <option value="1">BAPA TIRI/ ANGKAT</option>
            <option value="2">IBU KANDUNG</option>
            <option value="3">IBU TIRI/ ANGKAT</option>
            <option value="4">PENJAGA  / AHLI KELUARGA TERDEKAT</option>
            </select>
    </div><!-- form group -->
  </div><!-- col-4 -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">OKU Number: <span class="tx-danger">if applicable</span></label>
      <input id="nookup2" class="form-control" placeholder="ENTER OKU NUMBER" name="nookup2" type="text" value="">
    </div><!-- form group -->
  </div><!-- col -->
</div><!-- row -->
<p class="mg-b-20"></p>
<hr/>
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Household Number: <span class="tx-danger">*</span></label>
      <select name="household" class="form-control select2" required>
      <option value="">SELECT</option>
            <option value="0">None</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">More than 9</option>
            </select>
    </div><!-- form group -->
  </div><!-- col -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Household Income: <span class="tx-danger">*</span></label>
      <select name="income" class="form-control select2" required>
      <option value="">SELECT</option>
            <option value="0">NO INCOME</option>
            <option value="1">RM1-RM500</option>
            <option value="2">RM501-RM1000</option>
            <option value="3">RM1001-RM2000</option>
            <option value="4">RM2001-RM3000</option>
            <option value="5">RM3001-RM4000</option>
            <option value="6">RM4001-RM5000</option>
            <option value="7">RM5001-RM7500</option>
            <option value="8">RM7501-RM10000</option>
            <option value="9">RM10001 AND ABOVE</option>
            </select>
    </div><!-- form group -->
  </div><!-- col -->
  </div><!-- row -->
</br>
<input type='hidden' name='ic' value='011014121019'>
<input type="submit" name="submit" value="Update" class="btn btn-az-primary btn-block">
</form>
</br>
</div>

<div id="Academic" class="tabcontent">

</br>
  <h3>Academic Info</h3>
  </br>
  <form action="save_academic_agent.php" method="post">
    
    <div class="row row-sm">
    <div class="col-md-12 col-lg-6">
        <div class="form-group">
        <label class="form-control-label">SPM Candidate Number: <span class="tx-danger">*</span></label>
        <input id="" class="form-control" name="spmnumber" placeholder="Enter SPM Number" value="" type="text" style="text-transform:uppercase" required>
        </div><!-- form group -->
    </div><!-- col -->
    <div class="col-md-12 col-lg-6">
        <div class="form-group">
        <label class="form-control-label">Year of SPM: <span class="tx-danger">*</span></label>
        <input id="" class="form-control" name="spmyear" placeholder="Enter Year of SPM" value="" type="number" min='1989' max='2099' style="text-transform:uppercase" required>
        </div><!-- form group -->
    </div><!-- col -->
    </div><!-- row -->
    <div class="row row-sm">
    <div class="col-md-12 col-lg-6">
        <div class="form-group">
        <label for="seeAnotherField" class="form-control-label">Stream: <span class="tx-danger">*</span></label>
        <select name="aliran" class="form-control select2 something1" id="aliran"  required >
          <option value="0">Select</option>
                    <option value="A">SASTERA</option>
                    <option value="S">SAINS</option>
                    </select>
        </div><!-- form group -->
    </div><!-- col -->
    <div class="col-md-12 col-lg-6">
        <div class="form-group">
        <label for="seeAnotherField" class="form-control-label">Examination Type: <span class="tx-danger">*</span></label>
        <select name="exam_type" class="form-control select2 "  required >
        <option selected disabled="" style="font-size:14px;">Select</option>
                                            <option  value="TRIAL">TRIAL</option>
                                            <option  value="SPM">SPM</option>
          </select>
        </div><!-- form group -->
    </div><!-- col -->
    </div><!-- row -->
    <div class="row row-sm">
    <div class="col-md-12 col-lg-6">
        <div class="form-group">
        <label class="form-control-label">Type of School: <span class="tx-danger">*</span></label>
        <select name="schooltype" class="form-control select2" required>
          <option value=" ">Select</option>
                    <option value="A">SEKOLAH MENENGAH KEBANGSAAN HARIAN (SMK)</option>
                    <option value="B">SEKOLAH MENENGAH TEKNIK(SMT)</option>
                    <option value="C">SEKOLAH MENENGAH BERASRAMA PENUH(SBP)</option>
                    <option value="D">SEKOLAH MENENGAH KEBANGSAAN AGAMA(SMKA)</option>
                    <option value="E">SEKOLAH AGAMA BANTUAN KERAJAAN(SMBK)</option>
                    <option value="F">MAKTAB RENDAH SAINS MARA(MRSM)</option>
                    <option value="G">SEKOLAH MENENGAH BESTARI(SMB)</option>
                    <option value="H">SEKOLAH MENENGAH KLUSTER</option>
                    <option value="I">SEKOLAH SUKAN(SS)</option>
                    <option value="J">SEKOLAH MODEL KHAS</option>
                    <option value="K">SEKOLAH MENENGAH PERSENDIRIAN(SWASTA)</option>
                    <option value="L">SEKOLAH MENENGAH PENDIDIKAN KHAS(KHAS)</option>
                    <option value="M">MAKTAB TENTERA DIRAJA MALAYSIA (MTD)</option>
                    <option value="N">LAIN-LAIN</option>
                    </select>
        </div><!-- form group -->
    </div><!-- col -->
    <div class="col-md-12 col-lg-6">
        <div class="form-group">
        <label class="form-control-label">School Name: <span class="tx-danger">*</span></label>
        <input id="" class="form-control" name="schoolname" placeholder="Enter School Name" value="" type="text" style="text-transform:uppercase" required>
        </div><!-- form group -->
    </div><!-- col -->
    </div><!-- row -->
    <p class="mg-b-30"></p>
      <p class="mg-b-20">Core Subjects</p>
    <p class="mg-b-20"></p>
    <div class="table-responsive">
       
            <table class="table table-bordered mg-b-0" id="tableID">
              <thead>
                <tr>
                  <th class="wd-5p">ID</th>
                  <th class="wd-30p">Subjects</th>
                  <th class="wd-40p">Gred</th>
                </tr>
              </thead>
              <tbody>
                
                <tr class="something1 A">
                 <td>1</td>
                  <td width="200">
                  <input id="" class="form-control" name="sub1" placeholder="Enter School Name" value="BAHASA MELAYU" type="text" style="text-transform:uppercase" readonly></td>
                  <td>
                        
                  <select name="gred1_A" class="form-control select2">
                        <option value="">Select</option>
                                                <option value="0,18">A+</option>
                                                <option value="1,16">A  / 1A / A1</option>
                                                <option value="2,14">A- / 2A / A2</option>
                                                <option value="3,12">B+ / 3B / C3</option>
                                                <option value="4,10">B  / 4B / C4</option>
                                                <option value="5,8">C+ / 5C / C5</option>
                                                <option value="6,6">C  / 6C / C6</option>
                                                <option value="7,4">D  / 7D / P7</option>
                                                <option value="8,2">E  / 8E / P8</option>
                                                <option value="9,0">F  / 9G / F9</option>
                                                <option value="R,">Rujukan LPM</option>
                                                <option value="Z,">Masalah Keputusan</option>
                                                <option value="T,">Tidak Hadir</option>
                                                <option value="X,0">Tiada</option>
                                                </select>
                  </td>
                </tr>
                <tr class="something1 A">
                    <td>2</td>
                    <td><input id="" class="form-control" name="sub2" placeholder="Enter School Name" value="MATEMATIK" type="text" style="text-transform:uppercase" readonly></td>
                      <td>
                        <select name="gred2_A" class="form-control select2">
                        <option value=" ">Select</option>
                                                <option value="0,18">A+</option>
                                                <option value="1,16">A  / 1A / A1</option>
                                                <option value="2,14">A- / 2A / A2</option>
                                                <option value="3,12">B+ / 3B / C3</option>
                                                <option value="4,10">B  / 4B / C4</option>
                                                <option value="5,8">C+ / 5C / C5</option>
                                                <option value="6,6">C  / 6C / C6</option>
                                                <option value="7,4">D  / 7D / P7</option>
                                                <option value="8,2">E  / 8E / P8</option>
                                                <option value="9,0">F  / 9G / F9</option>
                                                <option value="R,">Rujukan LPM</option>
                                                <option value="Z,">Masalah Keputusan</option>
                                                <option value="T,">Tidak Hadir</option>
                                                <option value="X,0">Tiada</option>
                                                </select>
                    </td>
                </tr>
                <tr class="something1 A">
                    <td>3</td>
                    <td><input id="" class="form-control" name="sub3" placeholder="Enter School Name" value="SAINS" type="text" style="text-transform:uppercase" readonly></td>
                      <td>
                        <select name="gred3_A" class="form-control select2">
                        <option value=" ">Select</option>
                                                <option value="0,18">A+</option>
                                                <option value="1,16">A  / 1A / A1</option>
                                                <option value="2,14">A- / 2A / A2</option>
                                                <option value="3,12">B+ / 3B / C3</option>
                                                <option value="4,10">B  / 4B / C4</option>
                                                <option value="5,8">C+ / 5C / C5</option>
                                                <option value="6,6">C  / 6C / C6</option>
                                                <option value="7,4">D  / 7D / P7</option>
                                                <option value="8,2">E  / 8E / P8</option>
                                                <option value="9,0">F  / 9G / F9</option>
                                                <option value="R,">Rujukan LPM</option>
                                                <option value="Z,">Masalah Keputusan</option>
                                                <option value="T,">Tidak Hadir</option>
                                                <option value="X,0">Tiada</option>
                                                </select>
                    </td>
                </tr>
                <tr class="something1 A">
                    <td>4</td>
                    <td><input id="" class="form-control" name="sub4" placeholder="Enter School Name" value="SEJARAH" type="text" style="text-transform:uppercase" readonly></td>
                      <td>
                        <select name="gred4_A" class="form-control select2">
                        <option value=" ">Select</option>
                                                <option value="0,18">A+</option>
                                                <option value="1,16">A  / 1A / A1</option>
                                                <option value="2,14">A- / 2A / A2</option>
                                                <option value="3,12">B+ / 3B / C3</option>
                                                <option value="4,10">B  / 4B / C4</option>
                                                <option value="5,8">C+ / 5C / C5</option>
                                                <option value="6,6">C  / 6C / C6</option>
                                                <option value="7,4">D  / 7D / P7</option>
                                                <option value="8,2">E  / 8E / P8</option>
                                                <option value="9,0">F  / 9G / F9</option>
                                                <option value="R,">Rujukan LPM</option>
                                                <option value="Z,">Masalah Keputusan</option>
                                                <option value="T,">Tidak Hadir</option>
                                                <option value="X,0">Tiada</option>
                                                </select>
                    </td>
                </tr>
                
                <tr class="something1 B">
                    <td>1</td>
                    <td><input id="" class="form-control" name="sub1" placeholder="Enter School Name" value="MATEMATIK" type="text" style="text-transform:uppercase" readonly></td>
                      <td>
                        <select name="gred1_B" class="form-control select2">
                        <option value=" ">Select</option>
                                                <option value="0,18">A+</option>
                                                <option value="1,16">A  / 1A / A1</option>
                                                <option value="2,14">A- / 2A / A2</option>
                                                <option value="3,12">B+ / 3B / C3</option>
                                                <option value="4,10">B  / 4B / C4</option>
                                                <option value="5,8">C+ / 5C / C5</option>
                                                <option value="6,6">C  / 6C / C6</option>
                                                <option value="7,4">D  / 7D / P7</option>
                                                <option value="8,2">E  / 8E / P8</option>
                                                <option value="9,0">F  / 9G / F9</option>
                                                <option value="R,">Rujukan LPM</option>
                                                <option value="Z,">Masalah Keputusan</option>
                                                <option value="T,">Tidak Hadir</option>
                                                <option value="X,0">Tiada</option>
                                                </select>
                    </td>
                </tr>
                <tr class="something1 B">
                    <td>2</td>
                    <td><input id="" class="form-control" name="sub2" placeholder="Enter School Name" value="MATEMATIK TAMBAHAN" type="text" style="text-transform:uppercase" readonly></td>
                      <td>
                        <select name="gred2_B" class="form-control select2">
                        <option value=" ">Select</option>
                                                <option value="0,18">A+</option>
                                                <option value="1,16">A  / 1A / A1</option>
                                                <option value="2,14">A- / 2A / A2</option>
                                                <option value="3,12">B+ / 3B / C3</option>
                                                <option value="4,10">B  / 4B / C4</option>
                                                <option value="5,8">C+ / 5C / C5</option>
                                                <option value="6,6">C  / 6C / C6</option>
                                                <option value="7,4">D  / 7D / P7</option>
                                                <option value="8,2">E  / 8E / P8</option>
                                                <option value="9,0">F  / 9G / F9</option>
                                                <option value="R,">Rujukan LPM</option>
                                                <option value="Z,">Masalah Keputusan</option>
                                                <option value="T,">Tidak Hadir</option>
                                                <option value="X,0">Tiada</option>
                                                </select>
                    </td>
                </tr>
                <tr class="something1 B">
                    <td>3</td>
                    <td><input id="" class="form-control" name="sub3" placeholder="Enter School Name" value="FIZIK" type="text" style="text-transform:uppercase" readonly></td>
                      <td>
                        <select name="gred3_B" class="form-control select2">
                        <option value=" ">Select</option>
                                                <option value="0,18">A+</option>
                                                <option value="1,16">A  / 1A / A1</option>
                                                <option value="2,14">A- / 2A / A2</option>
                                                <option value="3,12">B+ / 3B / C3</option>
                                                <option value="4,10">B  / 4B / C4</option>
                                                <option value="5,8">C+ / 5C / C5</option>
                                                <option value="6,6">C  / 6C / C6</option>
                                                <option value="7,4">D  / 7D / P7</option>
                                                <option value="8,2">E  / 8E / P8</option>
                                                <option value="9,0">F  / 9G / F9</option>
                                                <option value="R,">Rujukan LPM</option>
                                                <option value="Z,">Masalah Keputusan</option>
                                                <option value="T,">Tidak Hadir</option>
                                                <option value="X,0">Tiada</option>
                                                </select>
                    </td>
                </tr>
                <tr class="something1 B">
                    <td>4</td>
                    <td><input id="" class="form-control" name="sub4" placeholder="Enter School Name" value="KIMIA" type="text" style="text-transform:uppercase" readonly></td>
                      <td>
                        <select name="gred4_B" class="form-control select2">
                        <option value=" ">Select</option>
                                                <option value="0,18">A+</option>
                                                <option value="1,16">A  / 1A / A1</option>
                                                <option value="2,14">A- / 2A / A2</option>
                                                <option value="3,12">B+ / 3B / C3</option>
                                                <option value="4,10">B  / 4B / C4</option>
                                                <option value="5,8">C+ / 5C / C5</option>
                                                <option value="6,6">C  / 6C / C6</option>
                                                <option value="7,4">D  / 7D / P7</option>
                                                <option value="8,2">E  / 8E / P8</option>
                                                <option value="9,0">F  / 9G / F9</option>
                                                <option value="R,">Rujukan LPM</option>
                                                <option value="Z,">Masalah Keputusan</option>
                                                <option value="T,">Tidak Hadir</option>
                                                <option value="X,0">Tiada</option>
                                                </select>
                    </td>
                </tr>
                
                <tr class="something1 A">
                  <td>5</td>
                  <td><select name="sub5_A" class="form-control select2">
                <option value=" ">Select</option>
                                <option value="5301" > HIFZ AL QURAN</option>                <option value="5302" > MAHARAT AL QURAN</option>                <option value="5227" > PENDIDIKAN AL-QURAN DAN AL-SUNNAH</option>                <option value="1223" > PENDIDIKAN ISLAM</option>                <option value="1225" > PENDIDIKAN MORAL</option>                </select><span class="tx-danger">*select subject with highest gred</span></td>
                  <td><select name="gred5_A" class="form-control select2">
                        <option value=" ">Select</option>
                                                <option value="0,18">A+</option>
                                                <option value="1,16">A  / 1A / A1</option>
                                                <option value="2,14">A- / 2A / A2</option>
                                                <option value="3,12">B+ / 3B / C3</option>
                                                <option value="4,10">B  / 4B / C4</option>
                                                <option value="5,8">C+ / 5C / C5</option>
                                                <option value="6,6">C  / 6C / C6</option>
                                                <option value="7,4">D  / 7D / P7</option>
                                                <option value="8,2">E  / 8E / P8</option>
                                                <option value="9,0">F  / 9G / F9</option>
                                                <option value="R,">Rujukan LPM</option>
                                                <option value="Z,">Masalah Keputusan</option>
                                                <option value="T,">Tidak Hadir</option>
                                                <option value="X,0">Tiada</option>
                                                </select>
                  </td>
                </tr>
                <tr class="something1 B">
                  <td>5</td>
                  <td><select name="sub5" class="form-control select2">
                <option value=" ">Select</option>
                                <option value="4561" > ADDITIONAL SCIENCE</option>                <option value="3768" > ASAS KELESTARIAN</option>                <option value="4551" > BIOLOGY</option>                <option value="3767" > EKONOMI</option>                <option value="3757" > EKONOMI ASAS</option>                <option value="3758" > EKONOMI RUMAH TANGGA</option>                <option value="3771" > GRAFIK KOMUNIKASI TEKNIKAL</option>                <option value="3765" > INFORMATION AND COMMUNICATION TECHNOLOGY</option>                <option value="3759" > LUKISAN KEJURUTERAAN</option>                <option value="3762" > PENGAJIAN KEJURUTERAAN ELEKTRIK DAN ELEKTRONIK</option>                <option value="3760" > PENGAJIAN KEJURUTERAAN MEKANIKAL</option>                <option value="4571" > PENGETAHUAN SAINS SUKAN</option>                <option value="8862" > PENYEDIAAN & PERKHIDMATAN MAKANAN</option>                <option value="3755" > PERDAGANGAN</option>                <option value="3766" > PERNIAGAAN</option>                <option value="3729" > PERTANIAN</option>                <option value="3756" > PRINSIP PERAKAUNAN</option>                <option value="3763" > REKA CIPTA</option>                <option value="3528" > SAINS PERTANIAN</option>                <option value="3769" > SAINS RUMAH TANGGA</option>                <option value="4572" > SAINS SUKAN</option>                <option value="3764" > TEKNOLOGI KEJURUTERAAN</option>                </select><span class="tx-danger">*select subject with highest gred</span></td>
                  <td><select name="gred5_B" class="form-control select2">
                        <option value=" ">Select</option>
                                                <option value="0,18">A+</option>
                                                <option value="1,16">A  / 1A / A1</option>
                                                <option value="2,14">A- / 2A / A2</option>
                                                <option value="3,12">B+ / 3B / C3</option>
                                                <option value="4,10">B  / 4B / C4</option>
                                                <option value="5,8">C+ / 5C / C5</option>
                                                <option value="6,6">C  / 6C / C6</option>
                                                <option value="7,4">D  / 7D / P7</option>
                                                <option value="8,2">E  / 8E / P8</option>
                                                <option value="9,0">F  / 9G / F9</option>
                                                <option value="R,">Rujukan LPM</option>
                                                <option value="Z,">Masalah Keputusan</option>
                                                <option value="T,">Tidak Hadir</option>
                                                <option value="X,0">Tiada</option>
                                                </select>
                  </td>
                </tr>
                <tr class="something1 B">
                  <td>6</td>
                  <td><input id="" class="form-control" name="sub6_B" placeholder="Enter School Name" value="BAHASA MELAYU" type="text" style="text-transform:uppercase" readonly></td></td>
                  <td><select name="gred6_B" class="form-control select2">
                        <option value=" ">Select</option>
                                                <option value="0,18">A+</option>
                                                <option value="1,16">A  / 1A / A1</option>
                                                <option value="2,14">A- / 2A / A2</option>
                                                <option value="3,12">B+ / 3B / C3</option>
                                                <option value="4,10">B  / 4B / C4</option>
                                                <option value="5,8">C+ / 5C / C5</option>
                                                <option value="6,6">C  / 6C / C6</option>
                                                <option value="7,4">D  / 7D / P7</option>
                                                <option value="8,2">E  / 8E / P8</option>
                                                <option value="9,0">F  / 9G / F9</option>
                                                <option value="R,">Rujukan LPM</option>
                                                <option value="Z,">Masalah Keputusan</option>
                                                <option value="T,">Tidak Hadir</option>
                                                <option value="X,0">Tiada</option>
                                                </select>
                  </td>
                </tr>
                <tr class="something1 B">
                  <td>7</td>
                  <td><input id="" class="form-control" name="sub7_B" placeholder="Enter School Name" value="SEJARAH" type="text" style="text-transform:uppercase" readonly></td></td>
                  <td><select name="gred7_B" class="form-control select2">
                        <option value=" ">Select</option>
                                                <option value="0,18">A+</option>
                                                <option value="1,16">A  / 1A / A1</option>
                                                <option value="2,14">A- / 2A / A2</option>
                                                <option value="3,12">B+ / 3B / C3</option>
                                                <option value="4,10">B  / 4B / C4</option>
                                                <option value="5,8">C+ / 5C / C5</option>
                                                <option value="6,6">C  / 6C / C6</option>
                                                <option value="7,4">D  / 7D / P7</option>
                                                <option value="8,2">E  / 8E / P8</option>
                                                <option value="9,0">F  / 9G / F9</option>
                                                <option value="R,">Rujukan LPM</option>
                                                <option value="Z,">Masalah Keputusan</option>
                                                <option value="T,">Tidak Hadir</option>
                                                <option value="X,0">Tiada</option>
                                                </select>
                  </td>
                </tr>
                <tr class="something1 A">
                  <td>6</td>
                  <td><select name="sub6_A" class="form-control select2">
                <option value=" ">Select</option>
                                <option value="3472" > ADDITIONAL MATHEMATICS</option>                <option value="4561" > ADDITIONAL SCIENCE</option>                <option value="7302" > AKUAKULTUR DAN HAIWAN REKREASI</option>                <option value="5405" > AL-ADAB WA AL-BALAGHAH</option>                <option value="5403" > AL-LUGHAH AL-ARABIAH AL-MU ASIRAH</option>                <option value="5402" > AL-SYARIAH</option>                <option value="8302" > AMALAN BENGKEL MEKANIKAL</option>                <option value="8202" > APLIKASI ELEKTRIK DAN ELEKTRONIK</option>                <option value="8701" > APLIKASI KOMPUTER DALAM PERNIAGAAN</option>                <option value="4581" > APPLIED SCIENCE</option>                <option value="3768" > ASAS KELESTARIAN</option>                <option value="8552" > ASAS KEMAHIRAN PELANCONGAN</option>                <option value="8843" > ASAS PEMEROSESAN MAKLUMAT</option>                <option value="7205" > ASUHAN DAN PENDIDIKAN AWAL KANAK-KANAK</option>                <option value="8870" > ASUHAN KANAK-KANAK</option>                <option value="8322" > AUTOMOTIF ELEKTRIK DAN DISEL</option>                <option value="8321" > AUTOMOTIF KENDERAAN</option>                <option value="8101" > BAHAN BINAAN</option>                <option value="2361" > BAHASA ARAB / BAHASA ARAB TINGGI</option>                <option value="6362" > BAHASA ARAB KOMUNIKASI</option>                <option value="6351" > BAHASA CINA</option>                <option value="6356" > BAHASA IBAN</option>                <option value="1119" > BAHASA INGGERIS</option>                <option value="6405" > BAHASA JEPUN</option>                <option value="6401" > BAHASA JERMAN</option>                <option value="6357" > BAHASA KADAZAN/DUSUN</option>                <option value="1103" > BAHASA MELAYU</option>                <option value="9303" > BAHASA PERANCIS</option>                <option value="9378" > BAHASA PUNJABI</option>                <option value="6354" > BAHASA TAMIL</option>                <option value="9221" > BIBLE KNOWLEDGE</option>                <option value="4551" > BIOLOGY</option>                <option value="4541" > CHEMISTRY</option>                <option value="8522" > DANDANAN RAMBUT</option>                <option value="3767" > EKONOMI</option>                <option value="3757" > EKONOMI ASAS</option>                <option value="3758" > EKONOMI RUMAH TANGGA</option>                <option value="6355" > ENGLISH FOR SCIENCE AND TECHNOLOGY</option>                <option value="8401" > FUNDAMENTALS OF PROGRAMMING</option>                <option value="2280" > GEOGRAFI</option>                <option value="7206" > GERONTOLOGI ASAS DAN PERKHIDMATAN GERIATRIK</option>                <option value="7404" > GRAFIK BERKOMPUTER</option>                <option value="3771" > GRAFIK KOMUNIKASI TEKNIKAL</option>                <option value="7402" > HIASAN DALAMAN ASAS</option>                <option value="5301" > HIFZ AL QURAN</option>                <option value="8883 / 8602" > HORTIKULTUR HIASAN DAN LANDSKAP</option>                <option value="3765" > INFORMATION AND COMMUNICATION TECHNOLOGY</option>                <option value="7202" > KATERING DAN PENYAJIAN</option>                <option value="8884" > KEJENTERAAN LADANG</option>                <option value="8601" > KEJENTERAAN PERTANIAN</option>                <option value="8815" > KERJA KAYU & BATA</option>                <option value="8824" > KERJA KIMPALAN #</option>                <option value="8812" > KERJA MENGGEGAS & MELARIK</option>                <option value="7103" > KERJA PAIP DOMESTIK</option>                <option value="8830" > KERJA PENYEJUKAN & PENYAMANAN UDARA</option>                <option value="9216" > KESUSASTERAAN CINA</option>                <option value="2215" > KESUSASTERAAN MELAYU</option>                <option value="9217" > KESUSASTERAAN TAMIL</option>                <option value="8331" > KIMPALAN ARKA</option>                <option value="7105" > KIMPALAN ARKA DAN GAS</option>                <option value="8332" > KIMPALAN GAS</option>                <option value="2612" > KOMUNIKASI VISUAL</option>                <option value="7301" > LANDSKAP DAN NURSERI</option>                <option value="2205" > LITERATURE IN ENGLISH</option>                <option value="8828" > LUKISAN GEOMETRI & AUTOMOTIF</option>                <option value="8816" > LUKISAN GEOMETRI & BINAAN BANGUNAN</option>                <option value="8819" > LUKISAN GEOMETRI & ELEKTRIK</option>                <option value="8822" > LUKISAN GEOMETRI & ELEKTRONIK</option>                <option value="8825" > LUKISAN GEOMETRI & FABRIKASI LOGAM</option>                <option value="8813" > LUKISAN GEOMETRI & MESIN</option>                <option value="8831" > LUKISAN GEOMETRI & PENYAMANAN UDARA</option>                <option value="3759" > LUKISAN KEJURUTERAAN</option>                <option value="5302" > MAHARAT AL QURAN</option>                <option value="5404" > MANAHIJ AL-ULUM AL-ISLAMIAH</option>                <option value="0000" > MATA PELAJARAN SELAIN DI ATAS</option>                <option value="1449" > MATHEMATICS</option>                <option value="8501" > MEMBUAT PAKAIAN</option>                <option value="7102" > MEMBUAT PERABOT</option>                <option value="8871" > MENGASUH DAN MEMBIMBING KANAK-KANAK</option>                <option value="8827" > MENSERVIS & MEMBAIKI KENDERAAN</option>                <option value="7106" > MENSERVIS AUTOMOBIL</option>                <option value="7107" > MENSERVIS MOTOSIKAL</option>                <option value="7109" > MENSERVIS PERALATAN ELEKTRIK DOMESTIK</option>                <option value="7108" > MENSERVIS PERALATAN PENYEJUKAN DAN PENYAMANAN UDARA</option>                <option value="8821" > MENSERVIS RADIO & TV</option>                <option value="2622" > MUZIK</option>                <option value="8512" > PATISSERIE</option>                <option value="8551" > PELANCONGAN DAN REKREASI</option>                <option value="8818" > PEMASANGAN & KAWALAN ELEKTRIK</option>                <option value="7101" > PEMBINAAN DOMESTIK</option>                <option value="8301" > PEMESINAN BERKOMPUTER</option>                <option value="8604" > PEMPROSESAN HASIL PERTANIAN</option>                <option value="7203" > PEMPROSESAN MAKANAN</option>                <option value="7104" > PENDAWAIAN DOMESTIK</option>                <option value="5227" > PENDIDIKAN AL-QURAN DAN AL-SUNNAH</option>                <option value="1223" > PENDIDIKAN ISLAM</option>                <option value="1225" > PENDIDIKAN MORAL</option>                <option value="2621" > PENDIDIKAN MUZIK</option>                <option value="2611" > PENDIDIKAN SENI VISUAL</option>                <option value="5228" > PENDIDIKAN SYARI AH ISLAMIAH</option>                <option value="3529" > PENGAJIAN AGROTEKNOLOGI</option>                <option value="3761" > PENGAJIAN KEJURUTERAAN AWAM</option>                <option value="3762" > PENGAJIAN KEJURUTERAAN ELEKTRIK DAN ELEKTRONIK</option>                <option value="3760" > PENGAJIAN KEJURUTERAAN MEKANIKAL</option>                <option value="3754" > PENGAJIAN KEUSAHAWANAN</option>                <option value="8531" > PENGAJIAN PERKEMBANGAN KANAK-KANAK</option>                <option value="8881 / 8603" > PENGELUARAN TANAMAN</option>                <option value="8882 / 8605" > PENGELUARAN TERNAKAN</option>                <option value="4571" > PENGETAHUAN SAINS SUKAN</option>                <option value="8885" > PENGURUSAN LADANG</option>                <option value="7204" > PENJAGAAN MUKA DAN DANDANAN RAMBUT</option>                <option value="8542" > PENYAJIAN MAKANAN DAN MINUMAN</option>                <option value="8312" > PENYAMANAN UDARA</option>                <option value="8862" > PENYEDIAAN & PERKHIDMATAN MAKANAN</option>                <option value="8541" > PENYEDIAAN MASAKAN BARAT DAN TIMUR</option>                <option value="8311" > PENYEJUKAN</option>                <option value="8702" > PERAKAUNAN PERNIAGAAN</option>                <option value="3755" > PERDAGANGAN</option>                <option value="8532" > PERKHIDMATAN AWAL KANAK-KANAK</option>                <option value="3766" > PERNIAGAAN</option>                <option value="8521" > PERSOLEKAN</option>                <option value="8866" > PERSOLEKAN & MENDANDAN RAMBUT</option>                <option value="3729" > PERTANIAN</option>                <option value="4531" > PHYSICS</option>                <option value="8502" > POLA PAKAIAN</option>                <option value="8201" > PRINSIP ELEKTRIK DAN ELEKTRONIK</option>                <option value="8201" > Prinsip Elektrik Dan Elektronik</option>                <option value="3756" > PRINSIP PERAKAUNAN</option>                <option value="7403" > PRODUKSI MULTIMEDIA</option>                <option value="8402" > PROGRAMMING AND DEVELOPMENT TOOLS</option>                <option value="3763" > REKA CIPTA</option>                <option value="7201" > REKAAN DAN JAHITAN PAKAIAN</option>                <option value="8864" > REKAAN FESYEN & MEMBUAT PAKAIAN</option>                <option value="2614" > REKABENTUK</option>                <option value="8511" > ROTI DAN MAKANAN YIS</option>                <option value="3770" > SAINS KOMPUTER</option>                <option value="3528" > SAINS PERTANIAN</option>                <option value="3769" > SAINS RUMAH TANGGA</option>                <option value="4572" > SAINS SUKAN</option>                <option value="1511" > SCIENCE</option>                <option value="1249" > SEJARAH</option>                <option value="2613" > SENI HALUS</option>                <option value="7401" > SENI REKA TANDA</option>                <option value="7303" > TANAMAN MAKANAN</option>                <option value="2631" > TARI</option>                <option value="5226" > TASAWWUR ISLAM</option>                <option value="2641" > TEATER</option>                <option value="8826" > TEKNOLOGI AUTOMOTIF</option>                <option value="8868" > TEKNOLOGI BAKERI & KONFEKSIONERI</option>                <option value="8811" > TEKNOLOGI BENGKEL MESIN</option>                <option value="8102" > TEKNOLOGI BINAAN</option>                <option value="8814" > TEKNOLOGI BINAAN BANGUNAN</option>                <option value="8817" > TEKNOLOGI ELEKTRIK</option>                <option value="8820" > TEKNOLOGI ELEKTRONIK</option>                <option value="8861" > TEKNOLOGI KATERING</option>                <option value="3764" > TEKNOLOGI KEJURUTERAAN</option>                <option value="8823" > TEKNOLOGI KIMPALAN & FABRIKASI LOGAM</option>                <option value="8703" > TEKNOLOGI PEJABAT PERNIAGAAN</option>                <option value="8829" > TEKNOLOGI PENYEJUKAN & PENYAMANAN UDARA</option>                <option value="8863" > TEKNOLOGI REKAAN FESYEN & MEMBUAT PAKAIAN</option>                <option value="8865" > TEKNOLOGI SENI KECANTIKAN</option>                <option value="5303" > TURATH AL-QURAN DAN AL-SUNNAH</option>                <option value="5305" > TURATH BAHASA ARAB</option>                <option value="5304" > TURATH DIRASAT ISLAMIAH</option>                <option value="5401" > USUL AL-DIN</option>                </select></td>
                  <td><select name="gred6_A" class="form-control select2">
                        <option value=" ">Select</option>
                                                <option value="0,18">A+</option>
                                                <option value="1,16">A  / 1A / A1</option>
                                                <option value="2,14">A- / 2A / A2</option>
                                                <option value="3,12">B+ / 3B / C3</option>
                                                <option value="4,10">B  / 4B / C4</option>
                                                <option value="5,8">C+ / 5C / C5</option>
                                                <option value="6,6">C  / 6C / C6</option>
                                                <option value="7,4">D  / 7D / P7</option>
                                                <option value="8,2">E  / 8E / P8</option>
                                                <option value="9,0">F  / 9G / F9</option>
                                                <option value="R,">Rujukan LPM</option>
                                                <option value="Z,">Masalah Keputusan</option>
                                                <option value="T,">Tidak Hadir</option>
                                                <option value="X,0">Tiada</option>
                                                </select>
                  </td>
                </tr>
                <tr class="something1 A">
                  <td>7</td>
                  <td><select name="sub7_A" class="form-control select2">
                <option value=" ">Select</option>
                                <option value="3472" > ADDITIONAL MATHEMATICS</option>                <option value="4561" > ADDITIONAL SCIENCE</option>                <option value="7302" > AKUAKULTUR DAN HAIWAN REKREASI</option>                <option value="5405" > AL-ADAB WA AL-BALAGHAH</option>                <option value="5403" > AL-LUGHAH AL-ARABIAH AL-MU ASIRAH</option>                <option value="5402" > AL-SYARIAH</option>                <option value="8302" > AMALAN BENGKEL MEKANIKAL</option>                <option value="8202" > APLIKASI ELEKTRIK DAN ELEKTRONIK</option>                <option value="8701" > APLIKASI KOMPUTER DALAM PERNIAGAAN</option>                <option value="4581" > APPLIED SCIENCE</option>                <option value="3768" > ASAS KELESTARIAN</option>                <option value="8552" > ASAS KEMAHIRAN PELANCONGAN</option>                <option value="8843" > ASAS PEMEROSESAN MAKLUMAT</option>                <option value="7205" > ASUHAN DAN PENDIDIKAN AWAL KANAK-KANAK</option>                <option value="8870" > ASUHAN KANAK-KANAK</option>                <option value="8322" > AUTOMOTIF ELEKTRIK DAN DISEL</option>                <option value="8321" > AUTOMOTIF KENDERAAN</option>                <option value="8101" > BAHAN BINAAN</option>                <option value="2361" > BAHASA ARAB / BAHASA ARAB TINGGI</option>                <option value="6362" > BAHASA ARAB KOMUNIKASI</option>                <option value="6351" > BAHASA CINA</option>                <option value="6356" > BAHASA IBAN</option>                <option value="1119" > BAHASA INGGERIS</option>                <option value="6405" > BAHASA JEPUN</option>                <option value="6401" > BAHASA JERMAN</option>                <option value="6357" > BAHASA KADAZAN/DUSUN</option>                <option value="1103" > BAHASA MELAYU</option>                <option value="9303" > BAHASA PERANCIS</option>                <option value="9378" > BAHASA PUNJABI</option>                <option value="6354" > BAHASA TAMIL</option>                <option value="9221" > BIBLE KNOWLEDGE</option>                <option value="4551" > BIOLOGY</option>                <option value="4541" > CHEMISTRY</option>                <option value="8522" > DANDANAN RAMBUT</option>                <option value="3767" > EKONOMI</option>                <option value="3757" > EKONOMI ASAS</option>                <option value="3758" > EKONOMI RUMAH TANGGA</option>                <option value="6355" > ENGLISH FOR SCIENCE AND TECHNOLOGY</option>                <option value="8401" > FUNDAMENTALS OF PROGRAMMING</option>                <option value="2280" > GEOGRAFI</option>                <option value="7206" > GERONTOLOGI ASAS DAN PERKHIDMATAN GERIATRIK</option>                <option value="7404" > GRAFIK BERKOMPUTER</option>                <option value="3771" > GRAFIK KOMUNIKASI TEKNIKAL</option>                <option value="7402" > HIASAN DALAMAN ASAS</option>                <option value="5301" > HIFZ AL QURAN</option>                <option value="8883 / 8602" > HORTIKULTUR HIASAN DAN LANDSKAP</option>                <option value="3765" > INFORMATION AND COMMUNICATION TECHNOLOGY</option>                <option value="7202" > KATERING DAN PENYAJIAN</option>                <option value="8884" > KEJENTERAAN LADANG</option>                <option value="8601" > KEJENTERAAN PERTANIAN</option>                <option value="8815" > KERJA KAYU & BATA</option>                <option value="8824" > KERJA KIMPALAN #</option>                <option value="8812" > KERJA MENGGEGAS & MELARIK</option>                <option value="7103" > KERJA PAIP DOMESTIK</option>                <option value="8830" > KERJA PENYEJUKAN & PENYAMANAN UDARA</option>                <option value="9216" > KESUSASTERAAN CINA</option>                <option value="2215" > KESUSASTERAAN MELAYU</option>                <option value="9217" > KESUSASTERAAN TAMIL</option>                <option value="8331" > KIMPALAN ARKA</option>                <option value="7105" > KIMPALAN ARKA DAN GAS</option>                <option value="8332" > KIMPALAN GAS</option>                <option value="2612" > KOMUNIKASI VISUAL</option>                <option value="7301" > LANDSKAP DAN NURSERI</option>                <option value="2205" > LITERATURE IN ENGLISH</option>                <option value="8828" > LUKISAN GEOMETRI & AUTOMOTIF</option>                <option value="8816" > LUKISAN GEOMETRI & BINAAN BANGUNAN</option>                <option value="8819" > LUKISAN GEOMETRI & ELEKTRIK</option>                <option value="8822" > LUKISAN GEOMETRI & ELEKTRONIK</option>                <option value="8825" > LUKISAN GEOMETRI & FABRIKASI LOGAM</option>                <option value="8813" > LUKISAN GEOMETRI & MESIN</option>                <option value="8831" > LUKISAN GEOMETRI & PENYAMANAN UDARA</option>                <option value="3759" > LUKISAN KEJURUTERAAN</option>                <option value="5302" > MAHARAT AL QURAN</option>                <option value="5404" > MANAHIJ AL-ULUM AL-ISLAMIAH</option>                <option value="0000" > MATA PELAJARAN SELAIN DI ATAS</option>                <option value="1449" > MATHEMATICS</option>                <option value="8501" > MEMBUAT PAKAIAN</option>                <option value="7102" > MEMBUAT PERABOT</option>                <option value="8871" > MENGASUH DAN MEMBIMBING KANAK-KANAK</option>                <option value="8827" > MENSERVIS & MEMBAIKI KENDERAAN</option>                <option value="7106" > MENSERVIS AUTOMOBIL</option>                <option value="7107" > MENSERVIS MOTOSIKAL</option>                <option value="7109" > MENSERVIS PERALATAN ELEKTRIK DOMESTIK</option>                <option value="7108" > MENSERVIS PERALATAN PENYEJUKAN DAN PENYAMANAN UDARA</option>                <option value="8821" > MENSERVIS RADIO & TV</option>                <option value="2622" > MUZIK</option>                <option value="8512" > PATISSERIE</option>                <option value="8551" > PELANCONGAN DAN REKREASI</option>                <option value="8818" > PEMASANGAN & KAWALAN ELEKTRIK</option>                <option value="7101" > PEMBINAAN DOMESTIK</option>                <option value="8301" > PEMESINAN BERKOMPUTER</option>                <option value="8604" > PEMPROSESAN HASIL PERTANIAN</option>                <option value="7203" > PEMPROSESAN MAKANAN</option>                <option value="7104" > PENDAWAIAN DOMESTIK</option>                <option value="5227" > PENDIDIKAN AL-QURAN DAN AL-SUNNAH</option>                <option value="1223" > PENDIDIKAN ISLAM</option>                <option value="1225" > PENDIDIKAN MORAL</option>                <option value="2621" > PENDIDIKAN MUZIK</option>                <option value="2611" > PENDIDIKAN SENI VISUAL</option>                <option value="5228" > PENDIDIKAN SYARI AH ISLAMIAH</option>                <option value="3529" > PENGAJIAN AGROTEKNOLOGI</option>                <option value="3761" > PENGAJIAN KEJURUTERAAN AWAM</option>                <option value="3762" > PENGAJIAN KEJURUTERAAN ELEKTRIK DAN ELEKTRONIK</option>                <option value="3760" > PENGAJIAN KEJURUTERAAN MEKANIKAL</option>                <option value="3754" > PENGAJIAN KEUSAHAWANAN</option>                <option value="8531" > PENGAJIAN PERKEMBANGAN KANAK-KANAK</option>                <option value="8881 / 8603" > PENGELUARAN TANAMAN</option>                <option value="8882 / 8605" > PENGELUARAN TERNAKAN</option>                <option value="4571" > PENGETAHUAN SAINS SUKAN</option>                <option value="8885" > PENGURUSAN LADANG</option>                <option value="7204" > PENJAGAAN MUKA DAN DANDANAN RAMBUT</option>                <option value="8542" > PENYAJIAN MAKANAN DAN MINUMAN</option>                <option value="8312" > PENYAMANAN UDARA</option>                <option value="8862" > PENYEDIAAN & PERKHIDMATAN MAKANAN</option>                <option value="8541" > PENYEDIAAN MASAKAN BARAT DAN TIMUR</option>                <option value="8311" > PENYEJUKAN</option>                <option value="8702" > PERAKAUNAN PERNIAGAAN</option>                <option value="3755" > PERDAGANGAN</option>                <option value="8532" > PERKHIDMATAN AWAL KANAK-KANAK</option>                <option value="3766" > PERNIAGAAN</option>                <option value="8521" > PERSOLEKAN</option>                <option value="8866" > PERSOLEKAN & MENDANDAN RAMBUT</option>                <option value="3729" > PERTANIAN</option>                <option value="4531" > PHYSICS</option>                <option value="8502" > POLA PAKAIAN</option>                <option value="8201" > PRINSIP ELEKTRIK DAN ELEKTRONIK</option>                <option value="8201" > Prinsip Elektrik Dan Elektronik</option>                <option value="3756" > PRINSIP PERAKAUNAN</option>                <option value="7403" > PRODUKSI MULTIMEDIA</option>                <option value="8402" > PROGRAMMING AND DEVELOPMENT TOOLS</option>                <option value="3763" > REKA CIPTA</option>                <option value="7201" > REKAAN DAN JAHITAN PAKAIAN</option>                <option value="8864" > REKAAN FESYEN & MEMBUAT PAKAIAN</option>                <option value="2614" > REKABENTUK</option>                <option value="8511" > ROTI DAN MAKANAN YIS</option>                <option value="3770" > SAINS KOMPUTER</option>                <option value="3528" > SAINS PERTANIAN</option>                <option value="3769" > SAINS RUMAH TANGGA</option>                <option value="4572" > SAINS SUKAN</option>                <option value="1511" > SCIENCE</option>                <option value="1249" > SEJARAH</option>                <option value="2613" > SENI HALUS</option>                <option value="7401" > SENI REKA TANDA</option>                <option value="7303" > TANAMAN MAKANAN</option>                <option value="2631" > TARI</option>                <option value="5226" > TASAWWUR ISLAM</option>                <option value="2641" > TEATER</option>                <option value="8826" > TEKNOLOGI AUTOMOTIF</option>                <option value="8868" > TEKNOLOGI BAKERI & KONFEKSIONERI</option>                <option value="8811" > TEKNOLOGI BENGKEL MESIN</option>                <option value="8102" > TEKNOLOGI BINAAN</option>                <option value="8814" > TEKNOLOGI BINAAN BANGUNAN</option>                <option value="8817" > TEKNOLOGI ELEKTRIK</option>                <option value="8820" > TEKNOLOGI ELEKTRONIK</option>                <option value="8861" > TEKNOLOGI KATERING</option>                <option value="3764" > TEKNOLOGI KEJURUTERAAN</option>                <option value="8823" > TEKNOLOGI KIMPALAN & FABRIKASI LOGAM</option>                <option value="8703" > TEKNOLOGI PEJABAT PERNIAGAAN</option>                <option value="8829" > TEKNOLOGI PENYEJUKAN & PENYAMANAN UDARA</option>                <option value="8863" > TEKNOLOGI REKAAN FESYEN & MEMBUAT PAKAIAN</option>                <option value="8865" > TEKNOLOGI SENI KECANTIKAN</option>                <option value="5303" > TURATH AL-QURAN DAN AL-SUNNAH</option>                <option value="5305" > TURATH BAHASA ARAB</option>                <option value="5304" > TURATH DIRASAT ISLAMIAH</option>                <option value="5401" > USUL AL-DIN</option>                </select></td>
                  <td><select name="gred7_A" class="form-control select2">
                        <option value=" ">Select</option>
                                                <option value="0,18">A+</option>
                                                <option value="1,16">A  / 1A / A1</option>
                                                <option value="2,14">A- / 2A / A2</option>
                                                <option value="3,12">B+ / 3B / C3</option>
                                                <option value="4,10">B  / 4B / C4</option>
                                                <option value="5,8">C+ / 5C / C5</option>
                                                <option value="6,6">C  / 6C / C6</option>
                                                <option value="7,4">D  / 7D / P7</option>
                                                <option value="8,2">E  / 8E / P8</option>
                                                <option value="9,0">F  / 9G / F9</option>
                                                <option value="R,">Rujukan LPM</option>
                                                <option value="Z,">Masalah Keputusan</option>
                                                <option value="T,">Tidak Hadir</option>
                                                <option value="X,0">Tiada</option>
                                                </select>
                  </td>
                </tr>
                <tr>
                <td>8</td>
                  <td> <select name="sub8" class="form-control select2">
                <option value=" ">Select</option>
                                <option value="3472" > ADDITIONAL MATHEMATICS</option>                <option value="4561" > ADDITIONAL SCIENCE</option>                <option value="7302" > AKUAKULTUR DAN HAIWAN REKREASI</option>                <option value="5405" > AL-ADAB WA AL-BALAGHAH</option>                <option value="5403" > AL-LUGHAH AL-ARABIAH AL-MU ASIRAH</option>                <option value="5402" > AL-SYARIAH</option>                <option value="8302" > AMALAN BENGKEL MEKANIKAL</option>                <option value="8202" > APLIKASI ELEKTRIK DAN ELEKTRONIK</option>                <option value="8701" > APLIKASI KOMPUTER DALAM PERNIAGAAN</option>                <option value="4581" > APPLIED SCIENCE</option>                <option value="3768" > ASAS KELESTARIAN</option>                <option value="8552" > ASAS KEMAHIRAN PELANCONGAN</option>                <option value="8843" > ASAS PEMEROSESAN MAKLUMAT</option>                <option value="7205" > ASUHAN DAN PENDIDIKAN AWAL KANAK-KANAK</option>                <option value="8870" > ASUHAN KANAK-KANAK</option>                <option value="8322" > AUTOMOTIF ELEKTRIK DAN DISEL</option>                <option value="8321" > AUTOMOTIF KENDERAAN</option>                <option value="8101" > BAHAN BINAAN</option>                <option value="2361" > BAHASA ARAB / BAHASA ARAB TINGGI</option>                <option value="6362" > BAHASA ARAB KOMUNIKASI</option>                <option value="6351" > BAHASA CINA</option>                <option value="6356" > BAHASA IBAN</option>                <option value="1119" > BAHASA INGGERIS</option>                <option value="6405" > BAHASA JEPUN</option>                <option value="6401" > BAHASA JERMAN</option>                <option value="6357" > BAHASA KADAZAN/DUSUN</option>                <option value="1103" > BAHASA MELAYU</option>                <option value="9303" > BAHASA PERANCIS</option>                <option value="9378" > BAHASA PUNJABI</option>                <option value="6354" > BAHASA TAMIL</option>                <option value="9221" > BIBLE KNOWLEDGE</option>                <option value="4551" > BIOLOGY</option>                <option value="4541" > CHEMISTRY</option>                <option value="8522" > DANDANAN RAMBUT</option>                <option value="3767" > EKONOMI</option>                <option value="3757" > EKONOMI ASAS</option>                <option value="3758" > EKONOMI RUMAH TANGGA</option>                <option value="6355" > ENGLISH FOR SCIENCE AND TECHNOLOGY</option>                <option value="8401" > FUNDAMENTALS OF PROGRAMMING</option>                <option value="2280" > GEOGRAFI</option>                <option value="7206" > GERONTOLOGI ASAS DAN PERKHIDMATAN GERIATRIK</option>                <option value="7404" > GRAFIK BERKOMPUTER</option>                <option value="3771" > GRAFIK KOMUNIKASI TEKNIKAL</option>                <option value="7402" > HIASAN DALAMAN ASAS</option>                <option value="5301" > HIFZ AL QURAN</option>                <option value="8883 / 8602" > HORTIKULTUR HIASAN DAN LANDSKAP</option>                <option value="3765" > INFORMATION AND COMMUNICATION TECHNOLOGY</option>                <option value="7202" > KATERING DAN PENYAJIAN</option>                <option value="8884" > KEJENTERAAN LADANG</option>                <option value="8601" > KEJENTERAAN PERTANIAN</option>                <option value="8815" > KERJA KAYU & BATA</option>                <option value="8824" > KERJA KIMPALAN #</option>                <option value="8812" > KERJA MENGGEGAS & MELARIK</option>                <option value="7103" > KERJA PAIP DOMESTIK</option>                <option value="8830" > KERJA PENYEJUKAN & PENYAMANAN UDARA</option>                <option value="9216" > KESUSASTERAAN CINA</option>                <option value="2215" > KESUSASTERAAN MELAYU</option>                <option value="9217" > KESUSASTERAAN TAMIL</option>                <option value="8331" > KIMPALAN ARKA</option>                <option value="7105" > KIMPALAN ARKA DAN GAS</option>                <option value="8332" > KIMPALAN GAS</option>                <option value="2612" > KOMUNIKASI VISUAL</option>                <option value="7301" > LANDSKAP DAN NURSERI</option>                <option value="2205" > LITERATURE IN ENGLISH</option>                <option value="8828" > LUKISAN GEOMETRI & AUTOMOTIF</option>                <option value="8816" > LUKISAN GEOMETRI & BINAAN BANGUNAN</option>                <option value="8819" > LUKISAN GEOMETRI & ELEKTRIK</option>                <option value="8822" > LUKISAN GEOMETRI & ELEKTRONIK</option>                <option value="8825" > LUKISAN GEOMETRI & FABRIKASI LOGAM</option>                <option value="8813" > LUKISAN GEOMETRI & MESIN</option>                <option value="8831" > LUKISAN GEOMETRI & PENYAMANAN UDARA</option>                <option value="3759" > LUKISAN KEJURUTERAAN</option>                <option value="5302" > MAHARAT AL QURAN</option>                <option value="5404" > MANAHIJ AL-ULUM AL-ISLAMIAH</option>                <option value="0000" > MATA PELAJARAN SELAIN DI ATAS</option>                <option value="1449" > MATHEMATICS</option>                <option value="8501" > MEMBUAT PAKAIAN</option>                <option value="7102" > MEMBUAT PERABOT</option>                <option value="8871" > MENGASUH DAN MEMBIMBING KANAK-KANAK</option>                <option value="8827" > MENSERVIS & MEMBAIKI KENDERAAN</option>                <option value="7106" > MENSERVIS AUTOMOBIL</option>                <option value="7107" > MENSERVIS MOTOSIKAL</option>                <option value="7109" > MENSERVIS PERALATAN ELEKTRIK DOMESTIK</option>                <option value="7108" > MENSERVIS PERALATAN PENYEJUKAN DAN PENYAMANAN UDARA</option>                <option value="8821" > MENSERVIS RADIO & TV</option>                <option value="2622" > MUZIK</option>                <option value="8512" > PATISSERIE</option>                <option value="8551" > PELANCONGAN DAN REKREASI</option>                <option value="8818" > PEMASANGAN & KAWALAN ELEKTRIK</option>                <option value="7101" > PEMBINAAN DOMESTIK</option>                <option value="8301" > PEMESINAN BERKOMPUTER</option>                <option value="8604" > PEMPROSESAN HASIL PERTANIAN</option>                <option value="7203" > PEMPROSESAN MAKANAN</option>                <option value="7104" > PENDAWAIAN DOMESTIK</option>                <option value="5227" > PENDIDIKAN AL-QURAN DAN AL-SUNNAH</option>                <option value="1223" > PENDIDIKAN ISLAM</option>                <option value="1225" > PENDIDIKAN MORAL</option>                <option value="2621" > PENDIDIKAN MUZIK</option>                <option value="2611" > PENDIDIKAN SENI VISUAL</option>                <option value="5228" > PENDIDIKAN SYARI AH ISLAMIAH</option>                <option value="3529" > PENGAJIAN AGROTEKNOLOGI</option>                <option value="3761" > PENGAJIAN KEJURUTERAAN AWAM</option>                <option value="3762" > PENGAJIAN KEJURUTERAAN ELEKTRIK DAN ELEKTRONIK</option>                <option value="3760" > PENGAJIAN KEJURUTERAAN MEKANIKAL</option>                <option value="3754" > PENGAJIAN KEUSAHAWANAN</option>                <option value="8531" > PENGAJIAN PERKEMBANGAN KANAK-KANAK</option>                <option value="8881 / 8603" > PENGELUARAN TANAMAN</option>                <option value="8882 / 8605" > PENGELUARAN TERNAKAN</option>                <option value="4571" > PENGETAHUAN SAINS SUKAN</option>                <option value="8885" > PENGURUSAN LADANG</option>                <option value="7204" > PENJAGAAN MUKA DAN DANDANAN RAMBUT</option>                <option value="8542" > PENYAJIAN MAKANAN DAN MINUMAN</option>                <option value="8312" > PENYAMANAN UDARA</option>                <option value="8862" > PENYEDIAAN & PERKHIDMATAN MAKANAN</option>                <option value="8541" > PENYEDIAAN MASAKAN BARAT DAN TIMUR</option>                <option value="8311" > PENYEJUKAN</option>                <option value="8702" > PERAKAUNAN PERNIAGAAN</option>                <option value="3755" > PERDAGANGAN</option>                <option value="8532" > PERKHIDMATAN AWAL KANAK-KANAK</option>                <option value="3766" > PERNIAGAAN</option>                <option value="8521" > PERSOLEKAN</option>                <option value="8866" > PERSOLEKAN & MENDANDAN RAMBUT</option>                <option value="3729" > PERTANIAN</option>                <option value="4531" > PHYSICS</option>                <option value="8502" > POLA PAKAIAN</option>                <option value="8201" > PRINSIP ELEKTRIK DAN ELEKTRONIK</option>                <option value="8201" > Prinsip Elektrik Dan Elektronik</option>                <option value="3756" > PRINSIP PERAKAUNAN</option>                <option value="7403" > PRODUKSI MULTIMEDIA</option>                <option value="8402" > PROGRAMMING AND DEVELOPMENT TOOLS</option>                <option value="3763" > REKA CIPTA</option>                <option value="7201" > REKAAN DAN JAHITAN PAKAIAN</option>                <option value="8864" > REKAAN FESYEN & MEMBUAT PAKAIAN</option>                <option value="2614" > REKABENTUK</option>                <option value="8511" > ROTI DAN MAKANAN YIS</option>                <option value="3770" > SAINS KOMPUTER</option>                <option value="3528" > SAINS PERTANIAN</option>                <option value="3769" > SAINS RUMAH TANGGA</option>                <option value="4572" > SAINS SUKAN</option>                <option value="1511" > SCIENCE</option>                <option value="1249" > SEJARAH</option>                <option value="2613" > SENI HALUS</option>                <option value="7401" > SENI REKA TANDA</option>                <option value="7303" > TANAMAN MAKANAN</option>                <option value="2631" > TARI</option>                <option value="5226" > TASAWWUR ISLAM</option>                <option value="2641" > TEATER</option>                <option value="8826" > TEKNOLOGI AUTOMOTIF</option>                <option value="8868" > TEKNOLOGI BAKERI & KONFEKSIONERI</option>                <option value="8811" > TEKNOLOGI BENGKEL MESIN</option>                <option value="8102" > TEKNOLOGI BINAAN</option>                <option value="8814" > TEKNOLOGI BINAAN BANGUNAN</option>                <option value="8817" > TEKNOLOGI ELEKTRIK</option>                <option value="8820" > TEKNOLOGI ELEKTRONIK</option>                <option value="8861" > TEKNOLOGI KATERING</option>                <option value="3764" > TEKNOLOGI KEJURUTERAAN</option>                <option value="8823" > TEKNOLOGI KIMPALAN & FABRIKASI LOGAM</option>                <option value="8703" > TEKNOLOGI PEJABAT PERNIAGAAN</option>                <option value="8829" > TEKNOLOGI PENYEJUKAN & PENYAMANAN UDARA</option>                <option value="8863" > TEKNOLOGI REKAAN FESYEN & MEMBUAT PAKAIAN</option>                <option value="8865" > TEKNOLOGI SENI KECANTIKAN</option>                <option value="5303" > TURATH AL-QURAN DAN AL-SUNNAH</option>                <option value="5305" > TURATH BAHASA ARAB</option>                <option value="5304" > TURATH DIRASAT ISLAMIAH</option>                <option value="5401" > USUL AL-DIN</option>                </select></td>
                  <td><select name="gred8" class="form-control select2">
                        <option value=" ">Select</option>
                                                <option value="0,18">A+</option>
                                                <option value="1,16">A  / 1A / A1</option>
                                                <option value="2,14">A- / 2A / A2</option>
                                                <option value="3,12">B+ / 3B / C3</option>
                                                <option value="4,10">B  / 4B / C4</option>
                                                <option value="5,8">C+ / 5C / C5</option>
                                                <option value="6,6">C  / 6C / C6</option>
                                                <option value="7,4">D  / 7D / P7</option>
                                                <option value="8,2">E  / 8E / P8</option>
                                                <option value="9,0">F  / 9G / F9</option>
                                                <option value="R,">Rujukan LPM</option>
                                                <option value="Z,">Masalah Keputusan</option>
                                                <option value="T,">Tidak Hadir</option>
                                                <option value="X,0">Tiada</option>
                                                </select>
                  </td>
                </tr>
                <tr>
                <td>9</td>
                  <td> <select name="sub9" class="form-control select2">
                <option value=" ">Select</option>
                                <option value="3472" > ADDITIONAL MATHEMATICS</option>                <option value="4561" > ADDITIONAL SCIENCE</option>                <option value="7302" > AKUAKULTUR DAN HAIWAN REKREASI</option>                <option value="5405" > AL-ADAB WA AL-BALAGHAH</option>                <option value="5403" > AL-LUGHAH AL-ARABIAH AL-MU ASIRAH</option>                <option value="5402" > AL-SYARIAH</option>                <option value="8302" > AMALAN BENGKEL MEKANIKAL</option>                <option value="8202" > APLIKASI ELEKTRIK DAN ELEKTRONIK</option>                <option value="8701" > APLIKASI KOMPUTER DALAM PERNIAGAAN</option>                <option value="4581" > APPLIED SCIENCE</option>                <option value="3768" > ASAS KELESTARIAN</option>                <option value="8552" > ASAS KEMAHIRAN PELANCONGAN</option>                <option value="8843" > ASAS PEMEROSESAN MAKLUMAT</option>                <option value="7205" > ASUHAN DAN PENDIDIKAN AWAL KANAK-KANAK</option>                <option value="8870" > ASUHAN KANAK-KANAK</option>                <option value="8322" > AUTOMOTIF ELEKTRIK DAN DISEL</option>                <option value="8321" > AUTOMOTIF KENDERAAN</option>                <option value="8101" > BAHAN BINAAN</option>                <option value="2361" > BAHASA ARAB / BAHASA ARAB TINGGI</option>                <option value="6362" > BAHASA ARAB KOMUNIKASI</option>                <option value="6351" > BAHASA CINA</option>                <option value="6356" > BAHASA IBAN</option>                <option value="1119" > BAHASA INGGERIS</option>                <option value="6405" > BAHASA JEPUN</option>                <option value="6401" > BAHASA JERMAN</option>                <option value="6357" > BAHASA KADAZAN/DUSUN</option>                <option value="1103" > BAHASA MELAYU</option>                <option value="9303" > BAHASA PERANCIS</option>                <option value="9378" > BAHASA PUNJABI</option>                <option value="6354" > BAHASA TAMIL</option>                <option value="9221" > BIBLE KNOWLEDGE</option>                <option value="4551" > BIOLOGY</option>                <option value="4541" > CHEMISTRY</option>                <option value="8522" > DANDANAN RAMBUT</option>                <option value="3767" > EKONOMI</option>                <option value="3757" > EKONOMI ASAS</option>                <option value="3758" > EKONOMI RUMAH TANGGA</option>                <option value="6355" > ENGLISH FOR SCIENCE AND TECHNOLOGY</option>                <option value="8401" > FUNDAMENTALS OF PROGRAMMING</option>                <option value="2280" > GEOGRAFI</option>                <option value="7206" > GERONTOLOGI ASAS DAN PERKHIDMATAN GERIATRIK</option>                <option value="7404" > GRAFIK BERKOMPUTER</option>                <option value="3771" > GRAFIK KOMUNIKASI TEKNIKAL</option>                <option value="7402" > HIASAN DALAMAN ASAS</option>                <option value="5301" > HIFZ AL QURAN</option>                <option value="8883 / 8602" > HORTIKULTUR HIASAN DAN LANDSKAP</option>                <option value="3765" > INFORMATION AND COMMUNICATION TECHNOLOGY</option>                <option value="7202" > KATERING DAN PENYAJIAN</option>                <option value="8884" > KEJENTERAAN LADANG</option>                <option value="8601" > KEJENTERAAN PERTANIAN</option>                <option value="8815" > KERJA KAYU & BATA</option>                <option value="8824" > KERJA KIMPALAN #</option>                <option value="8812" > KERJA MENGGEGAS & MELARIK</option>                <option value="7103" > KERJA PAIP DOMESTIK</option>                <option value="8830" > KERJA PENYEJUKAN & PENYAMANAN UDARA</option>                <option value="9216" > KESUSASTERAAN CINA</option>                <option value="2215" > KESUSASTERAAN MELAYU</option>                <option value="9217" > KESUSASTERAAN TAMIL</option>                <option value="8331" > KIMPALAN ARKA</option>                <option value="7105" > KIMPALAN ARKA DAN GAS</option>                <option value="8332" > KIMPALAN GAS</option>                <option value="2612" > KOMUNIKASI VISUAL</option>                <option value="7301" > LANDSKAP DAN NURSERI</option>                <option value="2205" > LITERATURE IN ENGLISH</option>                <option value="8828" > LUKISAN GEOMETRI & AUTOMOTIF</option>                <option value="8816" > LUKISAN GEOMETRI & BINAAN BANGUNAN</option>                <option value="8819" > LUKISAN GEOMETRI & ELEKTRIK</option>                <option value="8822" > LUKISAN GEOMETRI & ELEKTRONIK</option>                <option value="8825" > LUKISAN GEOMETRI & FABRIKASI LOGAM</option>                <option value="8813" > LUKISAN GEOMETRI & MESIN</option>                <option value="8831" > LUKISAN GEOMETRI & PENYAMANAN UDARA</option>                <option value="3759" > LUKISAN KEJURUTERAAN</option>                <option value="5302" > MAHARAT AL QURAN</option>                <option value="5404" > MANAHIJ AL-ULUM AL-ISLAMIAH</option>                <option value="0000" > MATA PELAJARAN SELAIN DI ATAS</option>                <option value="1449" > MATHEMATICS</option>                <option value="8501" > MEMBUAT PAKAIAN</option>                <option value="7102" > MEMBUAT PERABOT</option>                <option value="8871" > MENGASUH DAN MEMBIMBING KANAK-KANAK</option>                <option value="8827" > MENSERVIS & MEMBAIKI KENDERAAN</option>                <option value="7106" > MENSERVIS AUTOMOBIL</option>                <option value="7107" > MENSERVIS MOTOSIKAL</option>                <option value="7109" > MENSERVIS PERALATAN ELEKTRIK DOMESTIK</option>                <option value="7108" > MENSERVIS PERALATAN PENYEJUKAN DAN PENYAMANAN UDARA</option>                <option value="8821" > MENSERVIS RADIO & TV</option>                <option value="2622" > MUZIK</option>                <option value="8512" > PATISSERIE</option>                <option value="8551" > PELANCONGAN DAN REKREASI</option>                <option value="8818" > PEMASANGAN & KAWALAN ELEKTRIK</option>                <option value="7101" > PEMBINAAN DOMESTIK</option>                <option value="8301" > PEMESINAN BERKOMPUTER</option>                <option value="8604" > PEMPROSESAN HASIL PERTANIAN</option>                <option value="7203" > PEMPROSESAN MAKANAN</option>                <option value="7104" > PENDAWAIAN DOMESTIK</option>                <option value="5227" > PENDIDIKAN AL-QURAN DAN AL-SUNNAH</option>                <option value="1223" > PENDIDIKAN ISLAM</option>                <option value="1225" > PENDIDIKAN MORAL</option>                <option value="2621" > PENDIDIKAN MUZIK</option>                <option value="2611" > PENDIDIKAN SENI VISUAL</option>                <option value="5228" > PENDIDIKAN SYARI AH ISLAMIAH</option>                <option value="3529" > PENGAJIAN AGROTEKNOLOGI</option>                <option value="3761" > PENGAJIAN KEJURUTERAAN AWAM</option>                <option value="3762" > PENGAJIAN KEJURUTERAAN ELEKTRIK DAN ELEKTRONIK</option>                <option value="3760" > PENGAJIAN KEJURUTERAAN MEKANIKAL</option>                <option value="3754" > PENGAJIAN KEUSAHAWANAN</option>                <option value="8531" > PENGAJIAN PERKEMBANGAN KANAK-KANAK</option>                <option value="8881 / 8603" > PENGELUARAN TANAMAN</option>                <option value="8882 / 8605" > PENGELUARAN TERNAKAN</option>                <option value="4571" > PENGETAHUAN SAINS SUKAN</option>                <option value="8885" > PENGURUSAN LADANG</option>                <option value="7204" > PENJAGAAN MUKA DAN DANDANAN RAMBUT</option>                <option value="8542" > PENYAJIAN MAKANAN DAN MINUMAN</option>                <option value="8312" > PENYAMANAN UDARA</option>                <option value="8862" > PENYEDIAAN & PERKHIDMATAN MAKANAN</option>                <option value="8541" > PENYEDIAAN MASAKAN BARAT DAN TIMUR</option>                <option value="8311" > PENYEJUKAN</option>                <option value="8702" > PERAKAUNAN PERNIAGAAN</option>                <option value="3755" > PERDAGANGAN</option>                <option value="8532" > PERKHIDMATAN AWAL KANAK-KANAK</option>                <option value="3766" > PERNIAGAAN</option>                <option value="8521" > PERSOLEKAN</option>                <option value="8866" > PERSOLEKAN & MENDANDAN RAMBUT</option>                <option value="3729" > PERTANIAN</option>                <option value="4531" > PHYSICS</option>                <option value="8502" > POLA PAKAIAN</option>                <option value="8201" > PRINSIP ELEKTRIK DAN ELEKTRONIK</option>                <option value="8201" > Prinsip Elektrik Dan Elektronik</option>                <option value="3756" > PRINSIP PERAKAUNAN</option>                <option value="7403" > PRODUKSI MULTIMEDIA</option>                <option value="8402" > PROGRAMMING AND DEVELOPMENT TOOLS</option>                <option value="3763" > REKA CIPTA</option>                <option value="7201" > REKAAN DAN JAHITAN PAKAIAN</option>                <option value="8864" > REKAAN FESYEN & MEMBUAT PAKAIAN</option>                <option value="2614" > REKABENTUK</option>                <option value="8511" > ROTI DAN MAKANAN YIS</option>                <option value="3770" > SAINS KOMPUTER</option>                <option value="3528" > SAINS PERTANIAN</option>                <option value="3769" > SAINS RUMAH TANGGA</option>                <option value="4572" > SAINS SUKAN</option>                <option value="1511" > SCIENCE</option>                <option value="1249" > SEJARAH</option>                <option value="2613" > SENI HALUS</option>                <option value="7401" > SENI REKA TANDA</option>                <option value="7303" > TANAMAN MAKANAN</option>                <option value="2631" > TARI</option>                <option value="5226" > TASAWWUR ISLAM</option>                <option value="2641" > TEATER</option>                <option value="8826" > TEKNOLOGI AUTOMOTIF</option>                <option value="8868" > TEKNOLOGI BAKERI & KONFEKSIONERI</option>                <option value="8811" > TEKNOLOGI BENGKEL MESIN</option>                <option value="8102" > TEKNOLOGI BINAAN</option>                <option value="8814" > TEKNOLOGI BINAAN BANGUNAN</option>                <option value="8817" > TEKNOLOGI ELEKTRIK</option>                <option value="8820" > TEKNOLOGI ELEKTRONIK</option>                <option value="8861" > TEKNOLOGI KATERING</option>                <option value="3764" > TEKNOLOGI KEJURUTERAAN</option>                <option value="8823" > TEKNOLOGI KIMPALAN & FABRIKASI LOGAM</option>                <option value="8703" > TEKNOLOGI PEJABAT PERNIAGAAN</option>                <option value="8829" > TEKNOLOGI PENYEJUKAN & PENYAMANAN UDARA</option>                <option value="8863" > TEKNOLOGI REKAAN FESYEN & MEMBUAT PAKAIAN</option>                <option value="8865" > TEKNOLOGI SENI KECANTIKAN</option>                <option value="5303" > TURATH AL-QURAN DAN AL-SUNNAH</option>                <option value="5305" > TURATH BAHASA ARAB</option>                <option value="5304" > TURATH DIRASAT ISLAMIAH</option>                <option value="5401" > USUL AL-DIN</option>                </select></td>
                  <td><select name="gred9" class="form-control select2">
                        <option value=" ">Select</option>
                                                <option value="0,18">A+</option>
                                                <option value="1,16">A  / 1A / A1</option>
                                                <option value="2,14">A- / 2A / A2</option>
                                                <option value="3,12">B+ / 3B / C3</option>
                                                <option value="4,10">B  / 4B / C4</option>
                                                <option value="5,8">C+ / 5C / C5</option>
                                                <option value="6,6">C  / 6C / C6</option>
                                                <option value="7,4">D  / 7D / P7</option>
                                                <option value="8,2">E  / 8E / P8</option>
                                                <option value="9,0">F  / 9G / F9</option>
                                                <option value="R,">Rujukan LPM</option>
                                                <option value="Z,">Masalah Keputusan</option>
                                                <option value="T,">Tidak Hadir</option>
                                                <option value="X,0">Tiada</option>
                                                </select>
                  </td>
                </tr>
                <tr>
                <td>10</td>
                  <td> <select name="sub10" class="form-control select2">
                <option value=" ">Select</option>
                                <option value="3472" > ADDITIONAL MATHEMATICS</option>                <option value="4561" > ADDITIONAL SCIENCE</option>                <option value="7302" > AKUAKULTUR DAN HAIWAN REKREASI</option>                <option value="5405" > AL-ADAB WA AL-BALAGHAH</option>                <option value="5403" > AL-LUGHAH AL-ARABIAH AL-MU ASIRAH</option>                <option value="5402" > AL-SYARIAH</option>                <option value="8302" > AMALAN BENGKEL MEKANIKAL</option>                <option value="8202" > APLIKASI ELEKTRIK DAN ELEKTRONIK</option>                <option value="8701" > APLIKASI KOMPUTER DALAM PERNIAGAAN</option>                <option value="4581" > APPLIED SCIENCE</option>                <option value="3768" > ASAS KELESTARIAN</option>                <option value="8552" > ASAS KEMAHIRAN PELANCONGAN</option>                <option value="8843" > ASAS PEMEROSESAN MAKLUMAT</option>                <option value="7205" > ASUHAN DAN PENDIDIKAN AWAL KANAK-KANAK</option>                <option value="8870" > ASUHAN KANAK-KANAK</option>                <option value="8322" > AUTOMOTIF ELEKTRIK DAN DISEL</option>                <option value="8321" > AUTOMOTIF KENDERAAN</option>                <option value="8101" > BAHAN BINAAN</option>                <option value="2361" > BAHASA ARAB / BAHASA ARAB TINGGI</option>                <option value="6362" > BAHASA ARAB KOMUNIKASI</option>                <option value="6351" > BAHASA CINA</option>                <option value="6356" > BAHASA IBAN</option>                <option value="1119" > BAHASA INGGERIS</option>                <option value="6405" > BAHASA JEPUN</option>                <option value="6401" > BAHASA JERMAN</option>                <option value="6357" > BAHASA KADAZAN/DUSUN</option>                <option value="1103" > BAHASA MELAYU</option>                <option value="9303" > BAHASA PERANCIS</option>                <option value="9378" > BAHASA PUNJABI</option>                <option value="6354" > BAHASA TAMIL</option>                <option value="9221" > BIBLE KNOWLEDGE</option>                <option value="4551" > BIOLOGY</option>                <option value="4541" > CHEMISTRY</option>                <option value="8522" > DANDANAN RAMBUT</option>                <option value="3767" > EKONOMI</option>                <option value="3757" > EKONOMI ASAS</option>                <option value="3758" > EKONOMI RUMAH TANGGA</option>                <option value="6355" > ENGLISH FOR SCIENCE AND TECHNOLOGY</option>                <option value="8401" > FUNDAMENTALS OF PROGRAMMING</option>                <option value="2280" > GEOGRAFI</option>                <option value="7206" > GERONTOLOGI ASAS DAN PERKHIDMATAN GERIATRIK</option>                <option value="7404" > GRAFIK BERKOMPUTER</option>                <option value="3771" > GRAFIK KOMUNIKASI TEKNIKAL</option>                <option value="7402" > HIASAN DALAMAN ASAS</option>                <option value="5301" > HIFZ AL QURAN</option>                <option value="8883 / 8602" > HORTIKULTUR HIASAN DAN LANDSKAP</option>                <option value="3765" > INFORMATION AND COMMUNICATION TECHNOLOGY</option>                <option value="7202" > KATERING DAN PENYAJIAN</option>                <option value="8884" > KEJENTERAAN LADANG</option>                <option value="8601" > KEJENTERAAN PERTANIAN</option>                <option value="8815" > KERJA KAYU & BATA</option>                <option value="8824" > KERJA KIMPALAN #</option>                <option value="8812" > KERJA MENGGEGAS & MELARIK</option>                <option value="7103" > KERJA PAIP DOMESTIK</option>                <option value="8830" > KERJA PENYEJUKAN & PENYAMANAN UDARA</option>                <option value="9216" > KESUSASTERAAN CINA</option>                <option value="2215" > KESUSASTERAAN MELAYU</option>                <option value="9217" > KESUSASTERAAN TAMIL</option>                <option value="8331" > KIMPALAN ARKA</option>                <option value="7105" > KIMPALAN ARKA DAN GAS</option>                <option value="8332" > KIMPALAN GAS</option>                <option value="2612" > KOMUNIKASI VISUAL</option>                <option value="7301" > LANDSKAP DAN NURSERI</option>                <option value="2205" > LITERATURE IN ENGLISH</option>                <option value="8828" > LUKISAN GEOMETRI & AUTOMOTIF</option>                <option value="8816" > LUKISAN GEOMETRI & BINAAN BANGUNAN</option>                <option value="8819" > LUKISAN GEOMETRI & ELEKTRIK</option>                <option value="8822" > LUKISAN GEOMETRI & ELEKTRONIK</option>                <option value="8825" > LUKISAN GEOMETRI & FABRIKASI LOGAM</option>                <option value="8813" > LUKISAN GEOMETRI & MESIN</option>                <option value="8831" > LUKISAN GEOMETRI & PENYAMANAN UDARA</option>                <option value="3759" > LUKISAN KEJURUTERAAN</option>                <option value="5302" > MAHARAT AL QURAN</option>                <option value="5404" > MANAHIJ AL-ULUM AL-ISLAMIAH</option>                <option value="0000" > MATA PELAJARAN SELAIN DI ATAS</option>                <option value="1449" > MATHEMATICS</option>                <option value="8501" > MEMBUAT PAKAIAN</option>                <option value="7102" > MEMBUAT PERABOT</option>                <option value="8871" > MENGASUH DAN MEMBIMBING KANAK-KANAK</option>                <option value="8827" > MENSERVIS & MEMBAIKI KENDERAAN</option>                <option value="7106" > MENSERVIS AUTOMOBIL</option>                <option value="7107" > MENSERVIS MOTOSIKAL</option>                <option value="7109" > MENSERVIS PERALATAN ELEKTRIK DOMESTIK</option>                <option value="7108" > MENSERVIS PERALATAN PENYEJUKAN DAN PENYAMANAN UDARA</option>                <option value="8821" > MENSERVIS RADIO & TV</option>                <option value="2622" > MUZIK</option>                <option value="8512" > PATISSERIE</option>                <option value="8551" > PELANCONGAN DAN REKREASI</option>                <option value="8818" > PEMASANGAN & KAWALAN ELEKTRIK</option>                <option value="7101" > PEMBINAAN DOMESTIK</option>                <option value="8301" > PEMESINAN BERKOMPUTER</option>                <option value="8604" > PEMPROSESAN HASIL PERTANIAN</option>                <option value="7203" > PEMPROSESAN MAKANAN</option>                <option value="7104" > PENDAWAIAN DOMESTIK</option>                <option value="5227" > PENDIDIKAN AL-QURAN DAN AL-SUNNAH</option>                <option value="1223" > PENDIDIKAN ISLAM</option>                <option value="1225" > PENDIDIKAN MORAL</option>                <option value="2621" > PENDIDIKAN MUZIK</option>                <option value="2611" > PENDIDIKAN SENI VISUAL</option>                <option value="5228" > PENDIDIKAN SYARI AH ISLAMIAH</option>                <option value="3529" > PENGAJIAN AGROTEKNOLOGI</option>                <option value="3761" > PENGAJIAN KEJURUTERAAN AWAM</option>                <option value="3762" > PENGAJIAN KEJURUTERAAN ELEKTRIK DAN ELEKTRONIK</option>                <option value="3760" > PENGAJIAN KEJURUTERAAN MEKANIKAL</option>                <option value="3754" > PENGAJIAN KEUSAHAWANAN</option>                <option value="8531" > PENGAJIAN PERKEMBANGAN KANAK-KANAK</option>                <option value="8881 / 8603" > PENGELUARAN TANAMAN</option>                <option value="8882 / 8605" > PENGELUARAN TERNAKAN</option>                <option value="4571" > PENGETAHUAN SAINS SUKAN</option>                <option value="8885" > PENGURUSAN LADANG</option>                <option value="7204" > PENJAGAAN MUKA DAN DANDANAN RAMBUT</option>                <option value="8542" > PENYAJIAN MAKANAN DAN MINUMAN</option>                <option value="8312" > PENYAMANAN UDARA</option>                <option value="8862" > PENYEDIAAN & PERKHIDMATAN MAKANAN</option>                <option value="8541" > PENYEDIAAN MASAKAN BARAT DAN TIMUR</option>                <option value="8311" > PENYEJUKAN</option>                <option value="8702" > PERAKAUNAN PERNIAGAAN</option>                <option value="3755" > PERDAGANGAN</option>                <option value="8532" > PERKHIDMATAN AWAL KANAK-KANAK</option>                <option value="3766" > PERNIAGAAN</option>                <option value="8521" > PERSOLEKAN</option>                <option value="8866" > PERSOLEKAN & MENDANDAN RAMBUT</option>                <option value="3729" > PERTANIAN</option>                <option value="4531" > PHYSICS</option>                <option value="8502" > POLA PAKAIAN</option>                <option value="8201" > PRINSIP ELEKTRIK DAN ELEKTRONIK</option>                <option value="8201" > Prinsip Elektrik Dan Elektronik</option>                <option value="3756" > PRINSIP PERAKAUNAN</option>                <option value="7403" > PRODUKSI MULTIMEDIA</option>                <option value="8402" > PROGRAMMING AND DEVELOPMENT TOOLS</option>                <option value="3763" > REKA CIPTA</option>                <option value="7201" > REKAAN DAN JAHITAN PAKAIAN</option>                <option value="8864" > REKAAN FESYEN & MEMBUAT PAKAIAN</option>                <option value="2614" > REKABENTUK</option>                <option value="8511" > ROTI DAN MAKANAN YIS</option>                <option value="3770" > SAINS KOMPUTER</option>                <option value="3528" > SAINS PERTANIAN</option>                <option value="3769" > SAINS RUMAH TANGGA</option>                <option value="4572" > SAINS SUKAN</option>                <option value="1511" > SCIENCE</option>                <option value="1249" > SEJARAH</option>                <option value="2613" > SENI HALUS</option>                <option value="7401" > SENI REKA TANDA</option>                <option value="7303" > TANAMAN MAKANAN</option>                <option value="2631" > TARI</option>                <option value="5226" > TASAWWUR ISLAM</option>                <option value="2641" > TEATER</option>                <option value="8826" > TEKNOLOGI AUTOMOTIF</option>                <option value="8868" > TEKNOLOGI BAKERI & KONFEKSIONERI</option>                <option value="8811" > TEKNOLOGI BENGKEL MESIN</option>                <option value="8102" > TEKNOLOGI BINAAN</option>                <option value="8814" > TEKNOLOGI BINAAN BANGUNAN</option>                <option value="8817" > TEKNOLOGI ELEKTRIK</option>                <option value="8820" > TEKNOLOGI ELEKTRONIK</option>                <option value="8861" > TEKNOLOGI KATERING</option>                <option value="3764" > TEKNOLOGI KEJURUTERAAN</option>                <option value="8823" > TEKNOLOGI KIMPALAN & FABRIKASI LOGAM</option>                <option value="8703" > TEKNOLOGI PEJABAT PERNIAGAAN</option>                <option value="8829" > TEKNOLOGI PENYEJUKAN & PENYAMANAN UDARA</option>                <option value="8863" > TEKNOLOGI REKAAN FESYEN & MEMBUAT PAKAIAN</option>                <option value="8865" > TEKNOLOGI SENI KECANTIKAN</option>                <option value="5303" > TURATH AL-QURAN DAN AL-SUNNAH</option>                <option value="5305" > TURATH BAHASA ARAB</option>                <option value="5304" > TURATH DIRASAT ISLAMIAH</option>                <option value="5401" > USUL AL-DIN</option>                </select></td>
                  <td><select name="gred10" class="form-control select2">
                        <option value=" ">Select</option>
                                                <option value="0,18">A+</option>
                                                <option value="1,16">A  / 1A / A1</option>
                                                <option value="2,14">A- / 2A / A2</option>
                                                <option value="3,12">B+ / 3B / C3</option>
                                                <option value="4,10">B  / 4B / C4</option>
                                                <option value="5,8">C+ / 5C / C5</option>
                                                <option value="6,6">C  / 6C / C6</option>
                                                <option value="7,4">D  / 7D / P7</option>
                                                <option value="8,2">E  / 8E / P8</option>
                                                <option value="9,0">F  / 9G / F9</option>
                                                <option value="R,">Rujukan LPM</option>
                                                <option value="Z,">Masalah Keputusan</option>
                                                <option value="T,">Tidak Hadir</option>
                                                <option value="X,0">Tiada</option>
                                                </select>
                  </td>
                </tr>
                <tr>
                <td>11</td>
                  <td> <select name="sub11" class="form-control select2">
                <option value=" ">Select</option>
                                <option value="3472" > ADDITIONAL MATHEMATICS</option>                <option value="4561" > ADDITIONAL SCIENCE</option>                <option value="7302" > AKUAKULTUR DAN HAIWAN REKREASI</option>                <option value="5405" > AL-ADAB WA AL-BALAGHAH</option>                <option value="5403" > AL-LUGHAH AL-ARABIAH AL-MU ASIRAH</option>                <option value="5402" > AL-SYARIAH</option>                <option value="8302" > AMALAN BENGKEL MEKANIKAL</option>                <option value="8202" > APLIKASI ELEKTRIK DAN ELEKTRONIK</option>                <option value="8701" > APLIKASI KOMPUTER DALAM PERNIAGAAN</option>                <option value="4581" > APPLIED SCIENCE</option>                <option value="3768" > ASAS KELESTARIAN</option>                <option value="8552" > ASAS KEMAHIRAN PELANCONGAN</option>                <option value="8843" > ASAS PEMEROSESAN MAKLUMAT</option>                <option value="7205" > ASUHAN DAN PENDIDIKAN AWAL KANAK-KANAK</option>                <option value="8870" > ASUHAN KANAK-KANAK</option>                <option value="8322" > AUTOMOTIF ELEKTRIK DAN DISEL</option>                <option value="8321" > AUTOMOTIF KENDERAAN</option>                <option value="8101" > BAHAN BINAAN</option>                <option value="2361" > BAHASA ARAB / BAHASA ARAB TINGGI</option>                <option value="6362" > BAHASA ARAB KOMUNIKASI</option>                <option value="6351" > BAHASA CINA</option>                <option value="6356" > BAHASA IBAN</option>                <option value="1119" > BAHASA INGGERIS</option>                <option value="6405" > BAHASA JEPUN</option>                <option value="6401" > BAHASA JERMAN</option>                <option value="6357" > BAHASA KADAZAN/DUSUN</option>                <option value="1103" > BAHASA MELAYU</option>                <option value="9303" > BAHASA PERANCIS</option>                <option value="9378" > BAHASA PUNJABI</option>                <option value="6354" > BAHASA TAMIL</option>                <option value="9221" > BIBLE KNOWLEDGE</option>                <option value="4551" > BIOLOGY</option>                <option value="4541" > CHEMISTRY</option>                <option value="8522" > DANDANAN RAMBUT</option>                <option value="3767" > EKONOMI</option>                <option value="3757" > EKONOMI ASAS</option>                <option value="3758" > EKONOMI RUMAH TANGGA</option>                <option value="6355" > ENGLISH FOR SCIENCE AND TECHNOLOGY</option>                <option value="8401" > FUNDAMENTALS OF PROGRAMMING</option>                <option value="2280" > GEOGRAFI</option>                <option value="7206" > GERONTOLOGI ASAS DAN PERKHIDMATAN GERIATRIK</option>                <option value="7404" > GRAFIK BERKOMPUTER</option>                <option value="3771" > GRAFIK KOMUNIKASI TEKNIKAL</option>                <option value="7402" > HIASAN DALAMAN ASAS</option>                <option value="5301" > HIFZ AL QURAN</option>                <option value="8883 / 8602" > HORTIKULTUR HIASAN DAN LANDSKAP</option>                <option value="3765" > INFORMATION AND COMMUNICATION TECHNOLOGY</option>                <option value="7202" > KATERING DAN PENYAJIAN</option>                <option value="8884" > KEJENTERAAN LADANG</option>                <option value="8601" > KEJENTERAAN PERTANIAN</option>                <option value="8815" > KERJA KAYU & BATA</option>                <option value="8824" > KERJA KIMPALAN #</option>                <option value="8812" > KERJA MENGGEGAS & MELARIK</option>                <option value="7103" > KERJA PAIP DOMESTIK</option>                <option value="8830" > KERJA PENYEJUKAN & PENYAMANAN UDARA</option>                <option value="9216" > KESUSASTERAAN CINA</option>                <option value="2215" > KESUSASTERAAN MELAYU</option>                <option value="9217" > KESUSASTERAAN TAMIL</option>                <option value="8331" > KIMPALAN ARKA</option>                <option value="7105" > KIMPALAN ARKA DAN GAS</option>                <option value="8332" > KIMPALAN GAS</option>                <option value="2612" > KOMUNIKASI VISUAL</option>                <option value="7301" > LANDSKAP DAN NURSERI</option>                <option value="2205" > LITERATURE IN ENGLISH</option>                <option value="8828" > LUKISAN GEOMETRI & AUTOMOTIF</option>                <option value="8816" > LUKISAN GEOMETRI & BINAAN BANGUNAN</option>                <option value="8819" > LUKISAN GEOMETRI & ELEKTRIK</option>                <option value="8822" > LUKISAN GEOMETRI & ELEKTRONIK</option>                <option value="8825" > LUKISAN GEOMETRI & FABRIKASI LOGAM</option>                <option value="8813" > LUKISAN GEOMETRI & MESIN</option>                <option value="8831" > LUKISAN GEOMETRI & PENYAMANAN UDARA</option>                <option value="3759" > LUKISAN KEJURUTERAAN</option>                <option value="5302" > MAHARAT AL QURAN</option>                <option value="5404" > MANAHIJ AL-ULUM AL-ISLAMIAH</option>                <option value="0000" > MATA PELAJARAN SELAIN DI ATAS</option>                <option value="1449" > MATHEMATICS</option>                <option value="8501" > MEMBUAT PAKAIAN</option>                <option value="7102" > MEMBUAT PERABOT</option>                <option value="8871" > MENGASUH DAN MEMBIMBING KANAK-KANAK</option>                <option value="8827" > MENSERVIS & MEMBAIKI KENDERAAN</option>                <option value="7106" > MENSERVIS AUTOMOBIL</option>                <option value="7107" > MENSERVIS MOTOSIKAL</option>                <option value="7109" > MENSERVIS PERALATAN ELEKTRIK DOMESTIK</option>                <option value="7108" > MENSERVIS PERALATAN PENYEJUKAN DAN PENYAMANAN UDARA</option>                <option value="8821" > MENSERVIS RADIO & TV</option>                <option value="2622" > MUZIK</option>                <option value="8512" > PATISSERIE</option>                <option value="8551" > PELANCONGAN DAN REKREASI</option>                <option value="8818" > PEMASANGAN & KAWALAN ELEKTRIK</option>                <option value="7101" > PEMBINAAN DOMESTIK</option>                <option value="8301" > PEMESINAN BERKOMPUTER</option>                <option value="8604" > PEMPROSESAN HASIL PERTANIAN</option>                <option value="7203" > PEMPROSESAN MAKANAN</option>                <option value="7104" > PENDAWAIAN DOMESTIK</option>                <option value="5227" > PENDIDIKAN AL-QURAN DAN AL-SUNNAH</option>                <option value="1223" > PENDIDIKAN ISLAM</option>                <option value="1225" > PENDIDIKAN MORAL</option>                <option value="2621" > PENDIDIKAN MUZIK</option>                <option value="2611" > PENDIDIKAN SENI VISUAL</option>                <option value="5228" > PENDIDIKAN SYARI AH ISLAMIAH</option>                <option value="3529" > PENGAJIAN AGROTEKNOLOGI</option>                <option value="3761" > PENGAJIAN KEJURUTERAAN AWAM</option>                <option value="3762" > PENGAJIAN KEJURUTERAAN ELEKTRIK DAN ELEKTRONIK</option>                <option value="3760" > PENGAJIAN KEJURUTERAAN MEKANIKAL</option>                <option value="3754" > PENGAJIAN KEUSAHAWANAN</option>                <option value="8531" > PENGAJIAN PERKEMBANGAN KANAK-KANAK</option>                <option value="8881 / 8603" > PENGELUARAN TANAMAN</option>                <option value="8882 / 8605" > PENGELUARAN TERNAKAN</option>                <option value="4571" > PENGETAHUAN SAINS SUKAN</option>                <option value="8885" > PENGURUSAN LADANG</option>                <option value="7204" > PENJAGAAN MUKA DAN DANDANAN RAMBUT</option>                <option value="8542" > PENYAJIAN MAKANAN DAN MINUMAN</option>                <option value="8312" > PENYAMANAN UDARA</option>                <option value="8862" > PENYEDIAAN & PERKHIDMATAN MAKANAN</option>                <option value="8541" > PENYEDIAAN MASAKAN BARAT DAN TIMUR</option>                <option value="8311" > PENYEJUKAN</option>                <option value="8702" > PERAKAUNAN PERNIAGAAN</option>                <option value="3755" > PERDAGANGAN</option>                <option value="8532" > PERKHIDMATAN AWAL KANAK-KANAK</option>                <option value="3766" > PERNIAGAAN</option>                <option value="8521" > PERSOLEKAN</option>                <option value="8866" > PERSOLEKAN & MENDANDAN RAMBUT</option>                <option value="3729" > PERTANIAN</option>                <option value="4531" > PHYSICS</option>                <option value="8502" > POLA PAKAIAN</option>                <option value="8201" > PRINSIP ELEKTRIK DAN ELEKTRONIK</option>                <option value="8201" > Prinsip Elektrik Dan Elektronik</option>                <option value="3756" > PRINSIP PERAKAUNAN</option>                <option value="7403" > PRODUKSI MULTIMEDIA</option>                <option value="8402" > PROGRAMMING AND DEVELOPMENT TOOLS</option>                <option value="3763" > REKA CIPTA</option>                <option value="7201" > REKAAN DAN JAHITAN PAKAIAN</option>                <option value="8864" > REKAAN FESYEN & MEMBUAT PAKAIAN</option>                <option value="2614" > REKABENTUK</option>                <option value="8511" > ROTI DAN MAKANAN YIS</option>                <option value="3770" > SAINS KOMPUTER</option>                <option value="3528" > SAINS PERTANIAN</option>                <option value="3769" > SAINS RUMAH TANGGA</option>                <option value="4572" > SAINS SUKAN</option>                <option value="1511" > SCIENCE</option>                <option value="1249" > SEJARAH</option>                <option value="2613" > SENI HALUS</option>                <option value="7401" > SENI REKA TANDA</option>                <option value="7303" > TANAMAN MAKANAN</option>                <option value="2631" > TARI</option>                <option value="5226" > TASAWWUR ISLAM</option>                <option value="2641" > TEATER</option>                <option value="8826" > TEKNOLOGI AUTOMOTIF</option>                <option value="8868" > TEKNOLOGI BAKERI & KONFEKSIONERI</option>                <option value="8811" > TEKNOLOGI BENGKEL MESIN</option>                <option value="8102" > TEKNOLOGI BINAAN</option>                <option value="8814" > TEKNOLOGI BINAAN BANGUNAN</option>                <option value="8817" > TEKNOLOGI ELEKTRIK</option>                <option value="8820" > TEKNOLOGI ELEKTRONIK</option>                <option value="8861" > TEKNOLOGI KATERING</option>                <option value="3764" > TEKNOLOGI KEJURUTERAAN</option>                <option value="8823" > TEKNOLOGI KIMPALAN & FABRIKASI LOGAM</option>                <option value="8703" > TEKNOLOGI PEJABAT PERNIAGAAN</option>                <option value="8829" > TEKNOLOGI PENYEJUKAN & PENYAMANAN UDARA</option>                <option value="8863" > TEKNOLOGI REKAAN FESYEN & MEMBUAT PAKAIAN</option>                <option value="8865" > TEKNOLOGI SENI KECANTIKAN</option>                <option value="5303" > TURATH AL-QURAN DAN AL-SUNNAH</option>                <option value="5305" > TURATH BAHASA ARAB</option>                <option value="5304" > TURATH DIRASAT ISLAMIAH</option>                <option value="5401" > USUL AL-DIN</option>                </select></td>
                  <td><select name="gred11" class="form-control select2">
                        <option value=" ">Select</option>
                                                <option value="0,18">A+</option>
                                                <option value="1,16">A  / 1A / A1</option>
                                                <option value="2,14">A- / 2A / A2</option>
                                                <option value="3,12">B+ / 3B / C3</option>
                                                <option value="4,10">B  / 4B / C4</option>
                                                <option value="5,8">C+ / 5C / C5</option>
                                                <option value="6,6">C  / 6C / C6</option>
                                                <option value="7,4">D  / 7D / P7</option>
                                                <option value="8,2">E  / 8E / P8</option>
                                                <option value="9,0">F  / 9G / F9</option>
                                                <option value="R,">Rujukan LPM</option>
                                                <option value="Z,">Masalah Keputusan</option>
                                                <option value="T,">Tidak Hadir</option>
                                                <option value="X,0">Tiada</option>
                                                </select>
                  </td>
                </tr>
                <tr>
                <td>12</td>
                  <td> <select name="sub12" class="form-control select2">
                <option value=" ">Select</option>
                                <option value="3472" > ADDITIONAL MATHEMATICS</option>                <option value="4561" > ADDITIONAL SCIENCE</option>                <option value="7302" > AKUAKULTUR DAN HAIWAN REKREASI</option>                <option value="5405" > AL-ADAB WA AL-BALAGHAH</option>                <option value="5403" > AL-LUGHAH AL-ARABIAH AL-MU ASIRAH</option>                <option value="5402" > AL-SYARIAH</option>                <option value="8302" > AMALAN BENGKEL MEKANIKAL</option>                <option value="8202" > APLIKASI ELEKTRIK DAN ELEKTRONIK</option>                <option value="8701" > APLIKASI KOMPUTER DALAM PERNIAGAAN</option>                <option value="4581" > APPLIED SCIENCE</option>                <option value="3768" > ASAS KELESTARIAN</option>                <option value="8552" > ASAS KEMAHIRAN PELANCONGAN</option>                <option value="8843" > ASAS PEMEROSESAN MAKLUMAT</option>                <option value="7205" > ASUHAN DAN PENDIDIKAN AWAL KANAK-KANAK</option>                <option value="8870" > ASUHAN KANAK-KANAK</option>                <option value="8322" > AUTOMOTIF ELEKTRIK DAN DISEL</option>                <option value="8321" > AUTOMOTIF KENDERAAN</option>                <option value="8101" > BAHAN BINAAN</option>                <option value="2361" > BAHASA ARAB / BAHASA ARAB TINGGI</option>                <option value="6362" > BAHASA ARAB KOMUNIKASI</option>                <option value="6351" > BAHASA CINA</option>                <option value="6356" > BAHASA IBAN</option>                <option value="1119" > BAHASA INGGERIS</option>                <option value="6405" > BAHASA JEPUN</option>                <option value="6401" > BAHASA JERMAN</option>                <option value="6357" > BAHASA KADAZAN/DUSUN</option>                <option value="1103" > BAHASA MELAYU</option>                <option value="9303" > BAHASA PERANCIS</option>                <option value="9378" > BAHASA PUNJABI</option>                <option value="6354" > BAHASA TAMIL</option>                <option value="9221" > BIBLE KNOWLEDGE</option>                <option value="4551" > BIOLOGY</option>                <option value="4541" > CHEMISTRY</option>                <option value="8522" > DANDANAN RAMBUT</option>                <option value="3767" > EKONOMI</option>                <option value="3757" > EKONOMI ASAS</option>                <option value="3758" > EKONOMI RUMAH TANGGA</option>                <option value="6355" > ENGLISH FOR SCIENCE AND TECHNOLOGY</option>                <option value="8401" > FUNDAMENTALS OF PROGRAMMING</option>                <option value="2280" > GEOGRAFI</option>                <option value="7206" > GERONTOLOGI ASAS DAN PERKHIDMATAN GERIATRIK</option>                <option value="7404" > GRAFIK BERKOMPUTER</option>                <option value="3771" > GRAFIK KOMUNIKASI TEKNIKAL</option>                <option value="7402" > HIASAN DALAMAN ASAS</option>                <option value="5301" > HIFZ AL QURAN</option>                <option value="8883 / 8602" > HORTIKULTUR HIASAN DAN LANDSKAP</option>                <option value="3765" > INFORMATION AND COMMUNICATION TECHNOLOGY</option>                <option value="7202" > KATERING DAN PENYAJIAN</option>                <option value="8884" > KEJENTERAAN LADANG</option>                <option value="8601" > KEJENTERAAN PERTANIAN</option>                <option value="8815" > KERJA KAYU & BATA</option>                <option value="8824" > KERJA KIMPALAN #</option>                <option value="8812" > KERJA MENGGEGAS & MELARIK</option>                <option value="7103" > KERJA PAIP DOMESTIK</option>                <option value="8830" > KERJA PENYEJUKAN & PENYAMANAN UDARA</option>                <option value="9216" > KESUSASTERAAN CINA</option>                <option value="2215" > KESUSASTERAAN MELAYU</option>                <option value="9217" > KESUSASTERAAN TAMIL</option>                <option value="8331" > KIMPALAN ARKA</option>                <option value="7105" > KIMPALAN ARKA DAN GAS</option>                <option value="8332" > KIMPALAN GAS</option>                <option value="2612" > KOMUNIKASI VISUAL</option>                <option value="7301" > LANDSKAP DAN NURSERI</option>                <option value="2205" > LITERATURE IN ENGLISH</option>                <option value="8828" > LUKISAN GEOMETRI & AUTOMOTIF</option>                <option value="8816" > LUKISAN GEOMETRI & BINAAN BANGUNAN</option>                <option value="8819" > LUKISAN GEOMETRI & ELEKTRIK</option>                <option value="8822" > LUKISAN GEOMETRI & ELEKTRONIK</option>                <option value="8825" > LUKISAN GEOMETRI & FABRIKASI LOGAM</option>                <option value="8813" > LUKISAN GEOMETRI & MESIN</option>                <option value="8831" > LUKISAN GEOMETRI & PENYAMANAN UDARA</option>                <option value="3759" > LUKISAN KEJURUTERAAN</option>                <option value="5302" > MAHARAT AL QURAN</option>                <option value="5404" > MANAHIJ AL-ULUM AL-ISLAMIAH</option>                <option value="0000" > MATA PELAJARAN SELAIN DI ATAS</option>                <option value="1449" > MATHEMATICS</option>                <option value="8501" > MEMBUAT PAKAIAN</option>                <option value="7102" > MEMBUAT PERABOT</option>                <option value="8871" > MENGASUH DAN MEMBIMBING KANAK-KANAK</option>                <option value="8827" > MENSERVIS & MEMBAIKI KENDERAAN</option>                <option value="7106" > MENSERVIS AUTOMOBIL</option>                <option value="7107" > MENSERVIS MOTOSIKAL</option>                <option value="7109" > MENSERVIS PERALATAN ELEKTRIK DOMESTIK</option>                <option value="7108" > MENSERVIS PERALATAN PENYEJUKAN DAN PENYAMANAN UDARA</option>                <option value="8821" > MENSERVIS RADIO & TV</option>                <option value="2622" > MUZIK</option>                <option value="8512" > PATISSERIE</option>                <option value="8551" > PELANCONGAN DAN REKREASI</option>                <option value="8818" > PEMASANGAN & KAWALAN ELEKTRIK</option>                <option value="7101" > PEMBINAAN DOMESTIK</option>                <option value="8301" > PEMESINAN BERKOMPUTER</option>                <option value="8604" > PEMPROSESAN HASIL PERTANIAN</option>                <option value="7203" > PEMPROSESAN MAKANAN</option>                <option value="7104" > PENDAWAIAN DOMESTIK</option>                <option value="5227" > PENDIDIKAN AL-QURAN DAN AL-SUNNAH</option>                <option value="1223" > PENDIDIKAN ISLAM</option>                <option value="1225" > PENDIDIKAN MORAL</option>                <option value="2621" > PENDIDIKAN MUZIK</option>                <option value="2611" > PENDIDIKAN SENI VISUAL</option>                <option value="5228" > PENDIDIKAN SYARI AH ISLAMIAH</option>                <option value="3529" > PENGAJIAN AGROTEKNOLOGI</option>                <option value="3761" > PENGAJIAN KEJURUTERAAN AWAM</option>                <option value="3762" > PENGAJIAN KEJURUTERAAN ELEKTRIK DAN ELEKTRONIK</option>                <option value="3760" > PENGAJIAN KEJURUTERAAN MEKANIKAL</option>                <option value="3754" > PENGAJIAN KEUSAHAWANAN</option>                <option value="8531" > PENGAJIAN PERKEMBANGAN KANAK-KANAK</option>                <option value="8881 / 8603" > PENGELUARAN TANAMAN</option>                <option value="8882 / 8605" > PENGELUARAN TERNAKAN</option>                <option value="4571" > PENGETAHUAN SAINS SUKAN</option>                <option value="8885" > PENGURUSAN LADANG</option>                <option value="7204" > PENJAGAAN MUKA DAN DANDANAN RAMBUT</option>                <option value="8542" > PENYAJIAN MAKANAN DAN MINUMAN</option>                <option value="8312" > PENYAMANAN UDARA</option>                <option value="8862" > PENYEDIAAN & PERKHIDMATAN MAKANAN</option>                <option value="8541" > PENYEDIAAN MASAKAN BARAT DAN TIMUR</option>                <option value="8311" > PENYEJUKAN</option>                <option value="8702" > PERAKAUNAN PERNIAGAAN</option>                <option value="3755" > PERDAGANGAN</option>                <option value="8532" > PERKHIDMATAN AWAL KANAK-KANAK</option>                <option value="3766" > PERNIAGAAN</option>                <option value="8521" > PERSOLEKAN</option>                <option value="8866" > PERSOLEKAN & MENDANDAN RAMBUT</option>                <option value="3729" > PERTANIAN</option>                <option value="4531" > PHYSICS</option>                <option value="8502" > POLA PAKAIAN</option>                <option value="8201" > PRINSIP ELEKTRIK DAN ELEKTRONIK</option>                <option value="8201" > Prinsip Elektrik Dan Elektronik</option>                <option value="3756" > PRINSIP PERAKAUNAN</option>                <option value="7403" > PRODUKSI MULTIMEDIA</option>                <option value="8402" > PROGRAMMING AND DEVELOPMENT TOOLS</option>                <option value="3763" > REKA CIPTA</option>                <option value="7201" > REKAAN DAN JAHITAN PAKAIAN</option>                <option value="8864" > REKAAN FESYEN & MEMBUAT PAKAIAN</option>                <option value="2614" > REKABENTUK</option>                <option value="8511" > ROTI DAN MAKANAN YIS</option>                <option value="3770" > SAINS KOMPUTER</option>                <option value="3528" > SAINS PERTANIAN</option>                <option value="3769" > SAINS RUMAH TANGGA</option>                <option value="4572" > SAINS SUKAN</option>                <option value="1511" > SCIENCE</option>                <option value="1249" > SEJARAH</option>                <option value="2613" > SENI HALUS</option>                <option value="7401" > SENI REKA TANDA</option>                <option value="7303" > TANAMAN MAKANAN</option>                <option value="2631" > TARI</option>                <option value="5226" > TASAWWUR ISLAM</option>                <option value="2641" > TEATER</option>                <option value="8826" > TEKNOLOGI AUTOMOTIF</option>                <option value="8868" > TEKNOLOGI BAKERI & KONFEKSIONERI</option>                <option value="8811" > TEKNOLOGI BENGKEL MESIN</option>                <option value="8102" > TEKNOLOGI BINAAN</option>                <option value="8814" > TEKNOLOGI BINAAN BANGUNAN</option>                <option value="8817" > TEKNOLOGI ELEKTRIK</option>                <option value="8820" > TEKNOLOGI ELEKTRONIK</option>                <option value="8861" > TEKNOLOGI KATERING</option>                <option value="3764" > TEKNOLOGI KEJURUTERAAN</option>                <option value="8823" > TEKNOLOGI KIMPALAN & FABRIKASI LOGAM</option>                <option value="8703" > TEKNOLOGI PEJABAT PERNIAGAAN</option>                <option value="8829" > TEKNOLOGI PENYEJUKAN & PENYAMANAN UDARA</option>                <option value="8863" > TEKNOLOGI REKAAN FESYEN & MEMBUAT PAKAIAN</option>                <option value="8865" > TEKNOLOGI SENI KECANTIKAN</option>                <option value="5303" > TURATH AL-QURAN DAN AL-SUNNAH</option>                <option value="5305" > TURATH BAHASA ARAB</option>                <option value="5304" > TURATH DIRASAT ISLAMIAH</option>                <option value="5401" > USUL AL-DIN</option>                </select></td>
                  <td><select name="gred12" class="form-control select2">
                        <option value=" ">Select</option>
                                                <option value="0,18">A+</option>
                                                <option value="1,16">A  / 1A / A1</option>
                                                <option value="2,14">A- / 2A / A2</option>
                                                <option value="3,12">B+ / 3B / C3</option>
                                                <option value="4,10">B  / 4B / C4</option>
                                                <option value="5,8">C+ / 5C / C5</option>
                                                <option value="6,6">C  / 6C / C6</option>
                                                <option value="7,4">D  / 7D / P7</option>
                                                <option value="8,2">E  / 8E / P8</option>
                                                <option value="9,0">F  / 9G / F9</option>
                                                <option value="R,">Rujukan LPM</option>
                                                <option value="Z,">Masalah Keputusan</option>
                                                <option value="T,">Tidak Hadir</option>
                                                <option value="X,0">Tiada</option>
                                                </select>
                  </td>
                </tr>
                <tr>
                <td>13</td>
                  <td> <select name="sub13" class="form-control select2">
                <option value=" ">Select</option>
                                <option value="3472" > ADDITIONAL MATHEMATICS</option>                <option value="4561" > ADDITIONAL SCIENCE</option>                <option value="7302" > AKUAKULTUR DAN HAIWAN REKREASI</option>                <option value="5405" > AL-ADAB WA AL-BALAGHAH</option>                <option value="5403" > AL-LUGHAH AL-ARABIAH AL-MU ASIRAH</option>                <option value="5402" > AL-SYARIAH</option>                <option value="8302" > AMALAN BENGKEL MEKANIKAL</option>                <option value="8202" > APLIKASI ELEKTRIK DAN ELEKTRONIK</option>                <option value="8701" > APLIKASI KOMPUTER DALAM PERNIAGAAN</option>                <option value="4581" > APPLIED SCIENCE</option>                <option value="3768" > ASAS KELESTARIAN</option>                <option value="8552" > ASAS KEMAHIRAN PELANCONGAN</option>                <option value="8843" > ASAS PEMEROSESAN MAKLUMAT</option>                <option value="7205" > ASUHAN DAN PENDIDIKAN AWAL KANAK-KANAK</option>                <option value="8870" > ASUHAN KANAK-KANAK</option>                <option value="8322" > AUTOMOTIF ELEKTRIK DAN DISEL</option>                <option value="8321" > AUTOMOTIF KENDERAAN</option>                <option value="8101" > BAHAN BINAAN</option>                <option value="2361" > BAHASA ARAB / BAHASA ARAB TINGGI</option>                <option value="6362" > BAHASA ARAB KOMUNIKASI</option>                <option value="6351" > BAHASA CINA</option>                <option value="6356" > BAHASA IBAN</option>                <option value="1119" > BAHASA INGGERIS</option>                <option value="6405" > BAHASA JEPUN</option>                <option value="6401" > BAHASA JERMAN</option>                <option value="6357" > BAHASA KADAZAN/DUSUN</option>                <option value="1103" > BAHASA MELAYU</option>                <option value="9303" > BAHASA PERANCIS</option>                <option value="9378" > BAHASA PUNJABI</option>                <option value="6354" > BAHASA TAMIL</option>                <option value="9221" > BIBLE KNOWLEDGE</option>                <option value="4551" > BIOLOGY</option>                <option value="4541" > CHEMISTRY</option>                <option value="8522" > DANDANAN RAMBUT</option>                <option value="3767" > EKONOMI</option>                <option value="3757" > EKONOMI ASAS</option>                <option value="3758" > EKONOMI RUMAH TANGGA</option>                <option value="6355" > ENGLISH FOR SCIENCE AND TECHNOLOGY</option>                <option value="8401" > FUNDAMENTALS OF PROGRAMMING</option>                <option value="2280" > GEOGRAFI</option>                <option value="7206" > GERONTOLOGI ASAS DAN PERKHIDMATAN GERIATRIK</option>                <option value="7404" > GRAFIK BERKOMPUTER</option>                <option value="3771" > GRAFIK KOMUNIKASI TEKNIKAL</option>                <option value="7402" > HIASAN DALAMAN ASAS</option>                <option value="5301" > HIFZ AL QURAN</option>                <option value="8883 / 8602" > HORTIKULTUR HIASAN DAN LANDSKAP</option>                <option value="3765" > INFORMATION AND COMMUNICATION TECHNOLOGY</option>                <option value="7202" > KATERING DAN PENYAJIAN</option>                <option value="8884" > KEJENTERAAN LADANG</option>                <option value="8601" > KEJENTERAAN PERTANIAN</option>                <option value="8815" > KERJA KAYU & BATA</option>                <option value="8824" > KERJA KIMPALAN #</option>                <option value="8812" > KERJA MENGGEGAS & MELARIK</option>                <option value="7103" > KERJA PAIP DOMESTIK</option>                <option value="8830" > KERJA PENYEJUKAN & PENYAMANAN UDARA</option>                <option value="9216" > KESUSASTERAAN CINA</option>                <option value="2215" > KESUSASTERAAN MELAYU</option>                <option value="9217" > KESUSASTERAAN TAMIL</option>                <option value="8331" > KIMPALAN ARKA</option>                <option value="7105" > KIMPALAN ARKA DAN GAS</option>                <option value="8332" > KIMPALAN GAS</option>                <option value="2612" > KOMUNIKASI VISUAL</option>                <option value="7301" > LANDSKAP DAN NURSERI</option>                <option value="2205" > LITERATURE IN ENGLISH</option>                <option value="8828" > LUKISAN GEOMETRI & AUTOMOTIF</option>                <option value="8816" > LUKISAN GEOMETRI & BINAAN BANGUNAN</option>                <option value="8819" > LUKISAN GEOMETRI & ELEKTRIK</option>                <option value="8822" > LUKISAN GEOMETRI & ELEKTRONIK</option>                <option value="8825" > LUKISAN GEOMETRI & FABRIKASI LOGAM</option>                <option value="8813" > LUKISAN GEOMETRI & MESIN</option>                <option value="8831" > LUKISAN GEOMETRI & PENYAMANAN UDARA</option>                <option value="3759" > LUKISAN KEJURUTERAAN</option>                <option value="5302" > MAHARAT AL QURAN</option>                <option value="5404" > MANAHIJ AL-ULUM AL-ISLAMIAH</option>                <option value="0000" > MATA PELAJARAN SELAIN DI ATAS</option>                <option value="1449" > MATHEMATICS</option>                <option value="8501" > MEMBUAT PAKAIAN</option>                <option value="7102" > MEMBUAT PERABOT</option>                <option value="8871" > MENGASUH DAN MEMBIMBING KANAK-KANAK</option>                <option value="8827" > MENSERVIS & MEMBAIKI KENDERAAN</option>                <option value="7106" > MENSERVIS AUTOMOBIL</option>                <option value="7107" > MENSERVIS MOTOSIKAL</option>                <option value="7109" > MENSERVIS PERALATAN ELEKTRIK DOMESTIK</option>                <option value="7108" > MENSERVIS PERALATAN PENYEJUKAN DAN PENYAMANAN UDARA</option>                <option value="8821" > MENSERVIS RADIO & TV</option>                <option value="2622" > MUZIK</option>                <option value="8512" > PATISSERIE</option>                <option value="8551" > PELANCONGAN DAN REKREASI</option>                <option value="8818" > PEMASANGAN & KAWALAN ELEKTRIK</option>                <option value="7101" > PEMBINAAN DOMESTIK</option>                <option value="8301" > PEMESINAN BERKOMPUTER</option>                <option value="8604" > PEMPROSESAN HASIL PERTANIAN</option>                <option value="7203" > PEMPROSESAN MAKANAN</option>                <option value="7104" > PENDAWAIAN DOMESTIK</option>                <option value="5227" > PENDIDIKAN AL-QURAN DAN AL-SUNNAH</option>                <option value="1223" > PENDIDIKAN ISLAM</option>                <option value="1225" > PENDIDIKAN MORAL</option>                <option value="2621" > PENDIDIKAN MUZIK</option>                <option value="2611" > PENDIDIKAN SENI VISUAL</option>                <option value="5228" > PENDIDIKAN SYARI AH ISLAMIAH</option>                <option value="3529" > PENGAJIAN AGROTEKNOLOGI</option>                <option value="3761" > PENGAJIAN KEJURUTERAAN AWAM</option>                <option value="3762" > PENGAJIAN KEJURUTERAAN ELEKTRIK DAN ELEKTRONIK</option>                <option value="3760" > PENGAJIAN KEJURUTERAAN MEKANIKAL</option>                <option value="3754" > PENGAJIAN KEUSAHAWANAN</option>                <option value="8531" > PENGAJIAN PERKEMBANGAN KANAK-KANAK</option>                <option value="8881 / 8603" > PENGELUARAN TANAMAN</option>                <option value="8882 / 8605" > PENGELUARAN TERNAKAN</option>                <option value="4571" > PENGETAHUAN SAINS SUKAN</option>                <option value="8885" > PENGURUSAN LADANG</option>                <option value="7204" > PENJAGAAN MUKA DAN DANDANAN RAMBUT</option>                <option value="8542" > PENYAJIAN MAKANAN DAN MINUMAN</option>                <option value="8312" > PENYAMANAN UDARA</option>                <option value="8862" > PENYEDIAAN & PERKHIDMATAN MAKANAN</option>                <option value="8541" > PENYEDIAAN MASAKAN BARAT DAN TIMUR</option>                <option value="8311" > PENYEJUKAN</option>                <option value="8702" > PERAKAUNAN PERNIAGAAN</option>                <option value="3755" > PERDAGANGAN</option>                <option value="8532" > PERKHIDMATAN AWAL KANAK-KANAK</option>                <option value="3766" > PERNIAGAAN</option>                <option value="8521" > PERSOLEKAN</option>                <option value="8866" > PERSOLEKAN & MENDANDAN RAMBUT</option>                <option value="3729" > PERTANIAN</option>                <option value="4531" > PHYSICS</option>                <option value="8502" > POLA PAKAIAN</option>                <option value="8201" > PRINSIP ELEKTRIK DAN ELEKTRONIK</option>                <option value="8201" > Prinsip Elektrik Dan Elektronik</option>                <option value="3756" > PRINSIP PERAKAUNAN</option>                <option value="7403" > PRODUKSI MULTIMEDIA</option>                <option value="8402" > PROGRAMMING AND DEVELOPMENT TOOLS</option>                <option value="3763" > REKA CIPTA</option>                <option value="7201" > REKAAN DAN JAHITAN PAKAIAN</option>                <option value="8864" > REKAAN FESYEN & MEMBUAT PAKAIAN</option>                <option value="2614" > REKABENTUK</option>                <option value="8511" > ROTI DAN MAKANAN YIS</option>                <option value="3770" > SAINS KOMPUTER</option>                <option value="3528" > SAINS PERTANIAN</option>                <option value="3769" > SAINS RUMAH TANGGA</option>                <option value="4572" > SAINS SUKAN</option>                <option value="1511" > SCIENCE</option>                <option value="1249" > SEJARAH</option>                <option value="2613" > SENI HALUS</option>                <option value="7401" > SENI REKA TANDA</option>                <option value="7303" > TANAMAN MAKANAN</option>                <option value="2631" > TARI</option>                <option value="5226" > TASAWWUR ISLAM</option>                <option value="2641" > TEATER</option>                <option value="8826" > TEKNOLOGI AUTOMOTIF</option>                <option value="8868" > TEKNOLOGI BAKERI & KONFEKSIONERI</option>                <option value="8811" > TEKNOLOGI BENGKEL MESIN</option>                <option value="8102" > TEKNOLOGI BINAAN</option>                <option value="8814" > TEKNOLOGI BINAAN BANGUNAN</option>                <option value="8817" > TEKNOLOGI ELEKTRIK</option>                <option value="8820" > TEKNOLOGI ELEKTRONIK</option>                <option value="8861" > TEKNOLOGI KATERING</option>                <option value="3764" > TEKNOLOGI KEJURUTERAAN</option>                <option value="8823" > TEKNOLOGI KIMPALAN & FABRIKASI LOGAM</option>                <option value="8703" > TEKNOLOGI PEJABAT PERNIAGAAN</option>                <option value="8829" > TEKNOLOGI PENYEJUKAN & PENYAMANAN UDARA</option>                <option value="8863" > TEKNOLOGI REKAAN FESYEN & MEMBUAT PAKAIAN</option>                <option value="8865" > TEKNOLOGI SENI KECANTIKAN</option>                <option value="5303" > TURATH AL-QURAN DAN AL-SUNNAH</option>                <option value="5305" > TURATH BAHASA ARAB</option>                <option value="5304" > TURATH DIRASAT ISLAMIAH</option>                <option value="5401" > USUL AL-DIN</option>                </select></td>
                  <td><select name="gred13" class="form-control select2">
                        <option value=" ">Select</option>
                                                <option value="0,18">A+</option>
                                                <option value="1,16">A  / 1A / A1</option>
                                                <option value="2,14">A- / 2A / A2</option>
                                                <option value="3,12">B+ / 3B / C3</option>
                                                <option value="4,10">B  / 4B / C4</option>
                                                <option value="5,8">C+ / 5C / C5</option>
                                                <option value="6,6">C  / 6C / C6</option>
                                                <option value="7,4">D  / 7D / P7</option>
                                                <option value="8,2">E  / 8E / P8</option>
                                                <option value="9,0">F  / 9G / F9</option>
                                                <option value="R,">Rujukan LPM</option>
                                                <option value="Z,">Masalah Keputusan</option>
                                                <option value="T,">Tidak Hadir</option>
                                                <option value="X,0">Tiada</option>
                                                </select>
                  </td>
                </tr>
                <tr>
                <td>14</td>
                  <td> <select name="sub14" class="form-control select2">
                <option value=" ">Select</option>
                                <option value="3472" > ADDITIONAL MATHEMATICS</option>                <option value="4561" > ADDITIONAL SCIENCE</option>                <option value="7302" > AKUAKULTUR DAN HAIWAN REKREASI</option>                <option value="5405" > AL-ADAB WA AL-BALAGHAH</option>                <option value="5403" > AL-LUGHAH AL-ARABIAH AL-MU ASIRAH</option>                <option value="5402" > AL-SYARIAH</option>                <option value="8302" > AMALAN BENGKEL MEKANIKAL</option>                <option value="8202" > APLIKASI ELEKTRIK DAN ELEKTRONIK</option>                <option value="8701" > APLIKASI KOMPUTER DALAM PERNIAGAAN</option>                <option value="4581" > APPLIED SCIENCE</option>                <option value="3768" > ASAS KELESTARIAN</option>                <option value="8552" > ASAS KEMAHIRAN PELANCONGAN</option>                <option value="8843" > ASAS PEMEROSESAN MAKLUMAT</option>                <option value="7205" > ASUHAN DAN PENDIDIKAN AWAL KANAK-KANAK</option>                <option value="8870" > ASUHAN KANAK-KANAK</option>                <option value="8322" > AUTOMOTIF ELEKTRIK DAN DISEL</option>                <option value="8321" > AUTOMOTIF KENDERAAN</option>                <option value="8101" > BAHAN BINAAN</option>                <option value="2361" > BAHASA ARAB / BAHASA ARAB TINGGI</option>                <option value="6362" > BAHASA ARAB KOMUNIKASI</option>                <option value="6351" > BAHASA CINA</option>                <option value="6356" > BAHASA IBAN</option>                <option value="1119" > BAHASA INGGERIS</option>                <option value="6405" > BAHASA JEPUN</option>                <option value="6401" > BAHASA JERMAN</option>                <option value="6357" > BAHASA KADAZAN/DUSUN</option>                <option value="1103" > BAHASA MELAYU</option>                <option value="9303" > BAHASA PERANCIS</option>                <option value="9378" > BAHASA PUNJABI</option>                <option value="6354" > BAHASA TAMIL</option>                <option value="9221" > BIBLE KNOWLEDGE</option>                <option value="4551" > BIOLOGY</option>                <option value="4541" > CHEMISTRY</option>                <option value="8522" > DANDANAN RAMBUT</option>                <option value="3767" > EKONOMI</option>                <option value="3757" > EKONOMI ASAS</option>                <option value="3758" > EKONOMI RUMAH TANGGA</option>                <option value="6355" > ENGLISH FOR SCIENCE AND TECHNOLOGY</option>                <option value="8401" > FUNDAMENTALS OF PROGRAMMING</option>                <option value="2280" > GEOGRAFI</option>                <option value="7206" > GERONTOLOGI ASAS DAN PERKHIDMATAN GERIATRIK</option>                <option value="7404" > GRAFIK BERKOMPUTER</option>                <option value="3771" > GRAFIK KOMUNIKASI TEKNIKAL</option>                <option value="7402" > HIASAN DALAMAN ASAS</option>                <option value="5301" > HIFZ AL QURAN</option>                <option value="8883 / 8602" > HORTIKULTUR HIASAN DAN LANDSKAP</option>                <option value="3765" > INFORMATION AND COMMUNICATION TECHNOLOGY</option>                <option value="7202" > KATERING DAN PENYAJIAN</option>                <option value="8884" > KEJENTERAAN LADANG</option>                <option value="8601" > KEJENTERAAN PERTANIAN</option>                <option value="8815" > KERJA KAYU & BATA</option>                <option value="8824" > KERJA KIMPALAN #</option>                <option value="8812" > KERJA MENGGEGAS & MELARIK</option>                <option value="7103" > KERJA PAIP DOMESTIK</option>                <option value="8830" > KERJA PENYEJUKAN & PENYAMANAN UDARA</option>                <option value="9216" > KESUSASTERAAN CINA</option>                <option value="2215" > KESUSASTERAAN MELAYU</option>                <option value="9217" > KESUSASTERAAN TAMIL</option>                <option value="8331" > KIMPALAN ARKA</option>                <option value="7105" > KIMPALAN ARKA DAN GAS</option>                <option value="8332" > KIMPALAN GAS</option>                <option value="2612" > KOMUNIKASI VISUAL</option>                <option value="7301" > LANDSKAP DAN NURSERI</option>                <option value="2205" > LITERATURE IN ENGLISH</option>                <option value="8828" > LUKISAN GEOMETRI & AUTOMOTIF</option>                <option value="8816" > LUKISAN GEOMETRI & BINAAN BANGUNAN</option>                <option value="8819" > LUKISAN GEOMETRI & ELEKTRIK</option>                <option value="8822" > LUKISAN GEOMETRI & ELEKTRONIK</option>                <option value="8825" > LUKISAN GEOMETRI & FABRIKASI LOGAM</option>                <option value="8813" > LUKISAN GEOMETRI & MESIN</option>                <option value="8831" > LUKISAN GEOMETRI & PENYAMANAN UDARA</option>                <option value="3759" > LUKISAN KEJURUTERAAN</option>                <option value="5302" > MAHARAT AL QURAN</option>                <option value="5404" > MANAHIJ AL-ULUM AL-ISLAMIAH</option>                <option value="0000" > MATA PELAJARAN SELAIN DI ATAS</option>                <option value="1449" > MATHEMATICS</option>                <option value="8501" > MEMBUAT PAKAIAN</option>                <option value="7102" > MEMBUAT PERABOT</option>                <option value="8871" > MENGASUH DAN MEMBIMBING KANAK-KANAK</option>                <option value="8827" > MENSERVIS & MEMBAIKI KENDERAAN</option>                <option value="7106" > MENSERVIS AUTOMOBIL</option>                <option value="7107" > MENSERVIS MOTOSIKAL</option>                <option value="7109" > MENSERVIS PERALATAN ELEKTRIK DOMESTIK</option>                <option value="7108" > MENSERVIS PERALATAN PENYEJUKAN DAN PENYAMANAN UDARA</option>                <option value="8821" > MENSERVIS RADIO & TV</option>                <option value="2622" > MUZIK</option>                <option value="8512" > PATISSERIE</option>                <option value="8551" > PELANCONGAN DAN REKREASI</option>                <option value="8818" > PEMASANGAN & KAWALAN ELEKTRIK</option>                <option value="7101" > PEMBINAAN DOMESTIK</option>                <option value="8301" > PEMESINAN BERKOMPUTER</option>                <option value="8604" > PEMPROSESAN HASIL PERTANIAN</option>                <option value="7203" > PEMPROSESAN MAKANAN</option>                <option value="7104" > PENDAWAIAN DOMESTIK</option>                <option value="5227" > PENDIDIKAN AL-QURAN DAN AL-SUNNAH</option>                <option value="1223" > PENDIDIKAN ISLAM</option>                <option value="1225" > PENDIDIKAN MORAL</option>                <option value="2621" > PENDIDIKAN MUZIK</option>                <option value="2611" > PENDIDIKAN SENI VISUAL</option>                <option value="5228" > PENDIDIKAN SYARI AH ISLAMIAH</option>                <option value="3529" > PENGAJIAN AGROTEKNOLOGI</option>                <option value="3761" > PENGAJIAN KEJURUTERAAN AWAM</option>                <option value="3762" > PENGAJIAN KEJURUTERAAN ELEKTRIK DAN ELEKTRONIK</option>                <option value="3760" > PENGAJIAN KEJURUTERAAN MEKANIKAL</option>                <option value="3754" > PENGAJIAN KEUSAHAWANAN</option>                <option value="8531" > PENGAJIAN PERKEMBANGAN KANAK-KANAK</option>                <option value="8881 / 8603" > PENGELUARAN TANAMAN</option>                <option value="8882 / 8605" > PENGELUARAN TERNAKAN</option>                <option value="4571" > PENGETAHUAN SAINS SUKAN</option>                <option value="8885" > PENGURUSAN LADANG</option>                <option value="7204" > PENJAGAAN MUKA DAN DANDANAN RAMBUT</option>                <option value="8542" > PENYAJIAN MAKANAN DAN MINUMAN</option>                <option value="8312" > PENYAMANAN UDARA</option>                <option value="8862" > PENYEDIAAN & PERKHIDMATAN MAKANAN</option>                <option value="8541" > PENYEDIAAN MASAKAN BARAT DAN TIMUR</option>                <option value="8311" > PENYEJUKAN</option>                <option value="8702" > PERAKAUNAN PERNIAGAAN</option>                <option value="3755" > PERDAGANGAN</option>                <option value="8532" > PERKHIDMATAN AWAL KANAK-KANAK</option>                <option value="3766" > PERNIAGAAN</option>                <option value="8521" > PERSOLEKAN</option>                <option value="8866" > PERSOLEKAN & MENDANDAN RAMBUT</option>                <option value="3729" > PERTANIAN</option>                <option value="4531" > PHYSICS</option>                <option value="8502" > POLA PAKAIAN</option>                <option value="8201" > PRINSIP ELEKTRIK DAN ELEKTRONIK</option>                <option value="8201" > Prinsip Elektrik Dan Elektronik</option>                <option value="3756" > PRINSIP PERAKAUNAN</option>                <option value="7403" > PRODUKSI MULTIMEDIA</option>                <option value="8402" > PROGRAMMING AND DEVELOPMENT TOOLS</option>                <option value="3763" > REKA CIPTA</option>                <option value="7201" > REKAAN DAN JAHITAN PAKAIAN</option>                <option value="8864" > REKAAN FESYEN & MEMBUAT PAKAIAN</option>                <option value="2614" > REKABENTUK</option>                <option value="8511" > ROTI DAN MAKANAN YIS</option>                <option value="3770" > SAINS KOMPUTER</option>                <option value="3528" > SAINS PERTANIAN</option>                <option value="3769" > SAINS RUMAH TANGGA</option>                <option value="4572" > SAINS SUKAN</option>                <option value="1511" > SCIENCE</option>                <option value="1249" > SEJARAH</option>                <option value="2613" > SENI HALUS</option>                <option value="7401" > SENI REKA TANDA</option>                <option value="7303" > TANAMAN MAKANAN</option>                <option value="2631" > TARI</option>                <option value="5226" > TASAWWUR ISLAM</option>                <option value="2641" > TEATER</option>                <option value="8826" > TEKNOLOGI AUTOMOTIF</option>                <option value="8868" > TEKNOLOGI BAKERI & KONFEKSIONERI</option>                <option value="8811" > TEKNOLOGI BENGKEL MESIN</option>                <option value="8102" > TEKNOLOGI BINAAN</option>                <option value="8814" > TEKNOLOGI BINAAN BANGUNAN</option>                <option value="8817" > TEKNOLOGI ELEKTRIK</option>                <option value="8820" > TEKNOLOGI ELEKTRONIK</option>                <option value="8861" > TEKNOLOGI KATERING</option>                <option value="3764" > TEKNOLOGI KEJURUTERAAN</option>                <option value="8823" > TEKNOLOGI KIMPALAN & FABRIKASI LOGAM</option>                <option value="8703" > TEKNOLOGI PEJABAT PERNIAGAAN</option>                <option value="8829" > TEKNOLOGI PENYEJUKAN & PENYAMANAN UDARA</option>                <option value="8863" > TEKNOLOGI REKAAN FESYEN & MEMBUAT PAKAIAN</option>                <option value="8865" > TEKNOLOGI SENI KECANTIKAN</option>                <option value="5303" > TURATH AL-QURAN DAN AL-SUNNAH</option>                <option value="5305" > TURATH BAHASA ARAB</option>                <option value="5304" > TURATH DIRASAT ISLAMIAH</option>                <option value="5401" > USUL AL-DIN</option>                </select></td>
                  <td><select name="gred14" class="form-control select2">
                        <option value=" ">Select</option>
                                                <option value="0,18">A+</option>
                                                <option value="1,16">A  / 1A / A1</option>
                                                <option value="2,14">A- / 2A / A2</option>
                                                <option value="3,12">B+ / 3B / C3</option>
                                                <option value="4,10">B  / 4B / C4</option>
                                                <option value="5,8">C+ / 5C / C5</option>
                                                <option value="6,6">C  / 6C / C6</option>
                                                <option value="7,4">D  / 7D / P7</option>
                                                <option value="8,2">E  / 8E / P8</option>
                                                <option value="9,0">F  / 9G / F9</option>
                                                <option value="R,">Rujukan LPM</option>
                                                <option value="Z,">Masalah Keputusan</option>
                                                <option value="T,">Tidak Hadir</option>
                                                <option value="X,0">Tiada</option>
                                                </select>
                  </td>
                </tr>
                <tr>
                <td>15</td>
                  <td> <select name="sub15" class="form-control select2">
                <option value=" ">Select</option>
                                <option value="3472" > ADDITIONAL MATHEMATICS</option>                <option value="4561" > ADDITIONAL SCIENCE</option>                <option value="7302" > AKUAKULTUR DAN HAIWAN REKREASI</option>                <option value="5405" > AL-ADAB WA AL-BALAGHAH</option>                <option value="5403" > AL-LUGHAH AL-ARABIAH AL-MU ASIRAH</option>                <option value="5402" > AL-SYARIAH</option>                <option value="8302" > AMALAN BENGKEL MEKANIKAL</option>                <option value="8202" > APLIKASI ELEKTRIK DAN ELEKTRONIK</option>                <option value="8701" > APLIKASI KOMPUTER DALAM PERNIAGAAN</option>                <option value="4581" > APPLIED SCIENCE</option>                <option value="3768" > ASAS KELESTARIAN</option>                <option value="8552" > ASAS KEMAHIRAN PELANCONGAN</option>                <option value="8843" > ASAS PEMEROSESAN MAKLUMAT</option>                <option value="7205" > ASUHAN DAN PENDIDIKAN AWAL KANAK-KANAK</option>                <option value="8870" > ASUHAN KANAK-KANAK</option>                <option value="8322" > AUTOMOTIF ELEKTRIK DAN DISEL</option>                <option value="8321" > AUTOMOTIF KENDERAAN</option>                <option value="8101" > BAHAN BINAAN</option>                <option value="2361" > BAHASA ARAB / BAHASA ARAB TINGGI</option>                <option value="6362" > BAHASA ARAB KOMUNIKASI</option>                <option value="6351" > BAHASA CINA</option>                <option value="6356" > BAHASA IBAN</option>                <option value="1119" > BAHASA INGGERIS</option>                <option value="6405" > BAHASA JEPUN</option>                <option value="6401" > BAHASA JERMAN</option>                <option value="6357" > BAHASA KADAZAN/DUSUN</option>                <option value="1103" > BAHASA MELAYU</option>                <option value="9303" > BAHASA PERANCIS</option>                <option value="9378" > BAHASA PUNJABI</option>                <option value="6354" > BAHASA TAMIL</option>                <option value="9221" > BIBLE KNOWLEDGE</option>                <option value="4551" > BIOLOGY</option>                <option value="4541" > CHEMISTRY</option>                <option value="8522" > DANDANAN RAMBUT</option>                <option value="3767" > EKONOMI</option>                <option value="3757" > EKONOMI ASAS</option>                <option value="3758" > EKONOMI RUMAH TANGGA</option>                <option value="6355" > ENGLISH FOR SCIENCE AND TECHNOLOGY</option>                <option value="8401" > FUNDAMENTALS OF PROGRAMMING</option>                <option value="2280" > GEOGRAFI</option>                <option value="7206" > GERONTOLOGI ASAS DAN PERKHIDMATAN GERIATRIK</option>                <option value="7404" > GRAFIK BERKOMPUTER</option>                <option value="3771" > GRAFIK KOMUNIKASI TEKNIKAL</option>                <option value="7402" > HIASAN DALAMAN ASAS</option>                <option value="5301" > HIFZ AL QURAN</option>                <option value="8883 / 8602" > HORTIKULTUR HIASAN DAN LANDSKAP</option>                <option value="3765" > INFORMATION AND COMMUNICATION TECHNOLOGY</option>                <option value="7202" > KATERING DAN PENYAJIAN</option>                <option value="8884" > KEJENTERAAN LADANG</option>                <option value="8601" > KEJENTERAAN PERTANIAN</option>                <option value="8815" > KERJA KAYU & BATA</option>                <option value="8824" > KERJA KIMPALAN #</option>                <option value="8812" > KERJA MENGGEGAS & MELARIK</option>                <option value="7103" > KERJA PAIP DOMESTIK</option>                <option value="8830" > KERJA PENYEJUKAN & PENYAMANAN UDARA</option>                <option value="9216" > KESUSASTERAAN CINA</option>                <option value="2215" > KESUSASTERAAN MELAYU</option>                <option value="9217" > KESUSASTERAAN TAMIL</option>                <option value="8331" > KIMPALAN ARKA</option>                <option value="7105" > KIMPALAN ARKA DAN GAS</option>                <option value="8332" > KIMPALAN GAS</option>                <option value="2612" > KOMUNIKASI VISUAL</option>                <option value="7301" > LANDSKAP DAN NURSERI</option>                <option value="2205" > LITERATURE IN ENGLISH</option>                <option value="8828" > LUKISAN GEOMETRI & AUTOMOTIF</option>                <option value="8816" > LUKISAN GEOMETRI & BINAAN BANGUNAN</option>                <option value="8819" > LUKISAN GEOMETRI & ELEKTRIK</option>                <option value="8822" > LUKISAN GEOMETRI & ELEKTRONIK</option>                <option value="8825" > LUKISAN GEOMETRI & FABRIKASI LOGAM</option>                <option value="8813" > LUKISAN GEOMETRI & MESIN</option>                <option value="8831" > LUKISAN GEOMETRI & PENYAMANAN UDARA</option>                <option value="3759" > LUKISAN KEJURUTERAAN</option>                <option value="5302" > MAHARAT AL QURAN</option>                <option value="5404" > MANAHIJ AL-ULUM AL-ISLAMIAH</option>                <option value="0000" > MATA PELAJARAN SELAIN DI ATAS</option>                <option value="1449" > MATHEMATICS</option>                <option value="8501" > MEMBUAT PAKAIAN</option>                <option value="7102" > MEMBUAT PERABOT</option>                <option value="8871" > MENGASUH DAN MEMBIMBING KANAK-KANAK</option>                <option value="8827" > MENSERVIS & MEMBAIKI KENDERAAN</option>                <option value="7106" > MENSERVIS AUTOMOBIL</option>                <option value="7107" > MENSERVIS MOTOSIKAL</option>                <option value="7109" > MENSERVIS PERALATAN ELEKTRIK DOMESTIK</option>                <option value="7108" > MENSERVIS PERALATAN PENYEJUKAN DAN PENYAMANAN UDARA</option>                <option value="8821" > MENSERVIS RADIO & TV</option>                <option value="2622" > MUZIK</option>                <option value="8512" > PATISSERIE</option>                <option value="8551" > PELANCONGAN DAN REKREASI</option>                <option value="8818" > PEMASANGAN & KAWALAN ELEKTRIK</option>                <option value="7101" > PEMBINAAN DOMESTIK</option>                <option value="8301" > PEMESINAN BERKOMPUTER</option>                <option value="8604" > PEMPROSESAN HASIL PERTANIAN</option>                <option value="7203" > PEMPROSESAN MAKANAN</option>                <option value="7104" > PENDAWAIAN DOMESTIK</option>                <option value="5227" > PENDIDIKAN AL-QURAN DAN AL-SUNNAH</option>                <option value="1223" > PENDIDIKAN ISLAM</option>                <option value="1225" > PENDIDIKAN MORAL</option>                <option value="2621" > PENDIDIKAN MUZIK</option>                <option value="2611" > PENDIDIKAN SENI VISUAL</option>                <option value="5228" > PENDIDIKAN SYARI AH ISLAMIAH</option>                <option value="3529" > PENGAJIAN AGROTEKNOLOGI</option>                <option value="3761" > PENGAJIAN KEJURUTERAAN AWAM</option>                <option value="3762" > PENGAJIAN KEJURUTERAAN ELEKTRIK DAN ELEKTRONIK</option>                <option value="3760" > PENGAJIAN KEJURUTERAAN MEKANIKAL</option>                <option value="3754" > PENGAJIAN KEUSAHAWANAN</option>                <option value="8531" > PENGAJIAN PERKEMBANGAN KANAK-KANAK</option>                <option value="8881 / 8603" > PENGELUARAN TANAMAN</option>                <option value="8882 / 8605" > PENGELUARAN TERNAKAN</option>                <option value="4571" > PENGETAHUAN SAINS SUKAN</option>                <option value="8885" > PENGURUSAN LADANG</option>                <option value="7204" > PENJAGAAN MUKA DAN DANDANAN RAMBUT</option>                <option value="8542" > PENYAJIAN MAKANAN DAN MINUMAN</option>                <option value="8312" > PENYAMANAN UDARA</option>                <option value="8862" > PENYEDIAAN & PERKHIDMATAN MAKANAN</option>                <option value="8541" > PENYEDIAAN MASAKAN BARAT DAN TIMUR</option>                <option value="8311" > PENYEJUKAN</option>                <option value="8702" > PERAKAUNAN PERNIAGAAN</option>                <option value="3755" > PERDAGANGAN</option>                <option value="8532" > PERKHIDMATAN AWAL KANAK-KANAK</option>                <option value="3766" > PERNIAGAAN</option>                <option value="8521" > PERSOLEKAN</option>                <option value="8866" > PERSOLEKAN & MENDANDAN RAMBUT</option>                <option value="3729" > PERTANIAN</option>                <option value="4531" > PHYSICS</option>                <option value="8502" > POLA PAKAIAN</option>                <option value="8201" > PRINSIP ELEKTRIK DAN ELEKTRONIK</option>                <option value="8201" > Prinsip Elektrik Dan Elektronik</option>                <option value="3756" > PRINSIP PERAKAUNAN</option>                <option value="7403" > PRODUKSI MULTIMEDIA</option>                <option value="8402" > PROGRAMMING AND DEVELOPMENT TOOLS</option>                <option value="3763" > REKA CIPTA</option>                <option value="7201" > REKAAN DAN JAHITAN PAKAIAN</option>                <option value="8864" > REKAAN FESYEN & MEMBUAT PAKAIAN</option>                <option value="2614" > REKABENTUK</option>                <option value="8511" > ROTI DAN MAKANAN YIS</option>                <option value="3770" > SAINS KOMPUTER</option>                <option value="3528" > SAINS PERTANIAN</option>                <option value="3769" > SAINS RUMAH TANGGA</option>                <option value="4572" > SAINS SUKAN</option>                <option value="1511" > SCIENCE</option>                <option value="1249" > SEJARAH</option>                <option value="2613" > SENI HALUS</option>                <option value="7401" > SENI REKA TANDA</option>                <option value="7303" > TANAMAN MAKANAN</option>                <option value="2631" > TARI</option>                <option value="5226" > TASAWWUR ISLAM</option>                <option value="2641" > TEATER</option>                <option value="8826" > TEKNOLOGI AUTOMOTIF</option>                <option value="8868" > TEKNOLOGI BAKERI & KONFEKSIONERI</option>                <option value="8811" > TEKNOLOGI BENGKEL MESIN</option>                <option value="8102" > TEKNOLOGI BINAAN</option>                <option value="8814" > TEKNOLOGI BINAAN BANGUNAN</option>                <option value="8817" > TEKNOLOGI ELEKTRIK</option>                <option value="8820" > TEKNOLOGI ELEKTRONIK</option>                <option value="8861" > TEKNOLOGI KATERING</option>                <option value="3764" > TEKNOLOGI KEJURUTERAAN</option>                <option value="8823" > TEKNOLOGI KIMPALAN & FABRIKASI LOGAM</option>                <option value="8703" > TEKNOLOGI PEJABAT PERNIAGAAN</option>                <option value="8829" > TEKNOLOGI PENYEJUKAN & PENYAMANAN UDARA</option>                <option value="8863" > TEKNOLOGI REKAAN FESYEN & MEMBUAT PAKAIAN</option>                <option value="8865" > TEKNOLOGI SENI KECANTIKAN</option>                <option value="5303" > TURATH AL-QURAN DAN AL-SUNNAH</option>                <option value="5305" > TURATH BAHASA ARAB</option>                <option value="5304" > TURATH DIRASAT ISLAMIAH</option>                <option value="5401" > USUL AL-DIN</option>                </select></td>
                  <td><select name="gred15" class="form-control select2">
                        <option value=" ">Select</option>
                                                <option value="0,18">A+</option>
                                                <option value="1,16">A  / 1A / A1</option>
                                                <option value="2,14">A- / 2A / A2</option>
                                                <option value="3,12">B+ / 3B / C3</option>
                                                <option value="4,10">B  / 4B / C4</option>
                                                <option value="5,8">C+ / 5C / C5</option>
                                                <option value="6,6">C  / 6C / C6</option>
                                                <option value="7,4">D  / 7D / P7</option>
                                                <option value="8,2">E  / 8E / P8</option>
                                                <option value="9,0">F  / 9G / F9</option>
                                                <option value="R,">Rujukan LPM</option>
                                                <option value="Z,">Masalah Keputusan</option>
                                                <option value="T,">Tidak Hadir</option>
                                                <option value="X,0">Tiada</option>
                                                </select>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div><!-- table-responsive -->
          <p class="mg-b-30"></p>
         
    </br>
    <input type='hidden' name='ic' value='011014121019'>
<input type="submit" name="submit" value="Update" class="btn btn-az-primary btn-block">
            </form>
            </br>
</div>

<div id="Upload" class="tabcontent">
</br>
  <h3>Upload Document</h3>
            <center>
            <form class="form" method="post" action="" enctype="multipart/form-data">
            <label>Filename:</label>
            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <div class="form-group">
            <select name="filename" class="form-control">
            <option value=" " selected disabled="" style="font-size:14px;">Please select</option>
                            <option style="text-transform:uppercase" value="D001" >Kad Pengenalan</option>
                            <option style="text-transform:uppercase" value="D002" >Sijil Kelahiran</option>
                            <option style="text-transform:uppercase" value="D003" >Sijil/slip Spm/spmv/svm Atau Setaraf</option>
                            <option style="text-transform:uppercase" value="D004" >Sijil Berhenti Sekolah</option>
                            <option style="text-transform:uppercase" value="D005" >Sijil/slip Keputusan Matrikulasi/stpm/stam/dvm/diploma Atau Setaraf</option>
                            <option style="text-transform:uppercase" value="D006" >Sejarah Julai/kod 1251(khas Lepasan Kv)</option>
                            <option style="text-transform:uppercase" value="D007" >Bahasa Melayu Julai/ Kod 1104(khas Lepasan Kv)</option>
                            <option style="text-transform:uppercase" value="D008" >Muet</option>
                        </select>
            </div><!-- form group -->
            </div><!-- col-4 -->
            <div style="margin-left: 9%">
            <label>File:</label>
            <input type="file" name="file"> <br/>
            </div>
            <div class="col-sm-4 col-md-2"><button class="btn btn-primary btn-rounded btn-block" type="submit" name="save">Upload</button></div>
            
            </form>
            </center>
                        <br>
            <div class="container">
            <table id="demo" class="table table-bordered">
            <thead>
            <tr>
            <td>Id</td>
            <td>FileName</td>
            <td>Download</td>
            <td>Delete</td>
            </tr>
            </thead>
            <tbody>
                        </tbody>
            </table>
            </div>
</div>
            </div>

<div id="Declaration" class="tabcontent">
</br>
  <h3>Declaration</h3>
  </br>
  <p><strong>Declaration</strong></p>
                <p>Please ensure that information provided is <strong>true and correct</strong>. No changes is allowed once the application is submitted.</p>
                <p>The university reserves the right to withdraw or amend any offer that has been made, or the student's enrolment will be terminated by the university according to the circumstances should the information provided inaccurate, false or misleading.</p>
               
            
                <hr/>


                        <form action="save_declaration_agent.php" method="post">
                        <p>How do you hear about us?</p>
                        <label class="ckbox"><input type="checkbox" name="f1" value="1"><span>Exhibition / Promotion</span></label></br>
                        <label class="ckbox"><input type="checkbox" name="f2" value="1"><span>Official UMP Website / UMP Advanced Website</span></label></br>
                        <label class="ckbox"><input type="checkbox" name="f3" value="1"><span>Internet / Web Education Portal</span></label></br>
                        <label class="ckbox"><input type="checkbox" name="f4" value="1"><span>Social Media</span></label></br>
                        <label class="ckbox"><input type="checkbox" name="f5" value="1"><span>Student Recruitment Agent</span></label></br>
                        <label class="ckbox"><input type="checkbox" name="f6" value="1"><span>Lecturer / Staff</span></label></br>
                        <label class="ckbox"><input type="checkbox" name="f7" value="1"><span>Seminar / Conferences</span></label></br>
                        <label class="ckbox"><input type="checkbox" name="f8" value="1"><span>Friend / Family</span></label></br>
                        <label class="ckbox"><input type="checkbox" name="f9" value="1"><span>Alumni</span></label></br>
                       
                        <br>
                        <hr/>
                        <input type='hidden' name='agent' value=''>
                        <input type='hidden' name='ic' value='011014121019'>
                        <div class="col-md mg-t-10 mg-md-t-0">
                        <label class="ckbox"><input type="checkbox" name="app" value="Submitted" required><span>I hereby certify that all information given are true.  </span></label></br></div>
                        <div class="col-md mg-t-10 mg-md-t-0">
                        <button class="btn btn-az-primary btn-block" name="submit">Submit</button>
                        </div>
                        </form>

                        
</div>          
            
              
        </div>
           </div> 
         
         </div><!-- card-body -->
        </div><!-- card -->
    </div><!-- col --><?php } ?>
      <div class="az-footer ht-40">
        <div class="container-fluid pd-t-0-f ht-100p">
          <span>&copy; 2019 Azia Responsive Bootstrap 4 Dashboard Template</span>
        </div><!-- container -->
      </div><!-- az-footer -->
    </div><!-- az-content -->


    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/ionicons/ionicons.js"></script>
    <script src="lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    

    <script src="js/azia.js"></script>
    <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
    <script>
      $(function(){
        'use strict'

        $(function() {
        $('#aliran').change(function() {
            $('.A').toggle($(this).val() === 'A');
      }).change();
      $('#aliran').change(function() {
            $('.B').toggle($(this).val() === 'S');
      }).change();
    });

        // Input Masks
        $('#dateMask').mask('99/99/9999');
        $('#phoneMask').mask('(999) 999-9999');
        $('#phoneExtMask').mask('(999) 999-9999? ext 99999');
        $('#ssnMask').mask('999-99-9999');

        $('.az-sidebar .with-sub').on('click', function(e){
          e.preventDefault();
          $(this).parent().toggleClass('show');
          $(this).parent().siblings().removeClass('show');
        })

        $(document).on('click touchstart', function(e){
          e.stopPropagation();

          // closing of sidebar menu when clicking outside of it
          if(!$(e.target).closest('.az-header-menu-icon').length) {
            var sidebarTarg = $(e.target).closest('.az-sidebar').length;
            if(!sidebarTarg) {
              $('body').removeClass('az-sidebar-show');
            }
          }
        });


        $('#azSidebarToggle').on('click', function(e){
          e.preventDefault();

          if(window.matchMedia('(min-width: 992px)').matches) {
            $('body').toggleClass('az-sidebar-hide');
          } else {
            $('body').toggleClass('az-sidebar-show');
          }
        })

        /* ----------------------------------- */
        /* Dashboard content */
        
        $('#compositeline').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });

        $('#compositeline2').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });

        $('#compositeline3').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });

        $('#compositeline4').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });


        var morrisData = [
          { y: 'Oct 01', a: 95000, b: 70000 },
          { y: 'Oct 05', a: 75000,  b: 55000 },
          { y: 'Oct 10', a: 50000,  b: 40000 },
          { y: 'Oct 15', a: 75000,  b: 65000 },
          { y: 'Oct 20', a: 50000,  b: 40000 },
          { y: 'Oct 25', a: 80000, b: 90000 },
          { y: 'Oct 30', a: 75000,  b: 65000 }
        ];

        new Morris.Bar({
          element: 'morrisBar1',
          data: morrisData,
          xkey: 'y',
          ykeys: ['a', 'b'],
          labels: ['Online', 'Offline'],
          barColors: ['#560bd0', '#00cccc'],
          preUnits: '$',
          barSizeRatio: 0.55,
          gridTextSize: 11,
          gridTextColor: '#494c57',
          gridTextWeight: 'bold',
          gridLineColor: '#999',
          gridStrokeWidth: 0.25,
          hideHover: 'auto',
          resize: true,
          padding: 5
        });

        $('#vmap2').vectorMap({
          map: 'usa_en',
          showTooltip: true,
          backgroundColor: '#fff',
          color: '#60adff',
          colors: {
            mo: '#9fceff',
            fl: '#60adff',
            or: '#409cff',
            ca: '#005cbf',
            tx: '#005cbf',
            wy: '#005cbf',
            ny: '#007bff'
          },
          hoverColor: '#222',
          enableZoom: false,
          borderWidth: 1,
          borderColor: '#fff',
          hoverOpacity: .85
        });

      });
    </script>
    <script>
      $(function(){
        'use strict'

        $('#example1').DataTable({
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#example2').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
  </body>
</html>
