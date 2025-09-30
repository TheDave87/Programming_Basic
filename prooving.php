<?php
//comment
# ich bin ein Kkommentar
#echo 'Hello world!'; // ich bin eine Ausgabe kein Cosoloen log

//Variablen in PHP benötigen vor ihrem Namen ein dollarzeichen

$int_zahl = 3; //Deklariert als $Zahl mit dem zugewiesenen Wert 3 (Definition)

$wort = '3'; //Hier wird der Wert 3 als String gespeichert

$float_zahl = 3.14; //Hier wird der Wert 3.14 als Float gespeichert

$bool_wahr = true;

$bool_falsch = false;



if ($int_zahl === $wort) //Prüft genaustens, ob die Variablen vom gleichen Typ sind
    {
        echo $bool_wahr;
    }
else //falls nicht, gebe das aus
    {
        echo $bool_falsch;
    }

//Vergleichsoperatoren

// == und === (Das eine prüft inhaltlich das andere vom Datentyp)
// != (Nicht gleich) !== (Nicht gleich und vom gleichen Datentyp)
// && (und) || (oder)

// % Modulo operator

echo $int_zahl % 2;