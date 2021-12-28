<?php
session_start();
if (empty($_SESSION['My_Auth'])) {
    header("Location: http://$_SERVER[HTTP_HOST]");
    exit();
}
