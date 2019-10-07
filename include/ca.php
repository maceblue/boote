<table style="width:100%; font-size:10pt;">
    <tr>
        <td valign="top" width=40% align=center>
            <table border=0>
                <tr>
                    <td>
                        <h3><?php echo $charterheadline;?></h3>
                        <?php echo $createsuggestion."<br><br>".$insertinformations;?>
                    </td>
                </tr>
                <tr>
                    <td align=center>
                        <br><br>
                         <image src="images/barca-sailors.jpg" width="220" border=0> 
                    </td>
                </tr>
            </table>
        </td>
        <td align=center>
            <br>
            <p align=center>
            <form name="contact" method="post" action="index.php?s=mailer">
                    <table border="0" cellpadding="3" cellspacing="3" style="font-size:10pt;">
                        <tbody><tr>
                         <td><?php echo $yourname;?>:</td>
                     <td><input name="Name" size="20" style="border: thin solid rgb(136, 136, 136);color: grey; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;" type=""></td>
            
                     </tr>
                     <tr>
                         <td><?php echo $yourmail;?>: </td>
                     <td><input name="E-Mail" size="20" style="border: thin solid rgb(136, 136, 136); color: grey; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;" type="text"></td>
                     </tr>
                     <tr>
                         <td><?php echo $eventdate;?>: </td>
                     <td><input name="Termin" size="10" style="border: thin solid rgb(136, 136, 136); color: grey; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;" type="text"></td>
                     </tr>
                     <tr>
                         <td><?php echo $typeofboat;?>: </td>
                     <td>
                        <select name="Bootstyp">
                            <option value="Motorboot"><?php echo $motorboat; ?></option>
                            <option value="Segelboot"><?php echo $sailboat; ?></option>
                          </select>
                     </td>
                     </tr>
                     
                     <tr>
                         <td><?php echo $sizeofboat;?>: </td>
                     <td><input name="Groeße" size="3" style="border: thin solid rgb(136, 136, 136); color: grey; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;" type="text">m</td>
                     </tr>
                     
                     <tr>
                         <td><?php echo $numofbeds;?>: </td>
                     <td><input name="Anzahl Kojen" size="3" style="border: thin solid rgb(136, 136, 136); color: grey; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;" type="text"></td>
                     </tr>
                     
                     <tr>
                         <td><?php echo $withcapitain;?>: </td>
                     <td>
                        <select name="mit Kapitaen">
                            <option value="mit"><?php echo $withcapitainyes; ?></option>
                            <option value="ohne"><?php echo $withcapitainno; ?></option>
                        </select>
                    </td>
                     </tr>
                            
                     <tr>
                         <td valign="top"><?php echo $yourmessage;?>:</td>
                     <td><textarea name="Text" cols="38" rows="5" wrap="physikal" style="border: thin solid rgb(136, 136, 136);  color: grey; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;"></textarea></td>
            
		     </tr>
		     <tr>
			<td><?php echo $captcha;?></td>
			<td>8+9=<input name="sec_answer" size="3" style="border: thin solid rgb(136, 136, 136); color:grey; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;" type="text"></td>
		     </tr>
                     <tr>
                         <td>&nbsp;</td>
                     <td><input src="images/send.png" alt='senden' value="submit" type="image">
                    </td>
                     </tr>
                </tbody></table>
            </form>
            </p>
        </td>
    </tr>
</table>
