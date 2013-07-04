<?php
// src/Study/BlogBundle/Form/Type
namespace Study\BlogBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommentType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('title');
		$builder->add('description', 'textarea');
		$builder->add('createdDate', 'datetime');
		$builder->add('updatedDate', 'datetime');
		$builder->add('save', 'submit', array(
            'attr'  => array('class' => 'btn btn-success'),
        ));
	}
	
	public function getName()
    {
        return 'comment';
    }
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'Study\BlogBundle\Document\Comment',
		));
	}
}
