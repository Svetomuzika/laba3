<?php

require "point.php";

$T1 = new Point;
$T1 -> x = 5;
$T1 -> y = 11;

$V1 = new Vector();
$V1 -> x = 2;
$V1 -> y = 4;

$V2 = new Vector();
$V2 -> x = 0;
$V2 -> y = 0;

$V3 = new Vector();
$V3 -> x = -8;
$V3 -> y = 4;

$V1 -> Null($V1 -> x, $V1 -> y);
$V2 -> Null($V2 -> x, $V2 -> y);
$V3 -> Null($V3 -> x, $V3 -> y);

$V3 -> Angle($V1 -> x, $V3 -> x, $V1 -> y, $V3 -> y);

$T1 ->Rotate($T1 -> x, $V1 -> x, $T1 -> y, $V1 -> y);