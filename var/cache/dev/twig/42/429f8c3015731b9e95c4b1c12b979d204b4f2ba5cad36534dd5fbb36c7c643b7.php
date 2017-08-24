<?php

/* ISETSOMagazineBundle:discharge_article_local:new.html.twig */
class __TwigTemplate_1683cb4bb573e281b37e6dc98c81b2caec41ec0d78916a554f5dcebe98468c21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:discharge_article_local:new.html.twig", 1);
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
        $__internal_79e7e6086c010b8a83d764d1b015be09e45236a241d02d739cda93fdfb794ba3 = $this->env->getExtension("native_profiler");
        $__internal_79e7e6086c010b8a83d764d1b015be09e45236a241d02d739cda93fdfb794ba3->enter($__internal_79e7e6086c010b8a83d764d1b015be09e45236a241d02d739cda93fdfb794ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:discharge_article_local:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79e7e6086c010b8a83d764d1b015be09e45236a241d02d739cda93fdfb794ba3->leave($__internal_79e7e6086c010b8a83d764d1b015be09e45236a241d02d739cda93fdfb794ba3_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5def57e274c06f39e7f8e359097048cdab44020f39a873b687a17b7577a45f9c = $this->env->getExtension("native_profiler");
        $__internal_5def57e274c06f39e7f8e359097048cdab44020f39a873b687a17b7577a45f9c->enter($__internal_5def57e274c06f39e7f8e359097048cdab44020f39a873b687a17b7577a45f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e3849eb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3849eb_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e3849eb_dataTables.bootstrap_1.css");
            // line 10
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "e3849eb_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3849eb_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e3849eb_dataTables.themify_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "e3849eb_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3849eb_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e3849eb_select2_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "e3849eb_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3849eb_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e3849eb_cssload-finger_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "e3849eb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3849eb") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e3849eb.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "    
";
        
        $__internal_5def57e274c06f39e7f8e359097048cdab44020f39a873b687a17b7577a45f9c->leave($__internal_5def57e274c06f39e7f8e359097048cdab44020f39a873b687a17b7577a45f9c_prof);

    }

    // line 14
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_cce86088d089b522c3847a5d6c48021763560759db2703c66629d40d3f4df920 = $this->env->getExtension("native_profiler");
        $__internal_cce86088d089b522c3847a5d6c48021763560759db2703c66629d40d3f4df920->enter($__internal_cce86088d089b522c3847a5d6c48021763560759db2703c66629d40d3f4df920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 15
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("discharge_article_to_magazine_index");
        echo "\">
       ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_cce86088d089b522c3847a5d6c48021763560759db2703c66629d40d3f4df920->leave($__internal_cce86088d089b522c3847a5d6c48021763560759db2703c66629d40d3f4df920_prof);

    }

    // line 19
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_7a54ce2bfe4a90b0836c7925cd352fd5fe42e9aba007f1e4d81ae89772d34ec8 = $this->env->getExtension("native_profiler");
        $__internal_7a54ce2bfe4a90b0836c7925cd352fd5fe42e9aba007f1e4d81ae89772d34ec8->enter($__internal_7a54ce2bfe4a90b0836c7925cd352fd5fe42e9aba007f1e4d81ae89772d34ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.new.name"), "html", null, true);
        
        $__internal_7a54ce2bfe4a90b0836c7925cd352fd5fe42e9aba007f1e4d81ae89772d34ec8->leave($__internal_7a54ce2bfe4a90b0836c7925cd352fd5fe42e9aba007f1e4d81ae89772d34ec8_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6b920bab6c6296d7177bfd7cd5e1c4446f83f718dde71da7679d65c47a271e1 = $this->env->getExtension("native_profiler");
        $__internal_e6b920bab6c6296d7177bfd7cd5e1c4446f83f718dde71da7679d65c47a271e1->enter($__internal_e6b920bab6c6296d7177bfd7cd5e1c4446f83f718dde71da7679d65c47a271e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    
    ";
        // line 22
        $this->loadTemplate("Template/ArticleManagementAddFormTemplate.html.twig", "ISETSOMagazineBundle:discharge_article_local:new.html.twig", 22)->display(array_merge($context, array("form_name" => $this->env->getExtension('translator')->trans("dischargearticle.new.name"))));
        // line 23
        echo "
";
        
        $__internal_e6b920bab6c6296d7177bfd7cd5e1c4446f83f718dde71da7679d65c47a271e1->leave($__internal_e6b920bab6c6296d7177bfd7cd5e1c4446f83f718dde71da7679d65c47a271e1_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_42d09c16ceef51c253acd74342f78f1786aa36b3ff2a75b12cfe8b04121f279c = $this->env->getExtension("native_profiler");
        $__internal_42d09c16ceef51c253acd74342f78f1786aa36b3ff2a75b12cfe8b04121f279c->enter($__internal_42d09c16ceef51c253acd74342f78f1786aa36b3ff2a75b12cfe8b04121f279c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 27
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "19f63d5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_19f63d5_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/19f63d5_jquery.dataTables_1.js");
            // line 38
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "19f63d5_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_19f63d5_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/19f63d5_dataTables.bootstrap_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "19f63d5_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_19f63d5_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/19f63d5_datatables_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "19f63d5_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_19f63d5_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/19f63d5_select2.min_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "19f63d5_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_19f63d5_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/19f63d5_discharge_article_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "19f63d5_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_19f63d5_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/19f63d5_add_discharge_local_article_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "19f63d5_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_19f63d5_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/19f63d5_moment.min_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "19f63d5_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_19f63d5_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/19f63d5_bootstrap-datepicker_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "19f63d5_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_19f63d5_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/19f63d5_date_9.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "19f63d5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_19f63d5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/19f63d5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 40
        echo " ";
        
        $__internal_42d09c16ceef51c253acd74342f78f1786aa36b3ff2a75b12cfe8b04121f279c->leave($__internal_42d09c16ceef51c253acd74342f78f1786aa36b3ff2a75b12cfe8b04121f279c_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:discharge_article_local:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 40,  160 => 38,  156 => 27,  151 => 26,  145 => 25,  137 => 23,  135 => 22,  132 => 21,  126 => 20,  114 => 19,  104 => 16,  99 => 15,  93 => 14,  85 => 12,  53 => 10,  49 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     {% stylesheets */
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.bootstrap.css'*/
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.themify.css'*/
/*         'bundles/isetsomagazine/plugins/form-select2/select2.css'*/
/*         'bundles/isetsomagazine/css/cssload-finger.css'*/
/*         filter='cssrewrite' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/*     */
/* {% endblock %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('discharge_article_to_magazine_index') }}">*/
/*        {{ 'dischargearticle.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/*      {% block breadcrumbActive %}{{ 'dischargearticle.new.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     */
/*     {% include 'Template/ArticleManagementAddFormTemplate.html.twig' with {'form_name': 'dischargearticle.new.name'|trans } %}*/
/* */
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/plugins/datatables/jquery.dataTables.js'*/
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.bootstrap.js'*/
/*         'bundles/isetsomagazine/myjs/datatables.js'*/
/*         'bundles/isetsomagazine/plugins/form-select2/select2.min.js'*/
/*         'bundles/isetsomagazine/myPlugins/discharge_article.js'*/
/*         'bundles/isetsomagazine/myjs/add_discharge_local_article.js'*/
/*         'bundles/isetsomagazine/plugins/form-daterangepicker/moment.min.js'*/
/*         'bundles/isetsomagazine/plugins/bootstrap-datepicker/bootstrap-datepicker.js'*/
/*         'bundles/isetsomagazine/myjs/date.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*  {% endblock %}*/
