<?php
class ChatReplyModel extends RelationModel{
	protected $_link = array(
		"reply" => array(
			"mapping_type" 	=> 	HAS_MANY,
				"class_name"	=>	"chat_reply2",
				"foreign_key"	=>	"reply_id",
				// "mapping_order"	=>	"id desc",
		),
	);
}

?>