<?php

/* AppFeatherInstallBundle:Install:install.html.twig */
class __TwigTemplate_a1d1c2d776c0a157e549d36c8838c27ed2f04ec73af1370923d605970f9f1795 extends Twig_Template
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
        echo " - AppFeatherInstallBundle:Install:install";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        $context["modal_error"] = "0";
        // line 8
        echo "
<div class=\"warper container-fluid\">

\t<div class=\"page-header\">
\t\t<h1><img width=\"150px\" style=\"margin-top:-50px\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\"/>";
        echo twig_escape_filter($this->env, (isset($context["feather_name"]) ? $context["feather_name"] : null), "html", null, true);
        echo " <small> ";
        echo twig_escape_filter($this->env, (isset($context["feather_description"]) ? $context["feather_description"] : null), "html", null, true);
        echo "</small></h1>
\t</div>

\t<div class=\"row\">

\t\t<div class=\"col-md-8\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">Bienvenue dans l'assistant d'installation de feather</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"alert alert-info alert-dismissible\" role=\"alert\">
\t\t\t\t\t  \t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t  \t<strong>INFO!</strong> Si vous rencontrer des problèmes durant l'installation <a href=\"mailto:contact@vigitas.com\">contactez-nous</a>
\t\t\t\t\t</div>
\t\t\t\t\t<p>
    \t\t\t\t\tBienvenue dans l'assistant d'installation de <strong>";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["feather_name"]) ? $context["feather_name"] : null), "html", null, true);
        echo "</strong>,<br> avant de nous lancer nous avons besoin de quelques informations concernant <strong><em>l'environnement</em></strong> et les <strong><em>dépendances</em></strong> necessaires au bon fonctionnement de cette application, et afin de proceder a la suites des evenements dans les meilleurs conditions possible il est important que vous ayer en votre possession les informations suivantes:

    \t\t\t\t\t<hr class=\"dotted\">

    \t\t\t\t\t<h4>
    \t\t\t\t\t\t1 <small>l'adresse de votre serveur rpc</small>
    \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-link tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Par défault l'adresse est 127.0.0.1\">
    \t\t\t\t\t\t\t<i class=\"fa fa-question-circle\"></i>
    \t\t\t\t\t\t</button><br>
