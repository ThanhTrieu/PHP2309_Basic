<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dang ky tai khoan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 offset-md-3">
                <h4 class="my-3 text-center">Dang ky</h4>
                <form class="border p-3" action="server/handle.php" method="post">
                    <div class="mb-3">
                        <label>Tai khoan</label>
                        <input type="text" class="form-control" name="username" />
                    </div>
                    <div class="mb-3">
                        <label>Mat khau</label>
                        <input type="password" class="form-control" name="password" />
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" />
                    </div>
                    <div class="mb-3">
                        <label>SDT</label>
                        <input type="number" class="form-control" name="phone" />
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnRegister"> gui du lieu </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>