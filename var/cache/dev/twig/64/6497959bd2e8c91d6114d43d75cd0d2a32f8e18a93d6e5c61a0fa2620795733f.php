<?php

/* ISETSOMagazineBundle:PDF:pdf.html.twig */
class __TwigTemplate_d52b0b2888614843b143abe2dda0a18a2015906ad93b6bf5a1f44d5f80af25c7 extends Twig_Template
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
        $__internal_941ee6dc5a95fbaea21e53c88ead17d356050b89e0472747d8305a17bcccf3cf = $this->env->getExtension("native_profiler");
        $__internal_941ee6dc5a95fbaea21e53c88ead17d356050b89e0472747d8305a17bcccf3cf->enter($__internal_941ee6dc5a95fbaea21e53c88ead17d356050b89e0472747d8305a17bcccf3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:PDF:pdf.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.titel"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.type"), "html", null, true);
        echo "</th>
                                <th>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.date"), "html", null, true);
        echo "</th>
                                <th>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.origin"), "html", null, true);
        echo "</th>
                                <th>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.provider"), "html", null, true);
        echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["journal"]) ? $context["journal"] : $this->getContext($context, "journal")));
        foreach ($context['_seq'] as $context["_key"] => $context["journalDetail"]) {
            // line 63
            echo "                                <tr>
                                    <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["journalDetail"], "id", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["journalDetail"], "type", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 67
            if ($this->getAttribute($context["journalDetail"], "dateEntre", array())) {
                // line 68
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["journalDetail"], "dateEntre", array()), "Y/m/d"), "html", null, true);
                echo "
                                        ";
            }
            // line 70
            echo "                                    </td>
                                    <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["journalDetail"], "origin", array()), "designation", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["journalDetail"], "provider", array()), "socialReason", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['journalDetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- .container-fluid -->
    </div> <!-- #page-content --> 
</body>
</html>
";
        
        $__internal_941ee6dc5a95fbaea21e53c88ead17d356050b89e0472747d8305a17bcccf3cf->leave($__internal_941ee6dc5a95fbaea21e53c88ead17d356050b89e0472747d8305a17bcccf3cf_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_570c7bccab378557fca2593ca7b82903f380df55fbd6be6ed464e9529da4a922 = $this->env->getExtension("native_profiler");
        $__internal_570c7bccab378557fca2593ca7b82903f380df55fbd6be6ed464e9529da4a922->enter($__internal_570c7bccab378557fca2593ca7b82903f380df55fbd6be6ed464e9529da4a922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_570c7bccab378557fca2593ca7b82903f380df55fbd6be6ed464e9529da4a922->leave($__internal_570c7bccab378557fca2593ca7b82903f380df55fbd6be6ed464e9529da4a922_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:PDF:pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 20,  165 => 18,  160 => 13,  154 => 12,  139 => 75,  130 => 72,  126 => 71,  123 => 70,  117 => 68,  115 => 67,  110 => 65,  106 => 64,  103 => 63,  99 => 62,  92 => 58,  88 => 57,  84 => 56,  80 => 55,  66 => 44,  56 => 37,  38 => 21,  36 => 12,  23 => 1,);
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
/*             thead {display: table-header-group;}*/
/*             tr {page-break-inside: avoid;}*/
/*             div{page-break-inside: avoid;}*/
/*         </style>*/
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
/*                         {{ 'magazine.titel'|trans }}*/
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
/*                                 <th>{{ 'magazine.field.type'|trans }}</th>*/
/*                                 <th>{{ 'magazine.field.date'|trans }}</th>*/
/*                                 <th>{{ 'magazine.field.origin'|trans }}</th>*/
/*                                 <th>{{ 'magazine.field.provider'|trans }}</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% for journalDetail in journal %}*/
/*                                 <tr>*/
/*                                     <td>{{ journalDetail.id }}</td>*/
/*                                     <td>{{ journalDetail.type }}</td>*/
/*                                     <td>*/
/*                                         {% if journalDetail.dateEntre %}*/
/*                                             {{ journalDetail.dateEntre|date('Y/m/d') }}*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                     <td>{{ journalDetail.origin.designation }}</td>*/
/*                                     <td>{{ journalDetail.provider.socialReason }}</td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*         </div> <!-- .container-fluid -->*/
/*     </div> <!-- #page-content --> */
/* </body>*/
/* </html>*/
/* */