\t\t\t\t\t\t\t2 <small>le port de votre serveur rpc</small>
    \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-link tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Par défault le port est 9091\">
    \t\t\t\t\t\t\t<i class=\"fa fa-question-circle\"></i>
    \t\t\t\t\t\t</button><br>
    \t\t\t\t\t\t3 <small>Le répertoire ou seront enregistrer vos fichiers une fois le telechargement terminé</small>
    \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-link tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Par exemple /var/www/films\">
    \t\t\t\t\t\t\t<i class=\"fa fa-question-circle\"></i>
    \t\t\t\t\t\t</button><br>
    \t\t\t\t\t\t4 <small>le répertoire temporaire ou seront enregistrer vos fichier durant le téléchargement</small>
    \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-link tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Par défaut le repertoire est /var/tmp/\">
    \t\t\t\t\t\t\t<i class=\"fa fa-question-circle\"></i>
    \t\t\t\t\t\t</button><br>
    \t\t\t\t\t\t5 <small>l'echelle de votre amour inconditionnelle pour le téléchargement</small>
    \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-link tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Quand on aime on ne compte pas\">
    \t\t\t\t\t\t\t<i class=\"fa fa-question-circle\"></i>
    \t\t\t\t\t\t</button>
    \t\t\t\t\t</h4>

    \t\t\t\t\t<hr class=\"dotted\">

    \t\t\t\t\tSi pour une raison quelconque l'installation automatique rencontrer des <strong><em>difficultés</em></strong>, ne paniquer pas, le programme vous indiquera la marche a suivre afin de l'aider dans l'accomplissement de sa tache et ce de manière concise et clair<br>

    \t\t\t\t\t<br>Nous vous indiqueront ou chercher les informations qui vous sont demander durant la phase d'installations si jamais pour une raison x ou y les valeurs par défauts ou celles que vous auriez préciser ne fonctionnes pas.<br><br>

    \t\t\t\t\t";
        // line 59
        if (((isset($context["app_cache_path"]) ? $context["app_cache_path"] : null) == 777)) {
            // line 60
            echo "    \t\t\t\t\t\t";
            if (((isset($context["app_kernel_path"]) ? $context["app_kernel_path"] : null) == 777)) {
                // line 61
                echo "    \t\t\t\t\t\t\t";
                if (((isset($context["app_kernel_path"]) ? $context["app_kernel_path"] : null) == 777)) {
                    // line 62
                    echo "    \t\t\t\t\t\t\t\t";
                    if (((isset($context["app_bin_php5"]) ? $context["app_bin_php5"] : null) == 1)) {
                        // line 63
                        echo "    \t\t\t\t\t\t\t\t\t";
                        if (((isset($context["app_bin_apache2"]) ? $context["app_bin_apache2"] : null) == 1)) {
                            // line 64
                            echo "    \t\t\t\t\t\t\t\t\t\t";
                            if (((isset($context["app_bin_transmission_daemon"]) ? $context["app_bin_transmission_daemon"] : null) == 1)) {
                                // line 65
                                echo "    \t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#modal-normal\">Commancer l'installation</button>
    \t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 67
                                echo "    \t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#modal-error\">Commancer l'installation</button>
    \t\t\t\t\t\t\t\t\t\t\t";
                                // line 68
                                $context["modal_error"] = "1";
                                // line 69
                                echo "    \t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 70
                            echo "    \t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 71
                            echo "    \t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#modal-error\">Commancer l'installation</button>
    \t\t\t\t\t\t\t\t\t\t";
                            // line 72
                            $context["modal_error"] = "1";
                            // line 73
                            echo "    \t\t\t\t\t\t\t\t\t";
                        }
                        // line 74
                        echo "    \t\t\t\t\t\t\t\t";
                    } else {
                        // line 75
                        echo "    \t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#modal-error\">Commancer l'installation</button>
    \t\t\t\t\t\t\t\t\t";
                        // line 76
                        $context["modal_error"] = "1";
                        // line 77
                        echo "    \t\t\t\t\t\t\t\t";
                    }
                    // line 78
                    echo "    \t\t\t\t\t\t\t";
                } else {
                    // line 79
                    echo "    \t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#modal-error\">Commancer l'installation</button>
    \t\t\t\t\t\t\t\t";
                    // line 80
                    $context["modal_error"] = "1";
                    // line 81
                    echo "    \t\t\t\t\t\t\t";
                }
                // line 82
                echo "    \t\t\t\t\t\t";
            } else {
                // line 83
                echo "    \t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#modal-error\">Commancer l'installation</button>
    \t\t\t\t\t\t\t";
                // line 84
                $context["modal_error"] = "1";
                // line 85
                echo "    \t\t\t\t\t\t";
            }
            // line 86
            echo "    \t\t\t\t\t";
        } else {
            // line 87
            echo "    \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#modal-error\">Commancer l'installation</button>
    \t\t\t\t\t\t";
            // line 88
            $context["modal_error"] = "1";
            // line 89
            echo "    \t\t\t\t\t";
        }
        // line 90
        echo "\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">Verification des dépendances</div>
\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t  \t<li class=\"list-group-item\">
\t\t\t\t\t\t    \t<span class=\"badge badge-";
        // line 102
        if (((isset($context["app_bin_php5"]) ? $context["app_bin_php5"] : null) == 1)) {
            echo "success";
        } else {
            echo "danger";
        }
        echo "\">
\t\t\t\t\t\t    \t\t";
        // line 103
        if (((isset($context["app_bin_php5"]) ? $context["app_bin_php5"] : null) == 1)) {
            echo "ok";
        } else {
            echo "erreur";
        }
        // line 104
        echo "\t\t\t\t\t\t    \t</span><strong>PHP5</strong><br><em class=\"check-daemon-var\">/var/lib/php5</em>
\t\t\t\t\t\t    </li>
\t\t\t\t\t\t    <li class=\"list-group-item\">
\t\t\t\t\t\t    \t<span class=\"badge badge-";
        // line 107
        if (((isset($context["app_bin_apache2"]) ? $context["app_bin_apache2"] : null) == 1)) {
            echo "success";
        } else {
            echo "danger";
        }
        echo "\">
\t\t\t\t\t\t    \t\t";
        // line 108
        if (((isset($context["app_bin_apache2"]) ? $context["app_bin_apache2"] : null) == 1)) {
            echo "ok";
        } else {
            echo "erreur";
        }
        // line 109
        echo "\t\t\t\t\t\t    \t</span><strong>Apache2</strong><br><em class=\"check-daemon-var\">/var/run/apache2</em>
\t\t\t\t\t\t    </li>
\t\t\t\t\t\t    <li class=\"list-group-item\">
\t\t\t\t\t\t    \t<span class=\"badge badge-";
        // line 112
        if (((isset($context["app_bin_transmission_daemon"]) ? $context["app_bin_transmission_daemon"] : null) == 1)) {
            echo "success";
        } else {
            echo "danger";
        }
        echo "\">
\t\t\t\t\t\t    \t\t";
        // line 113
        if (((isset($context["app_bin_transmission_daemon"]) ? $context["app_bin_transmission_daemon"] : null) == 1)) {
            echo "ok";
        } else {
            echo "erreur";
        }
        // line 114
        echo "\t\t\t\t\t\t    \t</span><strong>Transmission-daemon</strong><br><em class=\"check-daemon-var\">/var/lib/transmission-daemon</em>
\t\t\t\t\t\t    </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">Authorisations des fichiers</div>
\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t  \t<li class=\"list-group-item\">
\t\t\t\t\t\t    \t<span class=\"badge badge-";
        // line 125
        if (((isset($context["app_cache_path"]) ? $context["app_cache_path"] : null) == 777)) {
            echo "success";
        } else {
            echo "danger";
        }
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["app_cache_path"]) ? $context["app_cache_path"] : null), "html", null, true);
        echo "</span><strong>Cache</strong><br><em class=\"check-daemon-var\">/var/www/Feather/feather/app/cache</em>
