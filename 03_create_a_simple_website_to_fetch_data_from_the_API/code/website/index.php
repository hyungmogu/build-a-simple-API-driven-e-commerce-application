<?php
  $json = file_get_contents('http://product-service');
  $obj = json_decode($json);
  $products = $obj->product;
?>

<html>
<head>
  <title>Simple e-commerce application</title>
</head>
<body>
  <h1>Welcome to my simple e-commerce site</h1>
  <ul>

    <!-- php code here -->
    <?php
      foreach ($products as $product) {
        echo "<li>" . $product . "</li>";
      }
    ?>
  </ul>
</body>

</html>