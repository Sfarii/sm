<?php

/* ISETSOUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_a6e17fa51b2474d12ec58a743441c86d3d0a1e306da38a172aa8f693e8ea8798 extends Twig_Template
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
        $__internal_c6cf96f329c9171b68e44e6096bad607dadf8a487bb95d41a6d1cd74f73d1ba2 = $this->env->getExtension("native_profiler");
        $__internal_c6cf96f329c9171b68e44e6096bad607dadf8a487bb95d41a6d1cd74f73d1ba2->enter($__internal_c6cf96f329c9171b68e44e6096bad607dadf8a487bb95d41a6d1cd74f73d1ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOUserBundle:ChangePassword:changePassword_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"form-horizontal row-border\" novalidate=\"novalidate\">
\t<div class=\"panel-body\">
\t\t<div class=\"about-area\">
\t\t\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t</div>
\t</div>
    <div class=\"panel-footer\">
\t    <div class=\"pull-right\">
\t       <input type=\"submit\" class=\"btn-primary btn\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t    </div>
\t</div>
</form>
";
        
        $__internal_c6cf96f329c9171b68e44e6096bad607dadf8a487bb95d41a6d1cd74f73d1ba2->leave($__internal_c6cf96f329c9171b68e44e6096bad607dadf8a487bb95d41a6d1cd74f73d1ba2_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  31 => 4,  22 => 1,);
    }
}
/* <form action="{{ path('fos_user_change_password') }}" {{ form_enctype(form) }} method="POST" class="form-horizontal row-border" novalidate="novalidate">*/
/* 	<div class="panel-body">*/
/* 		<div class="about-area">*/
/* 			{{ form_widget(form) }}*/
/* 		</div>*/
/* 	</div>*/
/*     <div class="panel-footer">*/
/* 	    <div class="pull-right">*/
/* 	       <input type="submit" class="btn-primary btn" value="{{ 'profile.edit.submit'|trans({}, 'FOSUserBundle') }}" />*/
/* 	    </div>*/
/* 	</div>*/
/* </form>*/
/* */
