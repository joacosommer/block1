<?php
$creditCardNumber = readline('Enter a credit card number: ');
$arrayCreditCardNumber = str_split($creditCardNumber);
$sum = 0;
for ($i = 0; $i < count($arrayCreditCardNumber); $i++) {
    if ($i % 2 != 0) {
        $arrayCreditCardNumber[$i] = $arrayCreditCardNumber[$i] * 2;
        if ($arrayCreditCardNumber[$i] > 9) {
            $arrayCreditCardNumber[$i] = $arrayCreditCardNumber[$i] - 9;
        }
    }
    $sum = $sum + $arrayCreditCardNumber[$i];
}

if ($sum % 10 == 0) {
    echo 'The credit card number is valid';
} else {
    echo 'The credit card number is invalid';
}
?>