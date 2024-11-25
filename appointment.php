<?php 
session_start();
$username = $_SESSION["username"];
$email = $_SESSION["email"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>appointment</title>
</head>
<body>
    <div class="container">
        <h4>Book Appointment</h4>
        <form action="appointment.php" method="POST">
            <label>Username</label>
            <input type="text" name="username" class="form-control" value="<?php echo $username ?>" required /><br>
            <label>Email</label>
            <input type="email" name="email" class="form-control" value=<?php echo $email ?>  required /><br>
            <label>Choose an activity</label>
            <select class="form-control" name="appointment">
                <option value="">--Select an activity--</option>
                <option>Legislature services</option>
                <option>Executive services</option>
                <option>Judiciary services</option>

            </select><br>
            <input type="submit" value="Book Appointment" class="btn btn-primary" />
        </form>

    </div>
    
</body>
</html>