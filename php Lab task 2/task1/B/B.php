<?php
    if(isset($_POST['submit'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($username == "" || $password == ""){
            echo "Null username/password!</p>";
        } else {
            if($username == $password){
                echo "Valid user!</p>";
            } else {
                echo "Invalid user!</p>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form B</title>
</head>
<body>
    <form method="post" enctype="">
        Username: <input type="text" name="username" value=""/> <br><br>
        Password: <input type="password" name="password" value=""/> <br><br>
        <input type="submit" name="submit" value="Submit"/>
    </form>
</body>
</html>