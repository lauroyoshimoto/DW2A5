<?php
       require "header.php"
?>

<div class="bg-light p-4 mb-4 rounded">
<h1>Formulário para contato</h1>
</div>


<?php

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
$mensagem = filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_SPECIAL_CHARS);

date_default_timezone_set( 'America/Sao_Paulo');

$data = date('d-m-Y - H:i:s');

           echo "Nome: $nome <br><br>";

echo "E-mail: $email <br><br>";

echo "Mensagem: $mensagem <br><br>";

echo "Data: $data <br><br>";

//Variável $fp armazena a conexão com o arquivo e o tipo de ação.
$fp = fopen("praticando.txt", "a+");

//Escreve no arquivo aberto.
fwrite($fp, "Contato do site".PHP_EOL.PHP_EOL);
fwrite($fp, "Nome: $nome".PHP_EOL);
fwrite($fp, "E-mail: $email".PHP_EOL);
fwrite($fp, "Mensagem: $mensagem".PHP_EOL);
fwrite($fp, "Data: $data".PHP_EOL);


//Fecha o arquivo.
fclose($fp);

?>

<a href="Contato.php"class="btn btn-default">Voltar</a>

<?php
       require "footer.php"
?>