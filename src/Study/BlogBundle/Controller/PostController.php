<?php

namespace Study\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Study\BlogBundle\Document\Post;
use Study\BlogBundle\Form\Type\PostType;
use Symfony\Component\HttpFoundation\Request;

class PostController extends Controller
{
	/**
	 * Action for Page Post: Show all Posts.
	 * @author: Harrison
	 */
    public function indexAction()
    {
		$repository = $this->get('doctrine_mongodb')->getRepository('StudyBlogBundle:Post');
		$aPosts = $repository->findAllQueryBuilder();

		//\Doctrine\Common\Util\Debug::dump($oPost);
		
        return $this->render('StudyBlogBundle:Post:index.html.twig', array(
			'aPosts'	=> $aPosts,
		));
    }
	
	/**
	 * Action for Add Post: Add a Post.
	 * @param \Symfony\Component\HttpFoundation\Request $request
	 * @author: Harrison
	 */
	public function createAction(Request $request)
	{
		$oPost = new Post();
		$form = $this->createForm(new PostType(), $oPost);
		$form->handleRequest($request);
		
		if ($form->isValid()) {
			$dm = $this->get('doctrine_mongodb')->getManager();
			
			//$oPost->upload();
			
			$dm->persist($oPost);
			$dm->flush();

			$this->get('session')->getFlashBag()->add('success', $this->get('translator')->trans('Add Successfully: ' . $oPost->getTitle()));
			
			return $this->redirect($this->generateUrl('study_home_post'));
		}

		return $this->render('StudyBlogBundle:Post:add.html.twig', array(
            'form' => $form->createView(),
        ));
	}
	
	/**
	 * Action for edit a Post.
	 * @param type $id (Id of Post)
	 * @param \Symfony\Component\HttpFoundation\Request $request
	 * @return form
	 * @throws Exception
	 * @author Harrison <harrison@likipe.com>
	 */
	public function editAction($id, Request $request)
	{
		$repository = $this->get('doctrine_mongodb')
				->getRepository('StudyBlogBundle:Post');
		$oPost = $repository->find($id);
		$sPathImg = $oPost->getWebPath();
		
		if (!$oPost) {
			throw $this->createNotFoundException(
					'No product found for id ' . $id
			);
		}
		
		$form = $this->createForm(new PostType(), $oPost);
		$form->handleRequest($request);
		
		if ($form->isValid()) {
			$dm = $this->get('doctrine_mongodb')->getManager();
			$dm->flush();
			
			$this->get('session')->getFlashBag()->add('success', $this->get('translator')->trans('Edit successfully: ' . $oPost->getTitle()));
			return $this->redirect($this->generateUrl('study_home_post'));
		}
		
		return $this->render('StudyBlogBundle:Post:edit.html.twig',array(
			'form'  => 	$form->createView(),
			'sPathImg' => $sPathImg,
		));
	}
	
	/**
	 * Action for delete a Post
	 * @param type $id (Id of Post)
	 * @throws Exception
	 * @author Harrison
	 */
	public function deleteAction($id)
	{
		$repository = $this->get('doctrine_mongodb')
				->getRepository('StudyBlogBundle:Post');
		$oPost = $repository->find($id);
		if(!$oPost) {
			throw $this->createNotFoundException(
					"No product found for id " . $id
			);
		}
		
		$dm = $this->get('doctrine_mongodb')->getManager();
		$dm->remove($oPost);
		$dm->flush();
		
		$this->get('session')->getFlashBag()->add('success', $this->get('translator')->trans('Delete successfully:' . $oPost->getTitle()));
		
		return $this->redirect($this->generateUrl('study_home_post'));
	}
}
