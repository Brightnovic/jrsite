<?php

define("SERVER","localhost");
define("USER","root");
define("PASSWORD","");
define("DB","jr");

$conn = mysqli_connect(SERVER, USER, PASSWORD, DB);

if(!$conn) die("Error: ". mysqli_connect_error());