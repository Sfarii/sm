<?php

/* ISETSOMagazineBundle:discharge_article_user:check.html.twig */
class __TwigTemplate_8f5fb33324ac8b9afd56b83a80e09c83a2ac30a80e8f95bfd5600619ed52370f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:discharge_article_user:check.html.twig", 1);
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
        $__internal_c9b800c62c729a9341e26ce06b472b1bd5575bdc54647ee62fff7ffa8190249d = $this->env->getExtension("native_profiler");
        $__internal_c9b800c62c729a9341e26ce06b472b1bd5575bdc54647ee62fff7ffa8190249d->enter($__internal_c9b800c62c729a9341e26ce06b472b1bd5575bdc54647ee62fff7ffa8190249d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:discharge_article_user:check.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9b800c62c729a9341e26ce06b472b1bd5575bdc54647ee62fff7ffa8190249d->leave($__internal_c9b800c62c729a9341e26ce06b472b1bd5575bdc54647ee62fff7ffa8190249d_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_1b080078d4911f8f0a3c48e789080c9100fdd70057467ec44a17469f335b3fb3 = $this->env->getExtension("native_profiler");
        $__internal_1b080078d4911f8f0a3c48e789080c9100fdd70057467ec44a17469f335b3fb3->enter($__internal_1b080078d4911f8f0a3c48e789080c9100fdd70057467ec44a17469f335b3fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("discharge_article_to_user_index");
        echo "\">
       ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_1b080078d4911f8f0a3c48e789080c9100fdd70057467ec44a17469f335b3fb3->leave($__internal_1b080078d4911f8f0a3c48e789080c9100fdd70057467ec44a17469f335b3fb3_prof);

    }

    // line 7
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_92b41312cc8de6e8689d85a695014738f87fc84ff18ae3b3b59a705201dcd335 = $this->env->getExtension("native_profiler");
        $__internal_92b41312cc8de6e8689d85a695014738f87fc84ff18ae3b3b59a705201dcd335->enter($__internal_92b41312cc8de6e8689d85a695014738f87fc84ff18ae3b3b59a705201dcd335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.edit.name"), "html", null, true);
        
        $__internal_92b41312cc8de6e8689d85a695014738f87fc84ff18ae3b3b59a705201dcd335->leave($__internal_92b41312cc8de6e8689d85a695014738f87fc84ff18ae3b3b59a705201dcd335_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_525c32c887ffe08a98e33d99e098d7c01ae4d0b470bc5ec1f0b302ac6cc3f8c4 = $this->env->getExtension("native_profiler");
        $__internal_525c32c887ffe08a98e33d99e098d7c01ae4d0b470bc5ec1f0b302ac6cc3f8c4->enter($__internal_525c32c887ffe08a98e33d99e098d7c01ae4d0b470bc5ec1f0b302ac6cc3f8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:discharge_article_user:check.html.twig", 9)->display(array_merge($context, array("form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "form_name" => $this->env->getExtension('translator')->trans("orderarticle.edit.name"), "submit_name" => $this->env->getExtension('translator')->trans("orderarticle.edit.submit"))));
        
        $__internal_525c32c887ffe08a98e33d99e098d7c01ae4d0b470bc5ec1f0b302ac6cc3f8c4->leave($__internal_525c32c887ffe08a98e33d99e098d7c01ae4d0b470bc5ec1f0b302ac6cc3f8c4_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:discharge_article_user:check.html.twig";
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
/*     <a href="{{ path('discharge_article_to_user_index') }}">*/
/*        {{ 'dischargearticle.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/*      {% block breadcrumbActive %}{{ 'dischargearticle.edit.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': edit_form ,'form_name' : 'orderarticle.edit.name'|trans ,'submit_name': 'orderarticle.edit.submit'|trans } %}*/
/* {% endblock %}*/
/* */
