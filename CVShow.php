<?php
  include "conn.php";

  ob_start();

  $id = $_GET["ID"] .".file";
  $folder = 'pdf/';

  $result = mysqli_query($conn, "SELECT P_CV FROM te_dhenat WHERE P_ID = '$id'");

  if( $row = mysqli_fetch_assoc($result)){

    $path = $folder . $row['P_CV'];
    header('Content-type: application/pdf');
    header('Content-Length: ' . filesize($path));
    //header('Content-Disposition, inline; filename="' .$path .'"');
    //header('Content-Transfer-Encoding: binary');
    //header('Accept-Ranges: bytes');
    //echo $row['P_CV'];
    //exit();
    readfile($path);
    //fpassthru($file);
    //fileReadEx($file);
    //print( base64_decode ($file));
    //echo "<embed src='pdf/$file' type='application/pdf' width='100%' height='600px' />";
    //echo "<iframe src='$file' style ='width=100%; height=100% ;'></iframe>";
    /*echo "<iframe  title='PDF in an i-Frame' src="<?php echo base_url('pdf/').'/'.$file; ?>"></iframe>"*/
  }
?>


