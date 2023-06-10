<?php
    include_once("config.php");
    $result = mysqli_query($mysqli,"SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container" >
        <div class="row" style="margin-top: 3%;">
            <div class="col-md-10 col-md-offset-1">
                <a class="btn btn-success" href="add.php">Add New User</a><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
            <table class="table table-striped" width='80%'>
        <thead class="thead-dark">
        <tr>
            <th>
                Name
            </th>
            <th>
                Mobile
            </th>
            <th>
                Email
            </th>
            <th>
                Action
            </th>
        </tr>            
        </thead>
        <tbody>
        <?php 
            while($user_data = mysqli_fetch_array($result)){
                echo "<tr><td>".$user_data['name'];
                echo "</td><td>".$user_data['mobile'];
                echo "</td><td>".$user_data['email'];
                echo "</td><td><a class='btn btn-warning' href='Edit.php?id=$user_data[id]'>Edit</a> | <a class='btn btn-danger' onclick='return confirm(\"Are you sure?\")' href='delete.php?id=$user_data[id]'>Delete</a>";
                echo "</td></tr>";
            }
        ?>
        </tbody>
    </table>
            </div>
        </div>
    </div>
</body>
</html>