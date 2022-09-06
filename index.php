<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTC-8">
  <title>Document</title>
  <style>
    header {
      background: gray;
      text-align: center;
      padding: 2em;
    }
  </style>
</head>

<body>
  <header>
    <h1>
      <!-- <?php echo "Hello, " . $_GET["name"]; ?> -->
      <?= "Hello, " . htmlspecialchars($_GET["name"]); ?>
    </h1>
  </header>
</body>

</html>