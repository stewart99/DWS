<!doctype html>
<html>
<head>
    <title>Esto es el titulo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
            require("Calculadora.php");

            $factor = new Calculadora();


            echo  "Potencia " .$factor->factorial(5) . "<br>";
            echo "coeficiente " . $factor->coeficienteBinomial(5,2) . "<br>";
            echo "Binario a decimal " . $factor->convierteBinarioDecimal("1011") . "<br>";

            $numerosPares= [1,2,4,6,8,10,12,16];
            echo "Suma de Numeros Pares ". $factor->sumaNumerosPares($numerosPares) ."<br>";



           
            if($factor->esPalindromo("amor","roma") == TRUE){

                echo "Es Palindromo";

            }else{


                echo "No es un Palidromo";

            }




            $matrizA=array(
                array(3,6),
                array(1,2)
        );

        $matrizB=array(
            array(2,3),
            array(2,2)
    );

            echo "<br>Matrizes";
            echo $factor->sumaMatrices($matrizA,$matrizB);

    ?>  



</body>
</html>