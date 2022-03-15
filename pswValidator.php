<?php
$psw = readline('Enter a password: ');

$psw = str_replace(' ', '', $psw);

$valLen = false;
if (strlen($psw) >= 5) {
    $valLen = true;
}

$valSpecialChar = false;
if (!preg_match('/[^a-zA-Z0-9]/', $psw)) {
    $valSpecialChar = true;
}

$valNum = false;
for ($i = 0; $i < strlen($psw); $i++) {
    if ( ctype_digit($psw[$i]) ) {
        $valNum = true;
        break;
    }
}

if ($valLen && $valSpecialChar && $valNum) {
    echo 'The password is valid';
} else {
    echo 'The password is invalid';
}
?>