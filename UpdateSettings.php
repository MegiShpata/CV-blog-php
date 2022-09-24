<?php
  session_start();
  ob_start();
  if(isset($_SESSION['Email']) || ($_SESSION['User'])){

?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jqyery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <?php 
    include "navbar.php";
  ?>
  <center>
    <br>
    <form method="post">
      <div class="container card-0 justify-content-center ">
        <div class="form-group">
          <label for="first-name">First Name</label>
          <input type="text"  readonly="true" value="<?php echo $_SESSION['User']?>" name="name" class="form-control" id="first-name" placeholder="Type your Name" > 
        </div>
        <div class="form-group"> 
          <label for="inputEmail">New Email</label>
          <input type="email"  readonly="true" name="email"value="<?php echo $_SESSION['Email']?>"  class="form-control" id="Email" placeholder="Email"> 
        </div>
        <div class="form-group"><label for="Password"> New Password</label>
          <input type="password" name="Password" class="form-control" id="Password" placeholder="Type your Password"> 
        </div>
        <br>
        <a href="javascript:window.history.back();"class="butoni" ><span>Back</span></a>
        <button Type="submit"  name="updateButton" class="button" ><span>Update</span></button>
      </div>
    </form>
  <center>
  <style>
    *{
      font-size: 15px;
    }

    .form-group{
      width:70%;
    }
    /*stilizim btn */
  
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



<?php 
  include "footer.html";
  include "conn.php";
  
  if(isset($_POST["updateButton"])){
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['Password'];
    $EmailS = $_SESSION['Email'];
    $NameS = $_SESSION['User'];

    $result = "UPDATE users SET Pass ='$Password' WHERE FirstName = '$NameS' AND Email = '$EmailS' ";
    if ($conn->query($result) === TRUE) {
      header("Location: success.php");
      }
      else{
        echo mysqli_error($conn);
      }
    }
  }
  else{
    echo "Error";
  }
?>

   