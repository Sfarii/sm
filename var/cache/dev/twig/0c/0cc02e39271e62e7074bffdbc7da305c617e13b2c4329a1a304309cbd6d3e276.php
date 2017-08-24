<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_ca1cdfddbac3ae1f811203b536dd94bce53f0d1ca4be9e136db182413358a879 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_0a253b3ea525ec09f06fc776710aa216406059ef879ecc4791a09c1aefc388f2 = $this->env->getExtension("native_profiler");
        $__internal_0a253b3ea525ec09f06fc776710aa216406059ef879ecc4791a09c1aefc388f2->enter($__internal_0a253b3ea525ec09f06fc776710aa216406059ef879ecc4791a09c1aefc388f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a253b3ea525ec09f06fc776710aa216406059ef879ecc4791a09c1aefc388f2->leave($__internal_0a253b3ea525ec09f06fc776710aa216406059ef879ecc4791a09c1aefc388f2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_09602e3720c3143e7c655ee847bead77aa65e15c7ee8872671f70e8b2665a655 = $this->env->getExtension("native_profiler");
        $__internal_09602e3720c3143e7c655ee847bead77aa65e15c7ee8872671f70e8b2665a655->enter($__internal_09602e3720c3143e7c655ee847bead77aa65e15c7ee8872671f70e8b2665a655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_09602e3720c3143e7c655ee847bead77aa65e15c7ee8872671f70e8b2665a655->leave($__internal_09602e3720c3143e7c655ee847bead77aa65e15c7ee8872671f70e8b2665a655_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
