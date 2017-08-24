<?php

/* ISETSOMagazineBundle:discharge_article_local:edit.html.twig */
class __TwigTemplate_c67ad62cf3a9afc906a7beb69a54542dbb4caed0a13701e52b78c1fd1c19c3d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:discharge_article_local:edit.html.twig", 1);
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
        $__internal_0250fca1a8c5e5b754695e2da06b73770bab1bb901d47b4f2c6bc4b5654aec92 = $this->env->getExtension("native_profiler");
        $__internal_0250fca1a8c5e5b754695e2da06b73770bab1bb901d47b4f2c6bc4b5654aec92->enter($__internal_0250fca1a8c5e5b754695e2da06b73770bab1bb901d47b4f2c6bc4b5654aec92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:discharge_article_local:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0250fca1a8c5e5b754695e2da06b73770bab1bb901d47b4f2c6bc4b5654aec92->leave($__internal_0250fca1a8c5e5b754695e2da06b73770bab1bb901d47b4f2c6bc4b5654aec92_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9331bb6f1410229e957cd41a5f76f749443043cd5a5abc8168194f57a9e50660 = $this->env->getExtension("native_profiler");
        $__internal_9331bb6f1410229e957cd41a5f76f749443043cd5a5abc8168194f57a9e50660->enter($__internal_9331bb6f1410229e957cd41a5f76f749443043cd5a5abc8168194f57a9e50660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9331bb6f1410229e957cd41a5f76f749443043cd5a5abc8168194f57a9e50660->leave($__internal_9331bb6f1410229e957cd41a5f76f749443043cd5a5abc8168194f57a9e50660_prof);

    }

    // line 14
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_891bd297ab79afee87c0aa363321714784f933a4a8ba628dbe4e5931bfdb22e0 = $this->env->getExtension("native_profiler");
        $__internal_891bd297ab79afee87c0aa363321714784f933a4a8ba628dbe4e5931bfdb22e0->enter($__internal_891bd297ab79afee87c0aa363321714784f933a4a8ba628dbe4e5931bfdb22e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_891bd297ab79afee87c0aa363321714784f933a4a8ba628dbe4e5931bfdb22e0->leave($__internal_891bd297ab79afee87c0aa363321714784f933a4a8ba628dbe4e5931bfdb22e0_prof);

    }

    // line 19
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_1d5515118eb17f7a7cad54ed1a5dbeb5d6a2ae93ee8f8a55bd2abd1dcaf5ffb7 = $this->env->getExtension("native_profiler");
        $__internal_1d5515118eb17f7a7cad54ed1a5dbeb5d6a2ae93ee8f8a55bd2abd1dcaf5ffb7->enter($__internal_1d5515118eb17f7a7cad54ed1a5dbeb5d6a2ae93ee8f8a55bd2abd1dcaf5ffb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 20
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.edit.name"), "html", null, true);
        echo "
";
        
        $__internal_1d5515118eb17f7a7cad54ed1a5dbeb5d6a2ae93ee8f8a55bd2abd1dcaf5ffb7->leave($__internal_1d5515118eb17f7a7cad54ed1a5dbeb5d6a2ae93ee8f8a55bd2abd1dcaf5ffb7_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd99a8f8c77501f3fd6d88b51ae091844d798b11f940132091c5493e6ff913ba = $this->env->getExtension("native_profiler");
        $__internal_cd99a8f8c77501f3fd6d88b51ae091844d798b11f940132091c5493e6ff913ba->enter($__internal_cd99a8f8c77501f3fd6d88b51ae091844d798b11f940132091c5493e6ff913ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "    ";
        $this->loadTemplate("Template/ArticleManagementAddFormTemplate.html.twig", "ISETSOMagazineBundle:discharge_article_local:edit.html.twig", 23)->display(array_merge($context, array("form_name" => $this->env->getExtension('translator')->trans("dischargearticle.edit.name"))));
        
        $__internal_cd99a8f8c77501f3fd6d88b51ae091844d798b11f940132091c5493e6ff913ba->leave($__internal_cd99a8f8c77501f3fd6d88b51ae091844d798b11f940132091c5493e6ff913ba_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83bb4b6b90f742a9252a30192c769aead19d013dfa3c6f0b1446e2a21cbc77ca = $this->env->getExtension("native_profiler");
        $__internal_83bb4b6b90f742a9252a30192c769aead19d013dfa3c6f0b1446e2a21cbc77ca->enter($__internal_83bb4b6b90f742a9252a30192c769aead19d013dfa3c6f0b1446e2a21cbc77ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 27
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fab5ff4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fab5ff4_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fab5ff4_jquery.dataTables_1.js");
            // line 38
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fab5ff4_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fab5ff4_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fab5ff4_dataTables.bootstrap_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fab5ff4_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fab5ff4_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fab5ff4_datatables_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fab5ff4_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fab5ff4_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fab5ff4_select2.min_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fab5ff4_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fab5ff4_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fab5ff4_discharge_article_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fab5ff4_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fab5ff4_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fab5ff4_edit_discharge_local_article_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fab5ff4_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fab5ff4_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fab5ff4_moment.min_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fab5ff4_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fab5ff4_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fab5ff4_bootstrap-datepicker_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fab5ff4_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fab5ff4_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fab5ff4_date_9.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "fab5ff4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fab5ff4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fab5ff4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 40
        echo " ";
        
        $__internal_83bb4b6b90f742a9252a30192c769aead19d013dfa3c6f0b1446e2a21cbc77ca->leave($__internal_83bb4b6b90f742a9252a30192c769aead19d013dfa3c6f0b1446e2a21cbc77ca_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:discharge_article_local:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 40,  159 => 38,  155 => 27,  150 => 26,  144 => 25,  136 => 23,  130 => 22,  120 => 20,  114 => 19,  104 => 16,  99 => 15,  93 => 14,  85 => 12,  53 => 10,  49 => 4,  44 => 3,  38 => 2,  11 => 1,);
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
/* {% block breadcrumbActive %}*/
/*     {{ 'dischargearticle.edit.name'|trans }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {% include 'Template/ArticleManagementAddFormTemplate.html.twig' with {'form_name': 'dischargearticle.edit.name'|trans } %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/plugins/datatables/jquery.dataTables.js'*/
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.bootstrap.js'*/
/*         'bundles/isetsomagazine/myjs/datatables.js'*/
/*         'bundles/isetsomagazine/plugins/form-select2/select2.min.js'*/
/*         'bundles/isetsomagazine/myPlugins/discharge_article.js'*/
/*         'bundles/isetsomagazine/myjs/edit_discharge_local_article.js'*/
/*         'bundles/isetsomagazine/plugins/form-daterangepicker/moment.min.js'*/
/*         'bundles/isetsomagazine/plugins/bootstrap-datepicker/bootstrap-datepicker.js'*/
/*         'bundles/isetsomagazine/myjs/date.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*  {% endblock %}*/
