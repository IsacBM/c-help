<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include "conexao.php";
    include "header.php";
    if(isset($_POST['buscar'])){
        $buscar = $_POST['buscar'];
    } else {
        $buscar = "";
    }

    if (isset($_GET['delete_id'])) {
        $id = intval($_GET['delete_id']);

        // Executar a consulta de exclusão
        $sqlDelete = "DELETE FROM PESSOA WHERE id = $id";

        if (mysqli_query($conexao, $sqlDelete)) {
            echo "Pessoa deletada com sucesso!";
        } else {
            echo "Erro ao deletar: " . mysqli_error($conexao);
        }
    }

    $sql = "SELECT * FROM PESSOA WHERE NOME like'%$buscar%' order by 'nome'";

    $lista = mysqli_query($conexao, $sql);
    ?>
    <div class="row conteudo">
        <h1>Pessoas Cadastradas</h1>
        <form action="" method="POST">
            <input type="text" placeholder="Pesquisar..." name="buscar">
            <input type="submit" class="btn btn-primary" value="Buscar">
        </form>
    </div>
    <div class="tabela">
        <table class="table table-bordered table-dark rounded-3">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Funções</th>
                </tr>
            </thead>

            <?php
                while($linha = mysqli_fetch_assoc($lista)) {
                    echo "<tr>";
                    foreach($linha as $key => $value){
                        $$key = $value;
                    }
                    echo "<td>$nome</td>";
                    echo "<td>$endereco</td>";
                    echo "<td>$telefone</td>";
                    $data_nascimento = converterData($data_nascimento);
                    echo "<td>$data_nascimento</td>";
                    
                    echo "<td class = 'espaco'><a href='' class='btn btn-primary'><i class='bi bi-pencil-square'></i></a><a href='?delete_id=$id' class='btn btn-danger' onclick='return confirm(\"Tem certeza que deseja deletar?\");' class='btn btn-danger'><i class='bi bi-trash'></i></a></td></td>";
                    echo"</tr>";
                }
            ?>
        </table>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>