<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert - Colaborador</title>

  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-blue-400">
  <main class="w-full h-svh p-6 flex flex-col justify-center items-center">
    <?php
    // Include the database connection file
    require_once("dbConnection.php");

    if (isset($_POST['submit'])) {
      // Escape special characters in string for use in SQL statement	
      $name = mysqli_real_escape_string($mysqli, $_POST['nome']);
      $sobrenome = mysqli_real_escape_string($mysqli, $_POST['sobrenome']);
      $email = mysqli_real_escape_string($mysqli, $_POST['email']);
      $formacao = mysqli_real_escape_string($mysqli, $_POST['formacao']);
      $descricao = mysqli_real_escape_string($mysqli, $_POST['descricao']); 

      // Check for empty fields
      if (empty($name) || empty($sobrenome) || empty($email) || empty($formacao) || empty($descricao)) {
        if (empty($name)) {
          echo "<h2 class='mt-2 px-3 py-1.5 bg-white text-red-700 text-2xl'>Name field is empty.</h2><br/>";
        }

        if (empty($sobrenome)) {
          echo "<h2 class='mt-2 px-3 py-1.5 bg-white text-red-700 text-2xl'>Sobrenome field is empty.</h2><br/>";
        }

        if (empty($email)) {
          echo "<h2 class='mt-2 px-3 py-1.5 bg-white text-red-700 text-2xl'>Email field is empty.</h2><br/>";
        }

        if (empty($formacao)) {
          echo "<h2 class='mt-2 px-3 py-1.5 bg-white text-red-700 text-2xl'>Formação field is empty.</h2><br/>";
        }

        if (empty($descricao)) {
          echo "<h2 class='mt-2 px-3 py-1.5 bg-white text-red-700 text-2xl'>Descrição field is empty.</h2><br/>";
        }
        // Show link to the previous page
        echo "<br/><a class='rounded-md mt-2 px-3 py-1.5 bg-white text-blue-500 text-2xl hover:bg-blue-200 cursor-pointer' href='javascript:self.history.back();'>Go Back</a>";
      } else {
        // If all the fields are filled (not empty) 
    
        // Insert data into database
        $result = mysqli_query($mysqli, "INSERT INTO colaboradores (`nome`, `sobrenome`, `email`, `formacao`, `descricao`) VALUES ('$name', '$sobrenome', '$email', '$formacao', '$descricao')");

        // Display success message
        echo "<p class='px-3 py-1.5 bg-white text-green-500 text-2xl'>Data added successfully!</p>";
        echo "<a class='rounded-md mt-2 px-3 py-1.5 bg-white text-blue-500 text-2xl hover:bg-blue-200 cursor-pointer' href='index.php'>View Result</a>";
      }
    } else {
      echo "<p class='px-3 py-1.5 bg-white text-red-700 text-2xl'>How did you come here?!</p>";
      echo "<a class='rounded-md mt-2 px-3 py-1.5 bg-white text-blue-500 text-2xl hover:bg-blue-200 cursor-pointer' href='index.php'>Come back!</a>";
    }

    ?>
  </main>
</body>

</html>