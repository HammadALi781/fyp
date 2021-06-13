<?php ob_start(); ?>
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


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Edit Movie
            </header>
            <?php
            $uid = $_GET['uid'];
            $select = "select * from catagory where id = '$uid'";
            $res = mysqli_query($con, $select);
            $data = mysqli_fetch_array($res)
            ?>
            <div class="panel-body">
              <form role="form" method="post">
                <div class="form-group col-lg-7 col-sm-7">
                  <label for="exampleInputEmail1">catagory Name</label>
                  <input type="text" name="catname" class="form-control" value="<?php echo $data['catagory_name']; ?>">
                  <label for="exampleInputEmail1">Time</label>
                  <input type="time" name="time" class="form-control" value="<?php echo $data['time']; ?>">
                  <label for="exampleInputEmail1">Choose image</label>
                  <input type="file" accept="image/*" class="form-control" name="image" value="<?php echo $data['image']; ?>"><img src="upload/<?php echo $data['image']; ?>" width="200" height="200" /><br>
                  <br> <button type="submit" class="btn btn-info">Submit</button>
              </form>
            </div>

            <!--submit session-->
            <?php

            if ($_POST) {
              $name = $_POST['catname'];
              $time = $_POST['time'];
              $image = $_POST['image'];
              if (ctype_alpha(str_replace(' ', '', $name)) != true) {
                echo "<script>alert ('name must be letters and space')</script>";
              } else {
                $update = "update catagory set catagory_name='$name',time='$time',image='$image' where id='$uid'";
                $res = mysqli_query($con, $update);
                if (!$res) {
                  echo mysqli_error($con);
                } else {
                  header("location:manage_catagory.php");
                }
              }
            }
            ?>


        </div>
    </section>
    </div>
    </div>

    </section><!-- /.content -->
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