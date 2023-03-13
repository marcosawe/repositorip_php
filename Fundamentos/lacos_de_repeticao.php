<?php
    $registros = array( //Definição de um array
        array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'),
        array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'),
        array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'),
        array('titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4'),
    );

    print_r($registros);
    // $idx = 0;

    //count -> conta a quantidade de elementos de array
    echo 'O array possui ' . count($registros) . ' registros';
    /* 
    while ($idx < count($registros)) {
        echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
        echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

        echo '<hr />';

        $idx++;
    }
 */
    /* do {
        echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
        echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

        echo '<hr />';

        $idx++;
    } while ($idx < count($registros)); */
    

    
    
    /*
    for (expressão 1; expressão 2; expressão 3) {
        // bloco de código
    }
    */
    //Expressão 1: Executada somente uma vez, ao iniciar o loop. Normalmente a utilizamos para declarar e inicializar as variáveis que faremos uso para controlar o número de iterações do loop;
    //Expressão 2: Expressão booleana, validada antes de cada iteração do loop. Se a expressão contiver múltiplas expressões, todas serão executadas, mas somente o resultado da última será considerado. Se a expressão for vazia, ela será interpretada como verdadeira. O loop somente será executado enquanto essa expressão retornar true;
    //Expressão 3: Executada ao final de cada iteração, normalmente a utilizamos para declarar a forma de atualização do valor da variável avaliada na expressão 2.    

    ?>