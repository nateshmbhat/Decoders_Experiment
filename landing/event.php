<?php
require_once 'connect.inc.php';
if($_SERVER['REQUEST_METHOD'] == 'GET')
{
$ei = $_GET['event_id'];
$query = "select * from event where event_id='$ei'";
$result = $conn->query($query);
if($result)
{
	$row = mysqli_fetch_assoc($result);
}
}
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$usn = $_POST['usn'];
		$college = $_POST['college'];
		$batch = $_POST['batch'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$event_id = $_POST['event_id'];
		$r1 = $conn->query("insert into student values ('$usn','$college','$batch','$phone','$email')");
		$r2 = $conn->query("insert into student_name values ('$usn','$fname','$lname')");
		$r3 = $conn->query("insert into stud_reg values ('$usn','$event_id',CURRENT_TIMESTAMP)");
		if($r1&&$r2&&$r3)
		{
			header ('Location: success2.php');
					exit;
		}	
		else
			echo @$conn->error;
}

		
?>


<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>Decoders - Register for The HackFest 2K17</title>
	<link rel="icon" href="../commonResources/img/title.jpg">
    <?php include('../commonResources/includeCss.php');?>
	
</head>
<body>
		<div style="background-color:#000000"><?php include('../commonResources/navigation.inc.php');?></div>
			
			<!--poster-->
							<div class="row text-center">
									<img src="../commonResources/img/background.jpg" class="shift img-fluid" alt="">
							</div>	
							
			<!--/.poster-->
			<!--main content--><br><br>
							<div class="main-content shift">
								<div class="container">
									<div class="header-title">
										<center><h2 class="h2-responsive">REGISTRATIONS FOR <?php echo strtoupper(@$row['event_name']);?></h2></center>
										<center><h4 class="h4-responsive">EVENT DATE:  <?php echo strtoupper(@$row['event_date']);?></h4></center>
									</div>
										<center><h4 class="h4-responsive question" style="font-family:Arial;"><b><u>SUBMIT YOUR DETAILS</u></b></h4></center>
										
								<!--form-->
								
								<div class="col-md-10 col-md-offset-1">
									<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype='multipart/form-data'>
										<div class="form-group">
											<label class="form-label">FIRST NAME</label>
											<input type="text" class="form-control" value="" id="" name="fname" placeholder="Enter your first name">
										</div>
										<div class="form-group">
											<label class="form-label">LAST NAME</label>
											<input type="text" class="form-control" value="" id="" name="lname" placeholder="Enter your last name">
										</div>
										<div class="form-group">
											<label class="form-label">USN</label>
											<input type="text" class="form-control" value="" id="" name="usn" placeholder="Enter your usn">
										</div>
										<div class="form-group">
											<label class="form-label">COLLEGE</label>
											<input type="text" class="form-control" value="" id="" name="college" placeholder="Enter your college name">
										</div>
										<div class="form-group" style="display:none">
											<input type="text" class="form-control" value="<?php echo $ei?>" id="" name="event_id">
										</div>
										<div class="form-group">
											<label class="form-label">BATCH</label>
											<input type="text" class="form-control" value="" id="" name="batch" placeholder="Enter your batch">
										</div>
										<div class="form-group">
											<label class="form-label">PHONE</label>
											<input type="text" class="form-control" value="" id="" name="phone" placeholder="Enter your phone number">
										</div>
										<div class="form-group">
											<label class="form-label">EMAIL</label>
											<input type="text" class="form-control" value="" id="" name="email" placeholder="Enter your email id">
										</div>
										
										<div class="col-md-10 col-md-offset-1 form-group">  <!--buttons-->
													<center><button type="submit" class="btn btn-primary" id="subForm">Submit</button>
													<button type="reset" class="btn btn-primary">Reset</button></center>
													<br><br>
										</div>
										
									</form>
								</div>
										
										
										
								</div>
							</div>
							
			<!--main content-->
			
			<?php include('../commonResources/footer.inc.php');?>
							
							
							
 <!-- SCRIPTS -->

    <?php include('../commonResources/includeScripts.php');?>
	
	 
	 
	 
</body>
</html>