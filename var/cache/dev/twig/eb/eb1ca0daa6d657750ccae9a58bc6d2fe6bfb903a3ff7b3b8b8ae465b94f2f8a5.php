<?php

/* ISETSOMagazineBundle:discharge_article_magazine:check.html.twig */
class __TwigTemplate_b4e1eeb775a256db17aa21df76c28ff8624ef78d38b4557687bfd00134a43737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:discharge_article_magazine:check.html.twig", 1);
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
        $__internal_258446e443b060f09fb5c335210d527d9084c359a34354d67663dd9a082422c4 = $this->env->getExtension("native_profiler");
        $__internal_258446e443b060f09fb5c335210d527d9084c359a34354d67663dd9a082422c4->enter($__internal_258446e443b060f09fb5c335210d527d9084c359a34354d67663dd9a082422c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:discharge_article_magazine:check.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_258446e443b060f09fb5c335210d527d9084c359a34354d67663dd9a082422c4->leave($__internal_258446e443b060f09fb5c335210d527d9084c359a34354d67663dd9a082422c4_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_dc27295b47ab18dbbbcab16fb21b6c2f1365a7d3765d33e4a0b273b3a9bd62f3 = $this->env->getExtension("native_profiler");
        $__internal_dc27295b47ab18dbbbcab16fb21b6c2f1365a7d3765d33e4a0b273b3a9bd62f3->enter($__internal_dc27295b47ab18dbbbcab16fb21b6c2f1365a7d3765d33e4a0b273b3a9bd62f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_dc27295b47ab18dbbbcab16fb21b6c2f1365a7d3765d33e4a0b273b3a9bd62f3->leave($__internal_dc27295b47ab18dbbbcab16fb21b6c2f1365a7d3765d33e4a0b273b3a9bd62f3_prof);

    }

    // line 7
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_11146cc6797a1645ad8ba703b74f8176696218c4d9aac949fd74a8d26991bc84 = $this->env->getExtension("native_profiler");
        $__internal_11146cc6797a1645ad8ba703b74f8176696218c4d9aac949fd74a8d26991bc84->enter($__internal_11146cc6797a1645ad8ba703b74f8176696218c4d9aac949fd74a8d26991bc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.edit.name"), "html", null, true);
        
        $__internal_11146cc6797a1645ad8ba703b74f8176696218c4d9aac949fd74a8d26991bc84->leave($__internal_11146cc6797a1645ad8ba703b74f8176696218c4d9aac949fd74a8d26991bc84_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_e379269f0ad2efacfd2aaad80d1463d09820110b1332aa1022283cee94ee544b = $this->env->getExtension("native_profiler");
        $__internal_e379269f0ad2efacfd2aaad80d1463d09820110b1332aa1022283cee94ee544b->enter($__internal_e379269f0ad2efacfd2aaad80d1463d09820110b1332aa1022283cee94ee544b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:discharge_article_magazine:check.html.twig", 9)->display(array_merge($context, array("form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "form_name" => $this->env->getExtension('translator')->trans("orderarticle.edit.name"), "submit_name" => $this->env->getExtension('translator')->trans("orderarticle.edit.submit"))));
        
        $__internal_e379269f0ad2efacfd2aaad80d1463d09820110b1332aa1022283cee94ee544b->leave($__internal_e379269f0ad2efacfd2aaad80d1463d09820110b1332aa1022283cee94ee544b_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:discharge_article_magazine:check.html.twig";
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
