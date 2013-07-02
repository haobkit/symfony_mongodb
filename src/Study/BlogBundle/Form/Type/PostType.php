<?php
// src/Study/BlogBundle/Form/Type
namespace Study\BlogBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ODM\MongoDB\DocumentRepository;

class PostType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('title');	
		$builder->add('blog','document',array(
			'class'	=> 'StudyBlogBundle:Blog',
			'property'	=>	'title',
            'empty_value' => 'Choose an option',
			'query_builder' => function(DocumentRepository $er)
            {
                return $er->createQueryBuilder('blog')
                    ->field('deleted')->equals(false)
						->sort('price', 'ASC');
            },
		));
		$builder->add('shortDescription', 'textarea');
		$builder->add('fullDescription', 'textarea');
		$builder->add('viewed', 'integer');
		$builder->add('file','file', array(
			'label'	=> 'Post Image',
			'required'	=> false,
		));
		$builder->add('author');
		$builder->add('createdDate', 'datetime');
		$builder->add('updatedDate', 'datetime');
		$builder->add('save', 'submit', array(
            'attr'  => array('class' => 'btn btn-success'),
        ));
	}
	
	public function getName()
    {
        return 'post';
    }
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'Study\BlogBundle\Document\Post',
		));
	}
}
