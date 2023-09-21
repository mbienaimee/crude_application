<?php
include('dbconn.php');

if (isset($_GET['Id'])) {
    $Id = $_GET['Id'];



    $query = "select * from students where Id='$Id'";
    $result = mysqli_query($conn, $query);
    if ($result == true) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "sorry try again";
    }
}
?>





<form action="update1.php" method="post">
    <h2>ADD STUDENTS</h2>
    <input type="hidden" name="Id" value="<?php echo $row['Id'] ?>">
    <label for="first_name"> First name</label> <br>
    <input type="tect" name="first_name" value="<?php echo $row['first_name'] ?>"> <br>
    <label for="last_name">Last name</label> <br>
    <input type="text" name="last_name" value="<?php echo $row['last_name'] ?>"> <br>
    <label for="age">Age</label> <br>
    <input type="number" name="age" value="<?php echo $row['age'] ?>"> <br>
    <button type="submit" name="update_students">UPDATE</button>



</form>