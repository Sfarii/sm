<?php

/* ISETSOMagazineBundle:activitydomain:new.html.twig */
class __TwigTemplate_bca9d3cf6d22a387da77e9a8c35d4ea7f0fb7746ee437352c8d467f03c476f3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:activitydomain:new.html.twig", 1);
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
        $__internal_4ae13446aa22f8abac0f6aaf6dfdeb1450d7c50f44e96410960bc9f2f99bc189 = $this->env->getExtension("native_profiler");
        $__internal_4ae13446aa22f8abac0f6aaf6dfdeb1450d7c50f44e96410960bc9f2f99bc189->enter($__internal_4ae13446aa22f8abac0f6aaf6dfdeb1450d7c50f44e96410960bc9f2f99bc189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:activitydomain:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ae13446aa22f8abac0f6aaf6dfdeb1450d7c50f44e96410960bc9f2f99bc189->leave($__internal_4ae13446aa22f8abac0f6aaf6dfdeb1450d7c50f44e96410960bc9f2f99bc189_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_fdb55f54e641fbf2ab5ef9106deb7d2d85ef1c6a9eea4b33819c5c01402cb15c = $this->env->getExtension("native_profiler");
        $__internal_fdb55f54e641fbf2ab5ef9106deb7d2d85ef1c6a9eea4b33819c5c01402cb15c->enter($__internal_fdb55f54e641fbf2ab5ef9106deb7d2d85ef1c6a9eea4b33819c5c01402cb15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("activitydomain_index");
        echo "\">
       ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitydomain.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_fdb55f54e641fbf2ab5ef9106deb7d2d85ef1c6a9eea4b33819c5c01402cb15c->leave($__internal_fdb55f54e641fbf2ab5ef9106deb7d2d85ef1c6a9eea4b33819c5c01402cb15c_prof);

    }

    // line 9
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_a67f97e83df7e6287f90ea153fc35fb436328ba7d68e9eaa7ec2d77e16fb0ed9 = $this->env->getExtension("native_profiler");
        $__internal_a67f97e83df7e6287f90ea153fc35fb436328ba7d68e9eaa7ec2d77e16fb0ed9->enter($__internal_a67f97e83df7e6287f90ea153fc35fb436328ba7d68e9eaa7ec2d77e16fb0ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitydomain.new.name"), "html", null, true);
        echo "
";
        
        $__internal_a67f97e83df7e6287f90ea153fc35fb436328ba7d68e9eaa7ec2d77e16fb0ed9->leave($__internal_a67f97e83df7e6287f90ea153fc35fb436328ba7d68e9eaa7ec2d77e16fb0ed9_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_b12459edac279f6e18f44c42727e4e1226559915e9dc75ea97892430e81dd558 = $this->env->getExtension("native_profiler");
        $__internal_b12459edac279f6e18f44c42727e4e1226559915e9dc75ea97892430e81dd558->enter($__internal_b12459edac279f6e18f44c42727e4e1226559915e9dc75ea97892430e81dd558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:activitydomain:new.html.twig", 13)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "form_name" => $this->env->getExtension('translator')->trans("activitydomain.new.name"), "submit_name" => $this->env->getExtension('translator')->trans("activitydomain.new.submit"))));
        
        $__internal_b12459edac279f6e18f44c42727e4e1226559915e9dc75ea97892430e81dd558->leave($__internal_b12459edac279f6e18f44c42727e4e1226559915e9dc75ea97892430e81dd558_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:activitydomain:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 13,  73 => 12,  63 => 10,  57 => 9,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/*     <a href="{{ path('activitydomain_index') }}">*/
/*        {{ 'activitydomain.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
/* {% block breadcrumbActive %}*/
/*     {{ 'activitydomain.new.name'|trans }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': form ,'form_name' : 'activitydomain.new.name'|trans ,'submit_name': 'activitydomain.new.submit'|trans } %}*/
/* {% endblock %}*/
/* */
