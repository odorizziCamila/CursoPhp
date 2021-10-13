<?php

// Echo 
// É a instrução mais utilizada para apresetar conteúdo PHP num página web.
//Também podemos usar o print, mas é ligeramente mais lento e tem menos potencial. Podemos usar o echo com ou sem parênteses(é uma construção especia do PHP). Pode ser usado com mútiplos parâmetros.

?>

<?php
    $nome = "Camila";
    $apelido = "Ribeiro";
?>
<!DOCTYPE html>
<html lang ="eng">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Echo php</title>
        <style>
        .texto-vermelho{
            color:red;
        }
        </style>
    </head>
    <body>
        <?php echo $nome.' '.$apelido?><br>
        <?php echo "$nome $apelido"?><br>
        <?php echo $nome, " ", $apelido?>
        <?php echo "<h3> $nome $apelido </h3>"?>
        <?php echo "<h3 class=\"texto-vermelho\">$nome $apelido</h3>"?>
        <?php echo '<h3 class="texto-vermelho">',"$nome $apelido","</h3>"?>
        <?= '<h3 class="texto-vermelho">',"$nome $apelido","</h3>"?>
        <p> Nome do cliente: <?="<strong>$nome $apelido</strong>"?></p>
        <p><?= substr($apelido,0,4)?></p>
    </body>
</html>