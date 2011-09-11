<?php  if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7.
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

if (ENVIRONMENT == 'testing')
{
	$active_group = 'ci_triad_test';
}
else
{
	$active_group = 'ci_triad_test';
}

$active_record = TRUE;

$db['ci_triad_test']['hostname'] = 'localhost';
$db['ci_triad_test']['username'] = 'ci_triad_testu';
$db['ci_triad_test']['password'] = 'password';
$db['ci_triad_test']['database'] = 'ci_triad_test';
$db['ci_triad_test']['dbdriver'] = 'mysql';
$db['ci_triad_test']['dbprefix'] = '';
$db['ci_triad_test']['pconnect'] = TRUE;
$db['ci_triad_test']['db_debug'] = TRUE;
$db['ci_triad_test']['cache_on'] = FALSE;
$db['ci_triad_test']['cachedir'] = '';
$db['ci_triad_test']['char_set'] = 'utf8';
$db['ci_triad_test']['dbcollat'] = 'utf8_general_ci';
$db['ci_triad_test']['swap_pre'] = '';
$db['ci_triad_test']['autoinit'] = TRUE;
$db['ci_triad_test']['stricton'] = FALSE;

$db['ci_triad']['hostname'] = 'localhost';
$db['ci_triad']['username'] = 'ci_triadu';
$db['ci_triad']['password'] = 'password';
$db['ci_triad']['database'] = 'ci_triad';
$db['ci_triad']['dbdriver'] = 'mysql';
$db['ci_triad']['dbprefix'] = '';
$db['ci_triad']['pconnect'] = TRUE;
$db['ci_triad']['db_debug'] = TRUE;
$db['ci_triad']['cache_on'] = FALSE;
$db['ci_triad']['cachedir'] = '';
$db['ci_triad']['char_set'] = 'utf8';
$db['ci_triad']['dbcollat'] = 'utf8_general_ci';
$db['ci_triad']['swap_pre'] = '';
$db['ci_triad']['autoinit'] = TRUE;
$db['ci_triad']['stricton'] = FALSE;



/* End of file database.php */
/* Location: ./application/config/database.php */