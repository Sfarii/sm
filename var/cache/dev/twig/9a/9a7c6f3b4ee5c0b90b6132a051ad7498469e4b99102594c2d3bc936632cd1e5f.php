<?php

/* ISETSOMagazineBundle:activitydomain:edit.html.twig */
class __TwigTemplate_550480681acfc7b54e03084465c4579c1c7277a334c3c8ab38388d1dcf51cbe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:activitydomain:edit.html.twig", 1);
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
        $__internal_ac2c52c77102b7e1dc7de65b0931f8e95f54164ced74728c0b2923d0d6e9ef21 = $this->env->getExtension("native_profiler");
        $__internal_ac2c52c77102b7e1dc7de65b0931f8e95f54164ced74728c0b2923d0d6e9ef21->enter($__internal_ac2c52c77102b7e1dc7de65b0931f8e95f54164ced74728c0b2923d0d6e9ef21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:activitydomain:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac2c52c77102b7e1dc7de65b0931f8e95f54164ced74728c0b2923d0d6e9ef21->leave($__internal_ac2c52c77102b7e1dc7de65b0931f8e95f54164ced74728c0b2923d0d6e9ef21_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_1a7420c99ec0391a5d04eaccb86d9c199216068aac398b3b48bbaec7f7aaceed = $this->env->getExtension("native_profiler");
        $__internal_1a7420c99ec0391a5d04eaccb86d9c199216068aac398b3b48bbaec7f7aaceed->enter($__internal_1a7420c99ec0391a5d04eaccb86d9c199216068aac398b3b48bbaec7f7aaceed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("activitydomain_index");
        echo "\">
       ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitydomain.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_1a7420c99ec0391a5d04eaccb86d9c199216068aac398b3b48bbaec7f7aaceed->leave($__internal_1a7420c99ec0391a5d04eaccb86d9c199216068aac398b3b48bbaec7f7aaceed_prof);

    }

    // line 7
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_80d4e7b1aaee9a885cf3a6842536ae5c00f51077dba14533ae4595423807b4b5 = $this->env->getExtension("native_profiler");
        $__internal_80d4e7b1aaee9a885cf3a6842536ae5c00f51077dba14533ae4595423807b4b5->enter($__internal_80d4e7b1aaee9a885cf3a6842536ae5c00f51077dba14533ae4595423807b4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitydomain.edit.name"), "html", null, true);
        echo "
";
        
        $__internal_80d4e7b1aaee9a885cf3a6842536ae5c00f51077dba14533ae4595423807b4b5->leave($__internal_80d4e7b1aaee9a885cf3a6842536ae5c00f51077dba14533ae4595423807b4b5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_351f8bda25b7d9635dbc779a213bc242bc7c25d5e6e8473032dc69add0a0da19 = $this->env->getExtension("native_profiler");
        $__internal_351f8bda25b7d9635dbc779a213bc242bc7c25d5e6e8473032dc69add0a0da19->enter($__internal_351f8bda25b7d9635dbc779a213bc242bc7c25d5e6e8473032dc69add0a0da19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:activitydomain:edit.html.twig", 11)->display(array_merge($context, array("form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "form_name" => $this->env->getExtension('translator')->trans("activitydomain.edit.name"), "submit_name" => $this->env->getExtension('translator')->trans("activitydomain.edit.submit"))));
        
        $__internal_351f8bda25b7d9635dbc779a213bc242bc7c25d5e6e8473032dc69add0a0da19->leave($__internal_351f8bda25b7d9635dbc779a213bc242bc7c25d5e6e8473032dc69add0a0da19_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:activitydomain:edit.html.twig";
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
/*     <a href="{{ path('activitydomain_index') }}">*/
/*        {{ 'activitydomain.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* {% block breadcrumbActive %}*/
/*     {{ 'activitydomain.edit.name'|trans }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': edit_form ,'form_name' : 'activitydomain.edit.name'|trans ,'submit_name': 'activitydomain.edit.submit'|trans } %}*/
/* {% endblock %}*/
/* */
