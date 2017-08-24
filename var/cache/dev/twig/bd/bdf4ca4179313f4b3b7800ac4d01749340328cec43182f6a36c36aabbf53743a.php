<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_04bd8d6f64cc3010c1421eeaaee7d73ee2e2afbb99de8398724a699080871f40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d4c176c168b408d79df5949607494795c67c4fd028144aa34b207865cc6926f = $this->env->getExtension("native_profiler");
        $__internal_8d4c176c168b408d79df5949607494795c67c4fd028144aa34b207865cc6926f->enter($__internal_8d4c176c168b408d79df5949607494795c67c4fd028144aa34b207865cc6926f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d4c176c168b408d79df5949607494795c67c4fd028144aa34b207865cc6926f->leave($__internal_8d4c176c168b408d79df5949607494795c67c4fd028144aa34b207865cc6926f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_899049a14dfa9905dec51b9c917afc75f53ce858c0775f19f0043e0804e512b8 = $this->env->getExtension("native_profiler");
        $__internal_899049a14dfa9905dec51b9c917afc75f53ce858c0775f19f0043e0804e512b8->enter($__internal_899049a14dfa9905dec51b9c917afc75f53ce858c0775f19f0043e0804e512b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_899049a14dfa9905dec51b9c917afc75f53ce858c0775f19f0043e0804e512b8->leave($__internal_899049a14dfa9905dec51b9c917afc75f53ce858c0775f19f0043e0804e512b8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e940e3e9b73771b3ae37c6ab1aca357d75d766ba866d689f432c0e9622178f2 = $this->env->getExtension("native_profiler");
        $__internal_6e940e3e9b73771b3ae37c6ab1aca357d75d766ba866d689f432c0e9622178f2->enter($__internal_6e940e3e9b73771b3ae37c6ab1aca357d75d766ba866d689f432c0e9622178f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6e940e3e9b73771b3ae37c6ab1aca357d75d766ba866d689f432c0e9622178f2->leave($__internal_6e940e3e9b73771b3ae37c6ab1aca357d75d766ba866d689f432c0e9622178f2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6887e31223adce79a221d64267b8bb99bc1c9a5ab07581435d79ef92e7655ccc = $this->env->getExtension("native_profiler");
        $__internal_6887e31223adce79a221d64267b8bb99bc1c9a5ab07581435d79ef92e7655ccc->enter($__internal_6887e31223adce79a221d64267b8bb99bc1c9a5ab07581435d79ef92e7655ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6887e31223adce79a221d64267b8bb99bc1c9a5ab07581435d79ef92e7655ccc->leave($__internal_6887e31223adce79a221d64267b8bb99bc1c9a5ab07581435d79ef92e7655ccc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
