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
        $db=new mysqli("localhost","root","","dokkhin_shikolbaha");
       if(mysqli_connect_errno())
               {
          echo "DataBase Connection Failed!!";
          die();
              }
             else{
              //echo "Connected";
                }

             ?>
		
		<?php
		 
		 $flag=0;
		 if(isset($_POST['delete'])){
		 
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
    $T_ID= $data->T_ID;
    $name=  $data->Name;
    $subject=  $data->Subject;
    $designation= $data->Designation;
    
    echo $T_ID." ".$name." ".$subject." ".$designation;
		
		 ?>
		 	<form action="" method="post" id="teacher_info">
		

		 <button type="submit" name="delete" class="btn btn-danger">Delete</button>
		 
		 </form>
		 
		 <?php  
		
		 
		 }
		 }
		 
		 else{
		 echo"No Data Found";
		 }
		  
		 
		  if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['delete'])){
	
		 $delsql="DELETE from teacher_info Where T_ID=?";
		 $prep=mysqli_prepare($db,$delsql);
		 mysqli_stmt_bind_param($prep,'i',$T_ID);
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