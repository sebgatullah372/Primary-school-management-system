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
		
		 
		 $sql="SELECT * FROM teacher_info Order by T_ID ASC";
		$result= $db->query($sql);
		while($data=$result->fetch_object()){
		$id=$data->T_ID;
		$name=$data->Name;
		$subject=$data->Subject;
		$designation=$data->Designation;
		
		
		 ?>
		 	
		
	
	<?php echo $id."                  ".$name."             ".$subject."          ".$designation; ?>
	
		 <a class="btn btn-primary" href="edit_teachers_information.php?T_ID=<?php echo $id;?>">Edit</a>
		 <a class="btn btn-danger" href="del_teachers_information.php?T_ID=<?php echo $id;?>">Delete</a>
		 </br>
		 
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

