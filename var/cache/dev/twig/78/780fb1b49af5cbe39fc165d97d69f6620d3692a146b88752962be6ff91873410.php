<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_d4553094d398dfe6640ec15c3e870af8e0ba6edaa1cbbd56177210a87d7e88a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_da63aec3f3667b3df85eed3846b4d2eee407c94429aa04a508057f0e664c36d9 = $this->env->getExtension("native_profiler");
        $__internal_da63aec3f3667b3df85eed3846b4d2eee407c94429aa04a508057f0e664c36d9->enter($__internal_da63aec3f3667b3df85eed3846b4d2eee407c94429aa04a508057f0e664c36d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da63aec3f3667b3df85eed3846b4d2eee407c94429aa04a508057f0e664c36d9->leave($__internal_da63aec3f3667b3df85eed3846b4d2eee407c94429aa04a508057f0e664c36d9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_64b4149e270da20890f3c5c8f62e0603dd17517acdd697776f6d1bc5a70b3e40 = $this->env->getExtension("native_profiler");
        $__internal_64b4149e270da20890f3c5c8f62e0603dd17517acdd697776f6d1bc5a70b3e40->enter($__internal_64b4149e270da20890f3c5c8f62e0603dd17517acdd697776f6d1bc5a70b3e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_64b4149e270da20890f3c5c8f62e0603dd17517acdd697776f6d1bc5a70b3e40->leave($__internal_64b4149e270da20890f3c5c8f62e0603dd17517acdd697776f6d1bc5a70b3e40_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
