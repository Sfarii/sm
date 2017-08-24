<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7821a0679fc71b0b21418743db3a6ded41ef807e023b14ddfdddaa118ede6314 extends Twig_Template
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
        $__internal_83f570df948f817a6c3a1e6ae1585311d332c24eb561e8440afb0b5b2cb31734 = $this->env->getExtension("native_profiler");
        $__internal_83f570df948f817a6c3a1e6ae1585311d332c24eb561e8440afb0b5b2cb31734->enter($__internal_83f570df948f817a6c3a1e6ae1585311d332c24eb561e8440afb0b5b2cb31734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_83f570df948f817a6c3a1e6ae1585311d332c24eb561e8440afb0b5b2cb31734->leave($__internal_83f570df948f817a6c3a1e6ae1585311d332c24eb561e8440afb0b5b2cb31734_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
