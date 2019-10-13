<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    echo 

    $inteiro = 25, "mariana", "45";

    echo $decimal = 23.3; 

    echo $umCarac = "D";

    echo $outroCarac = 'A';

    echo $nome = 'Mariana', 24.4;

    echo $sobrenome = "Reis"; 

    var_dump ($inteiro);
    var_dump ($decimal);
    var_dump ($umCarac);
    var_dump ($outroCarac);
    var_dump ($nome);

    "<br>";

    
    $meuArray = array ("cavalo", "porco", "macaco", "pássaros", "cabrito", "gato", "rato",);
    var_dump ($meuArray);

    echo ("Eu gosto de: $meuArray[0], $meuArray[1], $meuArray[2] e $meuArray[3].");

    $meuArray[100] = "vaca";

    var_dump ($meuArray);

    $meuArray[16] = "tartaruga";

    var_dump ($meuArray);

    $meuCarro = [
        'proprietário' => 'Mariana', 'marca' => 'Renault', 'modelo' => 'Clio', 'Ano' => 2011, 'cor' => 'preto', 'placa' => 'EUJ5211'

    ];

    var_dump ($meuCarro);

    $meuCarro[16] = 'Évora seguradora';

    $inteiro = 18;
    $decimal = 15.5;

    echo ($inteiro + $decimal);
    echo ($inteiro - $decimal); 

    echo ($inteiro / $decimal);

    echo ($inteiro * $decimal);

    $divi = ($inteiro % $decimal);
    echo ($divi);

    echo ($inteiro + 1);
    echo ($inteiro + 5);
    echo ($decimal - 0.6);

    $resultado = (($inteiro * 2) + $decimal) / ($inteiro / 2);
    echo ($resultado);


    $var1 = 'Olá';
    $var2 = 'Mundo!';


    $saudacao = ($var1 . " " . $var2);
    echo ($saudacao);


    $final = ($saudacao . " " . 'PHP é o máximo.');
    echo ($final);

    ?>
</body>
</html>