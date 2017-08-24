<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_f01affd5c67deee87b43c34acc56b02cb0f665c23e865d42cdc4e0db1bed23aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_29cf878d5fecde150cac4224d8454bf3f35d1e6cf70a484d6e12757f4abb5b97 = $this->env->getExtension("native_profiler");
        $__internal_29cf878d5fecde150cac4224d8454bf3f35d1e6cf70a484d6e12757f4abb5b97->enter($__internal_29cf878d5fecde150cac4224d8454bf3f35d1e6cf70a484d6e12757f4abb5b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29cf878d5fecde150cac4224d8454bf3f35d1e6cf70a484d6e12757f4abb5b97->leave($__internal_29cf878d5fecde150cac4224d8454bf3f35d1e6cf70a484d6e12757f4abb5b97_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a04c324ac61f6ec334da452a4490d874f0048a851db24ddaa88b99ab3ee91e6 = $this->env->getExtension("native_profiler");
        $__internal_1a04c324ac61f6ec334da452a4490d874f0048a851db24ddaa88b99ab3ee91e6->enter($__internal_1a04c324ac61f6ec334da452a4490d874f0048a851db24ddaa88b99ab3ee91e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_1a04c324ac61f6ec334da452a4490d874f0048a851db24ddaa88b99ab3ee91e6->leave($__internal_1a04c324ac61f6ec334da452a4490d874f0048a851db24ddaa88b99ab3ee91e6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
