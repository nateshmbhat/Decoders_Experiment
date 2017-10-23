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


<!--     INCLUDING THE REQUIRED GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Alike|Bitter|Cinzel|Nosifer|Roboto+Slab" rel="stylesheet">
    

<!---->



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
      <!--       <form class="form-inline">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </form> -->
        </div>
        <!-- Collapsible content -->
    </div>
</nav>

<br>

<!--  form     -->
<!-- Form contact -->
<div class="container" class="text-center">


   

    <form class='contactform' id="registrationform" method="POST" onsubmit="return register_clicked();">

        <div class="text-center animated fadeInDownBig" id="Register_heading">
            <h2 style="font-family: bitter;">Register</h2>
        </div>

        <hr/><hr/><br/>

    

        <div class="animated fadeInRight" id="member1_form">
        <p class="h5 mb-4" style="font-family: bitter;font-size:200%;">                  Member 1</p><br/><br/>


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
            <input type="number" id="form8" name="mem1_contact" class="md-textarea" style="height:50px;width: 500px; padding: 2px;"/>
            <label for="form8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact No</label>
        </div>

        </div>

    <hr/>

        <!-- Form contact -->
</div>
<div class="container animated fadeInLeft" class="text-center" id="member2_form">
        <p class="h5 mb-5" style="font-family: bitter;font-size:200%;">                  Member 2</p><br/><br/>
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
            <input type="number" id="form8" name="mem2_contact" class="md-textarea" style="height: 50px;width: 500px; padding: 2px;"/>
            <label for="form8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact No</label>
        </div>


    <div>

        <div id="alertbox" class="alert shake alert-danger" >
            <strong>Error !</strong> All the fields must be filled before submitting.  <br/>
        </div>

    </div>



    <div>
        <button class="btn btn-unique" type="submit" > Register  <i class="fa fa-paper-plane-o ml-5"></i></button>
    </div>
</div>




<!-- STARTING OF REGISTRATION SUCCESS PAGE -->
    
            <div class="container text-center animated zoomInUp" style="display: none;" id="registration_success_id">
                
                    <h2  class="alert-success alert  text-center z-depth-3" id="reg_success_heading"> Registration Successful ! </h2>
            </div>


     <div id="reversecoding_img">
    
    <img src="../commonResources/img/Reverse-Coding.jpg" class="container img-fluid z-depth-5" alt="1">

    </div>
       
    
<!-- ENDING OF REGISTRATION SUCCESS PAGE  -->


         <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
    <br>



    <br><br>


    </form>


    <!--           -->


    <!-- Form contact -->
   <script type="text/javascript">



       $("#alertbox").hide() ;
       $("#reversecoding_img").hide() ;


        function register_clicked()
        {
            $("#alertbox").hide() ;


            submitallow = true ;

            var mem1_email = $("input[name=mem1_email]").val().trim() ;

            var mem1_USN = $("input[name=mem1_USN]").val().trim()
            
            var mem1_contact = $("input[name=mem1_contact]").val().trim() ;
            var mem1_name= $("input[name=mem1_name]").val().trim() ;
            var mem2_email = $("input[name=mem2_email]").val().trim() ;
            var mem2_USN = $("input[name=mem2_USN]").val().trim() ;
            var mem2_contact = $("input[name=mem2_contact]").val().trim() ;
            var mem2_name= $("input[name=mem2_name]").val().trim() ;


            if (!(mem1_email.length && mem1_contact.length && mem1_name.length && mem1_USN.length && mem2_contact.length  && mem2_email.length && mem2_USN.length && mem2_name.length)) {

                $("#alertbox").fadeIn() ;
                return false ;
            }

                else{

                    if(String(mem1_contact).search('e')>=0)
                    {
                       alertuser("Contact Number of Member 1 contains invalid character 'e'"); return false ;
                    }

                    else if(String(mem2_contact).search('e')>=0)
                    {
                        alertuser("Contact Number of Member 2 contains invalid character 'e'"); return false ;
                    }


                else if(!validateEmail(mem1_email))
                    { alertuser("Email Address of Member 1 Invalid ! ") ;return false ;}


                else if(!validateEmail(mem2_email))
                    {
                        alertuser("Email Address of Member 2 Invalid !") ; return false ;
                    }

                    r = /^[a-zA-Z0-9]*$/ ;

                if(!mem1_USN.match(r))
                    {
                        alertuser("Invalid USN number of member 1 ") ;return false ;
                    }

                 else if(!mem2_USN.match(r))
                    {
                        alertuser("Invalid USN number of member 2") ;return false ;
                    }

                    if(submitallow)
                        {
                            submitformdata() ;

                        }


                    return false ;

                }

                function alertuser(msg)
                {
                    $("#alertbox").html(msg) ;
                    $("#alertbox").fadeIn() ;
                    submitallow = false ;

                    return false;

                }


                function validateEmail(email) {
                    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    return re.test(email);
                }
    }





    function submitformdata()
    {
        $.post("connect_to_database.php" , $("#registrationform").serialize()) ;


        $("#member1_form").addClass("animated zoomOutRight")
           .on('animationend webkitAnimationEnd MSAnimationEnd oAnimationEnd', function(e) {
              $(this).hide() ;

              setTimeout(hidemember2 ,500) ;

           });

            function hidemember2(){
                
                $("#member2_form").addClass("animated zoomOutLeft")
                   .on('animationend webkitAnimationEnd MSAnimationEnd oAnimationEnd', function(e) {
                      $(this).hide() ;
                   });

                   setTimeout(hideheading , 500)  ;
            }

            function hideheading(){

                
                $("#Register_heading").addClass("animated zoomOutDown")
                   .on('animationend webkitAnimationEnd MSAnimationEnd oAnimationEnd', function(e) {
                      $(this).hide() ;
                   });

                   $("hr").fadeOut();


                setTimeout(showmemberdetails , 500) ;

            }



            function showmemberdetails()
            {

                $("#registration_success_id").show() ;
                setTimeout(function(){$("#reversecoding_img").addClass("animated flipInX").show() ;} , 1000) ;
            }






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
