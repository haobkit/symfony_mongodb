<?php

namespace Study\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Study\BlogBundle\Document\Blog;
use Study\BlogBundle\Form\Type\BlogType;
use Symfony\Component\HttpFoundation\Request;
//use Study\BlogBundle\Service\Log;

class BlogController extends Controller
{
    public function indexAction($page)
    {
		$repository = $this->get('doctrine_mongodb')->getRepository('StudyBlogBundle:Blog');
		$aBlogs = $repository->findBy(array('deleted' => false), array('updatedDate', 'ASC'), 2, 2 * ($page-1));
		//$aBlogs = $repository->findAllQueryBuilder();
		//$aTestFilter = array('hao', 'hoang', 'hieu', 'hau');
		//var_dump($blogs);
        return $this->render('StudyBlogBundle:Blog:index.html.twig', array(
			'aBlogs'	=> $aBlogs,
		));
    }
	
	public function createAction(Request $request)
	{
		$oBlog = new Blog();
		$form = $this->createForm(new BlogType(), $oBlog);
		$form->handleRequest($request);
		
		if ($form->isValid()) {
			$dm = $this->get('doctrine_mongodb')->getManager();
			$dm->persist($oBlog);
			$dm->flush();
			//$oLog = new Log();
			//$oLog = $this->get('study_blog_log');
			//$sMessage = 'Add a ' . $oBlog->getTitle();
			//$oLog->writelog($sMessage);
			$this->get( 'session' )->getFlashBag()->add( 'success', $this->get('translator')->trans('Add successfully: ' . $oBlog->getTitle()) );
			return $this->redirect($this->generateUrl('study_home_blog'));
		}

		return $this->render('StudyBlogBundle:Blog:add.html.twig', array(
            'form' => $form->createView(),
        ));
	}
	
	public function editAction($id, Request $request)
	{
		$repository = $this->get('doctrine_mongodb')
				->getRepository('StudyBlogBundle:Blog');
		$oBlog = $repository->find($id);
		if (!$oBlog) {
			throw $this->createNotFoundException(
					'No product found for id ' . $id
			);
		}
		
		$form = $this->createForm(new BlogType(), $oBlog);
		$form->handleRequest($request);
		
		if ($form->isValid()) {
			$dm = $this->get('doctrine_mongodb')->getManager();
			$dm->flush();
			
			$this->get( 'session' )->getFlashBag()->add( 'success', $this->get('translator')->trans('Edit successfully: ' . $oBlog->getTitle()) );
			
			return $this->redirect($this->generateUrl('study_home_blog'));
		}
		
		return $this->render('StudyBlogBundle:Blog:edit.html.twig',array(
			'form'  => 	$form->createView()
		));
	}
	
	public function deleteAction($id)
	{
		$repository = $this->get('doctrine_mongodb')
				->getRepository('StudyBlogBundle:Blog');
		$oBlog = $repository->find($id);
		if(!$oBlog) {
			throw $this->createNotFoundException(
					"No product found for id" . $id
			);
		}
		
		$dm = $this->get('doctrine_mongodb')->getManager();
		//$em->remove($oBlog);
        $oBlog->setDeleted($deleted = true);
		$dm->flush();
		
		//$oLog = $this->get('study_blog_log');
		//$sMessage = 'Delete a ' . $oBlog->getTitle();
		//$oLog->writelog($sMessage);
		
		$this->get( 'session' )->getFlashBag()->add( 'success', $this->get('translator')->trans('Delete successfully: ' . $oBlog->getTitle()) );
				
		return $this->redirect($this->generateUrl('study_home_blog'));
	}
}
