<?php


function my_strlen($str){

	$len = 0;
	while(isset($str[$len]))
	{
		$len = $len + 1;
	}
	return ($len);

}

function count_char(){
    $str = "Dans l'espace, personne ne vous entend crier";
    echo my_strlen($str);
}

count_char();

?>