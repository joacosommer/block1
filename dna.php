<?php

#$dna = readline('Enter a DNA strand: ');
$dna = 'atgccatag';
$arrayDna =  str_split($dna);
#echo strtr($dna, array('g' => 'c', 'c' => 'g', 't' => 'a', 'a' => 'u'));
for ($i = 0; $i < count($arrayDna); $i++) {
    $rna[$i] = match($arrayDna[$i]){
        'g' => 'c',
        'c' => 'g',
        't' => 'a',
        'a' => 'u'
    };
}
$rna = implode($rna);
echo $rna;
?>