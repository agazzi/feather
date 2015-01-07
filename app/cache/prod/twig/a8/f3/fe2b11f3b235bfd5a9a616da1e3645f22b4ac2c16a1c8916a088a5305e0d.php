<?php

/* AppFeatherBundle:Core:index.html.twig */
class __TwigTemplate_a8f3fe2b11f3b235bfd5a9a616da1e3645f22b4ac2c16a1c8916a088a5305e0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
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
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - AppFeatherBundle:Core:core";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"warper container-fluid\">

\t";
        // line 10
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "\t\t<div class=\"alert alert-success alert-dismissible\" role=\"alert\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">×</span><span class=\"sr-only\">";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Close"), "html", null, true);
            echo "</span></button>
\t\t\t<strong>";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Yeahh"), "html", null, true);
            echo "!</strong> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " 
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
\t<div class=\"page-header\">
\t\t<h1>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["feather_name"]) ? $context["feather_name"] : null), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, (isset($context["feather_description"]) ? $context["feather_description"] : null), "html", null, true);
        echo "</small></h1>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-6 col-lg-3\">
\t\t\t<div class=\"panel panel-default clearfix dashboard-stats rounded\"> 
\t\t\t\t<i class=\"fa fa-cloud-download bg-danger transit stats-icon\"></i>
\t\t\t\t<h3 class=\"transit\">
\t\t\t\t\t";
        // line 25
        $context["calc_download_time"] = "0";
        // line 26
        echo "\t\t\t\t\t";
        $context["calc_download_size"] = "";
        // line 27
        echo "\t\t\t\t\t";
        $context["calc_download_rate"] = "";
        // line 28
        echo "\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["torrents"]) ? $context["torrents"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["torrent"]) {
            // line 29
            echo "\t\t\t\t\t\t";
            $context["calc_download_size"] = ((isset($context["calc_download_size"]) ? $context["calc_download_size"] : null) + $this->getAttribute($context["torrent"], "size", array()));
            // line 30
            echo "\t\t\t\t\t\t";
            if (((isset($context["calc_download_time"]) ? $context["calc_download_time"] : null) == 0)) {
                // line 31
                echo "\t\t\t\t\t\t\t";
                $context["calc_download_time"] = $this->getAttribute($context["torrent"], "getEta", array());
                // line 32
                echo "\t\t\t\t\t\t";
            }
            // line 33
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["torrent"], "getEta", array()) > (isset($context["calc_download_time"]) ? $context["calc_download_time"] : null))) {
                // line 34
                echo "\t\t\t\t\t\t\t";
                $context["calc_download_time"] = $this->getAttribute($context["torrent"], "getEta", array());
                // line 35
                echo "\t\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['torrent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
\t\t\t\t\t";
        // line 38
        if (( !(isset($context["calc_download_time"]) ? $context["calc_download_time"] : null) <= 0)) {
            // line 39
            echo "\t\t\t\t\t\t";
            $context["calc_download_rate"] = ((isset($context["calc_download_size"]) ? $context["calc_download_size"] : null) / (isset($context["calc_download_time"]) ? $context["calc_download_time"] : null));
            // line 40
            echo "\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t\t
\t\t\t\t\t";
        // line 42
        if (((isset($context["calc_download_rate"]) ? $context["calc_download_rate"] : null) <= 0)) {
            // line 43
            echo "\t\t\t\t\t\t0,00 Ko/s
\t\t\t\t\t";
        } elseif (((isset($context["calc_download_rate"]) ? $context["calc_download_rate"] : null) >= ((1024 * 1024) * 1024))) {
            // line 45
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_round(((((isset($context["calc_download_rate"]) ? $context["calc_download_rate"] : null) / 1024) / 1024) / 1024), 0, "floor"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Gb"), "html", null, true);
            echo "/s
\t\t\t\t\t";
        } elseif (((isset($context["calc_download_rate"]) ? $context["calc_download_rate"] : null) >= (1024 * 1024))) {
            // line 47
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_round((((isset($context["calc_download_rate"]) ? $context["calc_download_rate"] : null) / 1024) / 1024), 0, "floor"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mb"), "html", null, true);
            echo "/s
\t\t\t\t\t";
        } elseif (((isset($context["calc_download_rate"]) ? $context["calc_download_rate"] : null) >= 1024)) {
            // line 49
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_round(((isset($context["calc_download_rate"]) ? $context["calc_download_rate"] : null) / 1024), 0, "floor"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Kb"), "html", null, true);
            echo "/s
\t\t\t\t\t";
        } else {
            // line 51
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_round((isset($context["calc_download_rate"]) ? $context["calc_download_rate"] : null), 0, "floor"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bytes"), "html", null, true);
            echo "/s
\t\t\t\t\t";
        }
        // line 53
        echo "\t\t\t\t</h3>
\t\t\t\t<p class=\"text-muted transit\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Download rate"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6 col-lg-3\">
\t\t\t<div class=\"panel panel-default clearfix dashboard-stats rounded\"> 
\t\t\t\t<i class=\"fa fa-cloud-upload bg-info transit stats-icon\"></i>
\t\t\t\t<h3 class=\"transit\">0,00 Ko/s</h3>
\t\t\t\t<p class=\"text-muted transit\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Upload rate"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6 col-lg-3\">
\t\t\t<div class=\"panel panel-default clearfix dashboard-stats rounded\"> 
\t\t\t\t<i class=\"fa fa-database bg-success transit stats-icon\"></i>
\t\t\t\t<h3 class=\"transit\">
\t\t\t\t\t";
        // line 68
        if (((isset($context["diskspace"]) ? $context["diskspace"] : null) >= ((1024 * 1024) * 1024))) {
            // line 69
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_round(((((isset($context["diskspace"]) ? $context["diskspace"] : null) / 1024) / 1024) / 1024), 0, "floor"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Gb"), "html", null, true);
            echo "
\t\t\t\t\t";
        } elseif (((isset($context["diskspace"]) ? $context["diskspace"] : null) >= (1024 * 1024))) {
            // line 71
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_round((((isset($context["diskspace"]) ? $context["diskspace"] : null) / 1024) / 1024), 0, "floor"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mb"), "html", null, true);
            echo "
\t\t\t\t\t";
        } elseif (((isset($context["diskspace"]) ? $context["diskspace"] : null) >= 1024)) {
            // line 73
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_round(((isset($context["diskspace"]) ? $context["diskspace"] : null) / 1024), 0, "floor"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Kb"), "html", null, true);
            echo "
\t\t\t\t\t";
        } else {
            // line 75
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_round((isset($context["diskspace"]) ? $context["diskspace"] : null), 0, "floor"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bytes"), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 77
        echo "\t\t\t\t</h3>
\t\t\t\t<p class=\"text-muted transit\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Disk space available"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6 col-lg-3\">
\t\t\t<div class=\"panel panel-default clearfix dashboard-stats upload rounded\" data-toggle=\"modal\" data-target=\"#modal-form\"> 
\t\t\t\t<i class=\"fa fa-plus bg-warning transit stats-icon\"></i>
\t\t\t\t<h3 class=\"transit\">";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add"), "html", null, true);
        echo "</h3>
\t\t\t\t<p class=\"text-muted transit\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Download torrent file"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-lg-12\">
\t\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Torrent listing"), "html", null, true);
        echo "</div>
\t\t<div class=\"panel-body\">
\t\t\t";
        // line 93
        if ((twig_length_filter($this->env, (isset($context["torrents"]) ? $context["torrents"] : null)) > 0)) {
            // line 94
            echo "\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"table table-striped table-bordered\" id=\"<!--basic-datatable-->\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Filename"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t<th width=\"90\">";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Size"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t<th>";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Time remaining"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t<th width=\"30%\">";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Progress"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t<th width=\"140\">";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Actions"), "html", null, true);
            echo "</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 105
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["torrents"]) ? $context["torrents"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["torrent"]) {
                // line 106
                echo "\t\t\t\t\t\t<tr class=\"odd gradeX\">
\t\t\t\t\t\t\t<td class=\"torrent-title\">
\t\t\t\t\t\t\t\t";
                // line 108
                if ((twig_length_filter($this->env, $this->getAttribute($context["torrent"], "name", array())) > 50)) {
                    // line 109
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["torrent"], "name", array()), 0, 50), "html", null, true);
                    echo "...
\t\t\t\t\t\t\t\t";
                } else {
                    // line 111
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "name", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                }
                // line 113
                echo "\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td class=\"torrent-title\">
\t\t\t\t\t\t\t\t";
                // line 116
                if (($this->getAttribute($context["torrent"], "size", array()) >= ((1024 * 1024) * 1024))) {
                    // line 117
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_round(((($this->getAttribute($context["torrent"], "size", array()) / 1024) / 1024) / 1024), 0, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Gb"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute($context["torrent"], "size", array()) >= (1024 * 1024))) {
                    // line 119
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_round((($this->getAttribute($context["torrent"], "size", array()) / 1024) / 1024), 0, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mb"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute($context["torrent"], "size", array()) >= 1024)) {
                    // line 121
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_round(($this->getAttribute($context["torrent"], "size", array()) / 1024), 0, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Kb"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                } else {
                    // line 123
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["torrent"], "size", array()), 0, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bytes"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                }
                // line 125
                echo "\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t";
                // line 128
                echo "\t\t\t\t\t\t\t";
                $context["hours"] = twig_round(($this->getAttribute($context["torrent"], "getEta", array()) / 3600));
                // line 129
                echo "\t\t\t\t\t\t\t";
                $context["minutes"] = twig_round((($this->getAttribute($context["torrent"], "getEta", array()) - ((isset($context["hours"]) ? $context["hours"] : null) * 3600)) / 60));
                // line 130
                echo "\t\t\t\t\t\t\t";
                $context["seconds"] = twig_round(($this->getAttribute($context["torrent"], "getEta", array()) % 60));
                // line 131
                echo "\t\t\t\t\t\t\t";
                // line 132
                echo "
\t\t\t\t\t\t\t<td class=\"torrent-title\">
\t\t\t\t\t\t\t\t";
                // line 134
                if (($this->getAttribute($context["torrent"], "getEta", array()) > 0)) {
                    // line 135
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (((isset($context["hours"]) ? $context["hours"] : null) > 0)) {
                        echo " ";
                        echo twig_escape_filter($this->env, (isset($context["hours"]) ? $context["hours"] : null), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hours"), "html", null, true);
                        echo " ";
                    }
                    // line 136
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (((isset($context["minutes"]) ? $context["minutes"] : null) > 0)) {
                        echo " ";
                        echo twig_escape_filter($this->env, (isset($context["minutes"]) ? $context["minutes"] : null), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("minutes"), "html", null, true);
                        echo " ";
                    }
                    // line 137
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (isset($context["seconds"]) ? $context["seconds"] : null), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("seconds"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                } else {
                    // line 139
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["torrent"], "getEta", array()) ==  -1)) {
                        echo "  
\t\t\t\t\t\t\t\t\t\t";
                        // line 140
                        if ($this->getAttribute($context["torrent"], "isFinished", array())) {
                            echo "\t
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">";
                            // line 141
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Completed"), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute($context["torrent"], "isStopped", array())) {
                            // line 143
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Suspend"), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 145
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 146
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["torrent"], "isChecking", array())) {
                        // line 147
                        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"label label-primary\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Checking file"), "html", null, true);
                        echo "...</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 149
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["torrent"], "peers", array())) {
                        // line 150
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["torrent"], "getEta", array()) ==  -2)) {
                            // line 151
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Restart download"), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 153
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 154
                    echo "\t\t\t\t\t\t\t\t";
                }
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center torrent-list\">
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t";
                // line 158
                if ($this->getAttribute($context["torrent"], "isFinished", array())) {
                    // line 159
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["progress"] = "progress-bar progress-bar-success";
                    // line 160
                    echo "\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 161
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["torrent"], "isDownloading", array())) {
                        // line 162
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $context["progress"] = "progress-bar progress-bar-info progress-bar-striped active";
                        // line 163
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute($context["torrent"], "isStopped", array())) {
                        // line 164
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $context["progress"] = "progress-bar progress-bar-warning progress-bar-striped";
                        // line 165
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 166
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 167
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["torrent"], "isChecking", array())) {
                    // line 168
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["progress"] = "progress-bar progress-bar-primary progress-bar-striped active";
                    // line 169
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 170
                echo "\t\t\t\t\t\t\t\t\t<div class=\"";
                echo twig_escape_filter($this->env, (isset($context["progress"]) ? $context["progress"] : null), "html", null, true);
                echo "\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "PercentDone", array()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"min-width: 20px;width:";
                echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "PercentDone", array()), "html", null, true);
                echo "%\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t<div class=\"btn-group \">
\t\t\t\t\t\t       \t\t<button type=\"button\" class=\"btn btn-primary\">";
                // line 175
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Actions"), "html", null, true);
                echo "</button>
\t\t\t\t\t\t       \t\t<button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t    \t\t   \t<span class=\"caret\"></span>
\t\t\t\t\t\t       \t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t      \t\t</button>
\t\t\t\t\t\t        \t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t        \t\t";
                // line 182
                echo "\t\t\t\t\t\t        \t\t";
                if ( !$this->getAttribute($context["torrent"], "isFinished", array())) {
                    // line 183
                    echo "\t\t\t\t\t\t        \t\t\t";
                    if ($this->getAttribute($context["torrent"], "isStopped", array())) {
                        // line 184
                        echo "\t\t\t\t\t\t            \t\t\t<li><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_feather_start_torrent", array("id" => $this->getAttribute($context["torrent"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Appended"), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t            \t\t";
                    } else {
                        // line 186
                        echo "\t\t\t\t\t\t            \t\t\t<li><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_feather_stop_torrent", array("id" => $this->getAttribute($context["torrent"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Suspended"), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t            \t\t";
                    }
                    // line 188
                    echo "\t\t\t\t\t\t            \t\t<li class=\"divider\"></li>
\t\t\t\t\t\t            \t";
                }
                // line 190
                echo "\t\t\t\t\t\t            \t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_feather_delete_torrent", array("id" => $this->getAttribute($context["torrent"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t        \t</ul
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['torrent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t";
        } else {
            // line 199
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nothing to display here"), "html", null, true);
            echo ".
\t\t\t";
        }
        // line 201
        echo "\t\t</div>
\t</div>
\t</div>
</div>


<!-- Open Modal box for upload and wget torrents files -->
<div class=\"modal fade\" id=\"modal-form\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  \t<div class=\"modal-dialog\">
    \t<div class=\"modal-content\">
      \t\t<div class=\"modal-header\">
        \t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Close"), "html", null, true);
        echo "</span></button>
        \t\t<h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Get the torrent file"), "html", null, true);
        echo "</h4>
      \t\t</div>
      \t\t<div class=\"modal-body\">
        \t\t<form action=\"";
        // line 216
        echo $this->env->getExtension('routing')->getPath("app_feather_add_torrent");
        echo "\" role=\"form\" method=\"POST\">
              \t\t<div class=\"form-group\">
                \t\t<label for=\"addtorrent_uri\">";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("URI of file"), "html", null, true);
        echo "</label>
                \t\t<input type=\"text\" class=\"form-control\" id=\"addtorrent_uri\" name=\"addtorrent_uri\"placeholder=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("URI of your .torrent file"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
                \t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Submit"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
            \t</form>
      \t\t</div>
       \t</div>
  \t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "AppFeatherBundle:Core:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  610 => 222,  604 => 219,  600 => 218,  595 => 216,  589 => 213,  585 => 212,  572 => 201,  566 => 199,  561 => 196,  546 => 190,  542 => 188,  534 => 186,  526 => 184,  523 => 183,  520 => 182,  511 => 175,  498 => 170,  495 => 169,  492 => 168,  489 => 167,  486 => 166,  483 => 165,  480 => 164,  477 => 163,  474 => 162,  471 => 161,  468 => 160,  465 => 159,  463 => 158,  455 => 154,  452 => 153,  446 => 151,  443 => 150,  440 => 149,  434 => 147,  431 => 146,  428 => 145,  422 => 143,  417 => 141,  413 => 140,  408 => 139,  400 => 137,  391 => 136,  382 => 135,  380 => 134,  376 => 132,  374 => 131,  371 => 130,  368 => 129,  365 => 128,  361 => 125,  353 => 123,  345 => 121,  337 => 119,  329 => 117,  327 => 116,  322 => 113,  316 => 111,  310 => 109,  308 => 108,  304 => 106,  300 => 105,  293 => 101,  289 => 100,  285 => 99,  281 => 98,  277 => 97,  272 => 94,  270 => 93,  265 => 91,  256 => 85,  252 => 84,  243 => 78,  240 => 77,  232 => 75,  224 => 73,  216 => 71,  208 => 69,  206 => 68,  196 => 61,  186 => 54,  183 => 53,  175 => 51,  167 => 49,  159 => 47,  151 => 45,  147 => 43,  145 => 42,  142 => 41,  139 => 40,  136 => 39,  134 => 38,  131 => 37,  125 => 36,  122 => 35,  119 => 34,  116 => 33,  113 => 32,  110 => 31,  107 => 30,  104 => 29,  99 => 28,  96 => 27,  93 => 26,  91 => 25,  79 => 18,  75 => 16,  64 => 13,  60 => 12,  57 => 11,  52 => 10,  47 => 6,  44 => 5,  37 => 3,  11 => 1,);
    }
}
