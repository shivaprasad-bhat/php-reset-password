<?php

define('host', 'localhost');
define('username', 'root');
define('password', '');
define('dbname', 'user_manage');

$conn = new mysqli(host, username, password, dbname) or die('Connection error');
