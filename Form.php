<?php
    require_once('./routing.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Task</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card mt-3 bg-light">
                <div class="card-body">
                    <form method="POST" action="<?php echo htmlspecialchars("result.php"); ?>">
                    <input type = "hidden", name = "token", value = "<?= $_SESSION['token']?>">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">User name</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="staticEmail" name ="username" placeholder="username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-4">
                                <input type="password" class="form-control" id="inputPassword" name = "password" placeholder="password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    // print_r($_SESSION);
?>
<body>
</body>

</html>