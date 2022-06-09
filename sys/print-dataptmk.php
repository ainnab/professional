<?php 
    include 'talum.php';
    //$ic=$_SESSION['ic'];
?>
<?php 
$output = '';
if(isset($_POST["Submit"]))
{
	
	$output .= '           
            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
              <thead>
                <tr>
                  <th class="wd-5p">ID</th>
                  <th class="wd-25p">NOKP</th>
                  <th class="wd-20p">NOKPFIN</th>
                  <th class="wd-15p">NOKPBP</th>
                  <th class="wd-20p">NOKPIB</th>
                  <th class="wd-20p">TRKLAHIR_JPN</th>
				  <th class="wd-20p">NAMAKPBP_JPN</th>
				  <th class="wd-20p">NAMAKPIB_JPN</th>
				  <th class="wd-20p">KAUM_JPN</th>
				  <th class="wd-20p">KAUMBP_JPN</th>
				  <th class="wd-20p">KAUMIB_JPN</th>
				  <th class="wd-20p">JANTINA_JPN</th>
				  <th class="wd-20p">AGAMA_JPN</th>
				  <th class="wd-20p">WARGA_JPN</th>
				  <th class="wd-20p">WARGABP_JPN</th>
				  <th class="wd-20p">WARGAIB_JPN</th>
				  <th class="wd-20p">HK_JPN</th>
				  <th class="wd-20p">NOKPBP_LAHIR</th>
				  <th class="wd-20p">NAMABP_LAHIR</th>
				  <th class="wd-20p">KAUMBP_LAHIR</th>
				  <th class="wd-20p">AGAMABP_LAHIR</th>
				  <th class="wd-20p">NOKPIB_LAHIR</th>
				  <th class="wd-20p">NAMAIB_LAHIR</th>
				  <th class="wd-20p">KAUMIB_LAHIR</th>
				  <th class="wd-20p">AGAMAIB_LAHIR</th>
				  <th class="wd-20p">PERTALIANBP</th>
				  <th class="wd-20p">PERTALIANIB</th>
				  <th class="wd-20p">KODTARAF</th>
				  <th class="wd-20p">KODTARAFB4</th>
				  <th class="wd-20p">KODTARAFTD</th>
				  <th class="wd-20p">CACAT</th>
				  <th class="wd-20p">JENCACAT</th>
				  <th class="wd-20p">JENCACAT2</th>
				  <th class="wd-20p">CACATDETAIL</th>
				  <th class="wd-20p">CACATLL</th>
				  <th class="wd-20p">NOOKU</th>
				  <th class="wd-20p">NOOKUBP</th>
				  <th class="wd-20p">NOOKUIB</th>
				  <th class="wd-20p">KAHWIN</th>
				  <th class="wd-20p">TMPTLAHIR</th>
				  <th class="wd-20p">UMUR</th>
				  <th class="wd-20p">BERAT</th>
				  <th class="wd-20p">TINGGI</th>
				  <th class="wd-20p">ALAM1</th>
				  <th class="wd-20p">ALAM2</th>
				  <th class="wd-20p">BANDAR</th>
				  <th class="wd-20p">POSKOD</th>
				  <th class="wd-20p">NEGERI</th>
				  <th class="wd-20p">TELBIMBIT</th>
				  <th class="wd-20p">TELEFON</th>
				  <th class="wd-20p">TELBIMBITIBP</th>
				  <th class="wd-20p">EMAIL</th>
				  <th class="wd-20p">TEMTINGGAL</th>
				  <th class="wd-20p">PDAPATK</th>
				  <th class="wd-20p">TANGGUNG</th>
				  <th class="wd-20p">PAGENSI</th>
				  <th class="wd-20p">PWPP</th>
				  <th class="wd-20p">PDATA</th>
				  <th class="wd-20p">KATAG</th>
				  <th class="wd-20p">PIL1</th>
				  <th class="wd-20p">LAY1</th>
				  <th class="wd-20p">PPIL1</th>
				  <th class="wd-20p">PIL2</th>
				  <th class="wd-20p">LAY2</th>
				  <th class="wd-20p">PPIL2</th>
				  <th class="wd-20p">PIL3</th>
				  <th class="wd-20p">LAY3</th>
				  <th class="wd-20p">PPIL3</th>
				  <th class="wd-20p">PIL4</th>
				  <th class="wd-20p">LAY4</th>
				  <th class="wd-20p">PPIL4</th>
				  <th class="wd-20p">PIL5</th>
				  <th class="wd-20p">LAY5</th>
				  <th class="wd-20p">PPIL5</th>
				  <th class="wd-20p">PIL6</th>
				  <th class="wd-20p">LAY6</th>
				  <th class="wd-20p">PPIL6</th>
				  <th class="wd-20p">PIL7</th>
				  <th class="wd-20p">LAY7</th>
				  <th class="wd-20p">PPIL7</th>
				  <th class="wd-20p">PIL8</th>
				  <th class="wd-20p">LAY8</th>
				  <th class="wd-20p">PPIL8</th>
				  <th class="wd-20p">PIL9</th>
				  <th class="wd-20p">LAY9</th>
				  <th class="wd-20p">PPIL9</th>
				  <th class="wd-20p">PIL10</th>
				  <th class="wd-20p">LAY10</th>
				  <th class="wd-20p">PPIL10</th>
				  <th class="wd-20p">PIL11</th>
				  <th class="wd-20p">LAY11</th>
				  <th class="wd-20p">PPIL11</th>
				  <th class="wd-20p">PIL12</th>
				  <th class="wd-20p">LAY12</th>
				  <th class="wd-20p">PPIL12</th>
				  <th class="wd-20p">PSTTDUGA1</th>
				  <th class="wd-20p">PSTTDUGA2</th>
				  <th class="wd-20p">PSTTDUGA3</th>
				  <th class="wd-20p">PSTTDUGA4</th>
				  <th class="wd-20p">AGILIRSPM</th>
				  <th class="wd-20p">THNSPM</th>
				  <th class="wd-20p">SBBAKTIF</th>
				  <th class="wd-20p">IPTA</th>
				  <th class="wd-20p">PERINGKAT</th>
				  <th class="wd-20p">JUMPEL</th>
				  <th class="wd-20p">MPUTUS</th>
				  <th class="wd-20p">LISABI</th>
				  <th class="wd-20p">KODSPM1</th>
				  <th class="wd-20p">GRDSPM1</th>
				  <th class="wd-20p">KODSPM2</th>
				  <th class="wd-20p">GRDSPM2</th>
				  <th class="wd-20p">KODSPM3</th>
				  <th class="wd-20p">GRDSPM3</th>
				  <th class="wd-20p">KODSPM4</th>
				  <th class="wd-20p">GRDSPM4</th>
				  <th class="wd-20p">KODSPM5</th>
				  <th class="wd-20p">GRDSPM5</th>
				  <th class="wd-20p">KODSPM6</th>
				  <th class="wd-20p">GRDSPM6</th>
				  <th class="wd-20p">KODSPM7</th>
				  <th class="wd-20p">GRDSPM7</th>
				  <th class="wd-20p">KODSPM8</th>
				  <th class="wd-20p">GRDSPM8</th>
				  <th class="wd-20p">KODSPM9</th>
				  <th class="wd-20p">GRDSPM9</th>
				  <th class="wd-20p">KODSPM10</th>
				  <th class="wd-20p">GRDSPM10</th>
				  <th class="wd-20p">KODSPM11</th>
				  <th class="wd-20p">GRDSPM11</th>
				  <th class="wd-20p">KODSPM12</th>
				  <th class="wd-20p">GRDSPM12</th>
				  <th class="wd-20p">KODSPM13</th>
				  <th class="wd-20p">GRDSPM13</th>
				  <th class="wd-20p">KODSPM14</th>
				  <th class="wd-20p">GRDSPM14</th>
				  <th class="wd-20p">KODSPM15</th>
				  <th class="wd-20p">GRDSPM15</th>
				  <th class="wd-20p">ALIRAN</th>
				  <th class="wd-20p">MARKSPM</th>
				  <th class="wd-20p">MAKED1</th>
				  <th class="wd-20p">MAKED2</th>
				  <th class="wd-20p">MARKOKO</th>
				  <th class="wd-20p">JUMAC</th>
				  <th class="wd-20p">JUMA</th>
				  <th class="wd-20p">JUMAT</th>
				  <th class="wd-20p">JUMLAHA</th>
				  <th class="wd-20p">JUMCR</th>
				  <th class="wd-20p">GAGALBM</th>
				  <th class="wd-20p">KUR5KRE</th>
				  <th class="wd-20p">MATHTAM_BM</th>
				  <th class="wd-20p">FIZ_MATH</th>
				  <th class="wd-20p">KIM_BI</th>
				  <th class="wd-20p">MERIT</th>
				  <th class="wd-20p">KODKAT</th>
				  <th class="wd-20p">KODKAT2</th>
				  <th class="wd-20p">KURJAYA</th>
				  <th class="wd-20p">KURJAYA2</th>
				  <th class="wd-20p">KURJAYA3</th>
				  <th class="wd-20p">KURJAYA4</th>
				  <th class="wd-20p">MRKAKADEMIK</th>
				  <th class="wd-20p">MRKMERIT</th>
				  <th class="wd-20p">SBBXLYK</th>
				  <th class="wd-20p">RPIL1</th>
				  <th class="wd-20p">RLAY1</th>
				  <th class="wd-20p">RPIL2</th>
				  <th class="wd-20p">RLAY2</th>
				  <th class="wd-20p">RPIL3</th>
				  <th class="wd-20p">RLAY3</th>
				  <th class="wd-20p">RPIL4</th>
				  <th class="wd-20p">RLAY4</th>
				  <th class="wd-20p">RJAYA</th>
				  <th class="wd-20p">JENPJAYA</th>
				  <th class="wd-20p">ZONTDUGA</th>
				  <th class="wd-20p">JUMLAHAB</th>
				  <th class="wd-20p">GAGALSEJ</th>
				  <th class="wd-20p">KURJAYAPUSAT</th>
				  <th class="wd-20p">ATLIT_JSUKAN</th>
				  <th class="wd-20p">ATLIT_JSUKAN2</th>
				  <th class="wd-20p">ATLIT_PERINGKAT</th>
				  <th class="wd-20p">ATLIT_KEJOHANAN</th>
				  <th class="wd-20p">EK_PDPPGK</th>
				  <th class="wd-20p">EK_SMISKIN</th>
				  <th class="wd-20p">JKM_NOOKU</th>
				  <th class="wd-20p">JKM_KATCACAT</th>
				  <th class="wd-20p">EK_BTANGGUNG</th>
				  <th class="wd-20p">EK_JENDIAM</th>
				  <th class="wd-20p">EK_KEADAANDIAM</th>
				  <th class="wd-20p">BSH_BTANGGUNG</th>
				  <th class="wd-20p">BSH_PDPTVERIFY</th>
				  <th class="wd-20p">IDBSN</th>
				  <th class="wd-20p">URLVIDEO</th>
				  <th class="wd-20p">PKHAS</th>
				  <th class="wd-20p">PONLINE</th>
				 </tr>
              </thead>
              <tbody>
	';		  
	
			  $result = mysqli_query($dbconfig,"SELECT * FROM data_ptmk");
              $i=0; $j=1; 
			  while($row = mysqli_fetch_array($result)) {
				  $NAMA=$row["NOKP"];
				  $NOKPFIN=$row["NOKPFIN"];
				  $NOKPBP=$row["NOKPBP"];
				  $NOKPIB=$row["NOKPIB"];
				  $TRKLAHIR_JPN=$row["TRKLAHIR_JPN"];
				  $NAMAKPBP_JPN=$row["NAMAKPBP_JPN"];
				  $NAMAKPIB_JPN=$row["NAMAKPIB_JPN"];
				  $KAUM_JPN=$row["KAUM_JPN"];
				  $KAUMBP_JPN=$row["KAUMBP_JPN"];
				  $KAUMIB_JPN=$row["KAUMIB_JPN"];
				  $JANTINA_JPN=$row["JANTINA_JPN"];
				  $AGAMA_JPN=$row["AGAMA_JPN"];
				  $WARGA_JPN=$row["WARGA_JPN"];
				  $WARGABP_JPN=$row["WARGABP_JPN"];
				  $WARGAIB_JPN=$row["WARGAIB_JPN"];
				  $HK_JPN=$row["HK_JPN"];
				  $NOKPBP_LAHIR=$row["NOKPBP_LAHIR"];
				  $NAMABP_LAHIR=$row["NAMABP_LAHIR"];
				  $KAUMBP_LAHIR=$row["KAUMBP_LAHIR"];
				  $AGAMABP_LAHIR=$row["AGAMABP_LAHIR"];
				  $NOKPIB_LAHIR=$row["NOKPIB_LAHIR"];
				  $NAMAIB_LAHIR=$row["NAMAIB_LAHIR"];
				  $KAUMIB_LAHIR=$row["KAUMIB_LAHIR"];
				  $AGAMAIB_LAHIR=$row["AGAMAIB_LAHIR"];
				  $PERTALIANBP=$row["PERTALIANBP"];
				  $PERTALIANIB=$row["PERTALIANIB"];
				  $KODTARAF=$row["KODTARAF"];
				  $KODTARAFB4=$row["KODTARAFB4"];
				  $KODTARAFTD=$row["KODTARAFTD"];
				  $CACAT=$row["CACAT"];
				  $JENCACAT=$row["JENCACAT"];
				  $JENCACAT2=$row["JENCACAT2"];
				  $CACATDETAIL=$row["CACATDETAIL"];
				  $CACATLL=$row["CACATLL"];
				  $NOOKU=$row["NOOKU"];
				  $NOOKUBP=$row["NOOKUBP"];
				  $NOOKUIB=$row["NOOKUIB"];
				  $KAHWIN=$row["KAHWIN"];
				  $TMPTLAHIR=$row["TMPTLAHIR"];
				  $UMUR=$row["UMUR"];
				  $BERAT=$row["BERAT"];
				  $TINGGI=$row["TINGGI"];
				  $ALAM1=$row["ALAM1"];
				  $ALAM2=$row["ALAM2"];
				  $BANDAR=$row["BANDAR"];
				  $POSKOD=$row["POSKOD"];
				  $NEGERI=$row["NEGERI"];
				  $TELBIMBIT=$row["TELBIMBIT"];
				  $TELEFON=$row["TELEFON"];
				  $TELBIMBITIBP=$row["TELBIMBITIBP"];
				  $EMAIL=$row["EMAIL"];
				  $TEMTINGGAL=$row["TEMTINGGAL"];
				  $PDAPATK=$row["PDAPATK"];
				  $TANGGUNG=$row["TANGGUNG"];
				  $PAGENSI=$row["PAGENSI"];
				  $PWPP=$row["PWPP"];
				  $PDATA=$row["PDATA"];
				  $KATAG=$row["KATAG"];
				  $PIL1=$row["PIL1"];
				  $LAY1=$row["LAY1"];
				  $PPIL1=$row["PPIL1"];
				  $PIL2=$row["PIL2"];
				  $LAY2=$row["LAY2"];
				  $PPIL2=$row["PPIL2"];
				  $PIL3=$row["PIL3"];
				  $LAY3=$row["LAY3"];
				  $PPIL3=$row["PPIL3"];
				  $PIL4=$row["PIL4"];
				  $LAY4=$row["LAY4"];
				  $PPIL4=$row["PPIL4"];
				  $PIL5=$row["PIL5"];
				  $LAY5=$row["LAY5"];
				  $PPIL5=$row["PPIL5"];
				  $PIL6=$row["PIL6"];
				  $LAY6=$row["LAY6"];
				  $PPIL6=$row["PPIL6"];
				  $PIL7=$row["PIL7"];
				  $LAY7=$row["LAY7"];
				  $PPIL7=$row["PPIL7"];
				  $PIL8=$row["PIL8"];
				  $LAY8=$row["LAY8"];
				  $PPIL8=$row["PPIL8"];
				  $PIL9=$row["PIL9"];
				  $LAY9=$row["LAY9"];
				  $PPIL9=$row["PPIL9"];
				  $PIL10=$row["PIL10"];
				  $LAY10=$row["LAY10"];
				  $PPIL10=$row["PPIL10"];
				  $PIL11=$row["PIL11"];
				  $LAY11=$row["LAY11"];
				  $PPIL11=$row["PPIL11"];
				  $PIL12=$row["PIL12"];
				  $LAY12=$row["LAY12"];
				  $PPIL12=$row["PPIL12"];
				  $PSTTDUGA1=$row["PSTTDUGA1"];
				  $PSTTDUGA2=$row["PSTTDUGA2"];
				  $PSTTDUGA3=$row["PSTTDUGA3"];
				  $PSTTDUGA4=$row["PSTTDUGA4"];
				  $AGILIRSPM=$row["AGILIRSPM"];
				  $THNSPM=$row["THNSPM"];
				  $SBBAKTIF=$row["SBBAKTIF"];
				  $IPTA=$row["IPTA"];
				  $PERINGKAT=$row["PERINGKAT"];
				  $JUMPEL=$row["JUMPEL"];
				  $MPUTUS=$row["MPUTUS"];
				  $LISABI=$row["LISABI"];
				  $KODSPM1=$row["KODSPM1"];
				  $GRDSPM1=$row["GRDSPM1"];
				  $KODSPM2=$row["KODSPM2"];
				  $GRDSPM2=$row["GRDSPM2"];
				  $KODSPM3=$row["KODSPM3"];
				  $GRDSPM3=$row["GRDSPM3"];
				  $KODSPM4=$row["KODSPM4"];
				  $GRDSPM4=$row["GRDSPM4"];
				  $KODSPM5=$row["KODSPM5"];
				  $GRDSPM5=$row["GRDSPM5"];
				  $KODSPM6=$row["KODSPM6"];
				  $GRDSPM6=$row["GRDSPM6"];
				  $KODSPM7=$row["KODSPM7"];
				  $GRDSPM7=$row["GRDSPM7"];
				  $KODSPM8=$row["KODSPM8"];
				  $GRDSPM8=$row["GRDSPM8"];
				  $KODSPM9=$row["KODSPM9"];
				  $GRDSPM9=$row["GRDSPM9"];
				  $KODSPM10=$row["KODSPM10"];
				  $GRDSPM10=$row["GRDSPM10"];
				  $KODSPM11=$row["KODSPM11"];
				  $GRDSPM11=$row["GRDSPM11"];
				  $KODSPM12=$row["KODSPM12"];
				  $GRDSPM12=$row["GRDSPM12"];
				  $KODSPM13=$row["KODSPM13"];
				  $GRDSPM13=$row["GRDSPM13"];
				  $KODSPM14=$row["KODSPM14"];
				  $GRDSPM14=$row["GRDSPM14"];
				  $KODSPM15=$row["KODSPM15"];
				  $GRDSPM15=$row["GRDSPM15"];
				  $ALIRAN=$row["ALIRAN"];
				  $MARKSPM=$row["MARKSPM"];
				  $MAKED1=$row["MAKED1"];
				  $MAKED2=$row["MAKED2"];
				  $MARKOKO=$row["MARKOKO"];
				  $JUMAC=$row["JUMAC"];
				  $JUMA=$row["JUMA"];
				  $JUMAT=$row["JUMAT"];
				  $JUMLAHA=$row["JUMLAHA"];
				  $JUMCR=$row["JUMCR"];
				  $GAGALBM=$row["GAGALBM"];
				  $KUR5KRE=$row["KUR5KRE"];
				  $MATHTAM_BM=$row["MATHTAM_BM"];
				  $FIZ_MATH=$row["FIZ_MATH"];
				  $KIM_BI=$row["KIM_BI"];
				  $MERIT=$row["MERIT"];
				  $KODKAT=$row["KODKAT"];
				  $KODKAT2=$row["KODKAT2"];
				  $KURJAYA=$row["KURJAYA"];
				  $KURJAYA2=$row["KURJAYA2"];
				  $KURJAYA3=$row["KURJAYA3"];
				  $KURJAYA4=$row["KURJAYA4"];
				  $MRKAKADEMIK=$row["MRKAKADEMIK"];
				  $MRKMERIT=$row["MRKMERIT"];
				  $SBBXLYK=$row["SBBXLYK"];
				  $RPIL1=$row["RPIL1"];
				  $RLAY1=$row["RLAY1"];
				  $RPIL2=$row["RPIL2"];
				  $RLAY2=$row["RLAY2"];
				  $RPIL3=$row["RPIL3"];
				  $RLAY3=$row["RLAY3"];
				  $RPIL4=$row["RPIL4"];
				  $RLAY4=$row["RLAY4"];
				  $RJAYA=$row["RJAYA"];
				  $JENPJAYA=$row["JENPJAYA"];
				  $ZONTDUGA=$row["ZONTDUGA"];
				  $JUMLAHAB=$row["JUMLAHAB"];
				  $GAGALSEJ=$row["GAGALSEJ"];
				  $KURJAYAPUSAT=$row["KURJAYAPUSAT"];
				  $ATLIT_JSUKAN=$row["ATLIT_JSUKAN"];
				  $ATLIT_JSUKAN2=$row["ATLIT_JSUKAN2"];
				  $ATLIT_PERINGKAT=$row["ATLIT_PERINGKAT"];
				  $ATLIT_KEJOHANAN=$row["ATLIT_KEJOHANAN"];
				  $EK_PDPPGK=$row["EK_PDPPGK"];
				  $EK_SMISKIN=$row["EK_SMISKIN"];
				  $JKM_NOOKU=$row["JKM_NOOKU"];
				  $JKM_KATCACAT=$row["JKM_KATCACAT"];
				  $EK_BTANGGUNG=$row["EK_BTANGGUNG"];
				  $EK_JENDIAM=$row["EK_JENDIAM"];
				  $EK_KEADAANDIAM=$row["EK_KEADAANDIAM"];
				  $BSH_BTANGGUNG=$row["BSH_BTANGGUNG"];
				  $BSH_PDPTVERIFY=$row["BSH_PDPTVERIFY"];
				  $IDBSN=$row["IDBSN"];
				  $URLVIDEO=$row["URLVIDEO"];
				  $PKHAS=$row["PKHAS"];
				  $PONLINE=$row["PONLINE"];
				  
				  
	$output .= '		  
                            <tr>
							<td>'.$j++.'</td>
                            <td>'.$NAMA.'</td>
                            <td>'.$NOKPFIN.'</td>
                            <td>'.$NOKPBP.'</td>
                            <td>'.$NOKPIB.'</td>
							<td>'.$TRKLAHIR_JPN.'</td>
							<td>'.$NAMAKPBP_JPN.'</td>
							<td>'.$NAMAKPIB_JPN.'</td>
							<td>'.$KAUM_JPN.'</td>
							<td>'.$KAUMBP_JPN.'</td>
							<td>'.$KAUMIB_JPN.'</td>
							<td>'.$JANTINA_JPN.'</td>
							<td>'.$AGAMA_JPN.'</td>
							<td>'.$WARGA_JPN.'</td>
							<td>'.$WARGABP_JPN.'</td>
							<td>'.$WARGAIB_JPN.'</td>
							<td>'.$HK_JPN.'</td>
							<td>'.$NOKPBP_LAHIR.'</td>
							<td>'.$NAMABP_LAHIR.'</td>
							<td>'.$KAUMBP_LAHIR.'</td>
							<td>'.$AGAMABP_LAHIR.'</td>
							<td>'.$NOKPIB_LAHIR.'</td>
							<td>'.$NAMAIB_LAHIR.'</td>
							<td>'.$KAUMIB_LAHIR.'</td>
							<td>'.$AGAMAIB_LAHIR.'</td>
							<td>'.$PERTALIANBP.'</td>
							<td>'.$PERTALIANIB.'</td>
							<td>'.$KODTARAF.'</td>
							<td>'.$KODTARAFB4.'</td>
							<td>'.$KODTARAFTD.'</td>
							<td>'.$CACAT.'</td>
							<td>'.$JENCACAT.'</td>
							<td>'.$JENCACAT2.'</td>
							<td>'.$CACATDETAIL.'</td>
							<td>'.$CACATLL.'td>
							<td>'.$NOOKU.'</td>
							<td>'.$NOOKUBP.'</td>
							<td>'.$NOOKUIB.'</td>
							<td>'.$KAHWIN.'</td>
							<td>'.$TMPTLAHIR.'</td>
							<td>'.$UMUR.'</td>
							<td>'.$BERAT.'</td>
							<td>'.$TINGGI.'</td>
							<td>'.$ALAM1.'</td>
							<td>'.$ALAM2.'</td>
							<td>'.$BANDAR.'</td>
							<td>'.$POSKOD.'</td>
							<td>'.$NEGERI.'</td>
							<td>'.$TELBIMBIT.'</td>
							<td>'.$TELEFON.'</td>
							<td>'.$TELBIMBITIBP.'</td>
							<td>'.$EMAIL.'</td>
							<td>'.$TEMTINGGAL.'</td>
							<td>'.$PDAPATK.'</td>
							<td>'.$TANGGUNG.'</td>
							<td>'.$PAGENSI.'</td>
							<td>'.$PWPP.'</td>
							<td>'.$PDATA.'</td>
							<td>'.$KATAG.'</td>
							<td>'.$PIL1.'</td>
							<td>'.$LAY1.'</td>
							<td>'.$PPIL1.'</td>
							<td>'.$PIL2.'</td>
							<td>'.$LAY2.'</td>
							<td>'.$PPIL2.'</td>
							<td>'.$PIL3.'</td>
							<td>'.$LAY3.'</td>
							<td>'.$PPIL3.'</td>
							<td>'.$PIL4.'</td>
							<td>'.$LAY4.'</td>
							<td>'.$PPIL4.'</td>
							<td>'.$PIL5.'</td>
							<td>'.$LAY5.'</td>
							<td>'.$PPIL5.'</td>
							<td>'.$PIL6.'</td>
							<td>'.$LAY6.'</td>
							<td>'.$PPIL6.'</td>
							<td>'.$PIL7.'</td>
							<td>'.$LAY7.'</td>
							<td>'.$PPIL7.'</td>
							<td>'.$PIL8.'</td>
							<td>'.$LAY8.'</td>
							<td>'.$PPIL8.'</td>
							<td>'.$PIL9.'</td>
							<td>'.$LAY9.'</td>
							<td>'.$PPIL9.'</td>
							<td>'.$PIL10.'</td>
							<td>'.$LAY10.'</td>
							<td>'.$PPIL10.'</td>
							<td>'.$PIL11.'</td>
							<td>'.$LAY11.'</td>
							<td>'.$PPIL11.'</td>
							<td>'.$PIL12.'</td>
							<td>'.$LAY12.'</td>
							<td>'.$PPIL12.'</td>
							<td>'.$PSTTDUGA1.'</td>
							<td>'.$PSTTDUGA2.'</td>
							<td>'.$PSTTDUGA3.'</td>
							<td>'.$PSTTDUGA4.'</td>
							<td>'.$AGILIRSPM.'</td>
							<td>'.$THNSPM.'</td>
							<td>'.$SBBAKTIF.'</td>
							<td>'.$IPTA.'</td>
							<td>'.$PERINGKAT.'</td>
							<td>'.$JUMPEL.'</td>
							<td>'.$MPUTUS.'</td>
							<td>'.$LISABI.'</td>
							<td>'.$KODSPM1.'</td>
							<td>'.$GRDSPM1.'</td>
							<td>'.$KODSPM2.'</td>
							<td>'.$GRDSPM2.'</td>
							<td>'.$KODSPM3.'</td>
							<td>'.$GRDSPM3.'</td>
							<td>'.$KODSPM4.'</td>
							<td>'.$GRDSPM4.'</td>
							<td>'.$KODSPM5.'</td>
							<td>'.$GRDSPM5.'</td>
							<td>'.$KODSPM6.'</td>
							<td>'.$GRDSPM6.'</td>
							<td>'.$KODSPM7.'</td>
							<td>'.$GRDSPM7.'</td>
							<td>'.$KODSPM8.'</td>
							<td>'.$GRDSPM8.'</td>
							<td>'.$KODSPM9.'</td>
							<td>'.$GRDSPM9.'</td>
							<td>'.$KODSPM10.'</td>
							<td>'.$GRDSPM10.'</td>
							<td>'.$KODSPM11.'</td>
							<td>'.$GRDSPM11.'</td>
							<td>'.$KODSPM12.'</td>
							<td>'.$GRDSPM12.'</td>
							<td>'.$KODSPM13.'</td>
							<td>'.$GRDSPM13.'</td>
							<td>'.$KODSPM14.'</td>
							<td>'.$GRDSPM14.'</td>
							<td>'.$KODSPM15.'</td>
							<td>'.$GRDSPM15.'</td>
							<td>'.$ALIRAN.'</td>
							<td>'.$MARKSPM.'</td>
							<td>'.$MAKED1.'</td>
							<td>'.$MAKED2.'</td>
							<td>'.$MARKOKO.'</td>
							<td>'.$JUMAC.'</td>
							<td>'.$JUMA.'</td>
							<td>'.$JUMAT.'</td>
							<td>'.$JUMLAHA.'</td>
							<td>'.$JUMCR.'</td>
							<td>'.$GAGALBM.'</td>
							<td>'.$KUR5KRE.'</td>
							<td>'.$MATHTAM_BM.'</td>
							<td>'.$FIZ_MATH.'</td>
							<td>'.$KIM_BI.'</td>
							<td>'.$MERIT.'</td>
							<td>'.$KODKAT.'</td>
							<td>'.$KODKAT2.'</td>
							<td>'.$KURJAYA.'</td>
							<td>'.$KURJAYA2.'</td>
							<td>'.$KURJAYA3.'</td>
							<td>'.$KURJAYA4.'</td>
							<td>'.$MRKAKADEMIK.'</td>
							<td>'.$MRKMERIT.'</td>
							<td>'.$SBBXLYK.'</td>
							<td>'.$RPIL1.'</td>
							<td>'.$RLAY1.'</td>
							<td>'.$RPIL2.'</td>
							<td>'.$RLAY2.'</td>
							<td>'.$RPIL3.'</td>
							<td>'.$RLAY3.'</td>
							<td>'.$RPIL4.'</td>
							<td>'.$RLAY4.'</td>
							<td>'.$RJAYA.'</td>
							<td>'.$JENPJAYA.'</td>
							<td>'.$ZONTDUGA.'</td>
							<td>'.$JUMLAHAB.'</td>
							<td>'.$GAGALSEJ.'</td>
							<td>'.$KURJAYAPUSAT.'</td>
							<td>'.$ATLIT_JSUKAN.'</td>
							<td>'.$ATLIT_JSUKAN2.'</td>
							<td>'.$ATLIT_PERINGKAT.'</td>
							<td>'.$ATLIT_KEJOHANAN.'</td>
							<td>'.$EK_PDPPGK.'</td>
							<td>'.$EK_SMISKIN.'</td>
							<td>'.$JKM_NOOKU.'</td>
							<td>'.$JKM_KATCACAT.'</td>
							<td>'.$EK_BTANGGUNG.'</td>
							<td>'.$EK_JENDIAM.'</td>
							<td>'.$EK_KEADAANDIAM.'</td>
							<td>'.$BSH_BTANGGUNG.'</td>
							<td>'.$BSH_PDPTVERIFY.'</td>
							<td>'.$IDBSN.'</td>
							<td>'.$URLVIDEO.'</td>
							<td>'.$PKHAS.'</td>
							<td>'.$PONLINE.'</td>
							
                            </tr>
			';					
            $i++; }
    
	$output .= '</body>';
	$output .= '</table>';
		header('Content-Type: application/xls');
		header('Content-Disposition: attachment; filename=data-ptmk.xls');
		echo $output;
}
?>
