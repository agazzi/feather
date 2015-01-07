<?php

/* ::security.html.twig */
class __TwigTemplate_d91801406e3ae04efc2870b04eadb283988dfd93ec81dac9806c83939f9ac348 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'preloader' => array($this, 'block_preloader'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <!-- META PROPERTIES -->
        <meta charset=\"UTF-8\" />
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- TITLE -->
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <!-- ASSETIC -->
        ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cda2f0c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cda2f0c_0") : $this->env->getExtension('assets')->getAssetUrl("css/cda2f0c_part_1_stylesheet_1.css");
            // line 14
            echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "cda2f0c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cda2f0c") : $this->env->getExtension('assets')->getAssetUrl("css/cda2f0c.css");
            echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "
        <!-- GOOGLE FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>

        <!-- FAVICON -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>

        <!-- PRELOADER -->
        ";
        // line 33
        $this->displayBlock('preloader', $context, $blocks);
        // line 36
        echo "        <!-- ENDPRELOADER -->

        <!-- BODY -->
        ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "        <!-- ENDBODY -->

        <!-- JAVASCRIPT -->
        ";
        // line 53
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "56a3189_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56a3189_0") : $this->env->getExtension('assets')->getAssetUrl("js/56a3189_jquery-1.9.1.min_1.js");
            // line 57
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "56a3189_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56a3189_1") : $this->env->getExtension('assets')->getAssetUrl("js/56a3189_bootstrap.min_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "56a3189_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56a3189_2") : $this->env->getExtension('assets')->getAssetUrl("js/56a3189_globalize.min_3.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "56a3189"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56a3189") : $this->env->getExtension('assets')->getAssetUrl("js/56a3189.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 59
        echo "        <!-- ENDJAVASCRIPTS -->

    </body>
</html>";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Feather webapp";
    }

    // line 33
    public function block_preloader($context, array $blocks = array())
    {
        echo "  
            ";
        // line 34
        $this->env->loadTemplate("includes/preloader.inc.html.twig")->display($context);
        // line 35
        echo "        ";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        // line 40
        echo "
            <div class=\"container\">

                <!-- CONTENT -->
                ";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "                <!-- ENDCONTENT -->

            </div>

        ";
    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 44,  159 => 45,  157 => 44,  151 => 40,  148 => 39,  144 => 35,  142 => 34,  137 => 33,  131 => 10,  124 => 59,  98 => 57,  94 => 53,  89 => 50,  87 => 39,  82 => 36,  80 => 33,  65 => 21,  58 => 16,  44 => 14,  40 => 13,  34 => 10,  23 => 1,);
    }
}
