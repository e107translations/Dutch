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

if(!defined('e107_INIT')){ exit; }

if (!getperms("2") && !e107::isCli())
{
	e107::redirect();
	exit;
}


$sql = e107::getDb();
$tp = e107::getParser();
$frm = e107::getForm();

if(isset($_POST['reset']))
{
		for($mc=1;$mc<=5;$mc++)
		{
			$sql->select("menus","*", "menu_location='".$mc."' ORDER BY menu_order");
			$count = 1;
			$sql2 = e107::getDb('sql2');
			while(list($menu_id, $menu_name, $menu_location, $menu_order) = $sql->fetch())
			{
				$sql2 ->update("menus", "menu_order='$count' WHERE menu_id='$menu_id' ");
				$count++;
			}
			$text = "<b>Menu's hersteld in de database</b><br /><br />";
		}
}
else
{
	unset($text);
}

$text = "Met de Menu-Manager kan je bepalen waar je menu&acute;s zichtbaar zijn binnen je je gebruikte thema. 
[u]Beweeg muis[/u] over de deelgebieden om de instellingen van bestaande menu items te wijzigen. 

Als je niet meteen het resultaat ziet, druk dan even op de onderstaande 'refresh' knop.
[html]
<form method='post' id='menurefresh' action='".e_SELF."'>
<div>
".$frm->admin_button('reset','Refresh','cancel')."</div>
</form>
[br]
".e107::getParser()->toGlyph('fa-search')." geeft aan dat de zichtbaarheid van een menu is gewijzigd.
[/html]
";

$text = $tp->toHtml($text,true);
$ns -> tablerender("Menu's Hulp", $text);
