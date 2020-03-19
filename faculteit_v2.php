<?php

$getal= readline("van welk getal wilt u de faculteit weten?");
$i=1;
$getal2=1;

while ($i != $getal) {
    $getal2 = $getal2*($i+1);
    $i++;
}
echo "de faculteit van $getal is $getal2";
