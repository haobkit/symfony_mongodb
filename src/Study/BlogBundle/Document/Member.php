<?php
// src/Study/BlogBundle/Document/Member.php
namespace Study\BlogBundle\Document;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;

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
	
	/**
	 *@MongoDB\ReferenceOne(targetDocument="Invitation", inversedBy="user")
	 * @Assert\NotNull(message="Your invitation is wrong")
	 */
	protected $invitation;

    /**
     * Set invitation
     *
     * @param Study\BlogBundle\Document\Invitation $invitation
     * @return self
     */
    public function setInvitation(\Study\BlogBundle\Document\Invitation $invitation)
    {
        $this->invitation = $invitation;
        return $this;
    }

    /**
     * Get invitation
     *
     * @return Study\BlogBundle\Document\Invitation $invitation
     */
    public function getInvitation()
    {
        return $this->invitation;
    }
}
