<?php
//Para tormar decisões em um fluxograma de código utilizamos as cadeias de código IF, ELSE, ELSE IF 

// Variáveis
$idade = 21;
$numeroDePessoas = 1;

// IF - Inicia o fluxograma de código gerado por uma condição verdadeira;
if ($idade > 18) {
    echo "Você tem $idade anos. Pode entrar" . PHP_EOL;
}
echo PHP_EOL;

//ELSE - Encerra a cadeia do fluxograma com uma decisão final;
echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;
echo "Adeus!";
echo PHP_EOL;

//ELSE IF - Dá continuidade ao fluxograma do sistema;
if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos e está acompanhado(a), então pode entrar.";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;
echo "Adeus!";