<?php
include('./includes/session.php');
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Primary School Management- Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="dashboard.php">Welcome <?php echo $login_session; ?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="dashboard.php">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">
                Dashboard</span>
            </a>
          </li>
          
		  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="notice_board">
            <a class="nav-link" href="notice.php">
              <i class="fa fa-clipboard"></i>
              <span class="nav-link-text">
                Update Notice Board</span>
            </a>
          </li>
		   <li class="nav-item" data-toggle="tooltip" data-placement="right" title="notice_board">
            <a class="nav-link" href="school_information.php">
              <i class="fa fa-edit"></i>
              <span class="nav-link-text">
                Update School Information</span>
            </a>
          </li>
          
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-wrench"></i>
              <span class="nav-link-text">
                Teacher Information</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents">
              <li>
                <a href="add_teachers_information.php">Add New Teacher</a>
              </li>
			 
             <li>
                <a href="view_teachers_information.php">View Teacher Information</a>
              </li>
             
            </ul>
          </li>
         
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-sitemap"></i>
              <span class="nav-link-text">
                Students Information</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseMulti">
              <li>
                <a href="add_class1_information.php">Add New Class 1 Student</a>
              </li>
              <li>
                <a href="add_class2_information.php">Add New Class 2 Student</a>
              </li>
			   <li>
                <a href="add_class3_information.php">Add New Class 3 Student</a>
              </li>
			   <li>
                <a href="add_class4_information.php">Add New Class 4 Student</a>
              </li>
			   <li>
                <a href="add_class5_information.php">Add New Class 5 Student</a>
              </li>
              <li>
                <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">View Students Information</a>
                <ul class="sidenav-third-level collapse" id="collapseMulti2">
                  <li>
                    <a href="view_class1_information.php">View Class 1 Students</a>
                  </li>
                  <li>
                    <a href="view_class2_information.php">View Class 2 Students</a>
                  </li>
				  <li>
                    <a href="view_class3_information.php">View Class 3 Students</a>
                  </li>
				  <li>
                    <a href="view_class4_information.php">View Class 4 Students</a>
                  </li>
				  <li>
                    <a href="view_class5_information.php">View Class 5 Students</a>
                  </li>
				  <li>
                    <a href="view_alumni_information.php">View Alumni Students</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
            
        </ul>
        
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>
              Logout</a>
          </li>
        </ul>
      </div>
    </nav>