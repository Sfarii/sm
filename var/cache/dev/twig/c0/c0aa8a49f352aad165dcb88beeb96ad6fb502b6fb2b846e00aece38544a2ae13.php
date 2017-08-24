<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_295cff5d48992f197a205c11f232273cede00dc1cf83f7aa337d5ef04066db44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_3dc30593849bd6d1bd314c3fd97c660c4123507614b2bd8bca392136d0143842 = $this->env->getExtension("native_profiler");
        $__internal_3dc30593849bd6d1bd314c3fd97c660c4123507614b2bd8bca392136d0143842->enter($__internal_3dc30593849bd6d1bd314c3fd97c660c4123507614b2bd8bca392136d0143842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dc30593849bd6d1bd314c3fd97c660c4123507614b2bd8bca392136d0143842->leave($__internal_3dc30593849bd6d1bd314c3fd97c660c4123507614b2bd8bca392136d0143842_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_70fd2e3a7bec729fa7aaef19ab9eaea39929e6e12efd6035019df8b4feb9e423 = $this->env->getExtension("native_profiler");
        $__internal_70fd2e3a7bec729fa7aaef19ab9eaea39929e6e12efd6035019df8b4feb9e423->enter($__internal_70fd2e3a7bec729fa7aaef19ab9eaea39929e6e12efd6035019df8b4feb9e423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_70fd2e3a7bec729fa7aaef19ab9eaea39929e6e12efd6035019df8b4feb9e423->leave($__internal_70fd2e3a7bec729fa7aaef19ab9eaea39929e6e12efd6035019df8b4feb9e423_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
