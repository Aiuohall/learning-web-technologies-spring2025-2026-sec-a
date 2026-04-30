<?php
    if(isset($_POST['submit'])){
        $bloodgroup = $_POST['bloodgroup'];
        echo "Selected blood group: " . $bloodgroup;
    }
?>
