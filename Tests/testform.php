<?php

//_____________________________________________________________________________________________
/**********************************************************************************************

	simple test form

	Author: Alexander Bassov
	Email: blackxes@gmx.de
	Github: https://www.github.com/Blackxes

/*********************************************************************************************/

require_once ( __DIR__ . "/../Buildorm/Source/Base/FormBase.php" );

use \Buildorm\Source\Base;

//_____________________________________________________________________________________________
class TestForm extends Base\FormBase {

	//_________________________________________________________________________________________
	public function __construct() {

		parent::__construct();
		
		$this->id = "test";
		$this->target = "#";
		$this->method = "post";
		
		// this function is called 
		$this->onSuccess = "";
	}

	//_________________________________________________________________________________________
	// builds the configuration for the form
	//
	// return (array) expects the build form configuration
	//
	public function build(): bool {
		
		// username
		$this->fields["username"] = array(
			"label" => "Benutzername",
			"description" => "Der Name des Accounts",
			"type" => "text",
			"attributes" => array(),
			"defaultValue" => "Benutzername",
			"render" => true
		);

		// password
		$this->fields["password"] = array(
			"label" => "Password",
			"type" => "password",
			"attributes" => array(),
			"required" => true,
			"render" => true
		);

		// selection field
		$this->fields["selection"] = array(
			"label" => "Betriebsauswahl",
			"type" => "select",
			"defaultValue" => "1",
			"items" => array(
				array(
					"label" => "Wusa GmbH",
				),
				array(
					"label" => "Alex GmbH",
				),
			)
		);

		// radio selection
		$this->fields["radio"] = array(
			"label" => "Radio test",
			"type" => "radio",
			"attributes" => array(),
			"items" => array(
				array(
					"label" => "Car 1",
					"checked" => true
				),
				array(
					"label" => "Car 2",
					"checked" => true
				),
				array(
					"label" => "Car 3",
					"checked" => true
				)
			)
		);

		// checkbox
		$this->fields["checkbox"] = array(
			"label" => "Checkboxfield",
			"type" => "checkbox",
			"attributes" => array(),
		);

		$this->fields["submit"] = array(
			"type" => "submit",
			"attributes" => array(
				"value" => "Speichern"
			)
		);

		return true;
	}

	//_________________________________________________________________________________________
	// verifies the form when submitted
	//
	// param1 (array) expects the submitted form values
	//
	// return array - containing the attributes which are not valid
	//
	public function verify( array $attributes ): array {

		$invalid = array();

		if ( $attributes["password"] != "admin" )
			$invalid["password"] = "Passwort ist Fehlerhaft";

		return $invalid;
	}

	//_________________________________________________________________________________________
	// is called when the verification failed
	public function fail() {
		
		// print_r("failure");
		return true;
	}

	//_________________________________________________________________________________________
	// is called when the verification succeeded
	public function success() {

		// print_r("success");
		return true;
	}
}