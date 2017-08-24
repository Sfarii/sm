<?php

/* ISETSOUserBundle:Profile:edit.html.twig */
class __TwigTemplate_1e00903983962c5896e4a3e0e262990c9b0ec7b353e09cbbc9fc0c7f3075a74a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
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
        $__internal_d40e3b8bcd344b18896cf4f29badf3e7ff999c794826c7ef776f55cf34a82dce = $this->env->getExtension("native_profiler");
        $__internal_d40e3b8bcd344b18896cf4f29badf3e7ff999c794826c7ef776f55cf34a82dce->enter($__internal_d40e3b8bcd344b18896cf4f29badf3e7ff999c794826c7ef776f55cf34a82dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d40e3b8bcd344b18896cf4f29badf3e7ff999c794826c7ef776f55cf34a82dce->leave($__internal_d40e3b8bcd344b18896cf4f29badf3e7ff999c794826c7ef776f55cf34a82dce_prof);

    }

    // line 2
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_85610dedc4d43d9ef37427d916418984f419d7eb5707e7e525974f63bfdb4a66 = $this->env->getExtension("native_profiler");
        $__internal_85610dedc4d43d9ef37427d916418984f419d7eb5707e7e525974f63bfdb4a66->enter($__internal_85610dedc4d43d9ef37427d916418984f419d7eb5707e7e525974f63bfdb4a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.user.setting"), "html", null, true);
        
        $__internal_85610dedc4d43d9ef37427d916418984f419d7eb5707e7e525974f63bfdb4a66->leave($__internal_85610dedc4d43d9ef37427d916418984f419d7eb5707e7e525974f63bfdb4a66_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4083995346136d44684aaf0e89f29c65f180be9e50d2a4421a13093fb453c3ee = $this->env->getExtension("native_profiler");
        $__internal_4083995346136d44684aaf0e89f29c65f180be9e50d2a4421a13093fb453c3ee->enter($__internal_4083995346136d44684aaf0e89f29c65f180be9e50d2a4421a13093fb453c3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div data-widget-group=\"group1\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t";
        // line 7
        $this->loadTemplate("ISETSOUserBundle:Profile:profileMenu.html.twig", "ISETSOUserBundle:Profile:edit.html.twig", 7)->display($context);
        // line 8
        echo "\t\t\t</div>
\t\t\t<div class=\"col-sm-9\">
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t";
        // line 11
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "ISETSOUserBundle:Profile:edit.html.twig", 11)->display($context);
        echo "\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"panel-footer\"></div>
\t\t</div>
\t</div>
";
        
        $__internal_4083995346136d44684aaf0e89f29c65f180be9e50d2a4421a13093fb453c3ee->leave($__internal_4083995346136d44684aaf0e89f29c65f180be9e50d2a4421a13093fb453c3ee_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  60 => 8,  58 => 7,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block breadcrumbActive %}{{ 'menu.user.setting'|trans }}{% endblock %}*/
/* {% block body %}*/
/* 	<div data-widget-group="group1">*/
/* 		<div class="row">*/
/* 			<div class="col-sm-3">*/
/* 				{% include "ISETSOUserBundle:Profile:profileMenu.html.twig" %}*/
/* 			</div>*/
/* 			<div class="col-sm-9">*/
/* 				<div class="tab-content">*/
/* 					{% include "FOSUserBundle:Profile:edit_content.html.twig" %}	*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="panel-footer"></div>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
