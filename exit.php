<?php
    require_once('./routing.php');
    session_start();
   
    session_unset();
    session_destroy();
    //print_r($_SESSION); die();
    go ("Form.php");
?>