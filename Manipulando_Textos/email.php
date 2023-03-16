<?php
// Heredoc e do Nowdoc são dois são duas formas de representação de strings, assim como os delimitadores de aspas simples e duplas, mais comumente utilizados.
function geraEmail(string $nome): void
{
    $conteudoEmail = <<<"FIM"
    Olá, $nome!
    
    Estamos entrando em contato para
    {motivo do contato}
    
    {assinatura}

    FIM;

    echo $conteudoEmail;
}

geraEmail('Vinicius Dias');