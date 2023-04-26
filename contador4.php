<?php 
/*
Incluir pergunta de quantos numeros deseja inserir
*/
     $fin = fopen("php://stdin", "r");
     $array = array();
     
     
    
    do {
          echo "Escolha uma opção: ";
          echo "\n[1] Incluir Números Rand\n[2] Exibir Números\n[3] Remover Item do Array\n[4] Alterar Valor\n[5]Sair\n";
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
                    echo "Qual posição deseja alterar?\n";
                    $altInd = fgets($fin);
                    $altInd = rtrim($altInd, "\n\r");
                    $altInd = $altInd -1;
                    echo "Qual o novo valor a ser inserido?\n";
                    $valorAlterado = fgets($fin);
                    $valorAlterado = rtrim($valorAlterado, "\n\r");
                    $array[$altInd] = "$valorAlterado";
                    echo "Valor alterado com sucesso!\n";

               case 5:
                    echo "Até logo.";
          }
     } while($opcao != 5);
?>