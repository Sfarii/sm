<?php

/* ISETSOMagazineBundle:typelocal:new.html.twig */
class __TwigTemplate_8353ec823b07e008f5661ebe6849ea4dbe849628c503a6cb63927435ef9668fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:typelocal:new.html.twig", 1);
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
        $__internal_102d7131af1e7935c2bab049093f7433c2402faf6a3a4f87f2c49dace5b643b8 = $this->env->getExtension("native_profiler");
        $__internal_102d7131af1e7935c2bab049093f7433c2402faf6a3a4f87f2c49dace5b643b8->enter($__internal_102d7131af1e7935c2bab049093f7433c2402faf6a3a4f87f2c49dace5b643b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:typelocal:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_102d7131af1e7935c2bab049093f7433c2402faf6a3a4f87f2c49dace5b643b8->leave($__internal_102d7131af1e7935c2bab049093f7433c2402faf6a3a4f87f2c49dace5b643b8_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_19cbbf7c6123f5ff7339c7545cc81bd2f8c20f83d15acb91c8f16b3e25af4449 = $this->env->getExtension("native_profiler");
        $__internal_19cbbf7c6123f5ff7339c7545cc81bd2f8c20f83d15acb91c8f16b3e25af4449->enter($__internal_19cbbf7c6123f5ff7339c7545cc81bd2f8c20f83d15acb91c8f16b3e25af4449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("typelocal_index");
        echo "\">
       ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("typelocal.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_19cbbf7c6123f5ff7339c7545cc81bd2f8c20f83d15acb91c8f16b3e25af4449->leave($__internal_19cbbf7c6123f5ff7339c7545cc81bd2f8c20f83d15acb91c8f16b3e25af4449_prof);

    }

    // line 9
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_2e0bbab9539099e8abd1848caae50f1b16b78d20d925c5baf8933b3eb5ddfeaa = $this->env->getExtension("native_profiler");
        $__internal_2e0bbab9539099e8abd1848caae50f1b16b78d20d925c5baf8933b3eb5ddfeaa->enter($__internal_2e0bbab9539099e8abd1848caae50f1b16b78d20d925c5baf8933b3eb5ddfeaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("typelocal.new.name"), "html", null, true);
        echo "
";
        
        $__internal_2e0bbab9539099e8abd1848caae50f1b16b78d20d925c5baf8933b3eb5ddfeaa->leave($__internal_2e0bbab9539099e8abd1848caae50f1b16b78d20d925c5baf8933b3eb5ddfeaa_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc12269bb45b88f286bed69a796f8da217fd46014919ef7b1bb3c64653ba3eb6 = $this->env->getExtension("native_profiler");
        $__internal_cc12269bb45b88f286bed69a796f8da217fd46014919ef7b1bb3c64653ba3eb6->enter($__internal_cc12269bb45b88f286bed69a796f8da217fd46014919ef7b1bb3c64653ba3eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:typelocal:new.html.twig", 14)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "form_name" => $this->env->getExtension('translator')->trans("typelocal.new.name"), "submit_name" => $this->env->getExtension('translator')->trans("typelocal.new.submit"))));
        
        $__internal_cc12269bb45b88f286bed69a796f8da217fd46014919ef7b1bb3c64653ba3eb6->leave($__internal_cc12269bb45b88f286bed69a796f8da217fd46014919ef7b1bb3c64653ba3eb6_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:typelocal:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 14,  73 => 13,  63 => 10,  57 => 9,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/*     <a href="{{ path('typelocal_index') }}">*/
/*        {{ 'typelocal.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
/* {% block breadcrumbActive %}*/
/*     {{ 'typelocal.new.name'|trans }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': form ,'form_name' : 'typelocal.new.name'|trans ,'submit_name': 'typelocal.new.submit'|trans } %}*/
/* {% endblock %}*/
/* */
