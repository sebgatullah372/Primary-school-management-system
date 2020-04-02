<?php 
include './includes/header.php';
?>	

		
      <section class="container">
      <div class="row">
   	<div class="col-md-6"><div class="title-box clearfix "><h2 class="title-box_primary">Our Students</h2></div> 
      <div class="table-responsive" style="text-align: center" >
              <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0" >
                <thead >
                  <tr >
                  <th style="text-align: center">Roll</th>
                    <th style="text-align: center">Name</th>
                    <th style="text-align: center">Address</th>
                    <th style="text-align: center">Sex</th>
                    <th style="text-align: center">Date of Birth</th>
                  </tr>
                </thead>
               


                <?php
                $sql="SELECT * FROM class_1";
                $result= $db->query($sql);
                if($result){
                  while($data=$result->fetch_object())
                  {
                ?>
                <tbody>
                  <tr>
                    <td><?php echo $data->roll?></td>
                    <td><?php echo $data->Name?></td>
                    <td><?php echo $data->Address?></td>
                    <td><?php echo $data->Sex?></td>
                    <td><?php echo $data->Date_of_Birth?></td>
                   
                  </tr>
                 
                </tbody>
               <?php
                 }
                }
                else{
                echo "No Data Found";
                }
              
               ?>

              </table>
		      </div>

              <div class="table-responsive" style="text-align: center" >
              <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0" >
                <thead >
                  <tr >
                  <th style="text-align: center">Roll</th>
                    <th style="text-align: center">Name</th>
                    <th style="text-align: center">Address</th>
                    <th style="text-align: center">Sex</th>
                    <th style="text-align: center">Date of Birth</th>
                  
                  </tr>
                </thead>
               


                <?php
                $sql="SELECT * FROM class_2";
                $result= $db->query($sql);
                if($result){
                  while($data=$result->fetch_object())
                  {
                ?>
                <tbody>
                  <tr>          
                    <td><?php echo $data->roll?></td>
                    <td><?php echo $data->Name?></td>
                    <td><?php echo $data->Address?></td>
                    <td><?php echo $data->Sex?></td>
                    <td><?php echo $data->Date_of_Birth?></td>
                   
                  </tr>
                 
                </tbody>
               <?php
                 }
                }
                else{
                echo "No Data Found";
                }
              
               ?>

              </table>
		      </div>

              <div class="table-responsive" style="text-align: center" >
              <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0" >
                <thead >
                  <tr >
                  <th style="text-align: center">Roll</th>
                    <th style="text-align: center">Name</th>
                    <th style="text-align: center">Address</th>
                    <th style="text-align: center">Sex</th>
                    <th style="text-align: center">Date of Birth</th>
                  
                  </tr>
                </thead>
               


                <?php
                $sql="SELECT * FROM class_3";
                $result= $db->query($sql);
                if($result){
                  while($data=$result->fetch_object())
                  {
                ?>
                <tbody>
                  <tr>
                   <td><?php echo $data->roll?></td>
                    <td><?php echo $data->Name?></td>
                    <td><?php echo $data->Address?></td>
                    <td><?php echo $data->Sex?></td>
                    <td><?php echo $data->Date_of_Birth?></td>
                   
                  </tr>
                 
                </tbody>
               <?php
                 }
                }
                else{
                echo "No Data Found";
                }
              
               ?>

              </table>
		      </div>
         </div> 
          
          <div class="col-md-6"><div class="title-box clearfix "><h2 class="title-box_primary">Government Websites</h2></div> 
          <div class="table-responsive" style="text-align: center" >
              <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0" >
                <thead >
                  <tr >
                  <th style="text-align: center">Roll</th>
                    <th style="text-align: center">Name</th>
                    <th style="text-align: center">Address</th>
                    <th style="text-align: center">Sex</th>
                    <th style="text-align: center">Date of Birth</th>
                  
                  </tr>
                </thead>
               


                <?php
                $sql="SELECT * FROM class_4";
                $result= $db->query($sql);
                if($result){
                  while($data=$result->fetch_object())
                  {
                ?>
                <tbody>
                  <tr>
                  <td><?php echo $data->roll?></td>
                    <td><?php echo $data->Name?></td>
                    <td><?php echo $data->Address?></td>
                    <td><?php echo $data->Sex?></td>
                    <td><?php echo $data->Date_of_Birth?></td>
                   
                  </tr>
                 
                </tbody>
               <?php
                 }
                }
                else{
                echo "No Data Found";
                }
              
               ?>

              </table>
		      </div>
              <div class="table-responsive" style="text-align: center" >
              <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0" >
                <thead >
                  <tr >
                  <th style="text-align: center">Roll</th>
                    <th style="text-align: center">Name</th>
                    <th style="text-align: center">Address</th>
                    <th style="text-align: center">Sex</th>
                    <th style="text-align: center">Date of Birth</th>
                  
                  </tr>
                </thead>
               


                <?php
                $sql="SELECT * FROM class_5";
                $result= $db->query($sql);
                if($result){
                  while($data=$result->fetch_object())
                  {
                ?>
                <tbody>
                  <tr>
                  <td><?php echo $data->roll?></td>
                    <td><?php echo $data->Name?></td>
                    <td><?php echo $data->Address?></td>
                    <td><?php echo $data->Sex?></td>
                    <td><?php echo $data->Date_of_Birth?></td>
                  </tr>
                 
                </tbody>
               <?php
                 }
                }
                else{
                echo "No Data Found";
                }
              
               ?>

              </table>
		      </div>    
         </div>
      </div>
      </section>
      
<?php 
include './includes/footer.php';
?>	
