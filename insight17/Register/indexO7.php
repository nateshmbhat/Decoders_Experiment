<?php
	require 'index.backend.php';
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>DeCoders - inSight 2K17</title>
	<link rel="icon" href="../commonResources/img/title.png">
    <?php include('../commonResources/includeCss.php');?>

</head>
<body>
		<?php include('../../commonResources/navigation.inc.php');?>

			<!--poster-->
							<div class="text-center">
									<img src="../commonResources/img/cover.jpg" class="shift img-fluid" alt="">
							</div>

			<!--/.poster-->
			<!--main content-->
							<div class="main-content shift">
								<div class="container">
									<div class="header-title">
										<h2 class="h2-responsive">inSight 2K17<a href="https://www.facebook.com/Sit.Decoders" target="_blank"><img src="../commonResources/img/fb.png" class="fb-icon"></a></h2>
									</div>
										<center><h4 class="h4-responsive question" style="font-family:Arial;"><b><u>SUBMIT YOUR DETAILS</u></b></h4></center>

								<!--form-->

								<div class="col-md-10 col-md-offset-1">
									<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype='multipart/form-data'>
										<p class="has-danger"><b>*All fields are required.</b></p>
										<p class="has-danger"><b><?php echo $globalError;?></b></p>

										<br>
										<div class="form-group">
											<label class="form-label">PROBLEM CODE</label>
											<input type="text" class="form-control" value="<?php echo @$problem; ?>" disabled>
										</div>
										<br>
										<br>
										<div class="form-group">
											<label class="form-label">PROBLEM DESCRIPTION</label>
											<textarea style="width:100%;height:250px;" readonly><?php echo @$desc; ?></textarea>
										</div>
										<br>
										<input type="text" class="form-control" value="<?php echo @$problem;?>" id="" name="ps" style="display:none">
										<div class="form-group">
											<label class="form-label">TEAM NAME</label>
											<input type="text" class="form-control" value="<?php echo @$teamName;?>" id="" name="teamName" placeholder="Enter your team name">

											<span class="has-danger"><?php echo @$teamNameError?></span>
										</div>
										<br>



										<div class="form-group">
											<label class="form-label">ABSTRACT</label>
											<br>
											Upload .docx file in the prescribed format. Otherwise form will get rejected. (max allowed size 2MB per docx)
											<br>Upload Abstract document (.docx file only)
											<br><a href="<?php echo $abstractLink?>" download>Click to download format. </a>

											<input type="file" id="" name="abstract" accept="file" value="">
											<span class="has-danger" name="abstractError"><?php echo $abstractError?></span>
										</div>
										<br>
										<div class="form-group">
											<label class="form-label">MEMBERS DETAILS</label>
											<br>Number of members<br>
											<div class="form-inline">
												<input name="membersCount" type="radio" id="radio11" class="with-gap" checked="checked"  onclick="forMem2()" value="2">
													<label for="radio11">2 Members</label>
												<input name="membersCount" type="radio" class="with-gap" id="radio21"  onclick="forMem3()" value="3"> <!--function defined in radioButton.js-->
													<label for="radio21">3 Members</label>

											</div>

											<br>

											<div class="form-inline form-group">
												<fieldset>
													<br>
													<b><u>TEAM LEADER'S DETAILS</u></b><br><br>
														<div class="md-form form-group">
															<input type="text" class="form-control" value="Team Leader" id="role1" name="role1" disabled>
															<label for="role1">ROLE</label>
															<span class="has-danger"></span>
														</div>
														<div class="md-form form-group">
															<input type="text" class="form-control" value="<?php echo $member[0]['name']; ?>" id="name1" name="name1" placeholder="Enter name">
															<label for="name1">NAME</label>
															<span class="has-danger"><?php echo $error[0]['name']; ?></span>
														</div>
														<div class="md-form form-group">
															<input type="email" class="form-control" value="" id="email1" name="email1" placeholder="Enter email">
															<label for="email1">EMAIL</label>
															<span class="has-danger"><?php echo $error[0]['email']; ?></span>
														</div>
														<div class="md-form form-group">
															<input type="text" class="form-control" value="<?php echo $member[0]['phone']; ?>" maxlength="10" id="phone1" name="phone1" placeholder="Enter phone number">
															<label for="phone1">PHONE</label>
															<span class="has-danger"><?php echo $error[0]['phone']; ?></span>
														</div>

													</fieldset>
											</div>

											<br>

											<div class="form-inline form-group">
												<fieldset>
													<br>
														<b><u>TEAM MEMBER 1'S DETAILS</u></b><br><br>
														<div class="md-form form-group">
															<input type="text" class="form-control" value="Team Member" id="role2" name="role2" disabled>
															<label for="role1">ROLE</label>
															<span class="has-danger"></span>
														</div>
														<div class="md-form form-group">
															<input type="text" class="form-control" value="<?php echo $member[1]['name']; ?>" id="name2" name="name2" placeholder="Enter name">
															<label for="name1">NAME</label>
															<span class="has-danger"><?php echo $error[1]['name']; ?></span>
														</div>
														<div class="md-form form-group">
															<input type="email" class="form-control" value="" id="email2" name="email2" placeholder="Enter email">
															<label for="email1">EMAIL</label>
															<span class="has-danger"><?php echo $error[1]['email']; ?></span>
														</div>
														<div class="md-form form-group">
															<input type="text" class="form-control" value="<?php echo $member[1]['phone']; ?>" maxlength="10" id="phone2" name="phone2" placeholder="Enter phone number">
															<label for="phone1">PHONE</label>
															<span class="has-danger"><?php echo $error[1]['phone']; ?></span>
														</div>

													</fieldset>
											</div>

											<br>

											<div class="form-inline form-group" style="display:none;" id="mem3">
												<fieldset>
													<br>
														<b><u>TEAM MEMBER 2'S DETAILS</u></b><br><br>
														<div class="md-form form-group">
															<input type="text" class="form-control" value="Team Memeber" id="role3" name="role3" disabled>
															<label for="role1">ROLE</label>
															<span class="has-danger"></span>
														</div>
														<div class="md-form form-group">
															<input type="text" class="form-control" value="<?php echo $member[2]['name']; ?>" id="name3" name="name3" placeholder="Enter name">
															<label for="name1">NAME</label>
															<span class="has-danger"><?php echo $error[2]['name']; ?></span>
														</div>
														<div class="md-form form-group">
															<input type="email" class="form-control" value="" id="email3" name="email3" placeholder="Enter email">
															<label for="email1">EMAIL</label>
															<span class="has-danger"><?php echo $error[2]['email']; ?></span>
														</div>
														<div class="md-form form-group">
															<input type="text" class="form-control" value="<?php echo $member[2]['phone']; ?>" maxlength="10" id="phone3" name="phone3" placeholder="Enter phone number">
															<label for="phone1">PHONE</label>
															<span class="has-danger"><?php echo $error[2]['phone']; ?></span>
														</div>

													</fieldset>
											</div>

											<br>


										</div>
										<div class="form-group"><!--terms and conditions-->

											<label class="form-label">TERMS & CONDITIONS</label>
											<br>
											Please read the terms and conditions properly before registering. You can download a copy of the terms and conditions
											<a href="../commonResources/docs/tnc.pdf" download><b><u>here</u></b></a>.<br><br>
											<div class="col-md-10 col-md-offset-1"> <!--text area-->
												<textarea style="width:100%;height:250px;" readonly><?php echo $file;?></textarea>
											</div>
												<br>
													<div class="col-md-10 col-md-offset-1 form-group">	<!--checkbox-->
														<div  style="float:right;" class="form-group">
														<input type="checkbox" id="cbAgree" name="agree" onchange="agreeFunction()">
															<label for="cbAgree">I agree to the t&c </label>

														</div>
														<p class="has-danger" id="agreeError"><b>*Please agree the t&c.<b></p>
													</div>

										</div>
										<br>
												<div class="col-md-10 col-md-offset-1 form-group">  <!--buttons-->
													<center><button type="submit" class="btn btn-primary" id="subForm" disabled="true">Submit</button>
													<button type="reset" class="btn btn-primary">Reset</button></center>
													<br><br>
												</div>
									</form>
								</div>



								</div>
							</div>

			<!--main content-->

			<?php include('../../commonResources/footer.inc.php');?>



 <!-- SCRIPTS -->

    <?php include('../commonResources/includeScripts.php');?>

	 <script type="text/javascript" src="../commonResources/js/radioButton.js"></script>

	 <script type="text/javascript" src="checkbox.js"></script>


</body>
</html>
