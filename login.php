<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="login.css">
    <title>login</title>
</head>
<body>
    <div class="container">
        <div class="inner-container">
            <form action="" method="POST">
            <h4 class="header">Login</h4><hr>
            <label>Email</label><br>
            <input type="email" name="email" class="form-control" placeholder="e.g example@gmail.com" required /><br>
            <label>Password</label><br>
            <input type="password" name="password" class="form-control" placeholder="your password" required /><br>
            <p>Forgot password?<a href="" style="color:black">Reset here</a></p>
            <input type="submit" value="Login" class="btn btn-custom" />
            <p>Do not have account?<a href="register.php" style="color:black">Sign Up</a></p>
            </form>
        </div>
    </div>

    
</body>
</html>