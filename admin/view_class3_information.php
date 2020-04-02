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
		
		 
		 $sql="SELECT * FROM class_3 Order by roll ASC";
		$result= $db->query($sql);
		while($data=$result->fetch_object()){
		$id=$data->roll;
		$name=$data->Name;
		$address=$data->Address;
		$sex=$data->Sex;
		$dob=$data->Date_of_Birth;
		
		 ?>
		 	
		
	
	<?php echo $id."                  ".$name."             ".$address."          ".$sex."              ".$dob; ?>
	
		 <a class="btn btn-primary" href="edit_class3_information.php?roll=<?php echo $id;?>">Edit</a>
		 <a class="btn btn-danger" href="del_class3_information.php?roll=<?php echo $id;?>">Delete</a>
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