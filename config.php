<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'root';
$CFG->dbpass    = '';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
);

$CFG->wwwroot   = 'http://'.$_SERVER["SERVER_ADDR"].'/moodle';
$CFG->dataroot  = 'C:\\wamp64\\moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

if (strpos($_SERVER["REQUEST_URI"], 'moodle') == true) {
    require_once(__DIR__ . '/lib/setup.php');
}

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
