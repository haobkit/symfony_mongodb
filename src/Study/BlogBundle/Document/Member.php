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
	
	/**
	 * @MongoDB\Field(type="string")
	 */
	protected $name;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }
}
