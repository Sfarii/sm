<?php

/* ISETSOMagazineBundle:returnarticle_SubStore:show.html.twig */
class __TwigTemplate_47359bb1f18f0b1500ca86addf2b8759d5ddf87beca5081ce22812a485c0498e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:returnarticle_SubStore:show.html.twig", 1);
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
        $__internal_0179408446552b09ab1a526e7811ae8ddda0a20b598a0fbc75d3befd1fda54a1 = $this->env->getExtension("native_profiler");
        $__internal_0179408446552b09ab1a526e7811ae8ddda0a20b598a0fbc75d3befd1fda54a1->enter($__internal_0179408446552b09ab1a526e7811ae8ddda0a20b598a0fbc75d3befd1fda54a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:returnarticle_SubStore:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0179408446552b09ab1a526e7811ae8ddda0a20b598a0fbc75d3befd1fda54a1->leave($__internal_0179408446552b09ab1a526e7811ae8ddda0a20b598a0fbc75d3befd1fda54a1_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f42ace3f8e821c2ab3ed1670ce30787f8ae906be021b25d7833ab181b9a422c1 = $this->env->getExtension("native_profiler");
        $__internal_f42ace3f8e821c2ab3ed1670ce30787f8ae906be021b25d7833ab181b9a422c1->enter($__internal_f42ace3f8e821c2ab3ed1670ce30787f8ae906be021b25d7833ab181b9a422c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f42ace3f8e821c2ab3ed1670ce30787f8ae906be021b25d7833ab181b9a422c1->leave($__internal_f42ace3f8e821c2ab3ed1670ce30787f8ae906be021b25d7833ab181b9a422c1_prof);

    }

    // line 12
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_46ce206766b1a26486cd238b2a7bdf56fb5ab1ed0525e34c9f4bb7386d86bb2b = $this->env->getExtension("native_profiler");
        $__internal_46ce206766b1a26486cd238b2a7bdf56fb5ab1ed0525e34c9f4bb7386d86bb2b->enter($__internal_46ce206766b1a26486cd238b2a7bdf56fb5ab1ed0525e34c9f4bb7386d86bb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 13
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("returnarticle_subStore_index", array("id" => $this->getAttribute($this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "toSubStore", array()), "id", array()))), "html", null, true);
        echo "\">
       ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_46ce206766b1a26486cd238b2a7bdf56fb5ab1ed0525e34c9f4bb7386d86bb2b->leave($__internal_46ce206766b1a26486cd238b2a7bdf56fb5ab1ed0525e34c9f4bb7386d86bb2b_prof);

    }

    // line 17
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_f4a3fa48221982df56ece4ef5068df24b4f93638505c9f34aa4e4b95c65f9050 = $this->env->getExtension("native_profiler");
        $__internal_f4a3fa48221982df56ece4ef5068df24b4f93638505c9f34aa4e4b95c65f9050->enter($__internal_f4a3fa48221982df56ece4ef5068df24b4f93638505c9f34aa4e4b95c65f9050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.new.name"), "html", null, true);
        
        $__internal_f4a3fa48221982df56ece4ef5068df24b4f93638505c9f34aa4e4b95c65f9050->leave($__internal_f4a3fa48221982df56ece4ef5068df24b4f93638505c9f34aa4e4b95c65f9050_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_64b140bd79b3c506324f448a8551374ccf21f7cd54cc78fe8589be43f3a7cd87 = $this->env->getExtension("native_profiler");
        $__internal_64b140bd79b3c506324f448a8551374ccf21f7cd54cc78fe8589be43f3a7cd87->enter($__internal_64b140bd79b3c506324f448a8551374ccf21f7cd54cc78fe8589be43f3a7cd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "<div class=\"col-sm-12\">
    <div class=\"btn-group\">
        <a name=\"print\" href=\"?print=true\" onclick=\"window.open(this.href); return false;\" class=\"btn btn-info-alt\">
        <i class=\"ti ti-printer\"></i>
        </a>
    
        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("returnarticle_subStore_edit", array("id" => $this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "id", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.show.name"), "html", null, true);
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
        if ($this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "date", array())) {
            // line 45
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "
                                        ";
        }
        // line 47
        echo "                                    </td>
                                  </tr>
                                  
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.type"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "observation", array()), "html", null, true);
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
        // line 68
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
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                                <td>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "user", array()), "username", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                                <td>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "user", array()), "email", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.role"), "html", null, true);
        echo "</th>
                                <td>";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "user", array()), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h2><i class=\"ti ti-pencil-alt\"></i> ";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.list.name"), "html", null, true);
        echo "</h2>
                    <div class=\"panel-ctrls search\" data-actions-container=\"\" ></div>
                </div>
                <div class=\"panel-editbox\" data-widget-controls=\"\"></div>
                <div class=\"panel-body  no-padding\">
                <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th class=\"text text-primary\">";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.inventoryNumber"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.designation"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.unit"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.family"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.subFamily"), "html", null, true);
        echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "detail", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 119
            echo "                            <tr>
                                <td>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "inventoryNumber", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "designation", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "quantity", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "unit", array()), "designation", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "subFamily", array()), "designation", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "subFamily", array()), "family", array()), "designation", array()), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"panel-footer footer-dataTable\"></div>
        </div>
    </div>
