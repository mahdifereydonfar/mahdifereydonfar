
<?php

session_start();

function hr()
{
    echo '<hr>';
}

function br()
{
    echo '<br>';
}

function mov($address)
{
    header("location: http://localhots/fereydonfar/". $address);
    exit;
}

function show($meghdar)
{
    echo $meghdar;
}


session_start();

// if (!isset($_SESSION['login'])) :

//     header('location: http://localhost/fereydonfar/error.php');
//     exit;

// endif;