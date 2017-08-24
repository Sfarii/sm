<?php

/* ISETSOMagazineBundle:familyconsumable:new.html.twig */
class __TwigTemplate_70e5c32bfb601ba5f0683a80d7619385cd1bd57ee8ab75e271f293d813fa1176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:familyconsumable:new.html.twig", 1);
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
        $__internal_6efcb537ec7cb9f65b6ed9b75055b8444e15f9f7536754befa839ba173b12201 = $this->env->getExtension("native_profiler");
        $__internal_6efcb537ec7cb9f65b6ed9b75055b8444e15f9f7536754befa839ba173b12201->enter($__internal_6efcb537ec7cb9f65b6ed9b75055b8444e15f9f7536754befa839ba173b12201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:familyconsumable:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6efcb537ec7cb9f65b6ed9b75055b8444e15f9f7536754befa839ba173b12201->leave($__internal_6efcb537ec7cb9f65b6ed9b75055b8444e15f9f7536754befa839ba173b12201_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_18a9bde193ad807c5b7c5879de9bedf9f48623351e914bc3426f8356eef5509c = $this->env->getExtension("native_profiler");
        $__internal_18a9bde193ad807c5b7c5879de9bedf9f48623351e914bc3426f8356eef5509c->enter($__internal_18a9bde193ad807c5b7c5879de9bedf9f48623351e914bc3426f8356eef5509c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("familyconsumable_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.list.name"), "html", null, true);
        echo "</a>
";
        
        $__internal_18a9bde193ad807c5b7c5879de9bedf9f48623351e914bc3426f8356eef5509c->leave($__internal_18a9bde193ad807c5b7c5879de9bedf9f48623351e914bc3426f8356eef5509c_prof);

    }

    // line 5
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_07c7dcc148450b8d2b127875fbdaa9ea40a721ab6c3827cec638435f954d624f = $this->env->getExtension("native_profiler");
        $__internal_07c7dcc148450b8d2b127875fbdaa9ea40a721ab6c3827cec638435f954d624f->enter($__internal_07c7dcc148450b8d2b127875fbdaa9ea40a721ab6c3827cec638435f954d624f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.new.name"), "html", null, true);
        echo "
";
        
        $__internal_07c7dcc148450b8d2b127875fbdaa9ea40a721ab6c3827cec638435f954d624f->leave($__internal_07c7dcc148450b8d2b127875fbdaa9ea40a721ab6c3827cec638435f954d624f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ef9f04ad55c1470249dd0809045334c2a266a1b5dd53d8c4686bafc7c017182 = $this->env->getExtension("native_profiler");
        $__internal_0ef9f04ad55c1470249dd0809045334c2a266a1b5dd53d8c4686bafc7c017182->enter($__internal_0ef9f04ad55c1470249dd0809045334c2a266a1b5dd53d8c4686bafc7c017182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:familyconsumable:new.html.twig", 9)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "form_name" => $this->env->getExtension('translator')->trans("family.new.name"), "submit_name" => $this->env->getExtension('translator')->trans("family.new.submit"))));
        
        $__internal_0ef9f04ad55c1470249dd0809045334c2a266a1b5dd53d8c4686bafc7c017182->leave($__internal_0ef9f04ad55c1470249dd0809045334c2a266a1b5dd53d8c4686bafc7c017182_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:familyconsumable:new.html.twig";
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
/*     <a href="{{ path('familyconsumable_index')}}">{{ 'family.list.name'|trans }}</a>*/
/* {% endblock %}*/
/* {% block breadcrumbActive %}*/
/*     {{ 'family.new.name'|trans }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': form ,'form_name' : 'family.new.name'|trans ,'submit_name': 'family.new.submit'|trans } %}*/
/* {% endblock %}*/
/* */
