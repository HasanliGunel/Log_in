<?php 
    session_set_cookie_params('null', '/', 'localhost', false, true);
    // session_start();
    require_once('./routing.php'); 
    $_SESSION["LogedIn"]   = false; 

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        if(!isset($_POST['token'])){
            die('Token tapılmadı');
        };

        if($_POST['token']!= $_SESSION['token']){
            die("Daxil olmaq üçün icazəniz yoxdur");
        };

        $username     = $_POST['username'];
        $password     = $_POST['password'];
        $databaseUser = "admin";
        $databasePass = "25d55ad283aa400af464c76d713c07ad";

        if( empty($username) || empty($password)){
            echo ("<h3>Zəhmət olmasa bütün xanaları doldurun</h3>");
            comeBack(3);
        }else{
            $password     = md5($password);

            if($databaseUser != $username && $databasePass != $password){
                echo ("<h3>İstifadəçi adı və ya şifrə səhvdir</h3>");
                comeback(3);
            }else{
                session_regenerate_id(true);
                $_SESSION["LogedIn"]   = true; 
                $_SESSION["username"]  = $username;
                $_SESSION["LoginIP"]   = $_SERVER["REMOTE_ADDR"];
                $_SESSION["userAgent"] = $_SERVER["HTTP_USER_AGENT"];
                echo '<h2>Loading</h2>';
                go("profile.php",2);
            }
        }
        if($_SESSION['LogedIn'] == true)
        {
            header("Location: profile.php");
        }
    }else{
        go("Form.php",3);
        exit("Bu səhifəyə baxmaq icazəniz yoxdur");
    }
    
?>