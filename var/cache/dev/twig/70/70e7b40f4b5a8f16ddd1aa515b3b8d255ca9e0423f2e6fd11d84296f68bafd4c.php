<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_bd5f97b48ab4c820011fef74d394b78261e1d4e5a5835f50d7a7f2ce8c7d5284 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b2a0074772568ae059f777a7d2c189c24de4442c2f531995ade129c190abbdf = $this->env->getExtension("native_profiler");
        $__internal_8b2a0074772568ae059f777a7d2c189c24de4442c2f531995ade129c190abbdf->enter($__internal_8b2a0074772568ae059f777a7d2c189c24de4442c2f531995ade129c190abbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b2a0074772568ae059f777a7d2c189c24de4442c2f531995ade129c190abbdf->leave($__internal_8b2a0074772568ae059f777a7d2c189c24de4442c2f531995ade129c190abbdf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_54ba7fe42a02fa8ee87e9aba967597dcae3b2a07e8c5b1a2408d2c1f19d6d08e = $this->env->getExtension("native_profiler");
        $__internal_54ba7fe42a02fa8ee87e9aba967597dcae3b2a07e8c5b1a2408d2c1f19d6d08e->enter($__internal_54ba7fe42a02fa8ee87e9aba967597dcae3b2a07e8c5b1a2408d2c1f19d6d08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_54ba7fe42a02fa8ee87e9aba967597dcae3b2a07e8c5b1a2408d2c1f19d6d08e->leave($__internal_54ba7fe42a02fa8ee87e9aba967597dcae3b2a07e8c5b1a2408d2c1f19d6d08e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
