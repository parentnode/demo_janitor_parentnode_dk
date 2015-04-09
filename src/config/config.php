<?php

/**
* This file contains definitions
*
* @package Config Dummy file
*/
header("Content-type: text/html; charset=UTF-8");
error_reporting(E_ALL);

/**
* Site name
*/
define("SITE_UID", "JDP");
define("SITE_NAME", "Janitor Demo");
define("SITE_URL", (isset($_SERVER["HTTPS"]) ? "https" : "http")."://".$_SERVER["SERVER_NAME"]);
define("SITE_EMAIL", "martin@think.dk");

/**
* Optional constants
*/
define("DEFAULT_PAGE_DESCRIPTION", "");
define("DEFAULT_LANGUAGE_ISO", "EN"); // Reginal language English
define("DEFAULT_COUNTRY_ISO", "DK"); // Regional country Denmark


// ENABLE ITEMS MODEL
define("SITE_ITEMS", true);
//define("SITE_SIGNUP", true);

// Enable notifications (send collection email after N notifications)
define("SITE_COLLECT_NOTIFICATIONS", 50);

// INSTALL MODE
//define("SITE_INSTALL", true);

?>
