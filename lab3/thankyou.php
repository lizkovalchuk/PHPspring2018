<?php
if(isset($_GET['name'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $username = $_GET['username'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account Information</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
<div id="page-wrapper">
    <h1>Account Information</h1>

    <label>Name:</label>
    <span><?= $name; ?></span><br />

    <label>Email Address:</label>
    <span><?= htmlspecialchars($email); ?></span><br />

    <label>Username:</label>
    <span><?= $username; ?></span><br />

    <label>Username:</label>
    <span><?= $username; ?></span><br />

</div>
</body>
</html>