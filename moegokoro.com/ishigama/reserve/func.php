<?php

function set_token(){
	$token = sha1(uniqid(mt_rand(),true));
	$_SESSION["token"] = $token;
	return $_SESSION["token"];
}


function h($string){
	return htmlspecialchars($string,ENT_QUOTES,"UTF-8" );
}

//すべての配列を配列に格納する
function safe_eash($array){
	$return_array = array();
	foreach($array as $key => $value){
		$return_array[$key] = h($value);
	}
	return $return_array;
}

function save_session_each($array){
	foreach($array as $key => $value){
		$_SESSION["$key"] = $value;
	}
}

//デバッグに使って！
function show_each($array){
	foreach($array as $value){
		echo($value."<br/>");
	}
}

//HTMLフォームでの表示について
function bf($value){
	if(!empty($value)){
		echo(h($value));
	}
}