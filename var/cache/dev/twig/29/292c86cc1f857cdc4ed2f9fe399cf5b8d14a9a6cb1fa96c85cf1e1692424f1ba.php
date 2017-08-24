<?php

/* ISETSOMagazineBundle:subfamily:edit.html.twig */
class __TwigTemplate_64d3ea854985b48c0dcfe8dc93e5a2caa7bb28c8a4f87b1bef19f81f263b3d84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:subfamily:edit.html.twig", 1);
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
        $__internal_162858a0fcb2cf6c94712f268465248998bea25ae79843b913c5505097e22b84 = $this->env->getExtension("native_profiler");
        $__internal_162858a0fcb2cf6c94712f268465248998bea25ae79843b913c5505097e22b84->enter($__internal_162858a0fcb2cf6c94712f268465248998bea25ae79843b913c5505097e22b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:subfamily:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_162858a0fcb2cf6c94712f268465248998bea25ae79843b913c5505097e22b84->leave($__internal_162858a0fcb2cf6c94712f268465248998bea25ae79843b913c5505097e22b84_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_a4dae6f962ca4ecf134c5274714b40616a4fe341cc908b156d83a54656ec0ef4 = $this->env->getExtension("native_profiler");
        $__internal_a4dae6f962ca4ecf134c5274714b40616a4fe341cc908b156d83a54656ec0ef4->enter($__internal_a4dae6f962ca4ecf134c5274714b40616a4fe341cc908b156d83a54656ec0ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subfamily_index", array("id" => $this->getAttribute((isset($context["family"]) ? $context["family"] : $this->getContext($context, "family")), "id", array()))), "html", null, true);
        echo "\">
       ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("subfamily.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_a4dae6f962ca4ecf134c5274714b40616a4fe341cc908b156d83a54656ec0ef4->leave($__internal_a4dae6f962ca4ecf134c5274714b40616a4fe341cc908b156d83a54656ec0ef4_prof);

    }

    // line 9
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_04cc8bb82719bdbab1370b659d2abfcd47fc0024d7e6ba3cb687d3116937c063 = $this->env->getExtension("native_profiler");
        $__internal_04cc8bb82719bdbab1370b659d2abfcd47fc0024d7e6ba3cb687d3116937c063->enter($__internal_04cc8bb82719bdbab1370b659d2abfcd47fc0024d7e6ba3cb687d3116937c063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("subfamily.edit.name"), "html", null, true);
        echo "
";
        
        $__internal_04cc8bb82719bdbab1370b659d2abfcd47fc0024d7e6ba3cb687d3116937c063->leave($__internal_04cc8bb82719bdbab1370b659d2abfcd47fc0024d7e6ba3cb687d3116937c063_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_49aebba2e7c971589c698d1925818a32058d4060d828deb9955edf4a3f83953f = $this->env->getExtension("native_profiler");
        $__internal_49aebba2e7c971589c698d1925818a32058d4060d828deb9955edf4a3f83953f->enter($__internal_49aebba2e7c971589c698d1925818a32058d4060d828deb9955edf4a3f83953f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:subfamily:edit.html.twig", 14)->display(array_merge($context, array("form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "form_name" => $this->env->getExtension('translator')->trans("subfamily.edit.name"), "submit_name" => $this->env->getExtension('translator')->trans("subfamily.edit.submit"))));
        
        $__internal_49aebba2e7c971589c698d1925818a32058d4060d828deb9955edf4a3f83953f->leave($__internal_49aebba2e7c971589c698d1925818a32058d4060d828deb9955edf4a3f83953f_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:subfamily:edit.html.twig";
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
/*     <a href="{{ path('subfamily_index',{ 'id' : family.id }) }}">*/
/*        {{ 'subfamily.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
/* {% block breadcrumbActive %}*/
/*     {{ 'subfamily.edit.name'|trans }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': edit_form ,'form_name' : 'subfamily.edit.name'|trans ,'submit_name': 'subfamily.edit.submit'|trans } %}*/
/* {% endblock %}*/
/* */
