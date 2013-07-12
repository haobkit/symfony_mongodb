<?php

/* StudyBlogBundle:User:index.html.twig */
class __TwigTemplate_728d77190b005f57b466ebb052520e5f extends Twig_Template
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
        echo " User ";
    }

    // line 3
    public function block_main_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<h1>User Page</h1>
\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("study_add_user");
        echo "\" class=\"add_blog btn btn-success\">Add User</a>
\t<ul class=\"list_user\">
\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 8
            echo "\t\t\t<li>
\t\t\t\t<h2>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
            echo "</h2>
\t\t\t\t<p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
            echo "</p>
\t\t\t\t<a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("study_edit_user", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\" class=\"edit_user btn btn-primary\">Edit</a>
\t\t\t\t<a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("study_delete_user", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\" class=\"delete_user btn btn-danger\">Delete</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t</ul>
";
    }

    public function getTemplateName()
    {
        return "StudyBlogBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 14,  53 => 9,  58 => 12,  34 => 5,  272 => 111,  266 => 95,  261 => 43,  255 => 15,  245 => 111,  240 => 109,  222 => 96,  219 => 95,  215 => 93,  206 => 91,  202 => 90,  198 => 88,  194 => 86,  185 => 84,  181 => 83,  129 => 63,  127 => 62,  63 => 39,  59 => 11,  23 => 1,  97 => 36,  65 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 112,  241 => 77,  235 => 107,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 60,  107 => 36,  71 => 16,  177 => 81,  165 => 64,  160 => 76,  135 => 47,  126 => 45,  114 => 37,  84 => 28,  70 => 14,  67 => 15,  61 => 11,  38 => 4,  94 => 35,  89 => 41,  85 => 25,  75 => 23,  68 => 12,  56 => 11,  87 => 20,  21 => 2,  26 => 6,  93 => 28,  88 => 31,  78 => 16,  46 => 7,  27 => 4,  44 => 8,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 74,  151 => 57,  142 => 59,  138 => 43,  136 => 64,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 13,  49 => 19,  24 => 4,  25 => 3,  19 => 2,  79 => 27,  72 => 13,  69 => 15,  47 => 9,  40 => 4,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 61,  120 => 39,  115 => 59,  111 => 58,  108 => 37,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 15,  66 => 15,  55 => 15,  52 => 8,  50 => 8,  43 => 5,  41 => 5,  35 => 3,  32 => 4,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 79,  168 => 66,  164 => 77,  162 => 62,  154 => 73,  149 => 51,  147 => 68,  144 => 53,  141 => 66,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 36,  103 => 37,  99 => 30,  95 => 21,  92 => 43,  86 => 18,  82 => 17,  80 => 19,  73 => 19,  64 => 20,  60 => 10,  57 => 10,  54 => 11,  51 => 9,  48 => 8,  45 => 17,  42 => 6,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
