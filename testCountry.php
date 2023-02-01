<?php
// Schneider Arthur
declare(strict_types = 1);
require_once "Country.php";
//fonction d'autre ex
function decodeBooleen(bool $boul): string
{
    $rep = "Faux";
    if ($boul)
        $rep = "Vrai";
    return $rep;
}

//Qesution 1
$france = new Country("France", 641185.0, 66600000);
$france->print();

//question 2
$italie = new Country("Italie");
$italie->print();
$italie->setPopulation(60626442);
$italie->setSurface(301336);
$italie->print();

//question 3
$country1 = new Country();
$country2 = new Country("land2,",12500);
$country1->print();
$country2->print();

// question 4
$copieFrance = new Country($france->getName(), $france->getSurface(), $france->getPopulation());
$copieFrance->print();
$france->print();

echo decodeBooleen($france->isEqual($copieFrance)),"\n";

// question 5
echo $france->getName(),"\n";
echo $italie->getSurface(),"\n";
echo $country1->getPopulation(),"\n";
$copieFrance->setName("copieFrance");
$country1->setSurface(-1);
$copieFrance->setPopulation(-1);

$france->print();
$italie->print();
$country1->print();
$copieFrance->print();
$country2->print();
echo decodeBooleen($france->isEqual($copieFrance)),"\n";

// question 6
function copie(Country $land):Country
{
    return new Country($land->getName(), $land->getSurface(), $land->getPopulation());
}
$copieItalie = copie($italie);


//question 7
function printCountry(Country $land)
{
    $name = $land->getName();
    $sur = $land->getSurface();
    $pop = $land->getPopulation();
    echo "$name\n  surface : $sur\n  population : $pop\n";
}
$copieItalie->print();
printCountry($copieItalie);