<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="styleQr.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Qr code</title>
</head>

<body>
  <div class="container">
    <!-- Sezione immagine con QR code -->
    <div class="card-img">
      <img id="qr" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=https://www.google.com" alt="QR Code">
    </div>
    <!-- Sezione testuale -->
    <div class="card-body">
      <h1 id="text1">Improve your front-end skills by building projects</h1>
      <p id="text2">
        Scan the QR code to visit Frontend Mentor and take your coding skills to the next level.
      </p>
    </div>
  </div>
</body>

</html>
