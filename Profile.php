<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php

    require_once('./routing.php');
    $IP      = $_SERVER["REMOTE_ADDR"];
    $browser = $_SERVER["HTTP_USER_AGENT"]; ?>

    <?php if ((isset($_SESSION['LogedIn']) && $_SESSION['LogedIn'] === true &&  $_SESSION['LoginIP'] == $IP &&  $_SESSION['userAgent'] == $browser)) : ?>
        
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1"><?php echo $_SESSION['username']; ?></span>
            <button type="button" class="btn btn-default btn-sm">
                <a href = "exit.php">Log out</a>
            </button>
        </nav>
        <br>
        <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Şəxsi məlumatlar</div>
            <div class="card-body">
                <p class="card-text">İstifadəçi adı: <?php echo $_SESSION['username']; ?></p>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Faylı seçin</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
    <?php else : go('exit.php'); ?>

    <?php endif ?>
    <!-- echo "<br>", '<script>
        document.write(document.cookie);
    </script>'; -->
    <!-- // echo $_SESSION['token']; -->





</body>

</html>