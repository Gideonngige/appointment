<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="login.css">
    <title>register</title>
</head>
<body>
    <div class="container">
        <div class="inner-container">
            <form action="" method="POST">
            <h4 class="header">Register</h4><hr>
            <table>
                <tr>
                    <td><label>First name</label><br><input type="text" class="form-control" placeholder="your first name" /></td>
                    <td><label>Last name</label><br><input type="text" class="form-control" placeholder="your last name" /></td>
                </tr>
            </table>
            <label>Email</label><br>
            <input type="email" name="email" class="form-control" placeholder="e.g example@gmail.com" required /><br>
            <label>Password</label><br>
            <input type="password" name="password" class="form-control" placeholder="your password" required /><br>
            <label>Repeat password</label><br>
            <input type="password" name="password" class="form-control" placeholder="Repeat your password" required /><br>
            <p>Already have an account?<a href="login.php" style="color:black">Sign In</a></p>
            <input type="submit" value="Register"  class="btn btn-custom" />
            
            </form>
        </div>
    </div>

    
</body>
</html>