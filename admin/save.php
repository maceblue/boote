<?php
include_once('../include/conf.php');

$id			    = $_REQUEST['id'];
$categorie		= $_REQUEST['categorie'];
$name			= $_REQUEST['name'];
$price			= $_REQUEST['price'];
$length			= $_REQUEST['length'];
$width			= $_REQUEST['width'];
$depth			= $_REQUEST['depth'];
$year			= $_REQUEST['year'];
$material		= $_REQUEST['material'];
$hoursused		= $_REQUEST['hoursused'];
$cabines		= $_REQUEST['cabines'];
$motorcompany	= $_REQUEST['motorcompany'];
$motorcount		= $_REQUEST['motorcount'];
$power			= $_REQUEST['power'];
$oiltank		= $_REQUEST['oiltank'];
$watertank		= $_REQUEST['watertank'];
$status			= $_REQUEST['status'];
$location		= $_REQUEST['location'];
$equipment		= $_REQUEST['equipment'];
$sail			= $_REQUEST['sail'];
$arrangement	= $_REQUEST['arrangement'];
$pantry			= $_REQUEST['pantry'];
$instruments	= $_REQUEST['instruments'];
$roof			= $_REQUEST['roof'];
$etc			= $_REQUEST['etc'];
$statement		= $_REQUEST['statement'];
$sale			= $_REQUEST['sale'];

$values = [$categorie,$name,$price,$length,$width,$depth,$year,$material,$hoursused,$cabines,$motorcompany,$motorcount,$power,$oiltank,$watertank,$status,$location,$equipment,$sail,$arrangement,$pantry,$instruments,$roof,$etc,$statement,$sale];

$pdo = new PDO('mysql:host='.$host.'; dbname='.$database, $user, $pass);

if($id==""){ #neues Boot anlegen
	$stmnt = $pdo->prepare("INSERT INTO boote (
												categorie,
												name,
												price,
												length,
												width,
												depth,
												year,
												material,
												hoursused,
												cabines, 
												motorcompany, 
												motorcount, 
												power, 
												oiltank,
												watertank, 
												status, 
												location, 
												equipment, 
												sail,
												arrangement,
												pantry,
												instruments,
												roof,
												etc,
												statement,
												sale
											)

											VALUES (
														?,
														?,
														?,
														?,
														?,
														?,
														?,
														?,
														?,
														?, 
														?, 
														?, 
														?, 
														?,
														?, 
														?, 
														?, 
														?, 
														?,
														?,
														?,
														?,
														?,
														?,
														?,
														?
													)

	");
	$stmnt->execute($values);
    echo "<center><h3>Daten eingetragen!</h3><br>";

	
} else { #vorhandenes Boot editieren 
	$statement = str_replace("'",".",$statement);
	$stmnt = $pdo->prepare("UPDATE boote SET
													categorie='$categorie',
													name='$name',
													price='$price',
													length='$length',
													width='$width',
													depth='$depth',
													year='$year',
													material='$material',
													hoursused='$hoursused',
													cabines='$cabines',
													motorcompany='$motorcompany',
													motorcount='$motorcount',
													power='$power',
													oiltank='$oiltank',
													watertank='$watertank',
													status='$status',
													location='$location',
													equipment='$equipment',
													sail='$sail',
													arrangement='$arrangement',
													pantry='$pantry',
													instruments='$instruments',
													roof='$roof',
													etc='$etc',
													statement='$statement',
													sale='$sale'
												
									WHERE id= :id");
	if($stmnt->execute(array('id' => $id))) {
		echo "<center><h3>Daten eingetragen!</h3><br>";
	}

#$temp = str_replace('\n','',$temp);
#$temp = str_replace('\t','',$temp);
				
}
?>