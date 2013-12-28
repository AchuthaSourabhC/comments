<?php

/* comment/index.html */
class __TwigTemplate_d6da4aebc5fd229de407a906382420a62119afdec6aaca17f209bd80110be4a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("user/index.html");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'comment' => array($this, 'block_comment'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "user/index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "\t  <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "/public/js/jquery_validate.js\"></script>

\t<script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "/public/js/comments.js\"></script>
      

";
    }

    // line 12
    public function block_comment($context, array $blocks = array())
    {
        // line 13
        echo "
<div class=\"content-wrap\">
\t<div class='comment-form'>
\t\t<form action='dbins.php' method='post' id='cmnt-form-main' novalidate='novalidate' >
\t\t\t<textarea type='text' name='message' id='message-main' class=\"message-box\" placeholder=\"Add comments here\"></textarea>
\t\t\t<input type='hidden' value=0 name='parent_id' id='parent_id_main' >
\t\t\t<input type='submit' value='comment' id='submit-but-main' class='submit-but-wrap' >
\t\t</form>
\t</div>

\t<div class=\"cmnt-main\" id=\"cmnt\">

\t</div>

</div>

";
    }

    public function getTemplateName()
    {
        return "comment/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  46 => 12,  38 => 6,  32 => 4,  29 => 3,);
    }
}
