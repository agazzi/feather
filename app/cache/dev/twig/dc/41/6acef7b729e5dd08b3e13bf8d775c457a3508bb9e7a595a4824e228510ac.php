<?php

/* includes/footer.inc.html.twig */
class __TwigTemplate_dc416acef7b729e5dd08b3e13bf8d775c457a3508bb9e7a595a4824e228510ac extends Twig_Template
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
==========  FOOTER BLOCK  ===========
=====================================
-->

<footer class=\"container-fluid footer\"> 
\tCopyright &copy; 2014 <a href=\"https://feather.vigitas.com\" target=\"_blank\">Feather </a> <a href=\"#\" class=\"pull-right scrollToTop\"><i class=\"fa fa-chevron-up\"></i></a> 
</footer>

<script type=\"text/javascript\">

function showAuthentication (box) {
    
    var chboxs = document.getElementsByName(\"transmission_authentication_checked\");
    var vis = \"none\";
    for(var i=0;i<chboxs.length;i++) { 
        if(chboxs[i].checked){
         vis = \"block\";
            break;
        }
    }
    document.getElementById(box).style.display = vis;

}

</script>";
    }

    public function getTemplateName()
    {
        return "includes/footer.inc.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
