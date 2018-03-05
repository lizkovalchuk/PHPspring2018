<?php
$user = "";
$name = "";
$email = "";
$username = "";
$password = "";
$dob = "";
$instr = "";
$error = "";
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
                echo "$instrument was checked!";
            }
        }
        if ($instr !== null){
            $violin = $instr[0];
            $viola = $instr[1];
            $cello = $instr[2];
            $bass = $instr[3];
            $flute = $instr[4];
            $clarinet = $instr[5];
            $oboe = $instr[6];
            $bassoon = $instr[7];
            $trumpet = $instr[8];
            $trombone = $instr[9];
            $french_horn = $instr[10];
            $tuba = $instr[11];
            $percussion = $instr[12];
            $piano = $instr[13];
            $guitar = $instr[14];
            $composition = $instr[15];
        }

    //logic
    //==================================================================================================================

    if($user == ''){
        $error .= "<p class='error-print'> Are you a student or teacher? </p> " ;
        $flag = false;
    }
    if($name == ''){
        $error .= "<p class='error-print'> What's your name? </p> ";
        $flag = false;
    }
    if($email == '' || (!filter_var($email, FILTER_VALIDATE_EMAIL))){
        $error .= "<p class='error-print'> Please enter email </p>";
        $flag = false;
    }
    if($username == ''){
        $error .= "<p class='error-print'> Gotta pick a user name... </p>";
        $flag = false;
    }
    if($password == ''){
        $error .= "<p class='error-print'> Gotta have a password... </p>";
        $flag = false;
    }
    if($dob == ''){
        $error .= "<p class='error-print'> What's your bday? </p>";
        $flag = false;
    }
    if(empty($_POST["$instr"])){
            $error .= "<p class='error-print'>What instrument do you want to learn?</p>";
    } else{
           echo "Checkbox was checked";
    }

    if($flag == true){
        header("Location: thankyou.php?name=$name&email=$email&username=$username&dob=$dob&instr=$instr");
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Make Me Mozart</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>

        <?php
        include 'header.php';
        ?>
        <div id="page-wrapper">
        <?php
        include 'content.php';
        ?>
        </div>
        <?php
        include 'footer.php';
        ?>

<!--<script type="text/javascript" src="script.js"></script>-->
</body>
</html>