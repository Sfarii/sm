<?php

/* ISETSOMagazineBundle:returnarticle_centralStore:show.html.twig */
class __TwigTemplate_3ebb091516741af2befb618826187cdc473efd8e116e269eaf8cc8bdc93f8afe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:returnarticle_centralStore:show.html.twig", 1);
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
        $__internal_47d518d1e4d2f51a57b2be48085d570ffe77e51628161b867d0ebcb7b0a10d50 = $this->env->getExtension("native_profiler");
        $__internal_47d518d1e4d2f51a57b2be48085d570ffe77e51628161b867d0ebcb7b0a10d50->enter($__internal_47d518d1e4d2f51a57b2be48085d570ffe77e51628161b867d0ebcb7b0a10d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:returnarticle_centralStore:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47d518d1e4d2f51a57b2be48085d570ffe77e51628161b867d0ebcb7b0a10d50->leave($__internal_47d518d1e4d2f51a57b2be48085d570ffe77e51628161b867d0ebcb7b0a10d50_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8d6a15ac011886a9bbe1ae281450e74c3e82263e9a2b24e7738d22bd1ee70993 = $this->env->getExtension("native_profiler");
        $__internal_8d6a15ac011886a9bbe1ae281450e74c3e82263e9a2b24e7738d22bd1ee70993->enter($__internal_8d6a15ac011886a9bbe1ae281450e74c3e82263e9a2b24e7738d22bd1ee70993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_8d6a15ac011886a9bbe1ae281450e74c3e82263e9a2b24e7738d22bd1ee70993->leave($__internal_8d6a15ac011886a9bbe1ae281450e74c3e82263e9a2b24e7738d22bd1ee70993_prof);

    }

    // line 12
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_155c0c3029ab60c659977156dc633fed1c8d0fafa757dea553179c65190b0447 = $this->env->getExtension("native_profiler");
        $__internal_155c0c3029ab60c659977156dc633fed1c8d0fafa757dea553179c65190b0447->enter($__internal_155c0c3029ab60c659977156dc633fed1c8d0fafa757dea553179c65190b0447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 13
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("returnArticle_centralStore_index");
        echo "\">
       ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_155c0c3029ab60c659977156dc633fed1c8d0fafa757dea553179c65190b0447->leave($__internal_155c0c3029ab60c659977156dc633fed1c8d0fafa757dea553179c65190b0447_prof);

    }

    // line 17
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_86c88091f66049f955b304094842ae2d1e4754faafb3a82a0f271e63bd9b66ee = $this->env->getExtension("native_profiler");
        $__internal_86c88091f66049f955b304094842ae2d1e4754faafb3a82a0f271e63bd9b66ee->enter($__internal_86c88091f66049f955b304094842ae2d1e4754faafb3a82a0f271e63bd9b66ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.new.name"), "html", null, true);
        
        $__internal_86c88091f66049f955b304094842ae2d1e4754faafb3a82a0f271e63bd9b66ee->leave($__internal_86c88091f66049f955b304094842ae2d1e4754faafb3a82a0f271e63bd9b66ee_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_953a0a595da0f93d426d7f098160264b7359593e006754676d78b81d8eed0a33 = $this->env->getExtension("native_profiler");
        $__internal_953a0a595da0f93d426d7f098160264b7359593e006754676d78b81d8eed0a33->enter($__internal_953a0a595da0f93d426d7f098160264b7359593e006754676d78b81d8eed0a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "<div class=\"col-sm-12\">
    <div class=\"btn-group\">
        <a name=\"print\" href=\"?print=true\" onclick=\"window.open(this.href); return false;\" class=\"btn btn-info-alt\">
        <i class=\"ti ti-printer\"></i>
        </a>
    
        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("returnArticle_centralStore_edit", array("id" => $this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "id", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.firstName"), "html", null, true);
        echo "</th>
                                <td>
                                    ";
        // line 78
        if (($this->getAttribute($this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "user", array()), "firstName", array()) == null)) {
            // line 79
            echo "                                        <div class=\"text text-capitalize text-danger\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.noInfo"), "html", null, true);
            echo " </div>
                                    ";
        } else {
            // line 81
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "user", array()), "firstName", array()), "html", null, true);
            echo "
                                    ";
        }
        // line 83
        echo "                                </td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.lastName"), "html", null, true);
        echo "</th>
                                <td>
                                    ";
        // line 88
        if (($this->getAttribute($this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "user", array()), "lastName", array()) == null)) {
            // line 89
            echo "                                        <div class=\"text text-capitalize text-danger\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.noInfo"), "html", null, true);
            echo " </div>
                                    ";
        } else {
            // line 91
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "user", array()), "lastName", array()), "html", null, true);
            echo "
                                    ";
        }
        // line 93
        echo "                                </td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                                <td>";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "user", array()), "username", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                                <td>";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "user", array()), "email", array()), "html", null, true);
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
        // line 117
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
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.inventoryNumber"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.designation"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.unit"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.family"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.subFamily"), "html", null, true);
        echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "detail", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 136
            echo "                            <tr>
                                <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "inventoryNumber", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "designation", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "quantity", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "unit", array()), "designation", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "subFamily", array()), "designation", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "subFamily", array()), "family", array()), "designation", array()), "html", null, true);
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
        
        $__internal_953a0a595da0f93d426d7f098160264b7359593e006754676d78b81d8eed0a33->leave($__internal_953a0a595da0f93d426d7f098160264b7359593e006754676d78b81d8eed0a33_prof);

    }

    // line 154
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3e3b571f1e0762d36e5334d62ef80b2704b8e2ad231d88809bcadb4530793465 = $this->env->getExtension("native_profiler");
        $__internal_3e3b571f1e0762d36e5334d62ef80b2704b8e2ad231d88809bcadb4530793465->enter($__internal_3e3b571f1e0762d36e5334d62ef80b2704b8e2ad231d88809bcadb4530793465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3e3b571f1e0762d36e5334d62ef80b2704b8e2ad231d88809bcadb4530793465->leave($__internal_3e3b571f1e0762d36e5334d62ef80b2704b8e2ad231d88809bcadb4530793465_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:returnarticle_centralStore:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 161,  386 => 156,  381 => 155,  375 => 154,  360 => 145,  351 => 142,  347 => 141,  343 => 140,  339 => 139,  335 => 138,  331 => 137,  328 => 136,  324 => 135,  316 => 130,  312 => 129,  308 => 128,  304 => 127,  300 => 126,  296 => 125,  285 => 117,  266 => 101,  262 => 100,  256 => 97,  252 => 96,  247 => 93,  241 => 91,  235 => 89,  233 => 88,  228 => 86,  223 => 83,  217 => 81,  211 => 79,  209 => 78,  204 => 76,  193 => 68,  174 => 52,  170 => 51,  164 => 47,  158 => 45,  156 => 44,  151 => 42,  140 => 34,  128 => 25,  120 => 19,  114 => 18,  102 => 17,  92 => 14,  87 => 13,  81 => 12,  73 => 10,  53 => 8,  49 => 4,  44 => 3,  38 => 2,  11 => 1,);
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
/*     <a href="{{ path('returnArticle_centralStore_index') }}">*/
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
/*         <a href="{{ path('returnArticle_centralStore_edit', { 'id': returnArticle.id }) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
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
/*                                 <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.firstName'|trans }}</th>*/
/*                                 <td>*/
/*                                     {% if returnArticle.user.firstName == null%}*/
/*                                         <div class="text text-capitalize text-danger"> {{  'user.noInfo'|trans }} </div>*/
/*                                     {% else %}*/
/*                                         {{ returnArticle.user.firstName }}*/
/*                                     {% endif %}*/
/*                                 </td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.lastName'|trans }}</th>*/
/*                                 <td>*/
/*                                     {% if returnArticle.user.lastName == null%}*/
/*                                         <div class="text text-capitalize text-danger"> {{  'user.noInfo'|trans }} </div>*/
/*                                     {% else %}*/
/*                                         {{ returnArticle.user.lastName }}*/
/*                                     {% endif %}*/
/*                                 </td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}</th>*/
/*                                 <td>{{ returnArticle.user.username }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}</th>*/
/*                                 <td>{{ returnArticle.user.email }}</td>*/
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
