<?php 
function generate_pass()
{	
	$seed = str_split('abcdefghijklmnopqrstuvwxyz_ABCDEFGHIJKLMNOPQRSTUVWXYZ-0123456789'); 
	shuffle($seed);$rand = '';foreach (array_rand($seed, 12) as $k) $rand .= $seed[$k];	
	return $rand;
}

function debug($array)
{
	echo '<pre>DEBUG:<br/>';
	print_r($array);
	echo '</pre>';
	exit();
}

function show($var='')
{
	if(!is_array($var)){
		echo $var;
	}
	else
	{
		echo '<pre>DEBUG:<br/>';
		print_r($var);
		echo '</pre>';
	}
	
}

function show_css($scripts)
{
	
	foreach ($scripts as $key=>$script)
	{
		$show='';
		if($script=='text'){$show='dist/summernote.css';}
		echo '<link rel="stylesheet"	href="'.base_url().'assets/'.$show.'">';
		
	}
}
function show_scripts($scripts)
{

	foreach ($scripts as $key=>$script)
	{
		$show='';
		if($script=='text'){$show='dist/summernote.min.js';}
		if($script=='ui'){$show='js/jquery-ui.min.js';}
		if($script=='nested'){$show='js/jquery.mjs.nestedSortable.js';}
		if($script=='graphs'){$show='js/morris.js';}
		if($script=='graphs2'){$show='js/raphael.js';}
		echo '<script type="text/javascript"	src="'.base_url().'assets/'.$show.'"></script>';
	}
}

function link_css($css)
{
	return '<link rel="stylesheet" href="'.$css.'">';
}

function rendejson($array)
{
	
	foreach($array as $key=>$value){
		if(isJson($value))
		{
			
			$array->$key=json_decode($value);
		}	
	}	
	return $array;
}

function isJson($string) {
   return is_string($string) && is_object(json_decode($string)) ? true : false;

}

function json($array)
{
	if(is_array($array))
	{
		return json_encode($array);

	}
}
