<?php
class FruitModel extends RelationModel{
	protected $_link = array(
		"file" => array(
			"mapping_type" 	=> 	HAS_MANY,
				"class_name"	=>	"file",
				"foreign_key"	=>	"fruit_id",
				// "mapping_order"	=>	"id desc",
		),
	);
}


?>
