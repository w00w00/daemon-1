<?php
/* Project Daemon
 *
 * name: index.php
 * version: 0.0.001
 * info: main system file
 *
 * Copyright (c) 2012, Anatoliy Syernyi aka SolomoN
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

error_reporting(E_ALL);

/* Root path (ToDo: realpath() ???)
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/');



/* System path (ToDo: realpath() ???)
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
define('SYSTEM_PATH', ROOT_PATH.'system/');



/* Include bootstrap file
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
require_once(SYSTEM_PATH.'daemon.php');



/*
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
?>