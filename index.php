<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .head {
            background-color: black;
            color: white;
            text-align: center;
        }

        .second h2 {
            float: left;
        }

        .second button {
            float: right;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <?php include('dbconn.php'); ?>

</head>

<body>
    <div class="head">
        <h1>CRUD APPLICATION</h1>
    </div>
    <div class="second">
        <h2>ALL STUDENTS</h2>

        <a href="form.html"> <button class="btn btn-primary">STUDENTS</button></a>
    </div>
    <div class="first">
        <table class="table table-hover table-straped">

            <thead>
                <tr>
                    <th>id</th>
                    <th>first_name</th>
                    <th>last_name</th>
                    <th>age</th>
                    <th>UPDATE</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
                <?php

                include('dbconn.php');

                $query = "select * from students";
                $result = mysqli_query($conn, $query);
                if ($result == true) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <td><?php echo $row['Id']; ?></td>
                            <td><?php echo $row['first_name']; ?></td>
                            <td><?php echo $row['last_name']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td> <a class="btn btn-success" href="update.php?Id=<?php echo $row['Id']; ?>">UPDATE</a></td>
                            <td> <a class="btn btn-danger" href="delete.php?Id=<?php echo $row['Id']; ?>">DELETE</a></td>
                        </tr>

                <?php


                    }
                } else {
                    echo "try again";
                }







                ?>








            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>

</html>