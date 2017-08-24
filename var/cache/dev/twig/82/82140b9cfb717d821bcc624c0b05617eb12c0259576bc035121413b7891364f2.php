<?php

/* ISETSOMagazineBundle:PDF:stock_pdf.html.twig */
class __TwigTemplate_11f26c1c6a7c7252a8ecce873d5729df58166f4387ecf2a00629ad1e298f9ccb extends Twig_Template
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
        $__internal_947b120a5806ed4502c1201efbcb52f0836eea27f0408e7961a8fed2f3244691 = $this->env->getExtension("native_profiler");
        $__internal_947b120a5806ed4502c1201efbcb52f0836eea27f0408e7961a8fed2f3244691->enter($__internal_947b120a5806ed4502c1201efbcb52f0836eea27f0408e7961a8fed2f3244691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:PDF:stock_pdf.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.stock"), "html", null, true);
        echo "
                    </h1>
                </div>
            </div>
            <div class=\"panel panel-teal\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
                <div class=\"panel-heading\"></div>
                <div class=\"panel-body no-padding\">
                    <table class=\"table table-striped table-bordered\">
                        <thead>
                            <tr class=\"info\">
                                <th>#</th>
                                <th>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.article"), "html", null, true);
        echo "</th>
                                <th>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.price"), "html", null, true);
        echo "</th>
                                <th>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.input"), "html", null, true);
        echo "</th>
                                <th>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.discharge"), "html", null, true);
        echo "</th>
                                <th>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.return"), "html", null, true);
        echo "</th>
                                <th>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.unit"), "html", null, true);
        echo "</th>
                                <th>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.stock"), "html", null, true);
        echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listStock"]) ? $context["listStock"] : $this->getContext($context, "listStock")));
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 66
            echo "                                <tr>
                                    <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "id_article", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "article_name", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "price", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "qte", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "discharge", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "returned", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "unit", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 74
            echo twig_escape_filter($this->env, (($this->getAttribute($context["stock"], "returned", array()) + $this->getAttribute($context["stock"], "qte", array())) - $this->getAttribute($context["stock"], "discharge", array())), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
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
        
        $__internal_947b120a5806ed4502c1201efbcb52f0836eea27f0408e7961a8fed2f3244691->leave($__internal_947b120a5806ed4502c1201efbcb52f0836eea27f0408e7961a8fed2f3244691_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_674274e9929c170cd50e2f155a83a6f62f96d13c399a15fc1d2c67a7bffef700 = $this->env->getExtension("native_profiler");
        $__internal_674274e9929c170cd50e2f155a83a6f62f96d13c399a15fc1d2c67a7bffef700->enter($__internal_674274e9929c170cd50e2f155a83a6f62f96d13c399a15fc1d2c67a7bffef700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_674274e9929c170cd50e2f155a83a6f62f96d13c399a15fc1d2c67a7bffef700->leave($__internal_674274e9929c170cd50e2f155a83a6f62f96d13c399a15fc1d2c67a7bffef700_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:PDF:stock_pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 20,  189 => 18,  184 => 13,  178 => 12,  155 => 77,  146 => 74,  142 => 73,  138 => 72,  134 => 71,  130 => 70,  126 => 69,  122 => 68,  118 => 67,  115 => 66,  111 => 65,  104 => 61,  100 => 60,  96 => 59,  92 => 58,  88 => 57,  84 => 56,  80 => 55,  66 => 44,  56 => 37,  38 => 21,  36 => 12,  23 => 1,);
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
/*                         {{ 'magazine.stock'|trans }}*/
/*                     </h1>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="panel panel-teal" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*                 <div class="panel-heading"></div>*/
/*                 <div class="panel-body no-padding">*/
/*                     <table class="table table-striped table-bordered">*/
/*                         <thead>*/
/*                             <tr class="info">*/
/*                                 <th>#</th>*/
/*                                 <th>{{ 'magazine.field.article'|trans }}</th>*/
/*                                 <th>{{ 'magazine.field.price'|trans }}</th>*/
/*                                 <th>{{ 'magazine.field.input'|trans }}</th>*/
/*                                 <th>{{ 'magazine.field.discharge'|trans }}</th>*/
/*                                 <th>{{ 'magazine.field.return'|trans }}</th>*/
/*                                 <th>{{ 'magazine.field.unit'|trans }}</th>*/
/*                                 <th>{{ 'magazine.field.stock'|trans }}</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% for stock in listStock %}*/
/*                                 <tr>*/
/*                                     <td>{{ stock.id_article }}</td>*/
/*                                     <td>{{ stock.article_name }}</td>*/
/*                                     <td>{{ stock.price }}</td>*/
/*                                     <td>{{ stock.qte }}</td>*/
/*                                     <td>{{ stock.discharge }}</td>*/
/*                                     <td>{{ stock.returned }}</td>*/
/*                                     <td>{{ stock.unit }}</td>*/
/*                                     <td>{{ (stock.returned + stock.qte) - stock.discharge }}</td>*/
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
