<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_1f10502065ae3826c6d9b1ed449e756fd3f9754b7701c340ee8372857dff6b88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3308288e7337e11a872e2a0a040b042fdb3774189ca87576e6624a0000eac8dd = $this->env->getExtension("native_profiler");
        $__internal_3308288e7337e11a872e2a0a040b042fdb3774189ca87576e6624a0000eac8dd->enter($__internal_3308288e7337e11a872e2a0a040b042fdb3774189ca87576e6624a0000eac8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3308288e7337e11a872e2a0a040b042fdb3774189ca87576e6624a0000eac8dd->leave($__internal_3308288e7337e11a872e2a0a040b042fdb3774189ca87576e6624a0000eac8dd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_831d467994a5afd4b6e5acb3037af2b5d2b490fcf444472bc3d8daeae2f63b7b = $this->env->getExtension("native_profiler");
        $__internal_831d467994a5afd4b6e5acb3037af2b5d2b490fcf444472bc3d8daeae2f63b7b->enter($__internal_831d467994a5afd4b6e5acb3037af2b5d2b490fcf444472bc3d8daeae2f63b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_831d467994a5afd4b6e5acb3037af2b5d2b490fcf444472bc3d8daeae2f63b7b->leave($__internal_831d467994a5afd4b6e5acb3037af2b5d2b490fcf444472bc3d8daeae2f63b7b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_35c213e50bcd554c85355a8858384e0549f11236539baa3804b1549e3aa5b264 = $this->env->getExtension("native_profiler");
        $__internal_35c213e50bcd554c85355a8858384e0549f11236539baa3804b1549e3aa5b264->enter($__internal_35c213e50bcd554c85355a8858384e0549f11236539baa3804b1549e3aa5b264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_35c213e50bcd554c85355a8858384e0549f11236539baa3804b1549e3aa5b264->leave($__internal_35c213e50bcd554c85355a8858384e0549f11236539baa3804b1549e3aa5b264_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
