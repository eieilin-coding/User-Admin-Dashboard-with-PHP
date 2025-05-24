<?php
include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;
use Helpers\Auth;
use Faker\Factory as Faker;

$mysql = new MySQL;
$mysql->connect();

$table = new UsersTable;
$table->insert();

HTTP::redirect();
Auth::check();

$faker = Faker::create();
echo $faker->name;
