<?php
if(isset($_SESSION['user'])||!empty($_SESSION['user']))
	header('Location: ../memberLogin/memberArena.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$username = $_POST['email'];
	$password = $_POST['pwd'];
	if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "SELECT * FROM `members_data` where email_id='$username' and mob_no='$password'";
	$result = $conn->query($sql);
	if($result)
	{
		if ($result->num_rows == 1) 
		{
			
			$_SESSION['user']=$username;
			header('Location: ../memberLogin/memberArena.php');
		} 
		else 
		{
			echo "Invalid username or password";
		}
	}
	else
	{
		echo mysql_error();
	}
}
?>
<div class="modal fade modal-ext" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<!--Content-->
										<div class="modal-content">
										   
											<!--Header-->
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
												<center><img src="../commonResources/img/logo.png" style="width:50%;"></center>
												<h3><i class="fa fa-user"></i> Login</h3>
											</div>
											
											<!--Body-->
											<div class="modal-body">
												<form method="POST" action="index.php">
														<div class="md-form">
															<i class="fa fa-envelope prefix"></i>
															<input type="text" id="form2" name="email" class="form-control">
															<label for="form2">Your email</label>
														</div>

														<div class="md-form">
															<i class="fa fa-lock prefix"></i>
															<input type="password" id="form3" name="pwd" class="form-control">
															<label for="form3">Your password</label>
														</div>
														<div class="text-xs-center">
															<button class="btn btn-primary btn-lg">Login</button>
														</div>
												</form>
											</div>
											
											<!--Footer-->
											<div class="modal-footer" >
												<div class="options">
													
													<p> <a href="#">Forgot Password?</a></p>
												</div>
												<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
											</div>
										</div>
										<!--/.Content-->
									</div>
								</div>