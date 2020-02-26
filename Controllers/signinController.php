<?php


namespace Controllers;

use function Couchbase\defaultDecoder;
use Model\login;
use Model\LoginDB;
use Model\loginConnection;

class signinController
{
    public $loginDB;

    public function __construct()
    {
        $connection = new loginConnection("mysql:host=localhost;dbname=c12;charset=utf8", "root", "");
        $this->loginDB = new LoginDB($connection->connect());
    }
    
}