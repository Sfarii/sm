<?php

/* ISETSOMagazineBundle:PDF:return_detail_pdf.html.twig */
class __TwigTemplate_7d58b853804d7872c82664a3a1fd759044aacf769f0d1b6efc894ab65168d8ad extends Twig_Template
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
        $__internal_d5d855c143e94fd4c48c4c40427f9620a6584d44a8828e310b3ec8e418780510 = $this->env->getExtension("native_profiler");
        $__internal_d5d855c143e94fd4c48c4c40427f9620a6584d44a8828e310b3ec8e418780510->enter($__internal_d5d855c143e94fd4c48c4c40427f9620a6584d44a8828e310b3ec8e418780510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:PDF:return_detail_pdf.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.infoOrder"), "html", null, true);
        echo "
                    </h1>
                </div>
            </div>
            <div class=\"row mb-xl\">
                <div class=\"col-md-3\">
                    <div class=\"panel panel-teal\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
                        <div class=\"panel-heading\"></div>
                        <div class=\"panel-body no-padding\">
                            <table class=\"table table-striped\">
                                <tbody>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.date"), "html", null, true);
        echo "</th>
                                    <td>
                                        ";
        // line 58
        if ($this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "date", array())) {
            // line 59
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "date", array()), "Y/m/d"), "html", null, true);
            echo "
                                        ";
        }
        // line 61
        echo "                                    </td>
                                  </tr>
                                  
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.observation"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "observation", array()), "html", null, true);
        echo "</td>
                                  </tr>
                                  ";
        // line 68
        if ($this->getAttribute((isset($context["discharge"]) ? $context["discharge"] : null), "toSubStore", array(), "any", true, true)) {
            // line 69
            echo "                                      <tr>
                                        <th class=\"text text-primary\">
                                            ";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.tomagazin"), "html", null, true);
            echo "
                                        </th>
                                        <td>
                                            ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["discharge"]) ? $context["discharge"] : $this->getContext($context, "discharge")), "toSubStore", array()), "designation", array()), "html", null, true);
            echo "
                                        </td>
                                      </tr>
                                  ";
        }
        // line 78
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"panel panel-info\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
                        <div class=\"panel-heading\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.userName"), "html", null, true);
        echo "</div>
                        <div class=\"panel-body no-padding\">
                            <table class=\"table table-striped\">
                                <tbody>
                                    <tr>
                                    <th class=\"text text-primary\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.firstName"), "html", null, true);
        echo "</th>
                                    <td>
                                        ";
        // line 92
        if (($this->getAttribute($this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "user", array()), "firstName", array()) == null)) {
            // line 93
            echo "                                            <div class=\"text text-capitalize text-danger\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.noInfo"), "html", null, true);
            echo " </div>
                                        ";
        } else {
            // line 95
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "user", array()), "firstName", array()), "html", null, true);
            echo "
                                        ";
        }
        // line 97
        echo "                                    </td>
                                  </tr>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.lastName"), "html", null, true);
        echo "</th>
                                    <td>
                                        ";
        // line 102
        if (($this->getAttribute($this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "user", array()), "lastName", array()) == null)) {
            // line 103
            echo "                                            <div class=\"text text-capitalize text-danger\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.noInfo"), "html", null, true);
            echo " </div>
                                        ";
        } else {
            // line 105
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "user", array()), "lastName", array()), "html", null, true);
            echo "
                                        ";
        }
        // line 107
        echo "                                    </td>
                                  </tr>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "user", array()), "username", array()), "html", null, true);
        echo "</td>
                                  </tr>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "user", array()), "email", array()), "html", null, true);
        echo "</td>
                                  </tr>
                              
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\"> ";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.list.name"), "html", null, true);
        echo "</div>
                <div class=\"panel-body no-padding\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr class=\"info\">
                                <th class=\"text text-primary\">";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.id"), "html", null, true);
        echo "</th>
                                <th class=\"text text-primary\">";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.designation"), "html", null, true);
        echo "</th>
                                <th class=\"text text-primary\">";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "</th>
                                <th class=\"text text-primary\">";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.unit"), "html", null, true);
        echo "</th>
                                <th class=\"text text-primary\">";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.family"), "html", null, true);
        echo "</th>
                                <th class=\"text text-primary\">";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.subFamily"), "html", null, true);
        echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "detail", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 140
            echo "                                <tr>
                                    <td>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "inventoryNumber", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "designation", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "quantity", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "unit", array()), "designation", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "subFamily", array()), "designation", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "subFamily", array()), "family", array()), "designation", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                        </tbody>
                    </table>
                </div>
            </div>
            <table cellspacing=\"0\" width=\"100%\">
                <tbody>
                    <tr>
                        <td class=\"text-primary text-center pull-left\"> signature du bénéficiaire </td>
                        <td class=\"text-primary text-center pull-right\"> signature du facteur </td>
                    </tr>
                    <tr>
                        <td class=\"text-primary pull-left text-center\">.</td>
                        <td class=\"text-primary  pull-right text-center\">.</td>
                    </tr>
                </tbody>
            </table>
        </div> <!-- .container-fluid -->
    </div> <!-- #page-content --> 
    
