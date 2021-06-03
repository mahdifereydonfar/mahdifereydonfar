<?php

require_once 'function.php';

$username_database = "mahdi";
$password_database = "0000";

if (isset($_POST['txt_user']) && isset($_POST['txt_pass'])) :

   
    $txt_user = $_POST['txt_user'];
    $txt_pass = $_POST['txt_pass'];
    

    $_SESSION['value'] = [
        'txt_user' => $txt_user,
        'txt_pass' => $txt_pass,
        
    ];

    /**
     * Validation
     */

    if (empty($txt_user)) :

        $_SESSION['error'] = 'empty user name';
        enteghal('/panel');

    endif;

    if (empty($txt_pass)) :

        $_SESSION['error'] = 'empty password';
        mov('/index');

    endif;

    if ($txt_user != $username_database) :

        $_SESSION['error'] = 'user name ';
        mov('/index');

    endif;

    if ($txt_pass != $password_database) :

        $_SESSION['error'] = 'error password';
        mov('/index');

    endif;

    /**
     * Validate Success
     */

    unset($_SESSION['error']); // show error
    unset($_SESSION['value']); // value of input

    if (isset($txt_name) && !empty($txt_name)) :
        $_SESSION['laptop'] = $txt_name;
    else :
        $_SESSION['tab'] = 'no name';
    endif;

    $time = time() + 100;

    setcookie('exit', $time, $time);

    mov ('index.php');

else : //<no click>

    mov('/index');

endif;
