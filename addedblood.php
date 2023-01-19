<!DOCTYPE html>
<html lang="en">

<head>

                           <link rel="stylesheet" href="style.css"> 

</head>

<body>

    <div id="wrapper">

        <?php include 'nav.php'?>

       
            </div>
            <!-- /.row -->
           
                        <div class="panel-body">
                        <div class="row">
                        <div class="col-lg-6">
                        <form role="form" action="index1.php" method="post">
            <?php 

if(isset($_POST['name'])){
$name = $_POST["name"];    
//$gender = $_POST["gender"];
//$dob = $_POST["dob"];
$Specialist = $_POST["Specialist"];
//$bloodgroup = $_POST["bloodgroup"];
$address = $_POST["address"];
$contact = $_POST["contact"];
//$bloodqty = $_POST["bloodqty"];
//$collection = $_POST["collection"];

include 'dbconnect1.php';
//code after connection is successfull
$qry = "insert into blood(name,Specialist,address,contact) values ('$name','$Specialist','$address','$contact')";
$result = mysqli_query($conn,$qry); //query executes

if(!$result){
    echo"ERROR";
}else {
    echo" <div style='text-align: center'><h1><mark>SUBMITTED SUCCESSFULLY</mark></h1>";
    echo" <a href='home.html' div style='text-align: center'><h2>Go Home</h2>";

    
}

}else{
    echo"<h1> <a href='home.html'> <center>HOME </center></a></h1>";
        echo"<h5> <a href='newhtml.html'> <center>BACK </center></a></h5>";

}


?>
                                    
                                
                                        
                
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

<footer>
        <p>&copy; <?php echo date("Y"); ?>: Developed By D BOSS FANS</p>
    </footer>
	
	<style>
	footer{
   background-color: #424558;
    bottom: 0;
    left: 0;
    right: 0;
    height: 35px;
    text-align: center;
    color: #CCC;
}

footer p {
    padding: 10.5px;
    margin: 0px;
    line-height: 100%;
}
	</style>

</html>
