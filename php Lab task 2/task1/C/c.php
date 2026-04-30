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
    <title>Form C</title>
</head>
<body>
    <form method="post" enctype="">
        Username: <input type="text" name="username" 
                 value="<?php if(isset($username)){ echo htmlspecialchars($username); } ?>"/> <br><br>
        Password: <input type="password" name="password" 
                    value="<?php if(isset($password)){ echo htmlspecialchars($password); } ?>"/> <br><br>
        <input type="submit" name="submit" value="Submit"/>
    </form>
</body>
</html>