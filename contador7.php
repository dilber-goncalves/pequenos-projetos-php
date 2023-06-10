<?php 
/*
Incluir pergunta de quantos numeros deseja inserir
*/
     $fin = fopen("php://stdin", "r");
     $array = array();
     $repetidos = array();
    
    do {
          echo PHP_EOL;
          echo "Escolha uma opção: ";
          echo "\n[1] Incluir números rand\n[2] Exibir números\n[3] Remover item do Array\n[4] Alterar valor\n[5] Encontrar número no Array\n[6] Exibir números em ordem inversa\n[7] Somar valores do Array\n[8] Exibir o maior valor\n[9] Exibir o menor valor\n[10] Inverter primeira posição com a segunda\n[11] Verificar se há valores repetidos no Array\n[0]Sair\n";
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
                    break;

               case 5:
                    echo "Qual valor deseja encontrar?\n";
                    $valorProc = fgets($fin);
                    $valorProc = rtrim($valorProc, "\n\r");
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
                    echo PHP_EOL;
                    break;

               case 7:
                    $indice = 0;
                    $soma = 0;
                    while ($indice < count($array)){
                         $soma = $array[$indice] + $soma;
                         $indice++;
                    }
                    echo "A soma dos valores do Array é igual a: ".$soma;
                    echo PHP_EOL;
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
                    echo PHP_EOL;
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
                    echo PHP_EOL;
                    break;
                              
               case 10:
                    $valorinvert[] = $array[0];
                    $valorinvert[] = $array[1];
                    $array[0] = $valorinvert[1];
                    $array[1] = $valorinvert[0];
                    echo "Posição 1 e 2 invertidos!";
                    break;

               case 11:
                    $indice = 0;
                    $valorposicao = 0;
                    while($indice < count($array)){
                         $intind = $indice;
                         while($intind < count($array)){
                              $valorposicao = $array[$intind];
                              while($intind < count($array)-1){
                                   $intind++;
                                   if($valorposicao == $array[$intind]){
                                        $intind++;
                                        echo "Valor $valorposicao --- repetido na posição: $intind\n";
                                        $intind--;
                                   }
                              }
                              $intind++;
                         }     
                         $indice++;
                    }
                    break;

               case 0:
                    echo "Até logo.";
                    echo PHP_EOL;
          }
     } while($opcao != 0);
?>