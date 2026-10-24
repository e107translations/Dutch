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

$caption = "Startpagina Hulp";
/* FIXME - English native speakers: what should stay and what should go? 
	<p>
		The list of rules are scanned in turn, until the class of the current user matches. 
		This then determines the user's front (home) page, and also the page he sees immediately after login.
	</p>
 */
$text = "
<p>
De regels worden op volgorde doorzocht om de eerste te vinden waar de huidige gebruiker behoort tot de klasse die in de regel is opgegeven.
<p>Die regel bepaalt vervolgens de voorpagina (startpagina) en elke specifieke pagina na het inloggen.</p>
<p>
Als geen enkele regel overeenkomt, wordt nieuws ingesteld als startpagina.</p>
</p>
<p>
De gebruiker wordt onmiddellijk na het inloggen naar de opgegeven 'Na inloggen pagina' (indien opgegeven) gestuurd.
</p>
";
$ns->tablerender($caption, $text, "beheer_hulp");