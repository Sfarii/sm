<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5ba7b578cbb30397efd2a5964c4bd2e6930a371d60fe8d3bd90c10cbde626f41 extends Twig_Template
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
        $__internal_f1d1c28bd989229cd875ef67b8e108134171f7f8dd9d570ea200c284f59b1145 = $this->env->getExtension("native_profiler");
        $__internal_f1d1c28bd989229cd875ef67b8e108134171f7f8dd9d570ea200c284f59b1145->enter($__internal_f1d1c28bd989229cd875ef67b8e108134171f7f8dd9d570ea200c284f59b1145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f1d1c28bd989229cd875ef67b8e108134171f7f8dd9d570ea200c284f59b1145->leave($__internal_f1d1c28bd989229cd875ef67b8e108134171f7f8dd9d570ea200c284f59b1145_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
