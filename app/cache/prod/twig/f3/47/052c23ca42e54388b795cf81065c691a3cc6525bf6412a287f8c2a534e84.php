<?php

/* AppFeatherUserBundle:Security:login.html.twig */
class __TwigTemplate_f347052c23ca42e54388b795cf81065c691a3cc6525bf6412a287f8c2a534e84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::security.html.twig");
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
        return "::security.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - AppFeatherUserBundle:Security:login";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 9
            echo "\t<div style=\"margin-top:20px;\" class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array()), "html", null, true);
            echo "</div>
";
        }
        // line 11
        echo "
";
        // line 13
        echo "\t<div class=\"row\">
\t\t<div class=\"col-lg-4 col-lg-offset-4\">
\t\t<h3 class=\"text-center\">Feather</h3>
\t    <p class=\"text-center\">a simple, flexible and beautiful torrent webapp</p>
\t    <hr class=\"clean\">
\t\t\t<form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("app_feather_login_check");
        echo "\" method=\"POST\">
\t    \t\t<div class=\"form-group input-group\">
\t    \t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-envelope\"></i></span>
\t    \t\t\t<input type=\"hidden\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" placeholder=\"Identifiant\" />
\t    \t\t\t<input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" placeholder=\"Identifiant\" />
\t    \t\t</div>
\t    \t\t<div class=\"form-group input-group\">
\t    \t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-key\"></i></span>
\t    \t\t  \t<input type=\"hidden\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"Mot de passe\" />
\t    \t\t  \t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"Mot de passe\" />
\t    \t\t</div>
\t    \t\t<div class=\"form-group\">
\t    \t\t  \t<label class=\"cr-styled\">
\t    \t\t      \t<input type=\"checkbox\" ng-model=\"todo.done\">
\t    \t\t      \t<i class=\"fa\"></i> 
\t    \t\t  \t</label>
\t    \t\t  \tSe souvenir de moi
\t    \t\t</div>
\t\t\t\t<button type=\"submit\" class=\"btn btn-purple btn-block\">Connexion</button>
\t    \t</form>
\t    <hr>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "AppFeatherUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  74 => 21,  68 => 18,  61 => 13,  58 => 11,  52 => 9,  50 => 8,  47 => 6,  44 => 5,  37 => 3,  11 => 1,);
    }
}
