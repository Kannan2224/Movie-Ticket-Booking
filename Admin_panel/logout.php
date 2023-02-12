<?php
session_start();
ob_start();

// $_SESSION["user_ticket"] = null;
unset($_SESSION["user_ticket"]);
header("location:../main/");
