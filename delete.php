
<?php

include('dbconn.php');
if (isset($_GET['Id'])) {
    $Id = $_GET['Id'];
    $query = "delete from students where Id='$Id'";
    $result = mysqli_query($conn, $query);

    if ($result == true) {

        header('location:index.php');
    } else {


        echo "sorry";
    }
}



?>