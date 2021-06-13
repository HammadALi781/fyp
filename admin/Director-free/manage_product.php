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
    <section>
      <?php
      $select = "select * from sub_catagories";
      $ress = mysqli_query($con, $select);
      ?>
      <div class="panel-body">
        <h2>Select Specific Movie To Show Records</h2>
        <form role="form" method="post">
          <div class="form-group col-lg-7 col-sm-7">
            <select name="catagory" class="form-control">
              <?php while ($data = mysqli_fetch_array($ress)) { ?>
                <option value="<?php echo $data['movie_name']; ?>"><?php echo $data['movie_name']; ?> </option>
              <?php } ?>
            </select>
          </div>
          <button type="submit" class="btn btn-info">Submit</button>
        </form>
      </div>
    </section>
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
                  <th>Edit</th>
                  <th style="background-color:#FDF;">Delete</th>
                  <th>View Details</th>
                </tr>
                <tr>

                  <?php
                  if ($_POST) {
                    $catagory = $_POST['catagory'];
                    $select = "select * from product where movie='$catagory'";
                    $res = mysqli_query($con, $select);
                    $score = mysqli_num_rows($res);
                    if (($score == "")) {
                  ?>
                      <!--  <script>alert ('No Purchasing Found Against this Crop')</script>; -->
                      <div class="alert alert-danger">
                        <strong>Warning!</strong> Indicates No Purchasing Found Against this Crop.
                      </div>
                    <?php
                    }
                  } else {
                    $select = "select * from product order by id desc";
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
                    <td><a href="edit_product.php?uid=<?php echo $data['id']; ?>">
                        <span class="glyphicon glyphicon-edit" style="color:#F00"><strong>edit</strong></span>
                      </a></td>
                    <td style="background-color:#FDF;"><a href="delete_product.php?uid=<?php echo $data['id']; ?>"><span class="glyphicon                               glyphicon-trash" style="color:#000"><strong>delete</strong></span></a></td>
                    <td><a href="show_record.php?uid=<?php echo $data['id']; ?>"><span style="color:#000"><strong>View</strong></span></a></td>
                </tr>
              <?php
                  }
              ?>
              </table>


            </div>


        </div>
    </section>
    </div>
    </div>

    </section><!-- /.content -->
  </aside><!-- /.right-side -->
  <div class="footer-main">
    Copyright &copy Director, 2014
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