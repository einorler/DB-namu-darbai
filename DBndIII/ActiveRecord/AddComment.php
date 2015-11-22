<?php 
require_once('Comment.php');
require_once('../databaseWrapper.php');


$dbWrapper = new DatabaseWrapper();
$connection = $dbWrapper->getConnection();

$ids = [];
foreach($connection->query('SELECT id FROM temos') as $row){
    $ids[] = $row['id'];
}

$text = "Lambada lambada lambada";


$comment = new Comment($connection);
$comment->setAuthor('Anonymous');
$comment->setSubjectID($ids[ rand(0,sizeof($ids)-1) ]);
$comment->setText($text);

$comment->save();

header('Location:  Controller.php');