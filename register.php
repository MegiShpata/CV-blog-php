<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        background-color: rgb(0,0,0.1); 
        background-color: rgba(0,0,0, 0.1); 
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
  </head>
  <body>
    <?php 
      include "conn.php";
    ?>

    <div class="wrapper">
      <form  name="myform" action=""    id="login-box" onsubmit="return validateForm()" class="form" method="POST">
	      <h1>SING UP</h1>
        <?php
        if (isset($success) && $success == true){
          echo '<p color="green"> Your account has been created. 
          <a href="./login.php"> Click here </a>to login!<p>';
        }
        else if (isset($error_msg))          
          echo '<font color="red">'.$error_msg.'</font>';
        else
          echo ''; 
        ?>
        <div class="container">
          <div class="form-group">
            <label>Username</label> 
            <input type="text" name="Username"   value="" placeholder="Enter a username" class = "form-control "  autocomplete="off"  />
            <span class="invalid-feedback"></span>
            <label>Email </label> <input type="email" name="Email"  value="" placeholder="Provide an email" class = "form-control "  autocomplete="off" />
            <span class="invalid-feedback"></span>
            <div class="password">
            <label>Password </label> <input type="password" name="Password"  id="PSW" pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{5,}$"  value="" placeholder="Enter a password" class = "form-control "  autocomplete="off"  />
            <span class="invalid-feedback"></span>
          </div>
          <div class="configpassword">
            <label>Confirm Password </label><input type="password" name="confirm_password" id="CPSW" value="" placeholder="Confirm your password" class = "form-control " autocomplete="off"  />
            <span class="invalid-feedback"></span>
          </div>
          <div> <br>
            <button type="submit" class="btn btn-primary" name="registerBtn" value="Create Account" onclick="validimPSW()"  >register</button>
          </div>
          <p class="center"><br/>
            Already have an accound?<a href="http://127.0.0.1:80/Project/index.php"> Click here</a>

          </p>
        </div>
      </form>
    </div>
    <?php
      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\Exception;
      use PHPMailer\PHPMailer\SMTP;
      if( isset($_POST['registerBtn']) ){
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        $email = $_POST['Email'];
        $sql = "INSERT INTO users (FirstName,Pass,Email) VALUES ('$username','$password','$email')"; 

        if ($conn->query($sql) === TRUE) {
          include 'PHPMailer-master/src/Exception.php';
          include 'PHPMailer-master/src/PHPMailer.php';
          include 'PHPMailer-master/src/SMTP.php';
          $mail = new PHPMailer();
          $mail-> isSMTP();                               // Set mailer to use SMTP
          $mail->Mailer = "smtp";
          $mail-> SMPTDebag = 2;                          // Enable verbose debug output
          $mail->Host = 'smtp.gmail.com';                 // Specify main SMTP server
          $mail-> SMTPAuth = true;                        // Enable SMTP authentication
          $mail->Username = 'something@gmail.com';     // SMTP username
          $mail->Password   = '*';                        // SMTP password
          $mail->SMTPSecure = 'tls';                      // Enable TLS encryption, 'ssl' also accepted
          $mail->Port       = 587;                        // TCP port to connect to
          $mail->SetFrom('something@gmail.com','Megi');
          $mail->addAddress($email ,'test');
          $mail->isHTML(true);
          $mail->Subject = 'Register';
          $mail->Body = '<b>Success!</b>';
          if(!$mail->send()) {
            echo "Mailer Error:" . $mail->ErrorInfo;
          }
          else{
            echo "message has been sent successfully";
          }
        }
        else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
    ?>
    <script>
      //validimi i passwordit dhe configpassword
      function validimPSW() {
        var password = document.getElementById("PSW").value;
        var configpassword = document.getElementById("CPSW").value;
        if(password != configpassworg){
          alert("Password do not mach!");
          return false;
        }
        return true;
      }

      //validimi i formes name email password
      function validateForm(){
        let name = document.forms["myform"]["Username"].value;
        let mail =document.forms["myform"]["Email"].value;
        let p = document.forms["myform"]["Password"].value;
        let cp = document.forms["myform"]["confirm_password"].value;
        if(name =="" && mail  =="" && p  =="" && cp  ==""){
          alert("Fill the data!");
          return false;
        }
        return true;
      }
    </script>
  </body>
</html>
