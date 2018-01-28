<?php 
/*This file connects to the database and establishes the character set for communications.*/

//Connect
$dbc = mysqli_connect('localhost', 'username', 'aHjVwquwR0VrHgmW', 'myquotes');

//Set the character set:
mysqli_set_charset($dbc, 'utf8');

?>