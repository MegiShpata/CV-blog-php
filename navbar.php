<?php
  function active($currect_page){
    $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
    $url = end($url_array);  
    if($currect_page == $url){
      echo 'active'; 
    } 
  }
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="settings.php"><i class="glyphicon glyphicon-user"  ></i></a>
    </div>
    <ul class="nav navbar-nav" >
    <li class="<?php if($page == 'welcome.php') {echo 'active';}?>"><a href="welcome.php">Home</a></li>
    <li class="<?php if($page == 'blog.php') {echo 'active';}?>"><a href="blog.php">Blog</a></li>
    <li class="<?php if($page == 'data.php') {echo 'active';}?>"><a href="data.php">Details</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li ><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
    </ul>
  </div>
</nav>

<style>

.navbar {
  background: rgb(55, 60, 68);  
  color: white;  
  border-color:rgb(55, 60, 68);
}

</style>




