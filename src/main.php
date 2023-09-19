<?php
 include_once __DIR__. "/../vendor/autoload.php";

use App\model\User;

$u = new User ("Iguinho");

echo "<h1>igor</h1>";

echo $u->getNome(); 