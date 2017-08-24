<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f9574a8df7cbaf1ebc82c6111f5c023e7e049266fe58f93208aa6ce6e9c38b3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fdf386cfab2966f034ad24b97dabb85ccedaeab2901a5993af62698e960f21af = $this->env->getExtension("native_profiler");
        $__internal_fdf386cfab2966f034ad24b97dabb85ccedaeab2901a5993af62698e960f21af->enter($__internal_fdf386cfab2966f034ad24b97dabb85ccedaeab2901a5993af62698e960f21af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdf386cfab2966f034ad24b97dabb85ccedaeab2901a5993af62698e960f21af->leave($__internal_fdf386cfab2966f034ad24b97dabb85ccedaeab2901a5993af62698e960f21af_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da08a12887ca6b373789505e60782beadf848c9746c394a371cb30436b76178c = $this->env->getExtension("native_profiler");
        $__internal_da08a12887ca6b373789505e60782beadf848c9746c394a371cb30436b76178c->enter($__internal_da08a12887ca6b373789505e60782beadf848c9746c394a371cb30436b76178c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_da08a12887ca6b373789505e60782beadf848c9746c394a371cb30436b76178c->leave($__internal_da08a12887ca6b373789505e60782beadf848c9746c394a371cb30436b76178c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f803cd9aedf59a67615853b5facd61def8ce205882b489cce4b502791f6c4553 = $this->env->getExtension("native_profiler");
        $__internal_f803cd9aedf59a67615853b5facd61def8ce205882b489cce4b502791f6c4553->enter($__internal_f803cd9aedf59a67615853b5facd61def8ce205882b489cce4b502791f6c4553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f803cd9aedf59a67615853b5facd61def8ce205882b489cce4b502791f6c4553->leave($__internal_f803cd9aedf59a67615853b5facd61def8ce205882b489cce4b502791f6c4553_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0620dc3ec029e9b8ae127d7ee7bc69ac1b6077f0ef499a7b359d1e74dd9c1c17 = $this->env->getExtension("native_profiler");
        $__internal_0620dc3ec029e9b8ae127d7ee7bc69ac1b6077f0ef499a7b359d1e74dd9c1c17->enter($__internal_0620dc3ec029e9b8ae127d7ee7bc69ac1b6077f0ef499a7b359d1e74dd9c1c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0620dc3ec029e9b8ae127d7ee7bc69ac1b6077f0ef499a7b359d1e74dd9c1c17->leave($__internal_0620dc3ec029e9b8ae127d7ee7bc69ac1b6077f0ef499a7b359d1e74dd9c1c17_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
