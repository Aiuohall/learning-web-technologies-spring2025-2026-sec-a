<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 6B</title>
</head>
<body>
    <?php 
        if(isset($_POST['submit'])){
            if(isset($_POST['bloodgroup']) && $_POST['bloodgroup'] != ''){
                $bloodgroup = $_POST['bloodgroup'];
                echo "Selected blood group: " . $bloodgroup . "<br><br>";
            }
        }
    ?>
    
    <form action="" method="post">
      <fieldset>
        <legend>Blood Group</legend>
        <select name="bloodgroup">
            <option value="">-- Select --</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>
        <hr />
        <input type="submit" name="submit" value="Submit" />
      </fieldset>
    </form>
</body>
</html>
