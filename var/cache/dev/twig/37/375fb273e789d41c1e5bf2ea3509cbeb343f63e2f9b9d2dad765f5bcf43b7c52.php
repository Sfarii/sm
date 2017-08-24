<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_7a7cc258a35d21355abcb6ad1ef7ef510023aa2c71da62d10de33d482f47a7b8 extends Twig_Template
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
        $__internal_de93cf44ddb6f5904b016daf184c77087f96b791f621472f9977fbff74318c51 = $this->env->getExtension("native_profiler");
        $__internal_de93cf44ddb6f5904b016daf184c77087f96b791f621472f9977fbff74318c51->enter($__internal_de93cf44ddb6f5904b016daf184c77087f96b791f621472f9977fbff74318c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_de93cf44ddb6f5904b016daf184c77087f96b791f621472f9977fbff74318c51->leave($__internal_de93cf44ddb6f5904b016daf184c77087f96b791f621472f9977fbff74318c51_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_eb5fdaa5dcd29d9fba6be8d332663a8afc7fecdbd0213be6dba8935d1fae30a2 = $this->env->getExtension("native_profiler");
        $__internal_eb5fdaa5dcd29d9fba6be8d332663a8afc7fecdbd0213be6dba8935d1fae30a2->enter($__internal_eb5fdaa5dcd29d9fba6be8d332663a8afc7fecdbd0213be6dba8935d1fae30a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_eb5fdaa5dcd29d9fba6be8d332663a8afc7fecdbd0213be6dba8935d1fae30a2->leave($__internal_eb5fdaa5dcd29d9fba6be8d332663a8afc7fecdbd0213be6dba8935d1fae30a2_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_33c5968b4841b8dc10b0a935452d4bfa68a7d00d6b999b71ef2544cb5688f681 = $this->env->getExtension("native_profiler");
        $__internal_33c5968b4841b8dc10b0a935452d4bfa68a7d00d6b999b71ef2544cb5688f681->enter($__internal_33c5968b4841b8dc10b0a935452d4bfa68a7d00d6b999b71ef2544cb5688f681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_33c5968b4841b8dc10b0a935452d4bfa68a7d00d6b999b71ef2544cb5688f681->leave($__internal_33c5968b4841b8dc10b0a935452d4bfa68a7d00d6b999b71ef2544cb5688f681_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8097d2fc4808c4ddbe55cb055a1e9977b541125c9ca11dfd869e60e6d7759824 = $this->env->getExtension("native_profiler");
        $__internal_8097d2fc4808c4ddbe55cb055a1e9977b541125c9ca11dfd869e60e6d7759824->enter($__internal_8097d2fc4808c4ddbe55cb055a1e9977b541125c9ca11dfd869e60e6d7759824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8097d2fc4808c4ddbe55cb055a1e9977b541125c9ca11dfd869e60e6d7759824->leave($__internal_8097d2fc4808c4ddbe55cb055a1e9977b541125c9ca11dfd869e60e6d7759824_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
