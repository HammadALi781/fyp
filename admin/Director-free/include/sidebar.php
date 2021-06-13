<div class="cl-sidebar">
    <div class="cl-toggle"><i class="fa fa-bars"></i></div>
    <div class="cl-navblock">
      <div class="menu-space">
        <div class="content">
          <div class="sidebar-logo">
            <div class="logo">
                <a href="index2.html"></a>
            </div>
            <script>
//document.getElementById("date").innerHTML = Date();
//n =  new Date();
//y = n.getFullYear();
//m = n.getMonth() + 1;
//d = n.getDate();
//document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
</script>
          </div>
          <div class="side-user">
            <div class="avatar"><img src="images/<?php echo $datauser['profile_pic']; ?>" alt="Avatar" /></div>
            <div class="info">
              <p> &nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo date("l"); ?> </b> <b><?php echo date("d/m/y"); ?></b></p>
              <div class="progress progress-user">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                  <span class="sr-only">50% Complete (success)</span>
                </div>
              </div>
            </div>
          </div>
<ul class="cl-vnavigation">
            <li>
            	<a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a>
            </li>
  <li>
    	<a href="#"><i class="fa fa-desktop"></i><span>Institute management</span></a>
   <ul class="sub-menu">
              
              
 	 <li>
   		<a href="institute_info.php"><span class="label label-primary pull-right">New </span>Institute 	 info</a>
     </li>    
     <li>
     <a href="manage_institute.php"><span class="label label-primary pull-right">
     <i class="glyphicon glyphicon-edit"></i>Edit </span>Manage Institute</a>     
     </li>           
   </ul>
 </li>
  <li>
    	<a href="#"><i class="glyphicon glyphicon-blackboard"></i><span>Classes Management</span></a>
   <ul class="sub-menu">
              
              
 	 <li>
   		<a href="class.php"><span class="label label-primary pull-right">New </span>Add Class</a>
     </li>
     <li>
     <a href="class_section.php"><span class="label label-primary pull-right">New</span>Add Class Section         </a>
     </li>     
     <li>
     <a href="manage_class.php"><span class="label label-primary pull-right">
     <i class="glyphicon glyphicon-edit"></i>Edit </span>Manage Class</a>     
     </li>
     <li>
     <a href="manage_section.php"><span class="label label-primary pull-right">
     <i class="glyphicon glyphicon-edit"></i>Edit</span>Manage Class Section</a>
     </li>            
   </ul>
 </li>
  <li>
    	<a href="#"><i class="fa fa-book"></i><span>Subject Management</span></a>
   <ul class="sub-menu">
 	 <li>
   		<a href="add_subject.php"><span class="label label-primary pull-right">New</span>Add Subject</a>
     </li>    
     <li>
  <a href="manage_subject.php"><span class="label label-primary pull-right">
  <i class="glyphicon glyphicon-edit"></i>Edit</span>Manage Subject</a>     </li>           
   </ul>
 </li>
   <li>
    	<a href="#"><i class="glyphicon glyphicon-king"></i><span>Staf management</span></a>
   <ul class="sub-menu">
              
              
 	 <li>
   		<a href="add_catagory.php"><span class="label label-primary pull-right">New </span>Add catagory</a>
     </li>
 	 <li>
   		<a href="add_staf.php"><span class="label label-primary pull-right">New </span>Add staf</a>
     </li>
          <li>
     <a href="manage_catagory.php"><span class="label label-primary pull-right">
     <i class="glyphicon glyphicon-edit"></i>Edit </span>Manage catagory</a>     
     </li>
          <li>
     <a href="manage_staf.php"><span class="label label-primary pull-right">
     <i class="glyphicon glyphicon-edit"></i>Edit </span>Manage staf
     </a>     
     </li>
    </ul>
 </li> 

 
   <li>
    	<a href="#"><i class="glyphicon glyphicon-education"></i><span>Student Management</span></a>
   <ul class="sub-menu">
 	 <li>
   		<a href="add_student.php"><span class="label label-primary pull-right">New</span>Add STudent</a>
     </li>    
     <li>
  <a href="manage_student.php"><span class="label label-primary pull-right">
  <i class="glyphicon glyphicon-edit"></i>Edit</span>Manage Student</a>
       </li>           
   </ul>
   <i class="fas fa-user-graduate"></i>
  </li>
   <li>
    	<a href="#"><i class="glyphicon glyphicon-king"></i><span>Account management</span></a>
   <ul class="sub-menu">
              
              
 	 <li>
   		<a href="add_catagory.php"><span class="label label-primary pull-right">New </span>Fee</a>
     </li>
 	 <li>
   		<a href="add_staf.php"><span class="label label-primary pull-right">New </span>Salary</a>
     </li>
          <li>
     <a href="manage_catagory.php"><span class="label label-primary pull-right">
     <i class="glyphicon glyphicon-edit"></i>Edit </span>Manage catagory</a>     
     </li>
          <li>
     <a href="manage_staf.php"><span class="label label-primary pull-right">
     <i class="glyphicon glyphicon-edit"></i>Edit </span>Manage staf
     </a>     
     </li>
    </ul>
 </li> 
  </ul>
        </div>
      </div>
      <div class="text-right collapse-button" style="padding:7px 9px;">
        <input type="text" class="form-control search" placeholder="Search..." />
        <button id="sidebar-collapse" class="btn btn-default" style=""><i style="color:#fff;" class="fa fa-angle-left"></i></button>
      </div>
    </div>
  </div>