a
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Welcome to DeCoders</title>
    <link rel="icon" href="../commonResources/img/title.png">
     
     <link href="../commonResources/css/um-template.min.css" rel="stylesheet">
        
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

    <form name='contactform' action="index.php" method="POST">

    <div class="text-center">
    <h2>Register</h2>
    </div>
    <p class="h5 mb-4">Member 1</p>

    <div class="md-form">
        <i class="fa fa-user prefix grey-text"></i>
        <input name="mem1_name" type="text" id="form3" style="width: 500px; padding: 2px;" class="form-control">
        <label for="form3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your name</label>
    </div>

    <div class="md-form">
        <i class="fa fa-envelope prefix grey-text"></i>
        <input type="text" name="mem1_email" id="form2" style="width: 500px; padding: 2px;" class="form-control">
        <label for="form2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your email</label>
    </div>

    <div class="md-form" >
        <i class="fa fa-tag prefix grey-text"></i>
        <input type="text"  name="mem1_USN" class="form-control" style="width: 500px; padding: 2px;" />
        <label for="form34">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USN</label>
    </div>

    <div class="md-form">
        <i class="fa fa-pencil prefix grey-text"></i>
        <input type="text" id="form8" name="mem1_contact" class="md-textarea" style="height: 50;width: 500px; padding: 2px;""/>
        <label for="form8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact No</label>
    </div>
   
<!-- Form contact -->
</div>
<div class="container" class="text-center"><form>
    <p class="h5 mb-4">                  Member 2</p>
    <div class="md-form">
        <i class="fa fa-user prefix grey-text"></i>
        <input type="text" id="form3" name="mem2_name" style="width: 500px; padding: 2px;" class="form-control">
        <label for="form3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your name</label>
    </div>
    <div class="md-form">
        <i class="fa fa-envelope prefix grey-text"></i>
        <input type="text" id="form2" name="mem2_email" style="width: 500px; padding: 2px;" class="form-control">
        <label for="form2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your email</label>
    </div>
    <div class="md-form" >
        <i class="fa fa-tag prefix grey-text"></i>
        <input type="text"  class="form-control"  name="mem2_USN" style="width: 500px; padding: 2px;" />
        <label for="form34">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USN</label>
    </div>
    <div class="md-form">
        <i class="fa fa-pencil prefix grey-text"></i>
        <textarea type="text" id="form8" name="mem2_contact" class="md-textarea" style="height: 50;width: 500px; padding: 2px;""></textarea>
        <label for="form8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact No</label>
    </div>

    <div >
        <button class="btn btn-unique" onclick="register_clicked()">Register<i class="fa fa-paper-plane-o ml-1"></i></button>
    </div>

</form>

<!--           -->




<!-- Form contact -->
<script type="text/javascript">
        function register_clicked()
        {
            var mem1_email = $("input[name=mem1_email").value ;
            var mem1_USN = $("input[name=mem1_USN").value ;
            var mem1_contact = $("input[name=mem1_contact").value ;
            var mem1_name= $("input[name=mem1_name").value ;
            var mem2_email = $("input[name=mem2_email").value ;
            var mem2_USN = $("input[name=mem2_USN").value ;
            var mem2_contact = $("input[name=mem2_contact").value ;
            var mem2_name= $("input[name=mem2_name").value ;
            if(!mem1_email)
                {alert("Email Address of Member 1 Invalid !") ;return ;}
             if(!mem2_email)
                {alert("Email Address of Member 2 Invalid !") ;return ;}
            r = /[a-zA-Z0-9])/;
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