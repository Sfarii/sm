<?php

/* ISETSOMagazineBundle:articledurable:edit.html.twig */
class __TwigTemplate_e12b0a3821ab3a9fa8928c20837d14be54e9d73ff8f4259427d0d3f08915b16e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:articledurable:edit.html.twig", 1);
        $this->blocks = array(
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
        $__internal_2fcfc9a6f17b2fb5edcf7a03f18822c75abb160332a09861875ed888b1d898be = $this->env->getExtension("native_profiler");
        $__internal_2fcfc9a6f17b2fb5edcf7a03f18822c75abb160332a09861875ed888b1d898be->enter($__internal_2fcfc9a6f17b2fb5edcf7a03f18822c75abb160332a09861875ed888b1d898be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:articledurable:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fcfc9a6f17b2fb5edcf7a03f18822c75abb160332a09861875ed888b1d898be->leave($__internal_2fcfc9a6f17b2fb5edcf7a03f18822c75abb160332a09861875ed888b1d898be_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_a43dac78f77ee859999263776391a5d03264d6c5128af092760e72b44f5dc661 = $this->env->getExtension("native_profiler");
        $__internal_a43dac78f77ee859999263776391a5d03264d6c5128af092760e72b44f5dc661->enter($__internal_a43dac78f77ee859999263776391a5d03264d6c5128af092760e72b44f5dc661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("articledurable_index");
        echo "\">
       ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articledurable.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_a43dac78f77ee859999263776391a5d03264d6c5128af092760e72b44f5dc661->leave($__internal_a43dac78f77ee859999263776391a5d03264d6c5128af092760e72b44f5dc661_prof);

    }

    // line 9
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_0993b8711dc52e87ac5e49bea64be33f5523f746bd0f25bd830f10c057be3068 = $this->env->getExtension("native_profiler");
        $__internal_0993b8711dc52e87ac5e49bea64be33f5523f746bd0f25bd830f10c057be3068->enter($__internal_0993b8711dc52e87ac5e49bea64be33f5523f746bd0f25bd830f10c057be3068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articledurable.edit.name"), "html", null, true);
        echo "
";
        
        $__internal_0993b8711dc52e87ac5e49bea64be33f5523f746bd0f25bd830f10c057be3068->leave($__internal_0993b8711dc52e87ac5e49bea64be33f5523f746bd0f25bd830f10c057be3068_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_4117404f5c8ec8dbf74d077e46d874eeeda4024df8dc86b57beff9cecf510470 = $this->env->getExtension("native_profiler");
        $__internal_4117404f5c8ec8dbf74d077e46d874eeeda4024df8dc86b57beff9cecf510470->enter($__internal_4117404f5c8ec8dbf74d077e46d874eeeda4024df8dc86b57beff9cecf510470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:articledurable:edit.html.twig", 14)->display(array_merge($context, array("form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "form_name" => $this->env->getExtension('translator')->trans("articledurable.edit.name"), "submit_name" => $this->env->getExtension('translator')->trans("articledurable.edit.submit"))));
        
        $__internal_4117404f5c8ec8dbf74d077e46d874eeeda4024df8dc86b57beff9cecf510470->leave($__internal_4117404f5c8ec8dbf74d077e46d874eeeda4024df8dc86b57beff9cecf510470_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d69404b9bab744d50cd7efd1f34fb3f4efe507e64355c6ad4dd9aa1aa22f7140 = $this->env->getExtension("native_profiler");
        $__internal_d69404b9bab744d50cd7efd1f34fb3f4efe507e64355c6ad4dd9aa1aa22f7140->enter($__internal_d69404b9bab744d50cd7efd1f34fb3f4efe507e64355c6ad4dd9aa1aa22f7140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "
    ";
        // line 19
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 21
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4712c5a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4712c5a_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4712c5a_article_durable_1.js");
            // line 24
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "4712c5a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4712c5a") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4712c5a.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 26
        echo "    
";
        
        $__internal_d69404b9bab744d50cd7efd1f34fb3f4efe507e64355c6ad4dd9aa1aa22f7140->leave($__internal_d69404b9bab744d50cd7efd1f34fb3f4efe507e64355c6ad4dd9aa1aa22f7140_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:articledurable:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 26,  106 => 24,  102 => 21,  97 => 19,  94 => 18,  88 => 17,  80 => 14,  74 => 13,  64 => 10,  58 => 9,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/*     <a href="{{ path('articledurable_index') }}">*/
/*        {{ 'articledurable.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
/* {% block breadcrumbActive %}*/
/*     {{ 'articledurable.edit.name'|trans }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': edit_form ,'form_name' : 'articledurable.edit.name'|trans ,'submit_name': 'articledurable.edit.submit'|trans } %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/*     {{ parent() }}*/
/* */
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/myjs/article_durable.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*     */
/* {% endblock %}*/
