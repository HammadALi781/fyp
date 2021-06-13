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
                            Edit Product
                        </header>
                        <?php
                        $uid = $_GET['uid'];
                        $select = "select * from product where id = '$uid'";
                        $res = mysqli_query($con, $select);
                        $data = mysqli_fetch_array($res)
                        ?>
                        <div class="panel-body">
                            <form role="form" method="post">
                                <div class="form-group col-lg-7 col-sm-7">
                                    <label for="exampleInputEmail1">Movie Name</label>
                                    <input type="text" name="movie" class="form-control" placeholder="  Enter movie name" value="<?php echo $data['movie']; ?>">
                                    <label for="exampleInputEmail1">Cinema Name</label>
                                    <input type="text" name="cinema" class="form-control" placeholder="  Enter cinema name" value="<?php echo $data['cinema']; ?>">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class="form-control" value="<?php echo $data['name']; ?>">
                                    <label for="exampleInputEmail1">Phone Number</label>
                                    <input type="number" name="phone" class="form-control" value="<?php echo $data['phone']; ?>">
                                    <label for="exampleInputEmail1">CNIC Number</label>
                                    <input type="text" name="cnic" class="form-control" value="<?php echo $data['cnic']; ?>">
                                    <label for="exampleInputEmail1">Address</label>
                                    <input type="text" name="address" class="form-control" value="<?php echo $data['address']; ?>">
                                    <label for="exampleInputEmail1">Price</label>
                                    <input type="text" name="price" class="form-control" value="<?php echo $data['price']; ?>">
                                    <label for="exampleInputEmail1">Date</label>
                                    <input type="date" name="date" class="form-control" value="<?php echo $data['date']; ?>">
                                    <label for="exampleInputEmail1">Seats</label>
                                    <input type="number" name="seat" class="form-control" value="<?php echo $data['seat']; ?>">
                                    <label for="exampleInputEmail1">Net Amount</label>
                                    <input type="number" name="nettotal" class="form-control" value="<?php echo $data['net_amount']; ?>">
                                    <br> <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                        </div>
                        <!--submit session-->
                        <?php
                        if ($_POST) {
                            $movie = $_POST['movie'];
                            $cinema = $_POST['cinema'];
                            $name = $_POST['name'];
                            $phone = $_POST['phone'];
                            $cnic = $_POST['cnic'];
                            $address = $_POST['address'];
                            $price = $_POST['price'];
                            $date = $_POST['date'];
                            $seat = $_POST['seat'];
                            $nettotal = $_POST['nettotal'];
                            $update = "update product set movie='$movie',cinema='$cinema',name='$name',phone='$phone' ,cnic='$cnic',address='$address',price='$price',date='$date',seat='$seat',net_amount='$nettotal' where id='$uid'";
                            $res = mysqli_query($con, $update);
                            if (!$res) {
                                echo mysqli_error($con);
                            } else {
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