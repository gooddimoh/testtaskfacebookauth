<?php

namespace FacebookAuth;


class FacebookAuth
{
    public $name = "";
    public $password = "";
    public $access_token = "";

    public function __construct($name, $password)
    {
        $this->name = $name;
        $this->password = $password;

    }

    public function login($conn, $name, $password)
    {
        $sql = "INSERT INTO USERS (name,password,token)";
        $conn->query($sql);
        $conn->close();
    }

    public function signup($conn, $name, $password)
    {
        $sql = "INSERT INTO USERS (name,password,token)";
        $conn->query($sql);
        $conn->close();
    }


    public function cron()
    {
        $cron_command = "";
        exec($cron_command);
    }
}
