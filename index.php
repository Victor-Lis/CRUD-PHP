<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM colaboradores ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bem-vindo!</title>

  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-blue-400">
  <main class="w-full h-svh p-6">
    <header class="flex justify-between items-center mb-6">
      <h2 class="text-3xl text-white font-bold">Collaborators<span class="text-blue-800">+</span></h2>
      <nav class="flex items-center">
        <a href="./insert.php" class="text-blue-600 rounded-md p-2 bg-white cursor-pointer shadow-md hover:bg-blue-200">Adicionar
          Colaborador</a>
      </nav>
    </header>

    <div class="overflow-x-auto">
      <table class="table-auto w-full border-collapse border border-gray-300 shadow-lg bg-white rounded-lg">
        <thead>
          <tr class="bg-blue-600 text-white">
            <th class="px-4 py-2 text-left">Nome</th>
            <th class="px-4 py-2 text-left">Sobrenome</th>
            <th class="px-4 py-2 text-left">Email</th>
            <th class="px-4 py-2 text-left">Formação</th>
            <th class="px-4 py-2 text-left">Descrição</th>
            <th class="px-4 py-2 text-left">Manipular</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($res = mysqli_fetch_assoc($result)) {
            echo "<tr class='border-t border-gray-200 hover:bg-blue-100 transition'>";
            echo "<td class='px-4 py-3'>" . $res['nome'] . "</td>";
            echo "<td class='px-4 py-3'>" . $res['sobrenome'] . "</td>";
            echo "<td class='px-4 py-3'>" . $res['email'] . "</td>";
            echo "<td class='px-4 py-3'>" . $res['formacao'] . "</td>";
            echo "<td class='px-4 py-3'>" . $res['descricao'] . "</td>";
            echo "<td class='px-4 py-3 w-full flex justify-start   items-center gap-x-2'><a class='bg-blue-500 px-4 py-1 rounded-md text-white' href=\"edit.php?id=$res[id]\">Edit</a> 
                <a class='bg-red-500 px-4 py-1 rounded-md text-white' href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
          }
          ?>
      </table>
    </div>
  </main>
</body>


</html>