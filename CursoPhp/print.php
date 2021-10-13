<?php
// Print

// O print é uma construção da linguagem PHP muito semelhante ao echo. As principais diferenças são:
    //1. print apenas aceita um argumento.
    //2. print retorna sempre o valor 1.

$nome = "Camila";
$sobrenome = "Odorizzi";
 print "$nome $apelido <br>"; //valido
 print $nome.' '.$apelido.'<br>';//também é válido

 if(print($nome)){
     print("$apelido");
 }