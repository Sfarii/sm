<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_6908d1906c01df35b797525b214d6a38ffa7d3eda5523657295d2a25d7df4467 extends Twig_Template
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
        $__internal_3e12b25f9c84ed97388e0b31eac8ad1230bea2c2e80569ed5157abe8cccf87eb = $this->env->getExtension("native_profiler");
        $__internal_3e12b25f9c84ed97388e0b31eac8ad1230bea2c2e80569ed5157abe8cccf87eb->enter($__internal_3e12b25f9c84ed97388e0b31eac8ad1230bea2c2e80569ed5157abe8cccf87eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_3e12b25f9c84ed97388e0b31eac8ad1230bea2c2e80569ed5157abe8cccf87eb->leave($__internal_3e12b25f9c84ed97388e0b31eac8ad1230bea2c2e80569ed5157abe8cccf87eb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
