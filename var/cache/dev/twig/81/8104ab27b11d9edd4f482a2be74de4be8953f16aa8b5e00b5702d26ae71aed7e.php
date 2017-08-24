<?php

/* ISETSOUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_5fde0558ce7f6c262770cd5ed56161164c6a5e16d48e6c6d3f2c636269b7ebc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_1054011dc8cc9398ce0fad2f218594afde901f12f4e5544b6bbafd2a37bac4f2 = $this->env->getExtension("native_profiler");
        $__internal_1054011dc8cc9398ce0fad2f218594afde901f12f4e5544b6bbafd2a37bac4f2->enter($__internal_1054011dc8cc9398ce0fad2f218594afde901f12f4e5544b6bbafd2a37bac4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1054011dc8cc9398ce0fad2f218594afde901f12f4e5544b6bbafd2a37bac4f2->leave($__internal_1054011dc8cc9398ce0fad2f218594afde901f12f4e5544b6bbafd2a37bac4f2_prof);

    }

    // line 2
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_f5489f2d11f2508437f0ef2d267a9b2c13bc2324b94a9fa701fabb17c23fd2e2 = $this->env->getExtension("native_profiler");
        $__internal_f5489f2d11f2508437f0ef2d267a9b2c13bc2324b94a9fa701fabb17c23fd2e2->enter($__internal_f5489f2d11f2508437f0ef2d267a9b2c13bc2324b94a9fa701fabb17c23fd2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.user.setting"), "html", null, true);
        
        $__internal_f5489f2d11f2508437f0ef2d267a9b2c13bc2324b94a9fa701fabb17c23fd2e2->leave($__internal_f5489f2d11f2508437f0ef2d267a9b2c13bc2324b94a9fa701fabb17c23fd2e2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5fa2d1d78f0d51c7e3cb340b9db21d966f58a882298ebc284231109f606298b = $this->env->getExtension("native_profiler");
        $__internal_f5fa2d1d78f0d51c7e3cb340b9db21d966f58a882298ebc284231109f606298b->enter($__internal_f5fa2d1d78f0d51c7e3cb340b9db21d966f58a882298ebc284231109f606298b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div data-widget-group=\"group1\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t";
        // line 7
        $this->loadTemplate("ISETSOUserBundle:Profile:profileMenu.html.twig", "ISETSOUserBundle:ChangePassword:changePassword.html.twig", 7)->display($context);
        // line 8
        echo "\t\t\t</div>
\t\t\t<div class=\"col-sm-9\">
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-about\">
\t\t\t\t\t<div class=\"panel panel-default\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
\t\t\t\t\t    <div class=\"panel-heading\">
\t\t\t\t\t    \t<h2>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.user.password"), "html", null, true);
        echo "</h2>
\t\t\t\t\t    </div>
\t\t\t\t\t    ";
        // line 16
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "ISETSOUserBundle:ChangePassword:changePassword.html.twig", 16)->display($context);
        // line 17
        echo "\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t\t\t
";
        
        $__internal_f5fa2d1d78f0d51c7e3cb340b9db21d966f58a882298ebc284231109f606298b->leave($__internal_f5fa2d1d78f0d51c7e3cb340b9db21d966f58a882298ebc284231109f606298b_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  73 => 16,  68 => 14,  60 => 8,  58 => 7,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
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
/* 					<div class="tab-pane active" id="tab-about">*/
/* 					<div class="panel panel-default" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/* 					    <div class="panel-heading">*/
/* 					    	<h2>{{ 'menu.user.password'|trans  }}</h2>*/
/* 					    </div>*/
/* 					    {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* 						*/
/* 					</div>*/
/* 				</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 				*/
/* {% endblock %}*/
/* */
