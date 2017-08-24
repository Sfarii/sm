<?php

/* BazingaJsTranslationBundle::config.json.twig */
class __TwigTemplate_47546c77a0036d130c2b79aae23af81c0d183b1facf55a7afb35754264bf71f3 extends Twig_Template
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
        $__internal_083eb7f3ca365309167e931074ea0c00d7b225736414092240d3b1831243ffc1 = $this->env->getExtension("native_profiler");
        $__internal_083eb7f3ca365309167e931074ea0c00d7b225736414092240d3b1831243ffc1->enter($__internal_083eb7f3ca365309167e931074ea0c00d7b225736414092240d3b1831243ffc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BazingaJsTranslationBundle::config.json.twig"));

        // line 1
        echo "{
    \"fallback\": \"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["fallback"]) ? $context["fallback"] : $this->getContext($context, "fallback")), "html", null, true);
        echo "\",
    \"defaultDomain\": \"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["defaultDomain"]) ? $context["defaultDomain"] : $this->getContext($context, "defaultDomain")), "html", null, true);
        echo "\"
}
";
        
        $__internal_083eb7f3ca365309167e931074ea0c00d7b225736414092240d3b1831243ffc1->leave($__internal_083eb7f3ca365309167e931074ea0c00d7b225736414092240d3b1831243ffc1_prof);

    }

    public function getTemplateName()
    {
        return "BazingaJsTranslationBundle::config.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* {*/
/*     "fallback": "{{ fallback }}",*/
/*     "defaultDomain": "{{ defaultDomain }}"*/
/* }*/
/* */
