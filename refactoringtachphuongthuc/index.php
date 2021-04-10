<?php
include_once 'Cylinder.php';
$cylinder = new Cylinder(4,2);
echo $cylinder->getVolume(4,2);
echo $cylinder->getPerimeter(2);
echo $cylinder->getBaseArea(3);