</body>
</html>
";
        
        $__internal_d5d855c143e94fd4c48c4c40427f9620a6584d44a8828e310b3ec8e418780510->leave($__internal_d5d855c143e94fd4c48c4c40427f9620a6584d44a8828e310b3ec8e418780510_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c77c200cd305710ccc06fca3ccf3b1d27464b3ec36923ab115c293a19a5a8bd2 = $this->env->getExtension("native_profiler");
        $__internal_c77c200cd305710ccc06fca3ccf3b1d27464b3ec36923ab115c293a19a5a8bd2->enter($__internal_c77c200cd305710ccc06fca3ccf3b1d27464b3ec36923ab115c293a19a5a8bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c77c200cd305710ccc06fca3ccf3b1d27464b3ec36923ab115c293a19a5a8bd2->leave($__internal_c77c200cd305710ccc06fca3ccf3b1d27464b3ec36923ab115c293a19a5a8bd2_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:PDF:return_detail_pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 20,  330 => 18,  325 => 13,  319 => 12,  291 => 149,  282 => 146,  278 => 145,  274 => 144,  270 => 143,  266 => 142,  262 => 141,  259 => 140,  255 => 139,  248 => 135,  244 => 134,  240 => 133,  236 => 132,  232 => 131,  228 => 130,  220 => 125,  207 => 115,  203 => 114,  197 => 111,  193 => 110,  188 => 107,  182 => 105,  176 => 103,  174 => 102,  169 => 100,  164 => 97,  158 => 95,  152 => 93,  150 => 92,  145 => 90,  137 => 85,  128 => 78,  121 => 74,  115 => 71,  111 => 69,  109 => 68,  104 => 66,  100 => 65,  94 => 61,  88 => 59,  86 => 58,  81 => 56,  66 => 44,  56 => 37,  38 => 21,  36 => 12,  23 => 1,);
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
/*                         {{ 'magazine.infoOrder'|trans }}*/
/*                     </h1>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row mb-xl">*/
/*                 <div class="col-md-3">*/
/*                     <div class="panel panel-teal" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*                         <div class="panel-heading"></div>*/
/*                         <div class="panel-body no-padding">*/
/*                             <table class="table table-striped">*/
/*                                 <tbody>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.date'|trans }}</th>*/
/*                                     <td>*/
/*                                         {% if returnArticle.date %}*/
/*                                             {{ returnArticle.date|date('Y/m/d') }}*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                   </tr>*/
/*                                   */
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.observation'|trans }}</th>*/
/*                                     <td>{{ returnArticle.observation }}</td>*/
/*                                   </tr>*/
/*                                   {% if discharge.toSubStore is defined %}*/
/*                                       <tr>*/
/*                                         <th class="text text-primary">*/
/*                                             {{ 'magazine.field.tomagazin'|trans }}*/
/*                                         </th>*/
/*                                         <td>*/
/*                                             {{ discharge.toSubStore.designation }}*/
/*                                         </td>*/
/*                                       </tr>*/
/*                                   {% endif %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                     <div class="panel panel-info" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*                         <div class="panel-heading">{{ 'magazine.field.userName'|trans }}</div>*/
/*                         <div class="panel-body no-padding">*/
/*                             <table class="table table-striped">*/
/*                                 <tbody>*/
/*                                     <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.firstName'|trans }}</th>*/
/*                                     <td>*/
/*                                         {% if returnArticle.user.firstName == null%}*/
/*                                             <div class="text text-capitalize text-danger"> {{  'user.noInfo'|trans }} </div>*/
/*                                         {% else %}*/
/*                                             {{ returnArticle.user.firstName }}*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.lastName'|trans }}</th>*/
/*                                     <td>*/
/*                                         {% if returnArticle.user.lastName == null%}*/
/*                                             <div class="text text-capitalize text-danger"> {{  'user.noInfo'|trans }} </div>*/
/*                                         {% else %}*/
/*                                             {{ returnArticle.user.lastName }}*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}</th>*/
/*                                     <td>{{ returnArticle.user.username }}</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}</th>*/
/*                                     <td>{{ returnArticle.user.email }}</td>*/
/*                                   </tr>*/
/*                               */
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="panel panel-info">*/
/*                 <div class="panel-heading"> {{ 'supportingdocument.list.name'|trans }}</div>*/
/*                 <div class="panel-body no-padding">*/
/*                     <table class="table table-striped">*/
/*                         <thead>*/
/*                             <tr class="info">*/
/*                                 <th class="text text-primary">{{ 'magazine.field.id'|trans }}</th>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.designation'|trans }}</th>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.quantity'|trans }}</th>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.unit'|trans }}</th>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.family'|trans }}</th>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.subFamily'|trans }}</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% for detail in returnArticle.detail %}*/
/*                                 <tr>*/
/*                                     <td>{{ detail.supportingDocument.inventoryNumber }}</td>*/
/*                                     <td>{{ detail.supportingDocument.article.designation }}</td>*/
/*                                     <td>{{ detail.quantity }}</td>*/
/*                                     <td>{{ detail.supportingDocument.article.unit.designation }}</td>*/
/*                                     <td>{{ detail.supportingDocument.article.subFamily.designation }}</td>*/
/*                                     <td>{{ detail.supportingDocument.article.subFamily.family.designation }}</td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*             <table cellspacing="0" width="100%">*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         <td class="text-primary text-center pull-left"> signature du bénéficiaire </td>*/
/*                         <td class="text-primary text-center pull-right"> signature du facteur </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td class="text-primary pull-left text-center">.</td>*/
/*                         <td class="text-primary  pull-right text-center">.</td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div> <!-- .container-fluid -->*/
/*     </div> <!-- #page-content --> */
/*     */
/* </body>*/
/* </html>*/
/* */
