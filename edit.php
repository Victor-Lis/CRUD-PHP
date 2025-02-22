<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM colaboradores WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$nome = $resultData['nome'];
$sobrenome = $resultData['sobrenome'];
$email = $resultData['email'];
$formacao = $resultData['formacao'];
$descricao = $resultData['descricao'];

?>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Editar Colaborador</title>

	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-blue-400">
	<main class="w-full h-svh p-6">
		<header class="flex justify-between items-center mb-6">
			<h2 class="text-3xl text-white font-bold">Editar Colaborador</h2>
			<nav class="flex items-center">
				<a href="index.php"
					class="text-blue-600 rounded-md p-2 bg-white cursor-pointer shadow-md hover:bg-blue-200 transition">Voltar</a>
			</nav>
		</header>

		<form name="edit" method="post" action="editAction.php"
			class="bg-white p-6 rounded-lg shadow-lg max-w-lg mx-auto space-y-4">
			<div>
				<label for="nome" class="block text-gray-700 font-semibold mb-1">Nome:</label>
				<input type="text" name="nome" id="nome" value="<?php echo $nome; ?>"
					class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
					required>
			</div>

			<div>
				<label for="sobrenome" class="block text-gray-700 font-semibold mb-1">Sobrenome:</label>
				<input type="text" name="sobrenome" id="sobrenome" value="<?php echo $sobrenome; ?>"
					class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
					required>
			</div>

			<div>
				<label for="email" class="block text-gray-700 font-semibold mb-1">Email:</label>
				<input type="email" name="email" id="email" value="<?php echo $email; ?>"
					class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
					required>
			</div>

			<div>
				<label for="formacao" class="block text-gray-700 font-semibold mb-1">Formação:</label>
				<input type="text" name="formacao" id="formacao" value="<?php echo $formacao; ?>"
					class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
					required>
			</div>

			<div>
				<label for="descricao" class="block text-gray-700 font-semibold mb-1">Descrição:</label>
				<textarea name="descricao" id="descricao" rows="4"
					class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
					required><?php echo $descricao; ?></textarea>
			</div>

			<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>

			<div class="flex justify-end">
				<input type="submit" name="update" value="Editar"
					class="bg-blue-600 text-white px-4 py-2 rounded-md cursor-pointer hover:bg-blue-700 transition">
			</div>
		</form>
	</main>
</body>

</html>