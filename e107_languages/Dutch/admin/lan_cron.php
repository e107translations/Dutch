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

if (!defined("PAGE_NAME")) { define("PAGE_NAME", "Taak planner"); }

// Menu
//define("LAN_CRON_M_01", "Beheer");
define("LAN_CRON_M_02", "Ververs");
define("LAN_CRON_M_SETUP", "Instellen");

// Table heading
//define("LAN_CRON_1", "Naam");
define("LAN_CRON_2", "Funktie");
define("LAN_CRON_3", "Tab");
define("LAN_CRON_4", "Laatste keer uitgevoerd");
//define("LAN_CRON_5", "Actief");

// Default crons
define("LAN_CRON_01_1", "Test e-mail");
define("LAN_CRON_01_2", "Stuur een test e-mail naar [eml].");
 // [eml] is automatically replaced by head admin e-mail address.
define("LAN_CRON_01_3", "Aanbevolen om het scheduling systeem te testen.");

define("LAN_CRON_02_1", "e-mail wachtrij");
define("LAN_CRON_02_2", "Verwerk de e-mail wachtrij");

define("LAN_CRON_03_1", "e-mail weigering controle");
define("LAN_CRON_03_2", "Controleer op geweigerde e-mails.");

define("LAN_CRON_04_1", "Ban retrigger controleren");
define("LAN_CRON_04_2", "Verwerk geweigerde retriggers.");
define("LAN_CRON_04_3", "Alleen nodig als retriggering van blokkades ingeschakeld is..");

define("LAN_CRON_05_1", "Database Backup");
define("LAN_CRON_05_2", "Backup de systeem database naar");
define("LAN_CRON_06_1", "Activeer de Ban Trigger");

// Error and info messages
define("LAN_CRON_6", "Kon voorkeuren niet importeren");
define("LAN_CRON_7", "Kon timing instellingen niet importeren");
define("LAN_CRON_8", "Geïmporteerde timing instellingen voor");

define("LAN_CRON_9", "[x] minuten en [y] seconden geleden"); // [x] and [y] are automatically replaced. 
define("LAN_CRON_10", "[y] seconden geleden");

define("LAN_CRON_11", "Actieve Crons");
define("LAN_CRON_12", "Laatste cron verversing");
//define("LAN_CRON_13", "Wees er zeker van dat cron.php uitvoerbaar is.");
//define("LAN_CRON_14", "Zet CHMOD /cron.php naar 755.");

//define("LAN_CRON_15", "Gebruik het volgende Cron commando");
//define("LAN_CRON_16", "Gebruik je server controle paneel (vb. cPanel, DirectAdmin, Plesk enz.) maak een crontab aan (commando) zodat dit elke minuut op je server draait");

// leave some room for additions/changes

// Info for checkCoreUpdate cron
define("LAN_CRON_20_1", "Controleer op een e107 Update");
define("LAN_CRON_20_2", "Controleer e107.org voor Core updates"); 
 // [eml] is automatically replaced by head admin e-mail address.
define("LAN_CRON_20_3", "Aanbeveling om het systeem up to date te houden");
define("LAN_CRON_20_4", "Werk bij met Git repository");
define("LAN_CRON_20_5", "Werk deze e107 installatie bij met de laatste Github bestanden.");
define("LAN_CRON_20_6", "Alleen aanbevolen voor developers.");
//define("LAN_CRON_20_7", "Waarschuwing!");
define("LAN_CRON_20_8", "Kan je website instabiel maken!");


define("LAN_CRON_30", "Elke minuut");
define("LAN_CRON_31", "Om de andere minuut");
define("LAN_CRON_32", "Elke 5 minuten");
define("LAN_CRON_33", "Elke 10 minuten");
define("LAN_CRON_34", "Elke 15 minuten");
define("LAN_CRON_35", "Elke 30 minuten");

define("LAN_CRON_36", "Elk uur");
define("LAN_CRON_37", "Om het andere uur");
define("LAN_CRON_38", "Elke 3 uur");
define("LAN_CRON_39", "Elke 6 uur");

