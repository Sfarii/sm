<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_552c630f4e53f3b38436d2f5ecfc0ecf077371f2e4028262c3a2359119e4b5ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6d0097a5419ede964f47638c19f94f9e7820ebf21baa9e00ad82d92ca5158de = $this->env->getExtension("native_profiler");
        $__internal_d6d0097a5419ede964f47638c19f94f9e7820ebf21baa9e00ad82d92ca5158de->enter($__internal_d6d0097a5419ede964f47638c19f94f9e7820ebf21baa9e00ad82d92ca5158de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d6d0097a5419ede964f47638c19f94f9e7820ebf21baa9e00ad82d92ca5158de->leave($__internal_d6d0097a5419ede964f47638c19f94f9e7820ebf21baa9e00ad82d92ca5158de_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5759d6a841f55583ecf828b6200bb20a773ed461606d74dca3f7566a63f9e5e1 = $this->env->getExtension("native_profiler");
        $__internal_5759d6a841f55583ecf828b6200bb20a773ed461606d74dca3f7566a63f9e5e1->enter($__internal_5759d6a841f55583ecf828b6200bb20a773ed461606d74dca3f7566a63f9e5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5759d6a841f55583ecf828b6200bb20a773ed461606d74dca3f7566a63f9e5e1->leave($__internal_5759d6a841f55583ecf828b6200bb20a773ed461606d74dca3f7566a63f9e5e1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
