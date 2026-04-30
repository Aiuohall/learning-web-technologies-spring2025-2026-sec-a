<?php
    if(isset($_POST['submit'])){
        $degree = $_POST['degree'];
        foreach($degree as $deg){
            echo $deg . "<br>";
        }
    }
?>