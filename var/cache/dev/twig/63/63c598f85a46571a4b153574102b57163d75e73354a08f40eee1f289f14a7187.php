<?php

/* ISETSOMagazineBundle:PDF:discharge_detail_pdf.html.twig */
class __TwigTemplate_3d1713524174de7d27672b2876ac1f7015f666dd22f88d3b9ae16c94ef083600 extends Twig_Template
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
        $__internal_ae6bb913f664d8cfce957ce734154e0f4013fc381856ea8d8f0d279e8e1cab13 = $this->env->getExtension("native_profiler");
        $__internal_ae6bb913f664d8cfce957ce734154e0f4013fc381856ea8d8f0d279e8e1cab13->enter($__internal_ae6bb913f664d8cfce957ce734154e0f4013fc381856ea8d8f0d279e8e1cab13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:PDF:discharge_detail_pdf.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.infoDischarge"), "html", null, true);
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
        if ($this->getAttribute((isset($context["discharge"]) ? $context["discharge"] : $this->getContext($context, "discharge")), "date", array())) {
            // line 59
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["discharge"]) ? $context["discharge"] : $this->getContext($context, "discharge")), "date", array()), "Y/m/d"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["discharge"]) ? $context["discharge"] : $this->getContext($context, "discharge")), "observation", array()), "html", null, true);
        echo "</td>
                                  </tr>
                                  <tr>
                                    <th class=\"text text-primary\">
                                        ";
        // line 70
        if ($this->getAttribute((isset($context["discharge"]) ? $context["discharge"] : null), "toLocal", array(), "any", true, true)) {
            // line 71
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.local"), "html", null, true);
            echo "
                                        ";
        } elseif ($this->getAttribute(        // line 72
(isset($context["discharge"]) ? $context["discharge"] : null), "toMagazine", array(), "any", true, true)) {
            // line 73
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.tomagazin"), "html", null, true);
            echo "                   
                                        ";
        } else {
            // line 75
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.toUser"), "html", null, true);
            echo "
                                        ";
        }
        // line 76
        echo "  
                                    </th>
                                    <td>
                                        ";
        // line 79
        if ($this->getAttribute((isset($context["discharge"]) ? $context["discharge"] : null), "toLocal", array(), "any", true, true)) {
            // line 80
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["discharge"]) ? $context["discharge"] : $this->getContext($context, "discharge")), "toLocal", array()), "designation", array()), "html", null, true);
            echo "
                                        ";
        } elseif ($this->getAttribute(        // line 81
(isset($context["discharge"]) ? $context["discharge"] : null), "toMagazine", array(), "any", true, true)) {
            // line 82
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["discharge"]) ? $context["discharge"] : $this->getContext($context, "discharge")), "toMagazine", array()), "designation", array()), "html", null, true);
            echo "  
                                        ";
        } else {
            // line 84
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["discharge"]) ? $context["discharge"] : $this->getContext($context, "discharge")), "toUser", array()), "username", array()), "html", null, true);
            echo "
                                        ";
        }
        // line 86
        echo "                                    </td>
                                  </tr>
                                  <tr>
                                    <th class=\"text text-primary\">
                                        ";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.etat"), "html", null, true);
        echo "
                                    </th>
                                    <td>
                                        ";
        // line 93
        if (($this->getAttribute((isset($context["discharge"]) ? $context["discharge"] : $this->getContext($context, "discharge")), "etat", array()) == "a")) {
            // line 94
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.etatOption.accept"), "html", null, true);
            echo "
                                        ";
        } elseif (($this->getAttribute(        // line 95
(isset($context["discharge"]) ? $context["discharge"] : $this->getContext($context, "discharge")), "etat", array()) == "r")) {
            // line 96
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.etatOption.refuse"), "html", null, true);
            echo "                   
                                        ";
        } elseif (($this->getAttribute(        // line 97
(isset($context["discharge"]) ? $context["discharge"] : $this->getContext($context, "discharge")), "etat", array()) == "w")) {
            // line 98
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.etatOption.wait"), "html", null, true);
            echo "
                                        ";
        } else {
            // line 100
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.etat"), "html", null, true);
            echo "
                                        ";
        }
        // line 101
        echo " 
                                    </td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"panel panel-info\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
                        <div class=\"panel-heading\">";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.userName"), "html", null, true);
        echo "</div>
                        <div class=\"panel-body no-padding\">
                            <table class=\"table table-striped\">
                                <tbody>
                                    <tr>
                                    <th class=\"text text-primary\">";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.firstName"), "html", null, true);
        echo "</th>
                                    <td>
                                        ";
        // line 118
        if (($this->getAttribute($this->getAttribute((isset($context["discharge"]) ? $context["discharge"] : $this->getContext($context, "discharge")), "user", array()), "firstName", array()) == null)) {
            // line 119
            echo "                                            <div class=\"text text-capitalize text-danger\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.noInfo"), "html", null, true);
            echo " </div>
                                        ";
        } else {
            // line 121
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["discharge"]) ? $context["discharge"] : $this->getContext($context, "discharge")), "user", array()), "firstName", array()), "html", null, true);
            echo "
                                        ";
        }
        // line 123
        echo "                                    </td>
                                  </tr>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.lastName"), "html", null, true);
        echo "</th>
                                    <td>
                                        ";
        // line 128
        if (($this->getAttribute($this->getAttribute((isset($context["discharge"]) ? $context["discharge"] : $this->getContext($context, "discharge")), "user", array()), "lastName", array()) == null)) {
            // line 129
            echo "                                            <div class=\"text text-capitalize text-danger\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.noInfo"), "html", null, true);
            echo " </div>
                                        ";
        } else {
            // line 131
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["discharge"]) ? $context["discharge"] : $this->getContext($context, "discharge")), "user", array()), "lastName", array()), "html", null, true);
            echo "
                                        ";
        }
        // line 133
        echo "                                    </td>
                                  </tr>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["discharge"]) ? $context["discharge"] : $this->getContext($context, "discharge")), "user", array()), "username", array()), "html", null, true);
        echo "</td>
                                  </tr>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["discharge"]) ? $context["discharge"] : $this->getContext($context, "discharge")), "user", array()), "email", array()), "html", null, true);
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
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.list.name"), "html", null, true);
        echo "</div>
                <div class=\"panel-body no-padding\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr class=\"info\">
                                <th class=\"text text-primary\">";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.id"), "html", null, true);
        echo "</th>
                                <th class=\"text text-primary\">";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.designation"), "html", null, true);
        echo "</th>
                                <th class=\"text text-primary\">";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "</th>
                                <th class=\"text text-primary\">";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.unit"), "html", null, true);
        echo "</th>
                                <th class=\"text text-primary\">";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.family"), "html", null, true);
        echo "</th>
                                <th class=\"text text-primary\">";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.subFamily"), "html", null, true);
        echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["discharge"]) ? $context["discharge"] : $this->getContext($context, "discharge")), "detail", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 167
            echo "                                <tr>
                                    <td>";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "inventoryNumber", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "designation", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "quantity", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "unit", array()), "designation", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "subFamily", array()), "designation", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "subFamily", array()), "family", array()), "designation", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
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
        
        $__internal_ae6bb913f664d8cfce957ce734154e0f4013fc381856ea8d8f0d279e8e1cab13->leave($__internal_ae6bb913f664d8cfce957ce734154e0f4013fc381856ea8d8f0d279e8e1cab13_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_16f501ab9792c5ce7d3110b7ab9246485fb4256425b705d80bfe18c42173cf2d = $this->env->getExtension("native_profiler");
        $__internal_16f501ab9792c5ce7d3110b7ab9246485fb4256425b705d80bfe18c42173cf2d->enter($__internal_16f501ab9792c5ce7d3110b7ab9246485fb4256425b705d80bfe18c42173cf2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_16f501ab9792c5ce7d3110b7ab9246485fb4256425b705d80bfe18c42173cf2d->leave($__internal_16f501ab9792c5ce7d3110b7ab9246485fb4256425b705d80bfe18c42173cf2d_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:PDF:discharge_detail_pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 20,  404 => 18,  399 => 13,  393 => 12,  365 => 176,  356 => 173,  352 => 172,  348 => 171,  344 => 170,  340 => 169,  336 => 168,  333 => 167,  329 => 166,  321 => 161,  317 => 160,  313 => 159,  309 => 158,  305 => 157,  301 => 156,  293 => 151,  280 => 141,  276 => 140,  270 => 137,  266 => 136,  261 => 133,  255 => 131,  249 => 129,  247 => 128,  242 => 126,  237 => 123,  231 => 121,  225 => 119,  223 => 118,  218 => 116,  210 => 111,  198 => 101,  192 => 100,  186 => 98,  184 => 97,  179 => 96,  177 => 95,  172 => 94,  170 => 93,  164 => 90,  158 => 86,  152 => 84,  146 => 82,  144 => 81,  139 => 80,  137 => 79,  132 => 76,  126 => 75,  120 => 73,  118 => 72,  113 => 71,  111 => 70,  104 => 66,  100 => 65,  94 => 61,  88 => 59,  86 => 58,  81 => 56,  66 => 44,  56 => 37,  38 => 21,  36 => 12,  23 => 1,);
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
/*                         {{ 'magazine.infoDischarge'|trans }}*/
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
/*                                         {% if discharge.date %}*/
/*                                             {{ discharge.date|date('Y/m/d') }}*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                   </tr>*/
/*                                   */
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.observation'|trans }}</th>*/
/*                                     <td>{{ discharge.observation }}</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">*/
/*                                         {% if discharge.toLocal is defined %}*/
/*                                             {{ 'magazine.field.local'|trans }}*/
/*                                         {% elseif discharge.toMagazine is defined %}*/
/*                                             {{ 'magazine.field.tomagazin'|trans }}                   */
/*                                         {% else %}*/
/*                                             {{ 'magazine.field.toUser'|trans }}*/
/*                                         {% endif %}  */
/*                                     </th>*/
/*                                     <td>*/
/*                                         {% if discharge.toLocal is defined %}*/
/*                                             {{ discharge.toLocal.designation }}*/
/*                                         {% elseif discharge.toMagazine is defined %}*/
/*                                             {{ discharge.toMagazine.designation }}  */
/*                                         {% else %}*/
/*                                             {{ discharge.toUser.username }}*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">*/
/*                                         {{ 'magazine.field.etat'|trans }}*/
/*                                     </th>*/
/*                                     <td>*/
/*                                         {% if discharge.etat == "a" %}*/
/*                                             {{ 'magazine.etatOption.accept'|trans }}*/
/*                                         {% elseif discharge.etat == "r" %}*/
/*                                             {{ 'magazine.etatOption.refuse'|trans }}                   */
/*                                         {% elseif discharge.etat == "w" %}*/
/*                                             {{ 'magazine.etatOption.wait'|trans }}*/
/*                                         {% else %}*/
/*                                             {{ 'magazine.etat'|trans }}*/
/*                                         {% endif %} */
/*                                     </td>*/
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
/*                                         {% if discharge.user.firstName == null%}*/
/*                                             <div class="text text-capitalize text-danger"> {{  'user.noInfo'|trans }} </div>*/
/*                                         {% else %}*/
/*                                             {{ discharge.user.firstName }}*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.lastName'|trans }}</th>*/
/*                                     <td>*/
/*                                         {% if discharge.user.lastName == null%}*/
/*                                             <div class="text text-capitalize text-danger"> {{  'user.noInfo'|trans }} </div>*/
/*                                         {% else %}*/
/*                                             {{ discharge.user.lastName }}*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}</th>*/
/*                                     <td>{{ discharge.user.username }}</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}</th>*/
/*                                     <td>{{ discharge.user.email }}</td>*/
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
/*                             */
/*                             {% for detail in discharge.detail %}*/
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
