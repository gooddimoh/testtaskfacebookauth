<?php
use FacebookAuth;

$name = $_POST["name"];
$password = $_POST["password"];
$access_token = $_POST["access_token"];

$fb = new FacebookAuth\FacebookAuth($name, $password);


if (isset($_POST["login"])) {
    $fb->login();
}

if (isset($_POST["signup"])) {
    $fb->signup();
}
IF()
if (isset($_POST["cron"])) {
    $fb->cron();
}

