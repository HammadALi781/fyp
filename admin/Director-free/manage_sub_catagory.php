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
                            Manage Rates
                        </header>
                        <?php
                        $select = "select * from sub_catagories";
                        $res = mysqli_query($con, $select);
                        ?>


                        <div class="panel-body table-responsive">
                            <table class="table table-hover">
                                <tr>
                                    <th style="background-color:#F63;">Id</th>
                                    <th>Movie Name</th>
                                    <th>Cinema</th>
                                    <th>Price</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                <tr>
                                    <?php
                                    while ($data = mysqli_fetch_array($res)) {
                                    ?> <td style="background-color:#F63;"><?php echo $data['id']; ?></td>
                                        <td><?php echo $data['movie_name']; ?></td>
                                        <td><?php echo $data['cinema']; ?></td>
                                        <td><?php echo $data['price']; ?></td>
                                        <td><a href="edit_sub_catagory.php?uid=<?php echo $data['id']; ?>">
                                                <span class="glyphicon glyphicon-edit" style="color:#F00"><strong>edit</strong></span>
                                            </a></td>
                                        <td><a href="delete_sub_catagory.php?uid=<?php echo $data['id']; ?>"><span class="glyphicon                               glyphicon-trash" style="color:#000"><strong>delete</strong></span></a></td>
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