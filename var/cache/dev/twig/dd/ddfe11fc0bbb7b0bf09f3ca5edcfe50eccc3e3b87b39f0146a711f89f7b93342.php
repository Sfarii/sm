<?php

/* ISETSOMagazineBundle:unit:edit.html.twig */
class __TwigTemplate_248500857608e6963f004b38d6e5b08b05ade76d91392016c2dd4f2650d21c1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:unit:edit.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'breadcrumbActive' => array($this, 'block_breadcrumbActive'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e6273290a8e59ebd358f390705e2d8e0ffe82ebcc9624a986abb15246be040c = $this->env->getExtension("native_profiler");
        $__internal_6e6273290a8e59ebd358f390705e2d8e0ffe82ebcc9624a986abb15246be040c->enter($__internal_6e6273290a8e59ebd358f390705e2d8e0ffe82ebcc9624a986abb15246be040c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:unit:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e6273290a8e59ebd358f390705e2d8e0ffe82ebcc9624a986abb15246be040c->leave($__internal_6e6273290a8e59ebd358f390705e2d8e0ffe82ebcc9624a986abb15246be040c_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_854a7c94a3815df37b0430c87f82f7a767c39289ba41fe7cf36ba7514359858a = $this->env->getExtension("native_profiler");
        $__internal_854a7c94a3815df37b0430c87f82f7a767c39289ba41fe7cf36ba7514359858a->enter($__internal_854a7c94a3815df37b0430c87f82f7a767c39289ba41fe7cf36ba7514359858a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("unit_index");
        echo "\">
       ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("unit.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_854a7c94a3815df37b0430c87f82f7a767c39289ba41fe7cf36ba7514359858a->leave($__internal_854a7c94a3815df37b0430c87f82f7a767c39289ba41fe7cf36ba7514359858a_prof);

    }

    // line 7
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_69ef52dea2c0f351c1b7045426299c3ecc01985eaa4a662af116de6dea90701c = $this->env->getExtension("native_profiler");
        $__internal_69ef52dea2c0f351c1b7045426299c3ecc01985eaa4a662af116de6dea90701c->enter($__internal_69ef52dea2c0f351c1b7045426299c3ecc01985eaa4a662af116de6dea90701c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("unit.edit.name"), "html", null, true);
        
        $__internal_69ef52dea2c0f351c1b7045426299c3ecc01985eaa4a662af116de6dea90701c->leave($__internal_69ef52dea2c0f351c1b7045426299c3ecc01985eaa4a662af116de6dea90701c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_69bf3c0f0f44328a3e357a045a8a9db5625e1654fd1776f49d835f47a9847ba4 = $this->env->getExtension("native_profiler");
        $__internal_69bf3c0f0f44328a3e357a045a8a9db5625e1654fd1776f49d835f47a9847ba4->enter($__internal_69bf3c0f0f44328a3e357a045a8a9db5625e1654fd1776f49d835f47a9847ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:unit:edit.html.twig", 9)->display(array_merge($context, array("form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "form_name" => $this->env->getExtension('translator')->trans("unit.edit.name"), "submit_name" => $this->env->getExtension('translator')->trans("unit.edit.submit"))));
        
        $__internal_69bf3c0f0f44328a3e357a045a8a9db5625e1654fd1776f49d835f47a9847ba4->leave($__internal_69bf3c0f0f44328a3e357a045a8a9db5625e1654fd1776f49d835f47a9847ba4_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:unit:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 9,  69 => 8,  57 => 7,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('unit_index') }}">*/
/*        {{ 'unit.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* 	 {% block breadcrumbActive %}{{ 'unit.edit.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': edit_form ,'form_name' : 'unit.edit.name'|trans ,'submit_name': 'unit.edit.submit'|trans } %}*/
/* {% endblock %}*/
/* */
