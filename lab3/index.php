<?php
$user = "";
$name = "";
$email = "";
$username = "";
$password = "";
$dob = "";
$instr = "";
$violin = "";
$flag = true;

if(isset($_POST['register'])){

    //list variables to hold user input
    //==================================================================================================================

        $user = filter_input(INPUT_POST, 'dropdown__input_user');
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $dob = $_POST['dob'];
        $instr = filter_input(INPUT_POST, 'instr', FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);

        if(!empty($_POST["$instr"])){
            foreach($_POST["$instr"] as $instrument){
                echo "$instrument was checked! ";
            }
        }
        if ($instr !== null){
            $instr1 = $instr[0];
            $instr1 = $instr[1];
            $instr1 = $instr[2];
            $instr1 = $instr[3];
            $instr1 = $instr[4];
            $instr1 = $instr[5];
            $instr1 = $instr[6];
            $instr1 = $instr[7];
            $instr1 = $instr[8];
            $instr1 = $instr[9];
            $instr1 = $instr[10];
            $instr1 = $instr[11];
            $instr1 = $instr[12];
            $instr1 = $instr[13];
            $instr1 = $instr[14];
            $instr1 = $instr[15];
        }

    //logic
    //==================================================================================================================

    if($user == ''){
        echo "Are you a student or teacher? " . "<br />";
        $flag = false;
    }
    if($name == ''){
        echo "What's your name? " . "<br />";
        $flag = false;
    }
    if($email == '' || (!filter_var($email, FILTER_VALIDATE_EMAIL))){
        echo "Please enter email" . "<br />";
        $flag = false;
    }
    if($username == ''){
        echo "Gotta pick a user name... " . "<br />";
        $flag = false;
    }
    if($password == ''){
        echo "Gotta have a password... " . "<br />";
        $flag = false;
    }
    if($dob == ''){
        echo "What's your bday?" . "<br />";
        $flag = false;
    }
    if($flag == true){
        header("Location: thankyou.php?name=$name&email=$email&username=$username&instr=$instrument");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Make Me Mozart</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
    <div id="page-wrapper">
        <?php
        include 'header.php';
        ?>

        <?php
        include 'content.php';
        ?>

        <?php
        include 'footer.php';
        ?>
    </div>
<!--<script type="text/javascript" src="script.js"></script>-->
</body>
</html>