<?php
session_start();
unset($_SESSION['SESS_FIRST_NAME']);
session_destroy();
header("location: logged.php");