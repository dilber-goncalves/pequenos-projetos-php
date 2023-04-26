<?php 
/*
Incluir pergunta de quantos numeros deseja inserir
*/
     $fin = fopen("php://stdin", "r");
     $array = array();
     
     
    
    do {
          echo "Escolha uma opção: ";
          echo "\n[1] Incluir Números\n[2] Exibir Números\n[3] Remover item do Array\n[4] Sair\n";
          echo "Opcao n: ";
          $opcao = fgets($fin);
          switch ($opcao) {
               case 1:
                    echo "Quantos numeros deseja criar?: ";
                    $qntNum = fgets($fin);
                    $qntNum = rtrim($qntNum, "\n\r");
                    //deve passar pela repetição o numero de vezes definido pelo usuário
                    $qtJaAdd = 0;
                    while ($qntNum != $qtJaAdd) {
                         $rand = rand(1,100);
                         $array[] = $rand;
                         $qtJaAdd = $qtJaAdd + 1;
                         echo "Número adicionado: $rand\n";
                    } ;
                    break;

               case 2:
                    $indice = 0;
                    if (count($array)>0) { 
                         echo "Numeros no array: ";
                         while ($indice < count($array)) {
                              echo $array[$indice]." ";
                              $indice ++;
                         } 
                    }
                    else {
                         echo "Voce nao possui numeros informados!";
                    }
                    echo PHP_EOL;
                    break;
               
               case 3: 
                    //qual item remover do array
                    echo "Qual posição do item que deseja remover?\n";
                    $numRemove = fgets($fin);
                    $numRemove = rtrim($numRemove, "\n\r"); 
                    $indRemove = $numRemove -1;
                    unset($array[$indRemove]);
                    $array = array_values($array);
                    echo "Item $numRemove removido!\n";                
                    break;   


               case 4:
                    echo "Até logo.";
          }
     } while($opcao != 4);
?>