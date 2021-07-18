<?php
include 'connection.php';

session_start();
session_unset();
session_commit();
setcookie("email_me","",time()-855555555);
setcookie("password_me","",time()-855555555);

header("location:index.php");





?>