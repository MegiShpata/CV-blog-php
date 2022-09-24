<?php
    session_start();
    if(!isset($_SESSION["User"]) ||(empty($_SESSION["User"]))){
        header("location : login.php");
        exit;
    }
    else {
    ?>
    <html>
        <head>
            <title>Welcome</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jqyery.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <script src="//static.filestackapi.com/filestack-js/2.x.x/filestack.min.js"></script>
            <script src=https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css></script>
            <script src=https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js></script>
            <script src=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js></script>
            <link rel="stylesheet" href="stylesheet.css"/>
            <?php
                include "navbar.php";

                return ($this->width * $this->height);


    $page = "welcome.php" ;

    ?>
    </head>
    <body>
  <FORM ACTION="insertimi.php" method="post"  enctype="multipart/form-data"   >
   <!--  <div class="container card-0 justify-content-center " > -->
    
              <!--  <div class="card shadow-lg card-1"> -->
                    <div class="card-body inner-card">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <div class="form-group"><BR><label for="first-name">First Name</label><input type="text" name="name" class="form-control" id="first-name" placeholder="Type your Name"> </div>
                                <div class="form-group"> <label for="Mobile-Number">Mobile Number</label> <input type="text" name="phone" class="form-control" id="Mobile-Number" placeholder="Mobile Numer"> </div>
                                <div class="form-group"> <label for="inputGender">Gender</label> <select  name="gender"class="form-control">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select> </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <div class="form-group"> <BR><label for="last-name">Last Name</label> <input type="text" name="lastname" class="form-control" id="last-name" placeholder="Last Name"> </div>
                                <div class="form-group"> <label for="inputEmail4">Email</label> <input type="email" name="email" class="form-control" id="email" placeholder="Email"> </div>
                                <div class="form-group"> <label for="country">Country</label> <select  name="country"class="form-control">
                                        <option>India</option>
                                        <option>China</option>
                                        <option>UK</option>
                                        <option>Albania</option>
                                        <option>Italy</option>
                                        <option>Germany</option>
                                        <option>Greek</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-10 col-12">
                                <div class="form-group files"><label class="my-auto">Upload Your File </label> <input id="cv"  name="file"   type="file" class="form-control" /></div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-10 col-12">
                                <div class="form-group"> <label for="exampleFormControlTextarea2">Message</label> <textarea  name="message"class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5"></textarea></div>
                                <div class="row justify-content-end mb-5">
                                    <div class="col-lg-4 col-auto "><button type="submit"   name="btnbtn" class="btn btn-primary btn-block"><small class="font-weight-bold">Next</small></button> <BR></div>
                                <BR>
                                </div>
                            <!-- </div>-->
                       <!--  </div> -->
   <?php include "insertimi.php";
        
   
   ?>
<!-- </div>-->

<script>
    $(document).ready(function(){
$(".files").attr('data-before',"Drag file here or click the above button");
$('input[type="file"]').change(function(e){
var fileName = e.target.files[0].name;
$(".files").attr('data-before',fileName);
});
});
    </script>
    </FORM>
    </body>
   
    </html>

 <?php  

}
?>



