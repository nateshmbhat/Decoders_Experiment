<?php
require 'connect.ini.php';
$query1 = "SELECT teamId,name,email FROM `member` WHERE teamId in 
('THF17056','THF17026','THF17001' ,'THF17060','THF17077','THF17054','THF17052','THF17072','THF17066','THF17016','THF17064', 'THF17030'
,'THF17027','THF17078','THF17051','THF17063','THF17073','THF17041','THF17032', 'THF17076','THF17053','THF17029','THF17038','THF17059'
,'THF17031','THF17004','THF17075' ,'THF17003','THF17006','THF17010','THF17002','THF17065')";
$table2="<table border=2>			 
			<tr>
				<th>TeamId</th>
				<th>Name</th>
				<th>Email</th>
				<th>Sent</th>
			</tr>";
$query_run = mysql_query($query1);
	if($query_run)
		{
			echo "Total : ".$noOfRows = mysql_num_rows($query_run)."<br><br>";
			while($row = mysql_fetch_assoc($query_run))
			{
				$teamId = $row['teamId'];
				$Name = $row['name'];
				$Email = $row['email'];
				//sendMail($teamId,$Name,$Email);				
			}
		}
	else
		{
			echo mysql_error();
		}
	$table2 = $table2."</table><br>";
	echo $table2;
	$Email = "nishank127@gmail.com";
	sendMail($teamId,$Name,)
	$table2 = $table2."</table><br>";
	echo $table2;

function sendMail($teamId,$Name,$to)
		{
			$body = "<p>Dear Participant,</p>
<p>Congratulations, your abstract for <b>TheHackFest - 2K17</b> has been selected.
We are happy to invite you to Siddaganga Institute of Technology, Tumakuru on 25th Feb, 2017 to participate in 
TheHackFest.</p>
<p>Please note the following:</p>
<ol>
	<li>The reporting time for the event is 8:30 AM on 25th Feb,2017.</li>
	<li>You have to bring your own laptops and other stuffs required for your project development and 
	look after them during your stay in SIT. DeCoders or SIT will not be responsible for any loss of items.</li>
	<li>No transportation charges will be provided by us.</li>
	<li>The t-shirts will be provided on the basis of the size with which the team registered. No change in t-shirt size
	will be done.</li>
</ol>
<p>DeCoders is looking forward to welcome you to TheHackFest 2K17.</p>
<p>
Regards,<br>
Team DeCoders<br>
(Siddaganga Institute of Technology, Tumkur)</p>";
			global $table2;
			$subject = "Selection Confirmation for THF17";
			$headers="From: Decoders <admin@decoderssit.esy.es>\r\n";
			$headers .= "Content-type: text/html\r\n";
			if(mail($to,$subject,$body,$headers))
			{
				$table2 = $table2."<tr>
				<td>$teamId</td>
				<td>$Name</td>
				<td>$to</td>
				<td>Sent</td>
			 </tr>";
			}
			else
			{
				$table2 = $table2."<tr>
				<td>$teamId</td>
				<td>$Name</td>
				<td>$to</td>
				<td>Not Sent</td>
			 </tr>";
			}
		}
		
?>