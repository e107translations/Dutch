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


 /*
$text = "<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_core.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Core Bestand</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_warning.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Bekend Risico-dragend</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_check.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Core Bestand<br> (Integriteit Akkoord)</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_fail.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Core Bestand<br> (Integriteit Foutief)</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_uncalc.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Core Bestand<br> (Onvoorspelbaar)</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_missing.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Missend Core Bestand</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_old.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Oud Core Bestand</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_unknown.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Niet Core Bestand</div>";
$ns -> tablerender("File Key", $text);
*/

	
$text = "Bestandscontrole scant en analyseert de e107 bestanden op de server.<br /><br />Wanneer de bestandscontrole een e107 core bestand vindt wordt het op integriteit gecontroleerd en of het bestand niet corrupt of beschadigd is.";

$text .= "<br /><br />
<a href='".e_SELF."?create'>Klik hier om een snapshot te maken van je eigen plugin bestanden voor gebruik in de bestandscontrole.</a>";

if ($pref['developer']) {
$text .= "<br /><br />
Het extra string overeenkomst hulpmiddel (alleen in ontwikkelaarsmodus) staat je toe bestanden te scannen op jouw server voor tekstgedeelten gebruikt makend van reguliere expressies 
. De regex engine in gebruik is  PHP's <a href='http://php.net/pcre'>PCRE</a> 
(de preg_* functies), vul je query in als #pattern#modifiers in de voorgegeven vensters.";
}

$ns -> tablerender("Bestandscontrole hulp", $text);
