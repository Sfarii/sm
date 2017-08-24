<?php

/* ISETSOMagazineBundle:subfamily:new.html.twig */
class __TwigTemplate_d5a35663d0e22db03b9bf04fe4283083f937d1cfa299501a625b58e2739bb66b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:subfamily:new.html.twig", 1);
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
        $__internal_690ef5e7e4435f4b921527cb6c1a2a41d27afaac3271754e46fe0222b66d7a76 = $this->env->getExtension("native_profiler");
        $__internal_690ef5e7e4435f4b921527cb6c1a2a41d27afaac3271754e46fe0222b66d7a76->enter($__internal_690ef5e7e4435f4b921527cb6c1a2a41d27afaac3271754e46fe0222b66d7a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:subfamily:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_690ef5e7e4435f4b921527cb6c1a2a41d27afaac3271754e46fe0222b66d7a76->leave($__internal_690ef5e7e4435f4b921527cb6c1a2a41d27afaac3271754e46fe0222b66d7a76_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_bf8ed1afd7973b29ed4937ee2a47762626d631de79121012a31069a356e065e1 = $this->env->getExtension("native_profiler");
        $__internal_bf8ed1afd7973b29ed4937ee2a47762626d631de79121012a31069a356e065e1->enter($__internal_bf8ed1afd7973b29ed4937ee2a47762626d631de79121012a31069a356e065e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subfamily_index", array("id" => $this->getAttribute((isset($context["family"]) ? $context["family"] : $this->getContext($context, "family")), "id", array()))), "html", null, true);
        echo "\">
       ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("subfamily.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_bf8ed1afd7973b29ed4937ee2a47762626d631de79121012a31069a356e065e1->leave($__internal_bf8ed1afd7973b29ed4937ee2a47762626d631de79121012a31069a356e065e1_prof);

    }

    // line 9
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_7d6876b394567f3d101a6dadc830468e4cc3c592a61e07cacc6e58fb395d897b = $this->env->getExtension("native_profiler");
        $__internal_7d6876b394567f3d101a6dadc830468e4cc3c592a61e07cacc6e58fb395d897b->enter($__internal_7d6876b394567f3d101a6dadc830468e4cc3c592a61e07cacc6e58fb395d897b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("subfamily.new.name"), "html", null, true);
        echo "
";
        
        $__internal_7d6876b394567f3d101a6dadc830468e4cc3c592a61e07cacc6e58fb395d897b->leave($__internal_7d6876b394567f3d101a6dadc830468e4cc3c592a61e07cacc6e58fb395d897b_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_b697624ba3f0b2660aa03e79abc4a95eabb325c8f4bf9b6ec15e93980b5c2d97 = $this->env->getExtension("native_profiler");
        $__internal_b697624ba3f0b2660aa03e79abc4a95eabb325c8f4bf9b6ec15e93980b5c2d97->enter($__internal_b697624ba3f0b2660aa03e79abc4a95eabb325c8f4bf9b6ec15e93980b5c2d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:subfamily:new.html.twig", 14)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "form_name" => $this->env->getExtension('translator')->trans("subfamily.new.name"), "submit_name" => $this->env->getExtension('translator')->trans("subfamily.new.submit"))));
        
        $__internal_b697624ba3f0b2660aa03e79abc4a95eabb325c8f4bf9b6ec15e93980b5c2d97->leave($__internal_b697624ba3f0b2660aa03e79abc4a95eabb325c8f4bf9b6ec15e93980b5c2d97_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:subfamily:new.html.twig";
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
/*     <a href="{{ path('subfamily_index',{ 'id' : family.id }) }}">*/
/*        {{ 'subfamily.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
/* {% block breadcrumbActive %}*/
/*     {{ 'subfamily.new.name'|trans }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': form ,'form_name' : 'subfamily.new.name'|trans ,'submit_name': 'subfamily.new.submit'|trans } %}*/
/* {% endblock %}*/
/* */
