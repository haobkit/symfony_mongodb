<?php

/* StudyBlogBundle:Post:index.html.twig */
class __TwigTemplate_a23f9f80011dc922dfa1f77fffb53be8 extends Twig_Template
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
        echo " Post ";
    }

    // line 3
    public function block_main_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<h1>Post Page</h1>
\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("study_add_post");
        echo "\" class=\"add_blog btn btn-success\">Add Post</a>
\t<ul class=\"list_post\">
\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aPosts"]) ? $context["aPosts"] : $this->getContext($context, "aPosts")));
        foreach ($context['_seq'] as $context["_key"] => $context["oPost"]) {
            // line 8
            echo "\t\t\t<li>
\t\t\t\t<h2>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oPost"]) ? $context["oPost"] : $this->getContext($context, "oPost")), "title"), "html", null, true);
            echo "</h2>
\t\t\t\t";
            // line 10
            if ((!(null === $this->getAttribute((isset($context["oPost"]) ? $context["oPost"] : $this->getContext($context, "oPost")), "blog")))) {
                // line 11
                echo "\t\t\t\t\t<p>Blog: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["oPost"]) ? $context["oPost"] : $this->getContext($context, "oPost")), "blog"), "title"), "html", null, true);
                echo "</p>
\t\t\t\t";
            }
            // line 13
            echo "\t\t\t\t<p>Created Date: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["oPost"]) ? $context["oPost"] : $this->getContext($context, "oPost")), "createdDate"), "date")), "html", null, true);
            echo "</p>
\t\t\t\t<p>Updated Date: ";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["oPost"]) ? $context["oPost"] : $this->getContext($context, "oPost")), "updatedDate"), "date")), "html", null, true);
            echo "</p>
\t\t\t\t<a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("study_edit_post", array("id" => $this->getAttribute((isset($context["oPost"]) ? $context["oPost"] : $this->getContext($context, "oPost")), "id"))), "html", null, true);
            echo "\" class=\"edit_blog btn btn-primary\">Edit</a>
\t\t\t\t<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("study_add_comment", array("idPost" => $this->getAttribute((isset($context["oPost"]) ? $context["oPost"] : $this->getContext($context, "oPost")), "id"))), "html", null, true);
            echo "\" class=\"add_comment btn btn-info\">Add Comment</a>
\t\t\t\t<a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("study_home_comment", array("idPost" => $this->getAttribute((isset($context["oPost"]) ? $context["oPost"] : $this->getContext($context, "oPost")), "id"))), "html", null, true);
            echo "\" class=\"list_comment btn btn-info\">List Comment</a>
\t\t\t\t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("study_delete_post", array("id" => $this->getAttribute((isset($context["oPost"]) ? $context["oPost"] : $this->getContext($context, "oPost")), "id"))), "html", null, true);
            echo "\" class=\"delete_blog btn btn-danger\">Delete</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oPost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t</ul>
";
    }

    public function getTemplateName()
    {
        return "StudyBlogBundle:Post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 21,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  65 => 13,  59 => 11,  57 => 10,  53 => 9,  50 => 8,  46 => 7,  41 => 5,  38 => 4,  35 => 3,  29 => 2,);
    }
}
