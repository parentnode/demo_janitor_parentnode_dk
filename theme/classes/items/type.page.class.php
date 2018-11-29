<?php
/**
* @package janitor.itemtypes
* This file contains itemtype functionality
*/

class TypePage extends Itemtype {

	/**
	* Init, set varnames, validation rules
	*/
	function __construct() {

		// construct ItemType before adding to model
		parent::__construct(get_class());


		// itemtype database
		$this->db = SITE_DB.".item_page";


		// Published
		$this->addToModel("published_at", array(
			"type" => "datetime",
			"hint_message" => "Publication date and time of page. This will be shown on website. Leave empty for current time"
		));

		// Name
		$this->addToModel("name", array(
			"type" => "string",
			"label" => "Title",
			"required" => true,
			"hint_message" => "Title of your page", 
			"error_message" => "Title must be filled out."
		));

		// Description
		$this->addToModel("description", array(
			"type" => "text",
			"label" => "Short description",
			"required" => true,
			"hint_message" => "Write a short description of the page. It is used for page listings and SEO.",
			"error_message" => "Your page needs a description"
		));

		// HTML
		$this->addToModel("html", array(
			"required" => true,
			"allowed_tags" => "p,h2,h3,h4,ul,ol,code,download,jpg,png"
		));


		// Single media
		$this->addToModel("single_media", array(
			"allowed_sizes" => "960x540",
			"allowed_formats" => "png,jpg",
			"hint_message" => "Add single image by dragging it here. PNG or JPG allowed in 960x540"
		));

	}

}

?>