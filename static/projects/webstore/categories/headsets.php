<?php
  require "../header.php";
  // Include the dbconnect.php file to establish the database connection
  require "../dbconnect.php";
  require "../footer.php";

  try {
    // Define the category ID you want to display
    $categoryID = 3;

    // Write the SQL query to retrieve products from the specified category
    $query = "SELECT * FROM products WHERE category_id = :categoryID";

    // Prepare the query
    $stmt = $conn->prepare($query);

    // Bind the category ID parameter
    $stmt->bindParam(':categoryID', $categoryID);

    // Execute the query
    $stmt->execute();

    // Fetch all the rows
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);


    // Close the database connection
    $conn = null;
  } catch (PDOException $e) {
      die("Database connection failed: " . $e->getMessage());
  }
?>

<div class="product">
  <?php
    foreach ($rows as $row) {
      // Access the product information from the $row variable
      $productName = $row['name'];
      $productPrice = $row['price'];
      $productDescription = $row['description'];
      echo "<hr>";
      echo "<p>Product Name: $productName</p>";
      echo "<p>Price: $productPrice</p>";
      echo "<p>Description: $productDescription</p>";
      echo "<hr>";
    }
  ?>
</div>
