<?php

$x = 1;
$y = &$x;
$x= 4;
echo $y;
