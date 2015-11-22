<?php 
include_once "../databaseWrapper.php";
include_once "CommentRepository.php";
include_once "TemaRepository.php";
include_once "display.php";


$dbWrapper = new DatabaseWrapper();
$connection = $dbWrapper->getConnection();

$temaRepository = new TemaRepository($connection);
$commenRtepository = new CommentRepository($connection);

$items = [];

foreach ($temaRepository->getAll() as $tema) {
	$comments = $commenRtepository->getAllBySubjectId($tema->getId());
	foreach ($comments as $comment) {
		$tema->setComments($comment);
	}
	$items[] = $tema;
}

display($items);