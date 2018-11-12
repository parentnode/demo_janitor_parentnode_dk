<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();


$page->bodyClass("template");
$page->pageTitle("Template");



$page->page(array(
	"templates" => "template/index.php"
	)
);
exit();


?>
 