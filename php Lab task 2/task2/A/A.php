<?php
$email = '';
if (isset($_POST['submit'])) {
    $email = trim($_POST['email'] ?? '');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <fieldset>
        <legend>Email</legend>
        <?php if ($email !== ''): ?>
            <p>Submitted email: <?php($email); ?></p>
        <?php else: ?>
            <p>No email submitted yet.</p>
        <?php endif; ?>
    </fieldset>
</body>
</html>