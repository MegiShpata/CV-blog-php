<?php
    session_start();
    echo $_SESSION['User'] ;

    if(isset($_SESSION['User'])){
        header("Location: welcome.php");
    }

    else{
        header("Location: register.php");
    }
?>