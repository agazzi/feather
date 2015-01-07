<?php

/* ::install.html.twig */
class __TwigTemplate_8da2984db85e2ccf02ddb913d015d07386f6d73260df94586e86907e4f3b956b extends Twig_Template
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cda2f0c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/cda2f0c_part_1_stylesheet_1.css");
            // line 14
            echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "cda2f0c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cda2f0c") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/cda2f0c.css");
            echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
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
            // asset "5f69957_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5f69957_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5f69957_jquery-1.9.1.min_1.js");
            // line 58
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "5f69957_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5f69957_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5f69957_bootstrap.min_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "5f69957_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5f69957_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5f69957_jquery.nicescroll.min_3.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "5f69957_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5f69957_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5f69957_custom_4.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "5f69957"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5f69957") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5f69957.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 60
        echo "        <!-- ENDJAVASCRIPTS -->

        <script type=\"text/javascript\">
        
            \$('#transmission_authentication').change(function(){
                if (this.checked) {
                  \$('#transmission_authinfo').fadeIn('slow');
                } else {
                  \$('#transmission_authinfo').hide().fadeOut('slow');
                }                   
            });

            \$('#transmission_authinfo').hide();
            \$('#transmission_authentication').removeAttr('checked');
            
            \$('#transmission_lostinfo').change(function(){
                if (this.checked) {
                  \$('#transmission_property').fadeOut('slow');
                } else {
                  \$('#transmission_property').fadeIn('slow');
                }                   
            });

        </script>

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
        return "::install.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 44,  188 => 45,  186 => 44,  180 => 40,  177 => 39,  173 => 35,  171 => 34,  166 => 33,  160 => 10,  130 => 60,  98 => 58,  94 => 53,  89 => 50,  87 => 39,  82 => 36,  80 => 33,  65 => 21,  58 => 16,  44 => 14,  40 => 13,  34 => 10,  23 => 1,);
    }
}
