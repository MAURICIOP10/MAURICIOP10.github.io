<?php
include("../res/x5engine.php");
$nameList = array("nv3","pa4","6jv","zsz","ctf","78n","3hj","hnx","2un","mx5");
$charList = array("G","E","P","4","N","F","P","D","7","3");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
