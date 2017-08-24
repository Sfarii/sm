<?php

/* ISETSOMagazineBundle:familydurable:edit.html.twig */
class __TwigTemplate_a6ecd2b633ab43c620f551703042e038aec2799d8a456c65205398d8e4636689 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:familydurable:edit.html.twig", 1);
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
        $__internal_33b36e6458c99365dfe5b7b80d0de03b1f73041c535e2505e010f4dcf4ef0e24 = $this->env->getExtension("native_profiler");
        $__internal_33b36e6458c99365dfe5b7b80d0de03b1f73041c535e2505e010f4dcf4ef0e24->enter($__internal_33b36e6458c99365dfe5b7b80d0de03b1f73041c535e2505e010f4dcf4ef0e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:familydurable:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33b36e6458c99365dfe5b7b80d0de03b1f73041c535e2505e010f4dcf4ef0e24->leave($__internal_33b36e6458c99365dfe5b7b80d0de03b1f73041c535e2505e010f4dcf4ef0e24_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_811dedbefbed867ae06941d8576e9d53502f62f8dae493238b74f6b25dda6fd1 = $this->env->getExtension("native_profiler");
        $__internal_811dedbefbed867ae06941d8576e9d53502f62f8dae493238b74f6b25dda6fd1->enter($__internal_811dedbefbed867ae06941d8576e9d53502f62f8dae493238b74f6b25dda6fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("familydurable_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.list.name"), "html", null, true);
        echo "</a>
";
        
        $__internal_811dedbefbed867ae06941d8576e9d53502f62f8dae493238b74f6b25dda6fd1->leave($__internal_811dedbefbed867ae06941d8576e9d53502f62f8dae493238b74f6b25dda6fd1_prof);

    }

    // line 5
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_0ee5572cd5042cb0dbd6283683ebd96caeac892f2ba80d0cadbfb1dd789adc08 = $this->env->getExtension("native_profiler");
        $__internal_0ee5572cd5042cb0dbd6283683ebd96caeac892f2ba80d0cadbfb1dd789adc08->enter($__internal_0ee5572cd5042cb0dbd6283683ebd96caeac892f2ba80d0cadbfb1dd789adc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.edit.name"), "html", null, true);
        echo "
";
        
        $__internal_0ee5572cd5042cb0dbd6283683ebd96caeac892f2ba80d0cadbfb1dd789adc08->leave($__internal_0ee5572cd5042cb0dbd6283683ebd96caeac892f2ba80d0cadbfb1dd789adc08_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b13842077946cb7cd27abab48816b1497369950fc147830a23d62fa9fee9defa = $this->env->getExtension("native_profiler");
        $__internal_b13842077946cb7cd27abab48816b1497369950fc147830a23d62fa9fee9defa->enter($__internal_b13842077946cb7cd27abab48816b1497369950fc147830a23d62fa9fee9defa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:familydurable:edit.html.twig", 9)->display(array_merge($context, array("form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "form_name" => $this->env->getExtension('translator')->trans("family.edit.name"), "submit_name" => $this->env->getExtension('translator')->trans("family.edit.submit"))));
        
        $__internal_b13842077946cb7cd27abab48816b1497369950fc147830a23d62fa9fee9defa->leave($__internal_b13842077946cb7cd27abab48816b1497369950fc147830a23d62fa9fee9defa_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:familydurable:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 9,  70 => 8,  60 => 6,  54 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('familydurable_index')}}">{{ 'family.list.name'|trans }}</a>*/
/* {% endblock %}*/
/* {% block breadcrumbActive %}*/
/*     {{ 'family.edit.name'|trans }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': edit_form ,'form_name' : 'family.edit.name'|trans ,'submit_name': 'family.edit.submit'|trans } %}*/
/* {% endblock %}*/
/* */
