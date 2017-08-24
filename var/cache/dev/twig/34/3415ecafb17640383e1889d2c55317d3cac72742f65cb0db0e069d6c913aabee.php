<?php

/* ISETSOMagazineBundle:PDF:discharge_pdf.html.twig */
class __TwigTemplate_655df5653476029df0e7891cdeb419a2a9747a89de62cc5d57c2018675edc65b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c9f58c87f6681f458afa293e1d9d967715f2fa54b5afc2c38462ad7ba3b7db4 = $this->env->getExtension("native_profiler");
        $__internal_4c9f58c87f6681f458afa293e1d9d967715f2fa54b5afc2c38462ad7ba3b7db4->enter($__internal_4c9f58c87f6681f458afa293e1d9d967715f2fa54b5afc2c38462ad7ba3b7db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:PDF:discharge_pdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-touch-fullscreen\" content=\"yes\">
    <meta name=\"description\" content=\"PFE\">
    <meta name=\"author\" content=\"BelhassenRami\">

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "    <style type=\"text/css\">
        thead {display: table-header-group;}
        tr {page-break-inside: avoid;}
        div{page-break-inside: avoid;}
    </style>
</head>
<body style=\"background-color: white;\">
    <div class=\"page-content\" >
        <div class=\"container-fluid\">                 
            <div class=\"row mb-xl\">
                <div class=\"col-md-12\" style=\"padding-top: 5%\">
                    <div class=\"pull-left\">
                        <h1 class=\"text-primary text-center\" style=\"font-weight: bold; font-size:12pt; color: black\">INSTITUT SUPÉRIEUR<br>DES ÉTUDES TECHNOLOGIQUES<br>SOUSSE
                        </h1>
                    </div>
                    <div class=\"pull-right\">
                        <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('asset')->getAssetUrl("bundles/isetsomagazine/img/logo-big.png")), "html", null, true);
        echo "\" class=\"mt-md mb-md\" alt=\"ISETSO\">
                    </div>
                </div>
            </div>
            <div class=\"row mb-xl\">
                <div class=\"col-md-12\">
                    <h1 class=\"text-primary text-center\" style=\"font-weight: bold; color: black\">
                        ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.discharge"), "html", null, true);
        echo "
                    </h1>
                </div>
            </div>
            <div class=\"panel panel-teal\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
                <div class=\"panel-heading\"></div>
                <div class=\"panel-body no-padding\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr class=\"info\">
                                <th>#</th>
                                <th>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.observation"), "html", null, true);
        echo "</th>
                                <th>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.date"), "html", null, true);
        echo "</th>
                                <th>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.etat"), "html", null, true);
        echo "</th>
                                
                                <th>
                                    ";
        // line 60
        $context["dischargeArticle"] = twig_first($this->env, (isset($context["discharge"]) ? $context["discharge"] : $this->getContext($context, "discharge")));
        // line 61
        echo "                                    ";
        if ($this->getAttribute((isset($context["dischargeArticle"]) ? $context["dischargeArticle"] : null), "toLocal", array(), "any", true, true)) {
            // line 62
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.local"), "html", null, true);
            echo "
                                    ";
        } elseif ($this->getAttribute(        // line 63
(isset($context["dischargeArticle"]) ? $context["dischargeArticle"] : null), "toMagazine", array(), "any", true, true)) {
            // line 64
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.tomagazin"), "html", null, true);
            echo "                   
                                    ";
        } else {
            // line 66
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.toUser"), "html", null, true);
            echo "
                                    ";
        }
        // line 67
        echo "  
                                </th>
                                <th>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.userName"), "html", null, true);
        echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["discharge"]) ? $context["discharge"] : $this->getContext($context, "discharge")));
        foreach ($context['_seq'] as $context["_key"] => $context["dischargeArticle"]) {
            // line 74
            echo "                                <tr>
                                    <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["dischargeArticle"], "id", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["dischargeArticle"], "observation", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 78
            if ($this->getAttribute($context["dischargeArticle"], "date", array())) {
                // line 79
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["dischargeArticle"], "date", array()), "Y/m/d"), "html", null, true);
                echo "
                                        ";
            }
            // line 81
            echo "                                    </td>      
                                    <td>
                                        ";
            // line 83
            if (($this->getAttribute($context["dischargeArticle"], "etat", array()) == "a")) {
                // line 84
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.etatOption.accept"), "html", null, true);
                echo "
                                        ";
            } elseif (($this->getAttribute(            // line 85
$context["dischargeArticle"], "etat", array()) == "r")) {
                // line 86
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.etatOption.refuse"), "html", null, true);
                echo "                   
                                        ";
            } elseif (($this->getAttribute(            // line 87
$context["dischargeArticle"], "etat", array()) == "w")) {
                // line 88
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.etatOption.wait"), "html", null, true);
                echo "
                                        ";
            } else {
                // line 90
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.etat"), "html", null, true);
                echo "
                                        ";
            }
            // line 91
            echo "  
                                    </td>
                                    <td>
                                        ";
            // line 94
            if ($this->getAttribute($context["dischargeArticle"], "toLocal", array(), "any", true, true)) {
                // line 95
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dischargeArticle"], "toLocal", array()), "designation", array()), "html", null, true);
                echo "
                                        ";
            } elseif ($this->getAttribute(            // line 96
$context["dischargeArticle"], "toMagazine", array(), "any", true, true)) {
                // line 97
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dischargeArticle"], "toMagazine", array()), "designation", array()), "html", null, true);
                echo "  
                                        ";
            } else {
                // line 99
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dischargeArticle"], "toUser", array()), "username", array()), "html", null, true);
                echo "
                                        ";
            }
            // line 100
            echo "  
                                    </td>              
                                    <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dischargeArticle"], "user", array()), "username", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dischargeArticle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- .container-fluid -->
    </div> <!-- #page-content --> 
    
