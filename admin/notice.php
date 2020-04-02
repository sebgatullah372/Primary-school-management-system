<?php
include './includes/header.php';
require('./includes/db_connection.php');
?>


    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active"><a>Notice Update</a></li>
        </ol>
	

		<div class="panel panel-primary">
		<form action="" method="post" id="notice_b">
		<div class="form-group">
		<label for="notice_title">Notice Title</label>
		<input type="text" class="form-control" id="notice_title" name="notice_title" style="width: 750px"/>
        </div>
		<label for="notice_b">Notice Body</label>
		<div class="form-group">
		
        <textarea rows="10" cols="100" form="notice_b" name="notice_b" id="notice_b">
         </textarea>
		 </div>
		 </br>
		 <button type="submit" name="update" class="btn btn-primary">Update</button>
		 </form>
		 <?php
		 if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['update']))
		 {
		 $notice_title=$_POST['notice_title'];
     $notice_body=$_POST['notice_b'];
     $date_clicked = date('d-m-Y H:i:s');
		 $sql="INSERT INTO notice (notice_title,notice_body,time) values (?,?,?)";
		$stmt = mysqli_prepare($db, $sql);
        mysqli_stmt_bind_param($stmt, 'sss', $notice_title, $notice_body,$date_clicked);


       mysqli_stmt_execute($stmt);



       mysqli_stmt_close($stmt);

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
