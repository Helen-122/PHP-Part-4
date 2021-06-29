<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice3</title>
</head>
<body>
<h2>Créez un tableau associatif contenant comme clé des chiffres de 1 à 5 et comme valeurs cinq langage de programmation.<br>
 Affichez le troisième langage.</h2>
<?php

//
 // $programmation = array(
 
 //     '1' => 'JavaScript <br>', 
 //     '2'=> 'PHP<br>', 
  //    '3'=> 'Pyhthon<br>', 
  //    '4' => 'C++<br>',
  //    '5'=>'Java<br>'
 // );

 $programmation['1'] = "JavaScript";
$programmation['2'] = "PHP";
$programmation['3'] = "Python";
$programmation['4'] = "C++";
$programmation['5'] = "Java";
var_dump($programmation);

echo "$programmation[3]";

?>

</body>
</html>