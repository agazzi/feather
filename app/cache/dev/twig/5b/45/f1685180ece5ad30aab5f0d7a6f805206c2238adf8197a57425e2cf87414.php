<?php

/* AppFeatherInstallBundle:Install:step.html.twig */
class __TwigTemplate_5b45f1685180ece5ad30aab5f0d7a6f805206c2238adf8197a57425e2cf87414 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::install.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::install.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - AppFeatherInstallBundle:Install:step";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"warper container-fluid\">

\t<div class=\"page-header\">
\t\t<h1><img width=\"150px\" style=\"margin-top:-50px\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\"/>";
        echo twig_escape_filter($this->env, (isset($context["feather_name"]) ? $context["feather_name"] : $this->getContext($context, "feather_name")), "html", null, true);
        echo " <small> ";
        echo twig_escape_filter($this->env, (isset($context["feather_description"]) ? $context["feather_description"] : $this->getContext($context, "feather_description")), "html", null, true);
        echo "</small></h1>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-md-8\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("step_description"), "html", null, true);
        echo "</div>
\t\t\t\t<div class=\"panel-body panel-body-step\">

\t\t\t\t\t";
        // line 20
        echo "\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">×</span><span class=\"sr-only\">";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Close"), "html", null, true);
            echo "</span></button>
\t\t\t\t\t\t\t<strong>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("warning"), "html", null, true);
            echo "!</strong> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
\t\t\t\t\t<form method=\"POST\" action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("app_feather_install_process");
        echo "\">
\t\t\t\t\t\t
\t\t\t\t\t\t<p>Si j'amais vous ne connaisser pas les informations concernant transmission comme l'adresse, le port et les identifiants de connexions de transmission, ce n'est pas très grave et nous allons nous occuper de ces détails à votre place pour que vous puissiez profiter le plus rapidement de notre application, et dans ce cas nous vous invitons à cocher la case ci-dessous :

\t\t\t\t\t\t<div class=\"form-group\">
                            <label class=\"cr-styled\">
                                <input type=\"checkbox\" name=\"_transmission_lostinfo\" id=\"transmission_lostinfo\" ng-model=\"todo.done\">
                                <i class=\"fa\"></i> 
                        \t</label>
                        \t&nbsp;&nbsp;&nbsp;Cocher la case si vous ne disposer pas des informations de connexion à transmission
                        </div>

\t\t\t\t\t\t<!-- dotted -->
\t\t\t\t\t\t<hr class=\"dotted\">
\t\t\t\t\t\t<!-- enddotted -->

\t\t\t\t\t\t<!-- Input: main_title -->
\t\t\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t\t\t<h3>";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["feather_name"]) ? $context["feather_name"] : $this->getContext($context, "feather_name")), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("information_update"), "html", null, true);
        echo "</small></h3>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Input: username -->
\t\t\t\t\t\t<div class=\"form-group\">
                        \t<label>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("username"), "html", null, true);
        echo "</label>
                        \t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"_user_username\" class=\"form-control\" placeholder=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("username"), "html", null, true);
        echo "\" required>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-link popover-btn panel-icon form-control-feedback\" data-container=\"body\" title=\"\" data-toggle=\"popover\" data-placement=\"right\" 
\t\t\t\t\t\t\t\t\tdata-content=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("username_info"), "html", null, true);
        echo "\" data-original-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info_title"), "html", null, true);
        echo "\" aria-describedby=\"popover74740\">
                            \t\t<i class=\"fa fa-question\"></i>
                            \t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t<!-- Input: password -->
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("password"), "html", null, true);
        echo " :</label>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-lock\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"_user_password\" class=\"form-control\" placeholder=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("password"), "html", null, true);
        echo "\" required>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-link popover-btn panel-icon form-control-feedback\" data-container=\"body\" title=\"\" data-toggle=\"popover\" data-placement=\"right\" 
\t\t\t\t\t\t\t\t\tdata-content=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("password_info"), "html", null, true);
        echo "\" data-original-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info_title"), "html", null, true);
        echo "\" aria-describedby=\"popover74740\">
                            \t\t<i class=\"fa fa-question\"></i>
                            \t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- dotted -->
\t\t\t\t\t\t<hr class=\"dotted\">
\t\t\t\t\t\t<!-- enddotted -->

\t\t\t\t\t\t<!-- Input: transmission_title -->
\t\t\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t\t\t<h3>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("transmission"), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("information_transmission"), "html", null, true);
        echo "</small></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Input: transmission_dir -->
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label>";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("download_path"), "html", null, true);
        echo " :</label>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-folder-o\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"_transmission_dir\" class=\"form-control\" placeholder=\"/repertoire/de/telechargement\" required>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-link popover-btn panel-icon form-control-feedback\" data-container=\"body\" title=\"\" data-toggle=\"popover\" data-placement=\"right\" 
