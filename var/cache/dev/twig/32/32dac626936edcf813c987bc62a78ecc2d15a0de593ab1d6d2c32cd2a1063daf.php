<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_eafe9534a8d48daece8d7db13816a5fc4fd4658fc1ed4f58d67f0b894a690fc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d121e58c2f634861d5ddbe0c466ffa068b3976c54c10c1e5945f4e1f4a48847 = $this->env->getExtension("native_profiler");
        $__internal_9d121e58c2f634861d5ddbe0c466ffa068b3976c54c10c1e5945f4e1f4a48847->enter($__internal_9d121e58c2f634861d5ddbe0c466ffa068b3976c54c10c1e5945f4e1f4a48847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9d121e58c2f634861d5ddbe0c466ffa068b3976c54c10c1e5945f4e1f4a48847->leave($__internal_9d121e58c2f634861d5ddbe0c466ffa068b3976c54c10c1e5945f4e1f4a48847_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_895dd7887a691fff111213f9c0ff91fcfe1c5e32b2b80b34feed69f1983626f1 = $this->env->getExtension("native_profiler");
        $__internal_895dd7887a691fff111213f9c0ff91fcfe1c5e32b2b80b34feed69f1983626f1->enter($__internal_895dd7887a691fff111213f9c0ff91fcfe1c5e32b2b80b34feed69f1983626f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_895dd7887a691fff111213f9c0ff91fcfe1c5e32b2b80b34feed69f1983626f1->leave($__internal_895dd7887a691fff111213f9c0ff91fcfe1c5e32b2b80b34feed69f1983626f1_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e9b8eebac4cf7aab58829361245213743dfe93f01d20c43d0646b3c711d0ba88 = $this->env->getExtension("native_profiler");
        $__internal_e9b8eebac4cf7aab58829361245213743dfe93f01d20c43d0646b3c711d0ba88->enter($__internal_e9b8eebac4cf7aab58829361245213743dfe93f01d20c43d0646b3c711d0ba88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e9b8eebac4cf7aab58829361245213743dfe93f01d20c43d0646b3c711d0ba88->leave($__internal_e9b8eebac4cf7aab58829361245213743dfe93f01d20c43d0646b3c711d0ba88_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2ece71d9f4ad491168246b58a3ce8da4399aeaf7a09fc015c69a27d977097fb2 = $this->env->getExtension("native_profiler");
        $__internal_2ece71d9f4ad491168246b58a3ce8da4399aeaf7a09fc015c69a27d977097fb2->enter($__internal_2ece71d9f4ad491168246b58a3ce8da4399aeaf7a09fc015c69a27d977097fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2ece71d9f4ad491168246b58a3ce8da4399aeaf7a09fc015c69a27d977097fb2->leave($__internal_2ece71d9f4ad491168246b58a3ce8da4399aeaf7a09fc015c69a27d977097fb2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
