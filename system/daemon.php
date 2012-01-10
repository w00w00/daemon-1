<?php
/* Project Daemon
 *
 * name: system/daemon.php
 * version: 0.0.001
 * info: bootstrap file
 *
 * Copyright (c) 2012, Anatoliy Syernyi aka SolomoN
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
include_once('./temp/init.php');

include_once('./system/core/common.php');

include_once('./system/core/kernel.php');

$daemon = new Daemon();

?>