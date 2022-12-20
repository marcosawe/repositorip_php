<?php
    // É utilizado para criar situações condicionais simples
    // $variavel = $condicao ? $valorSeVerdadeiro : $valorSeFalso;
        $recebeu_desconto_frete = true;
        $teste = $recebeu_desconto_frete ? 'SIM' : 'NÃO';
        echo var_dump($teste);
        // if ($recebeu_desconto_frete) {
        //     echo 'SIM';
        // } else {
        //     echo 'NÃO';
        // }