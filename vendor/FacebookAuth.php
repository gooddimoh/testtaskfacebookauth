<?php

namespace FacebookAuth;


class FacebookAuth
{

    public $name;
    public $password;
    public $password;
    public $password;
    public $password;
    public $password;

    public function __construct($name, $password)
    {
        $this->name = $name;
        $this->password = $password;
    }

    public function login()
    {

    }


    public function cron()
    {
        $cron_command = "";
        exec($cron_command);
    }
}