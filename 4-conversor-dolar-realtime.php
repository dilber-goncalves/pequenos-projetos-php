<?php
/* fazer menu para escolher opcao de converter dolar -> real ou vice-versa*/

    //Conversor de moedas com API do Banco Central
    $datainicio = date("m-d-Y", strtotime("-7 days") );
    $datafim = date("m-d-Y");

    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$datainicio.'\'&@dataFinalCotacao=\''.$datafim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true); //true trata como array e false como objeto
    $cotacao = $dados["value"][0]["cotacaoCompra"]; // Dados obtidos através da url gerada no php
    //var_dump($dados); para trazer as informações na url

    $fin = fopen("php://stdin", "r");

    do {
        echo "ESCOLHA A OPCAO DESEJADA";
        echo PHP_EOL;
        echo "[1] Para converter DOLAR -> REAL\n[2] Para converter REAL -> DOLAR\n[3] Sair\n";
        echo "Opcao n: ";
        $opcao = fgets ($fin);
        switch ($opcao) {
            case 1:
                echo "Digite o valor em U$: ";
                $valorDigitado = fgets($fin);
                $valorDigitado = rtrim($valorDigitado, "\n\r");
                $valoremDolar = ($valorDigitado * $cotacao);
                $valoremDolar = number_format($valoremDolar, 2, '.', '');
                echo "O valor cotado atualmente e de R$ $valoremDolar\n";
                break;

            case 2:
                echo "Digite o valor em R$: ";
                $valorDigitado = fgets($fin);
                $valorDigitado = rtrim($valorDigitado, "\n\r");
                $valoremReal = ($valorDigitado / $cotacao);
                $valoremReal = number_format($valoremReal, 2, '.','');
                echo "O valor cotado atualmente e de R$ $valoremReal\n";
                break;
            
            case 3:
                echo "Obrigado!";
            }
        } while ($opcao != 3);         
?>