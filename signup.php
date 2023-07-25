<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 mt-5">
    <br><h2><center>Sign Up<center></h2>
    <form method="POST" action="signup_process.php">
      <div class="form-group">
        <label for="rollNumber">Roll Number:</label>
        <input type="text" class="form-control" id="rollNumber" name="rollNumber" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="confirmPassword">Re-enter Password:</label>
        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
      </div>
      <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
    <br><a href="login.php">Already have an account?</a>
  </div>
</div>
</div>
  <script>
    window.addEventListener('DOMContentLoaded', () => {
      const passwordField = document.getElementById('password');
      const confirmPasswordField = document.getElementById('confirmPassword');
      
      confirmPasswordField.addEventListener('input', () => {
        if (passwordField.value !== confirmPasswordField.value) {
          confirmPasswordField.setCustomValidity("Passwords don't match");
        } else {
          confirmPasswordField.setCustomValidity('');
        }
      });
    });
  </script>
</body>
</html>
