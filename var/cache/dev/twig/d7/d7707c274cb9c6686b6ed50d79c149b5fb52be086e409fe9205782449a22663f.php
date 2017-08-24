<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_4882fee90891b1dd699e75542989c01d6dedeca85247c2d1d3ea5ec7295d174f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_6bf2386d15acdd53066de15f08b10fbfe4a3c95fada98cca928ec4219890f9f9 = $this->env->getExtension("native_profiler");
        $__internal_6bf2386d15acdd53066de15f08b10fbfe4a3c95fada98cca928ec4219890f9f9->enter($__internal_6bf2386d15acdd53066de15f08b10fbfe4a3c95fada98cca928ec4219890f9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bf2386d15acdd53066de15f08b10fbfe4a3c95fada98cca928ec4219890f9f9->leave($__internal_6bf2386d15acdd53066de15f08b10fbfe4a3c95fada98cca928ec4219890f9f9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef55d0ccebfe6270b0075a2fb3cb8196ef54114441564d86cdb47c2ce3145119 = $this->env->getExtension("native_profiler");
        $__internal_ef55d0ccebfe6270b0075a2fb3cb8196ef54114441564d86cdb47c2ce3145119->enter($__internal_ef55d0ccebfe6270b0075a2fb3cb8196ef54114441564d86cdb47c2ce3145119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_ef55d0ccebfe6270b0075a2fb3cb8196ef54114441564d86cdb47c2ce3145119->leave($__internal_ef55d0ccebfe6270b0075a2fb3cb8196ef54114441564d86cdb47c2ce3145119_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
