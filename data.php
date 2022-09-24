<?php
    session_start();

    if(!isset($_SESSION["User"]) ||(empty($_SESSION["User"]))){
         header("location : login.php");
         exit;
    }
    else{

        $user = $_SESSION["User"];
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
            </head>
            <body>
                <?php
                    include "navbar.php";
                    include "conn.php";
 
                    $result = mysqli_query($conn, "SELECT * FROM te_dhenat where P_LastName = '$user'");

                ?>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped custab">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Last Name</th>
                                <th>Country</th>
                                <th>Mobile Number</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Message</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php foreach($result as $row){?>
            
                                        <td><?php echo $row['P_ID']; ?></td>
                                        <td><?php echo $row['P_Name']; ?></td>
                                        <td><?php echo $row['P_LastName']; ?></td>
                                        <td><?php echo $row['P_Country']; ?></td>
                                        <td><?php echo $row['P_MobileNumber']; ?></td>
                                        <td><?php echo $row['P_Email']; ?></td>
                                        <td><?php echo $row['P_Gender']; ?></td>
                                        <td><?php echo $row['P_Message']; ?></td>
                                        <td><a href="CVShow.php?ID=<?php echo $row['P_ID']; ?>" Type="button" class="btn btn-primary">Details</a></td>
                            </tr>
                                    <?php  }?>
                        </tbody>
                    </table>
                </div>
            <?php 
                mysqli_close($conn); 
            ?>
        <?php 
            }
        ?>
    </body>
</html>



