<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="content-type" content="application/xhtml+xml; charset=iso-8859-1" />
<title>Admin</title>

<script type="text/javascript">
    function ask(url){
        Check = confirm("wirklich löschen?");
        if (Check == true) {
            document.location.href = url + "";
        }
    }
    function askboat(url){
        Check = confirm("wirklich löschen?");
        if (Check == true) {
            document.location.href = url + "&action=delboat";
        }
    }
</script>
</head>
<body>

<?php 
$id = $_REQUEST['id'] ?? '';
$action = $_REQUEST['action'] ?? '';
$delete = $_REQUEST['delete'] ?? '';

$categorie = $name = $price = $length = $width = $depth = $year = $material = $hoursused = $cabines = $motorcompany = '';
$motorcount = $power = $oiltank = $watertank = $status = $location = $equipment = $sail = $arrangement = $instruments = '';
$pantry = $roof = $etc = $statement = $pics = $sale = '';

if ($id != "") {
	include_once('../include/conf.php');
    $pdo = new PDO('mysql:host='.$host.'; dbname='.$database, $user, $pass);

    if ($action == "delboat") {
        $sql = "DELETE FROM `boote` WHERE id='".$id."'";
        $pdo->query($sql);
        echo "Boot gelöscht!";
    } else {
        $sql = "SELECT * FROM `boote` WHERE id=".$id;
        foreach ($pdo->query($sql) as $row) {
            $categorie = $row['categorie'];
            $name = $row['name'];
            $price = $row['price'];
            $length = $row['length'];
            $width = $row['width'];
            $depth = $row['depth'];
            $year = $row['year'];
            $material = $row['material'];
            $hoursused = $row['hoursused'];
            $cabines = $row['cabines'];
            $motorcompany = $row['motorcompany'];
            $motorcount = $row['motorcount'];
            $power = $row['power'];
            $oiltank = $row['oiltank'];
            $watertank = $row['watertank'];
            $status = $row['status'];
            $location = $row['location'];
            $equipment = $row['equipment'];
            $sail = $row['sail'];
            $arrangement = $row['arrangement'];
            $instruments = $row['instruments'];
            $pantry = $row['pantry'];
            $roof = $row['roof'];
            $etc = $row['etc'];
            $statement = $row['statement'];
            $pics = $row['pics'];
            $sale = $row['sale'];
        }

        $picsarray = explode(",",$pics);
        $picsanz = count($picsarray);
        if ($delete != "") {
            $picsnew="";
            for($i=0; $i<$picsanz; $i++) {
                if ($picsarray[$i] != $delete) {
                    $picsnew .= $picsarray[$i].",";
                }
            }
            $picsnew = substr($picsnew,0,-1);

            $stmnt = $pdo->prepare("UPDATE `boote` SET pics='".$picsnew."' WHERE id=".$id);
            $stmnt->execute();
            unlink("../images/boats/detail/".$delete);
            unlink("../images/boats/thumbs/".$delete);
            echo $delete." gelöscht!";
            $picsarray = explode(",",$picsnew);
            $picsanz = count($picsarray);
        }
        echo "<a href='#' style='display:block; width:200px; background-color:silver; border:1px solid black; color:black; text-decoration:none;text-align:center;' onclick=javascript:askboat('form.php?id=".$id."');>ganzes Boot löschen</a><br><br>";
        echo "<table><tr>";
        for($i=0; $i<$picsanz; $i++) {
            echo "<td>
                    <img src='../images/boats/thumbs/".$picsarray[$i]."' width=70px style='border:1px solid lightblue;'>
                </td>";
        }
        echo "</tr><tr>";
        for($i=0; $i<$picsanz; $i++) {
            echo "<td>
                    <a href='' style='display:block; background-color:silver; border:1px solid black; color:black; text-decoration:none;text-align:center;' onclick=ask('form.php?id=".$id."&delete=".$picsarray[$i]."');>löschen</a>
                </td>";
        }
        echo "</tr></table><br>";
        echo "<a href='pic_upload.php?id=".$id."' style='display:block; background-color:silver; border:1px solid black; color:black; text-decoration:none; text-align:center; width:200px;'>neues Foto hochladen</a><br><br>";
    }
}

