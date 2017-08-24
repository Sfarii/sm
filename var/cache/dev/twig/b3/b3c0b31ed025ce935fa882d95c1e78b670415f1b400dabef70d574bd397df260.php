<?php

/* ISETSOMagazineBundle:discharge_article_local:check.html.twig */
class __TwigTemplate_df541a2f9e5e1a87c874c0ee4ae923e1258dbc3ee7a97481f4cd9208edbf00e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:discharge_article_local:check.html.twig", 1);
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
        $__internal_4868747f6500dfa9735229ff451631b384b47a67fc06d870fe2e508242ee2658 = $this->env->getExtension("native_profiler");
        $__internal_4868747f6500dfa9735229ff451631b384b47a67fc06d870fe2e508242ee2658->enter($__internal_4868747f6500dfa9735229ff451631b384b47a67fc06d870fe2e508242ee2658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:discharge_article_local:check.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4868747f6500dfa9735229ff451631b384b47a67fc06d870fe2e508242ee2658->leave($__internal_4868747f6500dfa9735229ff451631b384b47a67fc06d870fe2e508242ee2658_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_a0769d9e2568f2f7e5bd84c0242b2f274931f31a0f628309a1d6794206b3e203 = $this->env->getExtension("native_profiler");
        $__internal_a0769d9e2568f2f7e5bd84c0242b2f274931f31a0f628309a1d6794206b3e203->enter($__internal_a0769d9e2568f2f7e5bd84c0242b2f274931f31a0f628309a1d6794206b3e203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("discharge_article_to_magazine_index");
        echo "\">
       ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_a0769d9e2568f2f7e5bd84c0242b2f274931f31a0f628309a1d6794206b3e203->leave($__internal_a0769d9e2568f2f7e5bd84c0242b2f274931f31a0f628309a1d6794206b3e203_prof);

    }

    // line 7
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_a3070b5569d9dd705c10c5f9ae46cd635c01ad06e161140217d75ab1615e359b = $this->env->getExtension("native_profiler");
        $__internal_a3070b5569d9dd705c10c5f9ae46cd635c01ad06e161140217d75ab1615e359b->enter($__internal_a3070b5569d9dd705c10c5f9ae46cd635c01ad06e161140217d75ab1615e359b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.edit.name"), "html", null, true);
        
        $__internal_a3070b5569d9dd705c10c5f9ae46cd635c01ad06e161140217d75ab1615e359b->leave($__internal_a3070b5569d9dd705c10c5f9ae46cd635c01ad06e161140217d75ab1615e359b_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_89de1390d11f82031b994089913da1927f171e83b8b22dad33273f0dafd666e7 = $this->env->getExtension("native_profiler");
        $__internal_89de1390d11f82031b994089913da1927f171e83b8b22dad33273f0dafd666e7->enter($__internal_89de1390d11f82031b994089913da1927f171e83b8b22dad33273f0dafd666e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:discharge_article_local:check.html.twig", 9)->display(array_merge($context, array("form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "form_name" => $this->env->getExtension('translator')->trans("orderarticle.edit.name"), "submit_name" => $this->env->getExtension('translator')->trans("orderarticle.edit.submit"))));
        
        $__internal_89de1390d11f82031b994089913da1927f171e83b8b22dad33273f0dafd666e7->leave($__internal_89de1390d11f82031b994089913da1927f171e83b8b22dad33273f0dafd666e7_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:discharge_article_local:check.html.twig";
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
/*     <a href="{{ path('discharge_article_to_magazine_index') }}">*/
/*        {{ 'dischargearticle.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/*      {% block breadcrumbActive %}{{ 'dischargearticle.edit.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': edit_form ,'form_name' : 'orderarticle.edit.name'|trans ,'submit_name': 'orderarticle.edit.submit'|trans } %}*/
/* {% endblock %}*/
/* */
