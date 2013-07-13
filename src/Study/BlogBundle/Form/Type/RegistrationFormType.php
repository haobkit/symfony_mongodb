<?php
// src/Study/BlogBundle/Form/Type/RegistrationFormType.php

namespace Study\BlogBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
	public function buildForm(FormBuilderInterface $builder, array $options) {
		parent::buildForm($builder, $options);
		
		$builder->add('name');
	}
	
	public function getName() 
	{
		return 'study_user_registration';
	}
}
