<?php
function displaySM($nav){
    foreach($nav as $key => $value){
        echo "<a href=' " . $value  . "'>" . $key . "</a>";
    }
}

$icons = [
    "<i class='fab fa-facebook-square social-media'></i>" => 'home.php',
    "<i class='fab fa-twitter-square social-media'></i>" => 'about.php',
    "<i class='fab fa-youtube social-media'></i>" => 'contact.php'
];

displaySM($icons);
?>


<footer>
    <p>©Make Me Mozart Inc, 2018. All rights reserved.</p>
</footer>