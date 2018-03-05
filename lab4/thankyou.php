<?php
if(isset($_GET['name'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $username = $_GET['username'];
    $dob = $_GET['dob'];
    $instr = $_GET['instr'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account Information</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="fontawesome-all.min.css">
</head>
<body>
    <?php
    include 'header.php';
    ?>
<div id="page-wrapper">

    <h1>Account Information</h1>

    <label>Name:</label>
    <span><?= $name; ?></span><br />

    <label>Email Address:</label>
    <span><?= htmlspecialchars($email); ?></span><br />

    <label>Username:</label>
    <span><?= $username; ?></span><br />

    <label>Date of Birth:</label>
    <span><?= $dob; ?></span><br />

    <label>Instruments:</label>
    <span><?= $instr ; ?></span>

</div>
    <?php
    include 'footer.php';
    ?>
</body>
</html>