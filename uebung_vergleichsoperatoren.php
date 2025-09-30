<?php

/*
Erstelle 4 Variablen:
1. eine Zahl
2. Eine Zahl mit komma
3. ein Wort
4 ein Boolean (True)


Vergleiche die Zahl mit der Kommazahl und lasse dir einen Text ausgeben, ob die beiden inhaltlichen Werte gleich sind.

Vergleiche das Wort mit der Zahl und lasse dir einen Text ausgeben ob  diese beiden datentypisch zusammenpassen oder nicht.

Prüfe, ob die Zahl oder die Kommzahl größer als 10 ist und lass dir wieder einen Prüftext deiner Wahl ausgeben.

Prüfe, ob die Zahl oder die Kommazahl ein Boolean ist.

Prüfe ob dein Wort (String) den Text, "Hello World" beinhaltet. Falls nicht, ändere ihn und lass dir die Variable als Echo
*/

$int = 11;
$float = 10.5;
$string = 'Hello World!';
$bool = true;

if ($int == $float)
{
    echo $bool;
}
else
{
    echo $string;
}

//Teil 2
if ($string === $int)
{
    echo $bool;
}
else
{
    echo $string;
}

//Teil 3 Prüfe, ob die Zahl oder die Kommzahl größer als 10 ist und lass dir wieder einen Prüftext deiner Wahl ausgeben.
if ($int >= 10 || $float >= 10)
{
    if ($int >= 10)
        echo 'Die INT ist größer';
    else echo 'Der Float ist größer';}
else
    echo 'Keine VAR ist größergleich 10';{
    }

//Teil 4 Prüfe, ob die Zahl oder die Kommazahl ein Boolean ist.
if ($int === $bool || $float === $bool){
    echo 'Beide True';
}
elseif ($int === $bool){
    echo 'Int ist ein Bool, Float nicht';
}
elseif ($float === $bool){
    echo 'Float ist ein Bool, Int nicht';
}
else {
    echo 'Beide False';
}
