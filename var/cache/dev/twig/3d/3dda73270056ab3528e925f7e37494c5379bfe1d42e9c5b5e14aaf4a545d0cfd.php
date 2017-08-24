<?php

/* BazingaJsTranslationBundle::getTranslations.json.twig */
class __TwigTemplate_82ed65477c8a84fe41ff618a291c5aabfda5d72202b4f291f5d6a01cc6e95149 extends Twig_Template
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
        $__internal_7fe75a3ba2b86c19494e7b5017e7212900cabcd3ad8c5cdf733cdfd48a498f2b = $this->env->getExtension("native_profiler");
        $__internal_7fe75a3ba2b86c19494e7b5017e7212900cabcd3ad8c5cdf733cdfd48a498f2b->enter($__internal_7fe75a3ba2b86c19494e7b5017e7212900cabcd3ad8c5cdf733cdfd48a498f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BazingaJsTranslationBundle::getTranslations.json.twig"));

        // line 1
        echo "{
";
        // line 2
        if ((isset($context["include_config"]) ? $context["include_config"] : $this->getContext($context, "include_config"))) {
            // line 3
            echo "    \"fallback\": \"";
            echo twig_escape_filter($this->env, (isset($context["fallback"]) ? $context["fallback"] : $this->getContext($context, "fallback")), "html", null, true);
            echo "\",
    \"defaultDomain\": \"";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["defaultDomain"]) ? $context["defaultDomain"] : $this->getContext($context, "defaultDomain")), "html", null, true);
            echo "\",
";
        }
        // line 6
        echo "    \"translations\": ";
        echo twig_jsonencode_filter((isset($context["translations"]) ? $context["translations"] : $this->getContext($context, "translations")));
        echo "
}
";
        
        $__internal_7fe75a3ba2b86c19494e7b5017e7212900cabcd3ad8c5cdf733cdfd48a498f2b->leave($__internal_7fe75a3ba2b86c19494e7b5017e7212900cabcd3ad8c5cdf733cdfd48a498f2b_prof);

    }

    public function getTemplateName()
    {
        return "BazingaJsTranslationBundle::getTranslations.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  32 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* {*/
/* {% if include_config %}*/
/*     "fallback": "{{ fallback }}",*/
/*     "defaultDomain": "{{ defaultDomain }}",*/
/* {% endif %}*/
/*     "translations": {{ translations|json_encode|raw }}*/
/* }*/
/* */
