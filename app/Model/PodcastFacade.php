<?php
namespace App\Model;

use Nette;

final class PodcastFacade
{
	
	use Nette\SmartObject;

	private $database;

	public function __construct(Nette\Database\Explorer $database)
	{
		$this->database = $database;
	}

	public function getAllPodcasts()
	{
		return $this->database->table('podcast');	
	}
}

?>