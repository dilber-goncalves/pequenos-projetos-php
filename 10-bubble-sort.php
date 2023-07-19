<?php 
$array = array('91', '50', '25', '78', '56', '21', '54', '2');


        
//buble sort
do{
     $fezSwap = false;
     $item1 = 0;
     $item2 = 1;
     do{
          if($array[$item1]>$array[$item2]){
               $aux = $array[$item2];
               $array[$item2] = $array[$item1];
               $array[$item1] = $aux;
               $fezSwap = true;
          }
          $item2++;
          $item1++;
     }while($item1 != count($array)-1);
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
}while($fezSwap == true);



echo "Numeros ordenados\n";



?>