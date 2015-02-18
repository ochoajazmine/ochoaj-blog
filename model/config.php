<?php
require_once(__DIR__. "//database.php");
session_start();

$path  = "/ochoaj-blog/";

$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";

if(!isset($_SESSION["CONNECTION"])){
    $connection = new Databse($host, $username, $password, $database);
    $_session["connection"] = $connection;
}