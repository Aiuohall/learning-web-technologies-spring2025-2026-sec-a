<?php 
    $selectedBloodgroup = '';
    if(isset($_POST['submit'])){
        if(isset($_POST['bloodgroup']) && $_POST['bloodgroup'] != ''){
            $selectedBloodgroup = $_POST['bloodgroup'];
            echo "Selected blood group: " . $selectedBloodgroup . "<br><br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 6</title>
</head>
<body>
    <form action="" method="post">
      <fieldset>
        <legend>Blood Group</legend>
        <select name="bloodgroup">
            <option value="">-- Select --</option>
            <option value="O+" <?php if($selectedBloodgroup == 'O+') echo 'selected'; ?>>O+</option>
            <option value="O-" <?php if($selectedBloodgroup == 'O-') echo 'selected'; ?>>O-</option>
            <option value="A+" <?php if($selectedBloodgroup == 'A+') echo 'selected'; ?>>A+</option>
            <option value="A-" <?php if($selectedBloodgroup == 'A-') echo 'selected'; ?>>A-</option>
            <option value="B+" <?php if($selectedBloodgroup == 'B+') echo 'selected'; ?>>B+</option>
            <option value="B-" <?php if($selectedBloodgroup == 'B-') echo 'selected'; ?>>B-</option>
            <option value="AB+" <?php if($selectedBloodgroup == 'AB+') echo 'selected'; ?>>AB+</option>
            <option value="AB-" <?php if($selectedBloodgroup == 'AB-') echo 'selected'; ?>>AB-</option>
        </select>
        <hr />
        <input type="submit" name="submit" value="Submit" />
      </fieldset>
    </form>
</body>
</html>
