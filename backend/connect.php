<?php

define('host', 'localhost');
define('username', 'root');
define('password', '');
define('dbname', 'user_manage');

//Create a connection
$conn = new mysqli(host, username, password, dbname) or die('Connection error');
