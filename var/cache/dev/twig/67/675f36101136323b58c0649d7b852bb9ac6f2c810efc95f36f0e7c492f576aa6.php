<?php

/* ISETSOMagazineBundle:orderarticle:show.html.twig */
class __TwigTemplate_0eafc4cf4b57aca383c90dfdd2e4e840b18ddb83b11f20bcfd9a1c77577a090c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:orderarticle:show.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'breadcrumbActive' => array($this, 'block_breadcrumbActive'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_428201434c344530340653ec0d293f80e8fd3bf0bcf751b3b9563ee8f45fdcb5 = $this->env->getExtension("native_profiler");
        $__internal_428201434c344530340653ec0d293f80e8fd3bf0bcf751b3b9563ee8f45fdcb5->enter($__internal_428201434c344530340653ec0d293f80e8fd3bf0bcf751b3b9563ee8f45fdcb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:orderarticle:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_428201434c344530340653ec0d293f80e8fd3bf0bcf751b3b9563ee8f45fdcb5->leave($__internal_428201434c344530340653ec0d293f80e8fd3bf0bcf751b3b9563ee8f45fdcb5_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9783d6c8e734c632286258e3123bce6158d315f74f781b861a520ff2476e2a17 = $this->env->getExtension("native_profiler");
        $__internal_9783d6c8e734c632286258e3123bce6158d315f74f781b861a520ff2476e2a17->enter($__internal_9783d6c8e734c632286258e3123bce6158d315f74f781b861a520ff2476e2a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7cfe8d1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7cfe8d1_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/7cfe8d1_dataTables.bootstrap_1.css");
            // line 8
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "7cfe8d1_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7cfe8d1_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/7cfe8d1_dataTables.themify_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "7cfe8d1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7cfe8d1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/7cfe8d1.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "    
";
        
        $__internal_9783d6c8e734c632286258e3123bce6158d315f74f781b861a520ff2476e2a17->leave($__internal_9783d6c8e734c632286258e3123bce6158d315f74f781b861a520ff2476e2a17_prof);

    }

    // line 12
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_da2285123eb49e327dd12c06cc9f6f7afb8f9cdde5c5427de3be621f519f9d72 = $this->env->getExtension("native_profiler");
        $__internal_da2285123eb49e327dd12c06cc9f6f7afb8f9cdde5c5427de3be621f519f9d72->enter($__internal_da2285123eb49e327dd12c06cc9f6f7afb8f9cdde5c5427de3be621f519f9d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 13
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("orderarticle_index");
        echo "\">
       ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("orderarticle.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_da2285123eb49e327dd12c06cc9f6f7afb8f9cdde5c5427de3be621f519f9d72->leave($__internal_da2285123eb49e327dd12c06cc9f6f7afb8f9cdde5c5427de3be621f519f9d72_prof);

    }

    // line 17
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_3e6f9ec1ce5c7fdc9e94d7d31398b9130dc9d89adae1b18fd18a2d5b4686eb2f = $this->env->getExtension("native_profiler");
        $__internal_3e6f9ec1ce5c7fdc9e94d7d31398b9130dc9d89adae1b18fd18a2d5b4686eb2f->enter($__internal_3e6f9ec1ce5c7fdc9e94d7d31398b9130dc9d89adae1b18fd18a2d5b4686eb2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("orderarticle.show.name"), "html", null, true);
        
        $__internal_3e6f9ec1ce5c7fdc9e94d7d31398b9130dc9d89adae1b18fd18a2d5b4686eb2f->leave($__internal_3e6f9ec1ce5c7fdc9e94d7d31398b9130dc9d89adae1b18fd18a2d5b4686eb2f_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e5b5389ab3413c2933257a6efe3159000012b50bdba07fe89c0701cd2937da2 = $this->env->getExtension("native_profiler");
        $__internal_4e5b5389ab3413c2933257a6efe3159000012b50bdba07fe89c0701cd2937da2->enter($__internal_4e5b5389ab3413c2933257a6efe3159000012b50bdba07fe89c0701cd2937da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "<div class=\"col-sm-12\">
    <div class=\"btn-group\">
        <a name=\"print\" href=\"?print=true\" onclick=\"window.open(this.href); return false;\" class=\"btn btn-warning-alt\">
        <i class=\"ti ti-printer\"></i>
        </a>
    
        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("orderarticle_edit", array("id" => $this->getAttribute((isset($context["orderArticle"]) ? $context["orderArticle"] : $this->getContext($context, "orderArticle")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info-alt\"><i class=\"ti ti-pencil-alt\"></i></a>
    </div>
    <hr>    
</div>
<div class=\"col-sm-6\">
    <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tab-about\">
            <div class=\"panel panel-default\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
                <div class=\"panel-heading\">
                    <h2>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("orderarticle.show.name"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"panel-body\">
                    <div class=\"about-area\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <tbody>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.date"), "html", null, true);
        echo "</th>
                                    <td>
                                        ";
        // line 44
        if ($this->getAttribute((isset($context["orderArticle"]) ? $context["orderArticle"] : $this->getContext($context, "orderArticle")), "date", array())) {
            // line 45
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["orderArticle"]) ? $context["orderArticle"] : $this->getContext($context, "orderArticle")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "
                                        ";
        }
        // line 47
        echo "                                    </td>
                                  </tr>
                                  
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.observation"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orderArticle"]) ? $context["orderArticle"] : $this->getContext($context, "orderArticle")), "observation", array()), "html", null, true);
        echo "</td>
                                  </tr>
                                  
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"col-sm-6\">
    <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tab-about\">
            <div class=\"panel panel-default\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
                <div class=\"panel-heading\">
                    <h2>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.userName"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"panel-body\">
                    <div class=\"about-area\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                            <tbody>
                                <tr>
                                <th class=\"text text-primary\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.firstName"), "html", null, true);
        echo "</th>
                                <td>
                                    ";
        // line 80
        if (($this->getAttribute($this->getAttribute((isset($context["orderArticle"]) ? $context["orderArticle"] : $this->getContext($context, "orderArticle")), "user", array()), "firstName", array()) == null)) {
            // line 81
            echo "                                        <div class=\"text text-capitalize text-danger\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.noInfo"), "html", null, true);
            echo " </div>
                                    ";
        } else {
            // line 83
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["orderArticle"]) ? $context["orderArticle"] : $this->getContext($context, "orderArticle")), "user", array()), "firstName", array()), "html", null, true);
            echo "
                                    ";
        }
        // line 85
        echo "                                </td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.lastName"), "html", null, true);
        echo "</th>
                                <td>
                                    ";
        // line 90
        if (($this->getAttribute($this->getAttribute((isset($context["orderArticle"]) ? $context["orderArticle"] : $this->getContext($context, "orderArticle")), "user", array()), "lastName", array()) == null)) {
            // line 91
            echo "                                        <div class=\"text text-capitalize text-danger\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.noInfo"), "html", null, true);
            echo " </div>
                                    ";
        } else {
            // line 93
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["orderArticle"]) ? $context["orderArticle"] : $this->getContext($context, "orderArticle")), "user", array()), "lastName", array()), "html", null, true);
            echo "
                                    ";
        }
        // line 95
        echo "                                </td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                                <td>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["orderArticle"]) ? $context["orderArticle"] : $this->getContext($context, "orderArticle")), "user", array()), "username", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                                <td>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["orderArticle"]) ? $context["orderArticle"] : $this->getContext($context, "orderArticle")), "user", array()), "email", array()), "html", null, true);
        echo "</td>
                              </tr>
                              
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"col-sm-12\">
    <div data-widget-group=\"group1\">
            <div class=\"panel panel-default\" >
                <div class=\"panel-heading\">
                    <h2><i class=\"ti ti-pencil-alt\"></i> ";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.list.name"), "html", null, true);
        echo "</h2>
                    <div class=\"panel-ctrls search\"></div>
                </div>
                <div class=\"panel-editbox\" data-widget-controls=\"\"></div>
                <div class=\"panel-body no-padding\">
                <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th class=\"text text-primary\">";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.designation"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.unit"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.family"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.subFamily"), "html", null, true);
        echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["orderArticle"]) ? $context["orderArticle"] : $this->getContext($context, "orderArticle")), "detail", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 137
            echo "                            <tr>
                                <td>";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "article", array()), "designation", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "quantity", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "article", array()), "unit", array()), "designation", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "article", array()), "subFamily", array()), "designation", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "article", array()), "subFamily", array()), "family", array()), "designation", array()), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"panel-footer footer-dataTable\"></div>
        </div>
    </div>
