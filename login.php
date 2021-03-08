<!DOCTYPE html>
<html>
<head>
    <script defer src="script.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
</head>

<body style="background: linear-gradient(135deg, #172a74, #21a9af);
  background-color: #184e8e; height: 656px;">
    <div class="login-clean">
        <form name="login-form" method="post" onsubmit="return validate()">
            <div class="illustration"><img src="assets/img/carigara.png" height="110px;"></i></div>
            <br>
            <div class="form-group"><input class="form-control" type="text" required="" name="email" placeholder="Email" autocomplete="off">
            <div class="email_error">Please fill up your Email</div></div>
            <div class="form-group"><input class="form-control" type="password" required="" name="password" placeholder="Password">
            <div class="password_error">Please fill up your Password</div></div>
            <a href="index.php" class="btn btn-primary btn-block">Log In</a>
            <a class="forgot" href="signup.php">Doesn't have an account yet? Signup here.</a></form>
    </div>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>