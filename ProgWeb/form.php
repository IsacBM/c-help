<?php
    include "header.php";
?>
<form action="envio.php" method="POST">
    <fieldset>
        <legend>Disabled fieldset example</legend>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Nome</label>
            <input type="text" id="" name="nome" class="form-control" placeholder="Digite seu nome">
        </div>
        <div class="mb-3">
            <label for="textInput"  class="form-label">Endereço</label>
            <input type="text" name="endereco" id="textInput" class="form-control" placeholder="Digite seu endereço">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput"  class="form-label">Telefone</label>
            <input type="text" name="telefone" id="" class="form-control" placeholder="Digite seu telefone">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput"  class="form-label">Data de nascimento</label>
            <input type="date" id="" name="data_nascimento" class="form-control" placeholder="Digite sua data de nascimento">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
</form>