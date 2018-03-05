<?php
    function displayNav($nav){
        foreach($nav as $key => $value){
            echo "<a href='" . $value . "'" . " class='upper-links'" . ">" . $key . "</a>";
        }
    }

    $links = [
            'home' => 'home.php',
            'about' => 'about.php',
            'contact' => 'contact.php'
    ];

    displayNav($links);
?>

<div id="header-wrapper">
    <h1 ID="hidden">Make Me Mozart</h1>
    <img id='logo' src='images/logo.jpg'>
    <p>Contact us: admin@makememozart.com</p>
</div>