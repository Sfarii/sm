<?php

/* ISETSOUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_47bd67e578434d3c55deead44b57e43e4998d6d689a92b7c60dc550e11b010e6 extends Twig_Template
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
        $__internal_dc4dd20145389088c5e57abbd745dff8c778ec3aa960be2ec37c46abf2bac56a = $this->env->getExtension("native_profiler");
        $__internal_dc4dd20145389088c5e57abbd745dff8c778ec3aa960be2ec37c46abf2bac56a->enter($__internal_dc4dd20145389088c5e57abbd745dff8c778ec3aa960be2ec37c46abf2bac56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOUserBundle:Profile:edit_content.html.twig"));

        // line 1
        echo "<div class=\"panel\">
    <div class=\"panel-heading\">
        <h2>";
        // line 3
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.user.setting", array(), "messages");
        echo "</h2>
    </div>
    <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"form-horizontal row-border\" novalidate=\"novalidate\">
        <div class=\"panel-body\">
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
        <div class=\"panel-footer\">
            <div class=\"pull-right\">
               <input type=\"submit\" class=\"btn-primary btn\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
        </div>
    </form>
</div>
";
        
        $__internal_dc4dd20145389088c5e57abbd745dff8c778ec3aa960be2ec37c46abf2bac56a->leave($__internal_dc4dd20145389088c5e57abbd745dff8c778ec3aa960be2ec37c46abf2bac56a_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  38 => 7,  31 => 5,  26 => 3,  22 => 1,);
    }
}
/* <div class="panel">*/
/*     <div class="panel-heading">*/
/*         <h2>{% trans %}menu.user.setting{% endtrans %}</h2>*/
/*     </div>*/
/*     <form action="{{ path('fos_user_profile_edit') }}" {{ form_enctype(form) }} method="POST" class="form-horizontal row-border" novalidate="novalidate">*/
/*         <div class="panel-body">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*         <div class="panel-footer">*/
/*             <div class="pull-right">*/
/*                <input type="submit" class="btn-primary btn" value="{{ 'profile.edit.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* </div>*/
/* */
