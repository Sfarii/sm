<?php

/* ISETSOMagazineBundle:returnarticle_centralStore:check.html.twig */
class __TwigTemplate_6ded2e7a4e0d64e75b3fd942fc8218f5defdf66d0f188390eb16d96556e93a4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:returnarticle_centralStore:check.html.twig", 1);
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
        $__internal_8eec079201d522939ceb829569e6431b7aa42c9fcf09fed9a746b478d9d2486c = $this->env->getExtension("native_profiler");
        $__internal_8eec079201d522939ceb829569e6431b7aa42c9fcf09fed9a746b478d9d2486c->enter($__internal_8eec079201d522939ceb829569e6431b7aa42c9fcf09fed9a746b478d9d2486c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:returnarticle_centralStore:check.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eec079201d522939ceb829569e6431b7aa42c9fcf09fed9a746b478d9d2486c->leave($__internal_8eec079201d522939ceb829569e6431b7aa42c9fcf09fed9a746b478d9d2486c_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_bc07a76c3cc1d50d2aec08fac76619ab94df31146eff4cd67ef4f4ecb042e3bd = $this->env->getExtension("native_profiler");
        $__internal_bc07a76c3cc1d50d2aec08fac76619ab94df31146eff4cd67ef4f4ecb042e3bd->enter($__internal_bc07a76c3cc1d50d2aec08fac76619ab94df31146eff4cd67ef4f4ecb042e3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("returnArticle_centralStore_index");
        echo "\">
       ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_bc07a76c3cc1d50d2aec08fac76619ab94df31146eff4cd67ef4f4ecb042e3bd->leave($__internal_bc07a76c3cc1d50d2aec08fac76619ab94df31146eff4cd67ef4f4ecb042e3bd_prof);

    }

    // line 7
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_3246de69646d566549a9dd88f1486d080fd73ee0d980607636cc606aa12862ba = $this->env->getExtension("native_profiler");
        $__internal_3246de69646d566549a9dd88f1486d080fd73ee0d980607636cc606aa12862ba->enter($__internal_3246de69646d566549a9dd88f1486d080fd73ee0d980607636cc606aa12862ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.edit.name"), "html", null, true);
        
        $__internal_3246de69646d566549a9dd88f1486d080fd73ee0d980607636cc606aa12862ba->leave($__internal_3246de69646d566549a9dd88f1486d080fd73ee0d980607636cc606aa12862ba_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_758137aad67c940738f05ac878e911153a623da19bdd6925489d22fb72075716 = $this->env->getExtension("native_profiler");
        $__internal_758137aad67c940738f05ac878e911153a623da19bdd6925489d22fb72075716->enter($__internal_758137aad67c940738f05ac878e911153a623da19bdd6925489d22fb72075716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:returnarticle_centralStore:check.html.twig", 9)->display(array_merge($context, array("form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "form_name" => $this->env->getExtension('translator')->trans("returnarticle.edit.name"), "submit_name" => $this->env->getExtension('translator')->trans("returnarticle.edit.submit"))));
        
        $__internal_758137aad67c940738f05ac878e911153a623da19bdd6925489d22fb72075716->leave($__internal_758137aad67c940738f05ac878e911153a623da19bdd6925489d22fb72075716_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:returnarticle_centralStore:check.html.twig";
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
/*     <a href="{{ path('returnArticle_centralStore_index') }}">*/
/*        {{ 'returnarticle.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* 	 {% block breadcrumbActive %}{{ 'returnarticle.edit.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': edit_form ,'form_name' : 'returnarticle.edit.name'|trans ,'submit_name': 'returnarticle.edit.submit'|trans } %}*/
/* {% endblock %}*/
/* */
