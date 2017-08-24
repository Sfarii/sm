<?php

/* ISETSOMagazineBundle:PDF:inventory_pdf.html.twig */
class __TwigTemplate_0e14a3a3ca34c07130c212541f23d23b98c623b9a4ebec4047ef6a6852a6dd46 extends Twig_Template
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
        $__internal_aa5e98f3fd08434de19288c4e29b6e90f463f9b543dde01b6cfdcf1dfc2004f8 = $this->env->getExtension("native_profiler");
        $__internal_aa5e98f3fd08434de19288c4e29b6e90f463f9b543dde01b6cfdcf1dfc2004f8->enter($__internal_aa5e98f3fd08434de19288c4e29b6e90f463f9b543dde01b6cfdcf1dfc2004f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:PDF:inventory_pdf.html.twig"));

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
        echo "        <style type=\"text/css\">
        thead {display: table-header-group;}
        tr {page-break-inside: avoid;}
        div{page-break-inside: avoid;}
    </style>
</head>
<body style=\"background-color: white;padding-bottom: 20%\">
    <div class=\"page-content\">
        <div class=\"container-fluid\" style=\"padding-top: 5%\">                 
            <div class=\"row mb-xl\">
                <div class=\"col-md-12\">
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.inventory"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.article"), "html", null, true);
        echo "</th>
                                <th>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "</th>
                                <th>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.price"), "html", null, true);
        echo "</th>
                                <th>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.unit"), "html", null, true);
        echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inventory"]) ? $context["inventory"] : $this->getContext($context, "inventory")));
        foreach ($context['_seq'] as $context["_key"] => $context["supportingDocument"]) {
            // line 63
            echo "                                <tr>
                                    <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["supportingDocument"], "inventoryNumber", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["supportingDocument"], "article", array()), "designation", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["supportingDocument"], "price", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["supportingDocument"], "quantity", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["supportingDocument"], "article", array()), "unit", array()), "designation", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supportingDocument'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
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
        
        $__internal_aa5e98f3fd08434de19288c4e29b6e90f463f9b543dde01b6cfdcf1dfc2004f8->leave($__internal_aa5e98f3fd08434de19288c4e29b6e90f463f9b543dde01b6cfdcf1dfc2004f8_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b4ed1b365543041cd1bad16f3a0c297d36afd67d39616bc3ae105a5fb330efc = $this->env->getExtension("native_profiler");
        $__internal_5b4ed1b365543041cd1bad16f3a0c297d36afd67d39616bc3ae105a5fb330efc->enter($__internal_5b4ed1b365543041cd1bad16f3a0c297d36afd67d39616bc3ae105a5fb330efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6c0ca7c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6c0ca7c_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6c0ca7c_font-awesome.min_1.css");
            // line 18
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method") . (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url"))), "html", null, true);
            echo "\" />
            ";
            // asset "6c0ca7c_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6c0ca7c_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6c0ca7c_themify-icons_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method") . (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url"))), "html", null, true);
            echo "\" />
            ";
            // asset "6c0ca7c_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6c0ca7c_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6c0ca7c_styles_3.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method") . (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url"))), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "6c0ca7c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6c0ca7c") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6c0ca7c.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method") . (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url"))), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "        ";
        
        $__internal_5b4ed1b365543041cd1bad16f3a0c297d36afd67d39616bc3ae105a5fb330efc->leave($__internal_5b4ed1b365543041cd1bad16f3a0c297d36afd67d39616bc3ae105a5fb330efc_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:PDF:inventory_pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 20,  165 => 18,  160 => 13,  154 => 12,  131 => 71,  122 => 68,  118 => 67,  114 => 66,  110 => 65,  106 => 64,  103 => 63,  99 => 62,  92 => 58,  88 => 57,  84 => 56,  80 => 55,  66 => 44,  56 => 37,  38 => 21,  36 => 12,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">*/
/*         <meta name="apple-mobile-web-app-capable" content="yes">*/
/*         <meta name="apple-touch-fullscreen" content="yes">*/
/*         <meta name="description" content="PFE">*/
/*         <meta name="author" content="BelhassenRami">*/
/* */
/*         {% block stylesheets %}*/
/*             {% stylesheets */
/*                 'bundles/isetsomagazine/fonts/font-awesome/css/font-awesome.min.css'*/
/*                 'bundles/isetsomagazine/fonts/themify-icons/themify-icons.css'*/
/*                 'bundles/isetsomagazine/css/styles.css'*/
/*                 filter='cssrewrite' %}*/
/*             <link rel="stylesheet" href="{{ app.request.getSchemeAndHttpHost() ~ asset_url }}" />*/
/*             {% endstylesheets %}*/
/*         {% endblock %}*/
/*         <style type="text/css">*/
/*         thead {display: table-header-group;}*/
/*         tr {page-break-inside: avoid;}*/
/*         div{page-break-inside: avoid;}*/
/*     </style>*/
/* </head>*/
/* <body style="background-color: white;padding-bottom: 20%">*/
/*     <div class="page-content">*/
/*         <div class="container-fluid" style="padding-top: 5%">                 */
/*             <div class="row mb-xl">*/
/*                 <div class="col-md-12">*/
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
/*                         {{ 'magazine.inventory'|trans }}*/
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
/*                                 <th>{{ 'magazine.field.article'|trans }}</th>*/
/*                                 <th>{{ 'magazine.field.quantity'|trans }}</th>*/
/*                                 <th>{{ 'magazine.field.price'|trans }}</th>*/
/*                                 <th>{{ 'magazine.field.unit'|trans }}</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% for supportingDocument in inventory %}*/
/*                                 <tr>*/
/*                                     <td>{{ supportingDocument.inventoryNumber }}</td>*/
/*                                     <td>{{ supportingDocument.article.designation }}</td>*/
/*                                     <td>{{ supportingDocument.price }}</td>*/
/*                                     <td>{{ supportingDocument.quantity }}</td>*/
/*                                     <td>{{ supportingDocument.article.unit.designation }}</td>*/
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
/* </body>*/
/* </html>*/
/* */
