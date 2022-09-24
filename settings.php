<?php
  session_start();
  ob_start();
?>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jqyery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      *{
        font-size: 15px;
      }

      .form-group{
        width:70%;
      }

      .button {
        display: inline-block;
        border-radius: 4px;
        background-color: #1E90FF;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 28px;
        padding: 2px;
        width: 200px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
      }

      .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }

      .button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }

      .button:hover span {
        padding-right: 25px;
      }

      .button:hover span:after {
        opacity: 1;
        right: 0;
      }

      /*butoni */
      .butoni {
        display: inline-block;
        border-radius: 4px;
        background-color: #1E90FF;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 28px;
        padding: 2px;
        width: 200px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
      }

      .butoni span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }

      .butoni span:after {
        content: ' \226A';
        position: absolute;
        opacity: 0;
        top: 0;
        left: -20px;
        transition: 0.5s;
      }

      .butoni:hover span {
        padding-left: 40px;
      }

      .butoni:hover span:after {
        opacity: 1;
        right: 0;
      }
    </style>
  </head> 
  <body>
    <?php 
      include "navbar.php"; 
    ?>
    <center>
      <br>
      <div class="container ">
        <form method='post'>               
          <div class="form-group">
            <label for="first-name">First Name</label>
            <input type="text" name="name" class="form-control" id="first-name" placeholder="Type your Name" require >
          </div>
          <div class="form-group"> <label for="inputEmail4">Email</label> 
            <input type="email" name="email" class="form-control" id="email" placeholder="Email" >
          </div>
          <div class="form-group"><label for="Password">Password</label>
            <input type="password" name="password" class="form-control" id="Password" placeholder="Type your Password" > 
          </div>
          <br>
         <a href="javascript:window.history.back();"class="butoni" ><span>Back</span></a>
         <button Type="submit"  class="button" name="button" ><span>Next</span></button>
        </form>
      

        <?php
          include "conn.php";
 
          if(isset($_POST["button"])){
            $Name = $_POST['name'];
            $Email = $_POST['email'];
            $Password = $_POST['password'];
            $result = mysqli_query($conn,"SELECT * FROM users  WHERE 
            FirstName ='$Name' AND
            Email = '$Email' AND
            Pass ='$Password'");
            $rows = mysqli_num_rows($result);
            if ($rows === 1) {
              $_SESSION['User'] =  $Name;
              $_SESSION['Email'] =  $Email;
              header("Location: UpdateSettings.php");
              ob_end_flush();
            }
            else{
              echo "Incorrect username or password!";
           }
          }
        ?>
     </div>
    <center>
  </body>
</html>

<?php
  include "footer.html";
?>

