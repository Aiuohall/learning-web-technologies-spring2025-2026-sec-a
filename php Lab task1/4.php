<html>

<form >
        <label for="num1">Enter First Number:</label><br>
        <input type="number" id="num1" name="num1" required><br><br>

        <label for="num2">Enter Second Number:</label><br>
        <input type="number" id="num2" name="num2" required><br><br>

        <label for="num3">Enter Third Number:</label><br>
        <input type="number" id="num3" name="num3" required><br><br>

        <input type="submit" value="Find Largest">
    </form>
</html>

<?php
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];

    $largest = max($num1, $num2, $num3);

    echo "The largest number is: {$largest}";
}