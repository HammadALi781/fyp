<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "php_ticketbooking"); //"hostname", "db username", "db password", "db name"
if (!$con) {
    echo mysqli_error($con);
}


?>
<?php
include_once "head.php";
if ($_POST) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $select = "select id from login where username = '$user' and password = '$pass' limit 1";
    $res = mysqli_query($con, $select);
    if ($res) {
        $data = mysqli_fetch_array($res);
        $_SESSION['id'] = $data['id'];
        header("location:moderator.php");
    } else {

        echo "<script>alert ('Incorrect username or password.')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<body>
    <section class="content">

        <section class="panel">
            <header class="panel-heading">
                Login as admin or Moderator
            </header>
            <div class="pull-left" style=" min-height:50px; min-width:150px;margin:100px 0px 0px 250px;"><img src="upload/logn3.png" style="height:250px; width:250px" /></div>
            <div class="panel-body" style=" min-height:700px;">
                <form method="post">
                    <div class="form-group col-lg-4 col-sm-12 pull-left" style="margin:150px 0px 0px 0px;">
                        <input type="text" name="username" placeholder="username" class="form-control" required> <br><br>
                        <input type="password" name="password" placeholder="Password" class="form-control" required><br><br>
                        <input type="submit" name="submit" class="btn btn-info" value="Submit">

                </form>
            </div>


            </div>
        </section>


    </section><!-- /.content -->

</body>

</html>