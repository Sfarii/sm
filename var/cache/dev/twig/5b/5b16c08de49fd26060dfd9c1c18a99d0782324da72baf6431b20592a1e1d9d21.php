<?php

/* ISETSOMagazineBundle:magazine_discharge:new.html.twig */
class __TwigTemplate_0aa62d3cbadcd1a1ac6ca8e43563bc64850bae22f709516eb8e47eedec298863 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:magazine_discharge:new.html.twig", 1);
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
        $__internal_c4881744885895ed354b9ee4e4c86de4e47150bbfe8d2ed05e3868a7763ef3f8 = $this->env->getExtension("native_profiler");
        $__internal_c4881744885895ed354b9ee4e4c86de4e47150bbfe8d2ed05e3868a7763ef3f8->enter($__internal_c4881744885895ed354b9ee4e4c86de4e47150bbfe8d2ed05e3868a7763ef3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:magazine_discharge:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4881744885895ed354b9ee4e4c86de4e47150bbfe8d2ed05e3868a7763ef3f8->leave($__internal_c4881744885895ed354b9ee4e4c86de4e47150bbfe8d2ed05e3868a7763ef3f8_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e2af61cfeffc757e0d4a419ce09b993affe20f8b9b89ed239c64c294ea45078 = $this->env->getExtension("native_profiler");
        $__internal_9e2af61cfeffc757e0d4a419ce09b993affe20f8b9b89ed239c64c294ea45078->enter($__internal_9e2af61cfeffc757e0d4a419ce09b993affe20f8b9b89ed239c64c294ea45078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9e2af61cfeffc757e0d4a419ce09b993affe20f8b9b89ed239c64c294ea45078->leave($__internal_9e2af61cfeffc757e0d4a419ce09b993affe20f8b9b89ed239c64c294ea45078_prof);

    }

    // line 14
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_6b729200117214150cecb47df9197f99659c99cff4730ae9f907d5eaf0433443 = $this->env->getExtension("native_profiler");
        $__internal_6b729200117214150cecb47df9197f99659c99cff4730ae9f907d5eaf0433443->enter($__internal_6b729200117214150cecb47df9197f99659c99cff4730ae9f907d5eaf0433443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 15
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("magazine_magazinedischarge_index", array("id" => $this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "id", array()))), "html", null, true);
        echo "\">
       ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazineDischarge.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_6b729200117214150cecb47df9197f99659c99cff4730ae9f907d5eaf0433443->leave($__internal_6b729200117214150cecb47df9197f99659c99cff4730ae9f907d5eaf0433443_prof);

    }

    // line 19
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_dd8f38ea4be9af726c19e76380c6b852e98c114648c813958f0c522d9c6170fe = $this->env->getExtension("native_profiler");
        $__internal_dd8f38ea4be9af726c19e76380c6b852e98c114648c813958f0c522d9c6170fe->enter($__internal_dd8f38ea4be9af726c19e76380c6b852e98c114648c813958f0c522d9c6170fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 20
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazineDischarge.new.name"), "html", null, true);
        echo "
";
        
        $__internal_dd8f38ea4be9af726c19e76380c6b852e98c114648c813958f0c522d9c6170fe->leave($__internal_dd8f38ea4be9af726c19e76380c6b852e98c114648c813958f0c522d9c6170fe_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_58ec19d8dbd9e4a715ea392a8aab99d451ab548d446c7a3ef1970ef684f6047e = $this->env->getExtension("native_profiler");
        $__internal_58ec19d8dbd9e4a715ea392a8aab99d451ab548d446c7a3ef1970ef684f6047e->enter($__internal_58ec19d8dbd9e4a715ea392a8aab99d451ab548d446c7a3ef1970ef684f6047e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "    
   ";
        // line 24
        $this->loadTemplate("Template/ArticleManagementAddFormTemplate.html.twig", "ISETSOMagazineBundle:magazine_discharge:new.html.twig", 24)->display(array_merge($context, array("form_name" => $this->env->getExtension('translator')->trans("magazineDischarge.new.name"))));
        
        $__internal_58ec19d8dbd9e4a715ea392a8aab99d451ab548d446c7a3ef1970ef684f6047e->leave($__internal_58ec19d8dbd9e4a715ea392a8aab99d451ab548d446c7a3ef1970ef684f6047e_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5ded2523a04733e5c3ea9e2197f1a23bc2d0d517ad7f2ff8b588b242cddc18d0 = $this->env->getExtension("native_profiler");
        $__internal_5ded2523a04733e5c3ea9e2197f1a23bc2d0d517ad7f2ff8b588b242cddc18d0->enter($__internal_5ded2523a04733e5c3ea9e2197f1a23bc2d0d517ad7f2ff8b588b242cddc18d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
    var store_id = ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "id", array()), "html", null, true);
        echo ";
    </script>
    ";
        // line 31
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "36a000b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_36a000b_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/36a000b_jquery.dataTables_1.js");
            // line 42
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "36a000b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_36a000b_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/36a000b_dataTables.bootstrap_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "36a000b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_36a000b_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/36a000b_datatables_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "36a000b_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_36a000b_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/36a000b_select2.min_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "36a000b_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_36a000b_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/36a000b_discharge_article_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "36a000b_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_36a000b_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/36a000b_add_discharge_user_article_from_subStore_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "36a000b_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_36a000b_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/36a000b_moment.min_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "36a000b_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_36a000b_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/36a000b_bootstrap-datepicker_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "36a000b_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_36a000b_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/36a000b_date_9.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "36a000b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_36a000b") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/36a000b.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 44
        echo "
 ";
        
        $__internal_5ded2523a04733e5c3ea9e2197f1a23bc2d0d517ad7f2ff8b588b242cddc18d0->leave($__internal_5ded2523a04733e5c3ea9e2197f1a23bc2d0d517ad7f2ff8b588b242cddc18d0_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:magazine_discharge:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 44,  167 => 42,  163 => 31,  158 => 29,  152 => 27,  146 => 26,  139 => 24,  136 => 23,  130 => 22,  120 => 20,  114 => 19,  104 => 16,  99 => 15,  93 => 14,  85 => 12,  53 => 10,  49 => 4,  44 => 3,  38 => 2,  11 => 1,);
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
/*     <a href="{{ path('magazine_magazinedischarge_index',{ 'id' : magazine.id}) }}">*/
/*        {{ 'magazineDischarge.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* {% block breadcrumbActive %}*/
/*     {{ 'magazineDischarge.new.name'|trans }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     */
/*    {% include 'Template/ArticleManagementAddFormTemplate.html.twig' with {'form_name': 'magazineDischarge.new.name'|trans } %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript">*/
/*     var store_id = {{ magazine.id }};*/
/*     </script>*/
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/plugins/datatables/jquery.dataTables.js'*/
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.bootstrap.js'*/
/*         'bundles/isetsomagazine/myjs/datatables.js'*/
/*         'bundles/isetsomagazine/plugins/form-select2/select2.min.js'*/
/*         'bundles/isetsomagazine/myPlugins/discharge_article.js'*/
/*         'bundles/isetsomagazine/myjs/add_discharge_user_article_from_subStore.js'*/
/*         'bundles/isetsomagazine/plugins/form-daterangepicker/moment.min.js'*/
/*         'bundles/isetsomagazine/plugins/bootstrap-datepicker/bootstrap-datepicker.js'*/
/*         'bundles/isetsomagazine/myjs/date.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* */
/*  {% endblock %}*/
