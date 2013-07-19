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
        return array (  272 => 111,  266 => 95,  261 => 43,  255 => 15,  247 => 112,  245 => 111,  240 => 109,  235 => 107,  222 => 96,  219 => 95,  215 => 93,  206 => 91,  202 => 90,  198 => 88,  194 => 86,  185 => 84,  181 => 83,  177 => 81,  173 => 79,  164 => 77,  160 => 76,  156 => 74,  154 => 73,  147 => 68,  141 => 66,  136 => 64,  129 => 63,  127 => 62,  123 => 61,  119 => 60,  115 => 59,  111 => 58,  95 => 44,  92 => 43,  89 => 41,  63 => 39,  59 => 33,  39 => 15,  23 => 1,  64 => 20,  56 => 32,  51 => 9,  48 => 8,  42 => 6,  40 => 5,  35 => 4,  29 => 3,);
    }
}
