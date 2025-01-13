<?php

# Turn off all error reporting
error_reporting();

// Database Credentials
define('DBTYPE','mysql'); // Database type (mysql, sql..)
define('DBHOST',getenv('MYSQL_HOST')); // IP Address
define('DBNAME',getenv('MYSQL_DATABASE')); // Database Name
define('DBUSER',getenv('MYSQL_USER')); // Database User
define('DBPASS',getenv('MYSQL_PASSWORD')); // Database Password

// Table prefix
define('TABLE_PREFIX','ost_');

// Accepted ticket status
define('ATSTATUS', array(0,1,2,3,4,5,6,7));

// Check for IP authorization
// Set this to True, if you want your API to be only used by a specific IP Address
// The IP Address is defined in the OSTicket built in form.
define('APIKEY_RESTRICT', false);

// Write every successfull request to built in system log
define('WRITE_SYSTEMLOG', true);

?>
