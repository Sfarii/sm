<?php

/* FOSMessageBundle:Message:inbox.html.twig */
class __TwigTemplate_19c9038aea079b461e95ebce1e645e87bccf9d2c6211b57019dfba6d155e1f41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:inbox.html.twig", 1);
        $this->blocks = array(
            'fos_message_content' => array($this, 'block_fos_message_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSMessageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b565df32553712f7e43b184fd040af7aaff250787427c1e57a62dcab21184f3 = $this->env->getExtension("native_profiler");
        $__internal_6b565df32553712f7e43b184fd040af7aaff250787427c1e57a62dcab21184f3->enter($__internal_6b565df32553712f7e43b184fd040af7aaff250787427c1e57a62dcab21184f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:inbox.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b565df32553712f7e43b184fd040af7aaff250787427c1e57a62dcab21184f3->leave($__internal_6b565df32553712f7e43b184fd040af7aaff250787427c1e57a62dcab21184f3_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_728e7b9d206f1082df577e7aff547f00e61af32209576069997c20519c4a4819 = $this->env->getExtension("native_profiler");
        $__internal_728e7b9d206f1082df577e7aff547f00e61af32209576069997c20519c4a4819->enter($__internal_728e7b9d206f1082df577e7aff547f00e61af32209576069997c20519c4a4819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "\t";
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FOSMessageBundle:Message:inbox.html.twig", 4)->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")))));
        
        $__internal_728e7b9d206f1082df577e7aff547f00e61af32209576069997c20519c4a4819->leave($__internal_728e7b9d206f1082df577e7aff547f00e61af32209576069997c20519c4a4819_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:inbox.html.twig";
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
/* {% extends 'FOSMessageBundle::layout.html.twig' %}*/
/* */
/* {% block fos_message_content %}*/
/* 	{% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}*/
/* {% endblock %}*/
/* */
