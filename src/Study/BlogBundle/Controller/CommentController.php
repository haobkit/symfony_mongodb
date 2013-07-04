<?php

namespace Study\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Study\BlogBundle\Document\Comment;
use Study\BlogBundle\Form\Type\CommentType;
use Symfony\Component\HttpFoundation\Request;
//use Study\BlogBundle\Service\Log;

class CommentController extends Controller
{
    public function indexAction($idPost)
    {
		$repository = $this->get('doctrine_mongodb')->getRepository('StudyBlogBundle:Post');
		$oPost = $repository->find($idPost);
		//$aTestFilter = array('hao', 'hoang', 'hieu', 'hau');
		//var_dump($blogs);
		$aComments = $oPost->getComments();
		//echo count($aComments);
		//echo "<pre>";
		//var_dump($aComments);
		//\Doctrine\Common\Util\Debug::dump($aComments);
		//echo "</pre>";
        return $this->render('StudyBlogBundle:Comment:index.html.twig', array(
			'aComments'	=> $aComments,
			'idPost'	=> $idPost
		));
    }
	
	public function createAction(Request $request, $idPost)
	{
		$oComment = new Comment();
		$form = $this->createForm(new CommentType(), $oComment);
		
		$repository = $this->get('doctrine_mongodb')->getRepository('StudyBlogBundle:Post');
		$oPost = $repository->find($idPost);
		if(!$oPost) {
			throw $this->createNotFoundException(
					"No Post found for id" . $idPost
			);
		}
		
		$form->handleRequest($request);
		
		if ($form->isValid()) {
			$dm = $this->get('doctrine_mongodb')->getManager();
			$oPost->addComment($oComment);
			//$dm->persist($oBlog);
			$dm->flush();
			//$oLog = new Log();
			//$oLog = $this->get('study_blog_log');
			//$sMessage = 'Add a ' . $oBlog->getTitle();
			//$oLog->writelog($sMessage);
			$this->get( 'session' )->getFlashBag()->add( 'success', $this->get('translator')->trans('Add comment to' . $oPost->getTitle() . 'successfully: ') );
			return $this->redirect($this->generateUrl('study_home_post'));
		}

		return $this->render('StudyBlogBundle:Comment:add.html.twig', array(
            'form' => $form->createView(),
        ));
	}
	
	public function editAction($idPost, $idComment, Request $request)
	{
		$repository = $this->get('doctrine_mongodb')
				->getRepository('StudyBlogBundle:Post');
		$oPost = $repository->find($idPost);
		if(!$oPost) {
			throw $this->createNotFoundException(
					'No Post of Comment found'
			);
		}
		
		$oComment = $oPost->getAComment($idComment);
		if (!$oComment) {
			throw $this->createNotFoundException(
					'No Comment found for id ' . $idComment
			);
		}
		
		$form = $this->createForm(new CommentType(), $oComment);
		$form->handleRequest($request);
		
		if ($form->isValid()) {
			$dm = $this->get('doctrine_mongodb')->getManager();
			$oPost->editAComment($oComment);
			$dm->flush();
			
			$this->get( 'session' )->getFlashBag()->add( 'success', $this->get('translator')->trans('Edit successfully: ' . $oComment->getTitle()) );
			
			return $this->redirect($this->generateUrl('study_home_comment', array('idPost'=> $idPost)));
		}
		
		return $this->render('StudyBlogBundle:Blog:edit.html.twig',array(
			'form'  => 	$form->createView()
		));
	}
	
	public function deleteAction($idPost, $idComment)
	{
		$repository = $this->get('doctrine_mongodb')
				->getRepository('StudyBlogBundle:Post');
		$oPost = $repository->find($idPost);
		if(!$oPost) {
			throw $this->createNotFoundException(
					'No Post of Comment found'
			);
		}
		
		$oComment = $oPost->getAComment($idComment);
		if (!$oComment) {
			throw $this->createNotFoundException(
					'No Comment found for id ' . $idComment
			);
		}
		
		$dm = $this->get('doctrine_mongodb')->getManager();
		//$em->remove($oBlog);
        $oPost->deleteAComment($idComment);
		$dm->flush();
		
		//$oLog = $this->get('study_blog_log');
		//$sMessage = 'Delete a ' . $oBlog->getTitle();
		//$oLog->writelog($sMessage);
		
		$this->get( 'session' )->getFlashBag()->add( 'success', $this->get('translator')->trans('Delete successfully: ' . $oComment->getTitle()) );
				
		return $this->redirect($this->generateUrl('study_home_post'));
	}
}
