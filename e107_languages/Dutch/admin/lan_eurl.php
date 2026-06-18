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
return [

    'LAN_EURL_NAME' => "Beheer Site URLs",
    'LAN_EURL_NAME_CONFIG' => "Profielen",
    'LAN_EURL_NAME_ALIASES' => "Aliassen",
    'LAN_EURL_NAME_SETTINGS' => "Algemene instellingen",
    'LAN_EURL_NAME_HELP' => "Help",

    'LAN_EURL_EMPTY' => "De lijst is leeg",
    'LAN_EURL_LEGEND_CONFIG' => "Kies URL profiel per site gebied",
    'LAN_EURL_LEGEND_ALIASES' => "Configureer Basis URL aliasen per URL profiel",

    'LAN_EURL_DEFAULT' => "Standaard",
    'LAN_EURL_PROFILE' => "Profiel",

    'LAN_EURL_INFOALT' => "Info",
    'LAN_EURL_PROFILE_INFO' => "Profiel info niet beschikbaar",
    'LAN_EURL_LOCATION' => "Profiel Locatie",
    'LAN_EURL_LOCATION_NONE' => "Configuratie bestand niet beschikbaar",
    'LAN_EURL_FORM_HELP_DEFAULT' => "Alias wanneer standaard taal",
    'LAN_EURL_FORM_HELP_ALIAS_0' => "Standaard waarde is",
    'LAN_EURL_FORM_HELP_ALIAS_1' => "Alias wanneer in",
    'LAN_EURL_FORM_HELP_EXAMPLE' => "Basis URL",

    'LAN_EURL_ERR_ALIAS_MODULE' => "Alias '%1\$s' kan niet bewaard worden - er bestaat een systeem URL met een gelijke naam. Kies een andere alias waarde voor systeem URL profiel '%2\$s' ",
    'LAN_EURL_SURL_UPD' => "&nbsp; SEF URLs werden bijgewerkt.",
    'LAN_EURL_SURL_NUPD' => "&nbsp; SEF URLs werden NIET bijgewerkt.",

    'LAN_EURL_SETTINGS_PATHINFO' => "Verwijder bestandsnaam van de URL",
    'LAN_EURL_SETTINGS_MAINMODULE' => "Associëren Root naamruimte",
    'LAN_EURL_SETTINGS_MAINMODULE_HELP' => "Kies welk site deel zal worden geschakeld met je standaard site URL. Voorbeeld : wanneer Nieuws jouw basis naamsruimte is zal http://yoursite.com/Nieuws-Item-Titel worden geassocieërd met nieuws (itemweergave pagina zal worden opgelost)",
    'LAN_EURL_SETTINGS_REDIRECT' => "Leid om naar systeem niet gevonden pagina",
    'LAN_EURL_SETTINGS_REDIRECT_HELP' => "Wanneer ingesteld op false, zal de niet gevonden pagina direct worden getoond (zonder browser omleiding)",
    'LAN_EURL_SETTINGS_SEFTRANSLATE' => "Geautomatiseerde SEF tekenreeks aanmaak type",
    'LAN_EURL_SETTINGS_SEFTRANSLATE_HELP' => "Kies hoe de SEF tekenreeks wordt samengesteld wanneer automatisch is opgebouwd uit een Titel waarde (vb. in nieuws, maatwerk pagina's, enz.)",
    'LAN_EURL_SETTINGS_SEFTRTYPE_NONE' => "Gewoon beveiligen maar",
    'LAN_EURL_SETTINGS_SEFTRTYPE_DASHL' => "dasherize-to-lower-case",
    'LAN_EURL_SETTINGS_SEFTRTYPE_DASHC' => "Dasherize-To-Camel-Case",
    'LAN_EURL_SETTINGS_SEFTRTYPE_DASH' => "Dasherize-with-no-case-CHANGE",
    'LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREL' => "underscore naar kleine lettertype",
    'LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREC' => "Underscore_To_Camel_Case",
    'LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCORE' => "Underscore_with_no_case_CHANGE",
    'LAN_EURL_SETTINGS_SEFTRTYPE_PLUSL' => "plus+separator+to+lower+case",
    'LAN_EURL_SETTINGS_SEFTRTYPE_PLUSC' => "Plus+Separator+To+Camel+Case",
    'LAN_EURL_SETTINGS_SEFTRTYPE_PLUS' => "Plus+separator+with+no+case+CHANGE",
 
    'LAN_EURL_MODREWR_DESCR' => "Verwijdert ingaande script bestandsnaam (index.php /) van uw URL's. U zult mod_rewrite moeten hebben geïnstalleerd, en werkend op uw server (Apache Web Server). Na het inschakelen van deze instelling ga naar uw site hoofdmap, hernoem htaccess.txt naar .htaccess en modificeer de <em>'RewriteBase' </ em> richtlijn indien nodig.",


    'LAN_EURL_MENU' => "Site URL's",
//'LAN_EURL_MENU_CONFIG' => "URL profielen",
//'LAN_EURL_MENU_ALIASES' => "Aliassen",
    'LAN_EURL_MENU_CONFIG' => "Configuraties",
    'LAN_EURL_MENU_ALIASES' => "Profiel Aliassen",
    'LAN_EURL_MENU_SETTINGS' => "Instellingen",
    'LAN_EURL_MENU_HELP' => "Help",
//'LAN_EURL_MENU_REDIRECTS' => "Verwijzingen",
    'LAN_EURL_MENU_PROFILES' => "Profielen",
    'LAN_EURL_UC' => "In voorbereiding",
    'LAN_EURL_CORE_MAIN' => "Naamsruimte Site oorsprong - alias niet in gebruik",
    'LAN_EURL_REBUILD' => "Herbouwen",
    'LAN_EURL_DEFAULT' => "Default",
    'LAN_EURL_FRIENDLY' => "Vriendelijk",
    'LAN_EURL_LEGACY' => "Oudere  directe URL",

    'LAN_EURL_REWRITE_LABEL' => "Vriendelijke URLs",
    'LAN_EURL_REWRITE_DESCR' => "Zoekmachine en gebruikersvriendelijke URLs.",

// News
    'LAN_EURL_CORE_NEWS' => "Nieuws",
    'LAN_EURL_NEWS_REWRITEF_LABEL' => "Volledige vriendelijke URLs (geen prestatie, meer vriendelijk)",
    'LAN_EURL_NEWS_REWRITEF_DESCR' => "",

    'LAN_EURL_NEWS_REWRITE_LABEL' => "Vriendelijke URL´s zonder ID (geen prestatie, vriendelijker)",
    'LAN_EURL_NEWS_REWRITEX_DESCR' => "Demonstreert geautomatiseerde link ontleding en samenstelling op basis van vooraf bepaalde route regels.",


    'LAN_EURL_NEWS_REWRITE_LABEL' => "Vriendelijke URLs zonder ID (geen prestatie, meer vriendelijk)",
    'LAN_EURL_NEWS_REWRITE_DESCR' => "Demonstreert handmatige link ontleding en samenstelling.",
    'LAN_EURL_CORE_USER' => "Gebruikers",
    'LAN_EURL_NEWS_REWRITEX_LABEL' => "Vriendelijke URLs met ID (prestatie gericht)",
    'LAN_EURL_USER_REWRITE_LABEL' => "Vriendelijke URLs",
    'LAN_EURL_USER_REWRITE_DESCR' => "Zoekmachine en gebruikersvriendelijke URLs.",

    'LAN_EURL_CORE_PAGE' => "Maatwerk Paginas",
    'LAN_EURL_PAGE_SEF_LABEL' => "Vriendelijke URLs met ID (presterend)",
    'LAN_EURL_PAGE_SEF_DESCR' => "Zoekmachine en gebruikersvriendelijke URLs.",

    'LAN_EURL_PAGE_SEFNOID_LABEL' => "Vriendelijke URLs zonder ID (geen prestatie, meer vriendelijk)",
    'LAN_EURL_PAGE_SEFNOID_DESCR' => "Zoekmachine en gebruikersvriendelijke URLs.",

    'LAN_EURL_CORE_SEARCH' => "Zoeken",
    'LAN_EURL_SEARCH_DEFAULT_LABEL' => "Standaard zoek URL",
    'LAN_EURL_SEARCH_DEFAULT_DESCR' => "Oudere  directe URL",
    'LAN_EURL_SEARCH_REWRITE_LABEL' => "Vriendelijke URL",
    'LAN_EURL_SEARCH_REWRITE_DESCR' => "",
    'LAN_EURL_CORE_SYSTEM' => "Systeem",
    'LAN_EURL_SYSTEM_DEFAULT_LABEL' => "Standaard systeem URLs",
    'LAN_EURL_SYSTEM_DEFAULT_DESCR' => "URLs voor pagina zoals Niet gevonden, Toegang geweigerd, enz.",

    'LAN_EURL_SYSTEM_REWRITE_LABEL' => "Systeem vriendelijke URLs",
    'LAN_EURL_SYSTEM_REWRITE_DESCR' => "URLs voor pagina zoals Niet gevonden, Toegang geweigerd, enz.",

    'LAN_EURL_CORE_INDEX' => "Voorpagina",
    'LAN_EURL_CORE_INDEX_INFO' => "Voorpagina kan geen alias hebben",
    'LAN_EURL_REBUILD' => "Opnieuw opbouwen",
    'LAN_EURL_REGULAR_EXPRESSION' => "Reguliere expressie",
    'LAN_EURL_KEY' => "Sleutel",
    'LAN_EURL_TABLE' => "Tabel",
];
