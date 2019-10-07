<?php
include_once('de.php');
$empfaenger1="m@marcus-mende.de";
$empfaenger2="Mendes.Garage@gmx.de";
$betreff="Website Anfrage";
$botschaft="Folgende Nachricht wurde von deiner Internetseite geschickt:\n\n";
/* EDITIEREN ENDE */
/* Schleife liest Attribut-Werte-Paare aus: */
if(!empty($_POST['sec_answer']) && $_POST['sec_answer']!='17') exit;

foreach($_POST as $name=> $value) {
        if($name!="x" && $name!="y") $botschaft.="$name: $value\n"; 
            #echo $name." ".$value;
    }
    $absender=$_POST["E-Mail"];
    if(mail($empfaenger1, $betreff, $botschaft, "From: $absender")) {
        #mail($empfaenger2, $betreff, $botschaft, "From: $absender")
            /* War mail() erfolgreich? Dann sieht Benutzer folgende Zeilen */
        echo $thankyou;
    }
    /* Sonst gibt es eine Fehlermeldung: */
    else {
            echo $error;
    }
?>
