<!DOCTYPE html>
<html>
<head>
  <title>Login<</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 mt-5">
    <h2><center>Login</center></h2>
    <form method="POST" action="login_process.php">
      <div class="form-group">
        <label for="rollNumber">Roll Number:</label>
        <input type="text"  class="form-control" id="rollNumber" name="rollNumber" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <br><a href = "signup.php">Create New Account</a>
  </div>
</div>
</div>
</body>
</html>
