<?php // ALL DETAILS of FORM ARE FETCHED INTO THESE VARIABLES.
$mem1_email = $_POST['mem1_email'] ;
$mem1_USN = $_POST['mem1_USN'];
$mem1_contact = $_POST['mem1_contact'] ;
$mem1_name = $_POST['mem1_name'] ;
$mem2_email = $_POST['mem2_email'] ;
$mem2_USN = $_POST['mem2_USN'];
$mem2_contact = $_POST['mem2_contact'] ;
$mem2_name = $_POST['mem2_name'] ;
//-->>

if(!empty($mem1_name) && !empty($mem1_contact) && !empty($mem1_USN) && !empty($mem1_email) && !empty($mem2_name) && !empty($mem2_USN) && !empty($mem2_contact) && !empty($mem2_email)){
    $username = 'root';
    $password = '';
    $db = 'Reverse_Coding';
    if (!filter_var($mem1_email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Invalid Email address for Member 1</p>" ;
        exit(0);
    }
    if (!filter_var($mem2_email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Invalid Email address for Member 2</p>" ;
        exit(1) ;
    }
    $conn = mysqli_connect('localhost',$username,$password,$db) or die('unable to connect');
    if($conn)
        echo 'successfully connected to the DB<br>';
    $sql = "insert into register (mem1_email,mem1_USN,mem1_contact,mem1_name,mem2_email,mem2_USN,mem2_contact,mem2_name) values ('$mem1_email','$mem1_USN','$mem1_contact','$mem1_name','$mem2_email','$mem2_USN','$mem2_contact','$mem2_name')";
    $query=mysqli_query($conn,$sql);
    if($query)
        echo 'Registration successful';
    else
        echo 'USN already registered';
    mysqli_close($conn);
}

else
{
  ;
}



//EMAIL VALIDATION
//-->>
?>