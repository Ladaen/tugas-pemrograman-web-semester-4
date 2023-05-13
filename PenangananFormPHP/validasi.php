<html>
    <head>
        <title>PHP Form Validation</title>
    </head>
    <body>
        <h2>PHP Form Validation</h2>    
        <p style="color:red">* required field</p>
        <form action="" method="post" name="input">
            Name: <input type="text" name = "name"> <font color="red">*</font> <br><br>
            E-mail: <input type="email" name="email"> <font color="red">*</font><br><br>
            Website: <input type="url" name="website"><br><br>
            Comment: <textarea name="comment" cols="30" rows="10"></textarea> <br><br>
            Gender: <input type="radio" name="gender" value="Female"> Female <input type="radio" name="gender" value="Male"> Male <font color="red">*</font><br><br>
            <input type="submit" value="Submit" name="Submit">
        </form>
        <h2>Your Input</h2>   
        <br> 
        <?php
        $errorMessage = "";
        if(isset($_POST['Submit'])){
            if(!empty($_POST['name'])){
                echo $_POST['name'] . "<br>";
            } else {
                $errorMessage .= "Name is required\\r\\n";
            }
            if(!empty($_POST['email'])){
                echo $_POST['email'] . "<br>";
            } else {
                $errorMessage .= "Email is required\\r\\n";
            }
            if(isset($_POST['website'])){
                echo $_POST['website'] . "<br>";
            }
            if(isset($_POST['comment'])){
                echo nl2br($_POST['comment']) . " <br>";
            }
            if(!empty($_POST['gender'])){
                echo $_POST['gender'] . "<br>";
            } else {
                $errorMessage .= "Gender is required\\r\\n";
            }
            if($errorMessage != ""){
                echo "<script>alert('$errorMessage')</script>";
                $errorMessage = "";
            }
        }
        ?>
    </body>
</html>