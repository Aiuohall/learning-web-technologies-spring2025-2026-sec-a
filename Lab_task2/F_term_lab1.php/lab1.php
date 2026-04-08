<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangle Calculator</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 500px; margin: 50px auto; padding: 20px; }
        form { background: #f5f5f5; padding: 20px; border-radius: 8px; }
        input[type="number"] { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 4px; }
        button { background: #007cba; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; width: 100%; }
        button:hover { background: #005a87; }
        .result { margin-top: 20px; padding: 15px; background: #d4edda; border: 1px solid #c3e6cb; border-radius: 4px; }
        .error { background: #f8d7da; border-color: #f5c6cb; color: #721c24; }
    </style>
</head>
<body>
    <h1>Rectangle Area and Perimeter Calculator</h1>
    <form method="POST">
        <label for="length">Length:</label>
        <input type="number" id="length" name="length" step="0.01" min="0" required value="<?php echo isset($_POST['length']) ? htmlspecialchars($_POST['length']) : ''; ?>">
        
        <label for="width">Width:</label>
        <input type="number" id="width" name="width" step="0.01" min="0" required value="<?php echo isset($_POST['width']) ? htmlspecialchars($_POST['width']) : ''; ?>">
        
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $length = filter_input(INPUT_POST, 'length', FILTER_VALIDATE_FLOAT);
        $width = filter_input(INPUT_POST, 'width', FILTER_VALIDATE_FLOAT);

        if ($length !== false && $width !== false && $length > 0 && $width > 0) {
            $area = $length * $width;
            $perimeter = 2 * ($length + $width);
            echo '<div class="result">';
            echo '<h2>Results:</h2>';
            echo '<p><strong>Area:</strong> ' . number_format($area, 2) . '</p>';
            echo '<p><strong>Perimeter:</strong> ' . number_format($perimeter, 2) . '</p>';
            echo '</div>';
        } else {
            echo '<div class="error">';
            echo '<p>Please enter valid positive numbers for length and width.</p>';
            echo '</div>';
        }
    }
    ?>
</body>
</html>
