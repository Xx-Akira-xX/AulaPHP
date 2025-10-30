<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de professores</title>

    <link rel="stylesheet" href="estilos.css">

</head>
<body>

    <?php include "menu.php"?>

    <form action="#" method="post">
    
        <h2>Cadastro de professores<h2>

        <p>
            Informe o nome do professor: <br>
            <input type="text" name="nome">
        </p>

        <p>
            Informe sua área de formação: <br>
            <input type="text" name="formacao">
        </p>

        <p>
            Informe a graduação do professor: <br>
            <input type="text" name="prof">
        </p>

        <p>
            <input type="submit" name="enviar" value="Cadastrar">
        </p>

    </form>
    
</body>
</html>