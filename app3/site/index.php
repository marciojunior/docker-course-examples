<?php

$user = 'root';
$password = 'root';

mysqli_connect("db", "root", "erp") or die(mysqli_error());

$dbh = new PDO(
	'mysql:host=db;port=9906;dbname=erp', 
	$user, 
	$password
);

foreach ($dbh->query('SELECT * from companies') as $row) {
    print_r($row);
}