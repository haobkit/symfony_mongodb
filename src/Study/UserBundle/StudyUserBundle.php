<?php
// src/Study/UserBundle/StudyUserBundle.php
namespace Study\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class StudyUserBundle extends Bundle
{
	public function getParent() 
	{
		return 'FOSUserBundle';
	}
}
