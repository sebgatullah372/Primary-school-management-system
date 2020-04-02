<?php
include './includes/header.php';
require('./includes/db_connection.php');
?>


    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active"><a>Add Teacher's Information</a></li>
        </ol>
		
		
		 

		<div class="panel panel-primary">
		<form action="" method="post" id="teacher_info">
		
	<div class="form-group">
		<label for="t_name">Name</label>
		<input type="text" class="form-control" id="t_name" name="t_name" style="width: 750px"/>
		</div>
		<div class="form-group">
		<label for="t_sub">Subject</label>
		<input type="text" class="form-control" id="t_sub" name="t_sub" style="width: 750px"/>
		</div>
		<div class="form-group">
		<label for="t_des">Designation</label>
		<input type="text" class="form-control" id="t_des" name="t_des" style="width: 750px"/>
		
        </div>
		 </br>
		 <button type="submit" name="update" class="btn btn-primary">Update</button>
		 </form>
		 <?php
		 if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['update']))
		 {
		 $name=$_POST['t_name'];
		 $subject=$_POST['t_sub'];
		 $designation=$_POST['t_des'];
		 $sql="INSERT INTO teacher_info (Name,Subject,Designation) values (?,?,?)";
		$stmt = mysqli_prepare($db, $sql);
        mysqli_stmt_bind_param($stmt, 'sss',$name,$subject,$designation);


       mysqli_stmt_execute($stmt);



       mysqli_stmt_close($stmt);
	   echo"Data Inserted!";

		 }
		 
		
		 ?>
	
         </div>

          <div class="card-footer small text-muted">
            Updated yesterday at 11:59 PM
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

  <?php
  include './includes/footer.php';
  ?>
