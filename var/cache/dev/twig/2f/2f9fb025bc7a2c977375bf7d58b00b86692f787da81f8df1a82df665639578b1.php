<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9b936dd986b0b139e8aa5eb38e5950db14da9e458439c85aae09b679d2425314 extends Twig_Template
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
        $__internal_20398675cf57562c13dc81036599b9ec0eb783d8fea28034d7bd29c6c7964861 = $this->env->getExtension("native_profiler");
        $__internal_20398675cf57562c13dc81036599b9ec0eb783d8fea28034d7bd29c6c7964861->enter($__internal_20398675cf57562c13dc81036599b9ec0eb783d8fea28034d7bd29c6c7964861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_20398675cf57562c13dc81036599b9ec0eb783d8fea28034d7bd29c6c7964861->leave($__internal_20398675cf57562c13dc81036599b9ec0eb783d8fea28034d7bd29c6c7964861_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
