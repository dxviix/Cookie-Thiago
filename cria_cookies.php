<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie</title>
</head>
<body>
    <?php
        $nome = $_GET["nome"];
        $cidade = $_GET["cidade"];

        setcookie("nome", "$nome");
        setcookie("cidade", "$cidade");
        header("location: mensagem.php");
    ?>
</body>
</html>