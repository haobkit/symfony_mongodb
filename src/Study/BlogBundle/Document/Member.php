<?php
// src/Study/BlogBundle/Document/Member.php
namespace Study\BlogBundle\Document;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Member extends BaseUser {
	/**
	 * @MongoDB\Id(strategy="auto")
	 */
	protected $id;
	
	public function __construct() 
	{
		parent::__construct();
	}
}

