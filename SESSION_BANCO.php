<?php

    if(isset($_REQUEST['valor']) and ($_REQUEST['valor'] == 'enviado'))
    {
        session_start();

        $_SESSION['banco'] = $_POST ['nome_banco'];
        $_SESSION['conta'] = $_POST ['conta_banco'];
        $_SESSION['valor'] = $_POST ['valor_banco'];

        echo "<a href='SESSION_PEDIDO.php'>Enviando os dados!!</a>";
    }
    else
    {
        ?>
        <form name="form1" action="SESSION_BANCO.php?valor=enviado" method="POST">
            <p>Digite o seu banco:  <input type="text" name="nome_banco">
            <p>Digite a sua conta:  <input type="text" name="conta_banco" maxlength="9">
            <p>Digite o valor:  <input type="text" name="valor_banco"><br><br>
            <input type="submit" value="Enviar">
        </p>
        </form>
    <?php
    }
    ?>