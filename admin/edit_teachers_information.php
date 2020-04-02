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
	
		
		 
		 <?php
		 
		 $flag=0;
		 if(isset($_POST['edit'])){
		 
		 $flag++;
		 }
		 
		 if(isset($_GET['T_ID'])){
		 $T_ID=(int)$_GET['T_ID'];
		 //echo $T_ID;
		 
		 $sql="SELECT * FROM teacher_info WHERE T_ID='$T_ID' LIMIT 1";
		
		
		$result= $db->query($sql);		
         }
		 
		  

       //mysqli_stmt_close($stmt);
         if($result){
		 
		while($data=$result->fetch_object())
		{
		if($flag>0){
		break;
		}
	
		
		 ?>
		 	<form action="" method="post" id="teacher_info">
		
	<div class="form-group">
	
	
		<label for="t_name">Name</label>
		<input type="text" class="form-control" id="t_name" name="t_name"  value="<?php echo $data->Name ?>"style="width: 750px"/>
		</div>
		<div class="form-group">
		<label for="t_sub">Subject</label>
		<input type="text" class="form-control" id="t_sub" name="t_sub" value="<?php echo $data->Subject ?>" style="width: 750px"/>
		</div>
		<div class="form-group">
		<label for="t_des">Designation</label>
		<input type="text" class="form-control" id="t_des" name="t_des" value="<?php echo $data->Designation ?>" style="width: 750px"/>
		
        </div>
		 </br>
		 <button type="submit" name="edit" class="btn btn-primary">Edit</button>
		 
		 </form>
		 
		 <?php  
		
		 
		 }
		 }
		 
		 else{
		 echo"No Data Found";
		 }
		  
		 
		 if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['edit'])){
		 $name=$_POST['t_name'];
		 $subject=$_POST['t_sub'];
		 $designation=$_POST['t_des'];
		 $upsql="UPDATE teacher_info SET Name=?, Subject=?, Designation=? Where T_ID=?";
		 $prep=mysqli_prepare($db,$upsql);
		
		 mysqli_stmt_bind_param($prep,'sssi',$name,$subject,$designation,$T_ID);
		 
		 mysqli_stmt_execute($prep);
		 
		 mysqli_stmt_close($prep);
		 echo"Data Updated";
		 
		 ?>
		 <form action="" method="post" id="teacher_info">
		
	<div class="form-group">
	
	
		<label for="t_name">Name</label>
		<input type="text" class="form-control" id="t_name" name="t_name"  value="<?php echo $name; ?>"style="width: 750px"/>
		</div>
		<div class="form-group">
		<label for="t_sub">Subject</label>
		<input type="text" class="form-control" id="t_sub" name="t_sub" value="<?php echo $subject; ?>" style="width: 750px"/>
		</div>
		<div class="form-group">
		<label for="t_des">Designation</label>
		<input type="text" class="form-control" id="t_des" name="t_des" value="<?php echo $designation; ?>" style="width: 750px"/>
		
        </div>
		 </br>
		 <button type="submit" name="edit" class="btn btn-primary">Edit</button>
		 
		 </form>
		 <?php
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
