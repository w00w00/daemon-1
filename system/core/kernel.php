<?php
/* Project Daemon
 *
 * name: system/core/kernel.php
 * version: 0.0.001
 * info: Daemon kernel
 *
 * Copyright (c) 2012, Anatoliy Syernyi aka SolomoN
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

final class Daemon {

    private static $instance;

    /* Constructor
     * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
    public function __construct() {
        self::$instance = & $this;

        echo 'Project Daemon constructor <br />';
    }



    /* Get instance
     * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
    public static function &getInstance() {
        return self::$instance;
    }



    /* Destructor
     * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
    public function __destruct() {
        echo 'Project Daemon destructor <br />';
    }

}



/*
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
?>