<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_e3cd38dc7b91968239604b57041e5669857b61f6de3b0442d3bb2858b0f73471 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_55471a8330841128d6562edcd8d1bc4c9bf3133688919d1e6a6db2f25f1d3f87 = $this->env->getExtension("native_profiler");
        $__internal_55471a8330841128d6562edcd8d1bc4c9bf3133688919d1e6a6db2f25f1d3f87->enter($__internal_55471a8330841128d6562edcd8d1bc4c9bf3133688919d1e6a6db2f25f1d3f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55471a8330841128d6562edcd8d1bc4c9bf3133688919d1e6a6db2f25f1d3f87->leave($__internal_55471a8330841128d6562edcd8d1bc4c9bf3133688919d1e6a6db2f25f1d3f87_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_84ab285285c4633d5fb66d46dedd1eca681ecab019683e793171696dffbee08b = $this->env->getExtension("native_profiler");
        $__internal_84ab285285c4633d5fb66d46dedd1eca681ecab019683e793171696dffbee08b->enter($__internal_84ab285285c4633d5fb66d46dedd1eca681ecab019683e793171696dffbee08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_84ab285285c4633d5fb66d46dedd1eca681ecab019683e793171696dffbee08b->leave($__internal_84ab285285c4633d5fb66d46dedd1eca681ecab019683e793171696dffbee08b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
