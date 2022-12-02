<?php 
session_start();
function go($url,$time=0){
    if($time !=0 ){
        header("Refresh:$time;url = $url");
    }else{
        header("LOcation:$url");
    }
}
function comeback($time=0){
    $url = $_SERVER["HTTP_REFERER"];
    if($time != 0){
        header("Refresh:$time;url = $url");
    }else{
        header("Location: $url");
    }
}

    if(!isset($_POST['token'])){
        $_SESSION['token'] = md5(time(). rand(0, 999999));
    }
   

?>