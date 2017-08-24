<?php

/* ISETSOMagazineBundle:local:edit.html.twig */
class __TwigTemplate_21012e42281cec833f3a8a0bc59cfdd5f58bd7082931f428fa52d47c2194bcc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:local:edit.html.twig", 1);
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
        $__internal_7e19e417c162ea407bb3937eeb35eec9a052d08155c5eaa058986b727c248901 = $this->env->getExtension("native_profiler");
        $__internal_7e19e417c162ea407bb3937eeb35eec9a052d08155c5eaa058986b727c248901->enter($__internal_7e19e417c162ea407bb3937eeb35eec9a052d08155c5eaa058986b727c248901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:local:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e19e417c162ea407bb3937eeb35eec9a052d08155c5eaa058986b727c248901->leave($__internal_7e19e417c162ea407bb3937eeb35eec9a052d08155c5eaa058986b727c248901_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_da04e2bab3b648b52a19e81a81ceb7e31002f601215fcf8c0465d3c5c7a376a2 = $this->env->getExtension("native_profiler");
        $__internal_da04e2bab3b648b52a19e81a81ceb7e31002f601215fcf8c0465d3c5c7a376a2->enter($__internal_da04e2bab3b648b52a19e81a81ceb7e31002f601215fcf8c0465d3c5c7a376a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("local_index");
        echo "\">
       ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("local.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_da04e2bab3b648b52a19e81a81ceb7e31002f601215fcf8c0465d3c5c7a376a2->leave($__internal_da04e2bab3b648b52a19e81a81ceb7e31002f601215fcf8c0465d3c5c7a376a2_prof);

    }

    // line 7
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_5b852e1892a487b21c4b0c9abfd9dc2649f5f986f0f994e1037cb3dad1900a0b = $this->env->getExtension("native_profiler");
        $__internal_5b852e1892a487b21c4b0c9abfd9dc2649f5f986f0f994e1037cb3dad1900a0b->enter($__internal_5b852e1892a487b21c4b0c9abfd9dc2649f5f986f0f994e1037cb3dad1900a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("local.edit.name"), "html", null, true);
        
        $__internal_5b852e1892a487b21c4b0c9abfd9dc2649f5f986f0f994e1037cb3dad1900a0b->leave($__internal_5b852e1892a487b21c4b0c9abfd9dc2649f5f986f0f994e1037cb3dad1900a0b_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8b675fdb22815499c6e68dfb40233e6ac92fff76f6b9078b8c7450ebd930f71 = $this->env->getExtension("native_profiler");
        $__internal_d8b675fdb22815499c6e68dfb40233e6ac92fff76f6b9078b8c7450ebd930f71->enter($__internal_d8b675fdb22815499c6e68dfb40233e6ac92fff76f6b9078b8c7450ebd930f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<div data-widget-group=\"group1\">
    <div class=\"panel panel-primary\" data-widget='{\"draggable\": \"false\"}'>
        <div class=\"panel-heading\">
            <h2><i class=\"ti ti-pencil-alt\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("local.edit.name"), "html", null, true);
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
            
        </div>
        <div class=\"panel-footer\">
            <div class=\"pull-right\">
                <button class=\"btn btn-primary \" type=\"submit\">
                    <i class=\"ti ti-pencil-alt\"></i>
                    ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("local.edit.submit"), "html", null, true);
        echo "
                </button>
            </div>
        </div>
        ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>
</div>
";
        
        $__internal_d8b675fdb22815499c6e68dfb40233e6ac92fff76f6b9078b8c7450ebd930f71->leave($__internal_d8b675fdb22815499c6e68dfb40233e6ac92fff76f6b9078b8c7450ebd930f71_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:local:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 31,  103 => 27,  93 => 20,  89 => 18,  87 => 16,  80 => 12,  75 => 9,  69 => 8,  57 => 7,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('local_index') }}">*/
/*        {{ 'local.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* 	 {% block breadcrumbActive %}{{ 'local.edit.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/* <div data-widget-group="group1">*/
/*     <div class="panel panel-primary" data-widget='{"draggable": "false"}'>*/
/*         <div class="panel-heading">*/
/*             <h2><i class="ti ti-pencil-alt"></i> {{ 'local.edit.name'|trans }}</h2>*/
/*             <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>*/
/*         </div>*/
/*         <div class="panel-editbox" data-widget-controls=""></div>*/
/*         {{ form_start(edit_form ,{*/
/*                         'attr' : { 'class' : 'form-horizontal row-border' } */
/*                     }) }}*/
/*         <div class="panel-body">*/
/* 	        {{ form_widget(edit_form) }}*/
/*             */
/*         </div>*/
/*         <div class="panel-footer">*/
/*             <div class="pull-right">*/
/*                 <button class="btn btn-primary " type="submit">*/
/*                     <i class="ti ti-pencil-alt"></i>*/
/*                     {{ 'local.edit.submit'|trans }}*/
/*                 </button>*/
/*             </div>*/
/*         </div>*/
/*         {{ form_end(edit_form) }}*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
