<?php function badword_filter($text){

	$badword_array = file("filtro.txt");
	foreach($badword_array as $key=>$val)
	{
		$text = eregi_replace(trim($val),'',$text);
	}
return alert("Reavalie as condutas do site e tente novamente");
}
?>