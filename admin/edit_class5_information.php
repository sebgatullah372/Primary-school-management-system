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
		 
		 if(isset($_GET['roll'])){
		 $id=(int)$_GET['roll'];
		 //echo $id;
		 
		 $sql="SELECT * FROM class_5 WHERE roll='$id' LIMIT 1";
		
		
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
		 	<form action="" method="post" id="class1">
		
	    <div class="form-group">
	    <label for="roll">Roll</label>
		<input type="text" class="form-control" id="roll" name="roll"  value="<?php echo $data->roll ?>"style="width: 750px"/>
		</div>
		
	
	    
		<div class="form-group">
	    <label for="name">Name</label>
		<input type="text" class="form-control" id="name" name="name"  value="<?php echo $data->Name ?>"style="width: 750px"/>
		</div>
		
		<div class="form-group">
		<label for="address">Address</label>
		<input type="text" class="form-control" id="address" name="address" value="<?php echo $data->Address ?>" style="width: 750px"/>
		</div>
		
		<div class="col-half">
        <h4>Sex</h4>
		<?php //echo $data->Sex;?>
		<?php
		if($data->Sex=='Male'){
		?>
		<select name="sex">
		<option>Male</option>
		<option>Female</option>
		</select>
		<?php
	    }
		else
		
		{
		
		?>
		<select name="sex">
		<option>Female</option>
		<option>Male</option>
		</select>
		<?php
		}
			
		?>
        </select>
        </div>
		<?php 
		$dob=$data->Date_of_Birth;
		$dates=$dob[0].$dob[1];
		$datei=(int)$dates;
		//echo $datei;
		$months=$dob[3].$dob[4];
		$monthi=(int)$months;
		//echo $monthi;
		$years=$dob[6].$dob[7].$dob[8].$dob[9];
		$yeari=(int)$years;
		//echo $yeari;
		
		?>
		
		<div class="col-half">
        <h4>Date of Birth</h4>
		<select name="date"> 
		<?php
		$i = 1;
		for($i=1; $i <=31;$i++){
			if($i == $datei)
			{ 
			if($i<=9){
			   
			   ?>
				<option selected><?php echo "0".$i;?></option>
				<?php	
				continue;}
				else{
				?>
				<option selected><?php echo $i;?></option>
				<?php
				continue;
				
				}
				
				
			}
			if($i<=9){
		?>
            <option><?php echo "0".$i;?></option>
            <?php }
			else{
			?>
			<option><?php echo $i;?></option>
			<?php
			
			}}?>
          </select>
		  <select name="month">
		<?php
		$i = 1;
		for($i=1; $i <=12;$i++){
			if($i == $monthi)
			{ 
			if($i<=9){
			   
			   ?>
				<option selected><?php echo "0".$i;?></option>
				<?php	
				continue;}
				else{
				?>
				<option selected><?php echo $i;?></option>
				<?php
				continue;
				
				}
				
				
			}
			if($i<=9){
		?>
            <option><?php echo "0".$i;?></option>
            <?php }
			else{
			?>
			<option><?php echo $i;?></option>
			<?php
			
			}}?>
          </select>
		  <select name="year">
		<?php $i=2000;
		for($i=2000;$i<=2080;$i++){
		if($i == $yeari)
			{ ?>
				<option selected><?php echo $i;?></option>
				<?php	
				continue;
			}
		?>
            <option><?php echo $i;?></option>
            <?php }?>
          </select>
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
		 $roll=$_POST['roll'];
		 $name=$_POST['name'];
		 $address=$_POST['address'];
		 $sex=$_POST['sex'];
		 $dob=$_POST['date']."/".$_POST['month']."/".$_POST['year'];
		 $upsql="UPDATE class_5 SET roll=?, Name=?, Address=?, Sex=?, Date_of_Birth=? Where roll=?";
		 
		 $prep=mysqli_prepare($db,$upsql);
		 
		 mysqli_stmt_bind_param($prep,'issssi',$roll,$name,$address,$sex,$dob,$id);
		 
		 mysqli_stmt_execute($prep);
		 
		 mysqli_stmt_close($prep);
		 echo"Data Updated";
		 
		 ?>
		 		 	<form action="" method="post" id="teacher_info">
		
	    <div class="form-group">
	    <label for="roll">Roll</label>
		<input type="text" class="form-control" id="roll" name="roll"  value="<?php echo $roll ?>"style="width: 750px"/>
		</div>
		
	
	    
		<div class="form-group">
	    <label for="t_name">Name</label>
		<input type="text" class="form-control" id="name" name="name"  value="<?php echo $name ?>"style="width: 750px"/>
		</div>
		
		<div class="form-group">
		<label for="address">Address</label>
		<input type="text" class="form-control" id="address" name="address" value="<?php echo $address ?>" style="width: 750px"/>
		</div>
		
		<div class="col-half">
        <h4>Sex</h4>
		<?php //echo $data->Sex;?>
		<?php
		if($sex=='Male'){
		?>
		<select name="sex">
		<option>Male</option>
		<option>Female</option>
		</select>
		<?php
	    }
		else
		
		{
		
		?>
		<select name="sex">
		<option>Female</option>
		<option>Male</option>
		</select>
		<?php
		}
			
		?>
        </select>
        </div>
		<?php 
		$dates=$dob[0].$dob[1];
		$datei=(int)$dates;
		//echo $datei;
		$months=$dob[3].$dob[4];
		$monthi=(int)$months;
		//echo $monthi;
		$years=$dob[6].$dob[7].$dob[8].$dob[9];
		$yeari=(int)$years;
		//echo $yeari;
		
		?>
		
		<div class="col-half">
        <h4>Date of Birth</h4>
		<select name="date"> 
		<?php
		$i = 1;
		for($i=1; $i <=31;$i++){
			if($i == $datei)
			{ 
			if($i<=9){
			   
			   ?>
				<option selected><?php echo "0".$i;?></option>
				<?php	
				continue;}
				else{
				?>
				<option selected><?php echo $i;?></option>
				<?php
				continue;
				
				}
				
				
			}
			if($i<=9){
		?>
            <option><?php echo "0".$i;?></option>
            <?php }
			else{
			?>
			<option><?php echo $i;?></option>
			<?php
			
			}}?>
          </select>
		  <select name="month">
		<?php
		$i = 1;
		for($i=1; $i <=12;$i++){
			if($i == $monthi)
			{ 
			if($i<=9){
			   
			   ?>
				<option selected><?php echo "0".$i;?></option>
				<?php	
				continue;}
				else{
				?>
				<option selected><?php echo $i;?></option>
				<?php
				continue;
				
				}
				
				
			}
			if($i<=9){
		?>
            <option><?php echo "0".$i;?></option>
            <?php }
			else{
			?>
			<option><?php echo $i;?></option>
			<?php
			
			}}?>
          </select>
		  <select name="year">
		<?php $i=2000;
		for($i=2000;$i<=2080;$i++){
		if($i == $yeari)
			{ ?>
				<option selected><?php echo $i;?></option>
				<?php	
				continue;
			}
		?>
            <option><?php echo $i;?></option>
            <?php }?>
          </select>
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
