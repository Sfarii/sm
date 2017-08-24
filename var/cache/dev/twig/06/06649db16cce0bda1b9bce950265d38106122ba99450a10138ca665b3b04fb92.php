<?php

/* ISETSOMagazineBundle:magazine_discharge:check.html.twig */
class __TwigTemplate_d9e72b3f0e8eebac9103f7f46fd4d8c9bea520edcd1cef3eb08f26e63cab68dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:magazine_discharge:check.html.twig", 1);
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
        $__internal_6769556d1e7c90343805fafd32fc7f1708adc8cf58e72653843fccf5ffef690c = $this->env->getExtension("native_profiler");
        $__internal_6769556d1e7c90343805fafd32fc7f1708adc8cf58e72653843fccf5ffef690c->enter($__internal_6769556d1e7c90343805fafd32fc7f1708adc8cf58e72653843fccf5ffef690c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:magazine_discharge:check.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6769556d1e7c90343805fafd32fc7f1708adc8cf58e72653843fccf5ffef690c->leave($__internal_6769556d1e7c90343805fafd32fc7f1708adc8cf58e72653843fccf5ffef690c_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_44147de3ef52121087695aaed881ab71019615b26fa805461742512a8fbb66cd = $this->env->getExtension("native_profiler");
        $__internal_44147de3ef52121087695aaed881ab71019615b26fa805461742512a8fbb66cd->enter($__internal_44147de3ef52121087695aaed881ab71019615b26fa805461742512a8fbb66cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("magazine_magazinedischarge_index", array("id" => $this->getAttribute($this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "fromMagazine", array()), "id", array()))), "html", null, true);
        echo "\">
       ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazineDischarge.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_44147de3ef52121087695aaed881ab71019615b26fa805461742512a8fbb66cd->leave($__internal_44147de3ef52121087695aaed881ab71019615b26fa805461742512a8fbb66cd_prof);

    }

    // line 7
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_db760950011e672e49260cfad16d5196cae5eaef2134a5c895ccf83d5cf5a801 = $this->env->getExtension("native_profiler");
        $__internal_db760950011e672e49260cfad16d5196cae5eaef2134a5c895ccf83d5cf5a801->enter($__internal_db760950011e672e49260cfad16d5196cae5eaef2134a5c895ccf83d5cf5a801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazineDischarge.edit.name"), "html", null, true);
        echo "
";
        
        $__internal_db760950011e672e49260cfad16d5196cae5eaef2134a5c895ccf83d5cf5a801->leave($__internal_db760950011e672e49260cfad16d5196cae5eaef2134a5c895ccf83d5cf5a801_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb6983977820559ba23aa4c48ea7d905735791796f9e5d07e118957141b22968 = $this->env->getExtension("native_profiler");
        $__internal_bb6983977820559ba23aa4c48ea7d905735791796f9e5d07e118957141b22968->enter($__internal_bb6983977820559ba23aa4c48ea7d905735791796f9e5d07e118957141b22968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:magazine_discharge:check.html.twig", 11)->display(array_merge($context, array("form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "form_name" => $this->env->getExtension('translator')->trans("magazineDischarge.edit.name"), "submit_name" => $this->env->getExtension('translator')->trans("magazineDischarge.edit.submit"))));
        
        $__internal_bb6983977820559ba23aa4c48ea7d905735791796f9e5d07e118957141b22968->leave($__internal_bb6983977820559ba23aa4c48ea7d905735791796f9e5d07e118957141b22968_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:magazine_discharge:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 11,  73 => 10,  63 => 8,  57 => 7,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('magazine_magazinedischarge_index',{ 'id' : magazine.fromMagazine.id}) }}">*/
/*        {{ 'magazineDischarge.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* {% block breadcrumbActive %}*/
/*     {{ 'magazineDischarge.edit.name'|trans }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': edit_form ,'form_name' : 'magazineDischarge.edit.name'|trans ,'submit_name': 'magazineDischarge.edit.submit'|trans } %}*/
/* {% endblock %}*/
/* */
