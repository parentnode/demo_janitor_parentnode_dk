<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();
$IC = new Items();
$itemtype = "person";


$page->bodyClass("people");
$page->pageTitle("People");

if (count($action) == 1) {

	$page->page(array(
		"templates" => "pages/person.php"
	));
	exit();

}

$page->page(array(
	"templates" => "pages/people.php"
));
exit();

?>
