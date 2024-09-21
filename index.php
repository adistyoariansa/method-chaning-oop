<?php
require_once 'robot.php';

$robot = new robot('testing', 10);
$robot->set_suara('okey dokey');
$robot->set berat(15);

echo $robot->suara . '_' . $robot->berat;
?>