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
      <ul>
        <!-- <?php
              foreach ($names as $name) {
                echo "<li>$name</li>";
              }
              ?> -->
        <!-- OR -->
        <?php foreach ($names as $name) : ?>
          <li><?= $name; ?></li>
        <?php endforeach; ?>
      </ul>
    </h1>
  </header>
</body>

</html>