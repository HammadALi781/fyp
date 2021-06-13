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
                            Edit Price
                        </header>

                        <?php $uid = $_GET['uid'];
                        $select = "select * from sub_catagories where id = '$uid'";
                        $res = mysqli_query($con, $select);
                        $data = mysqli_fetch_array($res)
                        ?>
                        <div class="panel-body">
                            <form role="form" method="post">
                                <div class="form-group col-lg-7 col-sm-7">
                                    <label for="exampleInputEmail1">Movie</label>
                                    <input type="text" name="movie" class="form-control" value="<?php echo $data['movie_name']; ?>" required>
                                    <label for="exampleInputEmail1">Cinema</label>
                                    <input type="text" name="cinema" class="form-control" value="<?php echo $data['cinema']; ?>" required>
                                    <label for="exampleInputEmail1">Price</label>
                                    <input type="text" name="price" class="form-control" value="<?php echo $data['price']; ?>" required>
                                    <br> <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                        </div>
                        <!--submit session-->
                        <?php
                        if ($_POST) {
                            $movie = $_POST['movie'];
                            $cinema = $_POST['cinema'];
                            $price = $_POST['price'];
                            /*if(ctype_alpha(str_replace(' ', '', $name))!= true)  {
  echo"<script>alert ('name must be letters and space')</script>";
	}
else
{*/
                            $update = "update sub_catagories set movie_name='$movie',cinema='$cinema',price='$price' where id='$uid' ";
                            $res = mysqli_query($con, $update);
                            if (!$res) {
                                echo mysqli_error($con);
                            } else {
                                header("location:manage_sub_catagory.php");
                            }
                            /*}*/
                        }
                        ?>
                </div>
        </section>
        </div>
        </div>

        </section><!-- /.content -->
    </aside><!-- /.right-side -->
    <div class="footer-main">
        Copyright &copy Director, 2017
    </div>
    </div><!-- ./wrapper -->
    <!-- jQuery 2.0.2 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="haseeb/js/jquery.min.js" type="text/javascript"></script>

    <!-- Bootstrap -->
    <script src="haseeb/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Director App -->
    <script src="haseeb/js/Director/app.js" type="text/javascript"></script>
</body>

</html>