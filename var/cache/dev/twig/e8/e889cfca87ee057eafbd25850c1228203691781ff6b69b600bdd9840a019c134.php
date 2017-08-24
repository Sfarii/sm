<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_674f8a0a54415cc5a23771e493e977bbf8ecec9375ed4fcd7639ba896d475b93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a11e04c2abb1f027ef697a3c07646a26f0e4becc1ef5304d44dbb0d2ee2a15bb = $this->env->getExtension("native_profiler");
        $__internal_a11e04c2abb1f027ef697a3c07646a26f0e4becc1ef5304d44dbb0d2ee2a15bb->enter($__internal_a11e04c2abb1f027ef697a3c07646a26f0e4becc1ef5304d44dbb0d2ee2a15bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a11e04c2abb1f027ef697a3c07646a26f0e4becc1ef5304d44dbb0d2ee2a15bb->leave($__internal_a11e04c2abb1f027ef697a3c07646a26f0e4becc1ef5304d44dbb0d2ee2a15bb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
