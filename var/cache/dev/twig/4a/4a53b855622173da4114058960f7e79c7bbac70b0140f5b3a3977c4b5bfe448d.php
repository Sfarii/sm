<?php

/* ISETSOMagazineBundle:journalconsumable:new.html.twig */
class __TwigTemplate_6ed712b31596cc7a2ecdbb3d039a1b0f0ef3326240e58388061f8be397962a56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:journalconsumable:new.html.twig", 1);
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
        $__internal_7d8f686a08c991f92c6d3dee46ef6d51032a4afc6e38f602ed151904b1d4948c = $this->env->getExtension("native_profiler");
        $__internal_7d8f686a08c991f92c6d3dee46ef6d51032a4afc6e38f602ed151904b1d4948c->enter($__internal_7d8f686a08c991f92c6d3dee46ef6d51032a4afc6e38f602ed151904b1d4948c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:journalconsumable:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d8f686a08c991f92c6d3dee46ef6d51032a4afc6e38f602ed151904b1d4948c->leave($__internal_7d8f686a08c991f92c6d3dee46ef6d51032a4afc6e38f602ed151904b1d4948c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8251f12c1143cceeee61fb8cf09177bba5fcb867167528cca15888a3b2969437 = $this->env->getExtension("native_profiler");
        $__internal_8251f12c1143cceeee61fb8cf09177bba5fcb867167528cca15888a3b2969437->enter($__internal_8251f12c1143cceeee61fb8cf09177bba5fcb867167528cca15888a3b2969437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e3849eb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3849eb_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e3849eb_dataTables.bootstrap_1.css");
            // line 11
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
        // line 13
        echo "    
";
        
        $__internal_8251f12c1143cceeee61fb8cf09177bba5fcb867167528cca15888a3b2969437->leave($__internal_8251f12c1143cceeee61fb8cf09177bba5fcb867167528cca15888a3b2969437_prof);

    }

    // line 16
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_f28d319e6315cc45a3a34e3a85a811cbf1f63808b937663723edcaade081127a = $this->env->getExtension("native_profiler");
        $__internal_f28d319e6315cc45a3a34e3a85a811cbf1f63808b937663723edcaade081127a->enter($__internal_f28d319e6315cc45a3a34e3a85a811cbf1f63808b937663723edcaade081127a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 17
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("journalconsumable_index");
        echo "\">
       ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journalconsumable.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_f28d319e6315cc45a3a34e3a85a811cbf1f63808b937663723edcaade081127a->leave($__internal_f28d319e6315cc45a3a34e3a85a811cbf1f63808b937663723edcaade081127a_prof);

    }

    // line 21
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_4f94a04bfbf3e1b358dda4f758ca54258cb587bd108dba3d5443c26e8ec036aa = $this->env->getExtension("native_profiler");
        $__internal_4f94a04bfbf3e1b358dda4f758ca54258cb587bd108dba3d5443c26e8ec036aa->enter($__internal_4f94a04bfbf3e1b358dda4f758ca54258cb587bd108dba3d5443c26e8ec036aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 22
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journalconsumable.new.name"), "html", null, true);
        echo "
";
        
        $__internal_4f94a04bfbf3e1b358dda4f758ca54258cb587bd108dba3d5443c26e8ec036aa->leave($__internal_4f94a04bfbf3e1b358dda4f758ca54258cb587bd108dba3d5443c26e8ec036aa_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_71b57f61e46c73c25ec1a07718863f1652e2c763003e6b1f117981296bd20bc7 = $this->env->getExtension("native_profiler");
        $__internal_71b57f61e46c73c25ec1a07718863f1652e2c763003e6b1f117981296bd20bc7->enter($__internal_71b57f61e46c73c25ec1a07718863f1652e2c763003e6b1f117981296bd20bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "    
    ";
        // line 26
        $this->loadTemplate("Template/JournalAddFormTemplate.html.twig", "ISETSOMagazineBundle:journalconsumable:new.html.twig", 26)->display(array_merge($context, array("form_name" => $this->env->getExtension('translator')->trans("journalconsumable.new.name"))));
        // line 27
        echo "
";
        
        $__internal_71b57f61e46c73c25ec1a07718863f1652e2c763003e6b1f117981296bd20bc7->leave($__internal_71b57f61e46c73c25ec1a07718863f1652e2c763003e6b1f117981296bd20bc7_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_796bfd22a8aa56c2295747ceae819e4f9e368453c0c001db577678cc6355329d = $this->env->getExtension("native_profiler");
        $__internal_796bfd22a8aa56c2295747ceae819e4f9e368453c0c001db577678cc6355329d->enter($__internal_796bfd22a8aa56c2295747ceae819e4f9e368453c0c001db577678cc6355329d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 31
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1752835_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1752835_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1752835_jquery.dataTables_1.js");
            // line 43
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "1752835_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1752835_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1752835_dataTables.bootstrap_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "1752835_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1752835_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1752835_datatables_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "1752835_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1752835_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1752835_select2.min_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "1752835_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1752835_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1752835_Supporting-Document_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "1752835_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1752835_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1752835_add_journal_consumable_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "1752835_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1752835_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1752835_moment.min_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "1752835_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1752835_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1752835_bootstrap-datepicker_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "1752835_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1752835_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1752835_date_9.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "1752835"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1752835") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1752835.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 45
        echo " ";
        
        $__internal_796bfd22a8aa56c2295747ceae819e4f9e368453c0c001db577678cc6355329d->leave($__internal_796bfd22a8aa56c2295747ceae819e4f9e368453c0c001db577678cc6355329d_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:journalconsumable:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 45,  164 => 43,  160 => 31,  155 => 30,  149 => 29,  141 => 27,  139 => 26,  136 => 25,  130 => 24,  120 => 22,  114 => 21,  104 => 18,  99 => 17,  93 => 16,  85 => 13,  53 => 11,  49 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
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
/* */
/* {% block breadcrumb %}*/
/*     <a href="{{ path('journalconsumable_index') }}">*/
/*        {{ 'journalconsumable.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* {% block breadcrumbActive %}*/
/*     {{ 'journalconsumable.new.name'|trans }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     */
/*     {% include 'Template/JournalAddFormTemplate.html.twig' with {'form_name': 'journalconsumable.new.name'|trans } %}*/
/* */
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/plugins/datatables/jquery.dataTables.js'*/
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.bootstrap.js'*/
/*         'bundles/isetsomagazine/myjs/datatables.js'*/
/*         'bundles/isetsomagazine/plugins/form-select2/select2.min.js'*/
/*         'bundles/isetsomagazine/myPlugins/Supporting-Document.js'*/
/*         'bundles/isetsomagazine/myjs/add_journal_consumable.js'*/
/*         'bundles/isetsomagazine/plugins/form-daterangepicker/moment.min.js'*/
/*         'bundles/isetsomagazine/plugins/bootstrap-datepicker/bootstrap-datepicker.js'*/
/*         'bundles/isetsomagazine/myjs/date.js'*/
/* */
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*  {% endblock %}*/
/*   */
