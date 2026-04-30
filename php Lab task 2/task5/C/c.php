<?php 
    $checkedDegrees = array();
    if(isset($_POST['submit'])){
        if(isset($_POST['degree'])){
            $checkedDegrees = $_POST['degree'];
            echo "Selected degrees: <br>";
            foreach($checkedDegrees as $deg){
                echo $deg . "<br>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 5C</title>
</head>
<body>
    <form action="" method="post">
      <fieldset>
        <legend>Degree</legend>
        <input type="checkbox" name="degree[]" value="SSC" <?php if(in_array('SSC', $checkedDegrees)) echo 'checked'; ?>> SSC 
        <input type="checkbox" name="degree[]" value="HSC" <?php if(in_array('HSC', $checkedDegrees)) echo 'checked'; ?>> HSC 
        <input type="checkbox" name="degree[]" value="BSc" <?php if(in_array('BSc', $checkedDegrees)) echo 'checked'; ?>> BSc
        <input type="checkbox" name="degree[]" value="MSc" <?php if(in_array('MSc', $checkedDegrees)) echo 'checked'; ?>> MSc
        <hr />
        <input type="submit" name="submit" value="Submit" />
      </fieldset>
    </form>
</body>
</html>
