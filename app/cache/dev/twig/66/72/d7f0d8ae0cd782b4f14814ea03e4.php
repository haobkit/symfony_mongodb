<?php

/* StudyBlogBundle:Blog:index.html.twig */
class __TwigTemplate_6672d7f0d8ae0cd782b4f14814ea03e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("StudyBlogBundle::layout.html.twig");

        $this->blocks = array(
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

    // line 3
    public function block_main_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<h1>Blog Page</h1>
\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("study_add_blog");
        echo "\" class=\"add_blog btn btn-success\">Add Blog</a>
\t<ul class=\"list_blog\">
\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aBlogs"]) ? $context["aBlogs"] : $this->getContext($context, "aBlogs")));
        foreach ($context['_seq'] as $context["_key"] => $context["oBlog"]) {
            // line 8
            echo "\t\t\t<li>
\t\t\t\t<h2>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oBlog"]) ? $context["oBlog"] : $this->getContext($context, "oBlog")), "title"), "html", null, true);
            echo "</h2>
\t\t\t\t<p>";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["oBlog"]) ? $context["oBlog"] : $this->getContext($context, "oBlog")), "createdDate"), "date")), "html", null, true);
            echo "</p>
\t\t\t\t<p>";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["oBlog"]) ? $context["oBlog"] : $this->getContext($context, "oBlog")), "updatedDate"), "date")), "html", null, true);
            echo "</p>
\t\t\t\t<a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("study_edit_blog", array("id" => $this->getAttribute((isset($context["oBlog"]) ? $context["oBlog"] : $this->getContext($context, "oBlog")), "id"))), "html", null, true);
            echo "\" class=\"edit_blog btn btn-primary\">Edit</a>
\t\t\t\t<a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("study_delete_blog", array("id" => $this->getAttribute((isset($context["oBlog"]) ? $context["oBlog"] : $this->getContext($context, "oBlog")), "id"))), "html", null, true);
            echo "\" class=\"delete_blog btn btn-danger\">Delete</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oBlog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</ul>
";
    }

    public function getTemplateName()
    {
        return "StudyBlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  62 => 13,  58 => 12,  54 => 11,  50 => 10,  46 => 9,  43 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
