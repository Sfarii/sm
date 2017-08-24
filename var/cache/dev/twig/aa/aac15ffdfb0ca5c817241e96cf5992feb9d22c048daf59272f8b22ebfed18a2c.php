<?php

/* ISETSOMagazineBundle:PDF:order_detail_pdf.html.twig */
class __TwigTemplate_ca453fc5054ebde0cc0f6a9f1679a4adba5e79a6d892ca6ca0181b55adc3135c extends Twig_Template
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
        $__internal_d705ff1f2fc58d34ce414f6dbbf21d09f9e31a9581f3238228b5cd37a1d16d93 = $this->env->getExtension("native_profiler");
        $__internal_d705ff1f2fc58d34ce414f6dbbf21d09f9e31a9581f3238228b5cd37a1d16d93->enter($__internal_d705ff1f2fc58d34ce414f6dbbf21d09f9e31a9581f3238228b5cd37a1d16d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:PDF:order_detail_pdf.html.twig"));

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
        if ($this->getAttribute((isset($context["orderArticle"]) ? $context["orderArticle"] : $this->getContext($context, "orderArticle")), "date", array())) {
            // line 59
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["orderArticle"]) ? $context["orderArticle"] : $this->getContext($context, "orderArticle")), "date", array()), "Y/m/d"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orderArticle"]) ? $context["orderArticle"] : $this->getContext($context, "orderArticle")), "observation", array()), "html", null, true);
        echo "</td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"panel panel-info\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
                        <div class=\"panel-heading\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.userName"), "html", null, true);
        echo "</div>
                        <div class=\"panel-body no-padding\">
                            <table class=\"table table-striped\">
                                <tbody>
                                    <tr>
                                    <th class=\"text text-primary\">";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.firstName"), "html", null, true);
        echo "</th>
                                    <td>
                                        ";
        // line 82
        if (($this->getAttribute($this->getAttribute((isset($context["orderArticle"]) ? $context["orderArticle"] : $this->getContext($context, "orderArticle")), "user", array()), "firstName", array()) == null)) {
            // line 83
            echo "                                            <div class=\"text text-capitalize text-danger\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.noInfo"), "html", null, true);
            echo " </div>
                                        ";
        } else {
            // line 85
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["orderArticle"]) ? $context["orderArticle"] : $this->getContext($context, "orderArticle")), "user", array()), "firstName", array()), "html", null, true);
            echo "
                                        ";
        }
        // line 87
        echo "                                    </td>
                                  </tr>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.lastName"), "html", null, true);
        echo "</th>
                                    <td>
                                        ";
        // line 92
        if (($this->getAttribute($this->getAttribute((isset($context["orderArticle"]) ? $context["orderArticle"] : $this->getContext($context, "orderArticle")), "user", array()), "lastName", array()) == null)) {
            // line 93
            echo "                                            <div class=\"text text-capitalize text-danger\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.noInfo"), "html", null, true);
            echo " </div>
                                        ";
        } else {
            // line 95
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["orderArticle"]) ? $context["orderArticle"] : $this->getContext($context, "orderArticle")), "user", array()), "lastName", array()), "html", null, true);
            echo "
                                        ";
        }
        // line 97
        echo "                                    </td>
                                  </tr>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["orderArticle"]) ? $context["orderArticle"] : $this->getContext($context, "orderArticle")), "user", array()), "username", array()), "html", null, true);
        echo "</td>
                                  </tr>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["orderArticle"]) ? $context["orderArticle"] : $this->getContext($context, "orderArticle")), "user", array()), "email", array()), "html", null, true);
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
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.list.name"), "html", null, true);
        echo "</div>
                <div class=\"panel-body no-padding\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr class=\"info\">
                                <th class=\"text text-primary\">";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.designation"), "html", null, true);
        echo "</th>
                                <th class=\"text text-primary\">";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "</th>
                                <th class=\"text text-primary\">";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.unit"), "html", null, true);
        echo "</th>
                                <th class=\"text text-primary\">";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.family"), "html", null, true);
        echo "</th>
                                <th class=\"text text-primary\">";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.subFamily"), "html", null, true);
        echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["orderArticle"]) ? $context["orderArticle"] : $this->getContext($context, "orderArticle")), "detail", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 130
            echo "                                <tr>
                                    <td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "article", array()), "designation", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "quantity", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "article", array()), "unit", array()), "designation", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "article", array()), "subFamily", array()), "designation", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "article", array()), "subFamily", array()), "family", array()), "designation", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                        </tbody>
                    </table>
                </div>
            </div>
            <table class=\"table table-striped\">
                <thead>
                    
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div> <!-- .container-fluid -->
    </div> <!-- #page-content --> 
    
