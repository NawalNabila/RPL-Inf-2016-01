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
            <h3 class="text-center title-login">Register</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="first" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="last" placeholder="Last Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Confirm Password" required>
                </div>
                
                <a class="btn btn-block btn-custom-green" href="login.php">REGISTER </a>
                <div class="text-center forget">
                    <label class="checkbox">
				        <input type="checkbox">I've read the Terms and Conditions
				    </label>   
                </div>
            </form>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>