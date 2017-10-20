<?php
include ('connect.inc.php');
$myfile = fopen("../commonResources/docs/content.txt", "r") or die("Unable to open file!");
$file=fread($myfile,filesize("../commonResources/docs/content.txt"));
fclose($myfile);
$abstractLink = "../commonResources/docs/abstract";
$desc=$problem=$teamName=$abstract=$membersCount="";
$teamNameError="";
$abstractError="";
$teamId="";
$time="";
$member=array();
$error=array();
$globalError="";
for($itr=0;$itr<4;$itr++)
			{


				 $error[$itr]['name'] = "";
				 $error[$itr]['email'] = "";
				 $error[$itr]['phone'] = "";
			}
for($itr=0;$itr<4;$itr++)
			{


				 $member[$itr]['name'] = "";
				 $member[$itr]['email'] = "";
				 $member[$itr]['phone'] = "";
			}
$agree=0;

$abstract_name="";

	if($_SERVER['REQUEST_METHOD'] == 'POST')
		{

				$member=readForm();
				$i=uploadAbstract();
				if(validate($teamName,$membersCount,$member,$error)!=1)
				{
					$error=validate($teamName,$membersCount,$member,$error);
					$xml=simplexml_load_file("../commonResources/docs/teams.xml") or die("Error: Cannot create object");
					$teamCount = $xml->teams;
					$xml->teams = $teamCount-1;
					$xml->asXML('../commonResources/docs/teams.xml');
					$globalError = "*The form is not correctly filled. Please fill in the form properly.";
				}
				else if($i==1)
				{
					$r=insertInTable($teamId,$teamName,$problem,$membersCount,$abstract_name,$member); //r=0 means insert failed
					//require 'mail2.php';
					if($r==1)
					{
						require_once('mail3/mailConfiguration.php');
						$body = generateBody($teamId,$teamName,$problem,$memberCount,$member,$time);
						$email = array();
						$phn = $member[0]['phone'];
						require_once('Way2SMS-API-master/way2sms-api.php');
						sendWay2SMS ( '9199223404' , 'ajay127' , $phn , 'DeCoders - Thank you for registering for inSight17. We will get back to you if your solution is accepted.');

						for($itr=0;$itr<$membersCount;$itr++)
						{
							$var=$member[$itr]['email'];
							array_push($email,$var);
						}
						$subject = "Registration successful";
						$mail = configureNewMail($subject,$body);
						if(sendMail($email,$mail))
						{
							header('Location:success.php');
							exit;
						}
						else
						  echo 'Mail not sent';
					}
				}


		}
		else {
			$problem = $_GET["ps"];
			// $db=new connectDB("localhost","root","");
			$db=new connectDB("localhost","nishank127","admin@123");
			$conn = $db->createConnection();
			$sql = "select * from `is_problemstatement` where `code`='".$problem."'";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			$desc = $row['description'];


		}

		$abstractLink = $abstractLink.$problem.".docx";



	function uploadAbstract()
	{
			global $teamId;
			$teamId=getTeamId();
			global $teamName;
			global $abstractError;
			global $abstract_name;
			$i=0;

						@$name = $_FILES['abstract']['name'];
						@$size = $_FILES['abstract']['size'];
						@$type = $_FILES['abstract']['type'];
						@$temp_name = $_FILES['abstract']['tmp_name'];
						@$error = $_FILES['abstract']['error'];
						$extention = strtolower(substr($name, strpos($name,'.')+1));
						$abstract_name = $teamId.'_'.$teamName.'.'.$extention;
						$location = '../abstracts/';

						if(isset($name))
						{
							if(!empty($name))
							{
								if(($extention=='docx') && ($size<=2097152))
								{
									if(move_uploaded_file($temp_name,$location.$abstract_name))
										$i=1;
								}
								else
								{
									$abstractError = '*File must be docx and less than 2';
									$i=0;
								}
							}
							else
							{
								$abstractError = '*Please choose a file';
								$i=0;
							}
						}
						return $i;
	}


	function readForm()
	{

		global $problem;
		global $desc;
		global $teamName;

		global $membersCount;

				 $problem = $_POST['ps'];
				 //$db=new connectDB("localhost","root","");
				 $db = new connectDB("localhost","nishank127","admin@123");
	 			$conn = $db->createConnection();
	 			$sql = "select * from `is_problemstatement` where `code`='".$problem."'";
	 			$result = $conn->query($sql);
	 			$row = $result->fetch_assoc();
	 			$desc = $row['description'];
				 $teamName = $_POST['teamName'];
				 $membersCount = $_POST['membersCount'];
				 $member[0]['name'] = $_POST['name1'];
				 $member[0]['role'] = "Team Leader";
				 $member[0]['email'] = $_POST['email1'];
				 $member[0]['phone'] = $_POST['phone1'];
				 for($x=1;$x<$membersCount;$x++)
				{

					$y=$x+1;
					 $member[$x]['name'] = $_POST['name'."$y"];
					 $member[$x]['role'] = "Team Member";
					 $member[$x]['email'] = $_POST['email'."$y"];
					 $member[$x]['phone'] = $_POST['phone'."$y"];
				}
				return $member;
	}
	function display($teamName,$domain,$institute,$membersCount,$member)
	{
		/*call in this way: display($teamName,$domain,$institute,$membersCount,$member);	*/
				echo $teamName."<br>";
				echo $domain."<br>";
				echo $institute."<br>";
				echo $membersCount."<br>";
			for($x=0;$x<$membersCount;$x++)
				{
					 "<br>";
					$y=$x+1;
					 echo $member[$x]['name']."<br>";
					 echo $member[$x]['role']."<br>";
					 echo $member[$x]['email']."<br>";
					 echo $member[$x]['phone']."<br>";
					 echo $member[$x]['ts']."<br>";
				}
	}
	function getTeamId()
	{

		$xml=simplexml_load_file("../commonResources/docs/teams.xml") or die("Error: Cannot create object");
		$teamCount = $xml->teams;
		$xml->teams = $teamCount+1;
		$xml->asXML('../commonResources/docs/teams.xml');
		$teamId="INSIGHT".sprintf('%03d',$teamCount);
		return $teamId;
	}

	function validate($teamName,$membersCount,$member,$error)
	{
		//validate team name
		global $teamNameError;
		if (empty($teamName))
			{
				$teamNameError = "*This field is required";
				$i1=0;
			}
			else
			{
			// check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/",$teamName))
				{
					$teamNameError = "*Only letters and white space allowed";
					 $i1=0;
				}
				else
					$i1=1;
			}

			$i4=1;
			for($itr=0;$itr<$membersCount;$itr++)
			{
				if(validateName($error,$itr,$member[$itr]['name'])!=1)
				{
					$error=validateName($error,$itr,$member[$itr]['name']);
					$i4=0;
				}
				if(validateNo($error,$itr,$member[$itr]['phone'])!=1)
				{
					$error=validateNo($error,$itr,$member[$itr]['phone']);
					$i4=0;
				}
				if(validateEmail($error,$itr,$member[$itr]['email'])!=1)
				{
					$error=validateEmail($error,$itr,$member[$itr]['email']);
					$i4=0;
				}
			}
			if($i1==1&&$i4==1)
				return 1;
			else
				return $error;

	}

	function validateEmail($error,$pos,$name)
	{
		$i1=1;
		if (empty($name))
			{
				$error[$pos]['email'] = "*Email is required";
				$i1=0;
			}
		if($i1==0)
				return $error;
			else
				return 1;
	}

	function validateName($error,$pos,$name)
	{
		if (empty($name))
			{
				$error[$pos]['name'] = "*This field is required";
				$i1=0;
			}
			else
			{
			// check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/",$name))
				{
					$error[$pos]['name'] = "*Only letters and white space allowed";
					 $i1=0;
				}
				else
					$i1=1;
			}
			if($i1==0)
				return $error;
			else
				return 1;

	}
	function validateNo($error,$pos,$cn)
	{
		if(empty($cn))
			{
				$error[$pos]['phone']="*Contact Number Required ";
				$i3=0;
			}
			else
			{
				if($cn>1000000000)
					$i3=1;
				else
				{
					$error[$pos]['phone']="*Invalid Phone Number";
					$i3=0;
				}
			}
			if($i3==0)
				return $error;
			else
				return 1;
	}

	function insertInTable($teamId,$teamName,$problem,$membersCount,$abstractName,$members)
		{
			//$db=new connectDB("localhost","root","");
			$db = new connectDB("localhost","nishank127","admin@123");
			$conn = $db->createConnection();
			$team = 'team';
			$member = 'member';
			global $time;
			$date = date('Y-m-d, H:i:s')." +5:30 UTC";
			$time=$date;
			$r=1;
			$query1 = "INSERT INTO `$team` (`teamId`,`teamName`,`problemCode`,`memberCount`,`abstractName`,`timeStamp`) VALUES ('$teamId','$teamName','$problem','$membersCount','$abstractName','$date')";
			if($query_run = $conn->query($query1))
			{
				//header ('Location: success.html');
				//echo "query 1 success";
				//exit;
			}
			else
			{
				echo $conn->connect_error;
				$r=0;
			}
			for($itr=0;$itr<$membersCount;$itr++)
			{
				$role=$members[$itr]['role'];
				$name=$members[$itr]['name'];
				$email=$members[$itr]['email'];
				$phone=$members[$itr]['phone'];
				$query2 = "INSERT INTO `$member` (`teamId`,`role`,`name`,`email`,`phone`) VALUES ('$teamId','$role','$name','$email','$phone')";
				if($query_run = $conn->query($query2))
			{
				//header ('Location: success.html');
				//exit;
				//echo "query 2 success";
			}
			else
			{
				echo $conn->connect_error;
				$r=0;
			}
			}
			return $r;


		}





?>
