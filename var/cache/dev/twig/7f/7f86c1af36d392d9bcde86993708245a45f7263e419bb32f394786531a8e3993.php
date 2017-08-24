<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_e95ac4fa4fc8ba498c51c1fd7ff875c08c1b583355f92ae1139567dbde90352e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_38980ad1d767d207265773cf2508a3904f3c85ef0332b7792d5380fc7471f800 = $this->env->getExtension("native_profiler");
        $__internal_38980ad1d767d207265773cf2508a3904f3c85ef0332b7792d5380fc7471f800->enter($__internal_38980ad1d767d207265773cf2508a3904f3c85ef0332b7792d5380fc7471f800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38980ad1d767d207265773cf2508a3904f3c85ef0332b7792d5380fc7471f800->leave($__internal_38980ad1d767d207265773cf2508a3904f3c85ef0332b7792d5380fc7471f800_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_19118b1fbb55c84791efd9eb4e1f339d895e8630e6b777f2e6b9d23dd4e2b230 = $this->env->getExtension("native_profiler");
        $__internal_19118b1fbb55c84791efd9eb4e1f339d895e8630e6b777f2e6b9d23dd4e2b230->enter($__internal_19118b1fbb55c84791efd9eb4e1f339d895e8630e6b777f2e6b9d23dd4e2b230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_19118b1fbb55c84791efd9eb4e1f339d895e8630e6b777f2e6b9d23dd4e2b230->leave($__internal_19118b1fbb55c84791efd9eb4e1f339d895e8630e6b777f2e6b9d23dd4e2b230_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
