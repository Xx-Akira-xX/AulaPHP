<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cursos</title>

    <link rel="stylesheet" href="estilos.css">

</head>
<body>

    <?php include "menu.php"?>

    <form action="curso_cadastro1.php" method="post">

        <h2>Cadastro de Cursos<h2>   

        <p>
            Informe o nome do curso: <br>
            <input type="text" name="curso">
        </p>

        <p>
            Informe o nome do coordenador: <br>
            <input type="text" name="coordenador">
        </p>

        <p>
            <input type="submit" name="enviar" value="Cadastrar">
        </p>

    </form>
    
</body>
</html>