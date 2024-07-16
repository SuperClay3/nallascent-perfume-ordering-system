<?php
include 'connect.php';

session_start();
session_unset();
session_destroy();

header('Location: ../admin/admin_login.php');
exit();  // Ensure the script stops executing after the header redirection
?>
