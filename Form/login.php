<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="col-md-4 col-md-offset-4 form-login">
        
        <div class="outter-form-login">
        <div class="logo-login">
            <em class="glyphicon glyphicon-user"></em>
        </div>
            <form action="check-login.php" class="inner-login" method="post">
            <h3 class="text-center title-login">Login Admin</h3>
                <p class="text-center text-muted">Belum terdaftar? Klik <a href="register.php">Register</a>.</p>
				<hr>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <a class="btn btn-block btn-custom-green" href=#>LOGIN </a>
                <div class="text-center forget">
                    <a href="">Forgot password?</a>
                </div>
            </form>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>