\t\t\t\t\t\t\t\t\tdata-content=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("transmission_dir_info"), "html", null, true);
        echo "\" data-original-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info_title"), "html", null, true);
        echo "\" aria-describedby=\"popover74740\">
                            \t\t<i class=\"fa fa-question\"></i>
                            \t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div id=\"transmission_property\">
\t\t\t\t\t\t\t<!-- Input: transmission_hostname -->
\t\t\t\t\t\t\t<div class=\"form-group\">
                        \t\t<label>";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("transmission_hostname"), "html", null, true);
        echo " :</label>
                        \t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-tasks\"></i></span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"_transmission_hostname\" class=\"form-control\" placeholder=\"127.0.0.1\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-link popover-btn panel-icon form-control-feedback\" data-container=\"body\" title=\"\" data-toggle=\"popover\" data-placement=\"right\" 
\t\t\t\t\t\t\t\t\t\tdata-content=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("transmission_hostname_info"), "html", null, true);
        echo "\" data-original-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info_title"), "html", null, true);
        echo "\" aria-describedby=\"popover74740\">
                        \t   \t\t\t<i class=\"fa fa-question\"></i>
                        \t   \t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Input: transmission_port -->
\t\t\t\t\t\t\t<div class=\"form-group\">
                        \t\t<label>";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("transmission_port"), "html", null, true);
        echo " :</label>
                        \t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-exchange\"></i></span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"_transmission_port\" class=\"form-control\" placeholder=\"9091\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-link popover-btn panel-icon form-control-feedback\" data-container=\"body\" title=\"\" data-toggle=\"popover\" data-placement=\"right\" 
\t\t\t\t\t\t\t\t\t\tdata-content=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("transmission_port_info"), "html", null, true);
        echo "\" data-original-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info_title"), "html", null, true);
        echo "\" aria-describedby=\"popover74740\">
                        \t   \t\t\t<i class=\"fa fa-question\"></i>
                        \t   \t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Input: transmission_authantication_checkbox -->
\t\t\t\t\t\t\t<div class=\"form-group\">
                        \t\t<label>";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("transmission_authantication"), "html", null, true);
        echo " :</label></br>
\t\t\t\t\t\t\t\t<div class=\"switch-button info showcase-switch-button\">
                      \t\t    \t<input name=\"_transmission_authentication\" id=\"transmission_authentication\" checked=\"\" type=\"checkbox\">
                      \t\t     \t<label for=\"transmission_authentication\"></label>
                      \t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"transmission_authinfo\">
\t\t\t\t\t\t\t\t<!-- Input: transmission_username -->
                        \t\t<div class=\"form-group\">
                        \t\t\t<label>";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("username"), "html", null, true);
        echo " :</label>
                        \t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"_transmission_username\" class=\"form-control\" placeholder=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("username"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-link popover-btn panel-icon form-control-feedback\" data-container=\"body\" title=\"\" data-toggle=\"popover\" data-placement=\"right\" 
\t\t\t\t\t\t\t\t\t\t\tdata-content=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("transmission_username_info"), "html", null, true);
        echo "\" data-original-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info_title"), "html", null, true);
        echo "\" aria-describedby=\"popover74740\">
                        \t    \t\t\t<i class=\"fa fa-question\"></i>
                        \t    \t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Input: transmission_password -->
\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"transmission_authinfo\">
\t\t\t\t\t\t\t\t\t<label>";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("password"), "html", null, true);
        echo " :</label>
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-lock\"></i></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"_transmission_password\" class=\"form-control\" placeholder=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("password"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-link popover-btn panel-icon form-control-feedback\" data-container=\"body\" title=\"\" data-toggle=\"popover\" data-placement=\"right\" 
\t\t\t\t\t\t\t\t\t\t\tdata-content=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("transmission_password_info"), "html", null, true);
        echo "\" data-original-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info_title"), "html", null, true);
        echo "\" aria-describedby=\"popover74740\">
                        \t    \t\t\t<i class=\"fa fa-question\"></i>
                        \t    \t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<hr class=\"dotted\">

\t\t\t\t\t\t<!-- Input: submit -->
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" id=\"submit\" value=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("next_step"), "html", null, true);
        echo "\" class=\"pull-right btn btn-primary\">
\t\t\t\t\t\t</div>

\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">Informations systèmes</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">Liens utiles</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "AppFeatherInstallBundle:Install:step.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 165,  303 => 153,  298 => 151,  292 => 148,  279 => 140,  274 => 138,  268 => 135,  255 => 125,  242 => 117,  234 => 112,  221 => 104,  213 => 99,  199 => 90,  191 => 85,  181 => 80,  164 => 68,  159 => 66,  153 => 63,  140 => 55,  135 => 53,  129 => 50,  119 => 45,  98 => 27,  95 => 26,  84 => 23,  80 => 22,  77 => 21,  72 => 20,  66 => 16,  53 => 10,  47 => 6,  44 => 5,  37 => 3,  11 => 1,);
    }
}
