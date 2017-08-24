<?php

/* FOSMessageBundle:Message:sent.html.twig */
class __TwigTemplate_3d1c56d5f835eb4d4307cc113a8ef0f446b855abacf7329aeffdca0e9fde4382 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:sent.html.twig", 1);
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
        $__internal_3a771f3075277c30f2240833807e68fa8a47cedce4da7ed8d0b3834df6c5e391 = $this->env->getExtension("native_profiler");
        $__internal_3a771f3075277c30f2240833807e68fa8a47cedce4da7ed8d0b3834df6c5e391->enter($__internal_3a771f3075277c30f2240833807e68fa8a47cedce4da7ed8d0b3834df6c5e391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:sent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a771f3075277c30f2240833807e68fa8a47cedce4da7ed8d0b3834df6c5e391->leave($__internal_3a771f3075277c30f2240833807e68fa8a47cedce4da7ed8d0b3834df6c5e391_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_0a8466f57feb777830ccc5bce3f1a4d509660f4badb4049bbf42ea9a2270aa31 = $this->env->getExtension("native_profiler");
        $__internal_0a8466f57feb777830ccc5bce3f1a4d509660f4badb4049bbf42ea9a2270aa31->enter($__internal_0a8466f57feb777830ccc5bce3f1a4d509660f4badb4049bbf42ea9a2270aa31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FOSMessageBundle:Message:sent.html.twig", 5)->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")))));
        // line 6
        echo "
";
        
        $__internal_0a8466f57feb777830ccc5bce3f1a4d509660f4badb4049bbf42ea9a2270aa31->leave($__internal_0a8466f57feb777830ccc5bce3f1a4d509660f4badb4049bbf42ea9a2270aa31_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:sent.html.twig";
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
