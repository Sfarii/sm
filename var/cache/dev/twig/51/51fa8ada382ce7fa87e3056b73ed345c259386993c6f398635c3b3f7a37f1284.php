<?php

/* ISETSOMagazineBundle:PDF:journal_detail_pdf.html.twig */
class __TwigTemplate_92a1d5a6c80485cec96410fed950430ce24f08135713214cd1f847b3f0e04aef extends Twig_Template
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
        $__internal_bce6b05151ea14f111727ce1c49d10154dd9d0a46cb43a02335f61f82c75e2d2 = $this->env->getExtension("native_profiler");
        $__internal_bce6b05151ea14f111727ce1c49d10154dd9d0a46cb43a02335f61f82c75e2d2->enter($__internal_bce6b05151ea14f111727ce1c49d10154dd9d0a46cb43a02335f61f82c75e2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:PDF:journal_detail_pdf.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.titel"), "html", null, true);
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
        if ($this->getAttribute((isset($context["journal"]) ? $context["journal"] : $this->getContext($context, "journal")), "dateEntre", array())) {
            // line 59
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["journal"]) ? $context["journal"] : $this->getContext($context, "journal")), "dateEntre", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "
                                        ";
        }
        // line 61
        echo "                                    </td>
                                  </tr>
                                  
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.type"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["journal"]) ? $context["journal"] : $this->getContext($context, "journal")), "type", array()), "html", null, true);
        echo "</td>
                                  </tr>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.origin"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal"]) ? $context["journal"] : $this->getContext($context, "journal")), "origin", array()), "designation", array()), "html", null, true);
        echo "</td>
                                  </tr>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.userName"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal"]) ? $context["journal"] : $this->getContext($context, "journal")), "user", array()), "username", array()), "html", null, true);
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
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.provider"), "html", null, true);
        echo "</div>
                        <div class=\"panel-body no-padding\">
                            <table class=\"table table-striped\">
                                
                                <tbody>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.socialReason"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal"]) ? $context["journal"] : $this->getContext($context, "journal")), "provider", array()), "socialReason", array()), "html", null, true);
        echo "</td>
                                  </tr>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.phone"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal"]) ? $context["journal"] : $this->getContext($context, "journal")), "provider", array()), "phone", array()), "html", null, true);
        echo "</td>
                                  </tr>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.address"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal"]) ? $context["journal"] : $this->getContext($context, "journal")), "provider", array()), "address", array()), "html", null, true);
        echo "</td>
                                  </tr>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.fax"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal"]) ? $context["journal"] : $this->getContext($context, "journal")), "provider", array()), "fax", array()), "html", null, true);
        echo "</td>
                                  </tr>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.email"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal"]) ? $context["journal"] : $this->getContext($context, "journal")), "provider", array()), "email", array()), "html", null, true);
        echo "</td>
                                  </tr>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.contact"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal"]) ? $context["journal"] : $this->getContext($context, "journal")), "provider", array()), "contact", array()), "html", null, true);
        echo "</td>
                                  </tr>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.userName"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["journal"]) ? $context["journal"] : $this->getContext($context, "journal")), "provider", array()), "user", array()), "username", array()), "html", null, true);
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
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.list.name"), "html", null, true);
        echo "</div>
                <div class=\"panel-body no-padding\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr class=\"info\">
                                <th class=\"text text-primary\">#</th>
                                <th class=\"text text-primary\">";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.designation"), "html", null, true);
        echo "</th>
                                <th class=\"text text-primary\">";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.price"), "html", null, true);
        echo "</th>
                                <th class=\"text text-primary\">";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "</th>
                                <th class=\"text text-primary\">";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.unit"), "html", null, true);
        echo "</th>
                                <th class=\"text text-primary\">";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.family"), "html", null, true);
        echo "</th>
                                <th class=\"text text-primary\">";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.subFamily"), "html", null, true);
        echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["journal"]) ? $context["journal"] : $this->getContext($context, "journal")), "supportingDocument", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["supportingDocument"]) {
            // line 140
            echo "                                <tr>
                                    <td>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["supportingDocument"], "inventoryNumber", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["supportingDocument"], "article", array()), "designation", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["supportingDocument"], "price", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($context["supportingDocument"], "quantity", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["supportingDocument"], "article", array()), "unit", array()), "designation", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["supportingDocument"], "article", array()), "subFamily", array()), "designation", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["supportingDocument"], "article", array()), "subFamily", array()), "family", array()), "designation", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supportingDocument'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
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
        
        $__internal_bce6b05151ea14f111727ce1c49d10154dd9d0a46cb43a02335f61f82c75e2d2->leave($__internal_bce6b05151ea14f111727ce1c49d10154dd9d0a46cb43a02335f61f82c75e2d2_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dcc2ac9cfda3af28df9d05aca73ad1acf2151f2ac7c507e0514c4aedce681eea = $this->env->getExtension("native_profiler");
        $__internal_dcc2ac9cfda3af28df9d05aca73ad1acf2151f2ac7c507e0514c4aedce681eea->enter($__internal_dcc2ac9cfda3af28df9d05aca73ad1acf2151f2ac7c507e0514c4aedce681eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_dcc2ac9cfda3af28df9d05aca73ad1acf2151f2ac7c507e0514c4aedce681eea->leave($__internal_dcc2ac9cfda3af28df9d05aca73ad1acf2151f2ac7c507e0514c4aedce681eea_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:PDF:journal_detail_pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 20,  333 => 18,  328 => 13,  322 => 12,  298 => 150,  289 => 147,  285 => 146,  281 => 145,  277 => 144,  273 => 143,  269 => 142,  265 => 141,  262 => 140,  258 => 139,  250 => 134,  246 => 133,  242 => 132,  238 => 131,  234 => 130,  230 => 129,  221 => 123,  209 => 114,  205 => 113,  199 => 110,  195 => 109,  189 => 106,  185 => 105,  179 => 102,  175 => 101,  169 => 98,  165 => 97,  159 => 94,  155 => 93,  149 => 90,  145 => 89,  136 => 83,  124 => 74,  120 => 73,  114 => 70,  110 => 69,  104 => 66,  100 => 65,  94 => 61,  88 => 59,  86 => 58,  81 => 56,  66 => 44,  56 => 37,  38 => 21,  36 => 12,  23 => 1,);
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
/*                         {{ 'magazine.titel'|trans }}*/
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
/*                                     <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.date'|trans }}</th>*/
/*                                     <td>*/
/*                                         {% if journal.dateEntre %}*/
/*                                             {{ journal.dateEntre|date('Y-m-d H:i:s') }}*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                   </tr>*/
/*                                   */
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.type'|trans }}</th>*/
/*                                     <td>{{ journal.type }}</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.origin'|trans }}</th>*/
/*                                     <td>{{ journal.origin.designation }}</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.userName'|trans }}</th>*/
/*                                     <td>{{ journal.user.username }}</td>*/
/*                                   </tr>*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                     <div class="panel panel-info" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*                         <div class="panel-heading">{{ 'magazine.field.provider'|trans }}</div>*/
/*                         <div class="panel-body no-padding">*/
/*                             <table class="table table-striped">*/
/*                                 */
/*                                 <tbody>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.socialReason'|trans }}</th>*/
/*                                     <td>{{ journal.provider.socialReason }}</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.phone'|trans }}</th>*/
/*                                     <td>{{ journal.provider.phone }}</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.address'|trans }}</th>*/
/*                                     <td>{{ journal.provider.address }}</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.fax'|trans }}</th>*/
/*                                     <td>{{ journal.provider.fax }}</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.email'|trans }}</th>*/
/*                                     <td>{{ journal.provider.email }}</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.contact'|trans }}</th>*/
/*                                     <td>{{ journal.provider.contact }}</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.userName'|trans }}</th>*/
/*                                     <td>{{ journal.provider.user.username }}</td>*/
/*                                   </tr>*/
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
/*                                 <th class="text text-primary">#</th>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.designation'|trans }}</th>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.price'|trans }}</th>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.quantity'|trans }}</th>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.unit'|trans }}</th>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.family'|trans }}</th>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.subFamily'|trans }}</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             */
/*                             {% for supportingDocument in journal.supportingDocument %}*/
/*                                 <tr>*/
/*                                     <td>{{ supportingDocument.inventoryNumber }}</td>*/
/*                                     <td>{{ supportingDocument.article.designation }}</td>*/
/*                                     <td>{{ supportingDocument.price }}</td>*/
/*                                     <td>{{ supportingDocument.quantity }}</td>*/
/*                                     <td>{{ supportingDocument.article.unit.designation }}</td>*/
/*                                     <td>{{ supportingDocument.article.subFamily.designation }}</td>*/
/*                                     <td>{{ supportingDocument.article.subFamily.family.designation }}</td>*/
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
