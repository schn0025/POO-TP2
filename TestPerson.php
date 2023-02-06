<?php
// Schneider Arthur
declare(strict_types = 1);
require_once "Person.php";

/* question 11
$inconnu = new Person ;
$inconnu->print();
var_dump ( $inconnu ) ;
*/

//question 13
$Link = new Person('LinkNom', 'Link', 121);
$Link->print();

//question 14
$jacques = new Person("Durand" , "Jacques" );
$jacques->print();

// question 15
$jules = new Person("Durand");
$inconnu = new Person;
$jules->print();
$inconnu->print();

// question 16
$nomInconnu = $inconnu->getLastName();
echo "$nomInconnu\n";

// question 17
$prenomInconnu =$inconnu->getFirstName();
$ageInconnu = $inconnu->getAge();
echo "$prenomInconnu\n";
echo "$ageInconnu\n";

// question 18
$copie = new Person($jacques->getLastName(), $jacques->getFirstName(), $jacques->getAge());

// question 19
echo "{$jacques->getAge()}\n";
$jacques->setAge(26);
echo "{$jacques->getAge()}\n";

// question 20
echo "test sur un inconnu\n     av modif\n";
$inconnu->print();
$inconnu->setLastName('MrTest');
$inconnu->setFirstName('test');
$inconnu->setAge(35);
echo "     après modif\n";

$inconnu->print();
echo "fin test sur un inconnu\n";

// question 21
echo "$jacques\n";