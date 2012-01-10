<?php
/* Project Daemon
 *
 * name: system/daemon.php
 * version: 0.0.001
 * info: bootstrap file
 *
 * Copyright (c) 2012, Anatoliy Syernyi aka SolomoN
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

include_once(ROOT_PATH.'temp/init.php');



/* Includes
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
include_once(SYSTEM_PATH.'core/common.php');

include_once(SYSTEM_PATH.'core/kernel.php');



/* Start Daemon project
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
$daemon = new Daemon();



/*
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
?>