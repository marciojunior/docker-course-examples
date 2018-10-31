<?php

$user = 'root';
$password = 'root';

try {

	$dbh = new PDO(
		'mysql:host=db;port=3306;dbname=erp',
		$user,
		$password
	);

	foreach ($dbh->query('SELECT * FROM companies') as $row) {
		echo("[{$row['id']}] => {$row['name']}<br>");
	}

} catch (Exception $ex) {

	echo('Error: '.$ex->getMessage());
	exit;
}
