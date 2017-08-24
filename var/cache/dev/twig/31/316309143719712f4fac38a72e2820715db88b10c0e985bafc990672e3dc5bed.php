<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f27bbe4f08feb82fea18f38d3f152a13e3743f5f95c357b211399397da2ad465 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_89be9eff7326e83b5bb01941ad2a238fb7c42fa9bab1bd08843aee1e7c269c0f = $this->env->getExtension("native_profiler");
        $__internal_89be9eff7326e83b5bb01941ad2a238fb7c42fa9bab1bd08843aee1e7c269c0f->enter($__internal_89be9eff7326e83b5bb01941ad2a238fb7c42fa9bab1bd08843aee1e7c269c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89be9eff7326e83b5bb01941ad2a238fb7c42fa9bab1bd08843aee1e7c269c0f->leave($__internal_89be9eff7326e83b5bb01941ad2a238fb7c42fa9bab1bd08843aee1e7c269c0f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06dbe3b7d6914fe5f2732ed238250d9aced772faf947b0673a0d6926f4266e64 = $this->env->getExtension("native_profiler");
        $__internal_06dbe3b7d6914fe5f2732ed238250d9aced772faf947b0673a0d6926f4266e64->enter($__internal_06dbe3b7d6914fe5f2732ed238250d9aced772faf947b0673a0d6926f4266e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_06dbe3b7d6914fe5f2732ed238250d9aced772faf947b0673a0d6926f4266e64->leave($__internal_06dbe3b7d6914fe5f2732ed238250d9aced772faf947b0673a0d6926f4266e64_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5262bec0519d3f49a183272e4390dbcaf12d78b32caf1b7a89e4145d3904cde3 = $this->env->getExtension("native_profiler");
        $__internal_5262bec0519d3f49a183272e4390dbcaf12d78b32caf1b7a89e4145d3904cde3->enter($__internal_5262bec0519d3f49a183272e4390dbcaf12d78b32caf1b7a89e4145d3904cde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5262bec0519d3f49a183272e4390dbcaf12d78b32caf1b7a89e4145d3904cde3->leave($__internal_5262bec0519d3f49a183272e4390dbcaf12d78b32caf1b7a89e4145d3904cde3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1a712aaac85ce0fc25c0d9728301768fe910c1add274d2f2841f0ad219c40aae = $this->env->getExtension("native_profiler");
        $__internal_1a712aaac85ce0fc25c0d9728301768fe910c1add274d2f2841f0ad219c40aae->enter($__internal_1a712aaac85ce0fc25c0d9728301768fe910c1add274d2f2841f0ad219c40aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1a712aaac85ce0fc25c0d9728301768fe910c1add274d2f2841f0ad219c40aae->leave($__internal_1a712aaac85ce0fc25c0d9728301768fe910c1add274d2f2841f0ad219c40aae_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
