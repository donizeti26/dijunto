<?php

$servidor = "localhost";
$usuario = "ganz";
$senha = "2526*-*@Dan";
$dbname = "dijunto";

/*CRIAR CONEXÃO*/


$conn = mysqli_connet('localhost', 'ganz','2526*-*@Dan');

$pesquisa = $_POST['Pesquisar']; 

$result_locais = "SELEC * FROM locais WHERE nome LIKE '%pesquisa%'";
$result_locais = mysql_query($conn, $result_locais);

$nregistos = mysqli_num_rows($result);
echo "No de registos encontrados: $nregistos";

while($rows_locais = mysqli_fetch_array($resultado_locais)){
    echo "Nome do local: ".$rows_locais['nome']."<br>";
}
?>





