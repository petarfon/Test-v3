<?php

class User
{
    public $id;
    public $username;
    public $password;

    public function __construct($id, $username, $pass)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $pass;
    }

    // public function loginUser($username, $password, mysqli $conn)
    // {
    //     $queryStr = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    //     return $conn->query($queryStr);
    // }

    public function loginUser(User $user, mysqli $conn)
    {
        $queryStr = "SELECT * FROM user WHERE username='$user->username' AND password='$user->password'";
        return $conn->query($queryStr);
    }
}
