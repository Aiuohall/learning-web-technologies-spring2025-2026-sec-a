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