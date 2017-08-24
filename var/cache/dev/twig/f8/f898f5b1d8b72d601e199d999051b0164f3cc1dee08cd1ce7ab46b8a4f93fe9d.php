<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_82c564114045109bafa89b84166500276d021fe321624bc143a80ecaed289e35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_c934da968a443fb751fb5c24339535dee0d1c541e1fa98052572ece422cb5b2c = $this->env->getExtension("native_profiler");
        $__internal_c934da968a443fb751fb5c24339535dee0d1c541e1fa98052572ece422cb5b2c->enter($__internal_c934da968a443fb751fb5c24339535dee0d1c541e1fa98052572ece422cb5b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c934da968a443fb751fb5c24339535dee0d1c541e1fa98052572ece422cb5b2c->leave($__internal_c934da968a443fb751fb5c24339535dee0d1c541e1fa98052572ece422cb5b2c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fbebe0df48473a43d9d516b6b00019570cd5aa3aea6e1328c77e4099d8c08a68 = $this->env->getExtension("native_profiler");
        $__internal_fbebe0df48473a43d9d516b6b00019570cd5aa3aea6e1328c77e4099d8c08a68->enter($__internal_fbebe0df48473a43d9d516b6b00019570cd5aa3aea6e1328c77e4099d8c08a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_fbebe0df48473a43d9d516b6b00019570cd5aa3aea6e1328c77e4099d8c08a68->leave($__internal_fbebe0df48473a43d9d516b6b00019570cd5aa3aea6e1328c77e4099d8c08a68_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
