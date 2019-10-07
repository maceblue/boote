<?php include_once('de.php');?>

<html><head><title></title></head>
<body>
<p align=center>
<form name="contact" method="post" action="searchmailer.php">
	<table border="0" cellpadding="3" cellspacing="3" style="font-size:10pt;">
	<tbody>
	<tr>
		<td><?php echo $yourname;?>:</td>
		<td><input name="Name" size="20" style="border: thin solid rgb(136, 136, 136);color: grey; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;" type=""></td>
	</tr>
	<tr>
		<td><?php echo $yourmail;?>: </td>
		<td><input name="E-Mail" size="20" style="border: thin solid rgb(136, 136, 136); color: grey; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;" type="text"></td>
	</tr>
	<tr>
		<td><?php echo $yoursearch;?>:</td>
		<td><textarea name="Text" cols="38" rows="10" wrap="physikal" style="border: thin solid rgb(136, 136, 136);  color: grey; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;"></textarea></td>
	</tr>
<tr>
	<td><?php echo $captcha;?></td>
	<td>8+9=<input name="sec_answer" type="text" size="3" style="border: thin solid rgb(136, 136, 136); color: grey; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input src="../images/send.png" value="submit" type="image"></td>
	</tr>
	</tbody>
	</table>
</form>
</p>
</body>
</html>
