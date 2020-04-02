<?php
include './includes/header.php';
  

?>

    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">My Dashboard</li>
        </ol>

        <!-- Example Tables Card -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i>
            Our Teachers
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Designation</th>
                    
                  </tr>
                </thead>
               


                <?php
                $sql="SELECT * FROM teacher_info";
                $result= $db->query($sql);
                if($result){
                  while($data=$result->fetch_object())
                  {
                ?>
                <tbody>
                  <tr>
                    <td><?php echo $data->Name?></td>
                    <td><?php echo $data->Subject?></td>
                    <td><?php echo $data->Designation?></td>
                   
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