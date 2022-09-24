<?php
    session_start();
    ob_start();
?>

<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

        <style>
        body, html {
	        height: 100%;
	    }
        body {
            position: absolute;
            width: 100%;
            height: 100%;
            background: #cfd8dc; 
            background: -moz-linear-gradient(-45deg,  #cfd8dc 0%, #607d8b 100%, #b0bec5 100%); 
            background: -webkit-linear-gradient(-45deg,  #cfd8dc 0%,#607d8b 100%,#b0bec5 100%); 
            background: linear-gradient(135deg,  #cfd8dc 0%,#607d8b 100%,#b0bec5 100%); 
        }
	

   
        .wrapper {
            background-color: rgb(0,0,0.1); /* Fallback color */
            background-color: rgba(0,0,0, 0.1); /* Black w/opacity/see-through */
            color: white;
            font-weight: bold;
            border: 3px solid #f1f1f1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 50%;
            padding: 20px;
            text-align: center;
        }
    </style>

    <script>
        <?php
            include "conn.php";
        ?>
        
        $(document).ready(function() {
            $("#logBtn").click(function() {
                var firstName = $("#name").val();
                var password = $("#password").val();

                $.ajax({
                    type: "POST",
                    url: 'localhost:8080/.php', 
                    data: {
                        firstName: name,
                        password: password
                    }

                    success: function(data) {
                        alert(data);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr);
                    }
                });
            });
        });
    </script>
    </head>
    <body>
        <div class="wrapper">
            <h2>Login</h2>
            <p>Please fill in your credentials to login.</p>
            <form action="" method="post" id="formLogin">
                <div class="container">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="" id="name" required="true">
                        <span class="invalid-feedback"></span>
                    </div>    
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" id="password" required="true">
                        <span class="invalid-feedback"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" id= "logBtn" name="BtnLogin" value="Login">
                    </div>
                    <p>Don't have an account? <a href= "register.php"<?php  // header( "Location: register.php" );?>> Sign up now</a>.</p>
                </div>
            </form>
        </div>
        <?php
            if(isset($_POST['BtnLogin'])){
                $emri= $_POST['username'];
                $passw = $_POST['password'];
                $query = "SELECT  FirstName , Pass FROM users WHERE FirstName ='$emri' and Pass='$passw'";
                $result = mysqli_query($conn, $query);
                $rows = mysqli_num_rows($result);
                if ($rows === 1) {
                    $_SESSION['User'] = $emri;
                    header("Location: proccess.php");
                    ob_end_flush();
                }
                else{
                    echo "Incorrect username or password!";
                }
            }
        ?>
    </body>
</html>
