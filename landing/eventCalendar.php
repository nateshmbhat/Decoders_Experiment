<?php
$month=array('Jan','Feb','March','April','May','June','July','Aug','Sep','Oct','Nov','Dec');
require_once 'connect.inc.php';
$sql="Select event_id, event_name, month(event_date) as month  , day(event_date) as day , description from event";
$result=$conn->query($sql);
$len=mysqli_num_rows($result);
$calofevents=array();
$i=0;
while($row=$result->fetch_assoc())
{   
	 $calofevents[$i][0]=$row["event_id"];	
     $calofevents[$i][1]=$row["event_name"];
	 $calofevents[$i][2]=$row["description"];			
	 $calofevents[$i][3]=$month[$row["month"]-1];
	 $calofevents[$i][4]= $row["day"];
				
	$i++;								
	
}

//echo $calofevents[0][1]." ".$calofevents[0][2];

?>