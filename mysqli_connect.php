<?php 
/*This file connects to the database and establishes the character set for communications.*/

//Connect
$dbc = mysqli_connect('localhost', 'username', 'password', 'myquotes');

//Set the character set:
mysqli_set_charset($dbc, 'utf8');

?>