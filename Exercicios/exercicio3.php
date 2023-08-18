<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>

    <style>
        .titulos {color: red;}
        .subtitulos {color: blue;}
    </style>
</head>
<body>
    <!-- Numeros inteiros -->
    <h1 class="titulos">Tipos de dados numéricos no PHP</h1>
    <br><hr>
    <h2 class="subtitulos">Números Inteiros</h2>
    <p>Tipo: int</p>

    <!-- Código PHP para números inteiros. -->

    <?php
    echo 1;
    echo "<br>";
    echo 8;
    echo "| Valores inteiros. <br>";
    echo 10 + 9;
    echo "| Soma de inteiros. <br>";
    echo -30;
    echo "| Números negativos. <br>";
    echo 10-20;
    echo "| Soma com negativo. <br>";

    $n=4;
    echo $n;
    echo "| Alimentar variável e recuperar valor. <br>";

    ?>

    <!-- Is_int -->
    <p> a função is_int() é usada para saber se um numero ou variavel é inteiro</p>
     <!-- Código PHP para função is_int -->
     <?php

if(is_int(9)) { // true 
    echo "É um inteiro <br>";
 }

if(is_int("Não é um inteiro")) { // false 
    echo "É um inteiro 2 <br>";
}

$a = 15;

if(is_int($a)) { // true
     echo "É um inteiro 7 <br>";
    }   
?>

<!-- _________________________________________________________________________________________________________ -->

    <!-- Float-->
    <br><hr>
    <h2 class="subtitulos">Números de ponto flutuante</h2>
    <p>Tipo: float</p>
       <!-- Código PHP para números tipo float -->

       <?php
        //alimentar variavel
        $a =1.20;
        echo $a;
        echo "<br>";

        //Mostrar o valor diretamente
        echo 2.48;
        echo "<br>";

        //Realizar operações matemáticas
        echo 12.3 + 1.4578;
        echo "<br>";

        //Inclusive somar int com float
        echo 20 + 1.3258;
    ?>

<!-- ___________________________________________________________________________________________________ -->

    <!-- String -->
    <br><hr>
    <h1 class="titulos">Tipos de dados texto no PHP</h1>
    <p>Uma string é uma série de caracteres, onde um caractere é o mesmo que um byte.</p>
    <ul>
        <li>aspas simples</li>
        <li>aspas duplas</li>
    </ul>
    
    <!-- Código PHP para tipos de string -->
    <?php

    echo "Testando texto de aspas duplas <br>";
    echo "Testando texto de aspas simples <br>";
    echo "<br><p>Para exibir uma aspas, inicie a string com a outra.<p>";
    echo "Ele disse: 'Adoro o senai' <br>";
    echo "Ele disse: 'quero imbora' <br>";

    echo "<br><p>O valor é passado para a variável e depois recuperado na string.<p>";
    $idade = 15;

    echo "Ele tem $idade anos <br>";
    echo 'Ele tem $idade anos';
   
    ?>
    
    <br><hr>
    <h2 class="subtitulos">Função de verificação de string</h2>
    <p>Para saber se uma variável é string usamos a função is_string()</p>

    <!-- Código PHP para verificar strings -->
    <?php

        $str = "EU";
        $num = 118;

        if(is_string($str)) {
            echo "$str é uma string 1 <br>";
        }

        if(is_string($num)) {
            echo "$num é uma string 2 <br>";
        }

        if(is_string("asd")) {
            echo "É uma string 3 <br>";
        }

    ?>

<!-- _______________________________________________________________________________ -->

    <!-- Boleanos-->
    <br><hr>
    <h1 class="titulos">Tipos de dados booleano no PHP</h1>
    <p>O tipo bool tem apenas dois valores. True (Verdadeiro) ou False (falso).</p>
    <p>Tipicamente, o resultado de um valor bool, é passado para uma estrutura de controle.</p>
    <ul>
        <li>Se for verdadeiro ... </li>
        <li>Enquanto for verdadeiro ... </li>
        <li>Até deixar de ser verdadeiro ... </li>
    </ul>
     <!-- Código PHP para booleanos -->
     <?php

echo TRUE;
echo "<br>";
echo false;

if(true) {
     echo "É verdadeiro! <br>";
}

if(4 > 3) {
    echo "É verdadeiro! <br>";
}

$podeEntrar = true;

if($podeEntrar) {
     echo "O usuário pode entrar";
}

?>

<br><hr>
<h2 class="subtitulos">Função de verificação de Booleanos</h2>
<p>Para saber se é booleano usamos a função is_bool()</p>

<!-- Código PHP para verificar booleanos -->
<?php

$a = true;

if(is_bool($a)) {
echo "É um booleano 1 <br>";
}

if(is_bool(0)) {
echo "É um booleano 2 <br>";
}

if(is_bool(false)) {
echo "É um booleano 3 <br>";
}
if(is_bool(0.0 == false)) {
echo "0 é considerado falso! <br>";
}

?>

<!-- ___________________________________________________________________________________________________ -->

    <!-- Array -->
    <br><hr>
    <h1 class="titulos">Tipos de dados array no PHP</h1>
    <p>Um array, é basicamente uma lista.</p>
    <hr>
    <p>Arrays são essenciais para armazenar, gerenciar, e operar sobre um conjunto de variáveis.</p>
    <hr>
    <p>Veja 2 exemplos:</p>
    
    <!-- Código PHP para arrays -->
    
<?php
    echo "<p>Sintaxe NORMAL: Usa o nome e põe os valores entre parenteses.<p>";
    $a = array (1, 38, 3, 4);

    print_r($a);
    echo "<br>";

    echo "<p>O primeiro valor da lista é: $a[0]</p>";
    echo "<br><hr><p>Sintaxe CURTA: NÃO usa o nome e põe valores entre colchotes.</p>";

    $arr = ["SENAI", 449, true];

    echo "<br>";
    print_r($arr);
    echo "<br>";
    print_r($arr[1]);
    echo "<br><p>O Segundo valor da lista é: $arr[1]</p>";

    ?>
    
</body>
</html>