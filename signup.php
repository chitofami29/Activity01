<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/registration.css">
</head>

<body style="background: linear-gradient(135deg, #172a74, #21a9af);
  background-color: #184e8e; height: 656px;">
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form action="code.php" method="post">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" required="" type="email" name="email" placeholder="Email" autocomplete="off"></div>
                <div class="form-group"><input class="form-control" required="" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><input class="form-control" required="" type="password" name="password-repeat" placeholder="Password (repeat)"></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" required="">I agree to the license terms.</label></div>
                </div>
                <div class="form-group"><button name="amdin_register" class="btn btn-primary btn-block" type="submit">Sign Up</button></div><a class="already" href="login.php">You already have an account? Login here.</a></form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>