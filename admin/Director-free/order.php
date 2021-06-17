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
                                  Manage Orders
                              </header>
                              <div class="panel-body table-responsive">
                                  <table class="table table-hover">
                                         <tr>
                                         <th style="background-color:#F63;">Name</th>
                                         <th style="background-color:#FDF;">Method</th>
                                         <th>Amount</th>
                                         <th style="background-color:#FDF;">Cnic</th>
                                         <th>Delete</th>
                                         </tr>
                                         <tr>
<?php  
    $select = "select * from payments order by id desc";
    $res = mysqli_query($con, $select);                                       
while ($data = mysqli_fetch_array($res))
{
?>                             
                               <td style="background-color:#F63;"><?php echo $data['name']; ?></td>
                               <td style="background-color:#FDF;"><?php echo $data['method']; ?></td>
                               <td><?php echo $data['amount']; ?></td>
                               <td style="background-color:#FDF;"><?php echo $data['cnic']; ?></td>
                               <td><a href="delete_order.php?uid=<?php echo $data['id']; ?>"><span class="glyphicon                               glyphicon-trash" style="color:#000"><strong>delete</strong></span></a></td>
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
