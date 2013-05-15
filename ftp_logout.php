<?php
session_start();

unset($_SESSION['Username']);
unset($_SESSION['Password']);

echo "<meta http-equiv='Refresh' content='0; URL=index.php'/>";
?>
