<?php
session_start();
setcookie('cookie_user', $user[`full_name`], time() - 3600, "/");
header("Location: ./../authorisation.php");
session_destroy();
?>