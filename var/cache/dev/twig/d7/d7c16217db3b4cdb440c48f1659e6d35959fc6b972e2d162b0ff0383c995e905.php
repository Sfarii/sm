<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_a8c1e26ddf4e4cf8b5ff2eb2da365cd44cf04f9629b739ac879d265429b63f39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_8f0c6f542549c2b2ffcc06fabd291bab5849ee1f88269ab6ac824b5987560637 = $this->env->getExtension("native_profiler");
        $__internal_8f0c6f542549c2b2ffcc06fabd291bab5849ee1f88269ab6ac824b5987560637->enter($__internal_8f0c6f542549c2b2ffcc06fabd291bab5849ee1f88269ab6ac824b5987560637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f0c6f542549c2b2ffcc06fabd291bab5849ee1f88269ab6ac824b5987560637->leave($__internal_8f0c6f542549c2b2ffcc06fabd291bab5849ee1f88269ab6ac824b5987560637_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc5e28b21070c0db0035537c1ff3ab79d372cb1a87ffdae3688954e904a38a63 = $this->env->getExtension("native_profiler");
        $__internal_dc5e28b21070c0db0035537c1ff3ab79d372cb1a87ffdae3688954e904a38a63->enter($__internal_dc5e28b21070c0db0035537c1ff3ab79d372cb1a87ffdae3688954e904a38a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_dc5e28b21070c0db0035537c1ff3ab79d372cb1a87ffdae3688954e904a38a63->leave($__internal_dc5e28b21070c0db0035537c1ff3ab79d372cb1a87ffdae3688954e904a38a63_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
