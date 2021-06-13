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
                            Add Movie Rates
                        </header>
                        <?php
                        $select = "select * from catagory";
                        $res = mysqli_query($con, $select);

                        ?>
                        <div class="panel-body">
                            <form role="form" method="post">
                                <div class="form-group col-lg-7 col-sm-7">
                                    <label for="exampleInputEmail1">Select Catagory</label>
                                    <select name="catagory" class="form-control">
                                        <?php while ($row1 = mysqli_fetch_array($res)) { ?>
                                            <option value="<?php echo $row1['catagory_name']; ?>"><?php echo $row1['catagory_name']; ?> </option>
                                        <?php } ?>
                                    </select>
                                    <label for="exampleInputEmail1">Cinema</label>
                                    <input type="text" name="ptd" class="form-control" placeholder="Enter Cinema name" required>
                                    <label for="exampleInputEmail1">Price</label>
                                    <input type="text" name="ptp" class="form-control" placeholder="Enter Price for cinema" required>
                                    <br> <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                        </div>

                        <!--submit session-->


                        <?php


                        if ($_POST) {
                            $catagory = $_POST['catagory'];
                            $cinema = $_POST['ptd'];
                            $price = $_POST['ptp'];
                            /*if(ctype_alpha(str_replace(' ', '', $name))!= true)  {
  echo"<script>alert ('name must be letters and space')</script>";
	}
else
{*/
                            $insert = "insert into sub_catagories(movie_name,cinema,price) values ('$catagory','$cinema','$price')";
                            $res = mysqli_query($con, $insert);
                            if (!$res) {
                                echo mysqli_error($con);
                            } else {
                        ?>
                                <script>
                                    alert('Price added Succesfully')
                                </script>
                        <?php
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
        Copyright &copy Director, 2021
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