\t\t\t\t\t\t    </li>
\t\t\t\t\t\t    <li class=\"list-group-item\">
\t\t\t\t\t\t    \t<span class=\"badge badge-";
        // line 128
        if (((isset($context["app_kernel_path"]) ? $context["app_kernel_path"] : null) == 777)) {
            echo "success";
        } else {
            echo "danger";
        }
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["app_kernel_path"]) ? $context["app_kernel_path"] : null), "html", null, true);
        echo "</span><strong>App</strong><br><em class=\"check-daemon-var\">/var/www/Feather/feather/app/</em>
\t\t\t\t\t\t    </li>
\t\t\t\t\t\t    <li class=\"list-group-item\">
\t\t\t\t\t\t    \t<span class=\"badge badge-";
        // line 131
        if (((isset($context["app_base_path"]) ? $context["app_base_path"] : null) == 777)) {
            echo "success";
        } else {
            echo "danger";
        }
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["app_base_path"]) ? $context["app_base_path"] : null), "html", null, true);
        echo "</span><strong>Web</strong><br><em class=\"check-daemon-var\">/var/www/Feather/feather/web/</em>
\t\t\t\t\t\t    </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
        // line 137
        if (((isset($context["modal_error"]) ? $context["modal_error"] : null) == 1)) {
            // line 138
            echo "\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
\t\t\t\t\t\t  \t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t  \t<strong>ATTENTION!</strong> Un ou plusieurs point necessite votre attention et doivent être corriger pour poursuivre l'installation.</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 145
            echo "\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"alert alert-success alert-dismissible\" role=\"alert\">
\t\t\t\t\t\t  \t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t  \t<strong>Youpii!</strong> Tout semble parfait pour une installation sans bobo :).</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 152
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 158
        if (((isset($context["app_cache_path"]) ? $context["app_cache_path"] : null) == 777)) {
            if (((isset($context["app_kernel_path"]) ? $context["app_kernel_path"] : null) == 777)) {
                if (((isset($context["app_kernel_path"]) ? $context["app_kernel_path"] : null) == 777)) {
                    if (((isset($context["app_bin_php5"]) ? $context["app_bin_php5"] : null) == 1)) {
                        if (((isset($context["app_bin_apache2"]) ? $context["app_bin_apache2"] : null) == 1)) {
                            if (((isset($context["app_bin_transmission_daemon"]) ? $context["app_bin_transmission_daemon"] : null) == 1)) {
                                // line 159
                                echo "<div class=\"modal fade\" id=\"modal-normal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
\t<div class=\"modal-dialog\">
\t  \t<div class=\"modal-content\">
\t  \t\t<div class=\"modal-header\">
            \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span><span class=\"sr-only\">Close</span></button>
            \t<h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation</h4>
          \t</div>
\t  \t  \t<div class=\"modal-body\">
\t  \t  \t  \t<p>Avez-vous bien lu les prérequis avant de vous lancer ? Si oui, cliquer sur « <strong>je suis prêt</strong> » sinon, sur « <strong>Annuler</strong> »</p>
\t  \t  \t</div>
\t  \t  \t<div class=\"modal-footer\">
\t  \t  \t  \t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
\t  \t  \t  \t<button type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href='http://";
                                // line 171
                                echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
                                echo "/1';\">Je suis prêt</button>
\t  \t  \t</div>
\t  \t</div>
\t</div>
</div>
";
                            }
                        }
                    }
                }
            }
        }
        // line 177
        echo "
