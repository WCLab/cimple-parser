<?php 

//
require_once "inc/parser.php";

$parser = new Parser();

$data = [
	"name"=>"John",
	"last" => "Connor",
];

$mod["content"] = $parser->parse("index",$data,true);
$parser->parse("site",array_merge($data,$mod));