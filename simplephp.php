<?php
session start();
// ***************************************** //
// **********	DECLARE VARIABLES  ********** //
// ***************************************** //

$username = 'username';
$password = 'password';

$random1 = 'secret_key1';
$random2 = 'secret_key2';

$hash = md5($random1.$pass.$random2); 

$self = $_SERVER['REQUEST_URI'];

// ************************************ //
// **********	USER LOGOUT  ********** //
// ************************************ //

if(isset($_GET['logout']))
{
	unset($_SESSION['login']);
}
?>