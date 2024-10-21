<?php
    $bd = "EMPRESA02";
    $servidor = "127.0.0.1";
    $user = "root";
    $pass = "1234";

    if($conexao = mysqli_connect($servidor, $user, $pass, $bd)){
        $estado_conexao = "Conectado com sucesso!";
    } else{
        echo "Erro na Conexâo...";
    }

    function converterData($data){
            // Verifica se a data está no formato correto (YYYY-MM-DD)
            $dataFormatada = DateTime::createFromFormat('Y-m-d', $data);
            
            // Se a data for válida, retorna no formato desejado
            if ($dataFormatada) {
                return $dataFormatada->format('d/m/Y'); // Ou o formato desejado
            }
        
            // Se a data não for válida, retorna a data original ou false
            return false; // Ou trate como desejar
        
    }