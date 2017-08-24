<?php

/* ISETSOMagazineBundle:origin:edit.html.twig */
class __TwigTemplate_733bd0648087ce7e3be7a9c11b2d126a57da32951ee009dec155bc92f226365c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:origin:edit.html.twig", 1);
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
        $__internal_07f316659f57c99b14be965ce56de72a737ed800d34500980d89383beb51b94c = $this->env->getExtension("native_profiler");
        $__internal_07f316659f57c99b14be965ce56de72a737ed800d34500980d89383beb51b94c->enter($__internal_07f316659f57c99b14be965ce56de72a737ed800d34500980d89383beb51b94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:origin:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07f316659f57c99b14be965ce56de72a737ed800d34500980d89383beb51b94c->leave($__internal_07f316659f57c99b14be965ce56de72a737ed800d34500980d89383beb51b94c_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_e8afb51ff911828e43fb393dc25bc7709eb99987d69726d813499126275bb253 = $this->env->getExtension("native_profiler");
        $__internal_e8afb51ff911828e43fb393dc25bc7709eb99987d69726d813499126275bb253->enter($__internal_e8afb51ff911828e43fb393dc25bc7709eb99987d69726d813499126275bb253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("origin_index");
        echo "\">
       ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("origin.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_e8afb51ff911828e43fb393dc25bc7709eb99987d69726d813499126275bb253->leave($__internal_e8afb51ff911828e43fb393dc25bc7709eb99987d69726d813499126275bb253_prof);

    }

    // line 7
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_f3864fbad1f30bc13f162c171daef9340b82fa022e8238c9b6d483be1a274e18 = $this->env->getExtension("native_profiler");
        $__internal_f3864fbad1f30bc13f162c171daef9340b82fa022e8238c9b6d483be1a274e18->enter($__internal_f3864fbad1f30bc13f162c171daef9340b82fa022e8238c9b6d483be1a274e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("origin.edit.name"), "html", null, true);
        
        $__internal_f3864fbad1f30bc13f162c171daef9340b82fa022e8238c9b6d483be1a274e18->leave($__internal_f3864fbad1f30bc13f162c171daef9340b82fa022e8238c9b6d483be1a274e18_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_89b3040a99c19efbc316d840eea6586723ef1a8e4494860ac80ce08aa1ddb182 = $this->env->getExtension("native_profiler");
        $__internal_89b3040a99c19efbc316d840eea6586723ef1a8e4494860ac80ce08aa1ddb182->enter($__internal_89b3040a99c19efbc316d840eea6586723ef1a8e4494860ac80ce08aa1ddb182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<div data-widget-group=\"group1\">
    <div class=\"panel panel-primary\" data-widget='{\"draggable\": \"false\"}'>
        <div class=\"panel-heading\">
            <h2><i class=\"ti ti-pencil-alt\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("origin.edit.name"), "html", null, true);
        echo "</h2>
            <div class=\"panel-ctrls\" data-actions-container=\"\" data-action-collapse='{\"target\": \".panel-body\"}'></div>
        </div>
        <div class=\"panel-editbox\" data-widget-controls=\"\"></div>
        ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal row-border")));
        // line 18
        echo "
        <div class=\"panel-body\">
\t        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
\t    </div>
        <div class=\"panel-footer\">
            <div class=\"pull-right\">
                <button class=\"btn btn-primary \" type=\"submit\">
                    <i class=\"ti ti-pencil-alt\"></i>
                    ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("origin.edit.submit"), "html", null, true);
        echo "
                </button>
            </div>
        </div>
         ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>
</div>
";
        
        $__internal_89b3040a99c19efbc316d840eea6586723ef1a8e4494860ac80ce08aa1ddb182->leave($__internal_89b3040a99c19efbc316d840eea6586723ef1a8e4494860ac80ce08aa1ddb182_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:origin:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 30,  102 => 26,  93 => 20,  89 => 18,  87 => 16,  80 => 12,  75 => 9,  69 => 8,  57 => 7,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('origin_index') }}">*/
/*        {{ 'origin.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* 	 {% block breadcrumbActive %}{{ 'origin.edit.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/* <div data-widget-group="group1">*/
/*     <div class="panel panel-primary" data-widget='{"draggable": "false"}'>*/
/*         <div class="panel-heading">*/
/*             <h2><i class="ti ti-pencil-alt"></i> {{ 'origin.edit.name'|trans }}</h2>*/
/*             <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>*/
/*         </div>*/
/*         <div class="panel-editbox" data-widget-controls=""></div>*/
/*         {{ form_start(edit_form ,{*/
/*                         'attr' : { 'class' : 'form-horizontal row-border' } */
/*                     }) }}*/
/*         <div class="panel-body">*/
/* 	        {{ form_widget(edit_form) }}*/
/* 	    </div>*/
/*         <div class="panel-footer">*/
/*             <div class="pull-right">*/
/*                 <button class="btn btn-primary " type="submit">*/
/*                     <i class="ti ti-pencil-alt"></i>*/
/*                     {{ 'origin.edit.submit'|trans }}*/
/*                 </button>*/
/*             </div>*/
/*         </div>*/
/*          {{ form_end(edit_form) }}*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
