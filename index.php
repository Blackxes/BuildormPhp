<?php

//_____________________________________________________________________________________________
/**********************************************************************************************

	testing file

	Author: Alexander Bassov
	Email: blackxes@gmx.de
	Github: https://www.github.com/Blackxes

/*********************************************************************************************/

error_reporting( E_ALL & ~E_NOTICE );

define( "TEST_ROOT", __DIR__ );

require_once ( "./Dependencies/Logfile/Logfile.php" );
require_once ( "./Dependencies/Templax/Templax.php" );
require_once ( "./Buildorm/Buildorm.php" );

require_once ( "./Tests/testform.php" );

\Buildorm\Buildorm::define(array(
	"test" => "\TestForm"
));

$a = array(
	"2" => "hola",
	"5" => "wusa"
);

echo \Buildorm\Buildorm::build( "test" );

// use \Buildorm\Buildorm;



// $userlogin = array(
// 	"html_attribute_list" => array(
// 		"attributes" => array(
// 			array( "attribute" => "id", "value" => "userlogin" ),
// 			array( "attribute" => "action", "value" => "#"),
// 			array( "attribute" => "method", "value" => "post" ),
// 		)
// 	),
// 	"items" => array(
// 		array(
// 			"html_attribute_list" => array(
// 				"attributes" => array(
// 					array( "attribute" => "class", "value" => "item" )
// 				)
// 			),
// 			"fields" => array(
// 				array(
// 					"field-item" => "bd_form_title",
// 					"templateSelect-field-item" => array(
// 						"html_attribute_list" => array(
// 							"attributes" => array(
// 								array( "attribute" => "class", "value" => "title" )
// 							)
// 						),
// 						"title" => "Benutzerlogin"
// 					)
// 				)
// 			)
// 		),
// 		array(
// 			"html_attribute_list" => array(
// 				"attributes" => array(
// 					array( "attribute" => "class", "value" => "item" )
// 				)
// 			),
// 			"fields" => array(
// 				array(
// 					"field-item" => "bd_form_field_title",
// 					"templateSelect-field-item" => array(
// 						"html_attribute_list" => array(
// 							"attributes" => array(
// 								array( "attribute" => "class", "value" => "field-title" )
// 							)
// 						),
// 						"title" => array(
// 							"title" => "Benutzer"
// 						)
// 					)
// 				),
// 				array(
// 					"field-item" => "bd_form_field_input",
// 					"templateSelect-field-item" => array(
// 						"html_attribute_list" => array(
// 							"attributes" => array(
// 								array( "attribute" => "class", "value" => "field-value" )
// 							)
// 						),
// 						"input-fields" => array(
// 							array(
// 								"html_attribute_list" => array(
// 									"attributes" => array(
// 										array( "attribute" => "type", "value" => "text" ),
// 										array( "attribute" => "placeholder", "value" => "Benutzer" )
// 									)
// 								)
// 							)
// 						)
// 					)
// 				)
// 			)
// 		),
// 		array(
// 			"html_attribute_list" => array(
// 				"attributes" => array(
// 					array( "attribute" => "class", "value" => "item" )
// 				)
// 			),
// 			"fields" => array(
// 				array(
// 					"field-item" => "bd_form_field_title",
// 					"templateSelect-field-item" => array(
// 						"html_attribute_list" => array(
// 							"attributes" => array(
// 								array( "attribute" => "class", "value" => "field-title" )
// 							)
// 						),
// 						"title" => array(
// 							"title" => "Password"
// 						)
// 					)
// 				),
// 				array(
// 					"field-item" => "bd_form_field_input",
// 					"templateSelect-field-item" => array(
// 						"html_attribute_list" => array(
// 							"attributes" => array(
// 								array( "attribute" => "class", "value" => "field-value" )
// 							)
// 						),
// 						"input-fields" => array(
// 							array(
// 								"html_attribute_list" => array(
// 									"attributes" => array(
// 										array( "attribute" => "type", "value" => "password" ),
// 										array( "attribute" => "placeholder", "value" => "Password" )
// 									)
// 								)
// 							)
// 						)
// 					)
// 				)
// 			)
// 		),
// 		array(
// 			"html_attribute_list" => array(
// 				"attributes" => array(
// 					array( "attribute" => "class", "value" => "item" )
// 				)
// 			),
// 			"fields" => array(
// 				array(
// 					"field-item" => "bd_form_field_input",
// 					"templateSelect-field-item" => array(
// 						"html_attribute_list" => array(
// 							"attributes" => array(
// 								array( "attribute" => "class", "value" => "field-value" )
// 							)
// 						),
// 						"input-fields" => array(
// 							array(
// 								"html_attribute_list" => array(
// 									"attributes" => array(
// 										array( "attribute" => "type", "value" => "submit" ),
// 										array( "attribute" => "value", "value" => "Speichern" )
// 									)
// 								)
// 							)
// 						)
// 					)
// 				)
// 			)
// 		)
// 	)
// );

// 
// require_once( __DIR__ . "/Tests/testform.php" );

//_____________________________________________________________________________________________
