<?php

/* ISETSOMagazineBundle:familydurable:new.html.twig */
class __TwigTemplate_63dac62c679737a864e8650d94a5f43661ab4588c350cbc528bf39e29d44bf73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:familydurable:new.html.twig", 1);
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
        $__internal_a671ccf6ac6ed0d2f221b9c02e069b891dd1a0b021f13477140bf04b39740c96 = $this->env->getExtension("native_profiler");
        $__internal_a671ccf6ac6ed0d2f221b9c02e069b891dd1a0b021f13477140bf04b39740c96->enter($__internal_a671ccf6ac6ed0d2f221b9c02e069b891dd1a0b021f13477140bf04b39740c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:familydurable:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a671ccf6ac6ed0d2f221b9c02e069b891dd1a0b021f13477140bf04b39740c96->leave($__internal_a671ccf6ac6ed0d2f221b9c02e069b891dd1a0b021f13477140bf04b39740c96_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_ce6c2701dcaaa3cc489778a84e7c3897bd84066ca0321af88986b2cc5fccfc9d = $this->env->getExtension("native_profiler");
        $__internal_ce6c2701dcaaa3cc489778a84e7c3897bd84066ca0321af88986b2cc5fccfc9d->enter($__internal_ce6c2701dcaaa3cc489778a84e7c3897bd84066ca0321af88986b2cc5fccfc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("familydurable_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.list.name"), "html", null, true);
        echo "</a>
";
        
        $__internal_ce6c2701dcaaa3cc489778a84e7c3897bd84066ca0321af88986b2cc5fccfc9d->leave($__internal_ce6c2701dcaaa3cc489778a84e7c3897bd84066ca0321af88986b2cc5fccfc9d_prof);

    }

    // line 5
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_92c50580cba553f87a555f3a9ce87efa94c49492bdbdb084e1cdaae4fc9b7173 = $this->env->getExtension("native_profiler");
        $__internal_92c50580cba553f87a555f3a9ce87efa94c49492bdbdb084e1cdaae4fc9b7173->enter($__internal_92c50580cba553f87a555f3a9ce87efa94c49492bdbdb084e1cdaae4fc9b7173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.new.name"), "html", null, true);
        echo "
";
        
        $__internal_92c50580cba553f87a555f3a9ce87efa94c49492bdbdb084e1cdaae4fc9b7173->leave($__internal_92c50580cba553f87a555f3a9ce87efa94c49492bdbdb084e1cdaae4fc9b7173_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0230962800da42778a01e9ee1feea12a5d7dbfedd27ebe1d26e9758b549ca8a = $this->env->getExtension("native_profiler");
        $__internal_d0230962800da42778a01e9ee1feea12a5d7dbfedd27ebe1d26e9758b549ca8a->enter($__internal_d0230962800da42778a01e9ee1feea12a5d7dbfedd27ebe1d26e9758b549ca8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:familydurable:new.html.twig", 9)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "form_name" => $this->env->getExtension('translator')->trans("family.new.name"), "submit_name" => $this->env->getExtension('translator')->trans("family.new.submit"))));
        
        $__internal_d0230962800da42778a01e9ee1feea12a5d7dbfedd27ebe1d26e9758b549ca8a->leave($__internal_d0230962800da42778a01e9ee1feea12a5d7dbfedd27ebe1d26e9758b549ca8a_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:familydurable:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 9,  70 => 8,  60 => 6,  54 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('familydurable_index')}}">{{ 'family.list.name'|trans }}</a>*/
/* {% endblock %}*/
/* {% block breadcrumbActive %}*/
/*     {{ 'family.new.name'|trans }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': form ,'form_name' : 'family.new.name'|trans ,'submit_name': 'family.new.submit'|trans } %}*/
/* {% endblock %}*/
/* */
