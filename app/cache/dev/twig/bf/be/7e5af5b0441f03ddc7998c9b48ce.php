<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_bfbe7e5af5b0441f03ddc7998c9b48ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 22,  102 => 17,  90 => 32,  146 => 38,  76 => 17,  53 => 11,  58 => 14,  34 => 6,  272 => 111,  266 => 95,  261 => 43,  255 => 15,  245 => 111,  240 => 109,  222 => 96,  219 => 95,  215 => 93,  206 => 91,  202 => 90,  198 => 88,  194 => 86,  185 => 84,  181 => 83,  129 => 63,  127 => 28,  63 => 16,  59 => 13,  23 => 4,  97 => 29,  65 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 112,  241 => 77,  235 => 107,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 5,  132 => 40,  128 => 49,  119 => 60,  107 => 36,  71 => 23,  177 => 81,  165 => 64,  160 => 76,  135 => 47,  126 => 36,  114 => 37,  84 => 29,  70 => 20,  67 => 17,  61 => 12,  38 => 6,  94 => 34,  89 => 41,  85 => 25,  75 => 21,  68 => 19,  56 => 11,  87 => 20,  21 => 1,  26 => 11,  93 => 27,  88 => 31,  78 => 26,  46 => 8,  27 => 5,  44 => 8,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 74,  151 => 57,  142 => 59,  138 => 43,  136 => 64,  121 => 46,  117 => 19,  105 => 18,  91 => 31,  62 => 15,  49 => 10,  24 => 7,  25 => 3,  19 => 1,  79 => 23,  72 => 13,  69 => 15,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 61,  120 => 20,  115 => 59,  111 => 32,  108 => 19,  101 => 30,  98 => 31,  96 => 31,  83 => 25,  74 => 21,  66 => 22,  55 => 15,  52 => 10,  50 => 11,  43 => 7,  41 => 5,  35 => 5,  32 => 7,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 79,  168 => 66,  164 => 77,  162 => 62,  154 => 73,  149 => 39,  147 => 68,  144 => 53,  141 => 66,  133 => 55,  130 => 38,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 31,  103 => 37,  99 => 30,  95 => 21,  92 => 43,  86 => 18,  82 => 28,  80 => 19,  73 => 16,  64 => 13,  60 => 10,  57 => 12,  54 => 9,  51 => 9,  48 => 9,  45 => 8,  42 => 7,  39 => 7,  36 => 5,  33 => 3,  30 => 3,);
    }
}
