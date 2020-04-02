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
          <li class="breadcrumb-item active">My Dashboard</li>
        </ol>
		
		
		<div class="panel panel-primary">
		<form action="" method="post" id="teacher_info">
		<div class="form-group">
		<label for="roll">Roll</label>
		<input type="text" class="form-control" id="roll" name="roll" style="width: 750px"/>
		</div>
		
	    <div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" id="name" name="name" style="width: 750px"/>
		</div>
		<div class="form-group">
		<label for="address">Address</label>
		<input type="text" class="form-control" id="address" name="address" style="width: 750px"/>
		</div>
		
		<div class="col-half">
        <h4>Sex</h4>
		<select name="sex">
            <option>Male</option>
            <option>Female</option>
          </select>
        </div>
		<div class="col-half">
        <h4>Date of Birth</h4>
		<select name="date">
		<?php $i=1;
		for($i=1;$i<=31;$i++){
		?>
            <option><?php echo $i;?></option>
            <?php }?>
          </select>
		  <select name="month">
		<?php $i=1;
		for($i=1;$i<=12;$i++){
		?>
            <option><?php echo $i;?></option>
            <?php }?>
          </select>
		  <select name="year">
		<?php $i=2000;
		for($i=2000;$i<=2080;$i++){
		?>
            <option><?php echo $i;?></option>
            <?php }?>
          </select>
        </div>
		
		 </br>
		 <button type="submit" name="update" class="btn btn-primary">Update</button>
		 </form>
		 <?php
		 if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['update']))
		 {
		 $roll=$_POST['roll'];
		 $name=$_POST['name'];
		 $address=$_POST['address'];
		 $sex=$_POST['sex'];
		 $dob=$_POST['date']."/".$_POST['month']."/".$_POST['year'];
		 
		 $sql="INSERT INTO class_3 (roll,Name,Address,Sex,Date_of_Birth) values (?,?,?,?,?)";
		$stmt = mysqli_prepare($db, $sql);
        mysqli_stmt_bind_param($stmt, 'issss',$roll,$name,$address,$sex,$dob);


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