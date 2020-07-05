<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="js/push.js"></script>
	<script src="js/notidatabse.js"></script>
	
	<title>Car Rental Portal | Admin Dashboard</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<?php include('includes/header.php');?>

	<div class="ts-main-content">
<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Dashboard</h2>
						
						
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
<?php 
$sql ="SELECT id from tblusers ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$regusers=$query->rowCount();
?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($regusers);?></div>
													<div class="stat-panel-title text-uppercase">Reg Users</div>
												</div>
											</div>
											<a href="reg-users.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
												<?php 
$sql1 ="SELECT id from tblvehicles ";
$query1 = $dbh -> prepare($sql1);;
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$totalvehicle=$query1->rowCount();
?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($totalvehicle);?></div>
													<div class="stat-panel-title text-uppercase">Listed Vehicles</div>
												</div>
											</div>
											<a href="manage-vehicles.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
<?php 
$sql2 ="SELECT id from tblbooking ";
$query2= $dbh -> prepare($sql2);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$bookings=$query2->rowCount();
?>

													<div class="stat-panel-number h1 "><?php echo htmlentities($bookings);?></div>
													<div class="stat-panel-title text-uppercase">Total Bookings</div>
												</div>
											</div>
											<a href="manage-bookings.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-warning text-light">
												<div class="stat-panel text-center">
<?php 
$sql3 ="SELECT id from tblbrands ";
$query3= $dbh -> prepare($sql3);
$query3->execute();
$results3=$query3->fetchAll(PDO::FETCH_OBJ);
$brands=$query3->rowCount();
?>												
													<div class="stat-panel-number h1 "><?php echo htmlentities($brands);?></div>
													<div class="stat-panel-title text-uppercase">Listed Brands</div>
												</div>
											</div>
											<a href="manage-brands.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>



<div class="row">
					<div class="col-md-12">

						
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
<?php 
$sql4 ="SELECT id from tblsubscribers ";
$query4 = $dbh -> prepare($sql4);
$query4->execute();
$results4=$query4->fetchAll(PDO::FETCH_OBJ);
$subscribers=$query4->rowCount();
?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($subscribers);?></div>
													<div class="stat-panel-title text-uppercase">Subscibers</div>
												</div>
											</div>
											<a href="manage-subscribers.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
												<?php 
$sql6 ="SELECT id from tblcontactusquery ";
$query6 = $dbh -> prepare($sql6);;
$query6->execute();
$results6=$query6->fetchAll(PDO::FETCH_OBJ);
$query=$query6->rowCount();
?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($query);?></div>
													<div class="stat-panel-title text-uppercase">Queries</div>
												</div>
											</div>
											<a href="manage-conactusquery.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
<?php 
$sql5 ="SELECT id from tbltestimonial ";
$query5= $dbh -> prepare($sql5);
$query5->execute();
$results5=$query5->fetchAll(PDO::FETCH_OBJ);
$testimonials=$query5->rowCount();
?>

													<div class="stat-panel-number h1 "><?php echo htmlentities($testimonials);?></div>
													<div class="stat-panel-title text-uppercase">Feedbacks</div>
												</div>
											</div>
											<a href="testimonials.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
<?php 
$sql5 ="SELECT id from notifications ";
$query5= $dbh -> prepare($sql5);
$query5->execute();
$results5=$query5->fetchAll(PDO::FETCH_OBJ);
$testimonials=$query5->rowCount();
?>

													<div class="stat-panel-number h1 "><?php echo htmlentities($testimonials);?></div>
													<div class="stat-panel-title text-uppercase">Reminders</div>
												</div>
											</div>
											<a href="reminders.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								
								</div>
							</div>
						</div>
					</div>
				</div>
					<!-- system notifications -->
				<div id="navbar"><span>Your Reminder :</span></div>
  <div id="wrapper">
      <button id="notify-button">Notify Me!!</button>
      <button id="clear-button">Clear All!</button>
      
  </div>









  
  <script>
      $("#notify-button").click(function(err){

		  var notifications = <?php require "includes/dbconnection.php" ?>

		  notifications.forEach(notification => {
			Push.create(notification.subject,{
            body: notification.details,
            icon: 'img/bell.png',
            timeout: 200000,
            onClick: function (err) {
                window.focus();
                this.close();
            }
        });
		  });
	  });
	  

      $("#clear-button").click(function(){ 
           Push.clear();
      });
      
  </script>


<br></br>
<br></br>

<!-- system notifications -->
<form method="post" action="dashboard.php">
<h4>Enter details for reminders</h4>

<h4>SUBJECT:</h4> <input type="text" name="subject" placeholder="Enter subject" style="width:400px;" /><br />

<h4>DETAILS :</h4>
<textarea name="details" style=" width:400px; height:100px;"></textarea><br />
<input type="submit" value="Submit" />
</form>
<?php
//process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
	$subject = $_POST["subject"]; //set PHP variables like this so we can use them anywhere in code below
	$details = $_POST["details"];	
}
?>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is comming from a form

	//mysql credentials
	$mysql_host = "localhost";
	$mysql_username = "root";
	$mysql_password = "";
	$mysql_database = "carrentalone";
	
	$subject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING); //set PHP variables like this so we can use them anywhere in code below
	$details = filter_var($_POST["details"], FILTER_SANITIZE_STRING);

	if (empty($details)){
		die("Please enter details");
	}	
	if (empty($subject)){
		die("Please enter subject");
	}	
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}	
	$statement = $mysqli->prepare("INSERT INTO notifications (subject,details) VALUES('$subject', '$details')"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('sss', $subject, $details); //bind values and execute insert query
	
	if($statement->execute()){
		print "Hello Admin..!, your message has been saved!";
	}else{
		print $mysqli->error; //show mysql error if any
	}
}
?>

<br></br>
<br></br>



			</div>
			
		</div>
	</div>
	
	

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

	
	<script>
		
	window.onload = function(){
    
		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		}); 
		
		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>
</body>
</html>
<?php } ?>