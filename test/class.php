<?php

class ClassA {

    function __construct() {
        echo 'Class A <br />';
    }

}

class ClassB extends ClassA {

    function __construct() {
        echo 'Class B <br />';
    }
    
}

class ClassC extends ClassA {
    
    function __construct() {
        echo 'Class C <br />';
        parent::__construct();
    }

}

class ClassD extends ClassA {

}

abstract class ClassE {

    function __construct() {
        echo 'Class E <br />';
    }

}

class ClassF extends ClassE {

}

class ClassG extends ClassE {

    function __construct() {
        echo 'Class G <br />';
        parent::__construct();
    }

}

echo 'Test Classes <br />';
echo '<hr />';
$classA = new ClassA();
echo '<hr />';
$classB = new ClassB();
echo '<hr />';
$classC = new ClassC();
echo '<hr />';
$classD = new ClassD();
echo '<hr />';
$classF = new ClassF();
echo '<hr />';
$classG = new ClassG();
echo '<hr />';

?>