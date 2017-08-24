<?php

/* ISETSOMagazineBundle:magazine:edit.html.twig */
class __TwigTemplate_d7441c8f86baacda56ccc7605bc7ad65407b65b3f8230bce16726cb3e14b8822 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:magazine:edit.html.twig", 1);
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
        $__internal_292c0cb10677f5f70d51cb880ca1c8d16197f77be4a9920f21a2e21c77aee1cd = $this->env->getExtension("native_profiler");
        $__internal_292c0cb10677f5f70d51cb880ca1c8d16197f77be4a9920f21a2e21c77aee1cd->enter($__internal_292c0cb10677f5f70d51cb880ca1c8d16197f77be4a9920f21a2e21c77aee1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:magazine:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_292c0cb10677f5f70d51cb880ca1c8d16197f77be4a9920f21a2e21c77aee1cd->leave($__internal_292c0cb10677f5f70d51cb880ca1c8d16197f77be4a9920f21a2e21c77aee1cd_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_dce33e7c0c5562b155d24e0f1fe581167c67bf2b2f680e02d6d0c7369b4cd8af = $this->env->getExtension("native_profiler");
        $__internal_dce33e7c0c5562b155d24e0f1fe581167c67bf2b2f680e02d6d0c7369b4cd8af->enter($__internal_dce33e7c0c5562b155d24e0f1fe581167c67bf2b2f680e02d6d0c7369b4cd8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_dce33e7c0c5562b155d24e0f1fe581167c67bf2b2f680e02d6d0c7369b4cd8af->leave($__internal_dce33e7c0c5562b155d24e0f1fe581167c67bf2b2f680e02d6d0c7369b4cd8af_prof);

    }

    // line 7
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_9e1bcd097daa291cdd2c9e6a0afeb1f64b5136ce32f1e9631aa73fe98e68ee4e = $this->env->getExtension("native_profiler");
        $__internal_9e1bcd097daa291cdd2c9e6a0afeb1f64b5136ce32f1e9631aa73fe98e68ee4e->enter($__internal_9e1bcd097daa291cdd2c9e6a0afeb1f64b5136ce32f1e9631aa73fe98e68ee4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazin.edit.name"), "html", null, true);
        
        $__internal_9e1bcd097daa291cdd2c9e6a0afeb1f64b5136ce32f1e9631aa73fe98e68ee4e->leave($__internal_9e1bcd097daa291cdd2c9e6a0afeb1f64b5136ce32f1e9631aa73fe98e68ee4e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc282d9637da634e2d1cd19bc0ecda23e2cbddbfb847b57fbc7af622f7dd134b = $this->env->getExtension("native_profiler");
        $__internal_bc282d9637da634e2d1cd19bc0ecda23e2cbddbfb847b57fbc7af622f7dd134b->enter($__internal_bc282d9637da634e2d1cd19bc0ecda23e2cbddbfb847b57fbc7af622f7dd134b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<div data-widget-group=\"group1\">
    <div class=\"panel panel-primary\" data-widget='{\"draggable\": \"false\"}'>
        <div class=\"panel-heading\">
            <h2><i class=\"ti ti-pencil-alt\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazin.edit.name"), "html", null, true);
        echo "</h2>
            <div class=\"panel-ctrls\" data-actions-container=\"\" data-action-collapse='{\"target\": \".panel-body\"}'></div>
        </div>
        <div class=\"panel-editbox\" data-widget-controls=\"\"></div>

        ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal row-border")));
        // line 19
        echo "
        <div class=\"panel-body\">

\t        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
            
        </div>
        <div class=\"panel-footer\">
            <div class=\"pull-right\">
                <button class=\"btn btn-primary \" type=\"submit\">
                    <i class=\"ti ti-pencil-alt\"></i>
                    ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazin.edit.submit"), "html", null, true);
        echo "
                </button>
            </div>
        </div>
        ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>
</div>
";
        
        $__internal_bc282d9637da634e2d1cd19bc0ecda23e2cbddbfb847b57fbc7af622f7dd134b->leave($__internal_bc282d9637da634e2d1cd19bc0ecda23e2cbddbfb847b57fbc7af622f7dd134b_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:magazine:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 33,  105 => 29,  95 => 22,  90 => 19,  88 => 17,  80 => 12,  75 => 9,  69 => 8,  57 => 7,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('magazine_index') }}">*/
/*        {{ 'magazin.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* 	 {% block breadcrumbActive %}{{ 'magazin.edit.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/* <div data-widget-group="group1">*/
/*     <div class="panel panel-primary" data-widget='{"draggable": "false"}'>*/
/*         <div class="panel-heading">*/
/*             <h2><i class="ti ti-pencil-alt"></i> {{ 'magazin.edit.name'|trans }}</h2>*/
/*             <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>*/
/*         </div>*/
/*         <div class="panel-editbox" data-widget-controls=""></div>*/
/* */
/*         {{ form_start(edit_form ,{*/
/*                         'attr' : { 'class' : 'form-horizontal row-border' } */
/*                     }) }}*/
/*         <div class="panel-body">*/
/* */
/* 	        {{ form_widget(edit_form) }}*/
/*             */
/*         </div>*/
/*         <div class="panel-footer">*/
/*             <div class="pull-right">*/
/*                 <button class="btn btn-primary " type="submit">*/
/*                     <i class="ti ti-pencil-alt"></i>*/
/*                     {{ 'magazin.edit.submit'|trans }}*/
/*                 </button>*/
/*             </div>*/
/*         </div>*/
/*         {{ form_end(edit_form) }}*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
