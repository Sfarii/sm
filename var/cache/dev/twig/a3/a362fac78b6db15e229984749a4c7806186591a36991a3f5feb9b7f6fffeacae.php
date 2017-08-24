<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_4eb03808fa38b53ffea097608af62447ce8f094e72ca6c3acd7e97c7fc8ba5fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_a5865461e5eee88d649c311e56c8411fe7b229653641f7702b30771c6c206ce6 = $this->env->getExtension("native_profiler");
        $__internal_a5865461e5eee88d649c311e56c8411fe7b229653641f7702b30771c6c206ce6->enter($__internal_a5865461e5eee88d649c311e56c8411fe7b229653641f7702b30771c6c206ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5865461e5eee88d649c311e56c8411fe7b229653641f7702b30771c6c206ce6->leave($__internal_a5865461e5eee88d649c311e56c8411fe7b229653641f7702b30771c6c206ce6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b243117c7cae8602c7624084fc16b974a51acb59656dada3e800ab8de948801 = $this->env->getExtension("native_profiler");
        $__internal_7b243117c7cae8602c7624084fc16b974a51acb59656dada3e800ab8de948801->enter($__internal_7b243117c7cae8602c7624084fc16b974a51acb59656dada3e800ab8de948801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_7b243117c7cae8602c7624084fc16b974a51acb59656dada3e800ab8de948801->leave($__internal_7b243117c7cae8602c7624084fc16b974a51acb59656dada3e800ab8de948801_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
