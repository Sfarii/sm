<?php

/* ISETSOMagazineBundle:returnarticle_SubStore:check.html.twig */
class __TwigTemplate_78f8a302c2a9b99c5daff490b21246dc659344b60c8c617ef852972e4750da6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:returnarticle_SubStore:check.html.twig", 1);
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
        $__internal_715ba084a4ecc3fc89fa6944218ec2c4c3a7f4cbf1feb06a3244dcc31c66f0bb = $this->env->getExtension("native_profiler");
        $__internal_715ba084a4ecc3fc89fa6944218ec2c4c3a7f4cbf1feb06a3244dcc31c66f0bb->enter($__internal_715ba084a4ecc3fc89fa6944218ec2c4c3a7f4cbf1feb06a3244dcc31c66f0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:returnarticle_SubStore:check.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_715ba084a4ecc3fc89fa6944218ec2c4c3a7f4cbf1feb06a3244dcc31c66f0bb->leave($__internal_715ba084a4ecc3fc89fa6944218ec2c4c3a7f4cbf1feb06a3244dcc31c66f0bb_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_81c6ee8b7b6184747cacdd2c1bd018509c864214b0a258a3eafc7810b48adc4e = $this->env->getExtension("native_profiler");
        $__internal_81c6ee8b7b6184747cacdd2c1bd018509c864214b0a258a3eafc7810b48adc4e->enter($__internal_81c6ee8b7b6184747cacdd2c1bd018509c864214b0a258a3eafc7810b48adc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("returnarticle_subStore_index", array("id" => $this->getAttribute($this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "toSubStore", array()), "id", array()))), "html", null, true);
        echo "\">
       ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_81c6ee8b7b6184747cacdd2c1bd018509c864214b0a258a3eafc7810b48adc4e->leave($__internal_81c6ee8b7b6184747cacdd2c1bd018509c864214b0a258a3eafc7810b48adc4e_prof);

    }

    // line 7
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_75aaaecf179137f3523a749ed8fe93bdcf5043dc3655fe19a3481c23656b01cf = $this->env->getExtension("native_profiler");
        $__internal_75aaaecf179137f3523a749ed8fe93bdcf5043dc3655fe19a3481c23656b01cf->enter($__internal_75aaaecf179137f3523a749ed8fe93bdcf5043dc3655fe19a3481c23656b01cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.edit.name"), "html", null, true);
        
        $__internal_75aaaecf179137f3523a749ed8fe93bdcf5043dc3655fe19a3481c23656b01cf->leave($__internal_75aaaecf179137f3523a749ed8fe93bdcf5043dc3655fe19a3481c23656b01cf_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8cf03c169e7eda02a24120a1e04729a37388693e401e3168e487bfe8474000f = $this->env->getExtension("native_profiler");
        $__internal_c8cf03c169e7eda02a24120a1e04729a37388693e401e3168e487bfe8474000f->enter($__internal_c8cf03c169e7eda02a24120a1e04729a37388693e401e3168e487bfe8474000f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:returnarticle_SubStore:check.html.twig", 9)->display(array_merge($context, array("form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "form_name" => $this->env->getExtension('translator')->trans("returnarticle.edit.name"), "submit_name" => $this->env->getExtension('translator')->trans("returnarticle.edit.submit"))));
        
        $__internal_c8cf03c169e7eda02a24120a1e04729a37388693e401e3168e487bfe8474000f->leave($__internal_c8cf03c169e7eda02a24120a1e04729a37388693e401e3168e487bfe8474000f_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:returnarticle_SubStore:check.html.twig";
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
/*     <a href="{{ path('returnarticle_subStore_index', { 'id' : returnArticle.toSubStore.id}) }}">*/
/*        {{ 'returnarticle.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* 	 {% block breadcrumbActive %}{{ 'returnarticle.edit.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': edit_form ,'form_name' : 'returnarticle.edit.name'|trans ,'submit_name': 'returnarticle.edit.submit'|trans } %}*/
/* {% endblock %}*/
/* */
