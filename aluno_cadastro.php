<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de alunos</title>

    <link rel="stylesheet" href="estilos.css">

</head>
<body>

    <?php include "menu.php"?>

    

    <form action="aluno_cadastro1.php" method="post">

        <h2>Cadastro de alunos<h2>   

        <p>
            Informe o nome do aluno: <br>
            <input type="text" name="nome">
        </p>

        <p>
            Informe o estado do aluno <br>
            <input type="text" name="estado">
        </p>

        <p>
            Informe a cidade do aluno <br>
            <input type="text" name="cidade">
        </p>

        <p>
            <input type="submit" name="enviar" value="Cadastrar">
        </p>

    </form>
    
</body>
</html>