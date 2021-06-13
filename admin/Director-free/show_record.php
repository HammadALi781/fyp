<?php include "connection.php" ?>
<!DOCTYPE html>
<html>
<?php include "head.php" ?>

<body class="skin-black">
  <?php include "navbar.php" ?>
  <?php include "sidebar.php" ?>
  <!-- Right side column. Contains the navbar and content of the page -->
  <aside class="right-side">
    <!-- Content Header (Page header) -->
    <script type="text/javascript">
      function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=300,height=300');
        popupWin.document.open();
        popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
      }
    </script>

    <!-- 
<?php
//$uid = $_GET['uid'];                                       
//$select = "select * from product where id = '$uid'";
//$res = mysqli_query($con, $select);
//$data = mysqli_fetch_array($res)
?> -->

    <!-- table shown on page  -->
    <!-- <table class="table table-striped " style="margin: 40px;">
  <caption>Purchasing Details</caption>
  <thead>
    <tr>
      <th>Name</th>
      <th>Phone</th>
      <th>Address</th>
      <th>Wehicle No</th>
      <th>Field Name</th>
      <th>Weight</th>
      <th>Deduction</th>
      <th>Net Amount</th>
    </tr>
  </thead>
  <tbody>
    <?php
    //while ($data = mysqli_fetch_array($res))
    {
    ?>  
    <tr>
      <td>data</td>
    </tr>
    ?>
  </tbody>
</table> -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Manage Products
            </header>
            <div class="panel-body table-responsive">
              <table class="table table-hover">
                <tr>
                  <th style="background-color:#F63;">Movie</th>
                  <th style="background-color:#FDF;">Cinema</th>
                  <th>Name</th>
                  <th style="background-color:#FDF;">Phone</th>
                  <th>CNIC</th>
                  <th style="background-color:#FDF;">Address</th>
                  <th>Price</th>
                  <th style="background-color:#FDF;">Date</th>
                  <th>Seats</th>
                  <th style="background-color:#FDF;">Net Amount</th>

                </tr>
                <tr>
                <?php
                $uid = $_GET['uid'];
                $select = "select * from product where id = '$uid'";
                $res = mysqli_query($con, $select);
              }
              while ($data = mysqli_fetch_array($res)) {
                ?>
                  <td style="background-color:#F63;"><?php echo $data['movie']; ?></td>
                  <td style="background-color:#FDF;"><?php echo $data['cinema']; ?></td>
                  <td><?php echo $data['name']; ?></td>
                  <td style="background-color:#FDF;"><?php echo $data['phone']; ?></td>
                  <td><?php echo $data['cnic']; ?></td>
                  <td style="background-color:#FDF;"><?php echo $data['address']; ?></td>
                  <td><?php echo $data['price']; ?></td>
                  <td style="background-color:#FDF;"><?php echo $data['date']; ?></td>
                  <td><?php echo $data['seat']; ?></td>
                  <td style="background-color:#FDF;"><?php echo $data['net_amount']; ?></td>
                </tr>
              <?php
              }
              ?>
              </table>


            </div>


        </div>
    </section>


    <!-- table shown on page end 
 -->



    <div id="divToPrint" style="display:none;">
      <!-- <div style="width:100%;height:300px;background-color:teal;"> -->

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Purchase Recipt
              </header>
              <div class="container">
                <table class="table table-hover">
                  <?php
                  $uid = $_GET['uid'];
                  $select = "select * from product where id = '$uid'";
                  $res = mysqli_query($con, $select);
                  $data = mysqli_fetch_array($res);
                  ?>
                  <tr>
                    <td style="background-color:#F63; width:40%;">Movie</td>
                    <td style="background-color:#F63;"><?php echo $data['movie']; ?></td>
                  </tr>
                  <tr>
                    <td style="background-color:#F63;">cinema</td>
                    <td style="background-color:#F63;"><?php echo $data['cinema']; ?></td>
                  </tr>
                  <tr>
                    <td style="background-color:#F63;">Name</td>
                    <td style="background-color:#F63;"><?php echo $data['name']; ?></td>
                  </tr>
                  <tr>
                    <td style="background-color:#F63;">Phone</td>
                    <td style="background-color:#F63;"><?php echo $data['phone']; ?></td>
                  </tr>
                  <tr>
                    <td style="background-color:#F63;">CNIC</td>
                    <td style="background-color:#F63;"><?php echo $data['cnic']; ?></td>
                  </tr>
                  <tr>
                    <td style="background-color:#F63;">Address</td>
                    <td style="background-color:#F63;"><?php echo $data['address']; ?></td>
                  </tr>
                  <tr>
                    <td style="background-color:#F63;">Price</td>
                    <td style="background-color:#F63;"><?php echo $data['price']; ?></td>
                  </tr>
                  <tr>
                    <td style="background-color:#F63;">Date</td>
                    <td style="background-color:#F63;"><?php echo $data['date']; ?></td>
                  </tr>
                  <tr>
                    <td style="background-color:#F63;">Seats</td>
                    <td style="background-color:#F63;"><?php echo $data['seat']; ?></td>
                  </tr>
                </table>
                <h1>Total amount : <?php echo $data['net_amount']; ?></h1>
              </div>
            </section>
          </div>
        </div>
      </section>
    </div>
    <div>
      <input type="button" value="print" onclick="PrintDiv();" style="width: 20%; display: block; margin:auto; padding:5px; background-color: #39435C; color:white;
      font-size:24px; font-weight:700; border-radius:100px; margin-bottom:40px !important " />
    </div>

  </aside><!-- /.right-side -->
  <div class="footer-main">
    Copyright &copy Director, 2021
  </div>
  </div><!-- ./wrapper -->
  <!-- jQuery 2.0.2 -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  <script src="js/jquery.min.js" type="text/javascript"></script>

  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <!-- Director App -->
  <script src="js/Director/app.js" type="text/javascript"></script>
</body>

</html>