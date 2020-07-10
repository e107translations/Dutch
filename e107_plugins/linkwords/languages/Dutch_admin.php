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
define("LWLAN_4", "Nog geen linkwoorden gedefinieerd.");
define("LWLAN_5", "Woorden");
define("LWLAN_6", "Link");
define("LWLAN_7", "Actief?");
define("LWLAN_11", "Bestaande linkwoorden");
define("LWLAN_18", "Weet je zeker dat je dit linkwoord wilt verwijderen?");
define("LWLAN_20", "Kan linkwoord niet vinden.");
define("LWLAN_21", "Woord om te autolinken (of comma-gescheiden woorden lijst)");
define("LWLAN_22", "Activeren?");
define("LWLAN_23", "Linkwoorden beheer");
define("LWLAN_24", "Beheren Woorden");
define("LWLAN_26", "Zone waar linkwoorden kunnen worden geactiveerd");
define("LWLAN_27", "Dit is de “context” van de getoonde tekst");
define("LWLAN_28", "Pagina&apos;s waar linkwoorden worden gedeactiveerd");
define("LWLAN_29", "Zelfde formaat als de menu zichtbaarheidscontrole. Een overeeenkomst per regel. Geef een hele of gedeeltelijke URL. Eindig met “!” voor een volledige overeenkomst of voor de eindtekst van de link");
define("LWLAN_31", "Toevoegen/bewerken linkwoord");
define("LWLAN_33", "Titel zones");
define("LWLAN_34", "Onderwerp samenvatting");
define("LWLAN_35", "Body text");
define("LWLAN_36", "Beschrijvingen (links enz.)");
define("LWLAN_40", "Door gebruiker ingevoerde titel (e.g. forum)");
define("LWLAN_41", "Door gebruiker ingevoerde tekst (e.g. forum)");
define("LWLAN_42", "");
define("LWLAN_43", "");
define("LWLAN_44", "");
define("LWLAN_45", "");
define("LWLAN_46", "");
define("LWLAN_47", "");
define("LWLAN_48", "");
define("LWLAN_49", "");
define("LWLAN_50", "Tooltip");
define("LWLAN_51", "Niet-actief");
define("LWLAN_52", "Alleen Linkwoord");
define("LWLAN_53", "Alleen Tooltip");
define("LWLAN_54", "Linkwoord en Tooltip");
define("LWLAN_55", "Open link in een nieuw venster");
define("LWLAN_56", "Open op nieuwe pagina");
define("LWLAN_58", "Pref hook geconverteerd naar 0.8 formaat");
define("LWLAN_59", "Activeer Ajax functionaliteit");
define("LWLAN_60", "LW ID");
define("LWLAN_62", "Tooltip ID (LW ID)");
define("LWLAN_63", "Alleen gehele getallen (positief)");
define("LWLAN_64", "Onderdruk link op huidige pagina");
define("LWLAN_65", "Indien geselecteert, onderdruk klikbare link wanneer verwijzend naar huidige pagina");
define("LWLAN_66", "Aangepaste CSS klasse");
define("LWLAN_67", "Max. links/tips");

// Preferences
define("LAN_LW_HELP_01", "Veel tekstgebieden hebben een bijbehorende 'context' en linkwoorden worden alleen weergegeven in gebieden die overeenkomen met die context.");
define("LAN_LW_HELP_02", "De tooltips kunnen Ajax gebruiken om informatie te krijgen voor weergave. Dit vereist meestal enige aangepaste code.");
define("LAN_LW_HELP_03", "Meestal heeft het geen zin dat de gebruiker op een link kan klikken als hij al op de pagina staat waarnaar hij linkt. Wanneer deze optie is uitgeschakeld, worden in dit geval de linkwoorden niet geactiveerd.");
define("LAN_LW_HELP_04", "Linkwoorden kunnen worden uitgeschakeld op specifieke pagina's of pagina's die overeenkomen met een patroon. Voer deze hier in (dezelfde syntaxis als voor menuzichtbaarheid), 1 patroon per regel. Als het patroon eindigt op '!', Komt dit overeen met het 'einde van zoekopdracht' en is meestal een exacte overeenkomst. Anders komt elke URL met de opgegeven tekenreeks overeen.");
define("LAN_LW_HELP_05", "Zal deze klasse toevoegen aan alle gegenereerde links.");
// Reserve numbers for further prefences help texts

