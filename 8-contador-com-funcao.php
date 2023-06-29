<?php 
     include "libs/funcoes-terminal.php";

     $fin = fopen("php://stdin", "r");
     $array = array();

     function exibirArray($array){
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
     }

     function swap(&$array, $item1, $item2){
          $aux = $array[$item2];
          $array[$item2] = $array[$item1];
          $array[$item1] = $aux;
     }

     function selectionSort($array){
          $ind1 = 0;
          while ($ind1 < count($array)-1){
               $ind2 = $ind1 +1;
               while ($ind2 < count($array)){
                    if($array[$ind2] < $array[$ind1]){
                         swap($array, $ind1, $ind2);
                    }
                    $ind2++;
               }
               $ind1++;
          }
          return $array;
          echo "Valores ordenados!\n";
     }

         
    do {
          quebraLinha();
          echo "Escolha uma opção: ";
          echo "\n[1] Incluir números rand\n[2] Exibir números\n[3] Remover item do Array\n[4] Alterar valor\n[5] Encontrar número no Array\n[6] Exibir números em ordem inversa\n[7] Somar valores do Array\n[8] Exibir o maior valor\n[9] Exibir o menor valor\n[10] Inverter primeira posição com a segunda\n[11] Verificar se há valores repetidos no Array\n[12] Ordenar itens do Array\n[0]Sair\n";
          quebraLinha();
          echo "Opcao n: ";
          $opcao = fgets($fin);
          switch ($opcao) {
               case 1:
                    $qtnum = ler_input ("Quantos numeros deseja criar?: ", $fin);
                    $qtJaAdd = 0;
                    while ($qtnum != $qtJaAdd) {
                         $rand = rand(1,100);
                         $array[] = $rand;
                         $qtJaAdd = $qtJaAdd + 1;
                         echo "Número adicionado: $rand\n";
                    }
                    break;

               case 2:
                    exibirArray($array);
                    quebraLinha();
                    break;
               
               case 3: 
                    $indRemove = ler_input("Qual posição do item que deseja remover?: ", $fin);
                    $indRemove--;
                    unset($array[$indRemove]);
                    $array = array_values($array);
                    $indRemove++;
                    echo "Item $indRemove removido!\n";                
                    break;   

               case 4:
                    $altInd = ler_input("Qual posição deseja alterar?: ", $fin);
                    $altInd--;
                    $valorAlterado = ler_input("Qual o novo valor a ser inserido?: ", $fin);
                    $array[$altInd] = "$valorAlterado";
                    echo "Valor alterado com sucesso!\n";
                    break;

               case 5:
                    $valorProc = ler_input("Qual valor deseja encontrar?: ", $fin);
                    $indice = 0;
                    while($indice < count($array)){
                         if($array[$indice]==$valorProc){
                              break;
                         }
                         $indice ++;
                    }
                    if ($indice < count($array)){
                         $indice++;
                         echo "O valor $valorProc está na posição $indice do Array\n";
                        
                    } else {
                         echo "O valor $valorProc não está presente no Array\n";
                        
                    }
                    break;

               case 6:
                    $indice = count($array)-1;
                    echo "Numeros em ordem inversa: ";
                         while ($indice >= 0) {
                              echo $array[$indice]." ";
                              $indice--;
                         }
                    quebraLinha();
                    break;

               case 7:
                    $indice = 0;
                    $soma = 0;
                    while ($indice < count($array)){
                         $soma = $array[$indice] + $soma;
                         $indice++;
                    }
                    echo "A soma dos valores do Array é igual a: ".$soma;
                    quebraLinha();
                    break;

               case 8:
                    $indice = 0;
                    $maiorValor = 0;
                    while ($indice < count($array)){
                         if($maiorValor < $array[$indice]){
                              $maiorValor = $array[$indice];
                         }
                         $indice++;
                    }
                    echo "O maior valor dentro do Array é: ".$maiorValor;
                    quebraLinha();
                    break;

               case 9:
                    $indice = 0;
                    $menorValor = 100;
                    while ($indice < count($array)){
                         if($menorValor > $array[$indice]){
                              $menorValor = $array[$indice];
                         }
                         $indice++;
                    }
                    echo "O menor valor dentro do Array é: ".$menorValor;
                    quebraLinha();
                    break;
                              
               case 10:
                    swap($array, 0, 1);
                    echo "Posição 1 e 2 invertidos!";
                    quebraLinha();
                    exibirArray($array);
                    quebraLinha();
                    break;

               case 11:
                    $indice1 = 0;
                    while($indice1 < count($array)-1){
                         $indice2 = $indice1 +1;
                         while($indice2 < count($array)){
                              if($array[$indice2] == $array[$indice1]){
                                   $valor = $array[$indice2];
                                   $posicao = $indice2 +1;
                                   echo "Valor $valor --- repetido na posição: $posicao\n";
                              }
                              $indice2++;
                         }
                         $indice1++;
                    }
                    break;

               case 12:
                    $array = selectionSort($array);
                    exibirArray($array);
                    quebraLinha();
                    break;

               case 0:
                    echo "Até logo.";
                    quebraLinha();
          }
     } while($opcao != 0);
?>