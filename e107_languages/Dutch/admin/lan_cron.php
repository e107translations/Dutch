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

    'PAGE_NAME' => "Taak planner",
// Menu
    //'LAN_CRON_M_01' => "Beheer",
    'LAN_CRON_M_02' => "Ververs",
    'LAN_CRON_M_SETUP' => "Instellen",
    

// Table heading
    //'LAN_CRON_1' => "Naam",
    'LAN_CRON_2' => "Funktie",
    'LAN_CRON_3' => "Tab",
    'LAN_CRON_4' => "Laatst keer uitgevoerd",
    //'LAN_CRON_5' => "Actief",

// Default crons
    'LAN_CRON_01_1' => "Test e-mail",
    'LAN_CRON_01_2' => "Stuur een test e-mail naar [eml].",
 // [eml] is automatically replaced by head admin e-mail address.
    'LAN_CRON_01_3' => "Aanbevolen om het scheduling systeem te testen.",

    'LAN_CRON_02_1' => "e-mail wachtrij",
    'LAN_CRON_02_2' => "Verwerk de e-mail wachtrij",

    'LAN_CRON_03_1' => "e-mail weigering controle",
    'LAN_CRON_03_2' => "Controleer op geweigerde e-mails.",

    'LAN_CRON_04_1' => "Ban retrigger controleren",
    'LAN_CRON_04_2' => "Verwerk geweigerde retriggers.",
    'LAN_CRON_04_3' => "Alleen nodig als retriggering van blokkades ingeschakeld is..",

    'LAN_CRON_05_1' => "Database Backup",
    'LAN_CRON_05_2' => "Backup de systeem database naar",
    'LAN_CRON_06_1' => "Activeer de Ban Trigger",

// Error and info messages
    'LAN_CRON_6' => "Kon voorkeuren niet importeren",
    'LAN_CRON_7' => "Kon timing instellingen niet importeren",
    'LAN_CRON_8' => "Geïmporteerde timing instellingen voor",

    'LAN_CRON_9' => "[x] minuten en [y] seconden geleden", // [x] and [y] are automatically replaced.
    'LAN_CRON_10' => "[y] seconden geleden",

    'LAN_CRON_11' => "Actieve Crons",
    'LAN_CRON_12' => "Laatste cron verversing",
    //'LAN_CRON_13' => "Wees er zeker van dat cron.php uitvoerbaar is.",
    //'LAN_CRON_14' => "Zet CHMOD /cron.php naar 755.",

    //'LAN_CRON_15' => "Gebruik het volgende Cron commando",
    //'LAN_CRON_16' => "Gebruik je server controle paneel (vb. cPanel, DirectAdmin, Plesk enz.) maak een crontab aan (commando) zodat dit elke minuut op je server draait",

// leave some room for additions/changes

// Info for checkCoreUpdate cron
    'LAN_CRON_20_1' => "Controleer op een e107 Update",
    'LAN_CRON_20_2' => "Controleer e107.org voor Core updates",
 // [eml] is automatically replaced by head admin e-mail address.
    'LAN_CRON_20_3' => "Aanbeveling om het systeem up to date te houden",
    'LAN_CRON_20_4' => "Werk bij met Git repository",
    'LAN_CRON_20_5' => "Werk deze e107 installatie bij met de laatste Github bestanden.",
    'LAN_CRON_20_6' => "Alleen aanbevolen voor developers.",
    //'LAN_CRON_20_7' => "Waarschuwing!",
    'LAN_CRON_20_8' => "Kan je website instabiel maken!",


    'LAN_CRON_30' => "Elke minuut",
    'LAN_CRON_31' => "Om de andere minuut",
    'LAN_CRON_32' => "Elke 5 minuten",
    'LAN_CRON_33' => "Elke 10 minuten",
    'LAN_CRON_34' => "Elke 15 minuten",
    'LAN_CRON_35' => "Elke 30 minuten",

    'LAN_CRON_36' => "Elk uur",
    'LAN_CRON_37' => "Om het andere uur",
    'LAN_CRON_38' => "Elke 3 uur",
    'LAN_CRON_39' => "Elke 6 uur",

    'LAN_CRON_40' => "Elke dag",
    'LAN_CRON_41' => "Elke maand",
    'LAN_CRON_42' => "Elke weekdag",

    'LAN_CRON_50' => "Minuut(-uten):",
    'LAN_CRON_51' => "Uur(ren):",
    'LAN_CRON_52' => "Dag(en):",
    'LAN_CRON_53' => "Maand(en):",
    'LAN_CRON_54' => "Weekdag(en):",
    'LAN_CRON_55' => "Database backup niet gelukt",
    'LAN_CRON_56' => "Database backup Compleet",

    //'LAN_CRON_60' => "Ga naar cPanel",
    'LAN_CRON_61' => "Maak nieuw cron token",
    'LAN_CRON_62' => "Uitvoeren configuratie functie [b][x][/b]",
    'LAN_CRON_63' => "Configuratie functie [b][x][/b] NIET gevonden.",
    'LAN_CRON_64' => "