</body>
</html>
";
        
        $__internal_4c9f58c87f6681f458afa293e1d9d967715f2fa54b5afc2c38462ad7ba3b7db4->leave($__internal_4c9f58c87f6681f458afa293e1d9d967715f2fa54b5afc2c38462ad7ba3b7db4_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ade775409d3389aea4416227aee0cbc3bb8d3e0ea9de4e37e9b8bf38991e312a = $this->env->getExtension("native_profiler");
        $__internal_ade775409d3389aea4416227aee0cbc3bb8d3e0ea9de4e37e9b8bf38991e312a->enter($__internal_ade775409d3389aea4416227aee0cbc3bb8d3e0ea9de4e37e9b8bf38991e312a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6c0ca7c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6c0ca7c_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6c0ca7c_font-awesome.min_1.css");
            // line 18
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method") . (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url"))), "html", null, true);
            echo "\" />
        ";
            // asset "6c0ca7c_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6c0ca7c_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6c0ca7c_themify-icons_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method") . (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url"))), "html", null, true);
            echo "\" />
        ";
            // asset "6c0ca7c_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6c0ca7c_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6c0ca7c_styles_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method") . (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url"))), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "6c0ca7c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6c0ca7c") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6c0ca7c.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method") . (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url"))), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "    ";
        
        $__internal_ade775409d3389aea4416227aee0cbc3bb8d3e0ea9de4e37e9b8bf38991e312a->leave($__internal_ade775409d3389aea4416227aee0cbc3bb8d3e0ea9de4e37e9b8bf38991e312a_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:PDF:discharge_pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 20,  251 => 18,  246 => 13,  240 => 12,  224 => 105,  215 => 102,  211 => 100,  205 => 99,  199 => 97,  197 => 96,  192 => 95,  190 => 94,  185 => 91,  179 => 90,  173 => 88,  171 => 87,  166 => 86,  164 => 85,  159 => 84,  157 => 83,  153 => 81,  147 => 79,  145 => 78,  140 => 76,  136 => 75,  133 => 74,  129 => 73,  122 => 69,  118 => 67,  112 => 66,  106 => 64,  104 => 63,  99 => 62,  96 => 61,  94 => 60,  88 => 57,  84 => 56,  80 => 55,  66 => 44,  56 => 37,  38 => 21,  36 => 12,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">*/
/*     <meta name="apple-mobile-web-app-capable" content="yes">*/
/*     <meta name="apple-touch-fullscreen" content="yes">*/
/*     <meta name="description" content="PFE">*/
/*     <meta name="author" content="BelhassenRami">*/
/* */
/*     {% block stylesheets %}*/
/*         {% stylesheets */
/*             'bundles/isetsomagazine/fonts/font-awesome/css/font-awesome.min.css'*/
/*             'bundles/isetsomagazine/fonts/themify-icons/themify-icons.css'*/
/*             'bundles/isetsomagazine/css/styles.css'*/
/*             filter='cssrewrite' %}*/
/*         <link rel="stylesheet" href="{{ app.request.getSchemeAndHttpHost() ~ asset_url }}" />*/
/*         {% endstylesheets %}*/
/*     {% endblock %}*/
/*     <style type="text/css">*/
/*         thead {display: table-header-group;}*/
/*         tr {page-break-inside: avoid;}*/
/*         div{page-break-inside: avoid;}*/
/*     </style>*/
/* </head>*/
/* <body style="background-color: white;">*/
/*     <div class="page-content" >*/
/*         <div class="container-fluid">                 */
/*             <div class="row mb-xl">*/
/*                 <div class="col-md-12" style="padding-top: 5%">*/
/*                     <div class="pull-left">*/
/*                         <h1 class="text-primary text-center" style="font-weight: bold; font-size:12pt; color: black">INSTITUT SUPÉRIEUR<br>DES ÉTUDES TECHNOLOGIQUES<br>SOUSSE*/
/*                         </h1>*/
/*                     </div>*/
/*                     <div class="pull-right">*/
/*                         <img src="{{ app.request.getSchemeAndHttpHost() ~ asset('bundles/isetsomagazine/img/logo-big.png') }}" class="mt-md mb-md" alt="ISETSO">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row mb-xl">*/
/*                 <div class="col-md-12">*/
/*                     <h1 class="text-primary text-center" style="font-weight: bold; color: black">*/
/*                         {{ 'magazine.discharge'|trans }}*/
/*                     </h1>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="panel panel-teal" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*                 <div class="panel-heading"></div>*/
/*                 <div class="panel-body no-padding">*/
/*                     <table class="table table-striped">*/
/*                         <thead>*/
/*                             <tr class="info">*/
/*                                 <th>#</th>*/
/*                                 <th>{{ 'magazine.field.observation'|trans }}</th>*/
/*                                 <th>{{ 'magazine.field.date'|trans }}</th>*/
/*                                 <th>{{ 'magazine.field.etat'|trans }}</th>*/
/*                                 */
/*                                 <th>*/
/*                                     {% set dischargeArticle = discharge|first %}*/
/*                                     {% if dischargeArticle.toLocal is defined %}*/
/*                                         {{ 'magazine.field.local'|trans }}*/
/*                                     {% elseif dischargeArticle.toMagazine is defined %}*/
/*                                             {{ 'magazine.field.tomagazin'|trans }}                   */
/*                                     {% else %}*/
/*                                         {{ 'magazine.field.toUser'|trans }}*/
/*                                     {% endif %}  */
/*                                 </th>*/
/*                                 <th>{{ 'magazine.field.userName'|trans }}</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% for dischargeArticle in discharge %}*/
/*                                 <tr>*/
/*                                     <td>{{ dischargeArticle.id }}</td>*/
/*                                     <td>{{ dischargeArticle.observation }}</td>*/
/*                                     <td>*/
/*                                         {% if dischargeArticle.date %}*/
/*                                             {{ dischargeArticle.date|date('Y/m/d') }}*/
/*                                         {% endif %}*/
/*                                     </td>      */
/*                                     <td>*/
/*                                         {% if dischargeArticle.etat == "a" %}*/
/*                                             {{ 'magazine.etatOption.accept'|trans }}*/
/*                                         {% elseif dischargeArticle.etat == "r" %}*/
/*                                             {{ 'magazine.etatOption.refuse'|trans }}                   */
/*                                         {% elseif dischargeArticle.etat == "w" %}*/
/*                                             {{ 'magazine.etatOption.wait'|trans }}*/
/*                                         {% else %}*/
/*                                             {{ 'magazine.etat'|trans }}*/
/*                                         {% endif %}  */
/*                                     </td>*/
/*                                     <td>*/
/*                                         {% if dischargeArticle.toLocal is defined %}*/
/*                                             {{ dischargeArticle.toLocal.designation }}*/
/*                                         {% elseif dischargeArticle.toMagazine is defined %}*/
/*                                             {{ dischargeArticle.toMagazine.designation }}  */
/*                                         {% else %}*/
/*                                             {{ dischargeArticle.toUser.username }}*/
/*                                         {% endif %}  */
/*                                     </td>              */
/*                                     <td>{{ dischargeArticle.user.username }}</td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*         </div> <!-- .container-fluid -->*/
/*     </div> <!-- #page-content --> */
/*     */
/* </body>*/
/* </html>*/
/* */
