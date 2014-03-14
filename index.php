<?php

date_default_timezone_set('Asia/Kolkata');
require_once('config/config.php');
require_once('lib/core.php'); // For some core functions like render
require_once('lib/db.php');   // For DB Abstraction
require_once('lib/db_connection.php'); // For create connection



$module = isset($_REQUEST['module'])?safe($_REQUEST['module']):$config['default_module'];
$action = isset($_REQUEST['action'])?safe($_REQUEST['action']):$config['default_action'];

$controller_file = 'controllers/'.ucfirst($module).'Controller.php';
if(!file_exists($controller_file))
{
    trigger_error('Invalid Controller');
    exit;
}
require_once($controller_file);
$function = strtolower($module).'_controller_'.$action;
if(!function_exists($function))
{
    trigger_error('Invalid Controller Action');
    exit;
}
call_user_func($function, $_REQUEST);

