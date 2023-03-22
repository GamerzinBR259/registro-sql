<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>Registrar</title>
</head>
<body>

<h1>Registrar</h1>

<form action="index.php" method="post">

    <input type= "text" name = "Nome" value="" placeholder="Nome"><br><br>

    <input type="text" name ="Sobrenome" value="" placeholder="Sobrenome"><br><br>

    <input type="text" name ="Telefone" value=""placeholder="Número"><br><br>

    <button onclick="guardar">Enviar</button>

</form>

<?php
$nome = $_POST["Nome"];
$sobrenome = $_POST["Sobrenome"];
$telefone = $_POST["Telefone"];

$servername = "localhost";
$username = "id20489658_victor";
$password = "DHE2&k=}vchesK8d";
$db = "id20489658_escola";

$conn = new mysqli ($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Conexâo com DB Falhou: " . $conn->connect_error);
}

$sql = "INSERT INTO alunos (Nome, Sobrenome, Telefone)
VALUES ('$nome', '$sobrenome', '$telefone')";

if ($conn->query($sql) === TRUE) {
    echo "Novo cadastro feito com êxito";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
$conn->close();
?>

<script src="script.js"></script>
</body>
</html>