<?php
// Casting -> É um modelo de conversão de dados utilizado para que se possa utilizar um dado de um determindo tipo

/* Tipos de Conversão */
// INT -> (FLOAT),(STRING);
// FLOAT -> (INT),(STRING);
// STRING -> (INT),(FLOAT),(BOOLEAN);
// BOOLEAN -> (INT),(FLOAT);

    //gettype() => retorna o tipo da variável
    $valor = 10;
    $valor2 = (float) $valor; //float, double ou real
    $valor3 = (string) $valor; 

    echo $valor. ' ' . gettype($valor);
    echo '<br />';
    echo $valor2. ' ' .gettype($valor2);
    echo '<br />';
    echo $valor3. ' ' .gettype($valor3);
    
    //converter de string para int
    $valor4 = '22.12';
    $valor5 = (integer) $valor4;
    echo '<br />';
    echo $valor5. ' ' .gettype($valor5);
    