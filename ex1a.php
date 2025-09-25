<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    
    <h1></h1>

    <?php


    
        if ($_REQUEST["Enviar"]){

            $cliente=$_REQUEST["cliente"];
            $sexo=$_REQUEST["sexo"];
            $valorCompra=$_REQUEST["valorCompra"];

            if($sexo == "Feminino") {
                $desconto = 20/100;
                $total = $valorCompra - $desconto;

                echo "<p>Bem-vinda! $cliente";
                echo "<br>Você recebeu um desconto de: $desconto";

            }
            else($sexo == "Masculino") {
                $desconto = 5/100;
                $total = $valorCompra - $desconto;

                echo "<p>Bem-vindo! $cliente";
                echo "<br>Você recebeu um desconto de: $desconto";

            }

        }
    
    ?>


</body>
</html>