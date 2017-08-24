<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_bd400b2d5db3f0934e41a616790d4fdbf23e94873218533d863cc6125a16e149 extends Twig_Template
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
        $__internal_0af1ea8465c1861b4398888223bcf9d48114c7fa3c810d45b13eb772eedf491d = $this->env->getExtension("native_profiler");
        $__internal_0af1ea8465c1861b4398888223bcf9d48114c7fa3c810d45b13eb772eedf491d->enter($__internal_0af1ea8465c1861b4398888223bcf9d48114c7fa3c810d45b13eb772eedf491d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_0af1ea8465c1861b4398888223bcf9d48114c7fa3c810d45b13eb772eedf491d->leave($__internal_0af1ea8465c1861b4398888223bcf9d48114c7fa3c810d45b13eb772eedf491d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