</body>
</html>
";
        
        $__internal_d705ff1f2fc58d34ce414f6dbbf21d09f9e31a9581f3238228b5cd37a1d16d93->leave($__internal_d705ff1f2fc58d34ce414f6dbbf21d09f9e31a9581f3238228b5cd37a1d16d93_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2ec0105ec6a7a5670e2bbeddfe6a835387c065a71ab8487a66d903147b4430e9 = $this->env->getExtension("native_profiler");
        $__internal_2ec0105ec6a7a5670e2bbeddfe6a835387c065a71ab8487a66d903147b4430e9->enter($__internal_2ec0105ec6a7a5670e2bbeddfe6a835387c065a71ab8487a66d903147b4430e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2ec0105ec6a7a5670e2bbeddfe6a835387c065a71ab8487a66d903147b4430e9->leave($__internal_2ec0105ec6a7a5670e2bbeddfe6a835387c065a71ab8487a66d903147b4430e9_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:PDF:order_detail_pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 20,  298 => 18,  293 => 13,  287 => 12,  263 => 138,  254 => 135,  250 => 134,  246 => 133,  242 => 132,  238 => 131,  235 => 130,  231 => 129,  223 => 124,  219 => 123,  215 => 122,  211 => 121,  207 => 120,  199 => 115,  186 => 105,  182 => 104,  176 => 101,  172 => 100,  167 => 97,  161 => 95,  155 => 93,  153 => 92,  148 => 90,  143 => 87,  137 => 85,  131 => 83,  129 => 82,  124 => 80,  116 => 75,  104 => 66,  100 => 65,  94 => 61,  88 => 59,  86 => 58,  81 => 56,  66 => 44,  56 => 37,  38 => 21,  36 => 12,  23 => 1,);
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
/*                                         {% if orderArticle.date %}*/
/*                                             {{ orderArticle.date|date('Y/m/d') }}*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                   </tr>*/
/*                                   */
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.observation'|trans }}</th>*/
/*                                     <td>{{ orderArticle.observation }}</td>*/
/*                                   </tr>*/
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
/*                                         {% if orderArticle.user.firstName == null%}*/
/*                                             <div class="text text-capitalize text-danger"> {{  'user.noInfo'|trans }} </div>*/
/*                                         {% else %}*/
/*                                             {{ orderArticle.user.firstName }}*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.lastName'|trans }}</th>*/
/*                                     <td>*/
/*                                         {% if orderArticle.user.lastName == null%}*/
/*                                             <div class="text text-capitalize text-danger"> {{  'user.noInfo'|trans }} </div>*/
/*                                         {% else %}*/
/*                                             {{ orderArticle.user.lastName }}*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}</th>*/
/*                                     <td>{{ orderArticle.user.username }}</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}</th>*/
/*                                     <td>{{ orderArticle.user.email }}</td>*/
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
/*                                 <th class="text text-primary">{{ 'magazine.field.designation'|trans }}</th>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.quantity'|trans }}</th>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.unit'|trans }}</th>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.family'|trans }}</th>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.subFamily'|trans }}</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             */
/*                             {% for detail in orderArticle.detail %}*/
/*                                 <tr>*/
/*                                     <td>{{ detail.article.designation }}</td>*/
/*                                     <td>{{ detail.quantity }}</td>*/
/*                                     <td>{{ detail.article.unit.designation }}</td>*/
/*                                     <td>{{ detail.article.subFamily.designation }}</td>*/
/*                                     <td>{{ detail.article.subFamily.family.designation }}</td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*             <table class="table table-striped">*/
/*                 <thead>*/
/*                     */
/*                 </thead>*/
/*                 <tbody>*/
/*                     */
/*                 </tbody>*/
/*             </table>*/
/*         </div> <!-- .container-fluid -->*/
/*     </div> <!-- #page-content --> */
/*     */
/* </body>*/
/* </html>*/
/* */
