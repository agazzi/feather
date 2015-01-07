<?php

/* includes/aside.inc.html.twig */
class __TwigTemplate_85c03225b10e152af73ef72d311b525bb4676b043d8ba9bd0433e2f3eaaf7b1c extends Twig_Template
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
===========  ASIDE BLOCK  ===========
=====================================
-->

<aside class=\"left-panel\">
\t<div class=\"user text-center\"> <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"...\">
\t\t<h4 class=\"user-name\">";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["feather_name"]) ? $context["feather_name"] : null), "html", null, true);
        echo "</h4>
\t</div>
\t<nav class=\"navigation\">
\t\t<ul class=\"list-unstyled\">
\t\t\t<li class=\"active\">
\t\t\t\t<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("app_feather_core");
        echo "\"><i class=\"fa fa-bookmark-o\"></i><span class=\"nav-label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Dashboard"), "html", null, true);
        echo "</span></a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("app_feather_logout");
        echo "\"><i class=\"fa fa-sign-out\"></i><span class=\"nav-label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Logout"), "html", null, true);
        echo "</span></a>
\t\t\t</li>
\t\t</ul>
\t</nav>
</aside>";
    }

    public function getTemplateName()
    {
        return "includes/aside.inc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 17,  40 => 14,  32 => 9,  28 => 8,  19 => 1,);
    }
}
