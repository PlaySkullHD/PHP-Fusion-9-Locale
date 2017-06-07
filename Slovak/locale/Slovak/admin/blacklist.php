<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Slovak/admin/blacklist.php
| Author: RobiNN
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
$locale['BLS_000'] = "Čierna listina"; //406
//Blacklist message
$locale['BLS_010'] = "Neplatná adresa e-mailu alebo IP.";
$locale['BLS_011'] = "Pridávanie používateľov do čiernej listiny.";
$locale['BLS_012'] = "Používateľom upravená čierna listina.";
$locale['BLS_013'] = "Používateľ bol odstránený z čiernej listiny"; //401
$locale['BLS_014'] = "Naozaj chcete túto položku odstrániť?";
$locale['BLS_015'] = "Čierna listina je momentálne prázdna."; //465
$locale['BLS_016'] = "E-mailová adresa čiernej listiny nie je platným e-mailom."; //405

$locale['BLS_020'] = "Zablokovať"; //420
$locale['BLS_021'] = "Upraviť blokovaného užívateľa"; //421
$locale['BLS_022'] = "Pridať používateľa na čiernej listiny";
$locale['BLS_023'] = "Momentálne sa zobrazujú %d z %d celkových položiek čiernej listiny.";

$locale['BLS_030'] = "Info o zablokovaných"; //461
$locale['BLS_031'] = "Admin"; //467
$locale['BLS_032'] = "Dátum";  //468
$locale['BLS_033'] = "Možnosti"; //462
$locale['BLS_034'] = "Blokované IP adresy: [STRONG]alebo[/STRONG]"; //441
$locale['BLS_035'] = "Blokované e-mailové adresy"; //442
$locale['BLS_036'] = "Dôvod zablokovonia"; //443
$locale['BLS_037'] = "Zablokovať užívateľa";  //444
$locale['BLS_038'] = "Aktualizovať";

$locale['BLS_MS'] = "Vložením IP adresy zabránite všetkým návštevníkom stránky s touto IP adresou vstup.
Môžete zadať celú IP adresu, napr.: <em>123.45.67.89.</em>,alebo len časť IP, napr.: <em>123.45.67</em> alebo <em>123.45</em>.
Upozornenie: Adresy IPv6 sa na tejto stránke konvertujú na ich plnú dĺžku,
napr.: <em>ABCD:1234:5:6:7:8:9:FF</em> sa zobrazí ako <em>ABCD:1234:0005:0006:0007:0008:0009:00FF</em>.
Zmiešané IP adresy (obsahujú časť IPv6 aj IPv4) sa nebudú kontrolovať na čiastočnú zhodu.
<br /><br />
Vložením emailovej adresy, zabránite registrovaniu návštevníkov z tejto adresy.
Môžete vložiť celý e-mail, napr.: <em>foo@bar.com</em>, alebo len doménu, napr.: <em>bar.com</em>.<br /><br />

% - zodpovedá ľubovoľnému reťazcu.<br /><br />

%.%.%.%@domain.tld zakáže akúkoľvek adresu, ktorá obsahuje aspoň 3 body.<br />
%+%@domain.tld zakáže akúkoľvek adresu, ktorá obsahuje aspoň jeden znak plus.<br />
%@domain.tld zakáže akúkoľvek adresu od domain.tld<br />
%.domain.tld zakáže všetky subdomény domain.tld<br />
%payday% zakáže akúkoľvek adresu, ktorá obsahuje slovo \"payday\" ktoré veľmi časté na stránkach.<br />
domain.tld je alias %@domain.tld aby bol kompatibilný s pravidlami definovanými v v7.<br />"; //440