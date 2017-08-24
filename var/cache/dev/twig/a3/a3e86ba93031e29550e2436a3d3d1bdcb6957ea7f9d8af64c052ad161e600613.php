<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_44c18b085ea77c54aa67cff54f48cec4a2eac894d16e73ca1076dc3d224d8d81 extends Twig_Template
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
        $__internal_77c1c31d9f8aed6e42e2337642209fc8fe4528acb942a2a60f8832648fda47cc = $this->env->getExtension("native_profiler");
        $__internal_77c1c31d9f8aed6e42e2337642209fc8fe4528acb942a2a60f8832648fda47cc->enter($__internal_77c1c31d9f8aed6e42e2337642209fc8fe4528acb942a2a60f8832648fda47cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_77c1c31d9f8aed6e42e2337642209fc8fe4528acb942a2a60f8832648fda47cc->leave($__internal_77c1c31d9f8aed6e42e2337642209fc8fe4528acb942a2a60f8832648fda47cc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
