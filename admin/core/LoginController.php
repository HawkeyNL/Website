<?php


class LoginController
{
    private $username;
    private $password;

    public function __construct(string $username, string $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function login() {

    }
}