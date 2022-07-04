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
    
   /* $role = $data2['role'];
    $agent=$data2['stud_name'];*/

        include 'header_adminrk.php';
      }

    ?>
    
         <div class="az-content-header d-block d-md-flex">
          <div class="col-xl-12 mg-t-15 mg-t-20">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title tx-14 mg-b-5">Kemaskini Status</h6>
            </div>

          <form role="form" action="save_rakankerjasama.php" method="post" enctype="multipart/form-data">
            <?php
                      if (isset($_GET['id'])) {

                          $id = $_GET['id'];
                      }

                        $sql4=mysqli_query($dbconfig,"select * from student where id='$id'");
                        while($data2=mysqli_fetch_array($sql4))
                        {
                        ?>
            <input type="text" name="id" value="<?php echo $id;?>" hidden>
            <p class="mg-b-20"></p>
            <div class="row row-sm">
              <div class="col-md-12 col-lg-12">

                <div class="form-group">
                          <label>Kemudahan:</label>
                            <select name="status" id="status" class="form-control">
                                <option value="status" selected disabled="" style="font-size:14px;">Please select</option>
                                <?php
                                $sql11 = "SELECT * FROM status_rk";
                                $result11 = mysqli_query($dbconfig, $sql11) or die("database error:". mysqli_error($dbconfig));
                                while($row11 = mysqli_fetch_assoc($result11) ) {
                                    $status_name=$row11['status_name'];
                                    ?>
                                    <!-- <option value="<?php echo ($status_name); ?>" ><?php echo($status_name); ?></option> -->
                                    <option value="<?php echo $row11["status_name"];?>"<?php if($row11["status_name"]==$data2['app_status']) echo 'selected="selected"'; ?>><?php echo $row11["status_name"];?></option>
                                <?php } ?>
                            </select>
                           </div>
              <!-- <div class="form-group">
                <select name="status" class="form-control" required="">
                  <option value="">Select Type</option>
                  <option>In Process</option>
                  <option>Approved</option>
                  <option>Accepted</option>
                  <option>Rejected</option>                                                         
                </select>
            </div> -->
    </div><!-- form group -->
  </div><!-- col -->
 
  <?php } ?>
<div class="center">
    <button type="submit" name="update_status" id="btn-submit" class="btn btn-primary btn-md">Update</button>
    <a href="list_rakankerjasama.php"><button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
</div>
</form><br><br>
           
      

                <!DOCTYPE html>
                <html>
                <head>
                <style>
                table {
                  font-family: arial, sans-serif;
                  border-collapse: collapse;
                  width: 100%;
                }

                td, th {
                  border: 1px solid #dddddd;
                  text-align: left;
                  padding: 6px;
                }

                tr:nth-child(even) {
                  background-color: #dddddd;
                }
                </style>
               <table>
                        <tr>
                          <th>Definisi</th>
                          <th>Status</th>
                        </tr>
                         <tr>
                         <td><input type="button" class="form-control" value="Permohonan telah diperakukan"></td>
                         <td><center><input type="button" class="btn btn-primary" style="border-radius: 15px" value="In Process"></center></td>
                        </tr>
                        <tr>
                         <td><input type="button" class="form-control" value="Permohonan telah diluluskan"></td>
                         <td><center><input type="button" class="btn btn-warning" style="border-radius: 15px" value="Approved"></center></td>
                        </tr>
                        <tr>
                          <td><input type="button" class="form-control" value="Dalam proses penyediaan MOA"></td>
                          <td><center><input type="button" class="btn btn-success" style="border-radius: 15px" value="Accepted"></center></td>
                        </tr>
                        <tr>
                          <td><input type="button" class="form-control" value="Permohonan ditolak"></td>
                          <td><center><input type="button" class="btn btn-danger" style="border-radius: 15px" value="Rejected"></center></td>
                        </tr>
                      </table>
      </div>
      <?php  ?>
    </div>
  </div>
  <!-- js -->
  <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
    <script src="../lib/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../lib/raphael/raphael.min.js"></script>
    <script src="../lib/morris.js/morris.min.js"></script>
    <script src="../lib/jqvmap/jquery.vmap.min.js"></script>
    <script src="../lib/jqvmap/maps/jquery.vmap.usa.js"></script>

    <script src="../js/azia.js"></script>
    <script>
      $(function(){
        'use strict'

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
  </body>
</html>
