<?php

/* FOSMessageBundle:Message:deleted.html.twig */
class __TwigTemplate_c8418caa9d2e1caefcaacc5821c5aa804a349d9ba76493ff0b72288428acb31f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:deleted.html.twig", 1);
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
        $__internal_d7890d373fef6fdf8a9e6b7ec953df6d4bdcf2e27254f88bfecf769be1d9d44d = $this->env->getExtension("native_profiler");
        $__internal_d7890d373fef6fdf8a9e6b7ec953df6d4bdcf2e27254f88bfecf769be1d9d44d->enter($__internal_d7890d373fef6fdf8a9e6b7ec953df6d4bdcf2e27254f88bfecf769be1d9d44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:deleted.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7890d373fef6fdf8a9e6b7ec953df6d4bdcf2e27254f88bfecf769be1d9d44d->leave($__internal_d7890d373fef6fdf8a9e6b7ec953df6d4bdcf2e27254f88bfecf769be1d9d44d_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_2f21bc0ff57dfe6336524bd3a0edc92c3343b02ce5aa3d8bde959a6610b0b2c7 = $this->env->getExtension("native_profiler");
        $__internal_2f21bc0ff57dfe6336524bd3a0edc92c3343b02ce5aa3d8bde959a6610b0b2c7->enter($__internal_2f21bc0ff57dfe6336524bd3a0edc92c3343b02ce5aa3d8bde959a6610b0b2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FOSMessageBundle:Message:deleted.html.twig", 5)->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")))));
        // line 6
        echo "
";
        
        $__internal_2f21bc0ff57dfe6336524bd3a0edc92c3343b02ce5aa3d8bde959a6610b0b2c7->leave($__internal_2f21bc0ff57dfe6336524bd3a0edc92c3343b02ce5aa3d8bde959a6610b0b2c7_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:deleted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'FOSMessageBundle::layout.html.twig' %}*/
/* */
/* {% block fos_message_content %}*/
/* */
/* {% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}*/
/* */
/* {% endblock %}*/
/* */
