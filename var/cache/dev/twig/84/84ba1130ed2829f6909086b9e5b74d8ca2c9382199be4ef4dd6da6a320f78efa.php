<?php

/* ISETSOUserBundle:usergroup:edit.html.twig */
class __TwigTemplate_fbc26e27b7dfc196790347c0e41b366e19b684facda26cd2878b2d4a8a81f589 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOUserBundle:usergroup:edit.html.twig", 1);
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
        $__internal_0ac013fc35e4f46b298be7fcd5bf59671855cdbc0015431238e37946a655c026 = $this->env->getExtension("native_profiler");
        $__internal_0ac013fc35e4f46b298be7fcd5bf59671855cdbc0015431238e37946a655c026->enter($__internal_0ac013fc35e4f46b298be7fcd5bf59671855cdbc0015431238e37946a655c026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOUserBundle:usergroup:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ac013fc35e4f46b298be7fcd5bf59671855cdbc0015431238e37946a655c026->leave($__internal_0ac013fc35e4f46b298be7fcd5bf59671855cdbc0015431238e37946a655c026_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_63ea4ce4f7d88134dd56ef685c4651f0650f3d9e23ec71c64a9951904cfed573 = $this->env->getExtension("native_profiler");
        $__internal_63ea4ce4f7d88134dd56ef685c4651f0650f3d9e23ec71c64a9951904cfed573->enter($__internal_63ea4ce4f7d88134dd56ef685c4651f0650f3d9e23ec71c64a9951904cfed573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2bc3603_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2bc3603_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/2bc3603_multi-select_1.css");
            // line 8
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "2bc3603_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2bc3603_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/2bc3603_select2_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "2bc3603"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2bc3603") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/2bc3603.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "     
";
        
        $__internal_63ea4ce4f7d88134dd56ef685c4651f0650f3d9e23ec71c64a9951904cfed573->leave($__internal_63ea4ce4f7d88134dd56ef685c4651f0650f3d9e23ec71c64a9951904cfed573_prof);

    }

    // line 11
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_9107b0d7e368daba192bdaba83dc353b91ff8b45ce93f31fe8f31a2867bdb85f = $this->env->getExtension("native_profiler");
        $__internal_9107b0d7e368daba192bdaba83dc353b91ff8b45ce93f31fe8f31a2867bdb85f->enter($__internal_9107b0d7e368daba192bdaba83dc353b91ff8b45ce93f31fe8f31a2867bdb85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 12
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("usergroup_index");
        echo "\">
       ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("usergroup.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_9107b0d7e368daba192bdaba83dc353b91ff8b45ce93f31fe8f31a2867bdb85f->leave($__internal_9107b0d7e368daba192bdaba83dc353b91ff8b45ce93f31fe8f31a2867bdb85f_prof);

    }

    // line 16
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_93283690121dd4d0863cc793f9ed3d4044bcfd0688f260d8575f7f49a18dedce = $this->env->getExtension("native_profiler");
        $__internal_93283690121dd4d0863cc793f9ed3d4044bcfd0688f260d8575f7f49a18dedce->enter($__internal_93283690121dd4d0863cc793f9ed3d4044bcfd0688f260d8575f7f49a18dedce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("usergroup.edit.name"), "html", null, true);
        
        $__internal_93283690121dd4d0863cc793f9ed3d4044bcfd0688f260d8575f7f49a18dedce->leave($__internal_93283690121dd4d0863cc793f9ed3d4044bcfd0688f260d8575f7f49a18dedce_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d5fa3813befb250f03b9fe650bba25c0bef68f4b4f02bc5907538749edd207b = $this->env->getExtension("native_profiler");
        $__internal_8d5fa3813befb250f03b9fe650bba25c0bef68f4b4f02bc5907538749edd207b->enter($__internal_8d5fa3813befb250f03b9fe650bba25c0bef68f4b4f02bc5907538749edd207b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    <ul id=\"basicwizard-header\" class=\"stepy-header\">
        <li id=\"basicwizard-head-0\">
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("userGroup_permission", array("id" => $this->getAttribute((isset($context["userGroup"]) ? $context["userGroup"] : $this->getContext($context, "userGroup")), "id", array()))), "html", null, true);
        echo "\">
                <div><i class=\"fa fa-cogs\"></i></div>
                <span>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("usergroup.edit.permission"), "html", null, true);
        echo "</span>
            </a>
        </li>
        <li id=\"basicwizard-head-1\" class=\"stepy-active\">
            <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("user_edit", array("id" => $this->getAttribute((isset($context["userGroup"]) ? $context["userGroup"] : $this->getContext($context, "userGroup")), "id", array()))), "html", null, true);
        echo "\">
                <div><i class=\"fa fa-refresh fa-spin\"></i></div>
                <span>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("usergroup.edit.name"), "html", null, true);
        echo "</span>
            </a>
        </li>
    </ul>
    ";
        // line 32
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOUserBundle:usergroup:edit.html.twig", 32)->display(array_merge($context, array("form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "form_name" => $this->env->getExtension('translator')->trans("usergroup.edit.name"), "submit_name" => $this->env->getExtension('translator')->trans("usergroup.edit.submit"))));
        
        $__internal_8d5fa3813befb250f03b9fe650bba25c0bef68f4b4f02bc5907538749edd207b->leave($__internal_8d5fa3813befb250f03b9fe650bba25c0bef68f4b4f02bc5907538749edd207b_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e0977bc577afa8d7658ebbdf5ba1ea76b4566bb1b987e6313c17562495e84cdc = $this->env->getExtension("native_profiler");
        $__internal_e0977bc577afa8d7658ebbdf5ba1ea76b4566bb1b987e6313c17562495e84cdc->enter($__internal_e0977bc577afa8d7658ebbdf5ba1ea76b4566bb1b987e6313c17562495e84cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 36
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9ebbd1d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ebbd1d_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9ebbd1d_jquery.multi-select.min_1.js");
            // line 41
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "9ebbd1d_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ebbd1d_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9ebbd1d_icheck_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "9ebbd1d_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ebbd1d_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9ebbd1d_select2.min_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "9ebbd1d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ebbd1d") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9ebbd1d.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 43
        echo "
    <script type=\"text/javascript\">
        \$('select').multiSelect();
    </script>
";
        
        $__internal_e0977bc577afa8d7658ebbdf5ba1ea76b4566bb1b987e6313c17562495e84cdc->leave($__internal_e0977bc577afa8d7658ebbdf5ba1ea76b4566bb1b987e6313c17562495e84cdc_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOUserBundle:usergroup:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 43,  170 => 41,  166 => 36,  161 => 35,  155 => 34,  148 => 32,  141 => 28,  136 => 26,  129 => 22,  124 => 20,  120 => 18,  114 => 17,  102 => 16,  92 => 13,  87 => 12,  81 => 11,  73 => 9,  53 => 8,  49 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     {% stylesheets */
/*         'bundles/isetsomagazine/plugins/form-multiselect/css/multi-select.css'*/
/*         'bundles/isetsomagazine/plugins/form-select2/select2.css'*/
/*         filter='cssrewrite' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}     */
/* {% endblock %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('usergroup_index') }}">*/
/*        {{ 'usergroup.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* 	 {% block breadcrumbActive %}{{ 'usergroup.edit.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     <ul id="basicwizard-header" class="stepy-header">*/
/*         <li id="basicwizard-head-0">*/
/*             <a href="{{ url('userGroup_permission', { 'id': userGroup.id}) }}">*/
/*                 <div><i class="fa fa-cogs"></i></div>*/
/*                 <span>{{ 'usergroup.edit.permission'|trans }}</span>*/
/*             </a>*/
/*         </li>*/
/*         <li id="basicwizard-head-1" class="stepy-active">*/
/*             <a href="{{ url('user_edit', { 'id': userGroup.id}) }}">*/
/*                 <div><i class="fa fa-refresh fa-spin"></i></div>*/
/*                 <span>{{ 'usergroup.edit.name'|trans }}</span>*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': edit_form ,'form_name' : 'usergroup.edit.name'|trans ,'submit_name': 'usergroup.edit.submit'|trans } %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/plugins/form-multiselect/js/jquery.multi-select.min.js'*/
/*         'bundles/isetsomagazine/plugins/iCheck/icheck.js'*/
/*         'bundles/isetsomagazine/plugins/form-select2/select2.min.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* */
/*     <script type="text/javascript">*/
/*         $('select').multiSelect();*/
/*     </script>*/
/* {% endblock %}*/
