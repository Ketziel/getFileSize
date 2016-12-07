<?php
$filePath = $modx->getOption('filePath', $scriptProperties, "");
$precision = $modx->getOption('precision', $scriptProperties, 2);
$unitNames = $modx->getOption('unitNames', $scriptProperties, "B,Kb,Mb,Gb,Tb");
$fileNotFound = $modx->getOption('fileNotFound', $scriptProperties, "Error : File not found");
$filesize = filesize($filePath);
if ($filesize != false){
    $unitNames = explode(',',$unitNames);
    $base = log($filesize, 1024);
    return round(pow(1024, $base - floor($base)), $precision) .' '. $unitNames[floor($base)];    
} else {
    return $fileNotFound;
}
