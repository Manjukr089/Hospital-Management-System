<html>

<head>


<title>BDMS</title>

<link rel="stylesheet" href="hospital.css">   
                 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    

<!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- DataTables CSS -->
 <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
 
<!-- DataTables Responsive CSS -->
<link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="../icofont/icofont.min.css">

</head>


<body>
<div id="wrapper">



<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class=".col-lg-12">
                </div>
  </div>  

				<div class="row">
                        <div class=".col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3> <mark>Total Records of available Doctors</mark></h3>
                                      <a href="newhtml.html" align="right" ><h4><font color="blue" >Main Home</h4></a>
                                      <a href="addedblood.php" align="right" ><h4><font color="blue" >Go Back</h4></a>
                                      <a href="doctor.html" align="right" ><h4><font color="blue" >Home</h4></a>

                                </div>
								
					<div class="panel-body">
                                    <div class="table-responsive">
				<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									
	<?php

						include "dbconnect1.php";

						$qry="select * from blood";
						$result=mysqli_query($conn,$qry);


						echo"
						<thead>
						<tr>
							
							<th>Full Name</th>
							
							<th>Specialist</th>
							<th>Address</th>
							<th>Contact</th>
							</tr>
						</thead>";

						while($row=mysqli_fetch_array($result)){
						  echo"<tbody>
						  <tr class='gradeA'>
						  
						  <td>".$row['name']."</td>
						  <td>".$row['Specialist']."</td>
						  <td>".$row['address']."</td>
						  <td>".$row['contact']."</td>
						 
						</tr>
						<tbody>
						";
						}

						?>
						</table>
									
				</div>
				</div>		
		</div>
		</div>	
		</div>	
		</div>
		</div>
		</div>

  <!-- jQuery -->
  <script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

<!-- DataTables JavaScript -->
<script src="../js/dataTables/jquery.dataTables.min.js"></script>
<script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

</body>

<footer>
        <p>&copy; <?php echo date("Y"); ?>: Developed By D BOSS FANS</p>
    </footer>
	
	<style>
	footer{
   background-color:#f0f0f0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 35px;
    text-align: center;
    color: #006600;
}

footer p {
    padding: 10.5px;
    margin: 0px;
    line-height: 100%;
}


	</style>
</html>