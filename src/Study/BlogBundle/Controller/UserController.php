<?php

namespace Study\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Study\BlogBundle\Document\User;
use Study\BlogBundle\Form\Type\UserType;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    public function indexAction()
    {
		$repository = $this->get('doctrine_mongodb')
				->getRepository('StudyBlogBundle:User');
		$oUsers = $repository->findAll();
		//var_dump($blogs);
        return $this->render('StudyBlogBundle:User:index.html.twig', array(
			'users'	=> $oUsers
		));
    }
	
	public function createAction(Request $request)
	{
		$oUser = new User();
		$form = $this->createForm(new UserType(), $oUser);
		$form->handleRequest($request);
		
		if ($form->isValid()) {
			$dm = $this->get('doctrine_mongodb')->getManager();
			$dm->persist($oUser);
			$dm->flush();

			return $this->redirect($this->generateUrl('study_home_user'));
		}

		return $this->render('StudyBlogBundle:User:add.html.twig', array(
            'form' => $form->createView(),
        ));
	}
	
	public function editAction($id, Request $request)
	{
		$repository = $this->get('doctrine_mongodb')
				->getRepository('StudyBlogBundle:User');
		$oUser = $repository->find($id);
		if (!$oUser) {
			throw $this->createNotFoundException(
					'No User found for id ' . $id
			);
		}
		
		$form = $this->createForm(new UserType(), $oUser);
		$form->handleRequest($request);
		
		if ($form->isValid()) {
			$dm = $this->get('doctrine_mongodb')->getManager();
			$dm->flush();

			return $this->redirect($this->generateUrl('study_home_user'));
		}
		
		return $this->render('StudyBlogBundle:User:edit.html.twig',array(
			'form'  => 	$form->createView()
		));
	}
	
	public function deleteAction($id)
	{
		$repository = $this->get('doctrine_mongodb')
				->getRepository('StudyBlogBundle:User');
		$oUser = $repository->find($id);
		if(!$oUser) {
			throw $this->createNotFoundException(
					"No User found for id " . $id
			);
		}
		
		$dm = $this->get('doctrine_mongodb')->getManager();
		$dm->remove($oUser);
        //$oUser->setDeleted($deleted = true);
		$dm->flush();
		
		return $this->redirect($this->generateUrl('study_home_user'));
	}
}
