<?php 

$input = "hello";

$a_password_hash = password_hash('hello', PASSWORD_DEFAULT);

// echo $a_password_hash;

$verify = password_verify($input, $a_password_hash);

echo $verify;

?>