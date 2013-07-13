<?php

/* StudyBlogBundle::layout.html.twig */
class __TwigTemplate_41a09f65d9f132b9c466b5fdbd2a6066 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'main_content' => array($this, 'block_main_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9\" lang=\"en\"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
  <meta charset=\"utf-8\">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">

  <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <meta name=\"meta-description\" content=\"\">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  
  \t";
        // line 32
        echo "\t
\t";
        // line 33
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ab2c6bc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab2c6bc_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/style_bootstrap_1.css");
            // line 39
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
            // asset "ab2c6bc_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab2c6bc_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/style_bootstrap-responsive_2.css");
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
            // asset "ab2c6bc_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab2c6bc_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/style_main_3.css");
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        } else {
            // asset "ab2c6bc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab2c6bc") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/style.css");
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        }
        unset($context["asset_url"]);
        // line 41
        echo "
  \t";
        // line 43
        echo "\t";
        $this->displayBlock('style', $context, $blocks);
        // line 44
        echo "\t<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
\t<!--[if lt IE 9]>
\t  <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->


</head>
<body>

        <div class=\"container\">
\t\t\t<div class=\"navbar navbar-inverse\">
\t\t\t\t<div class=\"navbar-inner\">
\t\t\t\t\t<div class=\"nav-collapse collapse\">
\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "\">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("study_home_blog");
        echo "\">Blog</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("study_home_post");
        echo "\">Post</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("study_home_user");
        echo "\">User</a></li>
\t\t\t\t\t\t\t";
        // line 62
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 63
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("study_edit_user", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
            echo "\">Username: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("study_logout");
            echo "\">Logout</a></li>
\t\t\t\t\t\t\t";
        } else {
            // line 66
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("study_login");
            echo "\">Login</a></li>
\t\t\t\t\t\t\t";
        }
        // line 68
        echo "
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div><!--/.nav-collapse -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 73
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "getFlashBag", array(), "method"), "has", array(0 => "success"), "method")) {
            // line 74
            echo "\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"icon-remove\"></i></button>
\t\t\t\t\t\t\t";
            // line 76
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "getFlashBag", array(), "method"), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 77
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "\t\t\t\t    </div>
\t\t\t\t";
        } elseif ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "getFlashBag", array(), "method"), "has", array(0 => "error"), "method")) {
            // line 81
            echo "\t\t\t\t\t<div class=\"alert alert-error\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"icon-remove\"></i></button>
\t\t\t\t\t    ";
            // line 83
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "getFlashBag", array(), "method"), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 84
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "\t\t\t\t    </div>
\t\t\t\t";
        } elseif ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "getFlashBag", array(), "method"), "has", array(0 => "warning"), "method")) {
            // line 88
            echo "\t\t\t\t\t<div class=\"alert\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"icon-remove\"></i></button>
\t\t\t\t\t    ";
            // line 90
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "getFlashBag", array(), "method"), "get", array(0 => "warning"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 91
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "\t\t\t\t    </div>
\t\t\t";
        }
        // line 95
        echo "            ";
        $this->displayBlock('main_content', $context, $blocks);
        // line 96
        echo "
        </div> <!-- /container -->

  <!-- JavaScript at the bottom for fast page loading -->


  <!-- scripts concatenated and minified via build script -->


    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>
\t<script>window.jQuery || document.write('<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
\t
\t<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t
\t";
        // line 111
        $this->displayBlock('javascripts', $context, $blocks);
        // line 112
        echo "
  <!-- end scripts -->

</body>
</html>";
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        echo "Blog";
    }

    // line 43
    public function block_style($context, array $blocks = array())
    {
    }

    // line 95
    public function block_main_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "StudyBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 111,  266 => 95,  261 => 43,  255 => 15,  245 => 111,  240 => 109,  222 => 96,  219 => 95,  215 => 93,  206 => 91,  202 => 90,  198 => 88,  194 => 86,  185 => 84,  181 => 83,  129 => 63,  127 => 62,  63 => 39,  59 => 33,  23 => 1,  97 => 36,  65 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 112,  241 => 77,  235 => 107,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 60,  107 => 36,  71 => 22,  177 => 81,  165 => 64,  160 => 76,  135 => 47,  126 => 45,  114 => 37,  84 => 28,  70 => 20,  67 => 15,  61 => 13,  38 => 6,  94 => 35,  89 => 41,  85 => 25,  75 => 23,  68 => 14,  56 => 32,  87 => 20,  21 => 2,  26 => 6,  93 => 28,  88 => 31,  78 => 21,  46 => 7,  27 => 4,  44 => 8,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 74,  151 => 57,  142 => 59,  138 => 43,  136 => 64,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 17,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  72 => 16,  69 => 25,  47 => 9,  40 => 4,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 61,  120 => 39,  115 => 59,  111 => 58,  108 => 37,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 3,  32 => 4,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 79,  168 => 66,  164 => 77,  162 => 62,  154 => 73,  149 => 51,  147 => 68,  144 => 53,  141 => 66,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 36,  103 => 37,  99 => 30,  95 => 44,  92 => 43,  86 => 30,  82 => 28,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 14,  54 => 10,  51 => 11,  48 => 13,  45 => 17,  42 => 7,  39 => 15,  36 => 5,  33 => 4,  30 => 3,);
    }
}
