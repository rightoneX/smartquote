<?php include 'includes/autoloader.inc.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="Quote platform for creating offers to a clients with product and client management features." />
  <link rel="canonical" href="http://localhost:8000" />
  <meta name="theme-color" content="#0d6efd">
  <link rel="apple-touch-icon" href="images/logo192.png" type="image/x-icon">

  <link rel="manifest" href="/manifest.json">
  <link rel="stylesheet" href="../assets/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/app.css">


  <script src="/js/pwa.js"></script>

  <title>sQuote</title>
</head>

<body>

  <?php 
    include 'includes/navigation.inc.php';
    // restricted page
    include 'includes/sidebar.inc.php';
  ?>

  <div class="container">
    <?php
      $nav = new Navigation("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
      include $nav->page;
    ?>
  </div>

  <div class="footer">
    <?php 
      include 'includes/footer.inc.php'; 
    ?>
  </div>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="./js/login.js"></script>

</body>

</html>