</div>

";
        
        $__internal_64b140bd79b3c506324f448a8551374ccf21f7cd54cc78fe8589be43f3a7cd87->leave($__internal_64b140bd79b3c506324f448a8551374ccf21f7cd54cc78fe8589be43f3a7cd87_prof);

    }

    // line 137
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_399db8d1ba98e726323d74897eb2735b7d9ac276ecbf070633a6e5276acd53ec = $this->env->getExtension("native_profiler");
        $__internal_399db8d1ba98e726323d74897eb2735b7d9ac276ecbf070633a6e5276acd53ec->enter($__internal_399db8d1ba98e726323d74897eb2735b7d9ac276ecbf070633a6e5276acd53ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 138
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 139
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b81ca42_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b81ca42_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b81ca42_jquery.dataTables_1.js");
            // line 144
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
        
        $__internal_399db8d1ba98e726323d74897eb2735b7d9ac276ecbf070633a6e5276acd53ec->leave($__internal_399db8d1ba98e726323d74897eb2735b7d9ac276ecbf070633a6e5276acd53ec_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:returnarticle_SubStore:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 144,  354 => 139,  349 => 138,  343 => 137,  328 => 128,  319 => 125,  315 => 124,  311 => 123,  307 => 122,  303 => 121,  299 => 120,  296 => 119,  292 => 118,  284 => 113,  280 => 112,  276 => 111,  272 => 110,  268 => 109,  264 => 108,  253 => 100,  228 => 85,  224 => 84,  218 => 81,  214 => 80,  208 => 77,  204 => 76,  193 => 68,  174 => 52,  170 => 51,  164 => 47,  158 => 45,  156 => 44,  151 => 42,  140 => 34,  128 => 25,  120 => 19,  114 => 18,  102 => 17,  92 => 14,  87 => 13,  81 => 12,  73 => 10,  53 => 8,  49 => 4,  44 => 3,  38 => 2,  11 => 1,);
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
/*     <a href="{{ path('returnarticle_subStore_index', { 'id' : returnArticle.toSubStore.id}) }}">*/
/*        {{ 'returnarticle.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/*      {% block breadcrumbActive %}{{ 'returnarticle.new.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/* <div class="col-sm-12">*/
/*     <div class="btn-group">*/
/*         <a name="print" href="?print=true" onclick="window.open(this.href); return false;" class="btn btn-info-alt">*/
/*         <i class="ti ti-printer"></i>*/
/*         </a>*/
/*     */
/*         <a href="{{ path('returnarticle_subStore_edit', { 'id': returnArticle.id }) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
/*     </div>*/
/*     <hr>    */
/* </div>*/
/* <div class="col-sm-6">*/
/*     <div class="tab-content">*/
/*         <div class="tab-pane active" id="tab-about">*/
/*             <div class="panel panel-default" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*                 <div class="panel-heading">*/
/*                     <h2>{{ 'returnarticle.show.name'|trans }}</h2>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div class="about-area">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table">*/
/*                                 <tbody>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.date'|trans }}</th>*/
/*                                     <td>*/
/*                                         {% if returnArticle.date %}*/
/*                                             {{ returnArticle.date|date('Y-m-d H:i:s') }}*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                   </tr>*/
/*                                   */
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.type'|trans }}</th>*/
/*                                     <td>{{ returnArticle.observation }}</td>*/
/*                                   </tr>*/
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
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}</th>*/
/*                                 <td>{{ returnArticle.user.username }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}</th>*/
/*                                 <td>{{ returnArticle.user.email }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.role'|trans }}</th>*/
/*                                 <td>{% for val in returnArticle.user.roles %}{{ val }}{% endfor %}</td>*/
/*                               </tr>*/
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
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h2><i class="ti ti-pencil-alt"></i> {{ 'detail.list.name'|trans }}</h2>*/
/*                     <div class="panel-ctrls search" data-actions-container="" ></div>*/
/*                 </div>*/
/*                 <div class="panel-editbox" data-widget-controls=""></div>*/
/*                 <div class="panel-body  no-padding">*/
/*                 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th class="text text-primary">{{ 'magazine.field.inventoryNumber'|trans }}</th>*/
/*                             <th class="text text-primary">{{ 'magazine.field.designation'|trans }}</th>*/
/*                             <th class="text text-primary">{{ 'magazine.field.quantity'|trans }}</th>*/
/*                             <th class="text text-primary">{{ 'magazine.field.unit'|trans }}</th>*/
/*                             <th class="text text-primary">{{ 'magazine.field.family'|trans }}</th>*/
/*                             <th class="text text-primary">{{ 'magazine.field.subFamily'|trans }}</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         */
/*                         {% for detail in returnArticle.detail %}*/
/*                             <tr>*/
/*                                 <td>{{ detail.supportingDocument.inventoryNumber }}</td>*/
/*                                 <td>{{ detail.supportingDocument.article.designation }}</td>*/
/*                                 <td>{{ detail.quantity }}</td>*/
/*                                 <td>{{ detail.supportingDocument.article.unit.designation }}</td>*/
/*                                 <td>{{ detail.supportingDocument.article.subFamily.designation }}</td>*/
/*                                 <td>{{ detail.supportingDocument.article.subFamily.family.designation }}</td>*/
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
