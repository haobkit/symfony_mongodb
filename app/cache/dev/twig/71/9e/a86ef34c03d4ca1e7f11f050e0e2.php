<?php

/* StudyBlogBundle:Blog:edit.html.twig */
class __TwigTemplate_719ea86ef34c03d4ca1e7f11f050e0e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("StudyBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StudyBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Edit Blog ";
    }

    // line 3
    public function block_main_content($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "StudyBlogBundle:Blog:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  35 => 3,  29 => 2,);
    }
}
