<?php

/* ISETSOMagazineBundle:familyconsumable:edit.html.twig */
class __TwigTemplate_310636fe7d7f7f0dcd419756d7f87808001e16f18d3a2190930f6a9a6e09cd7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:familyconsumable:edit.html.twig", 1);
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
        $__internal_a09626d3f0e9fad357d2fb05df8bb672de297b919e4b862906f0db0f680f4bae = $this->env->getExtension("native_profiler");
        $__internal_a09626d3f0e9fad357d2fb05df8bb672de297b919e4b862906f0db0f680f4bae->enter($__internal_a09626d3f0e9fad357d2fb05df8bb672de297b919e4b862906f0db0f680f4bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:familyconsumable:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a09626d3f0e9fad357d2fb05df8bb672de297b919e4b862906f0db0f680f4bae->leave($__internal_a09626d3f0e9fad357d2fb05df8bb672de297b919e4b862906f0db0f680f4bae_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_e57556eb7239ec87bc493453abbca585e1f17bfcbac461537afc8d722e17cd62 = $this->env->getExtension("native_profiler");
        $__internal_e57556eb7239ec87bc493453abbca585e1f17bfcbac461537afc8d722e17cd62->enter($__internal_e57556eb7239ec87bc493453abbca585e1f17bfcbac461537afc8d722e17cd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("familyconsumable_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.list.name"), "html", null, true);
        echo "</a>
";
        
        $__internal_e57556eb7239ec87bc493453abbca585e1f17bfcbac461537afc8d722e17cd62->leave($__internal_e57556eb7239ec87bc493453abbca585e1f17bfcbac461537afc8d722e17cd62_prof);

    }

    // line 5
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_2780fcfde13c05e93248ef000a08ba87e71cb114e8b85069617a14430f9094d8 = $this->env->getExtension("native_profiler");
        $__internal_2780fcfde13c05e93248ef000a08ba87e71cb114e8b85069617a14430f9094d8->enter($__internal_2780fcfde13c05e93248ef000a08ba87e71cb114e8b85069617a14430f9094d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.edit.name"), "html", null, true);
        echo "
";
        
        $__internal_2780fcfde13c05e93248ef000a08ba87e71cb114e8b85069617a14430f9094d8->leave($__internal_2780fcfde13c05e93248ef000a08ba87e71cb114e8b85069617a14430f9094d8_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ce2a8bba63a1cb6a9459cb714bfe6a86890a2f3cff79d43261f8b4ea7eff7a5 = $this->env->getExtension("native_profiler");
        $__internal_4ce2a8bba63a1cb6a9459cb714bfe6a86890a2f3cff79d43261f8b4ea7eff7a5->enter($__internal_4ce2a8bba63a1cb6a9459cb714bfe6a86890a2f3cff79d43261f8b4ea7eff7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:familyconsumable:edit.html.twig", 9)->display(array_merge($context, array("form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "form_name" => $this->env->getExtension('translator')->trans("family.edit.name"), "submit_name" => $this->env->getExtension('translator')->trans("family.edit.submit"))));
        
        $__internal_4ce2a8bba63a1cb6a9459cb714bfe6a86890a2f3cff79d43261f8b4ea7eff7a5->leave($__internal_4ce2a8bba63a1cb6a9459cb714bfe6a86890a2f3cff79d43261f8b4ea7eff7a5_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:familyconsumable:edit.html.twig";
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
/*     <a href="{{ path('familyconsumable_index')}}">{{ 'family.list.name'|trans }}</a>*/
/* {% endblock %}*/
/* {% block breadcrumbActive %}*/
/*     {{ 'family.edit.name'|trans }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': edit_form ,'form_name' : 'family.edit.name'|trans ,'submit_name': 'family.edit.submit'|trans } %}*/
/* {% endblock %}*/
/* */
