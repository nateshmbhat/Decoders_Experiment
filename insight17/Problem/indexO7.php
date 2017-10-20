<!DOCTYPE html>
<?php
include ('connect.inc.php');
$db=new connectDB("localhost","nishank127","admin@123");
$conn = $db->createConnection();
$sql = "select * from `is_problemstatement`";
$result = $conn->query($sql);

$sql = "SELECT `problemCode`, COUNT(*) as `count` FROM `team` GROUP BY `problemCode`";
$result2 = $conn->query($sql);
$count = array("PS01"=>"0",
               "PS02"=>"0",
               "PS03"=>"0",
               "PS04"=>"0",
               "PS05"=>"0",
               "PS06"=>"0",
               "PS07"=>"0",
               "PS08"=>"0",);

while($row=$result2->fetch_assoc())
{
      $code = $row['problemCode'];
      $cnt = $row['count'];
      $count[$code] = $cnt;
}


 ?>
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
							<div class="main-content">
								<div class="container">
									<div class="header-title">
										<h2 class="h2-responsive">inSight 2K17<a href="https://www.facebook.com/Sit.Decoders" target="_blank"><img src="../commonResources/img/fb.png" class="fb-icon"></a></h2>

									</div>
									<div class="row">
                    <p style="line-height:130% ;font-size:1.1rem;">
                      The participants have to select any of the problem statements below and submit the abstract of their
                      corresponding problem statement while registering.
                      <ol style="font-size:1.1rem;">
                        <li style="list-style-type: circle">Before registration, you need to download the abstract corresponding to your problem statement.</li>
                        <li style="list-style-type: circle">Edit the abstract, fill in with the remaining section of the abstact left for you to fill. </li>
                        <li style="list-style-type: circle">Upload this abstract while registering.</li>
                        <li style="list-style-type: circle">A team is allowed to submit solutions to multiple problems; however, a team if selected will be selected for the one best solution out of the all solutions they have proposed.</li>
                      <!--  <li style="list-style-type: circle">There will be a limit on the number of entries accepted for each problem statement. We would consider the first 6 entries for each problem statements for the first round of screening.</li>-->
                        <li style="list-style-type: circle">Tip: Keep looking at the count of the solution we have received already for each problem statements and decide which
                        problem you wish to choose. Choose the one having less submissions, your chances of selections increase this way</li>
                        <br>
                        

                      </ol>

                    </p>
                    <h4>Problem Statements </h4>
                    <table class="table table-striped">
                      <tr>
                        <th>Problem Code</th>
                        <th>Department</th>
                        <th>Problem Statement</th>
                        <th>Problem Description</th>
                        <th>Submissions received</th>
                        <th>Download abstract</th>
                        <th>Register</th>
                      </tr>
                      <?php
                      while($row=$result->fetch_assoc())
                      {
                          $abstract = "../commonResources/docs";
                        $link = "../Register/index.php";
                        $code=$row['code'];
                        $title=$row['title'];
                        $department=$row['department'];
                        $description=$row['description'];
                        if($code === "PS01")
                          {
                            $abstract = $abstract."/abstractPS01.docx";
                            $link = $link."?ps=PS01";
                          }
                        else if($code === "PS02")
                          {
                            $abstract = $abstract."/abstractPS02.docx";
                            $link = $link."?ps=PS02";
                          }
                        else if($code === "PS03")
                          {
                            $abstract = $abstract."/abstractPS03.docx";
                            $link = $link."?ps=PS03";
                          }
                        else if($code === "PS04")
                          {
                            $abstract = $abstract."/abstractPS04.docx";
                            $link = $link."?ps=PS04";
                          }
                        else if($code === "PS05")
                          {
                              $abstract = $abstract."/abstractPS05.docx";
                              $link = $link."?ps=PS05";
                          }
                          else if($code === "PS06")
                            {
                                $abstract = $abstract."/abstractPS06.docx";
                                $link = $link."?ps=PS06";
                            }
                            else if($code === "PS07")
                              {
                                  $abstract = $abstract."/abstractPS07.docx";
                                  $link = $link."?ps=PS07";
                              }
                              else if($code === "PS08")
                                {
                                    $abstract = $abstract."/abstractPS08.docx";
                                    $link = $link."?ps=PS08";
                                }
                          $str = "<tr>
                          <td>".$code."</td>
                          <td>".$department."</td>
                          <td>".$title."</td>
                          <td>".$description."</td>
                          <td>".$count[$code]."</td>
                          <td><a href='".$abstract."' download>click here to download abstract</td></a>
                          <td><a href='".$link."'>click here to register</td>
                        </tr>";
                      echo $str;
                      }
                       ?>
                    </table>

									</div>
                </div>
              </div>

			<!--main content-->
	<?php include('../../commonResources/footer.inc.php');?>


	 <!-- SCRIPTS -->

    <!-- JQuery -->
    <?php include('../commonResources/includeScripts.php');?>
</body>
</html>
