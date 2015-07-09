<?php
//create new connection to the DB 
// db host, username, pass, db name
$db = new mysqli('localhost', 'lmdbu', 'lmdbu015', 'lmdb1');

//handle error
if($db -> connect_errno > 0){
	//stop the rest of the page from loading, and show a message instead
	die ('Unable to connect to Database. Come back later.');
}

//do not close PHP
