<?php

/* ::base.html.twig */
class __TwigTemplate_74c07a843d10c616b0f83c809272158b72a89ac7fcf52b18dca9b749cb02949b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'preloader' => array($this, 'block_preloader'),
            'aside' => array($this, 'block_aside'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
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

        <!-- ASIDE -->
        ";
        // line 39
        $this->displayBlock('aside', $context, $blocks);
        // line 42
        echo "        <!-- ENDASIDE -->

        <!-- BODY -->
        ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "        <!-- ENDBODY -->

        <!-- JAVASCRIPT -->
        ";
        // line 71
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e7a5247_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7a5247_0") : $this->env->getExtension('assets')->getAssetUrl("js/e7a5247_jquery-1.9.1.min_1.js");
            // line 85
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "e7a5247_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7a5247_1") : $this->env->getExtension('assets')->getAssetUrl("js/e7a5247_bootstrap.min_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "e7a5247_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7a5247_2") : $this->env->getExtension('assets')->getAssetUrl("js/e7a5247_globalize.min_3.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "e7a5247_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7a5247_3") : $this->env->getExtension('assets')->getAssetUrl("js/e7a5247_jquery.nicescroll.min_4.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "e7a5247_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7a5247_4") : $this->env->getExtension('assets')->getAssetUrl("js/e7a5247_dx.chartjs_5.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "e7a5247_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7a5247_5") : $this->env->getExtension('assets')->getAssetUrl("js/e7a5247_demo-charts_6.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "e7a5247_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7a5247_6") : $this->env->getExtension('assets')->getAssetUrl("js/e7a5247_jquery.sparkline.min_7.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "e7a5247_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7a5247_7") : $this->env->getExtension('assets')->getAssetUrl("js/e7a5247_jquery.sparkline.demo_8.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "e7a5247_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7a5247_8") : $this->env->getExtension('assets')->getAssetUrl("js/e7a5247_angular.min_9.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "e7a5247_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7a5247_9") : $this->env->getExtension('assets')->getAssetUrl("js/e7a5247_jquery.dataTables_10.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "e7a5247_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7a5247_10") : $this->env->getExtension('assets')->getAssetUrl("js/e7a5247_DT_bootstrap_11.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "e7a5247_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7a5247_11") : $this->env->getExtension('assets')->getAssetUrl("js/e7a5247_jquery.dataTables-conf_12.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "e7a5247_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7a5247_12") : $this->env->getExtension('assets')->getAssetUrl("js/e7a5247_custom_13.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "e7a5247"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7a5247") : $this->env->getExtension('assets')->getAssetUrl("js/e7a5247.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 87
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
    public function block_aside($context, array $blocks = array())
    {
        // line 40
        echo "            ";
        $this->env->loadTemplate("includes/aside.inc.html.twig")->display($context);
        // line 41
        echo "        ";
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        // line 46
        echo "
            <section class=\"content\">

                <!-- HEADER -->
                ";
        // line 50
        $this->displayBlock('header', $context, $blocks);
        // line 53
        echo "                <!-- ENDHEADER -->

                <!-- CONTENT -->
                ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "                <!-- ENDCONTENT -->

                <!-- FOOTER -->
                ";
        // line 60
        $this->displayBlock('footer', $context, $blocks);
        // line 63
        echo "                <!-- ENDFOOTER -->

            </section>

        ";
    }

    // line 50
    public function block_header($context, array $blocks = array())
    {
        // line 51
        echo "                    ";
        $this->env->loadTemplate("includes/header.inc.html.twig")->display($context);
        // line 52
        echo "                ";
    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        // line 61
        echo "                    ";
        $this->env->loadTemplate("includes/footer.inc.html.twig")->display($context);
        // line 62
        echo "                ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 62,  279 => 61,  276 => 60,  271 => 56,  267 => 52,  264 => 51,  261 => 50,  253 => 63,  251 => 60,  246 => 57,  244 => 56,  239 => 53,  237 => 50,  231 => 46,  228 => 45,  224 => 41,  221 => 40,  218 => 39,  214 => 35,  212 => 34,  207 => 33,  201 => 10,  194 => 87,  108 => 85,  104 => 71,  99 => 68,  97 => 45,  92 => 42,  90 => 39,  85 => 36,  83 => 33,  68 => 21,  61 => 16,  47 => 14,  43 => 13,  37 => 10,  26 => 1,);
    }
}
