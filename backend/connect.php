<?php

define('host', 'localhost');
define('username', 'root');
define('password', 'password');
define('dbname', 'openvpn');

//Create a connection
$conn = new mysqli(host, username, password, dbname) or die('Connection error');
