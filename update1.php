<?php
include "dbconn.php";
$Id = $_POST['Id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];
$query = "update students set first_name='$first_name',last_name='$last_name',age='$age' where Id=$Id";
$result = mysqli_query($conn, $query);
if ($result == true) {

    header('location:index.php');
} else {


    echo "sorry";
}
?>