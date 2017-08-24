<?php

/* ISETSOMagazineBundle:local:new.html.twig */
class __TwigTemplate_84ebe9eaa0262e27ffbf628041ef7bd0fc9775c098883ecacac47186e622fc5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:local:new.html.twig", 1);
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
        $__internal_19f76f15c3082104e9965d2f3a21003521de0ba558eab22b18907001793fd411 = $this->env->getExtension("native_profiler");
        $__internal_19f76f15c3082104e9965d2f3a21003521de0ba558eab22b18907001793fd411->enter($__internal_19f76f15c3082104e9965d2f3a21003521de0ba558eab22b18907001793fd411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:local:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19f76f15c3082104e9965d2f3a21003521de0ba558eab22b18907001793fd411->leave($__internal_19f76f15c3082104e9965d2f3a21003521de0ba558eab22b18907001793fd411_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_aca9992ffac1a09f395e8f4bdafca5904e0b82ca759b1715d0b4f042aba91542 = $this->env->getExtension("native_profiler");
        $__internal_aca9992ffac1a09f395e8f4bdafca5904e0b82ca759b1715d0b4f042aba91542->enter($__internal_aca9992ffac1a09f395e8f4bdafca5904e0b82ca759b1715d0b4f042aba91542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("local_index");
        echo "\">
       ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("local.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_aca9992ffac1a09f395e8f4bdafca5904e0b82ca759b1715d0b4f042aba91542->leave($__internal_aca9992ffac1a09f395e8f4bdafca5904e0b82ca759b1715d0b4f042aba91542_prof);

    }

    // line 7
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_9a00f27a707985c27554d11fa8c85f4cc18facf0f6c9ac145c82b4ad90e077c1 = $this->env->getExtension("native_profiler");
        $__internal_9a00f27a707985c27554d11fa8c85f4cc18facf0f6c9ac145c82b4ad90e077c1->enter($__internal_9a00f27a707985c27554d11fa8c85f4cc18facf0f6c9ac145c82b4ad90e077c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("local.new.name"), "html", null, true);
        
        $__internal_9a00f27a707985c27554d11fa8c85f4cc18facf0f6c9ac145c82b4ad90e077c1->leave($__internal_9a00f27a707985c27554d11fa8c85f4cc18facf0f6c9ac145c82b4ad90e077c1_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_a536e00178fca938a6730bd44cc0e603e9c085b3ec5e17455991f950fb383429 = $this->env->getExtension("native_profiler");
        $__internal_a536e00178fca938a6730bd44cc0e603e9c085b3ec5e17455991f950fb383429->enter($__internal_a536e00178fca938a6730bd44cc0e603e9c085b3ec5e17455991f950fb383429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:local:new.html.twig", 9)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "form_name" => $this->env->getExtension('translator')->trans("local.new.name"), "submit_name" => $this->env->getExtension('translator')->trans("local.new.submit"))));
        
        $__internal_a536e00178fca938a6730bd44cc0e603e9c085b3ec5e17455991f950fb383429->leave($__internal_a536e00178fca938a6730bd44cc0e603e9c085b3ec5e17455991f950fb383429_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:local:new.html.twig";
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
/*     <a href="{{ path('local_index') }}">*/
/*        {{ 'local.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/*      {% block breadcrumbActive %}{{ 'local.new.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/* {% include 'Template/SingleFormTemplate.html.twig' with {'form': form ,'form_name' : 'local.new.name'|trans ,'submit_name': 'local.new.submit'|trans } %}*/
/* {% endblock %}*/
/* */