define("LAN_CRON_40", "Elke dag");
define("LAN_CRON_41", "Elke maand");
define("LAN_CRON_42", "Elke weekdag");

define("LAN_CRON_50", "Minuut(-uten):");
define("LAN_CRON_51", "Uur(ren):");
define("LAN_CRON_52", "Dag(en):");
define("LAN_CRON_53", "Maand(en):");
define("LAN_CRON_54", "Weekdag(en):");
define("LAN_CRON_55", "Database backup niet gelukt");
define("LAN_CRON_56", "Database backup Compleet");

//define("LAN_CRON_60", "Ga naar cPanel");
define("LAN_CRON_61", "Maak nieuw cron token");
define("LAN_CRON_62", "Uitvoeren configuratie functie [b][x][/b]");
define("LAN_CRON_63", "Configuratie functie [b][x][/b] NIET gevonden.");
define("LAN_CRON_64", "Een beheerder kan taken automatiseren met behulp van de e107 taak planner. [br]
In de beheer tab kan je taken wijzigen, verwijderen uitvoeren. [br]
Wanneer je een taak wijzigt kan je de minuten, uren, dagen en maanden of dag van de week instellen. Gebruik * om iedere periode te gebruiken. Gebruik de instelling Actief om de taak te activeren.[br]
PS: ons advies is om de standaard taken niet te verwijderen.[br]
");

define("LAN_CRON_BACKUP", "Backup");
define("LAN_CRON_LOGGING", "Loggen");
define("LAN_CRON_RUNNING", "Loopt..");

define("LAN_CRON_65", "Bijwerken git theme repository");
define("LAN_CRON_66", "Geen git repo gevonden");
define("LAN_CRON_67", "Geen git repo gevonden in de thema map");
efine("LAN_CRON_SETUP_INTRO", "Je server moet elke minuut [b]cron.php[/b] aanroepen om geplande taken uit te voeren. Kies een van de onderstaande opties, kopieer de weergegeven code naar de taakplanner van je server en gebruik slechts één optie. Anders worden geplande taken twee keer uitgevoerd.");
define("LAN_CRON_SETUP_HTTP_TITLE", "Webverzoek");
define("LAN_CRON_SETUP_HTTP_WHY", "Uw planner haalt elke minuut een URL op. Hij draait onder de PHP-versie die voor deze site is geselecteerd, heeft geen bestandsrechten nodig en werkt zowel met cronjobs in het configuratiescherm als met externe cronservices.");
define("LAN_CRON_SETUP_CLI_TITLE", "PHP-opdrachtregel");
define("LAN_CRON_SETUP_CLI_WHY", "Je scheduler voert de PHP-interpreter uit via cron.php. Deze draait onder de PHP-binary die in het commando wordt genoemd, dus zorg ervoor dat het commando overeenkomt met de PHP-versie van de website.");
define("LAN_CRON_SETUP_SHEBANG_TITLE", "Shell-script");
define("LAN_CRON_SETUP_SHEBANG_WHY", "Je scheduler voert cron.php rechtstreeks uit en de eerste regel kiest het PHP-bestand dat in het PATH staat. Het bestand moet uitvoerbaar zijn, en aangezien het PATH van cron kort is, kan het voorkomen dat er geen PHP-bestand wordt gevonden of dat het verkeerde bestand wordt gevonden.");
define("LAN_CRON_SETUP_COMMAND_LABEL", "Opdracht (plak deze in de cronjob van uw configuratiescherm)");
define("LAN_CRON_SETUP_CRONTAB_LABEL", "Crontab regel (draait elke minuut)");
define("LAN_CRON_SETUP_URL_LABEL", "URL (voor externe cron-services zoals cron-job.org of EasyCron)");
define("LAN_CRON_SETUP_WINDOWS_COMMAND_LABEL", "Opdracht (voor een actie in de Windows Taakplanner)");
define("LAN_CRON_SETUP_SCHTASKS_LABEL", "Maak de taak in 1 keer aan (via de opdrachtprompt als beheerder).");
define("LAN_CRON_SETUP_RECOMMENDED", "Aanbevolen");
define("LAN_CRON_SETUP_PANEL_HOWTO", "In cPanel, DirectAdmin of Plesk open je de pagina met cronjobs en voeg je een taak toe die elke minuut wordt uitgevoerd met dit commando. Zonder controlepaneel voer je [b]crontab -e[/b] uit en voeg je de crontab-regel toe.");
define("LAN_CRON_SETUP_WGET_LABEL", "Gebruik wget in plaats van curl.");
define("LAN_CRON_SETUP_HTTP_FALLBACK_NOTE", "Als uw server de URL van zijn eigen website niet kan ophalen (sommige hostingproviders blokkeren dit), gebruik dan in plaats daarvan de PHP-opdrachtregeloptie.");
define("LAN_CRON_SETUP_PHP_FOUND", "PHP [x] werd gevonden op [y].");
define("LAN_CRON_SETUP_PHP_NOT_FOUND", "Er kon geen PHP-binair bestand worden geverifieerd, dus de opdracht gaat ervan uit dat [b]php[/b] in het PATH staat. Vraag uw hostingprovider naar het pad naar het PHP [x]-opdrachtregelbestand als dit niet het geval is.");
define("LAN_CRON_SETUP_OPEN_BASEDIR_NOTE", "open_basedir verhinderde het controleren op PHP-binaire bestanden.");
define("LAN_CRON_SETUP_EXECUTABLE", "cron.php is uitvoerbaar.");
define("LAN_CRON_SETUP_NOT_EXECUTABLE", "cron.php is niet uitvoerbaar. Maak het eerst uitvoerbaar:");
define("LAN_CRON_SETUP_REGENERATE_WARNING", "Generating a new token invalidates the command you have already set up. Copy the new one into your scheduler afterwards.");
define("LAN_CRON_REFUSED_SUMMARY", "[x] Verzoek(en) aan cron.php zijn geweigerd sinds [y], de laatste om [z].");
define("LAN_CRON_REFUSED_LAST_FROM", "De laatste kwam van [x].");
define("LAN_CRON_REFUSED_TOKEN_INCORRECT", "Onbekend token bij cron aanvraag.");
define("LAN_CRON_REFUSED_TOKEN_MISSING", "Geen token bij cron aanvraag gevonden.");
define("LAN_CRON_REFUSED_COPY_AGAIN", "Kopieer de opdracht opnieuw vanuit het [x]-tabblad.");
define("LAN_CRON_NEVER_REPORTED", "Er is nog geen geplande taak gemeld. Volg de [x]-tab om cron.php op uw server in te plannen.");
define("LAN_CRON_LASTRUN_HTTP", "via HTTP");
define("LAN_CRON_LASTRUN_HTTP_FROM", "via HTTP van [x]");
define("LAN_CRON_LASTRUN_CLI", "vanaf de opdrachtregel");
define("LAN_CRON_SETUP_DETECTED_ENVIRONMENT", "Gedetecteerde omgeving: [x]");
define("LAN_CRON_SETUP_OPEN_PANEL", "Open [x]");
define("LAN_CRON_SETUP_CONTROL_PANEL", "Bedieningspaneel");
define("LAN_CRON_SETUP_SCHTASKS_ACCOUNT_NOTE", "Taakplanner voert de opdracht uit onder het account dat u kiest; gebruik een account dat de bestanden van de site kan lezen.");
define("LAN_CRON_SETUP_CURL_EXE_NOTE", "curl.exe wordt meegeleverd met Windows 10 en latere versies; op oudere systemen kunt u de PHP-opdrachtregeloptie gebruiken.");
define("LAN_CRON_TOKEN_REGENERATED", "Er is een nieuw cron-token gegenereerd. Werk de opdracht in de scheduler van uw server bij.");
