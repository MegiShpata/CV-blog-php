<?php
  session_start();
  ob_start();
?>

<html>
  <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="container">
      <?php 
        include "conn.php";
      ?>
       
      <div class="modal-body">
        <div class="thank-you-pop">
					<img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
					<h1>Done!</h1>
					<p>Your Password have been updated!</p>
					<h3 class="cupon-pop">Your Username: <span><?php echo $_SESSION['User']; ?></span></h3>
          <br>
          <br>
          <br>
          <br>
          <a href="welcome.php" class="button" style="vertical-align:middle"><span>Go to Home</span></button>
				</div>
                         
      </div>
	  </div>
  </body>
</html>


<style>
  .thank-you-pop{
	  width:100%;
 	  padding:20px;
	  text-align:center;
  }

  .thank-you-pop img{
	  width:76px;
	  height:auto;
	  margin:0 auto;
	  display:block;
	  margin-bottom:25px;
  }

  .thank-you-pop h1{
	  font-size: 42px;
    margin-bottom: 25px;
	  color:#5C5C5C;
  }

  .thank-you-pop p{
	  font-size: 20px;
    margin-bottom: 27px;
 	  color:#5C5C5C;
  }

  .thank-you-pop h3.cupon-pop{
	  font-size: 25px;
    margin-bottom: 40px;
	  color:#222;
	  display:inline-block;
	  text-align:center;
	  padding:10px 20px;
	  border:2px dashed #222;
	  clear:both;
	  font-weight:normal;
  }

  .thank-you-pop h3.cupon-pop span{
	  color:#03A9F4;
  }

  .thank-you-pop a{
	  display: inline-block;
    margin: 0 auto;
    padding: 9px 20px;
    color: #fff;
    text-transform: uppercase;
    font-size: 14px;
    background-color: #8BC34A;
    border-radius: 17px;
  }

  .thank-you-pop a i{
	  margin-right:5px;
	  color:#fff;
  }

  #ignismyModal .modal-header{
    border:0px;
  }
  /*  stilizimi i butionit */ 
  .button {
    display: inline-block;
    border: none;
    text-align: center;
    padding: 20px;
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
</style>