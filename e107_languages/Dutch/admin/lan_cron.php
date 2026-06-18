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
    'LAN_CRON_M_01' => "Beheer",
    'LAN_CRON_M_02' => "Ververs",

// Table heading
    'LAN_CRON_1' => "Naam",
    'LAN_CRON_2' => "Funktie",
    'LAN_CRON_3' => "Tab",
    'LAN_CRON_4' => "Laatst keer uitgevoerd",
    'LAN_CRON_5' => "Actief",

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
    'LAN_CRON_13' => "Wees er zeker van dat cron.php uitvoerbaar is.",
    'LAN_CRON_14' => "Zet CHMOD /cron.php naar 755.",

    'LAN_CRON_15' => "Gebruik het volgende Cron commando",
    'LAN_CRON_16' => "Gebruik je server controle paneel (vb. cPanel, DirectAdmin, Plesk enz.) maak een crontab aan (commando) zodat dit elke minuut op je server draait",

// leave some room for additions/changes

// Info for checkCoreUpdate cron
    'LAN_CRON_20_1' => "Controleer op een e107 Update",
    'LAN_CRON_20_2' => "Controleer e107.org voor Core updates",
 // [eml] is automatically replaced by head admin e-mail address.
    'LAN_CRON_20_3' => "Aanbeveling om het systeem up to date te houden",
    'LAN_CRON_20_4' => "Werk bij met Git repository",
    'LAN_CRON_20_5' => "Werk deze e107 installatie bij met de laatste Github bestanden.",
    'LAN_CRON_20_6' => "Alleen aanbevolen voor developers.",
    'LAN_CRON_20_7' => "Waarschuwing!",
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

    'LAN_CRON_60' => "Ga naar cPanel",
    'LAN_CRON_61' => "Maak nieuw cron token",
    'LAN_CRON_62' => "Uitvoeren configuratie functie [b][x][/b]",
    'LAN_CRON_63' => "Configuratie functie [b][x][/b] NIET gevonden.",
    'LAN_CRON_64' => "Een beheerder kan taken automatiseren met behulp van de e107 taak planner. [br]
In de beheer tab kan je taken wijzigen, verwijderen uitvoeren. [br]
Wanneer je een taak wijzigt kan je de minuten, uren, dagen en maanden of dag van de week instellen. Gebruik * om iedere periode te gebruiken. Gebruik de instelling Actief om de taak te activeren.[br]
PS: ons advies is om de standaard taken niet te verwijderen.[br]",

    'LAN_CRON_BACKUP' => "Backup",
    'LAN_CRON_LOGGING' => "Loggen",
    'LAN_CRON_RUNNING' => "Loopt..",

    'LAN_CRON_65' => "Bijwerken git thema repository",
    'LAN_CRON_66' => "Geen git repo gevonden",
    'LAN_CRON_67' => "Geen git repo gevonden in de thema map",
];
