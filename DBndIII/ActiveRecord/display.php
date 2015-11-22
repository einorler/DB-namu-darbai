<?php 


function display($temos){
	$return = "
	<h2> Temos: </h2>
	<ul>";
	foreach ($temos as $tema) {
		$return.="<li><h4>{$tema->getName()}</h4></li>";
		$return.="<li>{$tema->getDate()}</li>";
		$return.="<li>Komentarai: {$tema->getCommentCount()}</li>";
		$return.="<ul>";
		foreach ($tema->getComments() as $comment) {
			$return.="<li>{$comment->getAuthor()}</li>";
			$return.="<li>{$comment->getDate()}</li>";
			$return.="<li>{$comment->getText()}</li><br/>";
		}
		$return.="</ul>";
	}
	$return.="</ul>";
	echo $return;
}