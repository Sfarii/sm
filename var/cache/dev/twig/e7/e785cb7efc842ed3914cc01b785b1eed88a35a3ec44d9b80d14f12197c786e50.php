<?php

/* :Template:SingleFormTemplate.html.twig */
class __TwigTemplate_520f178ea69ed9592b828d56e9491fa46e46d6f83b440da141868e297bef9b50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a134bcefc3ca0acc5d8543e54300696c153f31ff1c521fe9e28bd6fb5ca8f58 = $this->env->getExtension("native_profiler");
        $__internal_8a134bcefc3ca0acc5d8543e54300696c153f31ff1c521fe9e28bd6fb5ca8f58->enter($__internal_8a134bcefc3ca0acc5d8543e54300696c153f31ff1c521fe9e28bd6fb5ca8f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Template:SingleFormTemplate.html.twig"));

        // line 1
        echo "<div class=\"col-md-10 col-md-offset-1\" data-widget-group=\"#group1\" >
    <div id=\"group1\" class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h2><i class=\"ti ti-save-alt\"></i> ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["form_name"]) ? $context["form_name"] : $this->getContext($context, "form_name")), "html", null, true);
        echo "</h2>
            <div class=\"panel-ctrls\" data-actions-container=\"\" data-action-collapse='{\"target\": \".panel-body\"}'></div>
        </div>
        <div class=\"panel-editbox\" data-widget-controls=\"\"></div>
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal row-border")));
        echo "
            <div class=\"panel-body\">
                
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                
            </div>
            <div class=\"panel-footer\">
                <div class=\"pull-right\">
                    <button class=\"btn btn-primary \" type=\"submit\">
                        <i class=\"ti ti-save-alt\"></i>
                        ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["submit_name"]) ? $context["submit_name"] : $this->getContext($context, "submit_name")), "html", null, true);
        echo "
                    </button>
                </div>
            </div>
        ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>";
        
        $__internal_8a134bcefc3ca0acc5d8543e54300696c153f31ff1c521fe9e28bd6fb5ca8f58->leave($__internal_8a134bcefc3ca0acc5d8543e54300696c153f31ff1c521fe9e28bd6fb5ca8f58_prof);

    }

    public function getTemplateName()
    {
        return ":Template:SingleFormTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 22,  50 => 18,  40 => 11,  34 => 8,  27 => 4,  22 => 1,);
    }
}
/* <div class="col-md-10 col-md-offset-1" data-widget-group="#group1" >*/
/*     <div id="group1" class="panel panel-primary">*/
/*         <div class="panel-heading">*/
/*             <h2><i class="ti ti-save-alt"></i> {{ form_name }}</h2>*/
/*             <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>*/
/*         </div>*/
/*         <div class="panel-editbox" data-widget-controls=""></div>*/
/*         {{ form_start(form ,{'attr' : { 'class' : 'form-horizontal row-border' } }) }}*/
/*             <div class="panel-body">*/
/*                 */
/*                 {{ form_widget(form) }}*/
/*                 */
/*             </div>*/
/*             <div class="panel-footer">*/
/*                 <div class="pull-right">*/
/*                     <button class="btn btn-primary " type="submit">*/
/*                         <i class="ti ti-save-alt"></i>*/
/*                         {{ submit_name }}*/
/*                     </button>*/
/*                 </div>*/
/*             </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* </div>*/
