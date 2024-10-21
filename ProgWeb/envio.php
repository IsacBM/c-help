<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
            include "conexao.php";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Inicializar variáveis
                $nome = $endereco = $telefone = $data_nascimento = '';

                foreach ($_POST as $key => $value) {
                    $$key = mysqli_real_escape_string($conexao, $value); // Escapando a entrada
                    echo "$key : $value<br>";
                }

                // Montar a consulta SQL
                $sql = "INSERT INTO PESSOA (nome, endereco, telefone, data_nascimento) 
                        VALUES ('$nome', '$endereco', '$telefone', '$data_nascimento')";
                
                if (mysqli_query($conexao, $sql)) {
                    echo "Pessoa inserida com sucesso<br>";
                } else {
                    echo "Erro: " . mysqli_error($conexao) . "<br>";
                }
            }
        ?>
    </div>
</body>
</html>
