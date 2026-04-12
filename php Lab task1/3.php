 
<html>

<form>
        <label for="enterNumber">Enter a Number:</label><br><br>
        <input type="number" id="enterNumber" name="number" required>
        <br><br>
        <input type="submit" value="Check">
    </form>

</html>
<?php
if (isset($_GET['number'])) {
    $number = $_GET['number'];

    if ($number % 2 == 0) {
        echo "{$number} is an even number.";
    } else {
        echo "{$number} is an odd number.";
    }
}
?>