<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
    <a href="index.php">Back</a><br><br>
    <form action="add.php" method="post" name="form1">
        <table border="0" width='25%'>
            <tr>
                <td>
                    Name
                </td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>
                    Email
                </td>
                <td>
                    <input type="text" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    Mobile
                </td>
                <td>
                    <input type="text" name="mobile">
                </td>
            </tr>
            <tr style="padding-top: 10px;">
                <td>
                </td>
                <td>
                    <input type="submit" name="Submit" value="Add">
                </td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['Submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            
            include_once("config.php");
            
            $result = mysqli_query($mysqli,"INSERT INTO users(name,email,mobile) VALUES ('$name','$email','$mobile')");

            echo "<script>alert('User Added Successfully!')</script>";
        }
    ?>
</body>
</html>