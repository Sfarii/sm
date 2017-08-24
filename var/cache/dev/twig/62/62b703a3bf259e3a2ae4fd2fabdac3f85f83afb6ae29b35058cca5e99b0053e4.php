<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_aa8febd5e6ca0896343ff706d15a8f487df2f0906c52c8b7434c49d2f99e5d23 extends Twig_Template
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
        $__internal_3707bee899a113556b98f97e69dc6e3aaf76256c56f40d7d8851ea4652888dc1 = $this->env->getExtension("native_profiler");
        $__internal_3707bee899a113556b98f97e69dc6e3aaf76256c56f40d7d8851ea4652888dc1->enter($__internal_3707bee899a113556b98f97e69dc6e3aaf76256c56f40d7d8851ea4652888dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3707bee899a113556b98f97e69dc6e3aaf76256c56f40d7d8851ea4652888dc1->leave($__internal_3707bee899a113556b98f97e69dc6e3aaf76256c56f40d7d8851ea4652888dc1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
