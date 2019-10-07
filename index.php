<?php
/*
 * Marcus Mende
 * index.php
 * startpage for boote website
 ***********************************/

#include_once('include/functions.php');

$s = $_GET['s'];
$l = $_GET['l'];
if($s == "") $s = "h";
if($l == "") $l = "de";
include_once('include/'.$l.'.php');
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
<title><?php echo $pagetitle;?></title>
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<meta NAME="description" content="Nautica Mende. Ihr Servicepartner rund ums Boot.">
<meta NAME="keywords" content="Marina,club nautica,porto,Boote,Mende,Nautica,Denia,Boot,Bootsservice,Verkauf,Bootsverkauf,Michael Mende,Hafen Denia,Motorboote,Segelboote,Liegeplätze,Charter,Spanien Boote,Bavaria,gebrauchte boote,boote gebraucht,bavaria boote,sport boote,riva boote,riva,boote vermietung,gebrauchte motorboote,Tagescharter,yacht">
<meta NAME="page-topic" content="Service">
<meta NAME="language" content="de">
<meta NAME="author" content="Marcus Mende">
<meta NAME="page-type" content="Website">
<meta NAME="publisher" content="Mende">
<meta NAME="robots" content="INDEX,FOLLOW">
<meta http-equiv="expires" content="0">
<meta http-equiv="pragma" content="no-cache">
<meta NAME="revisit-after" content="10 days">
<meta NAME="resource-type" content="document">
<meta NAME="distribution" content="Global">

<style type="text/css">
body{
        font-family:                sans-serif,verdana,arial;
        background-image:           url(images/linesBG.jpg); 
        background-repeat:          no-repeat;
        background-attachment:      fixed;
        background-color:           #0748ad;
        color:                      black;
}
a{
        font-weight:                 bold;
        color:                                 lightgrey;
        text-decoration:         none;
}
a:hover{
        font-weight:                 bold;
        color:                                 white;
        text-decoration:         none;
}
a.darklink{
        font-weight:                 bold;
        color:                                 darkblue;
        text-decoration:         none;
}
a.ghost{
        font-weight:                 bold;
        color:                                 white;
        text-decoration:         none;
}
a.ghost:hover{
        font-weight:                 bold;
        color:                                 lightgrey;
        text-decoration:         none;
}
a.arrow{
        font-weight:                 bold;
        color:                                 lightblue;
        text-decoration:         none;
}
a.arrow:hover{
        font-weight:                 bold;
        color:                                 blue;
        text-decoration:         none;
}
.contdiv{
        width:                                726px;
        padding:                        10px;
        background-color:        white;
        border-top:                        2px solid #004487;
        border-left:                2px solid #004487;
        border-right:                2px solid #004487;
        background-image:        url('images/bgverlauf.jpg');
        background-repeat:        repeat-x;
}
.overlay{
        font-size:                        15pt;
        letter-spacing:                3pt;
        font-weight:                bold;
        color:                                white;
        position:relative;         top:190; left:-122;
}
.font8pt{
        font-size:                        8pt;
}
.font8ptbold{
        font-size:                        8pt;
        font-weight:                bold;
}
.underpic{
        font-size:                        8pt;
        font-weight:                bold;
        text-align:                        right;
		vertical-align:						top;
}
</style>

<script type="text/javascript" src="js/jquery-latest.pack.js"></script>
<script type="text/javascript" src="js/prototype.js"></script>
<!--<script type="text/javascript" src="js/jcarousellite_1.0.1.js"></script>-->
<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<script type='text/javascript'>
        function change_thumb(new_img_name,num){
                //alert(document.boatthumb.src);
                var thumbname = "boatthumb"+num;
                document.getElementById(thumbname).src = 'images/boats/thumbs/'+new_img_name;
                //document.thumbname.src = 'images/boats/thumbs/'+new_img_name;
                var shown = "shownthumb"+num;
                document.getElementById(shown).href = 'images/boats/detail/'+new_img_name;
        }
</script>
 <script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
//var pageTracker = _gat._getTracker("UA-3223386-2");
//pageTracker._trackPageview();
</script>
</head>
<body>
<center>
<div id="over" class="overlay"><?php echo $overlay;?></div>
<table cellpadding=0 cellspacing=0>
        <!--Banner-->
        <tr>
                <td style="border:0px;"><img src="images/header.jpg" alt='Bootsservice' border=0></td>
        </tr>
        <tr>
                <td style="border:0px;"><img src="images/header-top.jpg" alt='Boote' border=0></td>
        </tr>
        <tr>
                <td style="border:0px;"><img src="images/header-ani-bottom.gif" alt='Bootsverkauf' border=0></td>
        </tr>
        <!--Menue-->
        <tr style="border:0px; width:100%; height:31px; background-image:url(images/menuBG.jpg);">
                <td>
                        <table width=100%>
                                <tr>
                                        <td style="padding-left:30px;"><a href="index.php?s=h&l=<?php echo $l;?>"><?php echo $home;?></a></td>
                                        <td style="padding-left:20px;"><a href="index.php?s=s&l=<?php echo $l;?>"><?php echo $service;?></a></td>
                                        <td style="padding-left:20px;"><a href="index.php?s=vk2&l=<?php echo $l;?>"><?php echo $sell;?></a></td>
                                        <td style="padding-left:20px;"><a href="index.php?s=ca&l=<?php echo $l;?>"><?php echo $charter;?></a></td>
                                        <td style="padding-left:20px;"><a href="index.php?s=ps&l=<?php echo $l;?>"><?php echo $adac;?></a></td>
                                        <td style="padding-left:20px;"><a href="index.php?s=c&l=<?php echo $l;?>"><?php echo $contact;?></a></td>
                                        <td style="width:100px; text-align:right; padding-right:10px">

                                                <?php
                                                        $link_de="index.php?s=".$s."&l=de";
                                                        $link_en="index.php?s=".$s."&l=en";
                                                        $link_es="index.php?s=".$s."&l=es";
                                                ?>

                                                <a href="javascript:location.replace('<?php echo $link_de;?>')"><img src="images/de.gif" border=0></a>
                                                <a href="javascript:location.replace('<?php echo $link_en;?>')"><img src="images/en.gif" border=0></a>
                                                <a href="javascript:location.replace('<?php echo $link_es;?>')"><img src="images/es.gif" border=0></a>
                                        </td>
                                </tr>
                        </table>
                </td>                        
        </tr>
        <!--Content-->
        <tr>
                <td>
                        <div id="main" class="contdiv">
                        <?php if(file_exists('include/'.$s.'.php')){
                                include('include/'.$s.'.php');
                          } else {
                                echo $filenotfound;
                          }
                        ?>
                        </div>
                </td>
        </tr>
        <!--Footer-->
        <tr>
                <td style="border:0px;"><img src="images/bottom.gif" alt='Boote' border=0></td>
	</tr>
	<tr>
		<td style="border:0px">
			<a href="index.php?s=c" style="font-weight:normal; font-size:12px;">Impressum</a>
			<a href="index.php?s=dsgv" style="font-weight:normal; font-size:12px;">Datenschutz</a>
	</tr>
</table>
</body>
</html>
