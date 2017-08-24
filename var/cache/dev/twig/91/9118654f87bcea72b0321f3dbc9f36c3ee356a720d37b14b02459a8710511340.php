<?php

/* ISETSOMagazineBundle:origin:new.html.twig */
class __TwigTemplate_efbcbe82b83299c9d4523d7cd0eb4ff72892c83fd186053073e2fa2a12fefa37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:origin:new.html.twig", 1);
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
        $__internal_783e7edfc0e27753bc95be5ec2b2a28b6a255e6a90d12661fe3ba93b4bf55aeb = $this->env->getExtension("native_profiler");
        $__internal_783e7edfc0e27753bc95be5ec2b2a28b6a255e6a90d12661fe3ba93b4bf55aeb->enter($__internal_783e7edfc0e27753bc95be5ec2b2a28b6a255e6a90d12661fe3ba93b4bf55aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:origin:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_783e7edfc0e27753bc95be5ec2b2a28b6a255e6a90d12661fe3ba93b4bf55aeb->leave($__internal_783e7edfc0e27753bc95be5ec2b2a28b6a255e6a90d12661fe3ba93b4bf55aeb_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_63cf3fc7117e90ca210cf1edf8e8a0dbc02c76f58cf833a7d9216c018317453b = $this->env->getExtension("native_profiler");
        $__internal_63cf3fc7117e90ca210cf1edf8e8a0dbc02c76f58cf833a7d9216c018317453b->enter($__internal_63cf3fc7117e90ca210cf1edf8e8a0dbc02c76f58cf833a7d9216c018317453b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_63cf3fc7117e90ca210cf1edf8e8a0dbc02c76f58cf833a7d9216c018317453b->leave($__internal_63cf3fc7117e90ca210cf1edf8e8a0dbc02c76f58cf833a7d9216c018317453b_prof);

    }

    // line 7
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_5b33c5b5ccf498aa58f79152760e48eb12b0d0ff6f22b343c64dc07f2f257061 = $this->env->getExtension("native_profiler");
        $__internal_5b33c5b5ccf498aa58f79152760e48eb12b0d0ff6f22b343c64dc07f2f257061->enter($__internal_5b33c5b5ccf498aa58f79152760e48eb12b0d0ff6f22b343c64dc07f2f257061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("origin.new.name"), "html", null, true);
        
        $__internal_5b33c5b5ccf498aa58f79152760e48eb12b0d0ff6f22b343c64dc07f2f257061->leave($__internal_5b33c5b5ccf498aa58f79152760e48eb12b0d0ff6f22b343c64dc07f2f257061_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_49283764e46bab0042d862ff037a6fa11e72bb57bb886ff7fd9000047d2730c6 = $this->env->getExtension("native_profiler");
        $__internal_49283764e46bab0042d862ff037a6fa11e72bb57bb886ff7fd9000047d2730c6->enter($__internal_49283764e46bab0042d862ff037a6fa11e72bb57bb886ff7fd9000047d2730c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<div data-widget-group=\"group1\">
    <div class=\"panel panel-primary\" data-widget='{\"draggable\": \"false\"}'>
        <div class=\"panel-heading\">
            <h2><i class=\"ti ti-pencil-alt\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("origin.new.name"), "html", null, true);
        echo "</h2>
            <div class=\"panel-ctrls\" data-actions-container=\"\" data-action-collapse='{\"target\": \".panel-body\"}'></div>
        </div>
        <div class=\"panel-editbox\" data-widget-controls=\"\"></div>

        ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal row-border")));
        // line 19
        echo "

        <div class=\"panel-body\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
        <div class=\"panel-footer\">
            <div class=\"pull-right\">
                <button class=\"btn btn-primary \" type=\"submit\">
                    <i class=\"ti ti-pencil-alt\"></i>
                    ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("origin.new.submit"), "html", null, true);
        echo "
                </button>
            </div>
        </div>
        ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>
";
        
        $__internal_49283764e46bab0042d862ff037a6fa11e72bb57bb886ff7fd9000047d2730c6->leave($__internal_49283764e46bab0042d862ff037a6fa11e72bb57bb886ff7fd9000047d2730c6_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:origin:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 32,  104 => 28,  95 => 22,  90 => 19,  88 => 17,  80 => 12,  75 => 9,  69 => 8,  57 => 7,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('origin_index') }}">*/
/*        {{ 'origin.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/*      {% block breadcrumbActive %}{{ 'origin.new.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/* <div data-widget-group="group1">*/
/*     <div class="panel panel-primary" data-widget='{"draggable": "false"}'>*/
/*         <div class="panel-heading">*/
/*             <h2><i class="ti ti-pencil-alt"></i> {{ 'origin.new.name'|trans }}</h2>*/
/*             <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>*/
/*         </div>*/
/*         <div class="panel-editbox" data-widget-controls=""></div>*/
/* */
/*         {{ form_start(form ,{*/
/*                         'attr' : { 'class' : 'form-horizontal row-border' } */
/*                     }) }}*/
/* */
/*         <div class="panel-body">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*         <div class="panel-footer">*/
/*             <div class="pull-right">*/
/*                 <button class="btn btn-primary " type="submit">*/
/*                     <i class="ti ti-pencil-alt"></i>*/
/*                     {{ 'origin.new.submit'|trans }}*/
/*                 </button>*/
/*             </div>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
