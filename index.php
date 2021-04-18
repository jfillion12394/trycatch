<?php


require_once "Car.php";

//créer ma voiture
$myCar =  new Car();
// serrer le frein à main
engageBrake($myCar);

   
try {
    start($myCar); //tenter un démarrage avec le frein à main serré
} catch(Exception $e){
    //erreur frein à main interceptée
    releaseBrake($myCar);   //desserrer le frein à main
    start($myCar);  // redémarrer la voiture
} finally {
    echo PHP_EOL."Ma voiture roule comme un donut !\n";
}


// quelques fonctions locales pour plus de lisibilité
function start($thisCar):void
    {
        echo  PHP_EOL. $thisCar->start();
    }

function releaseBrake($thisCar):void
    {
        $thisCar->setParkBrake(false);
    }

function engageBrake($thisCar):void
    {
        $thisCar->setParkBrake(true);
    }
