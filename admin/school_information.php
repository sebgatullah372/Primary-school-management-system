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
          <li class="breadcrumb-item active"><a>Update School Information</a></li>
        </ol>
    <?php
    $sql= "SELECT * FROM school_info";
    $result= $db->query($sql);
    while($data= $result->fetch_object()){
       $school_info= $data->School_Information;
       $address= $data->address;
       $telnum= $data->telnum;
       $email= $data->email;  

    }


    ?>

		<div class="panel panel-primary">
		<form action="" method="post" id="school_info">
		
		<label for="school_info">Update School Information Here</label>
        <textarea rows="10" cols="100" form="school_info" name="school_info" id="school_info">
        <?php echo $school_info; ?>
         </textarea>
		 </br>
     <div class="form-group">
     <label for="address">Set your School Address Here</label>
      <input type="text" name="address" value="<?php echo $address; ?>"/>
      </div>
      <div class="form-group">
     <label for="telnum">Set your School Contact Number Here</label>
      <input type="text" name="telnum" value="<?php echo (int)"0".$telnum; ?>"/>
      </div>
      <div class="form-group">
     <label for="email">Set your School Email Here</label>
      <input type="email" name="email" value="<?php echo $email; ?>"/>
      </div>
		 <button type="submit" name="update" class="btn btn-primary">Update</button>
		 </form>
		 <?php
		 if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['update']))
		 {
     $school_info=$_POST['school_info'];
     $address=$_POST['address'];
     $telnum=$_POST['telnum'];
     $email=$_POST['email'];
     //$date_clicked = date('d-m-Y H:i:s');
     
		 $sql="UPDATE School_info SET School_information=?, address=?, telnum=?, email=?  WHERE SI_id=1";
		$stmt = mysqli_prepare($db, $sql);
        mysqli_stmt_bind_param($stmt, 'ssis', $school_info, $address, $telnum, $email);
       mysqli_stmt_execute($stmt);
       mysqli_stmt_close($stmt);
    
       
     
       
		 }
 
		 
		 ?>
         </div>
    

          <div class="card-footer small text-muted">
            Updated on <?php //echo $date_clicked; ?>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <?php
  include './includes/footer.php';
  ?>
