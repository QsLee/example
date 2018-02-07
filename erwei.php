<?php
include "phpqrcode/phpqrcode.php";
$value="http://172.20.10.2/li/index.html";
$errorCorrectionLevel = "L";
$matrixPointSize = "15";
QRcode::png($value,false,$errorCorrectionLevel,$matrixPointSize);
?>