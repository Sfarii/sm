<?php

/* ISETSOMagazineBundle:unit:new.html.twig */
class __TwigTemplate_237b085a4563680753401afa5e17b4b705e95c4ebd93c20e64e05c155e037bcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:unit:new.html.twig", 1);
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
        $__internal_8e4d8bbebb631983fa6beb3ece9fabf806a27a562945e004a27b9f56a211bc67 = $this->env->getExtension("native_profiler");
        $__internal_8e4d8bbebb631983fa6beb3ece9fabf806a27a562945e004a27b9f56a211bc67->enter($__internal_8e4d8bbebb631983fa6beb3ece9fabf806a27a562945e004a27b9f56a211bc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:unit:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e4d8bbebb631983fa6beb3ece9fabf806a27a562945e004a27b9f56a211bc67->leave($__internal_8e4d8bbebb631983fa6beb3ece9fabf806a27a562945e004a27b9f56a211bc67_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_431e60603db45d8daca5b2c4c28f8cf4095cf6e4118d553a9445400c157bb7dd = $this->env->getExtension("native_profiler");
        $__internal_431e60603db45d8daca5b2c4c28f8cf4095cf6e4118d553a9445400c157bb7dd->enter($__internal_431e60603db45d8daca5b2c4c28f8cf4095cf6e4118d553a9445400c157bb7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_431e60603db45d8daca5b2c4c28f8cf4095cf6e4118d553a9445400c157bb7dd->leave($__internal_431e60603db45d8daca5b2c4c28f8cf4095cf6e4118d553a9445400c157bb7dd_prof);

    }

    // line 7
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_f4d5d52b528d227cbf54a6c497294969445ca1bf8f354d0f932ec203424bb455 = $this->env->getExtension("native_profiler");
        $__internal_f4d5d52b528d227cbf54a6c497294969445ca1bf8f354d0f932ec203424bb455->enter($__internal_f4d5d52b528d227cbf54a6c497294969445ca1bf8f354d0f932ec203424bb455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("unit.new.name"), "html", null, true);
        
        $__internal_f4d5d52b528d227cbf54a6c497294969445ca1bf8f354d0f932ec203424bb455->leave($__internal_f4d5d52b528d227cbf54a6c497294969445ca1bf8f354d0f932ec203424bb455_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c648ffb7a84e8a93a3ca8f2128d87199e3aebcd66caac8b4ee5a9dc148fa75b = $this->env->getExtension("native_profiler");
        $__internal_4c648ffb7a84e8a93a3ca8f2128d87199e3aebcd66caac8b4ee5a9dc148fa75b->enter($__internal_4c648ffb7a84e8a93a3ca8f2128d87199e3aebcd66caac8b4ee5a9dc148fa75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:unit:new.html.twig", 9)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "form_name" => $this->env->getExtension('translator')->trans("unit.new.name"), "submit_name" => $this->env->getExtension('translator')->trans("unit.new.submit"))));
        
        $__internal_4c648ffb7a84e8a93a3ca8f2128d87199e3aebcd66caac8b4ee5a9dc148fa75b->leave($__internal_4c648ffb7a84e8a93a3ca8f2128d87199e3aebcd66caac8b4ee5a9dc148fa75b_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:unit:new.html.twig";
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
/*      {% block breadcrumbActive %}{{ 'unit.new.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': form ,'form_name' : 'unit.new.name'|trans ,'submit_name': 'unit.new.submit'|trans } %}*/
/* {% endblock %}*/
/* */