if ($action == "") {
    echo "
    <form action='save.php' method='post'>
    <input type=hidden name=id value=" . $id . ">
    <table>
        <tr>
            <td>Kategorie:</td><td><input type='text' name='categorie' value='" . $categorie . "'></td>
        </tr>
        <tr>
            <td>Name:</td><td><input type='text' name='name' value='" . $name . "'></td>
        </tr>
        <tr>
            <td>Preis:</td><td><input type='text' name='price' value='" . $price . "'>,-EUR</td>
        </tr>
        <tr>
            <td>Laenge:</td><td><input type='text' name='length' value='" . $length . "'>m</td>
        </tr>
        <tr>
            <td>Breite:</td><td><input type='text' name='width' value='" . $width . "'>m</td>
        </tr>
        <tr>
            <td>Tiefgang:</td><td><input type='text' name='depth' value='" . $depth . "'>m</td>
        </tr>
        <tr>
            <td>Baujahr:</td><td><input type='text' name='year' value='" . $year . "'></td>
        </tr>
        <tr>
            <td>Rumpfmaterial:</td><td><input type='text' name='material' value='" . $material . "'></td>
        </tr>
        <tr>
            <td>Betriebsstd.:</td><td><input type='text' name='hoursused' value='" . $hoursused . "'>std</td>
        </tr>
        <tr>
            <td>Kabine(n):</td><td><input type='text' name='cabines' value='" . $cabines . "'></td>
        </tr>
        <tr>
            <td>Motor(en):</td><td><input type='text' name='motorcompany' value='" . $motorcompany . "'></td>
        </tr>
        <tr>
            <td>Motoren-Anz:</td><td><input type='text' name='motorcount' value='" . $motorcount . "'></td>
        </tr>
        <tr>
            <td>Leistung:</td><td><input type='text' name='power' value='" . $power . "'>PS</td>
        </tr>
        <tr>
            <td>Brennstofftank:</td><td><input type='text' name='oiltank' value='" . $oiltank . "'>l</td>
        </tr>
        <tr>
            <td>Wassertank:</td><td><input type='text' name='watertank' value='" . $watertank . "'>l</td>
        </tr>
        <tr>
            <td>Zustand:</td><td><input type='text' name='status' value='" . $status . "'></td>
        </tr>
        <tr>
            <td>Liegeort:</td><td><input type='text' name='location' value='" . $location . "'></td>
        </tr>
        <tr>
            <td>Austattung:</td><td><textarea cols='40' rows='5' name='equipment'>" . $equipment . "</textarea></td>
        </tr>
        <tr>
            <td>Besegelung & Rigg:</td><td><textarea cols='40' rows='5' name='sail'>" . $sail . "</textarea></td>
        </tr>
        <tr>
            <td>Einrichtung & Aufteilung:</td><td><textarea cols='40' rows='5' name='arrangement'>" . $arrangement . "</textarea></td>
        </tr>
        <tr>
            <td>Küche:</td><td><textarea cols='40' rows='5' name='pantry'>" . $pantry . "</textarea></td>
        </tr>
        <tr>
            <td>Nautische Instrumente:</td><td><textarea cols='40' rows='5' name='instruments'>" . $instruments . "</textarea></td>
        </tr>
        <tr>
            <td>Planen & Dächer:</td><td><textarea cols='40' rows='5' name='roof'>" . $roof . "</textarea></td>
        </tr>
        <tr>
            <td>sonstiges Zubehör:</td><td><textarea cols='40' rows='5' name='etc'>" . $etc . "</textarea></td>
        </tr>
        <tr>
            <td>Bemerkung:</td><td><textarea cols='40' rows='5' name='statement'>" . $statement . "</textarea></td>
        </tr>
        <tr>
            <td>Verkauf:</td>
            <td>
                <input type='radio' name='sale' value='for sale' ";
    echo($sale == 'for sale' ? "checked='checked'" : "");
    echo ">zu verkaufen<br>
                <input type='radio' name='sale' value='sold' ";
    echo($sale == 'sold' ? "checked='checked'" : "");
    echo ">verkauft<br>
            </td>
        </tr>
        <tr>
            <td></td><td><input type='submit' value='speichern'></td>
        </tr>
    </form>";
}
?>

</body>
</html>
