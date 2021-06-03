
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
    header("location: $address");
    exit;
}

function show($meghdar)
{
    echo $meghdar;
}


session_start();

if (!isset($_SESSION['login'])) :\

    header('location: error.php');
    exit;

endif;