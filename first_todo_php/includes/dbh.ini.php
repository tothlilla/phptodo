<?php

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "phptest";

$inputError = "";


$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword);

mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS phptest CHARACTER SET utf8 COLLATE utf8_general_ci");

mysqli_query($conn, "USE phptest;");

mysqli_query($conn, "CREATE TABLE IF NOT EXISTS userdata (
  id int(11) NOT NULL AUTO_INCREMENT,
  toDoText text NOT NULL DEFAULT '',
  status int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (id)
);");

$tasks = mysqli_query($conn, "SELECT * FROM userdata;");

$numberOfTasks = mysqli_num_rows($tasks);

?>