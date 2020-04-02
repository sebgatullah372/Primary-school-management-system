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
		 if(isset($_POST['delete'])){
		 
		 $flag++;
		 }
		 
		 if(isset($_GET['serial'])){
		 $serial=(int)$_GET['serial'];
		 //echo $T_ID;
		 
		 $sql="SELECT * FROM alumni WHERE serial='$serial' LIMIT 1";
		
		
		$result= $db->query($sql);		
         }
		 
		  

       //mysqli_stmt_close($stmt);
         if($result){
		 
		while($data=$result->fetch_object())
		{
		if($flag>0){
		break;
		}
	  $serial=$data->serial;
    $passing_year=$data->passing_year;
    $name= $data->Name;
		$address=$data->Address;
		$sex=$data->Sex;
    $dob=$data->Date_of_Birth;
    $age= $data->Age;
    echo $serial." ".$passing_year." ".$name." ".$address." ".$sex." ".$dob." ".$age." " ;
		
		 ?>
		 		<form action="" method="post" id="alumni">
		
	   
		  <button type="submit" name="delete" class="btn btn-danger">Delete</button>
		 
		 </form>
		 
		 <?php  
		
		 
		 }
		 }
		 
		 else{
		 echo"No Data Found";
     }
     
		  
		 
		  if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['delete'])){
		 
		 $delsql="DELETE from alumni Where serial=?";
		 $prep=mysqli_prepare($db,$delsql);
		 mysqli_stmt_bind_param($prep,'i',$serial);
		 mysqli_stmt_execute($prep);
		 mysqli_stmt_close($prep);
     echo"Data Deleted!";
     
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