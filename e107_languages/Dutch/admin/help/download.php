<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system - Dutch Language File.
|
|     $URL:$
|     $Revision:$
|     $Date:$
|     $Author: Yvalni, Tgtje $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Upload je bestanden naar de ".e_FILE."downloads map, de afbeeldingen naar de ".e_FILE."downloadimages map en de thumbnail afbeeldingen naar de ".e_FILE."downloadthumbs map.
<br /><br />
Om een download aan te melden moet je eerst een hoofdcategorie creëren en daarna een categorie onder deze hoofdcategorie. Daarna kun je de download beschikbaar stellen.";
$ns -> tablerender("Download Hulp", $text);
?>