<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

    <?php
    require_once "../commonResources/includeScripts.php" ;
    require_once "../commonResources/includeCSS.php" ;

    ?>


</head>


<body>




<!--                                   -->

<!--Navbar-->

<nav class="navbar navbar-expand-lg navbar-dark indigo">
    <div class="container">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">DeCoders</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">



                <li class="nav-item">
                    <a class="nav-link" href="#">Contacts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>

                <!-- Dropdown -->


            </ul>
            <!-- Links -->

            <!-- Search form -->
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </form>
        </div>
        <!-- Collapsible content -->
    </div>
</nav>

<br>

<!--  form     -->
<!-- Form contact -->
<div class="container" class="text-center">

    <form class='contactform' name='contactform' action="registration.php" method="POST">

        <div class="text-center">
            <h2>Register</h2>
        </div>
        <p class="h5 mb-4">Member 1</p>

        <div class="md-form">
            <i class="fa fa-user prefix grey-text"></i>
            <input name="mem1_name" type="text" id="form3" style="width: 500px; padding: 2px;" class="form-control">
            <label for="form3">Your name</label>
        </div>

        <div class="md-form">
            <i class="fa fa-envelope prefix grey-text"></i>
            <input type="email" name="mem1_email" id="form2" style="width: 500px; padding: 2px;" class="form-control">
            <label for="form2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your email</label>
        </div>

        <div class="md-form" >
            <i class="fa fa-tag prefix grey-text"></i>
            <input type="text"  name="mem1_USN" class="form-control" style="width: 500px; padding: 2px;" />
            <label for="form34">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USN</label>
        </div>

        <div class="md-form">
            <i class="fa fa-pencil prefix grey-text"></i>
            <input type="text" id="form8" name="mem1_contact" class="md-textarea" style="height:50px;width: 500px; padding: 2px;"/>
            <label for="form8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact No</label>
        </div>

        <!-- Form contact -->
</div>
<div class="container" class="text-center">
        <p class="h5 mb-4">                  Member 2</p>
        <div class="md-form">
            <i class="fa fa-user prefix grey-text"></i>
            <input type="text" id="form3" name="mem2_name" style="width: 500px; padding: 2px;" class="form-control">
            <label for="form3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your name</label>
        </div>
        <div class="md-form">
            <i class="fa fa-envelope prefix grey-text"></i>
            <input type="email" id="form2" name="mem2_email" style="width: 500px; padding: 2px;" class="form-control">
            <label for="form2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your email</label>
        </div>
        <div class="md-form" >
            <i class="fa fa-tag prefix grey-text"></i>
            <input type="text"  class="form-control"  name="mem2_USN" style="width: 500px; padding: 2px;" />
            <label for="form34">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USN</label>
        </div>
        <div class="md-form">
            <i class="fa fa-pencil prefix grey-text"></i>
            <textarea type="text" id="form8" name="mem2_contact" class="md-textarea" style="height: 50px;width: 500px; padding: 2px;""/></textarea>
            <label for="form8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact No</label>
        </div>
        <!--<div>

            <div id="alertbox" class="alert shake alert-danger" >
                <strong>Error !</strong> All the fields must be filled before submitting.
            </div>

        </div>-->

         <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
    <br>
    <strong>
    <?php // ALL DETAILS of FORM ARE FETCHED INTO THESE VARIABLES.
    error_reporting(0);
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
        $sql = "insert into register (mem1_email,mem1_USN,mem1_contact,mem1_name,mem2_email,mem2_USN,mem2_contact,mem2_name) values ('$mem1_email','$mem1_USN','$mem1_contact','$mem1_name','$mem2_email','$mem2_USN','$mem2_contact','$mem2_name')";
        $query=mysqli_query($conn,$sql);
        if($query)
            echo 'Successfully Registered';
        else
            echo 'Your USN is already Registered!' ;
        mysqli_close($conn);
    }
    else
        echo('One or More required fields are empty');

    
    

    
    //EMAIL VALIDATION

        //-->>


 ?> 
    </strong>

    <br><br>



        <div >
            <button class="btn btn-unique" onclick="register_clicked()"> Register  <i class="fa fa-paper-plane-o ml-5"></i></button>
        </div>

    </form>


    <!--           -->


    <!-- Form contact -->
   <script type="text/javascript">

        function register_clicked()
        {
            var mem1_email = $("input[name=mem1_email]").val() ;

            var mem1_USN = $("input[name=mem1_USN]").val()
            
            var mem1_contact = $("input[name=mem1_contact]").val() ;
            var mem1_name= $("input[name=mem1_name]").val() ;
            var mem2_email = $("input[name=mem2_email]").val() ;
            var mem2_USN = $("input[name=mem2_USN]").val() ;
            var mem2_contact = $("input[name=mem2_contact]").val() ;
            var mem2_name= $("input[name=mem2_name]").val() ;



            if !(mem1_email.length && mem1_contact.length && mem1_name.length && mem1_USN.length && mem2_contact.length && mem2_email.length && mem2_USN.length && mem2_name.length) {
                    console.log($(this).val()) ;

                    $(".alert-danger").show() ;
                }

                else{

                    if(!validateEmail(mem1_email))
                    { $(".alert-danger").html("Email Address of Member 2 Invalid ! ") ; return ; }

                    if(!validateEmail(mem2_email))
                    {$(".alert-danger").html("Email Address of Member 2 Invalid !") ;return ;}
                    r = /[a-zA-Z0-9]/ ;
                    if(!r.test(mem1_USN))
                    {
                        alert("Invalid USN number of member 1 ") ;
                    }
                    if(!r.test(mem2_USN))
                    {
                        alert("Invalid USN number of member 2") ;
                    }
                }

                function validateEmail(email) {
                    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    return re.test(email);
                }
    }

}



function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
} 

    </script>

    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
</body>


</html>
