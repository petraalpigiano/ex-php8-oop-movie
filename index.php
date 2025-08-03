<?php

require_once './Traits/Plot.php';
require_once './Models/Genre.php';
require_once './Models/Movie.php';


$inception = new Movie("Inception", "Christopher Nolan", "Leonardo di Caprio", 2010);
$inception->getYear(2010);
$inception->setGenre(new Genre("sci-fi", 16));
$inception->setGenre(new Genre("azione", 16));
echo "<br>";
$inception->getDescription("Dom Cobb possiede una qualifica speciale: è in grado di inserirsi nei sogni altrui per prelevare i segreti nascosti nel più profondo del subconscio. Viene contattato da Saito, un potentissimo industriale giapponese");
echo "<pre>";
var_dump($inception);
echo "</pre>";

$thePrestige = new Movie("The prestige", "Christopher Nolan", "Christian Bale", 2006);
$thePrestige->getYear(2006);
$thePrestige->setGenre(new Genre("thriller", 16));
$thePrestige->setGenre(new Genre("sci-fi", 16));
echo "<pre>";
var_dump($thePrestige);
echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>