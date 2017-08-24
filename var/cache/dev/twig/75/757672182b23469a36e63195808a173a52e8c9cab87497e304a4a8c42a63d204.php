<?php

/* ISETSOMagazineBundle:journaldurable:edit.html.twig */
class __TwigTemplate_cb65c0746568c98df4f6659a0380971b086c274addf926413076dce055fb85cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:journaldurable:edit.html.twig", 1);
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
        $__internal_ae7befd1e7a429a8118e1c3e4c5e0ced736a84d4dc9608f98e32e4140d4170b6 = $this->env->getExtension("native_profiler");
        $__internal_ae7befd1e7a429a8118e1c3e4c5e0ced736a84d4dc9608f98e32e4140d4170b6->enter($__internal_ae7befd1e7a429a8118e1c3e4c5e0ced736a84d4dc9608f98e32e4140d4170b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:journaldurable:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae7befd1e7a429a8118e1c3e4c5e0ced736a84d4dc9608f98e32e4140d4170b6->leave($__internal_ae7befd1e7a429a8118e1c3e4c5e0ced736a84d4dc9608f98e32e4140d4170b6_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a402aa0be7b5db175e60c9f3aaeb82491fad671299ef22fd93525c5dc27226f2 = $this->env->getExtension("native_profiler");
        $__internal_a402aa0be7b5db175e60c9f3aaeb82491fad671299ef22fd93525c5dc27226f2->enter($__internal_a402aa0be7b5db175e60c9f3aaeb82491fad671299ef22fd93525c5dc27226f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a402aa0be7b5db175e60c9f3aaeb82491fad671299ef22fd93525c5dc27226f2->leave($__internal_a402aa0be7b5db175e60c9f3aaeb82491fad671299ef22fd93525c5dc27226f2_prof);

    }

    // line 14
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_ba1c85bd51b9e0eaf14844ac17bdc25a35dc2d1c1b813ac7452e3e276820209e = $this->env->getExtension("native_profiler");
        $__internal_ba1c85bd51b9e0eaf14844ac17bdc25a35dc2d1c1b813ac7452e3e276820209e->enter($__internal_ba1c85bd51b9e0eaf14844ac17bdc25a35dc2d1c1b813ac7452e3e276820209e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 15
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("journaldurable_index");
        echo "\">
       ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journaldurable.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_ba1c85bd51b9e0eaf14844ac17bdc25a35dc2d1c1b813ac7452e3e276820209e->leave($__internal_ba1c85bd51b9e0eaf14844ac17bdc25a35dc2d1c1b813ac7452e3e276820209e_prof);

    }

    // line 20
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_9fd30740ccdcf854e05b4765b44ad0d15111b1463d6205b15c4f2003ff1c1277 = $this->env->getExtension("native_profiler");
        $__internal_9fd30740ccdcf854e05b4765b44ad0d15111b1463d6205b15c4f2003ff1c1277->enter($__internal_9fd30740ccdcf854e05b4765b44ad0d15111b1463d6205b15c4f2003ff1c1277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 21
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journaldurable.edit.name"), "html", null, true);
        echo "
";
        
        $__internal_9fd30740ccdcf854e05b4765b44ad0d15111b1463d6205b15c4f2003ff1c1277->leave($__internal_9fd30740ccdcf854e05b4765b44ad0d15111b1463d6205b15c4f2003ff1c1277_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f56cf3c12cac9d6f363e9abc70fd777246665c45275c70000a635766c1c4c10 = $this->env->getExtension("native_profiler");
        $__internal_4f56cf3c12cac9d6f363e9abc70fd777246665c45275c70000a635766c1c4c10->enter($__internal_4f56cf3c12cac9d6f363e9abc70fd777246665c45275c70000a635766c1c4c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "    ";
        $this->loadTemplate("Template/JournalAddFormTemplate.html.twig", "ISETSOMagazineBundle:journaldurable:edit.html.twig", 25)->display(array_merge($context, array("form_name" => $this->env->getExtension('translator')->trans("journaldurable.edit.name"))));
        
        $__internal_4f56cf3c12cac9d6f363e9abc70fd777246665c45275c70000a635766c1c4c10->leave($__internal_4f56cf3c12cac9d6f363e9abc70fd777246665c45275c70000a635766c1c4c10_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1bd981194f3db0c7e138fe26ee07dccbb6998d131741c644a45a9ef7dcc62c3a = $this->env->getExtension("native_profiler");
        $__internal_1bd981194f3db0c7e138fe26ee07dccbb6998d131741c644a45a9ef7dcc62c3a->enter($__internal_1bd981194f3db0c7e138fe26ee07dccbb6998d131741c644a45a9ef7dcc62c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 30
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "77f9add_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_77f9add_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/77f9add_jquery.dataTables_1.js");
            // line 42
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "77f9add_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_77f9add_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/77f9add_dataTables.bootstrap_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "77f9add_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_77f9add_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/77f9add_datatables_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "77f9add_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_77f9add_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/77f9add_select2.min_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "77f9add_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_77f9add_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/77f9add_moment.min_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "77f9add_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_77f9add_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/77f9add_bootstrap-datepicker_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "77f9add_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_77f9add_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/77f9add_date_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "77f9add_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_77f9add_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/77f9add_Supporting-Document-edit_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "77f9add_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_77f9add_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/77f9add_edit_journal_durable_9.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "77f9add"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_77f9add") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/77f9add.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 44
        echo " ";
        
        $__internal_1bd981194f3db0c7e138fe26ee07dccbb6998d131741c644a45a9ef7dcc62c3a->leave($__internal_1bd981194f3db0c7e138fe26ee07dccbb6998d131741c644a45a9ef7dcc62c3a_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:journaldurable:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 44,  159 => 42,  155 => 30,  150 => 29,  144 => 28,  136 => 25,  130 => 24,  120 => 21,  114 => 20,  104 => 16,  99 => 15,  93 => 14,  85 => 12,  53 => 10,  49 => 4,  44 => 3,  38 => 2,  11 => 1,);
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
/*     <a href="{{ path('journaldurable_index') }}">*/
/*        {{ 'journaldurable.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
/* {% block breadcrumbActive %}*/
/*     {{ 'journaldurable.edit.name'|trans }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'Template/JournalAddFormTemplate.html.twig' with {'form_name': 'journaldurable.edit.name'|trans } %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/plugins/datatables/jquery.dataTables.js'*/
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.bootstrap.js'*/
/*         'bundles/isetsomagazine/myjs/datatables.js'*/
/*         'bundles/isetsomagazine/plugins/form-select2/select2.min.js'*/
/*         'bundles/isetsomagazine/plugins/form-daterangepicker/moment.min.js'*/
/*         'bundles/isetsomagazine/plugins/bootstrap-datepicker/bootstrap-datepicker.js'*/
/*         'bundles/isetsomagazine/myjs/date.js'*/
/*         'bundles/isetsomagazine/myPlugins/Supporting-Document-edit.js'*/
/*         'bundles/isetsomagazine/myjs/edit_journal_durable.js'*/
/* */
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*  {% endblock %}*/
