<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9e4ebd2f31a28987b4474d0b5af9168baf3b10dd1fbace0cbd597be803b78e74 extends Twig_Template
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
        $__internal_53f1441b17f06ea7e265bc3c348f66ada015ddceae5e5b5772254a8877157c3c = $this->env->getExtension("native_profiler");
        $__internal_53f1441b17f06ea7e265bc3c348f66ada015ddceae5e5b5772254a8877157c3c->enter($__internal_53f1441b17f06ea7e265bc3c348f66ada015ddceae5e5b5772254a8877157c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_53f1441b17f06ea7e265bc3c348f66ada015ddceae5e5b5772254a8877157c3c->leave($__internal_53f1441b17f06ea7e265bc3c348f66ada015ddceae5e5b5772254a8877157c3c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
