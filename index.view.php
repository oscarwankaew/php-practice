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
      <!-- $name = $_GET["name"] -->
      <!-- <?php echo "Hello, " . $_GET["name"]; ?> -->
      <?= $greeting; ?>
    </h1>
  </header>
</body>

</html>