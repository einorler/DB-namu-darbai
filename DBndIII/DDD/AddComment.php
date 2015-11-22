<?php 
include_once "../databaseWrapper.php";
include_once "Comment.php";
include_once "CommentRepository.php";
include_once "TemaRepository.php";

$dbWrapper = new DatabaseWrapper();
$connection = $dbWrapper->getConnection();

$temaRepository = new TemaRepository($connection);
$commenRtepository = new CommentRepository($connection);

$author = 'Anonymous DDD';
$text = 'Sitas komentaras skirtas identifikuoti tai, kad kazkas buvo prideta naudojant DDD';
$id = $temaRepository->getRandomId();
// die($id);
$comment = new Comment();
$comment->setAuthor($author);
$comment->setText($text);
$comment->setSubjectId($id);

$commenRtepository->save($comment);


header('Location:  Controller.php');

