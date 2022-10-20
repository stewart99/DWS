<?php

class Calculadora{

    function factorial($x){

        if($x == 0){

            return 1;


        }else{

            return $x * $this->factorial($x-1);

        }


    }


    function coeficienteBinomial($n,$k){





        return ($this->factorial($n)) / ($this->factorial($k) * $this->factorial($n-$k));


    }







    function convierteBinarioDecimal($binario){

        $potencia=strlen($binario)- 1;
        $total=0;
        $contador = 0;
        while($potencia >= 0){
        
        
            if($binario[$contador] == "1"){
        
        
        
                $total=$total + 2**$potencia;
        
                
        
            }
        
            $potencia--;
        
        
        
            $contador++;
        
        
         
        }
        
        return $total;
        
        
        }
        
           
        
           
           

function sumaNumerosPares($pares){

 
    $total=0;

   for ($i=0; $i < sizeof($pares); $i++) { 


    if($pares[$i] % 2 == 0){

     $total = $total + $pares[$i];


    }
   
   }

 return $total;
}




function esPalindromo($palabra,$comparar){
    

    if(strrev($palabra) == $comparar){


        return TRUE;
    }else{


        return FALSE;
    }
  

   

}


function sumaMatrices($matriz1,$matriz2){

   
 
    $maxFilas = count($matriz1);

    for($i=0; $i < $maxFilas ; $i++) { 

        echo "<br>";

    $max_columnas= count($matriz1[$i]);

    for ($j=0; $j < $max_columnas; $j++) { 

     echo "[". $matriz1[$i][$j] + $matriz2[$i][$j] . "]";

        
    }  
    
    
 
    }
}






}




/*

function convierteBinarioDecimal($binario){

$potencia=strlen($binario)- 1;
$total=0;
$contador = 0;
while($potencia >= 0){


    if($binario[$contador] == "1"){



        $total=$total + 2**$potencia;

        

    }

    $potencia--;



    $contador++;


 
}

return $total;


}

   

   
   
}





*/

