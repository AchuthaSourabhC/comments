<?php

/* user/index.html */
class __TwigTemplate_9d0e02e298fa9d4c55eb0b9457d78c62ff48a6d79039e3523c3ea80c2acbecd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
            'content' => array($this, 'block_content'),
            'comment' => array($this, 'block_comment'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html lang=\"en\">
\t<head data-host=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "\">
\t\t<title>D-Wars</title>
          <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"> 
        <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "/public/js/bootstrap.js\"></script>
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "/public/js/jquery1.9.1.js\"></script>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "/public/css/jquery_ui.css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "/public/css/bootstrap.css\">
\t\t
          
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "/public/css/main.css\">
\t\t";
        // line 14
        $this->displayBlock('head', $context, $blocks);
        // line 18
        echo "
\t</head>

\t<body>
        <div class=\"nav\" data-role=\"header\">
            ";
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 41
        echo "            
        </div>
        
        <div class=\"page-wrap\" data-role=\"page\">
            <div class=\"post-wrap\">
                ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "\t\t\t\t
\t\t\t\t";
        // line 51
        $this->displayBlock('comment', $context, $blocks);
        // line 54
        echo "\t\t\t\t
            </div>
         
            <div class=\"footer-wrap\">
                 <script>
                \$(document).ready(function() {
                    \$('.page-wrap').css('top',( \$('.nav').outerHeight()+10));
                });
            </script>
                ";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        // line 66
        echo "            </div>
         
        </div>
\t</body>
</html>";
    }

    // line 14
    public function block_head($context, array $blocks = array())
    {
        // line 15
        echo "      

        ";
    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        // line 24
        echo "            <div class=\"title\">Comments ()</div>
            
\t\t\t<div class=\"nav-wrap\" >
\t\t\t\t<ul>
                    <li>{</li>
\t\t\t\t\t 
\t\t\t\t\t<li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "/comment/index/\">Comments</li>
\t\t\t\t\t";
        // line 31
        $this->displayBlock('nav', $context, $blocks);
        // line 37
        echo "                    <li>}</li>
\t\t\t\t</ul>
\t\t\t</div>
            ";
    }

    // line 31
    public function block_nav($context, array $blocks = array())
    {
        // line 32
        echo "\t\t\t\t\t<li><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "/index/\">home</li>
\t\t\t\t\t<li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "/index/about\">about</li>
\t\t\t\t\t<li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "/user/register\">register</a></li>
                    <li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "/user/login\">login</a></li>
                    ";
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        // line 47
        echo "                Welcome to Comments <br>Use the links on Navigation bar above to try it's features
                
                ";
    }

    // line 51
    public function block_comment($context, array $blocks = array())
    {
        // line 52
        echo "
\t\t\t\t";
    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        // line 64
        echo "                
                ";
    }

    public function getTemplateName()
    {
        return "user/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 64,  176 => 63,  171 => 52,  168 => 51,  162 => 47,  159 => 46,  153 => 35,  149 => 34,  145 => 33,  140 => 32,  137 => 31,  130 => 37,  128 => 31,  124 => 30,  116 => 24,  113 => 23,  107 => 15,  104 => 14,  96 => 66,  94 => 63,  83 => 54,  81 => 51,  78 => 50,  76 => 46,  69 => 41,  67 => 23,  60 => 18,  58 => 14,  54 => 13,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }
}
