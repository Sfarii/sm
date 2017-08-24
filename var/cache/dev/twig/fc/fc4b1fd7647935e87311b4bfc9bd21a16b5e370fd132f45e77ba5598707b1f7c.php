<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_974121f9fc25ea6e88d45272570e5727e7586e365fb7f1c9fdd7458ea0a43690 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_4b56c5747777535e02a62d3e3734079efe67f1a4854cdc1b62f7dcbd4d20493c = $this->env->getExtension("native_profiler");
        $__internal_4b56c5747777535e02a62d3e3734079efe67f1a4854cdc1b62f7dcbd4d20493c->enter($__internal_4b56c5747777535e02a62d3e3734079efe67f1a4854cdc1b62f7dcbd4d20493c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b56c5747777535e02a62d3e3734079efe67f1a4854cdc1b62f7dcbd4d20493c->leave($__internal_4b56c5747777535e02a62d3e3734079efe67f1a4854cdc1b62f7dcbd4d20493c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c7e95a20a3d4bc69ef9a131ccf8dc001a2dc3beed20181a45c1abd40c1dc39b = $this->env->getExtension("native_profiler");
        $__internal_3c7e95a20a3d4bc69ef9a131ccf8dc001a2dc3beed20181a45c1abd40c1dc39b->enter($__internal_3c7e95a20a3d4bc69ef9a131ccf8dc001a2dc3beed20181a45c1abd40c1dc39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_3c7e95a20a3d4bc69ef9a131ccf8dc001a2dc3beed20181a45c1abd40c1dc39b->leave($__internal_3c7e95a20a3d4bc69ef9a131ccf8dc001a2dc3beed20181a45c1abd40c1dc39b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
