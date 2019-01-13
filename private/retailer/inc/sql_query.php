<?php
require_once('db.php');
require_once('func.php');

// Escape
function escape($con, $value) {
    return mysqli_real_escape_string($con, $value);
}
?>