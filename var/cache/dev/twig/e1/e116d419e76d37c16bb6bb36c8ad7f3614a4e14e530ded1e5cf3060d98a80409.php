<?php

/* ISETSOMagazineBundle:provider:edit.html.twig */
class __TwigTemplate_bb13072919bb0a6f8910fc0ef6c36b081fdfb7be64a28dc239c45594852caddf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:provider:edit.html.twig", 1);
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
        $__internal_41f5d23ea50b34a41d44b1938d272660875786b1c6bdc95ef3c407fa6bf4a8ee = $this->env->getExtension("native_profiler");
        $__internal_41f5d23ea50b34a41d44b1938d272660875786b1c6bdc95ef3c407fa6bf4a8ee->enter($__internal_41f5d23ea50b34a41d44b1938d272660875786b1c6bdc95ef3c407fa6bf4a8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:provider:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41f5d23ea50b34a41d44b1938d272660875786b1c6bdc95ef3c407fa6bf4a8ee->leave($__internal_41f5d23ea50b34a41d44b1938d272660875786b1c6bdc95ef3c407fa6bf4a8ee_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_b9f26b3aece5de96694c672d0d051b562a823f54d0ff7298f0886edddad0dd56 = $this->env->getExtension("native_profiler");
        $__internal_b9f26b3aece5de96694c672d0d051b562a823f54d0ff7298f0886edddad0dd56->enter($__internal_b9f26b3aece5de96694c672d0d051b562a823f54d0ff7298f0886edddad0dd56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("provider_index");
        echo "\">
       ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("provider.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_b9f26b3aece5de96694c672d0d051b562a823f54d0ff7298f0886edddad0dd56->leave($__internal_b9f26b3aece5de96694c672d0d051b562a823f54d0ff7298f0886edddad0dd56_prof);

    }

    // line 9
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_148228af981a33b3ca659064d664ea8f5a906187dcd767845dab743089eedb61 = $this->env->getExtension("native_profiler");
        $__internal_148228af981a33b3ca659064d664ea8f5a906187dcd767845dab743089eedb61->enter($__internal_148228af981a33b3ca659064d664ea8f5a906187dcd767845dab743089eedb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("provider.edit.name"), "html", null, true);
        echo "
";
        
        $__internal_148228af981a33b3ca659064d664ea8f5a906187dcd767845dab743089eedb61->leave($__internal_148228af981a33b3ca659064d664ea8f5a906187dcd767845dab743089eedb61_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_daa63d256d3c9504d8998642b751b78e20e6c501917078e0d95124089cd04b22 = $this->env->getExtension("native_profiler");
        $__internal_daa63d256d3c9504d8998642b751b78e20e6c501917078e0d95124089cd04b22->enter($__internal_daa63d256d3c9504d8998642b751b78e20e6c501917078e0d95124089cd04b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:provider:edit.html.twig", 14)->display(array_merge($context, array("form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "form_name" => $this->env->getExtension('translator')->trans("provider.edit.name"), "submit_name" => $this->env->getExtension('translator')->trans("provider.edit.submit"))));
        
        $__internal_daa63d256d3c9504d8998642b751b78e20e6c501917078e0d95124089cd04b22->leave($__internal_daa63d256d3c9504d8998642b751b78e20e6c501917078e0d95124089cd04b22_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:provider:edit.html.twig";
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
/*     <a href="{{ path('provider_index') }}">*/
/*        {{ 'provider.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
/* {% block breadcrumbActive %}*/
/*     {{ 'provider.edit.name'|trans }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': edit_form ,'form_name' : 'provider.edit.name'|trans ,'submit_name': 'provider.edit.submit'|trans } %}*/
/* {% endblock %}*/
/* */
