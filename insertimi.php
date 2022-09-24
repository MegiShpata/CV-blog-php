 <?php
  include "conn.php";
  if(isset($_REQUEST["btnbtn"])){
    $Name = $_POST['name'];
    $LastName = $_POST['lastname'];
    $MobileNumber = $_POST['phone'];
    $Email = $_POST['email'];
    $Gender = $_POST['gender'];
    $Country = $_POST['country'];
    $Message = $_POST['message'];
    $file=$_FILES["file"]["name"];
    $tmp_name=$_FILES["file"]["tmp_name"]; 
    $path="pdf/".$file;
    //$file_store="pdf/".$file;     
    $file1=explode(".",$file);
    $ext=$file1[1];
    $allowed=array("pdf");
    if(in_array($ext,$allowed)){
      move_uploaded_file($tmp_name,$path);
      $sql = "INSERT INTO te_dhenat (P_Name, P_LastName, P_MobileNumber,P_Email,P_Gender, P_Country, P_Message, P_CV ) VALUES ('$Name','$LastName','$MobileNumber','$Email','$Gender','$Country','$Message','$file' )";

      if( $conn->query($sql) === true){
        header("Location: data.php");
        ob_end_flush();
      }
      else{
        echo mysqli_error($conn);
      }

    }
    else{
      echo 'test';
    }
  }
?>



