<?php
// Caractéres especiais no php que funcionam no terminal
/*
    Principais caractéres do php
\n	Nova linha (LF ou 0x0A (10) em ASCII)
\r	Retorno de carro (CR ou 0x0D (13) em ASCII)
\t	Tabulação horizontal (HT ou 0x09 (9) em ASCII)
\v	Tabulação vertical (VT ou 0x0B (11) em ASCII)
\e	Escape (ESC or 0x1B (27) em ASCII)
\f	Form feed (FF ou 0x0C (12) em ASCII)
\\	Contra barra ou barra invertida
\$	Sinal de cifrão
\"	aspas duplas
\[0-7]{1,3}	A sequência é interpretada como um caractere em notação octal, que silenciosamente é extravasada para caber em um byte (e.g. "\400" === "\000")
\x[0-9A-Fa-f]{1,2}	A sequência é interpretada como um caractere em notação hexadecimal
\u{[0-9A-Fa-f]+}	A sequência é interpretada como um codepoint Unicode, que será impresso como uma string com a representação desse codepoint UTF-8

*/

$idade = 21;

// Quebra de linha no prompt de comando

echo "Olá mundo! <br>";

echo "Eu tenho $idade anos.";

// Para a quebra de linha sem eventuais problemas indepedêntemente de sistema operacional utilizamos


echo "Olá mundo!" .PHP_EOL;

echo "Eu tenho $idade anos.";