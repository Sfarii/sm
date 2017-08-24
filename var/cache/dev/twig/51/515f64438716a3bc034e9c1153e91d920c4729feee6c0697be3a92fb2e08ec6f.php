<?php

/* ISETSOMagazineBundle:magazine:new.html.twig */
class __TwigTemplate_51a3dbd7618b6ed32286a68f51e890b34009c0ed8869edcda4cd7044d1e22ec3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:magazine:new.html.twig", 1);
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
        $__internal_0130a3aa938b00ad0c0ed6ae1745f46b2a4f8782ed82e9395ffe3f8e2118fe88 = $this->env->getExtension("native_profiler");
        $__internal_0130a3aa938b00ad0c0ed6ae1745f46b2a4f8782ed82e9395ffe3f8e2118fe88->enter($__internal_0130a3aa938b00ad0c0ed6ae1745f46b2a4f8782ed82e9395ffe3f8e2118fe88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:magazine:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0130a3aa938b00ad0c0ed6ae1745f46b2a4f8782ed82e9395ffe3f8e2118fe88->leave($__internal_0130a3aa938b00ad0c0ed6ae1745f46b2a4f8782ed82e9395ffe3f8e2118fe88_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_5bc6c1780db582c7cb73aaf097d42a3dec0cc40a072010b528e48a4cb515bc41 = $this->env->getExtension("native_profiler");
        $__internal_5bc6c1780db582c7cb73aaf097d42a3dec0cc40a072010b528e48a4cb515bc41->enter($__internal_5bc6c1780db582c7cb73aaf097d42a3dec0cc40a072010b528e48a4cb515bc41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("magazine_index");
        echo "\">
       ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazin.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_5bc6c1780db582c7cb73aaf097d42a3dec0cc40a072010b528e48a4cb515bc41->leave($__internal_5bc6c1780db582c7cb73aaf097d42a3dec0cc40a072010b528e48a4cb515bc41_prof);

    }

    // line 7
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_cfb10b1bbe2e56266b693d9a63c55e1d43ea01a081ec3d12a3b0a5d22a376eb9 = $this->env->getExtension("native_profiler");
        $__internal_cfb10b1bbe2e56266b693d9a63c55e1d43ea01a081ec3d12a3b0a5d22a376eb9->enter($__internal_cfb10b1bbe2e56266b693d9a63c55e1d43ea01a081ec3d12a3b0a5d22a376eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazin.new.name"), "html", null, true);
        
        $__internal_cfb10b1bbe2e56266b693d9a63c55e1d43ea01a081ec3d12a3b0a5d22a376eb9->leave($__internal_cfb10b1bbe2e56266b693d9a63c55e1d43ea01a081ec3d12a3b0a5d22a376eb9_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bc8fc08077f2923d6377a097cbaa640ce21878ae9fe5e489f23baee72f6c242 = $this->env->getExtension("native_profiler");
        $__internal_3bc8fc08077f2923d6377a097cbaa640ce21878ae9fe5e489f23baee72f6c242->enter($__internal_3bc8fc08077f2923d6377a097cbaa640ce21878ae9fe5e489f23baee72f6c242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<div data-widget-group=\"group1\">
    <div class=\"panel panel-primary\" data-widget='{\"draggable\": \"false\"}'>
        <div class=\"panel-heading\">
            <h2><i class=\"ti ti-pencil-alt\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazin.new.name"), "html", null, true);
        echo "</h2>
            <div class=\"panel-ctrls\" data-actions-container=\"\" data-action-collapse='{\"target\": \".panel-body\"}'></div>
        </div>
        <div class=\"panel-editbox\" data-widget-controls=\"\"></div>
        ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal row-border")));
        // line 18
        echo "
        <div class=\"panel-body\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
           
        </div>
        <div class=\"panel-footer\">
            <div class=\"pull-right\">
                <button class=\"btn btn-primary \" type=\"submit\">
                    <i class=\"ti ti-pencil-alt\"></i>
                    ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazin.new.submit"), "html", null, true);
        echo "
                </button>
            </div>
        </div>
         ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>
";
        
        $__internal_3bc8fc08077f2923d6377a097cbaa640ce21878ae9fe5e489f23baee72f6c242->leave($__internal_3bc8fc08077f2923d6377a097cbaa640ce21878ae9fe5e489f23baee72f6c242_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:magazine:new.html.twig";
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
/*     <a href="{{ path('magazine_index') }}">*/
/*        {{ 'magazin.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/*      {% block breadcrumbActive %}{{ 'magazin.new.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/* <div data-widget-group="group1">*/
/*     <div class="panel panel-primary" data-widget='{"draggable": "false"}'>*/
/*         <div class="panel-heading">*/
/*             <h2><i class="ti ti-pencil-alt"></i> {{ 'magazin.new.name'|trans }}</h2>*/
/*             <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>*/
/*         </div>*/
/*         <div class="panel-editbox" data-widget-controls=""></div>*/
/*         {{ form_start(form ,{*/
/*                         'attr' : { 'class' : 'form-horizontal row-border' } */
/*                     }) }}*/
/*         <div class="panel-body">*/
/*             {{ form_widget(form) }}*/
/*            */
/*         </div>*/
/*         <div class="panel-footer">*/
/*             <div class="pull-right">*/
/*                 <button class="btn btn-primary " type="submit">*/
/*                     <i class="ti ti-pencil-alt"></i>*/
/*                     {{ 'magazin.new.submit'|trans }}*/
/*                 </button>*/
/*             </div>*/
/*         </div>*/
/*          {{ form_end(form) }}*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
