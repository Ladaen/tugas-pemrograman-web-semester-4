<?php
        include_once("config.php");

        if(isset($_POST['Update'])){
            $id = $_POST['id'];            
            
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
                    
            $result = mysqli_query($mysqli,"UPDATE users SET name = '$name', email = '$email', mobile = '$mobile' where id = '$id'");

            header("Location: index.php");
        }
?>
<?php
        $id = $_GET['id'];

        include_once("config.php");
        
        $result = mysqli_query($mysqli,"SELECT * FROM users WHERE id = '$id'");
        
        while($user_data = mysqli_fetch_array($result)){
            $name = $user_data['name'];
            $email = $user_data['email'];
            $mobile = $user_data['mobile'];
        } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Data</title>
</head>
<body>
    <a href="index.php">Back</a><br><br>
    <form action="edit.php" method="post" name="form1">
        <table border="0" width='25%'>
            <tr>
                <td>
                    Name
                </td>
                <td>
                    <input type="text" name="name" value="<?php echo $name; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Email
                </td>
                <td>
                    <input type="text" name="email" value="<?php echo $email; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Mobile
                </td>
                <td>
                    <input type="text" name="mobile" value="<?php echo $mobile; ?>">
                </td>
            </tr>
            <tr style="padding-top: 10px;">
                <td>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                </td>
                <td>
                    <input type="submit" name="Update" value="Update">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>