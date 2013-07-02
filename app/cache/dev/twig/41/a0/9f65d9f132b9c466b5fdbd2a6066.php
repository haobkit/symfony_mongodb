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
  
  \t<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
  \t<link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\">
        
\t<style type=\"text/css\">
\t  body {
\t\tpadding-bottom: 40px;
\t  }
\t  .sidebar-nav {
\t\tpadding: 9px 0;
\t  }
\t</style>
  \t";
        // line 41
        echo "\t";
        $this->displayBlock('style', $context, $blocks);
        // line 42
        echo "\t<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
\t<!--[if lt IE 9]>
\t  <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->


</head>
<body>

        <div class=\"container\">
\t\t\t";
        // line 52
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "getFlashBag", array(), "method"), "has", array(0 => "success"), "method")) {
            // line 53
            echo "\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"icon-remove\"></i></button>
\t\t\t\t\t\t\t";
            // line 55
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "getFlashBag", array(), "method"), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 56
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t\t    </div>
\t\t\t\t";
        } elseif ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "getFlashBag", array(), "method"), "has", array(0 => "error"), "method")) {
            // line 60
            echo "\t\t\t\t\t<div class=\"alert alert-error\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"icon-remove\"></i></button>
\t\t\t\t\t    ";
            // line 62
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "getFlashBag", array(), "method"), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 63
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "\t\t\t\t    </div>
\t\t\t\t";
        } elseif ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "getFlashBag", array(), "method"), "has", array(0 => "warning"), "method")) {
            // line 67
            echo "\t\t\t\t\t<div class=\"alert\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"icon-remove\"></i></button>
\t\t\t\t\t    ";
            // line 69
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "getFlashBag", array(), "method"), "get", array(0 => "warning"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 70
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "\t\t\t\t    </div>
\t\t\t";
        }
        // line 74
        echo "            ";
        $this->displayBlock('main_content', $context, $blocks);
        // line 75
        echo "
        </div> <!-- /container -->

  <!-- JavaScript at the bottom for fast page loading -->


  <!-- scripts concatenated and minified via build script -->


    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>
\t<script>window.jQuery || document.write('<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backend/js/libs/jquery-1.7.1.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
\t
\t<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t
\t";
        // line 90
        $this->displayBlock('javascripts', $context, $blocks);
        // line 91
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

    // line 41
    public function block_style($context, array $blocks = array())
    {
    }

    // line 74
    public function block_main_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 90
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
        return array (  206 => 90,  200 => 74,  195 => 41,  189 => 15,  181 => 91,  179 => 90,  174 => 88,  169 => 86,  156 => 75,  153 => 74,  149 => 72,  140 => 70,  136 => 69,  132 => 67,  128 => 65,  119 => 63,  115 => 62,  111 => 60,  107 => 58,  98 => 56,  94 => 55,  90 => 53,  88 => 52,  76 => 42,  73 => 41,  60 => 30,  56 => 29,  39 => 15,  23 => 1,  74 => 15,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  50 => 8,  46 => 7,  41 => 5,  38 => 4,  35 => 3,  29 => 2,);
    }
}