</div>

";
        
        $__internal_4e5b5389ab3413c2933257a6efe3159000012b50bdba07fe89c0701cd2937da2->leave($__internal_4e5b5389ab3413c2933257a6efe3159000012b50bdba07fe89c0701cd2937da2_prof);

    }

    // line 154
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e866f5861c107f8694d8ad62056fa0b217875f5e91cd3b55789f708e2d176446 = $this->env->getExtension("native_profiler");
        $__internal_e866f5861c107f8694d8ad62056fa0b217875f5e91cd3b55789f708e2d176446->enter($__internal_e866f5861c107f8694d8ad62056fa0b217875f5e91cd3b55789f708e2d176446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 155
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 156
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b81ca42_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b81ca42_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b81ca42_jquery.dataTables_1.js");
            // line 161
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b81ca42_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b81ca42_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b81ca42_dataTables.bootstrap_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b81ca42_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b81ca42_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b81ca42_datatables_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "b81ca42"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b81ca42") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b81ca42.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_e866f5861c107f8694d8ad62056fa0b217875f5e91cd3b55789f708e2d176446->leave($__internal_e866f5861c107f8694d8ad62056fa0b217875f5e91cd3b55789f708e2d176446_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:orderarticle:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 161,  380 => 156,  375 => 155,  369 => 154,  354 => 145,  345 => 142,  341 => 141,  337 => 140,  333 => 139,  329 => 138,  326 => 137,  322 => 136,  314 => 131,  310 => 130,  306 => 129,  302 => 128,  298 => 127,  287 => 119,  268 => 103,  264 => 102,  258 => 99,  254 => 98,  249 => 95,  243 => 93,  237 => 91,  235 => 90,  230 => 88,  225 => 85,  219 => 83,  213 => 81,  211 => 80,  206 => 78,  195 => 70,  174 => 52,  170 => 51,  164 => 47,  158 => 45,  156 => 44,  151 => 42,  140 => 34,  128 => 25,  120 => 19,  114 => 18,  102 => 17,  92 => 14,  87 => 13,  81 => 12,  73 => 10,  53 => 8,  49 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     {% stylesheets */
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.bootstrap.css'*/
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.themify.css'*/
/*         filter='cssrewrite' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/*     */
/* {% endblock %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('orderarticle_index') }}">*/
/*        {{ 'orderarticle.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/*      {% block breadcrumbActive %}{{ 'orderarticle.show.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/* <div class="col-sm-12">*/
/*     <div class="btn-group">*/
/*         <a name="print" href="?print=true" onclick="window.open(this.href); return false;" class="btn btn-warning-alt">*/
/*         <i class="ti ti-printer"></i>*/
/*         </a>*/
/*     */
/*         <a href="{{ path('orderarticle_edit', { 'id': orderArticle.id }) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
/*     </div>*/
/*     <hr>    */
/* </div>*/
/* <div class="col-sm-6">*/
/*     <div class="tab-content">*/
/*         <div class="tab-pane active" id="tab-about">*/
/*             <div class="panel panel-default" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*                 <div class="panel-heading">*/
/*                     <h2>{{ 'orderarticle.show.name'|trans }}</h2>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div class="about-area">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table">*/
/*                                 <tbody>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.date'|trans }}</th>*/
/*                                     <td>*/
/*                                         {% if orderArticle.date %}*/
/*                                             {{ orderArticle.date|date('Y-m-d H:i:s') }}*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                   </tr>*/
/*                                   */
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.observation'|trans }}</th>*/
/*                                     <td>{{ orderArticle.observation }}</td>*/
/*                                   </tr>*/
/*                                   */
/*                                   */
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="col-sm-6">*/
/*     <div class="tab-content">*/
/*         <div class="tab-pane active" id="tab-about">*/
/*             <div class="panel panel-default" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*                 <div class="panel-heading">*/
/*                     <h2>{{ 'magazine.field.userName'|trans }}</h2>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div class="about-area">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table">*/
/*                             <tbody>*/
/*                                 <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.firstName'|trans }}</th>*/
/*                                 <td>*/
/*                                     {% if orderArticle.user.firstName == null%}*/
/*                                         <div class="text text-capitalize text-danger"> {{  'user.noInfo'|trans }} </div>*/
/*                                     {% else %}*/
/*                                         {{ orderArticle.user.firstName }}*/
/*                                     {% endif %}*/
/*                                 </td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.lastName'|trans }}</th>*/
/*                                 <td>*/
/*                                     {% if orderArticle.user.lastName == null%}*/
/*                                         <div class="text text-capitalize text-danger"> {{  'user.noInfo'|trans }} </div>*/
/*                                     {% else %}*/
/*                                         {{ orderArticle.user.lastName }}*/
/*                                     {% endif %}*/
/*                                 </td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}</th>*/
/*                                 <td>{{ orderArticle.user.username }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}</th>*/
/*                                 <td>{{ orderArticle.user.email }}</td>*/
/*                               </tr>*/
/*                               */
/*                             </tbody>*/
/*                         </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="col-sm-12">*/
/*     <div data-widget-group="group1">*/
/*             <div class="panel panel-default" >*/
/*                 <div class="panel-heading">*/
/*                     <h2><i class="ti ti-pencil-alt"></i> {{ 'detail.list.name'|trans }}</h2>*/
/*                     <div class="panel-ctrls search"></div>*/
/*                 </div>*/
/*                 <div class="panel-editbox" data-widget-controls=""></div>*/
/*                 <div class="panel-body no-padding">*/
/*                 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th class="text text-primary">{{ 'magazine.field.designation'|trans }}</th>*/
/*                             <th class="text text-primary">{{ 'magazine.field.quantity'|trans }}</th>*/
/*                             <th class="text text-primary">{{ 'magazine.field.unit'|trans }}</th>*/
/*                             <th class="text text-primary">{{ 'magazine.field.family'|trans }}</th>*/
/*                             <th class="text text-primary">{{ 'magazine.field.subFamily'|trans }}</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         */
/*                         {% for detail in orderArticle.detail %}*/
/*                             <tr>*/
/*                                 <td>{{ detail.article.designation }}</td>*/
/*                                 <td>{{ detail.quantity }}</td>*/
/*                                 <td>{{ detail.article.unit.designation }}</td>*/
/*                                 <td>{{ detail.article.subFamily.designation }}</td>*/
/*                                 <td>{{ detail.article.subFamily.family.designation }}</td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*             <div class="panel-footer footer-dataTable"></div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/plugins/datatables/jquery.dataTables.js'*/
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.bootstrap.js'*/
/*         'bundles/isetsomagazine/myjs/datatables.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock %}*/
