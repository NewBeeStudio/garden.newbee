<?php
class ChatModel extends RelationModel{
	protected $_link = array(
		"reply" => array(
			"mapping_type" 	=> 	HAS_MANY,
				"class_name"	=>	"chat_reply",
				"foreign_key"	=>	"chat_id",
				// "mapping_order"	=>	"id desc",
		),
	);
}


?>