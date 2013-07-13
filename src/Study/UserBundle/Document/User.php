<?php
// src//Study/UserBuundle/Document/User.php

use FOS\UserBundle\Document\User as BaseUser;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;

class User extends BaseUser
{
	/**
	 * @MongoDB\Id
	 */
}
