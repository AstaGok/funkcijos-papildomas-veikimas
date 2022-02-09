<?php
$kintamasis = 9;

function addTwoNumbers($num1, $num2){
    $sum=$num1+$num2;
    return $sum;
}

echo addTwoNumbers($kintamasis, 8);

function multiTwoNumbers($num1) {
    global $kintamasis;
    echo $kintamasis*$num1;
}

echo '</br>';


function counter() {
    static $skaitliukas = 0;
    return $skaitliukas++;
}
echo '</br>';
echo counter ();
echo '</br>';
echo counter ();
echo '</br>';
echo counter ();

//Rekursine funkcija

function factorial($num){
    if($num != 1){
        return $num * $factorialas($num-1);
    } else {
        retur;
    }  
}
echo $factorialas(5);