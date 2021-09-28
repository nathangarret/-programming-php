<?php

    session_start();
    echo "Os dados recebidos foram: <br><br>";
    echo "Nome: " . $_SESSION['nome'] . "<br>";
    echo "CPF:  " . $_SESSION['cpf'] . "<br>";
    echo "Banco:    " . $_SESSION['banco'] . "<br>";
    echo "Valor:    " . $_SESSION['valor'] . "<br><br>";
?>
    <form name="form1" action="SESSION_CADASTRO.php">
    <input type="submit" value="Voltar">
    </form>