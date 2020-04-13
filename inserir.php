<?php
    $host = "localhost";
    $database = "dijunto";
    $username = "ganz";
    $password = "2526*-*@Dan";

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['sexo'];
    $datanascimento = $_POST['data_nascimento'];
    $senha = $_POST['senha'];



    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
    }
     
    echo "Connected successfully";
     
    $sql = "INSERT INTO clientes (nome, telefone, email, cpf, sexo, datanascimento, senha)
     VALUES ('$nome', '$telefone', '$email', '$cpf', '$sexo', '$datanascimento', '$senha' )";
    if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
