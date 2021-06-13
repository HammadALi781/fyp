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
                            Add Field
                        </header>
                        <div class="panel-body">
                            <form role="form" method="post">
                                <div class="form-group col-lg-7 col-sm-7">
                                    <label>Movie Name</label>
                                    <input type="text" name="catname" class="form-control" placeholder="Enter Field name" required>
                                    <label>Movie Time</label>
                                    <input type="time" name="time" class="form-control" placeholder="Enter Movie Time " required>
                                    <label for="exampleInputEmail1">Choose image</label>
                                    <input type="file" accept="image/*" class="form-control" name="pimage" required>
                                    <br> <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                        </div>

                        <!--submit session-->
                        <?php
                        if ($_POST) {
                            $catname = $_POST['catname'];
                            $time = $_POST['time'];
                            $img = $_POST['pimage'];
                            $insert = "insert into catagory(catagory_name,image,time) values ('$catname','$img','$time')";
                            $res = mysqli_query($con, $insert);
                            if (!$res) {
                                echo mysqli_error($con);
                            } else {

                        ?>
                                <script>
                                    alert('Movie Added')
                                </script>
                        <?php
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
    <script src="haseeb/js/jquery.min.js" type="text/javascript"></script>

    <!-- Bootstrap -->
    <script src="haseeb/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Director App -->
    <script src="haseeb/js/Director/app.js" type="text/javascript"></script>
</body>

</html>