Een beheerder kan taken automatiseren met behulp van e107 taak planner.[br] Niets wordt hier uitgevoerd totdat uw server eenmaal per minuut [b]cron.php[/b] oproept. Op het tabblad Instellen wordt weergegeven hoe u dat kunt regelen en geeft u de opdracht om te kopiëren.[br] In het tabblad Beheren kunt u taken bewerken, verwijderen en uitvoeren.[br] Wanneer u een taak bewerkt, kunt u de minuten, uren, dagen, maanden of dag van de week instellen waarop deze wordt uitgevoerd. Gebruik * voor elke periode en de eigenschap Actief om de taak in te schakelen.[br] Opmerking: U wordt geadviseerd de standaardtaken niet te verwijderen.[br]Een beheerder kan taken automatiseren met behulp van de e107 taak planner. [br]",

    'LAN_CRON_BACKUP' => "Backup",
    'LAN_CRON_LOGGING' => "Loggen",
    'LAN_CRON_RUNNING' => "Loopt..",

    'LAN_CRON_65' => "Bijwerken git thema repository",
    'LAN_CRON_66' => "Geen git repo gevonden",
    'LAN_CRON_67' => "Geen git repo gevonden in de thema map",
    'LAN_CRON_SETUP_INTRO' => "Je server moet elke minuut [b]cron.php[/b] aanroepen om geplande taken uit te voeren. Kies een van de onderstaande opties, kopieer de weergegeven code naar de taakplanner van je server en gebruik slechts één optie. Anders worden geplande taken twee keer uitgevoerd.",
    'LAN_CRON_SETUP_HTTP_TITLE' => "Webverzoek",
    'LAN_CRON_SETUP_HTTP_WHY' => "Uw planner haalt elke minuut een URL op. Hij draait onder de PHP-versie die voor deze site is geselecteerd, heeft geen bestandsrechten nodig en werkt zowel met cronjobs in het configuratiescherm als met externe cronservices.",
    'LAN_CRON_SETUP_CLI_TITLE' => "PHP-opdrachtregel",
    'LAN_CRON_SETUP_CLI_WHY' => "Je scheduler voert de PHP-interpreter uit via cron.php. Deze draait onder de PHP-binary die in het commando wordt genoemd, dus zorg ervoor dat het commando overeenkomt met de PHP-versie van de website.",
    'LAN_CRON_SETUP_SHEBANG_TITLE' => "Shell-script",
    'LAN_CRON_SETUP_SHEBANG_WHY' => "Je scheduler voert cron.php rechtstreeks uit en de eerste regel kiest het PHP-bestand dat in het PATH staat. Het bestand moet uitvoerbaar zijn, en aangezien het PATH van cron kort is, kan het voorkomen dat er geen PHP-bestand wordt gevonden of dat het verkeerde bestand wordt gevonden.",
    'LAN_CRON_SETUP_COMMAND_LABEL' => "Opdracht (plak deze in de cronjob van uw configuratiescherm)",
    'LAN_CRON_SETUP_CRONTAB_LABEL' => "Crontab regel (draait elke minuut)",
    'LAN_CRON_SETUP_URL_LABEL' => "URL (voor externe cron-services zoals cron-job.org of EasyCron)",
    'LAN_CRON_SETUP_WINDOWS_COMMAND_LABEL' => "Opdracht (voor een actie in de Windows Taakplanner)",
    'LAN_CRON_SETUP_SCHTASKS_LABEL' => "Maak de taak in 1 keer aan (via de opdrachtprompt als beheerder).",
    'LAN_CRON_SETUP_RECOMMENDED' => "Aanbevolen",
    'LAN_CRON_SETUP_PANEL_HOWTO' => "In cPanel, DirectAdmin of Plesk open je de pagina met cronjobs en voeg je een taak toe die elke minuut wordt uitgevoerd met dit commando. Zonder controlepaneel voer je [b]crontab -e[/b] uit en voeg je de crontab-regel toe.",
    'LAN_CRON_SETUP_WGET_LABEL' => "Gebruik wget in plaats van curl.",
    'LAN_CRON_SETUP_HTTP_FALLBACK_NOTE' => "Als uw server de URL van zijn eigen website niet kan ophalen (sommige hostingproviders blokkeren dit), gebruik dan in plaats daarvan de PHP-opdrachtregeloptie.",
    'LAN_CRON_SETUP_PHP_FOUND' => "PHP [x] werd gevonden op [y].",
    'LAN_CRON_SETUP_PHP_NOT_FOUND' => "Er kon geen PHP-binair bestand worden geverifieerd, dus de opdracht gaat ervan uit dat [b]php[/b] in het PATH staat. Vraag uw hostingprovider naar het pad naar het PHP [x]-opdrachtregelbestand als dit niet het geval is.",
    'LAN_CRON_SETUP_OPEN_BASEDIR_NOTE' => "open_basedir verhinderde het controleren op PHP-binaire bestanden.",
    'LAN_CRON_SETUP_EXECUTABLE' => "cron.php is uitvoerbaar.",
    'LAN_CRON_SETUP_NOT_EXECUTABLE' => "cron.php is niet uitvoerbaar. Maak het eerst uitvoerbaar:",
    'LAN_CRON_SETUP_REGENERATE_WARNING' => "Generating a new token invalidates the command you have already set up. Copy the new one into your scheduler afterwards.",
    'LAN_CRON_REFUSED_SUMMARY' => "[x] Verzoek(en) aan cron.php zijn geweigerd sinds [y], de laatste om [z].",
    'LAN_CRON_REFUSED_LAST_FROM' => "De laatste kwam van [x].",
    'LAN_CRON_REFUSED_TOKEN_INCORRECT' => "Onbekend token bij cron aanvraag.",
    'LAN_CRON_REFUSED_TOKEN_MISSING' => "Geen token bij cron aanvraag gevonden.",
    'LAN_CRON_REFUSED_COPY_AGAIN' => "Kopieer de opdracht opnieuw vanuit het [x]-tabblad.",
    'LAN_CRON_NEVER_REPORTED' => "Er is nog geen geplande taak gemeld. Volg de [x]-tab om cron.php op uw server in te plannen.",
    'LAN_CRON_LASTRUN_HTTP' => "via HTTP",
    'LAN_CRON_LASTRUN_HTTP_FROM' => "via HTTP van [x]",
    'LAN_CRON_LASTRUN_CLI' => "vanaf de opdrachtregel",
    'LAN_CRON_SETUP_DETECTED_ENVIRONMENT' => "Gedetecteerde omgeving: [x]",
    'LAN_CRON_SETUP_OPEN_PANEL' => "Open [x]",
    'LAN_CRON_SETUP_CONTROL_PANEL' => "Bedieningspaneel",
    'LAN_CRON_SETUP_SCHTASKS_ACCOUNT_NOTE' => "Taakplanner voert de opdracht uit onder het account dat u kiest; gebruik een account dat de bestanden van de site kan lezen.",
    'LAN_CRON_SETUP_CURL_EXE_NOTE' => "curl.exe wordt meegeleverd met Windows 10 en latere versies; op oudere systemen kunt u de PHP-opdrachtregeloptie gebruiken.",
    'LAN_CRON_TOKEN_REGENERATED' => "Er is een nieuw cron-token gegenereerd. Werk de opdracht in de scheduler van uw server bij.",
];
