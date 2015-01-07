<?php

/* includes/header.inc.html.twig */
class __TwigTemplate_9e731df86811f81a48686b183731e56c26244026a86d4571a84497069a4750e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!--
=====================================
==========  HEADER BLOCK  ===========
=====================================
-->

<header class=\"top-head container-fluid\">
<button type=\"button\" class=\"navbar-toggle pull-left\"> <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>

<ul class=\"nav-toolbar\">
\t";
        // line 27
        echo "\t<li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\"><i class=\"fa fa-ellipsis-v\"></i></a>
    \t<div class=\"dropdown-menu lg pull-right arrow panel panel-default arrow-top-right\" style=\"min-width:150px !important;\">
        \t<div class=\"panel-heading\">
            \t";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Profile"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "
            </div>
            <div class=\"panel-body text-center\">
            \t<div class=\"row\">
                \t<div class=\"col-xs-12 col-sm-12\"><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("app_feather_logout");
        echo "\" class=\"text-info\"><span class=\"h2\"><i class=\"fa fa-sign-out\"></i></span><p class=\"text-gray no-margn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Logout"), "html", null, true);
        echo "</p></a></div>
                </div>
            </div>
        </div>
    </li>
</ul> 

</header>";
    }

    public function getTemplateName()
    {
        return "includes/header.inc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 34,  36 => 30,  31 => 27,  19 => 1,);
    }
}
