<?php
          // Retrieve the rollNumber value from the URL parameter
          $rollNumber = $_GET['rollNumber'] ?? '';
          
          // Display an alert if the rollNumber value is empty
          if (empty($rollNumber)) {
            echo '<div class="alert alert-danger" role="alert">Invalid roll number</div>';
          }
        ?>
<!DOCTYPE html>
<html>
<head>
  <title>QR Code Generator</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
</head>
<style>
  body {
  background-color:#fefbd8;
  }
</style>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 mt-5">
        <h2><center>QR Code Generator</center></h2><br><br>
        
        <form id="qrForm" onsubmit="generateQRCode(event)" method="post" action="send_mail.php">
          <div class="form-group">
            <label for="rollNumber1" readonly>Roll Number:</label>
            <input type="text" class="form-control" id="rollNumber1" name="rollNumber1" placeholder="Enter your roll number" value="<?php echo $rollNumber; ?>" required>
          </div>
          <div class="form-group">
            <label for="guests">Number of Guests:</label>
            <input type="number" class="form-control" id="guests" name="guests" placeholder="Enter the number of guests" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
          </div>
          <button type="submit" class="btn btn-primary" name="send" style="align:center;">Generate QR Code</button>
        </form>
        <br><br>
        <div id="qrcode"></div> <!-- QR code will be rendered here -->
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>
    function generateQRCode(event) {
      event.preventDefault();
      var rollNumber = document.getElementById('rollNumber1').value;
      var guests = document.getElementById('guests').value;
      var email = document.getElementById('email').value;
      var qrcodeDiv = document.getElementById('qrcode');
      // Clear previous QR code
      qrcodeDiv.innerHTML = '';
      // Generate new QR code
      var qrCode = new QRCode(qrcodeDiv, {
        text: rollNumber1 + ',' + guests + ',' + email,
        width: 128,
        height: 128
      });
    }
  </script>
</body>
</html>
