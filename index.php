<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Page</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css"/>
  <!-- <style>
   
</style> -->
</head>
<body>
  <div class="container">
    <div class="login-box">
      <h2>Login</h2>
      <form action="input_db.php" method="POST">
        <div class="input-group">
          <label>Username</label>
          <input type="text" name="u_name" placeholder="Type your username" />
        </div>
        <div class="input-group">
          <label>Password</label>
          <input type="password" name="passw" placeholder="Type your password" />
          <a href="#" class="forgot">Forgot password?</a>
        </div>
        <button type="submit" name="save" class="login-btn"> Login </button>
      </form>

      <p class="or">Or Sign Up Using</p>
      <div class="social-icons">
        <a href="#"><img src="https://img.icons8.com/color/48/facebook-new.png" alt="Facebook"></a>
        <a href="#"><img src="https://img.icons8.com/color/48/twitter--v1.png" alt="Twitter"></a>
        <a href="#"><img src="https://img.icons8.com/color/48/google-logo.png" alt="Google"></a>
      </div>

      <p class="signup-link">Or Sign Up Using<br><a href="#">SIGN UP</a></p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
