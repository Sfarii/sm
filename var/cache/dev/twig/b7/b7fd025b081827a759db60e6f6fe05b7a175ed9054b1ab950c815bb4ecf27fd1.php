<?php

/* ISETSOMagazineBundle:articledurable:new.html.twig */
class __TwigTemplate_d366a83b8ea491b7eca71cd0664af9d0c0507031efa82fbb3139c8156d89282a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:articledurable:new.html.twig", 1);
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
        $__internal_0ffcfed5d44f0468588277601adae1ce591acc59a1992c351458c0f1e2f3b8f8 = $this->env->getExtension("native_profiler");
        $__internal_0ffcfed5d44f0468588277601adae1ce591acc59a1992c351458c0f1e2f3b8f8->enter($__internal_0ffcfed5d44f0468588277601adae1ce591acc59a1992c351458c0f1e2f3b8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:articledurable:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ffcfed5d44f0468588277601adae1ce591acc59a1992c351458c0f1e2f3b8f8->leave($__internal_0ffcfed5d44f0468588277601adae1ce591acc59a1992c351458c0f1e2f3b8f8_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_94b541167c220a48ad1826dd3ac2a7f11bd79901735bb1ac3a22507a64f5f5ec = $this->env->getExtension("native_profiler");
        $__internal_94b541167c220a48ad1826dd3ac2a7f11bd79901735bb1ac3a22507a64f5f5ec->enter($__internal_94b541167c220a48ad1826dd3ac2a7f11bd79901735bb1ac3a22507a64f5f5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_94b541167c220a48ad1826dd3ac2a7f11bd79901735bb1ac3a22507a64f5f5ec->leave($__internal_94b541167c220a48ad1826dd3ac2a7f11bd79901735bb1ac3a22507a64f5f5ec_prof);

    }

    // line 9
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_1457f7fec0fd3d51e6b9249a1f8bd98b956c4fa8611d29fc271a3a499ec2532c = $this->env->getExtension("native_profiler");
        $__internal_1457f7fec0fd3d51e6b9249a1f8bd98b956c4fa8611d29fc271a3a499ec2532c->enter($__internal_1457f7fec0fd3d51e6b9249a1f8bd98b956c4fa8611d29fc271a3a499ec2532c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articledurable.new.name"), "html", null, true);
        echo "
";
        
        $__internal_1457f7fec0fd3d51e6b9249a1f8bd98b956c4fa8611d29fc271a3a499ec2532c->leave($__internal_1457f7fec0fd3d51e6b9249a1f8bd98b956c4fa8611d29fc271a3a499ec2532c_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2dd644db7a504e136b9f803921110d2106e2697af7b04487fab711e2aab8f71 = $this->env->getExtension("native_profiler");
        $__internal_a2dd644db7a504e136b9f803921110d2106e2697af7b04487fab711e2aab8f71->enter($__internal_a2dd644db7a504e136b9f803921110d2106e2697af7b04487fab711e2aab8f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:articledurable:new.html.twig", 14)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "form_name" => $this->env->getExtension('translator')->trans("articledurable.new.name"), "submit_name" => $this->env->getExtension('translator')->trans("articledurable.new.submit"))));
        
        $__internal_a2dd644db7a504e136b9f803921110d2106e2697af7b04487fab711e2aab8f71->leave($__internal_a2dd644db7a504e136b9f803921110d2106e2697af7b04487fab711e2aab8f71_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_93699923cb9f7fab2089998a692413382adaa42bcd7e9cc5c7d94a01a2b0f5bb = $this->env->getExtension("native_profiler");
        $__internal_93699923cb9f7fab2089998a692413382adaa42bcd7e9cc5c7d94a01a2b0f5bb->enter($__internal_93699923cb9f7fab2089998a692413382adaa42bcd7e9cc5c7d94a01a2b0f5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_93699923cb9f7fab2089998a692413382adaa42bcd7e9cc5c7d94a01a2b0f5bb->leave($__internal_93699923cb9f7fab2089998a692413382adaa42bcd7e9cc5c7d94a01a2b0f5bb_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:articledurable:new.html.twig";
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
/*     {{ 'articledurable.new.name'|trans }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': form ,'form_name' : 'articledurable.new.name'|trans ,'submit_name': 'articledurable.new.submit'|trans } %}*/
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
