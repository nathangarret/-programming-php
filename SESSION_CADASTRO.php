<?php

if(isset($_REQUEST['valor']) and ($_REQUEST['valor'] == 'enviado'))
{
    session_start();

    $_SESSION ['nome'] = $_POST ['nome_usuario'];
    $_SESSION ['cpf'] = $_POST ['cpf_usuario'];

    echo "<a href='SESSION_BANCO.php'>Continuar Cadastrando</a>";
}
else
{
?>
    <form name="form1" action="SESSION_CADASTRO.php?valor=enviado" method="POST"> 
        <p>Digite seu nome: <input type="text" name="nome_usuario"><br>
        <p>Digite seu CPF: <input type="text" name="cpf_usuario" maxlength="11"><br><br>
        <input type="submit" value="Enviar">
        </p>
    </form>
<?php
}
?>
