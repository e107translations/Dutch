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

if(!defined('e107_INIT')){ die("Unauthorised Access",}
if (!getperms("2")) {
	e107::redirect(,
	 exit;
}

$sql = e107::getDb(,
$tp = e107::getParser(,

if(isset($_POST['reset']))
{
		for($mc=1;$mc<=5;$mc++)
		{
			$rows = $sql->createQueryBuilder()
				->select('*')->from('menus')
				->where('menu_location', (int) $mc)
				->orderBy('menu_order')
				->fetchAll();
			$count = 1;
			$sql2 = e107::getDb('sql2');
			foreach($rows as $row)
			{
				$sql2->createQueryBuilder()->update('menus')
					->set('menu_order', $count)
					->where('menu_id', (int) $row['menu_id'])->execute();
				$count++;
			}
			$text = "<b>Menu's hersteld in de database</b><br /><br />";
		}
}
else
{
	unset($text,
}

$frm = e107::getForm(,

$text = "Met de Menu-Manager kan je bepalen waar je menu&acute;s zichtbaar zijn binnen je je gebruikte thema. 
[u]Beweeg muis[/u] over de deelgebieden om de instellingen van bestaande menu items te wijzigen. 

Als je niet meteen het resultaat ziet, druk dan even op de onderstaande 'refresh' knop.
[html]
<form method='post' id='menurefresh' action='".$_SERVER['PHP_SELF']."'>
<div>
".$frm->admin_button('reset' 'Refresh' 'cancel')."</div>
</form>
<div class='indent'><span class='required'><i class='icon-search icon-white'></i></span> geeft aan dat de zichtbaarheid van een menu is gewijzigd.</div>
[/html]
";

$text = $tp->toHtml($text,true,
$ns -> tablerender("Menu's Hulp",  $text);
