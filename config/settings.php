<?php
// USE THIS FILE FOR DEFINING CONSTANTS AND CONFIGURATION VARIABLES
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// CONFIGURE TIMEZONE
define( "CURRENT_TIMEZONE" , "America/Argentina/Buenos_Aires");

// SET TIMEZONE
date_default_timezone_set(CURRENT_TIMEZONE);
