<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id parameter value from URL
$id = $_GET['id'];

if (!$id) {
  echo "<p class='px-3 py-1.5 bg-white text-red-700 text-2xl'>How did you come here?!</p>";
  echo "<a class='rounded-md mt-2 px-3 py-1.5 bg-white text-blue-500 text-2xl hover:bg-blue-200 cursor-pointer' href='index.php'>Come back!</a>";
}

// Delete row from the database table
$result = mysqli_query($mysqli, "DELETE FROM colaboradores WHERE id = $id");

// Redirect to the main display page (index.php in our case)
header("Location:index.php");