<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();
$IC = new Items();
$itemtype = "page";


$page->bodyClass("pages");
$page->pageTitle("Pages");


if(is_array($action) && count($action)) {

	$page->page(array(
		"templates" => "pages/page.php"
	));
	exit();

}

$page->page(array(
	"templates" => "pages/pages.php"
));

?>