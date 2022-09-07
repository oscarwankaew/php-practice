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
              foreach ($person as $name) {
                echo "<li>$name</li>";
              }
              ?> -->
        <!-- OR -->
        <!-- <?php foreach ($task as $heading => $value) : ?>
          <li><strong><?= ucwords($heading); ?> : </strong> <?= $value; ?></li>
        <?php endforeach; ?> -->
        <li>
          <strong>Name:</strong> <?= $task["title"]; ?>
        </li>
        <li>
          <strong>Due Date:</strong> <?= $task["due"]; ?>
        </li>
        <li>
          <strong>Person:</strong> <?= $task["assigned_to"]; ?>
        </li>
        <li>
          <strong>Status:</strong> <?= $task["completed"] ? "Complete" : "Incomplete"; ?>
        </li>
      </ul>
    </h1>
  </header>
</body>

</html>