<div class=\"modal fade\" id=\"modal-error\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
\t<div class=\"modal-dialog\">
\t  \t<div class=\"modal-content\">
\t  \t\t<div class=\"modal-header\">
            \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span><span class=\"sr-only\">Close</span></button>
            \t<h4 class=\"modal-title\" id=\"myModalLabel\">Erreur: vérifier que tout les prérequis sont dans le vert</h4>
          \t</div>
\t  \t  \t<div class=\"modal-body\">
\t  \t  \t  \t<p>Verifier bien que les repertoires ont les bonnes autorisations et que les dépendances sont correctement installer et executer</p>
\t  \t  \t</div>
\t  \t  \t<div class=\"modal-footer\">
\t  \t  \t  \t<button type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href='http://";
        // line 189
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "';\">Revérifier</button>
\t  \t  \t</div>
\t  \t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "AppFeatherInstallBundle:Install:install.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 189,  380 => 177,  366 => 171,  352 => 159,  345 => 158,  337 => 152,  328 => 145,  319 => 138,  317 => 137,  302 => 131,  290 => 128,  278 => 125,  265 => 114,  259 => 113,  251 => 112,  246 => 109,  240 => 108,  232 => 107,  227 => 104,  221 => 103,  213 => 102,  199 => 90,  196 => 89,  194 => 88,  191 => 87,  188 => 86,  185 => 85,  183 => 84,  180 => 83,  177 => 82,  174 => 81,  172 => 80,  169 => 79,  166 => 78,  163 => 77,  161 => 76,  158 => 75,  155 => 74,  152 => 73,  150 => 72,  147 => 71,  144 => 70,  141 => 69,  139 => 68,  136 => 67,  132 => 65,  129 => 64,  126 => 63,  123 => 62,  120 => 61,  117 => 60,  115 => 59,  79 => 26,  58 => 12,  52 => 8,  50 => 7,  47 => 6,  44 => 5,  37 => 3,  11 => 1,);
    }
}
