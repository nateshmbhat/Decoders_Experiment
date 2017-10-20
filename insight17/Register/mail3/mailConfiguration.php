<?php
function configureNewMail($subject,$body)
{
  require_once('class.phpmailer.php');
    $mail = new PHPMailer(true);
      //$mail->IsSMTP();
      $mail->SMTPDebug  = 0;
      $mail->SMTPAuth   = true;
      $mail->SMTPSecure = "ssl";
      $mail->Host       = "smtp.gmail.com";
      $mail->Port       = 465;
      $mail->Username   = "sit.cse.decoders@gmail.com";
      $mail->Password   = "DeCoders@sittumkur";
      $mail->SetFrom('sit.cse.decoders@gmail.com', 'DeCoders SIT');
      $mail->AddReplyTo('sit.cse.decoders@gmail.com', 'DeCoders SIT');
      $mail->Subject = $subject;
      $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
      $mail->MsgHTML($body);
      //$mail->AddAttachment('images/phpmailer.gif');      // attachment
      //$mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
      return $mail;
}

function generateBody($teamId,$teamName,$problem,$memberCount,$member,$time)
{
  $table1="<table border=2>
  			<tr>
  				<td>TeamId</td>
  				<td>$teamId</td>
  			 </tr>
  			 <tr>
  				<td>Team Name</td>
  				<td>$teamName</td>
  			 </tr>
  			 <tr>
  				<td>Problem Code</td>
  				<td>$problem</td>
  			 </tr>
  			 <tr>
  				<td>Registration Time</td>
  				<td>$time</td>
  			 </tr>

  		</table>";
  	$header="<p>Dear participant,<br><br>Your application for inSight 2017 has been received successfully.<br>The details you registered with are:<br></p>";
  	$footer="<p>DeCoders thank your for your interest. You will be notified if your idea is selected.</p>
  		<p>All the Best!!</p>
  		<p>Regards</p>
  		<p>Team DeCoders</p>";
  	$middle="<br><p>The details of your team members are:</p><br>";
  	$table2="<table border=2>

  			<tr>
  				<th>Member Role</th>
  				<th>Name</th>
  				<th>Email</th>
  				<th>Phone</th>
  			</tr>
  			<tr>
  				<td>Team Leader</td>
  				<td>".$member[0]['name']."</td>
  				<td>".$member[0]['email']."</td>
  				<td>".$member[0]['phone']."</td>
  			</tr>
  				 <tr>
  				<td>Team Member</td>
  				<td>".$member[1]['name']."</td>
  				<td>".$member[1]['email']."</td>
  				<td>".$member[1]['phone']."</td>
  			</tr>";
  	for($itr=2;$itr<$memberCount;$itr++)
  	{
  		$name = $member[$itr]['name'];
  		$email = $member[$itr]['email'];
  		$phone = $member[$itr]['phone'];

  		$table2 = $table2."<tr>
  				<td>Team Member</td>
  				<td>$name</td>
  				<td>$email</td>
  				<td>$phone</td>

  			 </tr>";
  	}
  		$table2 = $table2."</table><br>";
  		$msg = $header.$table1.$middle.$table2.$footer;

  		$body = $msg;

  return $body;
}

function sendMail($email,$mail)
{
  for($i=0;$i<sizeof($email);$i++)
  {
    $mail->AddAddress($email[$i]);
  }
  if($mail->Send())
    return 1;
  else
    return 0;
}
?>
