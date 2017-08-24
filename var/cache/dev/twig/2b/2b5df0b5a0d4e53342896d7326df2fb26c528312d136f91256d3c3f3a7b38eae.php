<?php

/* ISETSOMagazineBundle:provider:new.html.twig */
class __TwigTemplate_54ace432bc19939908897f6b80e230b72787fddc454c8da6fbe702fb7cffcb9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:provider:new.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'breadcrumbActive' => array($this, 'block_breadcrumbActive'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88c6135ef4c7b621921d0f7a6dc309103a8142b8c5749a92275c4cd01c638cbc = $this->env->getExtension("native_profiler");
        $__internal_88c6135ef4c7b621921d0f7a6dc309103a8142b8c5749a92275c4cd01c638cbc->enter($__internal_88c6135ef4c7b621921d0f7a6dc309103a8142b8c5749a92275c4cd01c638cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:provider:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88c6135ef4c7b621921d0f7a6dc309103a8142b8c5749a92275c4cd01c638cbc->leave($__internal_88c6135ef4c7b621921d0f7a6dc309103a8142b8c5749a92275c4cd01c638cbc_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_a477c888edadbe1b5e36616183837d196cb7ea379036a1503745beb1eaaa46af = $this->env->getExtension("native_profiler");
        $__internal_a477c888edadbe1b5e36616183837d196cb7ea379036a1503745beb1eaaa46af->enter($__internal_a477c888edadbe1b5e36616183837d196cb7ea379036a1503745beb1eaaa46af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("provider_index");
        echo "\">
       ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("provider.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_a477c888edadbe1b5e36616183837d196cb7ea379036a1503745beb1eaaa46af->leave($__internal_a477c888edadbe1b5e36616183837d196cb7ea379036a1503745beb1eaaa46af_prof);

    }

    // line 9
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_0ab044a340bbe0b9b4966b433b86a2de846b541bb95ce4162365e6bab63633e9 = $this->env->getExtension("native_profiler");
        $__internal_0ab044a340bbe0b9b4966b433b86a2de846b541bb95ce4162365e6bab63633e9->enter($__internal_0ab044a340bbe0b9b4966b433b86a2de846b541bb95ce4162365e6bab63633e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("provider.new.name"), "html", null, true);
        echo "
";
        
        $__internal_0ab044a340bbe0b9b4966b433b86a2de846b541bb95ce4162365e6bab63633e9->leave($__internal_0ab044a340bbe0b9b4966b433b86a2de846b541bb95ce4162365e6bab63633e9_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_15984391c2bb899daa94c42664d783f91886c63701ca3efc9b576e85b922acc8 = $this->env->getExtension("native_profiler");
        $__internal_15984391c2bb899daa94c42664d783f91886c63701ca3efc9b576e85b922acc8->enter($__internal_15984391c2bb899daa94c42664d783f91886c63701ca3efc9b576e85b922acc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:provider:new.html.twig", 14)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "form_name" => $this->env->getExtension('translator')->trans("provider.new.name"), "submit_name" => $this->env->getExtension('translator')->trans("provider.new.submit"))));
        
        $__internal_15984391c2bb899daa94c42664d783f91886c63701ca3efc9b576e85b922acc8->leave($__internal_15984391c2bb899daa94c42664d783f91886c63701ca3efc9b576e85b922acc8_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:provider:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 14,  73 => 13,  63 => 10,  57 => 9,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/*     <a href="{{ path('provider_index') }}">*/
/*        {{ 'provider.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
/* {% block breadcrumbActive %}*/
/*     {{ 'provider.new.name'|trans }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': form ,'form_name' : 'provider.new.name'|trans ,'submit_name': 'provider.new.submit'|trans } %}*/
/* {% endblock %}*/
/* */
