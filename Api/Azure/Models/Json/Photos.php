<?php

/*
 * * azure project presents:
                                          _
                                         | |
 __,   __          ,_    _             _ | |
/  |  / / _|   |  /  |  |/    |  |  |_|/ |/ \_
\_/|_/ /_/  \_/|_/   |_/|__/   \/ \/  |__/\_/
        /|
        \|
				azure web
				version: 1.0a
				azure team
 * * be carefully.
 */

namespace Azure\Models\Json;

use Azure\Types\Json as JsonType;

/**
 * Class Badge
 * @package Azure\Models\Json
 */
class Photos extends JsonType
{

	/**
	 * @var string
	 */
	/**
	 * @var string
	 */
	/**
	 * @var string
	 */
	public $room_id, $tags, $previewUrl, $url, $creator_uniqueId, $creator_id, $creator_name, $time, $type, $id, $likes = [], $version = 1;

	/**
	 * function construct
	 * create a model for the channels instance
	 * @param string $user_id
	 * @param string $user_id
	 * @param string $image_url
	 * @param string $type
	 * @param string $url
	 * @param string $user_name
	 * @param string $room_id
	 * @param string $date
	 * @param string $tags
	 */
	function __construct($user_id = '', $user_id = '', $image_url = '', $type = '', $url = '', $user_name = '', $room_id = '', $date = '', $tags = '')
	{
		$this->id               = $user_id;
		$this->tags             = $tags;
		$this->previewUrl       = $image_url;
		$this->url              = $url;
		$this->type             = $type;
		$this->creator_name     = $user_name;
		$this->creator_uniqueId = $this->creator_id = $user_id;
		$this->room_id          = $room_id;
		$this->time             = $date;
	}
}