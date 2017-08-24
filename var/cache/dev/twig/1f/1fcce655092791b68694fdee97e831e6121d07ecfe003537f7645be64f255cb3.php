<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_760d67b20c8ebe4b484f3890047b9c4588e27d41fb3d1013a2b1229acfcc1aa4 extends Twig_Template
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
        $__internal_04da1524992b65785919022789b67933764f5d795d15cfcf29ea8ec5635a7830 = $this->env->getExtension("native_profiler");
        $__internal_04da1524992b65785919022789b67933764f5d795d15cfcf29ea8ec5635a7830->enter($__internal_04da1524992b65785919022789b67933764f5d795d15cfcf29ea8ec5635a7830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_04da1524992b65785919022789b67933764f5d795d15cfcf29ea8ec5635a7830->leave($__internal_04da1524992b65785919022789b67933764f5d795d15cfcf29ea8ec5635a7830_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
