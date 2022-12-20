<?php
// AND OR NOT são estruturas de comparação e encadeamento com outras estruturas presentes dentro do fluxograma, e retornam verdadeiro ou falso repeitando a tabela verdade;

// &&(AND) - Todas as estruturas presentes dentro de AND precisão ser verdadeiras para que ela retorne verdadeiro;
$var1 = true && true && true;
echo var_dump($var1); // var_dump faz debug de variáveis, classes e funções.

// ||(OR) - Pelo menos uma estruturas presente dentro de OR precisão ser falsa para que ela retorne verdadeiro;
$var2 = true || true || true || false;
echo var_dump($var2);

// !(NOT) - Retorna a negação da afirmação seja ela verdadeira ou falsa
$var3 = !true;
echo var_dump($var3);

// XOR - Retorna se pelo menos uma das afirmações for verdadeira
$var4 = 4 ==4 XOR 9==5;
echo var_dump($var4);
