<?php 
require "loginMiddleware.php";
if(checkLogin()){
    header("Location:dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 offset-md-3">
                <h3 class="my-3 text-center"> Login </h3>
                <form class="border p-3" method="post" action="server/handle.php">
                    <div class="mb-3">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" />
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" />
                    </div>
                    <div class="mb-3">
                        <label>Remember me</label>
                        <input type="checkbox" name="remember" />
                    </div>
                    <button class="btn btn-primary" name="btnLogin"> Submit </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>