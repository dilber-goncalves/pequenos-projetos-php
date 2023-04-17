<?php 
/*
Incluir nova opcao no menu para gerar numeros aleatorios e inseri-los no array
*/
     $fin = fopen("php://stdin", "r");
     $array = array();
     
    
    do {
          echo "Escolha uma opcao: ";
          echo "\n[1] Incluir Número\n[2] Gerar num aleatorio\n[3] Exibir Números\n[4] Sair\n";
          echo "Opcao n: ";
          $opcao = fgets($fin);
          switch ($opcao) {
               case 1:
                    echo "Insira o número: ";
                    $novoNum = fgets($fin);
                    $novoNum = rtrim($novoNum, "\n\r");
                    //array_push($array, $novoNum);
                    $array[] = $novoNum;
                    echo "Número armazenado. Obrigado!\n";
                    break;

               case 2:
                    $random = rand(1,50);
                    $array[] = $random;
                    echo "Numero $random armazenado\n";
                    break;

               case 3:
                    //print_r($array);
                    //echo $array[0].",".$array[1];
                    //echo "O array possui ". count($array)." elementos.\n";
                    $indice = 0;
                    if (count($array)>0) { 
                         echo "Numeros no array: ";
                         while ($indice < count($array)) {
                              echo $array[$indice]." ";
                              $indice ++;
                         } 
                    }
                    else {
                         echo "Voce nao informou nenhum numero!";
                    }
                    echo PHP_EOL;
                    break;

               case 4:
                    echo "Até logo.";
          }
     } while($opcao != 4);
?>