// Create linkwords
define("LAN_LW_HELP_10", "Hier kan je de woorden ingeven die klikbare links worden en welke tekst weergegeven wordt bij een mouseover. (Tooltip)");
define("LAN_LW_HELP_11", "Dit is niet hoofdlettergevoelig. Voor meerdere woorden die aan dezelfde links en tooltips zijn toegewezen, scheidt ze met een komma (geen spaties)"); 
define("LAN_LW_HELP_12", "Definieer hier een klikbare link. Als het een externe link is, MOET deze beginnen met 'http (s): //'. Als het een link in deze site is, kunnen de normale {e_XXX} constanten worden gebruikt."); 
define("LAN_LW_HELP_13", "Bepaalt welke opties actief zijn."); 
define("LAN_LW_HELP_14", "Dit definieert de tekst die moet worden weergegeven wanneer de muis van de gebruiker over het woord gaat.");
define("LAN_LW_HELP_15", "Maximaal aantal dezelfde linkwoorden. Moet een positief getal zijn. Wordt gebruikt wanneer hetzelfde woord meerdere keren in een stuk tekst wordt gevonden."); 
define("LAN_LW_HELP_16", "Dit definieert een optioneel numeriek ID dat moet worden gebruikt bij Ajax-verwerking. Moet een positief nummer zijn. Indien leeg, wordt het database-recordnummer gebruikt."); 
define("LAN_LW_HELP_17", "Indien ingeschakeld, wordt de link geopend in een nieuw browsertabblad / -venster."); 

/*

define("LAN_LW_HELP_00", "Linkwoorden Help");
define("LAN_LW_HELP_01", "  <b>Activering Zones</b><br />
  veel tekstuele gebieden hebben een geassocieërde \"inhoud\", en linkwoorden zullen alleen getoond worden in zones die hier aan voldoen.<br /><br />
  <b>Linkwoorden Deactivatie</b><br /><br />
  Linkwoorden kunnen worden gedeactiveerd op specifieke pagina\"s, of pagina\"s die overeenstemmen met een patroon. Vul die hier in (gebruik syntaxis gelijk aan menus), een patroon per regel. 
  Wanneer het patroon eindigt op \"!\", correspondeerd dit met \"einde van query\", en is meestal een volledige overeenkomst. Omgekeerd zal elke URL die de specifiek string bevat overeenkomen hiermee.<br />
  Merk op dat linkwoorden <i> nooit </i> worden getoond op beheerpagina\"s.<br /><br />
  <b>Activeer Ajax Functionaliteit</b><br /><br />
  De tooltips kunnen Ajax gebruiken voor informatieverschaffing ter weergave. Dit benodigd normaliter maatwerk coderen.<br /><br />
  <b>Onderdruk link op huidige pagina</b><br /> <br />
  Normaliter is het onzinnig wanneer een gebruiker de mogelijkheid heeft op een link te klikken terwijl hij al op de pagina is. Vink dit aan om deze optie te verwijderen.<br />");
define("LAN_LW_HELP_02", "Bepaal welke woorden klikbare links worden, of welke tekst tonen bij muisover, hier<br /><br />
  <b><u>Woord tot Link</u></b><br />
  Dit is hoofdlettergevoelig. Bij gebruik van meerdere woorden gekoppeld aan dezelfde links en tooltips, scheidt ze door middel van comma\"s (geen spaties)<br /><br />
  <b><u>Link</u></b><br />
  Bepaal een klikbare link hier. Betreft het een externe link, [i] moet [/i] het beginnen met \"http://\". Betreft het een interne site link, kunnen de normale {e_XXX} constanten worden gebruikt.<br /><br />
  <b><u>Tooltip</u></b><br />
  Dit definieërt de te tonen tekst wanneer de gebruiker zijn mis over het woord beweegt.<br /><br />
  <b><u>LW ID (Tooltip ID)</u></b><br /><br />
  Dit definieërt een optionele nummerieke ID te gebruiken met Ajax processing. Wanneer leeg, wordt het database record nummer gebruikt.<br /><br />
  <b><u>Activatie?</u></b><br />
  Bepaald welke opties actief zijn.");

*/
