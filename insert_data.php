<?php
include('dbconn.php');

if (isset($_POST['add_students'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];

    $query = "insert into students values('','$first_name','$last_name','$age')";

    $result = mysqli_query($conn, $query);

    if ($result == true) {
        echo "data inserted successfully";
    } else {
        echo "sorry try again!";
    }
}
