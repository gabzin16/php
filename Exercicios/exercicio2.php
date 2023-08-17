<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sintaxe geral</title>

    <style>
        .destaque {color: red;}
        .lindo {color: blue;}
        .casa {color: pink;}
        .paragrafo {color: yellow}
    </style>
</head>
<body>
    <h1 class="destaque">Trabalho com PHP</h1>
    <p>Programador : Gabriel Gonçalves da Silva</p>
    <hr>

    <?php
        echo "Chama Sesi-Senai!";

        echo "<h2>Gerando <span class='destaque'>HTML</span> Através do PHP.</h2>";
        echo "<h2>Sou <span class='lindo'>HTML</span> mt lindo mds.</h2>";
        echo "<h2>casalittle <span class='casa'>HTML</span> minha best.</h2>";
        echo "<h2>Gerando<span class=\"destaque\">HTML</span> através do PHP.</h2>";

    ?>

    <h1>HTML e PHP mesclados</h1>
    <p>Paragrafo HTML</p>

    <?php
        $linguagem = "Linguagem PHP.";
    ?>
    <p class="paragrafo">Pargrafo mesclando HTML<?=$linguagem?></p>
    <p class="casa">casalittle capenga<?=$linguagem?></p>

    
</body>
</html>