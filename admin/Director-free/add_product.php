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
              Add Purchasing
            </header>
            <?php
            $select = "select * from sub_catagories";
            $ress = mysqli_query($con, $select);
            $ressc = mysqli_query($con, $select);
            if ($_POST) {
              $catagory = $_POST['catagory'];
              $cinema = $_POST['cinema'];
              $name = $_POST['name'];
              $phone = $_POST['pnumber'];
              $cnic = $_POST['cnic'];
              $address = $_POST['address'];
              $price = $_POST['price'];
              $date = $_POST['date'];
              $seat = $_POST['seats'];
              $na = $_POST['netamount'];
              /*if(!preg_match("/^[a-zA-Z0-9 .\-]+$/i", $name)){
  echo'<b><div class="alert alert-danger" role="alert">
invalid product name .its must contain characters, numbers and space only.  
</div></b>';
}
elseif(!preg_match('/^[0-9 .\-]+$/i', $pp  )){
echo
'<b><div class="alert alert-danger" role="alert">
invalid product price .its must contain numbers only only.  
</div></b>';
}
elseif(!preg_match('/^[0-9 .\-]+$/i', $op)){
echo
'<b><div class="alert alert-danger" role="alert">
invalid product older price .its must contain numbers only only.  
</div></b>';
}
elseif(!preg_match('/^[0-9 .\-]+$/i', $np )){
echo
'<b><div class="alert alert-danger" role="alert">
invalid product new price .its must contain numbers only only.  
</div></b>';
}
elseif(!preg_match('/^[0-9 .\-]+$/i', $ps )){
echo
'<b><div class="alert alert-danger" role="alert">
invalid product stock .its must contain numbers only only.  
</div></b>';
}
else{*/
              $insert = "insert into product(movie,cinema,name,phone,cnic,address,price,date,seat,net_amount) values ('$catagory','$cinema','$name','$phone','$cnic','$address','$price','$date','$seat','$na')";
              $res = mysqli_query($con, $insert);
              if (!$res) {
                echo mysqli_error($con);
              } else {
            ?>
                <script>
                  alert('Purchasing Done')
                </script>
            <?php
              }
              /*}*/
            }

            ?>

            <div class="panel-body">
              <form role="form" method="post">
                <div class="form-group col-lg-7 col-sm-7">
                  <label>Select Movie</label>
                  <select name="catagory" class="form-control" id="movie_name">
                    <option>Select Movie</option>
                    <?php while ($data = mysqli_fetch_array($ress)) { ?>
                      <option value="<?php echo $data['movie_name']; ?>"><?php echo $data['movie_name']; ?> </option>
                    <?php } ?>
                  </select><br>
                  <label>Select Cinema</label>
                  <select name="cinema" class="form-control" id="catagory_name" onchange="getrates();">
                    <option>Select Cinema</option>
                    <?php while ($datac = mysqli_fetch_array($ressc)) { ?>
                      <option value="<?php echo $datac['cinema']; ?>"><?php echo $datac['cinema']; ?> </option>
                    <?php } ?>
                  </select><br>
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="<?php if (isset($name)) echo $name; ?>" required><br>
                  <label for="exampleInputEmail1">Phone Number</label>
                  <input type="number" name="pnumber" class="form-control" placeholder="Enter Phone number" value="<?php if (isset($phone)) echo $phone; ?>" required><br>
                  <label for="exampleInputEmail1">CNIC Number</label>
                  <input type="number" name="cnic" class="form-control" placeholder="Enter Your CNIC number" value="<?php if (isset($cnic)) echo $cnic; ?>" required><br>
                  <label for="exampleInputEmail1">Address</label>

                  <textarea type="text" value="<?php if (isset($address)) echo $address; ?>" name="address" class="form-control" placeholder="Address"></textarea><br>
                  <label for="exampleInputEmail1">Price</label>
                  <input type="number" name="price" class="form-control" id="price" value="<?php if (isset($pp)) echo $pdd; ?>" required><br>
                  <label for="exampleInputEmail1">Date</label>
                  <input type="date" name="date" class="form-control" id="date" value="" required><br>
                  <label for="exampleInputEmail1">Seats</label>
                  <input type="number" name="seats" class="form-control" id="rs" onKeyUp="addvalues(this)" placeholder="Enter deduction" value="<?php if (isset($pdd)) echo $pdd; ?>" required> <br>
                  <label for="exampleInputEmail1">Net Amount</label>
                  <input type="number" name="netamount" class="form-control" id="netprice" placeholder="Total after deduction" value="<?php if (isset($na)) echo $na; ?>" required> <br>
                  <br> <button type="submit" class="btn btn-info">Submit</button>
              </form>
            </div>



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
  <script>
    function addvalues(qty) {

      var PerSeatPrice = document.getElementById('price').value;
      //var pweight = document.getElementById('pw').value;
      var qty1 = qty.value;
      // var totaldeduction = qty.value;
      var totalprice = parseFloat(PerSeatPrice) * parseFloat(qty1);
      if (qty1 == "") {
        document.getElementById('netprice').value = 0;
      } else {
        document.getElementById('netprice').value = totalprice;
      }
    }

    function getrates() {
      let catName = $("#catagory_name").val();
      let movieName = $("#movie_name").val();
      $.ajax({
        type: "POST",
        url: "select_price.php",
        data: ({
          name: catName,
          movie: movieName
        }),
        dataType: "json",
        success: function(response) {
          // show response for success
          console.log(response.id, response.Field_name);
          document.getElementById('price').value = response.price;
          // document.getElementById('pdeduction').value=$deduction_kg;
        }
      });
    }
  </script>
</body>

</html>