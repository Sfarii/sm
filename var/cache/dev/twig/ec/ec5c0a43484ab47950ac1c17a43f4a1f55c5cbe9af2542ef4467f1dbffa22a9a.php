<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_21c0a0843b3eeaeaef78f16289a1aab7821aee317a072d2c6255c91709d881ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_d713a0d8acd9de0f4e106ec844110ecfb4c429e3ad260b370312693ed4e69c25 = $this->env->getExtension("native_profiler");
        $__internal_d713a0d8acd9de0f4e106ec844110ecfb4c429e3ad260b370312693ed4e69c25->enter($__internal_d713a0d8acd9de0f4e106ec844110ecfb4c429e3ad260b370312693ed4e69c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d713a0d8acd9de0f4e106ec844110ecfb4c429e3ad260b370312693ed4e69c25->leave($__internal_d713a0d8acd9de0f4e106ec844110ecfb4c429e3ad260b370312693ed4e69c25_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23fccc6b4b81917dcb0f13f270eeae659735d756b49cb75cd8f3204b0538d5cf = $this->env->getExtension("native_profiler");
        $__internal_23fccc6b4b81917dcb0f13f270eeae659735d756b49cb75cd8f3204b0538d5cf->enter($__internal_23fccc6b4b81917dcb0f13f270eeae659735d756b49cb75cd8f3204b0538d5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_23fccc6b4b81917dcb0f13f270eeae659735d756b49cb75cd8f3204b0538d5cf->leave($__internal_23fccc6b4b81917dcb0f13f270eeae659735d756b49cb75cd8f3204b0538d5cf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
