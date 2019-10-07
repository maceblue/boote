<?php

echo "<center><h3>".$vkheadline."</h3></center>";

include_once('include/conf.php');

$db_link = mysql_connect($host, $user, $pass) or die("".$nodatabaseconnection . mysql_error());

if($db_link) {
	mysql_select_db($database) OR die(mysql_error());
	$result = mysql_query("SELECT * FROM `boote`");
	if($result){
	$boatscount=0;
	echo "<center><table width=90% border=0>";
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$boatscount++;
		$pics = $row['pics'];
		$picsarray = explode(",",$pics);
		$picsanz = count($picsarray);

    	echo "<tr><td colspan=3><hr></td></tr>
			<tr>
				<td><a href='admin/form.php?id=".$row['id']."' style='color:grey;' target='_blank'>ID:".$row['id']."</a><h3>".$row['name']."</h3></td>
				<td width=100%><h4>".$row['price'].",-EUR</h4></td>
			</tr><tr>
				<td style='text-align:center; border:1px solid lightblue'>";
					if($picsanz>0) {
						echo "<table>
								<tr rowspan=".$picsanz.">
									<td><a href='images/boats/detail/".$picsarray[0]."' id='shownthumb".$boatscount."' name='shownthumb".$boatscount."' rel='lightbox'><img alt='Boot' id='boatthumb".$boatscount."' name='boatthumb".$boatscount."' src='images/boats/thumbs/".$picsarray[0]."' border=0 ></a></td>";
									if($picsanz>1){
										echo "<td>
											<table>";
											for($i=0;$i<$picsanz;$i++){
												echo "<tr>
														<td>
															<img alt='Boot' src='images/boats/thumbs/".$picsarray[$i]."' width=70px style='border:1px solid lightblue; cursor:pointer;' onclick=javascript:change_thumb('".$picsarray[$i]."','".$boatscount."');>
														</td>
													</tr>";
											}
										echo "</table>";
										echo "</td>";
									}
							echo "</tr>
							</table>";
					}
					
				echo "</td>
				<td><table>
						<tr>
							<td class='font8ptbold'>".$categorie.":</td>
							<td class='font8pt'>".$row['categorie']."</td>
						</tr><tr>
							<td class='font8ptbold'>".$length.":</td>
							<td  class='font8pt'>".$row['length']."m</td>
						</tr><tr>
							<td class='font8ptbold'>".$width.":</td>
							<td class='font8pt'>".$row['width']."m</td>
						</tr><tr>
							<td class='font8ptbold'>".$depth.":</td>
							<td class='font8pt'>".$row['depth']."m</td>
						</tr><tr>
							<td class='font8ptbold'>".$year.":</td>
							<td class='font8pt'>".$row['year']."</td>
						</tr><tr>
							<td class='font8ptbold'>".$material.":</td>
							<td class='font8pt'>".$row['material']."</td>
						</tr><tr>
							<td class='font8ptbold'>".$hoursused.":</td>
							<td class='font8pt'>".$row['hoursused']."h</td>
						</tr><tr>
							<td class='font8ptbold'>".$cabines.":</td>
							<td class='font8pt'>".$row['cabines']."</td>
						</tr><tr>
							<td class='font8ptbold'>".$motorcompany.":</td>
							<td class='font8pt'>".$row['motorcompany']."</td>
						</tr><tr>
							<td class='font8ptbold'>".$motorcount.":</td>
							<td class='font8pt'>".$row['motorcount']."</td>
						</tr><tr>
							<td class='font8ptbold'>".$power.":</td>
							<td class='font8pt'>".$row['power']."PS</td>
						</tr><tr>
							<td class='font8ptbold'>".$oiltank.":</td>
							<td class='font8pt'>".$row['oiltank']."l</td>
						</tr><tr>
							<td class='font8ptbold'>".$watertank.":</td>
							<td class='font8pt'>".$row['watertank']."l</td>
						</tr><tr>
							<td class='font8ptbold'>".$status.":</td>
							<td class='font8pt'>".$row['status']."</td>
						</tr><tr>
							<td class='font8ptbold'>".$location.":</td>
							<td class='font8pt'>".$row['location']."</td>
						</tr>
					</table>
				</td>
			</tr><tr>
				<td class='underpic'>".$equipment.":</td>
				<td class='font8pt'>".$row['equipment']."</td>
			</tr><tr>
				<td class='underpic'>".$sail.":</td>
				<td class='font8pt'>".$row['sail']."</td>
			</tr><tr>
				<td class='underpic'>".$arrangement.":</td>
				<td class='font8pt'>".$row['arrangement']."</td>
			</tr><tr>
				<td class='underpic'>".$pantry.":</td>
				<td class='font8pt'>".$row['pantry']."</td>
			</tr><tr>
				<td class='underpic'>".$instruments.":</td>
				<td class='font8pt'>".$row['instruments']."</td>
			</tr><tr>
				<td class='underpic'>".$roof.":</td>
				<td class='font8pt'>".$row['roof']."</td>
			</tr><tr>
				<td class='underpic'>".$etc.":</td>
				<td class='font8pt'>".$row['etc']."</td>
			</tr><tr>
				<td class='underpic'>".$statement.":</td>
				<td class='font8pt'>".$row['statement']."</td>
			</tr>";
	}
	echo "</table></center>";
    mysql_free_result($result);
	} else {
		echo $noboatstosell;
	}
}
echo "<br><center>".$noboatsfit."<br> 
<a href='#' class='darklink' onclick=window.open('include/searchform.php?l=".$l."','Search','width=460,height=305,toolbar=0,location=0');return false;>
	".$writeyourwishes."<br>
</a> ".$welook4you."</center>";
echo "<a href='admin/form.php' class='ghost' target='_blank'>Boot hinzufügen</a>";
?>
