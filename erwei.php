<?php
include "phpqrcode/phpqrcode.php";
$value="http://qslee.github.io/example/index.html";
$errorCorrectionLevel = "L";
$matrixPointSize = "15";
QRcode::png($value,false,$errorCorrectionLevel,$matrixPointSize);
?>
