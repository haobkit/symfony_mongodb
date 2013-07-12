<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/blog')) {
            // study_add_blog
            if ($pathinfo === '/blog/add') {
                return array (  '_controller' => 'Study\\BlogBundle\\Controller\\BlogController::createAction',  '_route' => 'study_add_blog',);
            }

            // study_edit_blog
            if (0 === strpos($pathinfo, '/blog/edit') && preg_match('#^/blog/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'study_edit_blog')), array (  '_controller' => 'Study\\BlogBundle\\Controller\\BlogController::editAction',));
            }

            // study_delete_blog
            if (0 === strpos($pathinfo, '/blog/delete') && preg_match('#^/blog/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'study_delete_blog')), array (  '_controller' => 'Study\\BlogBundle\\Controller\\BlogController::deleteAction',));
            }

            // study_home_blog
            if ($pathinfo === '/blog') {
                return array (  '_controller' => 'Study\\BlogBundle\\Controller\\BlogController::indexAction',  '_route' => 'study_home_blog',);
            }

        }

        if (0 === strpos($pathinfo, '/post')) {
            // study_add_post
            if ($pathinfo === '/post/add') {
                return array (  '_controller' => 'Study\\BlogBundle\\Controller\\PostController::createAction',  '_route' => 'study_add_post',);
            }

            // study_edit_post
            if (0 === strpos($pathinfo, '/post/edit') && preg_match('#^/post/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'study_edit_post')), array (  '_controller' => 'Study\\BlogBundle\\Controller\\PostController::editAction',));
            }

            // study_delete_post
            if (0 === strpos($pathinfo, '/post/delete') && preg_match('#^/post/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'study_delete_post')), array (  '_controller' => 'Study\\BlogBundle\\Controller\\PostController::deleteAction',));
            }

            // study_home_post
            if ($pathinfo === '/post') {
                return array (  '_controller' => 'Study\\BlogBundle\\Controller\\PostController::indexAction',  '_route' => 'study_home_post',);
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // study_add_user
            if ($pathinfo === '/user/add') {
                return array (  '_controller' => 'Study\\BlogBundle\\Controller\\UserController::createAction',  '_route' => 'study_add_user',);
            }

            // study_edit_user
            if (0 === strpos($pathinfo, '/user/edit') && preg_match('#^/user/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'study_edit_user')), array (  '_controller' => 'Study\\BlogBundle\\Controller\\UserController::editAction',));
            }

            // study_delete_user
            if (0 === strpos($pathinfo, '/user/delete') && preg_match('#^/user/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'study_delete_user')), array (  '_controller' => 'Study\\BlogBundle\\Controller\\UserController::deleteAction',));
            }

            // study_home_user
            if ($pathinfo === '/user') {
                return array (  '_controller' => 'Study\\BlogBundle\\Controller\\UserController::indexAction',  '_route' => 'study_home_user',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // study_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Study\\BlogBundle\\Controller\\SecurityController::loginAction',  '_route' => 'study_login',);
                }

                // study_login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'study_login_check');
                }

            }

            // study_logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'study_logout');
            }

        }

        if (0 === strpos($pathinfo, '/post')) {
            // study_add_comment
            if (preg_match('#^/post/(?P<idPost>[^/]++)/comment/add$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'study_add_comment')), array (  '_controller' => 'Study\\BlogBundle\\Controller\\CommentController::createAction',));
            }

            // study_edit_comment
            if (preg_match('#^/post/(?P<idPost>[^/]++)/comment/edit/(?P<idComment>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'study_edit_comment')), array (  '_controller' => 'Study\\BlogBundle\\Controller\\CommentController::editAction',));
            }

            // study_delete_comment
            if (preg_match('#^/post/(?P<idPost>[^/]++)/comment/delete/(?P<idComment>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'study_delete_comment')), array (  '_controller' => 'Study\\BlogBundle\\Controller\\CommentController::deleteAction',));
            }

            // study_home_comment
            if (preg_match('#^/post/(?P<idPost>[^/]++)/comment$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'study_home_comment')), array (  '_controller' => 'Study\\BlogBundle\\Controller\\CommentController::indexAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
