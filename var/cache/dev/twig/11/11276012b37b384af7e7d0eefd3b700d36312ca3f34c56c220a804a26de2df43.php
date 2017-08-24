<?php

/* FOSMessageBundle:Message:search.html.twig */
class __TwigTemplate_b9d5cd8984c1c58490f44f165e0c9051271b93ebf4863f3b20a4c20e8cfb8efa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:search.html.twig", 1);
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
        $__internal_d583680e75263accbaf80029fc529f8d0158e70c04116b8e9d95a4ec7270f8f0 = $this->env->getExtension("native_profiler");
        $__internal_d583680e75263accbaf80029fc529f8d0158e70c04116b8e9d95a4ec7270f8f0->enter($__internal_d583680e75263accbaf80029fc529f8d0158e70c04116b8e9d95a4ec7270f8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d583680e75263accbaf80029fc529f8d0158e70c04116b8e9d95a4ec7270f8f0->leave($__internal_d583680e75263accbaf80029fc529f8d0158e70c04116b8e9d95a4ec7270f8f0_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_1f5020ea03cbb1ff8afbc8cfb04dd3e0a1355ee9b4617a528d0f3ee0ba490878 = $this->env->getExtension("native_profiler");
        $__internal_1f5020ea03cbb1ff8afbc8cfb04dd3e0a1355ee9b4617a528d0f3ee0ba490878->enter($__internal_1f5020ea03cbb1ff8afbc8cfb04dd3e0a1355ee9b4617a528d0f3ee0ba490878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2>";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("search", array(), "FOSMessageBundle");
        echo "</h2>

<p>";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("threads_found", twig_length_filter($this->env, (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads"))), array("%num%" => twig_length_filter($this->env, (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")))), "FOSMessageBundle");
        // line 9
        echo "</p>

";
        // line 11
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FOSMessageBundle:Message:search.html.twig", 11)->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")))));
        // line 12
        echo "
";
        
        $__internal_1f5020ea03cbb1ff8afbc8cfb04dd3e0a1355ee9b4617a528d0f3ee0ba490878->leave($__internal_1f5020ea03cbb1ff8afbc8cfb04dd3e0a1355ee9b4617a528d0f3ee0ba490878_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  54 => 11,  50 => 9,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'FOSMessageBundle::layout.html.twig' %}*/
/* */
/* {% block fos_message_content %}*/
/* */
/* <h2>{% trans from 'FOSMessageBundle' %}search{% endtrans %}</h2>*/
/* */
/* <p>{% transchoice threads|length with {'%num%': threads|length } from 'FOSMessageBundle' %}*/
/*     threads_found*/
/* {% endtranschoice %}</p>*/
/* */
/* {% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}*/
/* */
/* {% endblock %}*/
/* */
