<table style="width:100%; font-size:10pt;">
<tr>
<td valign=top width=40% align=center>
<table border=0><tr><td>
<h3><?php echo $imprint;?></h3>
<?echo $owner;?>: Michael Mende<br>
Buzon 313 - ctra. Denia<br>
Ondara km 1 Local 19<br>
03700 Denia Alicante<br>
Ust.Id Nr.: ES X-4646741-M
</td></tr></table>
</td>
<td align=right>
<br><br>
		<?php
		$empfaenger1="m@marcus-mende.de";
		$empfaenger2="Mendes.Garage@gmx.de";
		$betreff="Website Anfrage";
		$botschaft="Folgende Nachricht wurde von deiner Internetseite geschickt:\n\n";
		/* EDITIEREN ENDE */
		/* Schleife liest Attribut-Werte-Paare aus: */
		if(!empty($_POST['sec_answer']) && $_POST['sec_answer']!='17') exit;
		foreach($_POST as $name=> $value) {
	    	    if($name!="x" && $name!="y" && $name!="sec_answer") $botschaft.="$name: $value\n"; 
		    #echo $name." ".$value;
		}
		$absender=$_POST["E-Mail"];
	#	if(mail($empfaenger1, $betreff, $botschaft, "From: $absender")) {
				#mail($empfaenger2, $betreff, $botschaft, "From: $absender");
		/* War mail() erfolgreich? Dann sieht Benutzer folgende Zeilen */
		echo "<center><h2>".$thankyou."</h2></center>";
	#	}
		/* Sonst gibt es eine Fehlermeldung: */
	#	else {
	#	echo $error;
	#	}
		?>
					</td>
        </tr>

</table>
