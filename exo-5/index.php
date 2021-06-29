<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice5</title>
</head>

<body>
    <h2>Créez un tableau associatif contenant comme clé des numéro de département et comme valeurs les départements correspondants.
        <br> Affichez les départements et leurs clés respectives.</h2>
    
        <?php

$france['75'] = "Paris";
$france['10'] = "Aube";
$france['91'] = "Essone";

foreach($france as $x => $x_value) {
  echo " $x = $x_value";
  echo "<br>";
}

?>

</body>

</html>