<?php

require_once 'User.php';

$pw = 'asdf';

$pw2 = 'asdfdasfs';

if(User::validatePassword($pw)) {
    echo "Password is long enough!<br>";
} else {
    echo "Your password is too short.<br>";
}

if(User::validatePassword($pw2)) {
    echo "Password is long enough!<br>";
} else {
    echo "Your password is too short.<br>";
}

?>