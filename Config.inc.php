<?php

function __autoload($classe){
	$pasta = 'class';
	if(file_exists("{$pasta}/{$classe}.class.php"))
		require_once "{$pasta}/{$classe}.class.php";
	else{
		die ("A classe {$pasta}/{$classe}.class.php não foi encontrada");
	}
	
}

?>