<?php

/* ISETSOMagazineBundle:typelocal:edit.html.twig */
class __TwigTemplate_a62a180cbd7b2772cead0079b3ae47716ef79ab04a561dd46f813dbae28fc87b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:typelocal:edit.html.twig", 1);
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
        $__internal_90568ef7851becacefa65ed92e9480c98675652c862ab5f9533ea377f5285982 = $this->env->getExtension("native_profiler");
        $__internal_90568ef7851becacefa65ed92e9480c98675652c862ab5f9533ea377f5285982->enter($__internal_90568ef7851becacefa65ed92e9480c98675652c862ab5f9533ea377f5285982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:typelocal:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90568ef7851becacefa65ed92e9480c98675652c862ab5f9533ea377f5285982->leave($__internal_90568ef7851becacefa65ed92e9480c98675652c862ab5f9533ea377f5285982_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_8422df2c40942d2be10a395b34979664b0b4619be2ced2275b2d8897ed8d73c7 = $this->env->getExtension("native_profiler");
        $__internal_8422df2c40942d2be10a395b34979664b0b4619be2ced2275b2d8897ed8d73c7->enter($__internal_8422df2c40942d2be10a395b34979664b0b4619be2ced2275b2d8897ed8d73c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("typelocal_index");
        echo "\">
       ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("typelocal.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_8422df2c40942d2be10a395b34979664b0b4619be2ced2275b2d8897ed8d73c7->leave($__internal_8422df2c40942d2be10a395b34979664b0b4619be2ced2275b2d8897ed8d73c7_prof);

    }

    // line 9
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_74ad0c82d9228ebc0fce96a38e2d2416880c5b11e1f61415a8d378eb67b4feca = $this->env->getExtension("native_profiler");
        $__internal_74ad0c82d9228ebc0fce96a38e2d2416880c5b11e1f61415a8d378eb67b4feca->enter($__internal_74ad0c82d9228ebc0fce96a38e2d2416880c5b11e1f61415a8d378eb67b4feca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("typelocal.edit.name"), "html", null, true);
        echo "
";
        
        $__internal_74ad0c82d9228ebc0fce96a38e2d2416880c5b11e1f61415a8d378eb67b4feca->leave($__internal_74ad0c82d9228ebc0fce96a38e2d2416880c5b11e1f61415a8d378eb67b4feca_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_524eb4d5ab6703e211276232e563b662c0ec79c86be82ef9483e48fa695cdeff = $this->env->getExtension("native_profiler");
        $__internal_524eb4d5ab6703e211276232e563b662c0ec79c86be82ef9483e48fa695cdeff->enter($__internal_524eb4d5ab6703e211276232e563b662c0ec79c86be82ef9483e48fa695cdeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:typelocal:edit.html.twig", 14)->display(array_merge($context, array("form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "form_name" => $this->env->getExtension('translator')->trans("typelocal.edit.name"), "submit_name" => $this->env->getExtension('translator')->trans("typelocal.edit.submit"))));
        
        $__internal_524eb4d5ab6703e211276232e563b662c0ec79c86be82ef9483e48fa695cdeff->leave($__internal_524eb4d5ab6703e211276232e563b662c0ec79c86be82ef9483e48fa695cdeff_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:typelocal:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 14,  73 => 13,  63 => 10,  57 => 9,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/*     <a href="{{ path('typelocal_index') }}">*/
/*        {{ 'typelocal.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
/* {% block breadcrumbActive %}*/
/*     {{ 'typelocal.edit.name'|trans }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': edit_form ,'form_name' : 'typelocal.edit.name'|trans ,'submit_name': 'typelocal.edit.submit'|trans } %}*/
/* {% endblock %}*/
/* */
