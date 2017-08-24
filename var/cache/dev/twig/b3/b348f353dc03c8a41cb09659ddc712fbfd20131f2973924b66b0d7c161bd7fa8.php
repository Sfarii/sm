<?php

/* ISETSOMagazineBundle:PDF:return_pdf.html.twig */
class __TwigTemplate_3dcbed73c0ef5fbe2fa7f8cb24078762d20a7a70aef2febe701e1ad5b1ca8aa7 extends Twig_Template
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
        $__internal_ae9f8b55defda8d1677e4a47cfb3e3e9c2ac66672ffcf0e2ead76c0e39f86958 = $this->env->getExtension("native_profiler");
        $__internal_ae9f8b55defda8d1677e4a47cfb3e3e9c2ac66672ffcf0e2ead76c0e39f86958->enter($__internal_ae9f8b55defda8d1677e4a47cfb3e3e9c2ac66672ffcf0e2ead76c0e39f86958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:PDF:return_pdf.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.return"), "html", null, true);
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
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.observation"), "html", null, true);
        echo "</th>
                                <th>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.date"), "html", null, true);
        echo "</th>
                                <th>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.etat"), "html", null, true);
        echo "</th>
                                <th>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.userName"), "html", null, true);
        echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")));
        foreach ($context['_seq'] as $context["_key"] => $context["return"]) {
            // line 64
            echo "                                <tr>
                                    <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["return"], "id", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["return"], "observation", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 67
            if ($this->getAttribute($context["return"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["return"], "date", array()), "Y/m/d"), "html", null, true);
            }
            echo "</td>      
                                    <td>
                                        
                                        ";
            // line 70
            if (($this->getAttribute($context["return"], "etat", array()) == "a")) {
                // line 71
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.etatOption.accept"), "html", null, true);
                echo "
                                        ";
            } elseif (($this->getAttribute(            // line 72
$context["return"], "etat", array()) == "r")) {
                // line 73
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.etatOption.refuse"), "html", null, true);
                echo "                   
                                        ";
            } elseif (($this->getAttribute(            // line 74
$context["return"], "etat", array()) == "w")) {
                // line 75
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.etatOption.wait"), "html", null, true);
                echo "
                                        ";
            } else {
                // line 77
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.etat"), "html", null, true);
                echo "
                                        ";
            }
            // line 78
            echo "  
                                    </td>                                  
                                    <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["return"], "user", array()), "username", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- .container-fluid -->
    </div> <!-- #page-content --> 
    
</body>
</html>
";
        
        $__internal_ae9f8b55defda8d1677e4a47cfb3e3e9c2ac66672ffcf0e2ead76c0e39f86958->leave($__internal_ae9f8b55defda8d1677e4a47cfb3e3e9c2ac66672ffcf0e2ead76c0e39f86958_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ecc0256dece8d75f3cc979f99b047e128c543f17b9ce2b4e9519c7e2a8bdabab = $this->env->getExtension("native_profiler");
        $__internal_ecc0256dece8d75f3cc979f99b047e128c543f17b9ce2b4e9519c7e2a8bdabab->enter($__internal_ecc0256dece8d75f3cc979f99b047e128c543f17b9ce2b4e9519c7e2a8bdabab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ecc0256dece8d75f3cc979f99b047e128c543f17b9ce2b4e9519c7e2a8bdabab->leave($__internal_ecc0256dece8d75f3cc979f99b047e128c543f17b9ce2b4e9519c7e2a8bdabab_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:PDF:return_pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 20,  191 => 18,  186 => 13,  180 => 12,  164 => 83,  155 => 80,  151 => 78,  145 => 77,  139 => 75,  137 => 74,  132 => 73,  130 => 72,  125 => 71,  123 => 70,  115 => 67,  111 => 66,  107 => 65,  104 => 64,  100 => 63,  93 => 59,  89 => 58,  85 => 57,  81 => 56,  66 => 44,  56 => 37,  38 => 21,  36 => 12,  23 => 1,);
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
/*                         {{ 'magazine.return'|trans }}*/
/*                     </h1>*/
/*                 </div>*/
/*             </div>*/
/*             */
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
/*                                 <th>{{ 'magazine.field.userName'|trans }}</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% for return in returnArticle %}*/
/*                                 <tr>*/
/*                                     <td>{{ return.id }}</td>*/
/*                                         <td>{{ return.observation }}</td>*/
/*                                         <td>{% if return.date %}{{ return.date|date('Y/m/d') }}{% endif %}</td>      */
/*                                     <td>*/
/*                                         */
/*                                         {% if return.etat == "a" %}*/
/*                                             {{ 'magazine.etatOption.accept'|trans }}*/
/*                                         {% elseif return.etat == "r" %}*/
/*                                             {{ 'magazine.etatOption.refuse'|trans }}                   */
/*                                         {% elseif return.etat == "w" %}*/
/*                                             {{ 'magazine.etatOption.wait'|trans }}*/
/*                                         {% else %}*/
/*                                             {{ 'magazine.etat'|trans }}*/
/*                                         {% endif %}  */
/*                                     </td>                                  */
/*                                     <td>{{ return.user.username }}</td>*/
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
