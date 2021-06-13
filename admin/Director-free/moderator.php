<?php include "connection.php" ?>
<!DOCTYPE html>
<html>
<?php include "head.php" ?>

<body>
   <section class="content">

      <section class="panel">
         <header class="panel-heading">
            Register moderator
         </header>
         <div class="pull-left" style="min-height:150px; min-width:150px;margin:120px 20px 0px 250px;"><img src="upload/rg.png" style="height:150px; width:150px" /></div>
         <div class="panel-body" style=" min-height:700px;">
            <form role="form" method="post">
               <div class="form-group col-lg-4 col-sm-12 pull-left" style="margin:150px 0px 0px 0px;">
                  <input type="text" name="username" placeholder="username" class="form-control" required> <br>
                  <input type="password" name="password" placeholder="Password" class="form-control" required><br>
                  <label for="exampleInputEmail1">Choose image</label>
                  <input type="file" accept="image/*" class="form-control" name="image" required><br>
                  <input type="submit" name="submit" class="btn btn-info" value="Register">
                  <a href="login.php"> <input type="button" class="btn btn-info" value="Login"></a>

            </form>

         </div>
         <?php

         if ($_POST) {
            $un = $_POST['username'];
            $pas = $_POST['password'];
            $image = $_POST['image'];
            $insert = "insert into login(username,password,image) values ('$un','$pas','$image')";
            $res = mysqli_query($con, $insert);
            if (!$res) {
               echo mysqli_error($con);
            } else {
         ?>
               <script>
                  alert('user registered.')
               </script>
         <?php
            }
         }

         ?>
         </div>
      </section>


   </section><!-- /.content -->


</body>

</html>