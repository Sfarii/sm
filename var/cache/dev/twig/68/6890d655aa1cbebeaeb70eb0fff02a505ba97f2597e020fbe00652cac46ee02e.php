<?php

/* BazingaJsTranslationBundle::config.js.twig */
class __TwigTemplate_a5a6690b05853a993e107c5a70e5dd7d555a473b668fc7d009a9271df49f6106 extends Twig_Template
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
        $__internal_5ccfe4e7982bbf0f21cfe6c02dca85014eb6037a449a25117222e2f0f0ff00b1 = $this->env->getExtension("native_profiler");
        $__internal_5ccfe4e7982bbf0f21cfe6c02dca85014eb6037a449a25117222e2f0f0ff00b1->enter($__internal_5ccfe4e7982bbf0f21cfe6c02dca85014eb6037a449a25117222e2f0f0ff00b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BazingaJsTranslationBundle::config.js.twig"));

        // line 1
        echo "(function (Translator) {
    Translator.fallback      = '";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["fallback"]) ? $context["fallback"] : $this->getContext($context, "fallback")), "js", null, true);
        echo "';
    Translator.defaultDomain = '";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["defaultDomain"]) ? $context["defaultDomain"] : $this->getContext($context, "defaultDomain")), "js", null, true);
        echo "';
})(Translator);
";
        
        $__internal_5ccfe4e7982bbf0f21cfe6c02dca85014eb6037a449a25117222e2f0f0ff00b1->leave($__internal_5ccfe4e7982bbf0f21cfe6c02dca85014eb6037a449a25117222e2f0f0ff00b1_prof);

    }

    public function getTemplateName()
    {
        return "BazingaJsTranslationBundle::config.js.twig";
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
/* (function (Translator) {*/
/*     Translator.fallback      = '{{ fallback }}';*/
/*     Translator.defaultDomain = '{{ defaultDomain }}';*/
/* })(Translator);*/
/* */
